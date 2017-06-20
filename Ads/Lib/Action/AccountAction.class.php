<?php
// 本类由系统自动生成，仅供测试用途
class AccountAction extends Action {

    public function __construct(){
        parent::__construct();
        // Include the initialization file
        require_once getcwd().'/GoogleAPI/init.php';
        layout('Layout/layout');
    }
   
    public function index(){       
        $data['customer_id']=$this->_session('customer_id');
        $this->assign($data);
        $this->display('account');
    }
    
    
    
    
    public function set(){
        
        $customer_id =$this->_post('customer_id');
        //echo $customer_id;die;
        //$this->_session('customer_id',$customer_id);
        $_SESSION['customer_id']=$customer_id;
        //echo $_SESSION['customer_id'];die;
        $this->success('子账户设置成功',U('index','',false));
        
    }
}