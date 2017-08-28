<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action
{

    const TYPE_QQ = 1;

    const TYPE_WANGYI = 2;

    const TYPE_BUKA = 3;

    const STATUS_WAIT = 0;

    const STATUS_FINISH = 1;

    const STATUS_FAIL = 2;

    function __construct()
    {
        parent::__construct();
        error_reporting(E_ALL);
        $is_login = session('is_login');
        if (empty($is_login) && ! $_POST) {
            layout(false);
            $this->display('login');
            exit();
        }
        // exit;
    }

    public function index()
    {
        $data = M("Comics");
        $result = $data->where("`is_del`='0' AND `type`='1'")
            ->order("`id` DESC")
            ->select();
        // echo '<pre>';print_r($result);die;
        
        layout('Layout/layout');
        $this->assign([
            'data' => $result
        ]);
        $this->display('detail');
    }

    public function wangyi()
    {
        $data = M("Comics");
        $result = $data->where("`is_del`='0' AND `type`='2'")
            ->order("`id` DESC")
            ->select();
        // echo '<pre>';print_r($result);die;
        error_reporting(E_ALL);
        layout('Layout/layout');
        $this->assign([
            'data' => $result
        ]);
        $this->display('detail');
    }

    public function buka()
    {
        $data = M("Comics");
        $result = $data->where("`is_del`='0' AND `type`='3'")
            ->order("`id` DESC")
            ->select();
        // echo '<pre>';print_r($result);die;
        error_reporting(E_ALL);
        layout('Layout/layout');
        $this->assign([
            'data' => $result
        ]);
        $this->display('detail');
    }

    public function export()
    {
        set_time_limit(0);
        // 引入PHPExcel库文件
        Vendor('PHPExcel.PHPExcel');
        ini_set("memory_limit", "2048M");
        // 创建对象
        $excel = new PHPExcel();
        // Excel表格式,这里简略写了8列
        $letter = array(
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H'
        );
        // 分站点处理
        $type = $this->_post('type') ? $this->_post('type') : 1;
        if ($type == '1') {
            $name = 'QQ';
            // 表头数组
            $tableheader = array(
                '采集日期',
                '采集时间',
                '作品名',
                '收藏量',
                '人气值',
                '月票',
                '话题数'
            );
        } elseif ($type == 2) {
            $name = '网易';
            // 表头数组
            $tableheader = array(
                '采集日期',
                '采集时间',
                '作品名',
                '人气值',
                '吐槽数',
                '评论数'
            );
        } elseif ($type == 3) {
            $name = '布卡';
            // 表头数组
            $tableheader = array(
                '采集日期',
                '采集时间',
                '作品名',
                '收藏量',
                '战斗力'
            );
        }
        // echo '<pre>';print_r($letter);print_r($tableheader);die();
        // 填充表头信息
        for ($i = 0; $i < count($tableheader); $i ++) {
            $excel->getActiveSheet()->setCellValue("$letter[$i]1", "$tableheader[$i]");
        }
        // 表格数组
        $beginDate = $this->_post('beginDate') ? $this->_post('beginDate') : '2017-01-01';
        $endDate = $this->_post('endDate') ? $this->_post('endDate') : date("Y-m-d", time());
        $type = $this->_post('type') ? $this->_post('type') : 1;
        
        $form = M("Caiji_record");
        $record = $form->field(" r.`result` ")
            ->alias('r')
            ->join(" `comics` c ON c.`id`=r.`comic_id` ")
            ->where(" c.`type`='%d' AND `caiji_date`>='%s' AND `caiji_date`<='%s'", $type, $beginDate, $endDate)
            ->select();
        // echo $form->_sql();die;
        // echo '<pre>';print_r($data);die();
        $data = [];
        
        foreach ($record as $value) {
            $data[] = json_decode($value['result']);
        }
        
        // echo '<pre>';print_r($record);print_r($data);die;
        // 填充表格信息
        for ($i = 2; $i <= count($data) + 1; $i ++) {
            $j = 0;
            foreach ($data[$i - 2] as $key => $value) {
                $excel->getActiveSheet()->setCellValue("$letter[$j]$i", "$value");
                $j ++;
            }
        }
        
        // 创建Excel输入对象
        $write = new \PHPExcel_Writer_Excel5($excel);
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        header('Content-Disposition:attachment;filename="' . $name . '_采集_' . date("Y_m_d") . '.xls"');
        header("Content-Transfer-Encoding:binary");
        $write->save('php://output');
        exit();
    }

    /**
     * ajax添加comic
     */
    public function addComic()
    {
        $name = $this->_post('name');
        $url = $this->_post('url');
        $type = $this->_post('type');
        $form = D('Comics');
        $data['name'] = $name;
        $data['url'] = $url;
        $data['type'] = $type;
        
        if ($form->create($data, 1)) {
            $result = $form->add();
            if ($result) {
                // $this->success('successful!',[],TRUE);
                $this->ajaxReturn($result, 'successful!', 1);
            } else {
                $this->ajaxReturn($result, 'fail!', 0);
            }
        } else {
            $this->error($form->getError());
        }
    }

    /**
     * ajax删除comic
     */
    public function delComic()
    {
        $id = $this->_post('id');
        $form = M('Comics');
        // echo "`id`='".$id."'";die;
        $result = $form->where("`id`='" . $id . "'")->setField('is_del', 1);
        // echo $result;die;
        if ($result) {
            $this->ajaxReturn($result, 'successful!', 1);
        } else {
            $this->ajaxReturn($result, 'fail!', 0);
        }
    }

    /**
     * ajax删除多个comic
     */
    public function delMultiComic()
    {
        $ids = $this->_post('ids');
        $id_ar = explode(",", $ids);
        $condition = "('" . implode("','", $id_ar) . "')";
        $form = M('Comics');
        $result = $form->where("`id` IN " . $condition)->setField('is_del', 1);
        
        if ($result) {
            $this->ajaxReturn($result, 'successful!', 1);
        } else {
            $this->ajaxReturn($result, 'fail!', 0);
        }
    }

    public function caijiqq()
    {
        session_write_close();
        set_time_limit(0);
        $caiji_model = new CaijiModel();
        $result = $caiji_model->getComicInfo(self::TYPE_QQ);
        // echo '<pre>';print_r($result);die;
        
        if (empty($result)) {
            $this->ajaxReturn([], '还没有添加漫画！', 0);
            exit();
        }
        
        // 初始化所有待采集漫画的状态
        $caiji_model->initComicStatus(self::TYPE_QQ);
        
        // 共有配置
        $preg_id = "/id\/([^?]+)/iu";
        $preg_sc = "/id=\"coll_count\">([^<]+)<\/em>/iu";
        $preg_rq = "/<span>.*<em>([^<]+)<\/em>/iu";
        // $preg_pj = "/\(<span>(\d+)</iu";
        $preg_topic = "/<em[^>]+>([^<]+)</iu";
        $date = date('Y-m-d');
        $time = date('H:i:s');
        
        foreach ($result as $comic) {
            $ar = $arr2 = [];
            $name = $comic['name'];
            $url = $comic['url'];
            $comic_id = $comic['id'];
            
            // 获取漫画ID (url中的ID，不是我们自己命名的数据表ID)
            preg_match_all($preg_id, $url, $arr2, PREG_SET_ORDER);
            $id = $arr2[0][1];
            // echo '<pre>';print_r($arr2);die;
            if (empty($id) || ! is_numeric($id)) {
                $caiji_model->failComicGathering($comic_id);
                continue;
            }
            
            // 要获取信息的地址
            $url_target = $url;
            
            // 来源页面
            $referer_url = 'http://ac.qq.com/Comic/comicInfo/id/' . $id;
            
            // 获取目标页的信息
            $content = $caiji_model->get_content($url_target, $referer_url);
            
            $ar['date'] = $date;
            $ar['time'] = $time;
            $ar['name'] = $name;
            
            // 收藏
            preg_match_all($preg_sc, $content, $arr, PREG_SET_ORDER);
            $ar['attension'] = $arr[0][1];
            
            // 人气
            preg_match_all($preg_rq, $content, $arr, PREG_SET_ORDER);
            $ar['popularity'] = $arr[0][1];
            
            // 评价数\话题数
            // preg_match_all($preg_pj, $content, $arr, PREG_SET_ORDER);
            // $ar['comments'] = $arr[0][1];
            
            // 本月月票，需要重新抓取一次
            $url_target = "http://ac.qq.com/Comic/getMonthTicketInfo/id/" . $id . "?_=" . $caiji_model->getRamdom(10000000000, 100000000000);
            $content = $caiji_model->get_content($url_target, $referer_url);
            $content = json_decode($content);
            // $ar['monthTicketTotal'] = $content->monthTicket->monthTotal;
            $ar['monthTicketTotal'] = $content->monthTicket->mtNum;
            
            // 评价数\话题数，需要抓取一次新页面
            $url_topic = "http://ac.qq.com/Community/topicList?targetId=" . $id . "&page=1&_=" . $caiji_model->getRamdom(10000000000, 100000000000);
            $content2 = $caiji_model->get_content($url_topic, $referer_url);
            preg_match_all($preg_topic, $content2, $arr, PREG_SET_ORDER);
            $ar['topic'] = $arr[0][1];
            
            // 组装数据
            // $record[$time_key]['c_'.$id]=$ar;
            $record['c_' . $comic_id] = $ar;
            // 输出内容
            
            /*
             * $dir ="./caiji_record";
             * $file =IndexAction::QQ_FILE;
             * if(!file_exists($dir))mkdir($dir);
             * if(file_exists($file)){
             * $old_record=include($file);
             * if(!empty($old_record)){
             * if(isset($old_record[$time_key])){
             * $record[$time_key]=array_merge($old_record[$time_key],$record[$time_key]);
             * }
             * $record=array_merge($old_record,$record);
             * }
             *
             * ksort($record);
             * }else{
             * print('empty');
             * }
             * $strContent = "<?php \n return ".var_export($record, true)."\n;";
             * file_put_contents($file, $strContent);
             */
            $caiji_model->upsert($ar, $comic_id, self::TYPE_QQ);
            $caiji_model->finishComicGathering($comic_id);
        }
        $caiji_model->delCookie();
        // echo '<pre>';print_r($record);die();
        $this->ajaxReturn([], 'success', 1);
        // $this->success('sucess',U('index','',false),true);
    }

    public function caijiwangyi()
    {
        session_write_close();
        set_time_limit(0);
        $caiji_model = new CaijiModel();
        $result = $caiji_model->getComicInfo(self::TYPE_WANGYI);
        // echo '<pre>';print_r($result);die;
        
        if (empty($result)) {
            $this->ajaxReturn([], '还没有添加漫画！', 0);
            exit();
        }
        
        // 初始化所有待采集漫画的状态
        $caiji_model->initComicStatus(self::TYPE_WANGYI);
        
        // 共有配置
        $preg_rq = "/<dd><span>([^<]+)<\/span>/iu";
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $caiji_model = new CaijiModel();
        
        foreach ($result as $comic) {
            $ar = [];
            $name = $comic['name'];
            $url = $comic['url'];
            $comic_id = $comic['id'];
            
            // 获取漫画ID
            $id = substr($url, strrpos($url, '/') + 1);
            if (empty($id) || ! is_numeric($id)) {
                $caiji_model->failComicGathering($comic_id);
                continue;
            }
            
            // 其他数据
            $ar['date'] = $date;
            $ar['time'] = $time;
            $ar['name'] = $name;
            
            // 人气和吐槽
            $content = $caiji_model->get_content($url, $url, 1);
            preg_match_all($preg_rq, $content, $arr, PREG_SET_ORDER);
            if (count($arr) > 0) {
                $ar['populary'] = $arr[0][1];
                $ar['grumble'] = $arr[1][1];
            } else {
                $ar['populary'] = 0;
                $ar['grumble'] = 0;
            }
            
            // 评论
            $url2 = 'https://manhua.163.com/comment/' . $id . '/comments.json?bookId=' . $id . '&offset=0&total=true&limit=1&page=1&pageSize=1&_=' . $caiji_model->getRamdom(100000000000, 1000000000000);
            $content = $caiji_model->get_content($url2, $url, 1);
            $data = json_decode($content);
            $ar['commentCount'] = $data->commentCount;
            
            // 组装数据
            $record['c_' . $comic_id] = $ar;
            // 输出内容
            // echo '<pre>';print_r($record);die;
            $caiji_model->upsert($ar, $comic_id, self::TYPE_WANGYI);
            $caiji_model->finishComicGathering($comic_id);
        }
        $caiji_model->delCookie();
        
        $this->ajaxReturn([], 'success', 1);
    }

    public function caijibukaimg()
    {
        $model = new CaijiModel();
        /* 第一步：模拟访问获取cookie */
        // 登录页
        $url_login = "http://td.buka.cn";
        // 访问
        $model->visit4cookie($url_login);
        
        /* 第二步：用该cookie再去访问验证码获取页面 */
        // 验证码获取页面
        $imgUrl = 'http://td.buka.cn/views/res/code/captcha.php?' . $model->getRamdom();
        // 验证码图片保存地址
        $img = './Public/images/verify_img.jpg';
        $model->getImg($imgUrl, $img);
        $this->ajaxReturn([
            'img' => $img
        ], "新增成功！", 1);
    }

    public function caijibuka()
    {
        session_write_close();
        set_time_limit(0);
        $caiji_model = new CaijiModel();
        $comicAr = $caiji_model->getComicInfo(self::TYPE_BUKA);
        // echo '<pre>';print_r($result);die;
        
        if (empty($comicAr)) {
            $this->ajaxReturn([], '还没有添加漫画！', 0);
            exit();
        }
        
        // 初始化所有待采集漫画的状态
        $caiji_model->initComicStatus(self::TYPE_BUKA);
        
        // 获取输入的验证码
        $verifyCode = $this->_post('verifyCode');
        
        /* 第三步：模拟数据+手动输入数据组合，模拟登陆 */
        
        // 设置post的数据
        $post = array(
            'uname' => 'x@pxtar.com',
            'password' => md5('xierui123'),
            'vcode' => $verifyCode,
            'login' => '1'
        );
        // echo '---<pre>';print_r($post);die;
        // 登录目标地址
        $url_login = "http://td.buka.cn/user/login";
        // 来源页面
        $referer = 'http://td.buka.cn/';
        // 模拟登录
        $login_result = $caiji_model->login_post($url_login, $post, $referer);
        // echo '---<pre>';print_r($aa);die;
        $login_result = json_decode($login_result);
        // echo '<pre>';print_r($login_result);die;
        if ($login_result->ret != 0) { // 验证码错误
            $caiji_model->delCookie();
            $this->ajaxReturn([], '验证码错误', 0);
            exit();
        }
        // 共有配置
        $preg_1 = "/window\.open\('([^']+)/iu";
        $preg_2 = "/<h4>([^<]+)</iu";
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $url_zhongzhuan = "http://td.buka.cn/user/manga"; // 中转页
        
        /* 第四步：进入中转页获取列表页url，再从列表页进入目标页获取最终数据 */
        // 获取登中转页的信息
        $content = $caiji_model->get_content($url_zhongzhuan, $referer, 1);
        // 匹配页面信息
        preg_match_all($preg_1, $content, $arr, PREG_SET_ORDER);
        
        // 列表页地址
        $url_target2 = $arr[0][1];
        // echo $url_target2;die;
        // 匹配页面信息
        $caiji_model->visit4cookie($url_target2);
        
        foreach ($comicAr as $comic) {
            $ar = [];
            $name = $comic['name'];
            $url = $comic['url'];
            $comic_id = $comic['id'];
            
            // 获取漫画ID
            $id = substr($url, strrpos($url, '=') + 1);
            if (empty($id) || ! is_numeric($id)) {
                $caiji_model->failComicGathering($comic_id);
                continue;
            }
            
            // 最终页面
            // $url = 'http://td-stat.sosobook.cn/mangainfo.php?mid=' . $id;
            // echo $url;die;
            $content = $caiji_model->get_content($url, $url_zhongzhuan);
            // echo $content;die;
            preg_match_all($preg_2, $content, $arr, PREG_SET_ORDER);
            
            // 组装数据
            $ar['date'] = $date;
            $ar['time'] = $time;
            $ar['name'] = $name;
            $ar['attension'] = $arr[0][1]; // 收藏数
            $ar['strenghth'] = $arr[1][1]; // 战斗力
            
            $record['c_' . $comic_id] = $ar;
            // 输出内容
            // echo '<pre>';print_r($record);die;
            $caiji_model->upsert($ar, $comic_id, self::TYPE_BUKA);
            $caiji_model->finishComicGathering($comic_id);
        }
        $caiji_model->delCookie();
        $this->ajaxReturn([], 'success', 1);
    }

    /**
     * 检查采集进度，将结果反馈给前端处理进度条
     */
    public function checkProgress()
    {
        session_write_close();
        set_time_limit(0);
        $type = $this->_post("type");
        
        $model = new CaijiModel();
        $result['wait'] = $model->getComicStatusInfo($type, self::STATUS_WAIT);
        $result['finish'] = $model->getComicStatusInfo($type, self::STATUS_FINISH);
        $result['fail'] = $model->getComicStatusInfo($type, self::STATUS_FAIL);
        $this->ajaxReturn($result, '数据获取成功！', 1);
    }

    /**
     * 登陆
     */
    function login()
    {
        $username = $this->_post("usr");
        $pwd = $this->_post("pwd");
        if ($_POST) {
            if ($username != 'pxtar' || $pwd != 'Pxtar2017^') {
                $this->error("账号或者密码错误！", U('index', '', false));
            } else {
                session('is_login', '1');
                $this->success("登陆成功！", U('index', '', false));
            }
        } else {
            $this->error("error", U('index', '', false));
        }
    }

    /**
     * 登出
     */
    function logout()
    {
        session('is_login', '0');
        $this->success("已登出！", U('index', '', false));
    }

    public function test()
    {
        // set_time_limit(0);
        session_write_close();
        sleep(10);
    }
}

?>