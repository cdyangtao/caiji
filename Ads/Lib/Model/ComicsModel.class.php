<?php
/**
 * <comics表>数据操作model 
 *
 * */
class ComicsModel extends Model {

        
    // 定义自动验证
    protected $_validate    =   array(
        array('name','require','漫画名必填',1),
        array('url','require','地址必填',1),
        );

    // 定义自动完成
    protected $_auto = array( 
         array('is_del','0'),  // 新增的时候把status字段设置为1
         array('create_at','datetime',1,'callback'),
         array('update_at','datetime',3,'callback'),
     );
    
    function datetime(){
        return date("Y-m-d H:i:s",time());
    }
}