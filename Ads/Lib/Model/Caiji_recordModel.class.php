<?php
/**
 * <Caiji_record表>数据操作model 
 *
 * */
class Caiji_recordModel extends Model {

        
    // 定义自动验证
    protected $_validate    =   array(
        );

    // 定义自动完成
    protected $_auto = array( 
         array('caiji_date','datedd',1,'callback'),
     );
    
    function datedd(){
        return date("Y-m-d",time());
    }
}