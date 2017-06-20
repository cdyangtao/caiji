<?php
// 本类由系统自动生成，仅供测试用途
class CampaignAction extends Action {

    public function __construct(){
        parent::__construct();
        // Include the initialization file
        require_once getcwd().'/GoogleAPI/init.php';
        layout('Layout/layout');
    }
   
    public function index(){

        /*google*/
        error_reporting(E_ALL);
        $file="./campaigns.php";
        $campaigns=[];
        
        $api=1;
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
        
        //echo '<pre>';print_r($campaigns);die;
        //echo $count;die;
        
        /*google end*/
        if(!$campaigns){
            $campaigns= require_once($file);
        }
        //$campaigns='';
        
        $data['campaigns']=$campaigns; 
        $this->assign($data);
        
        $this->display('campaigns');
    }
    
    
    public function add(){
        if($_POST){
            //echo '<pre>';print_r($_POST);die;
            $budget_money=$this->_post('budget_money');
            $campaignName=$this->_post('campaignName');
            try {
                $model=new GoogleModel();
                $result=$model->addCampaigns($budget_money,$campaignName);
                
                if(isset($result->value)){
                    $this->success('已经成功添加广告系列',U('index','',false));
                }else{
                    $this->error('添加失败',U('index','',false)); 
                }
                //echo '<pre>';print_r($result);die;
            } catch (Exception $e) {
                printf("An error has occurred: %s\n", $e->getMessage());
            }
        }else{
            $this->display('add');
        }
    }
    
    public function update(){
        if($_POST){
            //echo '<pre>';print_r($_POST);die;
            $campaignId                 =$this->_post('campaignId');
            $update=[];
            $update['name']             =$this->_post('name');
            $update['status']           =$this->_post('status');
            $update['budget_id']        =$this->_post('budgetId');
            //$update['budget_amount']    =$this->_post('budget_amount');
            //$update['servingStatus']=$this->_post('servingStatus');
            //$update['startDate']    =$this->_post('startDate');
            //$update['endDate']      =$this->_post('endDate');            
            //$update['adServingOptimizationStatus']=$this->_post('adServingOptimizationStatus');
            //$update['name']         =$this->_post('name');
           
            try {
                $model=new GoogleModel();
                $result=$model->UpdateCampaign($update,$campaignId);
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
            $campaignId =$this->_post('campaignId');
            
            try {
                $model=new GoogleModel();
                $result=$model->RemoveCampaign($campaignId);
                //echo '<pre>';print_r($result);die;
                if(isset($result->value)){                    
                    $this->ajaxReturn([],'已经成功删除该广告系列',1);
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
}