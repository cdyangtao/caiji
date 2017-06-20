<?php

function object_to_array($obj)
{
    $_arr = is_object($obj) ? get_object_vars($obj) : $obj;
    foreach ($_arr as $key => $val) {
        $val = (is_array($val) || is_object($val)) ? object_to_array($val) : $val;
        $arr[$key] = $val;
    }
    return $arr;
}

/**
 * 抓取相关的方法
 */
class CaijiModel extends Model
{
    public $ck;//设置cookie保存路径
    
 // 设置cookie保存路径
    public function __construct()
    {
        //define("$this->ck",APP_PATH.'ck.txt');
        $this->ck=APP_PATH.'ck.txt';
        //echo $this->ck;die;
    }
    
    // 模拟访问登录页面获取cookie
    function visit4cookie($url)
    {
        $curl = curl_init(); // 初始化curl模块
        curl_setopt($curl, CURLOPT_URL, $url); // 登录提交的地址
        curl_setopt($curl, CURLOPT_HEADER, 0); // 是否显示头信息
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 是否自动显示返回的信息
        curl_setopt($curl, CURLOPT_COOKIEFILE, $this->ck);
        curl_setopt($curl, CURLOPT_COOKIEJAR, $this->ck); // 设置Cookie信息保存在指定的文件中
        curl_exec($curl); // 执行cURL
        curl_close($curl); // 关闭cURL资源，并且释放系统资源
    }
    
    // 模拟登录
    function login_post($url, $post, $referer)
    {
        $curl = curl_init(); // 初始化curl模块
        curl_setopt($curl, CURLOPT_URL, $url); // 登录提交的地址
        curl_setopt($curl, CURLOPT_HEADER, 0); // 是否显示头信息
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 是否自动显示返回的信息
        curl_setopt($curl, CURLOPT_REFERER, $referer);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.82 Safari/537.36');
        curl_setopt($curl, CURLOPT_COOKIEFILE, $this->ck);
        curl_setopt($curl, CURLOPT_COOKIEJAR, $this->ck); // 设置Cookie信息保存在指定的文件中
        curl_setopt($curl, CURLOPT_POST, 1); // post方式提交
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post)); // 要提交的信息
        $aa=curl_exec($curl); // 执行cURL
        curl_close($curl); // 关闭cURL资源，并且释放系统资源
        return $aa;
    }

    /**
     * 方法名 getImg
     * 参数 图片的URL、保存图片信息的路径、保存cookie的文件路径
     * 功能 访问验证码图片并报存在本地供提取验证码
     * 返回值 无（仅将内容保存在文件当中）
     */
    function getImg($imgUrl, $img)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $imgUrl);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_TIMEOUT, 120); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_COOKIEFILE, $this->ck);
        curl_setopt($curl, CURLOPT_COOKIEJAR, $this->ck);
        $rs = curl_exec($curl);
        // 把验证码在本地生成，二次拉取验证码可能无法通过验证
        @file_put_contents("$img", $rs);
        curl_close($curl);
    }
    
    // 登录成功后获取数据
    function get_content($url, $referer, $ssl = 0)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.82 Safari/537.36');
        curl_setopt($curl, CURLOPT_REFERER, $referer);
        curl_setopt($curl, CURLOPT_COOKIEFILE, $this->ck); // 传递cookie
        curl_setopt($curl, CURLOPT_COOKIEJAR, $this->ck); // 读取cookie
        if ($ssl == 1) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 信任任何证书
        }
        
        $rs = curl_exec($curl); // 执行cURL抓取页面内容
        curl_close($curl);
        return $rs;
    }
    
    // 获取随机数
    function getRamdom($min = 0, $max = 1)
    {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }
    
    // 删除cookie
    function delCookie()
    {
        @ unlink($this->ck);
    }
    
    // 添加和修改数据库的判断操作
    function upsert($dataAr, $comic_id,$type)
    {
        $form = D("Caiji_record");
        
        $where['comic_id']   = $comic_id;
        $where['caiji_date'] = $date=date("Y-m-d");
        //echo $date;die;
        $record = $form->where($where)->find();
        if (! empty($record)) {
            $tmp = [
                'result' => json_encode($dataAr)
            ];
            $num = $form->where($where)->save($tmp);//返回影响数
        } else {
            $tmp = [
                'comic_id' => $comic_id,
                'result' => json_encode($dataAr),
                'caiji_date' => $date,
                'c_type' => $type,
            ];
            $data= $form->create($tmp);
            $num = $form->add($tmp);//返回ID
        }
        return $num;
    }
    
    /**
     * 获取人工添加的漫画数据列表
     * */
    function getComicInfo($type=1){
        $model = M("Comics");
        $result = $model->where("`is_del`='0' AND `type`='".$type."' ")
        ->order("`id` DESC")
        ->select();
        // echo '<pre>';print_r($result);die;
        return $result;
    }
    
    /**
     * 获取人工添加的漫画数据
     * */
    function initComicStatus($type=1){
        $update['status']=0;
        $model = M("Comics");
        $result = $model->where("`is_del`='0' AND `type`='".$type."' ")
        ->save($update);
        // echo '<pre>';print_r($result);die;
        return $result;
    }
    
    /**
     * 修改单部漫画的状态
     * */
    function finishComicGathering($comic_id){
        $update['status']=1;
        $model = M("Comics");
        $result = $model->where(['id'=>$comic_id])
        ->save($update);
        // echo '<pre>';print_r($result);die;
        return $result;
    }
    
    /**
     * 修改单部漫画的状态
     * */
    function failComicGathering($comic_id){
        $update['status']=2;
        $model = M("Comics");
        $result = $model->where(['id'=>$comic_id])
        ->save($update);
        // echo '<pre>';print_r($result);die;
        return $result;
    }
    
    /**
     * 或者漫画的采集状态及对应数量
     * */
    function getComicStatusInfo($type,$status){
        $model = M("Comics");
        
        $result = $model->field("count(*) as num")->where("`is_del`='0' AND `type`='{$type}' AND `status`='{$status}' ")
        ->find();
        //echo $model->_sql();
        //echo '<pre>';print_r($result);die;
        return $result['num'];
    }
}






















