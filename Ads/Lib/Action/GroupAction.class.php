<?php
/**
 * 广告组类
 * */
class GroupAction extends Action {

    public function __construct(){
        parent::__construct();
        require_once getcwd().'/GoogleAPI/init.php';
        layout('Layout/layout');
    }
    
    public function index(){   
        $campaignId  =$this->_get('campaignId');
        if(!empty($campaignId)){
            
        }
        //echo $campaignId;die;
        /*google*/
        error_reporting(E_ALL);
        $file="./adGroups.php";
        $adGroups=[];
        $api=1;
        if($api==1){
            try {   
                // Run the example.
                $model    = new GoogleModel();
                $adGroups = $model->GetAdGroups($campaignId);
            } catch (Exception $e) {
                printf("An error has occurred: %s\n", $e->getMessage());
            }
            
            $str    =var_export($adGroups,true);
            $str    ="<?php return ".$str.";?>";
            $count  =file_put_contents($file, $str);
        }
        
        //echo '<pre>';print_r($adGroups);die;
        
        /*google end*/
        if(!$adGroups){
            $adGroups= require_once($file);
        }
        //$campaigns='';
        
        $data['adGroups']=$adGroups; 
        $this->assign($data);
        
        $this->display('adGroups');
    }
    
    
    public function add(){
        error_reporting(E_ALL);
        if($_POST){
            //echo '<pre>';print_r($_POST);die;            
            $campaignId  =$this->_post('campaignId');
            $name       =$this->_post('name');
            $cpc_amount =$this->_post('cpc_amount');
            
            try {
                $model=new GoogleModel();
                $result=$model->AddAdGroups($campaignId, $name, $cpc_amount);
                
                if(isset($result->value)){
                    $this->success('已经成功添加广告组',U('index','',false));
                }else{
                    $this->error('添加失败',U('index','',false)); 
                }
                //echo '<pre>';print_r($result);die;
            } catch (Exception $e) {
                printf("An error has occurred: %s\n", $e->getMessage());
            }
        }else{
            /*google*/           
            $file="./campaigns.php";
            $campaigns=[];                        
            $api=0;
            if($api==1){                
                try {
                    // Run the example.
                    $model=new GoogleModel();
                    $campaigns=$model->GetCampaigns();
                } catch (Exception $e) {
                    printf("An error has occurred: %s\n", $e->getMessage());
                }
            
                $str    =var_export($campaigns,true);
                $str    ="<?php return ".$str.";?>";
                $count  =file_put_contents($file, $str);
                
            }
            /*google end*/
            if(!$campaigns){
                $campaigns= require_once($file);
            }
            //echo '<pre>';print_r($campaigns);die;
            $data['campaigns']=$campaigns;
            $this->assign($data);
            
            $this->display('add');
        }
    }
    
    public function addAd(){
        if($_POST){
            //echo '<pre>';print_r($_POST);die;
            $adGroupId      =$this->_post('adGroupId');
            $headlinePart1  =$this->_post('headline1');
            $headlinePart2  =$this->_post('headline2');
            $description    =$this->_post('desc');
            $finalUrls      =$this->_post('finalUrl');
            $path1          =$this->_post('path1');
            $path2          =$this->_post('path2');
             
            try {
                $model=new GoogleModel();
                $result=$model->AddExpandedTextAds($adGroupId, $headlinePart1, $headlinePart2, $description, $finalUrls, $path1, $path2);
                //echo '<pre>';print_r($result);die;
                if(isset($result->value)){
                    $this->success('成功添加广告',U('index','',false));
                }else{
                    $this->error('添加失败',U('index','',false));
                }
            } catch (Exception $e) {
                printf("An error has occurred: %s\n", $e->getMessage());
            }
        }
    }
    
    public function update(){
        if($_POST){
            //echo '<pre>';print_r($_POST);die;
            $adGroupId              =$this->_post('id');
            $update=[];
            $update['name']         =$this->_post('name');
            $update['status']       =$this->_post('status');
            $update['cpc_amount']   =$this->_post('cpc_amount');
           
            try {
                $model=new GoogleModel();
                $result=$model->UpdateAdGroup($update,$adGroupId);
                //echo '<pre>';print_r($result);die;
                if(isset($result->value)){
                    $this->success('已经成功修改广告系列',U('index','',false));
                }else{
                    $this->error('编辑失败',U('index','',false));
                }
            } catch (Exception $e) {
                printf("An error has occurred: %s\n", $e->getMessage());
            }
        }
    }
    
    public function remove(){
        if(IS_POST){
            $adGroupId =$this->_post('adGroupId');
            try {
                $model=new GoogleModel();
                $result=$model->RemoveAdGroup($adGroupId);
                //echo '<pre>';print_r($result);die;
                if(isset($result->value)){                    
                    $this->ajaxReturn([],'已经成功删除该广告组',1);
                }else{
                    $this->ajaxReturn([],'操作失败',0);
                }
            } catch (Exception $e) {
                $this->ajaxReturn([],'系统错误',0);
            }
        }else{
            $this->ajaxReturn([],'请求方式错误',0);
        }
    }
    
    public function detail(){
        error_reporting(E_ALL);
        $adGroupId =$this->_get('adGroupId');
        //$adGroupId=36383408392;
        
        $file="./adGroups_detail.php";
        $file2="./adGroups_ads.php";
        $file3="./adGroups_keywords.php";
        $adGroup=[];
        $api=1;
        /*google*/
        if($api==1){            
            try {
                // Run the example.
                $model      =new GoogleModel();
                $adGroup    =$model->GetAdGroupDetail($adGroupId);
                $ads        =$model->GetAdGroupAds($adGroupId);
                $keywords   =$model->GetKeywords($adGroupId);
            } catch (Exception $e) {
                printf("An error has occurred: %s\n", $e->getMessage());
            }
            
            $str    =var_export($adGroup,true);
            $str    ="<?php return ".$str.";?>";
            $count  =file_put_contents($file, $str);
            
            $str    =var_export($ads,true);
            $str    ="<?php return ".$str.";?>";
            $count2  =file_put_contents($file2, $str);
            
            $str    =var_export($keywords,true);
            $str    ="<?php return ".$str.";?>";
            $count3  =file_put_contents($file3, $str);
        }
        /*google end*/
        if(!$adGroup){
            $adGroup    = require_once($file);
            $ads        = require_once($file2);
            $keywords   = require_once($file3);
        }
        //echo '<pre>';print_r($adGroup);print_r($ads);print_r($keywords);die;
    
        $data['adGroup']    =$adGroup;
        $data['ads']        =$ads;
        $data['keywords']   =$keywords;
        $data['adGroupId']  =$adGroupId;
        
        $this->assign($data);    
        $this->display('detail');
    }
    
    
    public function updateKeyword(){
        if($_POST){
            //echo '<pre>';print_r($_POST);die;
            $adGroupId      =$this->_post('adGroupId');
            $ids            =$this->_post('ids');
            $status         =$this->_post('status');
            $criterionId_ar =explode('|', $ids);
            try {
                $model=new GoogleModel();
                $result=$model->UpdateKeyword($adGroupId,$status, $criterionId_ar);
                //echo '<pre>';print_r($result);die;
                if(isset($result->value)){
                    $this->ajaxReturn([],'已经成功修改关键字状态',1);
                }else{
                    $this->ajaxReturn([],'编辑失败',0);
                }
            } catch (Exception $e) {
                printf("An error has occurred: %s\n", $e->getMessage());
            }
        }else{
            $this->ajaxReturn([],'传递方式错误',0);
        }
    }
    
    
}