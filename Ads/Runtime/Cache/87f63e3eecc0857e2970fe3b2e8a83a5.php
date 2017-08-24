<?php if (!defined('THINK_PATH')) exit();?><html>
  
<head>
    <title>
    兔子的漫画采集站点
    </title>
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />-->
    <link href="__PUBLIC__/se7en/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" />
    <link href="__PUBLIC__/se7en/stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <!--<link href="__PUBLIC__/se7en/stylesheets/layer.css" media="all" rel="stylesheet" type="text/css" />-->
    <script src="__PUBLIC__/se7en/javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery-ui.js" type="text/javascript"></script>
    
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body>
 
<div class="modal-shiftfix">
<!-- Navigation -->
<div class="navbar navbar-fixed-top scroll-hide">
  <style type="text/css">
	.navbar .container-fluid.top-bar .logo {
      background: url("__PUBLIC__/se7en/images/pxtar-logo.png") no-repeat 0 0;
      background-size:90px;
          width: 100px;
    	height: 30px;
  }
</style>
<div class="container-fluid top-bar">
          
          <!-- <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="index-2.html">se7en</a>
          <form class="navbar-form form-inline col-lg-2 hidden-xs">
            <input class="form-control" placeholder="Search" type="text">
          </form> -->


 		<div class="pull-right">
            <ul class="nav navbar-nav pull-right">
				<li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
	                <img width="34" height="34" src="__PUBLIC__/se7en/images/user.png" />管理员<b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                 <!--  <li><a href="#">
	                    <i class="icon-user"></i>My Account</a>
	                  </li>
	                  <li><a href="#">
	                    <i class="icon-gear"></i>Account Settings</a>
	                  </li> -->
	                  <li><a href="<?php echo U('Logout','',false);?>">
	                    <i class="icon-signout"></i>Logout</a>
	                  </li>
	                </ul>
              	</li>

            </ul>
           </div>
<button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="index-2.html">Pxtar</a>
        </div>
  <div class="container-fluid main-nav clearfix">
    <div class="nav-collapse">
      <ul class="nav">
        <li>
          <a href="<?php echo U('/index/index','',false);?>" <?php if(__ACTION__=='/index/index'):?>class="current"<?php endif;?>><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
        </li>
        
      </ul>
    </div>
  </div>

        
</div>
<!-- End Navigation -->
</div>
<style>
.datepicker.dropdown-menu {
    z-index:2500 !important;
}
</style>
<div class="container-fluid main-content">
  <div class="page-title">
    <h1>
      漫画采集
    </h1>
  </div>
  
  <div class="row">
      <div class="col-lg-12">
        <div class="widget-container fluid-height">

            <div class="heading tabs">            
              <ul class="nav nav-tabs pull-left" data-tabs="tabs" id="tabs">
                <li  <?php if(__ACTION__=='/index/index'):?>class="active"<?php endif;?>>
                  <a href="<?php echo U('index','',false);?>"><i class="icon-linux"></i><span>QQ</span></a>
                </li>
                <li <?php if(__ACTION__=='/index/wangyi'):?>class="active"<?php endif;?>>
                  <a href="<?php echo U('wangyi','',false);?>"><i class="icon-paper-clip"></i><span>网易</span></a>
                </li>
                <li <?php if(__ACTION__=='/index/buka'):?>class="active"<?php endif;?>>
                  <a href="<?php echo U('buka','',false);?>"><i class="icon-bold"></i><span>布卡</span></a>
                </li>
              </ul>
            </div>

            <div class="heading">
                <a class="btn btn-sm btn-primary-outline pull-left" href="javascript:void(0);" id="del_comic"><i class="icon-remove-sign"></i>删除漫画</a>
                <a class="btn btn-sm btn-primary-outline pull-left"  href="javascript:void(0);" id="addComicBtn"><i class="icon-plus"></i>添加漫画</a>
                <a class="btn btn-sm btn-primary-outline pull-right"  data-toggle="modal" href="#exportData"><i class="icon-download"></i>导出Excel</a>
                <a class="btn btn-sm btn-primary-outline pull-right"  href="javascript:void(0);" id="gather_comic"><i class="icon-play"></i>开始采集</a>
            </div>

            <div class="widget-content padded clearfix">
               <table class="table table-bordered table-striped">
                <thead>
                  <th class="check-header hidden-xs">
                    <label><input id="checkAll" name="checkAll" type="checkbox"><span></span></label>
                  </th>
                  <th>漫画</th>
                  <th>地址</th>
                  <th width="75"></th>
                </thead>
                <tbody id="comic_tbody">
                <?php if(!empty($data)):?>
                    <?php foreach($data as $comic):?>
                      <tr><td class="check hidden-xs"><label><input name="delCheckbox" type="checkbox" value="<?php echo $comic['id']; ?>" /><span></span></label></td><td><?php echo $comic['name']; ?></td><td><?php echo $comic['url']; ?></td><td class="actions"><div class="action-buttons"><a class="table-actions removeComic" custom_attr="<?php echo $comic['id']; ?>" href="javascript:;"><i class="icon-trash"></i></a></div></td></tr>
                    <?php endforeach;?>
                <?php else: ?>
                  <tr><td colspan="4" align="center">还没有添加漫画，快去添加吧</td></tr>
                <?php endif;?>
                </tbody>
              </table>
            </div>

           
        </div>
      </div>
    </div>

  <!-- add comic -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
          <h4 class="modal-title">
            设置
          </h4>
        </div>
        <form action="" method="POST" class="form-horizontal" id="addComicForm">
          <div class="modal-body">

            <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                  <div class="heading">
                    <i class="icon-reorder"></i>添加漫画
                  </div>
                  <div class="widget-content padded">
                      <div class="form-group">
                        <label class="control-label col-sm-2">漫画名</label>
                        <div class="col-sm-8">
                          <input class="form-control"  type="text" name="comicName" id="comicName"/>
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-sm-2">地址</label>
                        <div class="col-sm-8">
                          <input class="form-control"  type="text" name="comicUrl"  id="comicUrl"/>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="modal-footer">
            <button class="btn btn-primary" type="submit" id="addComic">提交</button><button class="btn btn-default-outline" data-dismiss="modal" type="button" id="cancelComic">取消</button>
          </div>
        </form>

      </div>
       
      </div>

  </div>
  <!--  add comic end-->


  <!-- 开始采集进度条 -->
  <div class="modal fade" id="gatherProgressBar">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
          <h4 class="modal-title">
            开始采集
          </h4>
        </div>
        
        <div class="modal-body">

          <div class="col-lg-12">
              <div class="widget-container fluid-height clearfix">
                <div class="heading">
                  <i class="icon-reorder"></i>
                </div>
                <div class="widget-content padded">
                   <div class="form-group">
                      <div class="progress progress-striped active"  id="progressBarDiv">
                      </div>
                    </div>
                    <ul>
                        <li>
                          <span style="color:#60c560;">绿色条</span> 代表采集成功
                        </li>
                        <li>
                          <span style="color:#d9534f;">红色条</span> 代表采集失败
                        </li>
                    </ul>
                </div>
              </div>
            </div>
        </div>

        <div class="modal-footer">        
          <button class="btn btn-default-outline" data-dismiss="modal" type="button" id="cancelCaiji">中断采集操作</button>
        </div>
      </div>
    </div>
  </div>
  <!--  开始采集进度条 end-->

  <!-- 导出 -->
  <div class="modal fade" id="exportData">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
          <h4 class="modal-title">
            导出
          </h4>
        </div>
        <form action="<?php echo U('export','',false);?>" method="POST" class="form-horizontal" id="exportForm">
          <input type="hidden" name="type" value="<?php if(__ACTION__=='/index/index'):?>1<?php elseif(__ACTION__=='/index/wangyi'):?>2<?php elseif(__ACTION__=='/index/buka'):?>3<?php endif;?>" />
          <div class="modal-body">

            <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                  <div class="heading">
                    <i class="icon-reorder"></i>请选择导出的时间范围
                  </div>
                  <div class="widget-content padded">
                      <div class="form-group">
                        <div class="col-sm-5">
                          <input class="form-control" data-date-autoclose="true" data-date-format="yyyy-mm-dd" id="dpd1" placeholder="开始时间" type="text" name="beginDate">
                        </div>
                        <div class="col-sm-5">
                          <input class="form-control" data-date-autoclose="true" data-date-format="yyyy-mm-dd" id="dpd2" placeholder="截止时间" type="text" name="endDate">
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="modal-footer">
            <button class="btn btn-primary" type="submit" id="exportComic">导出</button>
            <button class="btn btn-default-outline" data-dismiss="modal" type="button" id="cancelExport">取消</button>
          </div>
        </form>

      </div>
       
      </div>

  </div>
  <!--  导出 end-->

  <!-- buka 验证码 -->
  <div class="modal" id="bukaVerify">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
          <h4 class="modal-title">
            开始采集
          </h4>
        </div>
        <form action="<?php echo U('caijibuka','',false);?>" method="POST" class="form-horizontal" id="caijiBukaForm">
          <div class="modal-body">

            <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                  <div class="heading">
                    <i class="icon-reorder"></i>输入验证码
                  </div>
                  <div class="widget-content padded">                      
                      <div class="col-sm-3">                      
                        <img src="" id="verifyCodeImg"/>                        
                      </div>               
                      <div class="col-sm-3">
                          <input class="form-control"  type="text" name="verifyCode" id="verifyCode" />
                      </div>
                      <div class="col-sm-2">                          
                          <button class="btn btn-primary" type="submit" id="exportComic">提交</button>
                      </div>
                      <div class="col-sm-1">
                        <a class=""  href="javascript:void(0);" id="refreshImg"><i class="icon-refresh"></i></a>
                      </div>
                  </div>
                </div>
              </div>
          </div>

        </form>

      </div>
       
      </div>

  </div>
  <!-- buka 验证码 end-->


</div>

</div>


<script type="text/javascript">
var total=finish=fail=0;
var clockId;
var is_done=0;
var load_id=is_load=0;
//归零
function resetAll(){
    is_load=load_id=is_done=clockId=total=finish=fail=0;
    $("#gatherProgressBar").modal('hide'); 
    $("#progressBarDiv").html("");
}

//进度条
function progressBar(wait_num,finish_num,fail_num){
    wait_num=parseInt(wait_num);
    finish_num=parseInt(finish_num);
    fail_num=parseInt(fail_num);
    if(clockId==0){
        //多余的进程
        console.log('extra one!')
        return false;
    }
    if(total==0){
        total=wait_num+finish_num+fail_num;
    }
    if((finish_num>0 || fail_num>0) && is_load==1){
        layer.close(load_id);
    }
    //console.log('test: '+finish_num+'-'+finish);
    if(finish_num>finish){
        console.log('success: '+finish_num+'/'+total);
        var tmp=(finish_num-finish)/total*100;
        finish=finish_num;
        
        $("#progressBarDiv").append('<div class="progress-bar progress-bar-success" style="width: 0%" ></div>').children(".progress-bar:last").animate({width:tmp+"%"},800);
        if(wait_num==0 && is_done==0){
            is_done=1;
            clearInterval(clockId);
            console.log('-end-');
            var t=finish_num+fail_num;
            setTimeout(function(){   
                resetAll();  
                layer.open({
                    content: '采集任务完成！结果——<br/><center><span style="color:#60c560;">成功: '+finish_num+'/'+t+'</span><br/><span style="color:#d9534f;">失败: '+fail_num+'/'+t+'</span></center>',
                    btn: '知道了',
                    yes:function(index){                                           
                        layer.close(index);
                    },
                });
            },2000);
        }
    }
    if(fail_num>fail){
        console.log('fail: '+fail_num+'/'+total);
        var tmp2=(fail_num-fail)/total*100;
        fail=fail_num;
        $("#progressBarDiv").append('<div class="progress-bar progress-bar-danger" style="width: 0%"></div>').children(".progress-bar:last").animate({width:tmp2+"%"},800);
        if(wait_num==0 && is_done==0){
            is_done=1;
            clearInterval(clockId);
            console.log('-end-');
            var t=finish_num+fail_num;
            setTimeout(function(){
                resetAll();  
                layer.open({
                    content: '采集任务完成！结果——<br/><center><span style="color:#60c560;">成功: '+finish_num+'/'+t+'</span><br/><span style="color:#d9534f;">失败: '+fail_num+'/'+t+'</span></center>',
                    btn: '知道了',
                    yes:function(index){
                        layer.close(index);
                    },
                });
            },2000);
        }
    } 
}
//检查采集进度，将结果反馈给进度条控制方法
function checkCaiji(){
    var result=[]; 
    $.ajax({
          type: "POST",
          url: "<?php echo U('checkProgress','',false);?>"+'/'+Math.random(),
          data: {type:<?php if(__ACTION__=='/index/index'):?>1<?php elseif(__ACTION__=='/index/wangyi'):?>2<?php elseif(__ACTION__=='/index/buka'):?>3<?php endif;?>},
          cache:false,
          dataType:'json',
          asyncs:true,
          success: function(data){
            //console.log(data);

            if(data.status==1){
                result=data.data;
                //console.log(result.wait+'---'+result.finish+'---'+result.fail);
                progressBar(result.wait,result.finish,result.fail);
            }else{
                //alert(data.info);
                console.log('-1-');
            }

          },
      });
}
//检查采集进度，将结果反馈给进度条控制方法
function checkCaijiProgress(){
    console.log('-begin-');
    load_id=layer.load();
    is_load=1;
    $("#progressBarDiv").html("");
    $("#gatherProgressBar").modal('show');
    clockId=setInterval(checkCaiji,2000);
}
//checkCaijiProgress();
//checkCaiji();
$(function(){
  var num=0;
  

  //添加漫画
  function addData(comicName,comicUrl,id){
    $("#comic_tbody").prepend('<tr><td class="check hidden-xs"><label><input name="delCheckbox" type="checkbox" value="'+id+'" /><span></span></label></td><td>'+comicName+'</td><td>'+comicUrl+'</td><td class="actions"><div class="action-buttons"><a class="table-actions removeComic" custom_attr="'+id+'"  href="javascript:;"><i class="icon-trash"></i></a></div></td></tr>');
  }

  

  //单独删除
  $(document).delegate(".removeComic","click",function(){
      var _this=$(this);
      var id=_this.attr("custom_attr");
      $.ajax({
            type: "POST",
            url: "<?php echo U('delComic','',false);?>",
            data: {id:id},
            cache:false,
            dataType:'json',

            success: function(msg){
                if(msg.status==1){
                    alert("删除成功");
                    _this.parents("tr").remove();
                }else{
                    alert(msg.info);
                }
            },

        }); 
      
      
      //comics=$.grep(comics,function(ele){
      //    return ele.id!=id;
      //});
  });

  //批量删除
  $(document).delegate("#del_comic","click",function(){
      var ids=[];
      $(":checked[name='delCheckbox']").each(function(index){
        var id=$(this).val();
        ids.push(id);
       // _this.parents("tr").remove();
      });
      
      var ids_str=ids.join(',');
      //console.log(ids_str);
      $.ajax({
            type: "POST",
            url: "<?php echo U('delMultiComic','',false);?>",
            data: {ids:ids_str},
            cache:false,
            dataType:'json',
            success: function(msg){
                if(msg.status==1){
                    alert("删除成功");
                    $(":checked[name='delCheckbox']").each(function(index){
                        $(this).parents("tr").remove();
                    });
                }else{
                    alert(msg.info);
                }
            },

        }); 
  });

  //点击添加comic按钮
  $(document).delegate("#addComicBtn","click",function(){
      $("#addComicForm").get(0).reset();
      $("#myModal").modal('show');
  });


  //添加comic
  $("#addComicForm").on("submit",function(){
      

      var name =$.trim(this.comicName.value);
      var comicUrl =$.trim(this.comicUrl.value);

      $.ajax({
            type: "POST",
            url: "<?php echo U('addComic','',false);?>",
            data: {name:name,url:comicUrl,type:<?php if(__ACTION__=='/index/index'):?>1<?php elseif(__ACTION__=='/index/wangyi'):?>2<?php elseif(__ACTION__=='/index/buka'):?>3<?php endif;?>},
            cache:false,
            dataType:'json',
            success: function(msg){
                if(msg.status==1){
                    addData(name,comicUrl,msg.data);
                    $("#myModal").modal('hide');
                }else{
                    alert(msg.info);
                }
            },

        }); 
      return false;
  });

  //导出
  $("#exportForm").on("submit",function(){

      var beginDate =$.trim($("#dpd1").val());
      var endDate   =$.trim($("#dpd2").val()); 
      if( beginDate=='' && endDate=='' ){alert("请至少选择一个时间");return false;}
      return;
      $.ajax({
            type: "POST",
            url: "<?php echo U('export','',false);?>",
            data: {beginDate:beginDate,endDate:endDate,type:<?php if(__ACTION__=='/index/index'):?>1<?php elseif(__ACTION__=='/index/wangyi'):?>2<?php elseif(__ACTION__=='/index/buka'):?>3<?php endif;?>},
            cache:false,
            dataType:'json',
            success: function(msg){
              //alert('导出成功！');

            },

        }); 
      return false;
      
  });

  <?php if(__ACTION__=='/index/index'):?>
  //开始抓取
  $(document).delegate("#gather_comic",'click',function(index){
      //ajaxLoading.start();
      $.ajax({
            type: "POST",
            url: "<?php echo U('caijiqq','',false);?>",
            data: {},
            cache:false,
            dataType:'json',
            success: function(msg){
              //console.log(msg);
              if(msg.status==1){
                  
              }else{
                  
              }
              //ajaxLoading.end();
            },
        });
      checkCaijiProgress();
      return false;
  });
  <?php elseif(__ACTION__=='/index/wangyi'):?>

  //开始抓取
  $(document).delegate("#gather_comic",'click',function(index){ 
      $.ajax({
            type: "POST",
            url: "<?php echo U('caijiwangyi','',false);?>",
            data: {},
            cache:false,
            dataType:'json',            
            success: function(msg){
              //console.log(msg);
              if(msg.status==1){
                  
              }else{
                  
              }
            },
        });
      checkCaijiProgress();
      return false;
  });

  <?php elseif(__ACTION__=='/index/buka'):?>

  //验证码
  $(document).delegate("#gather_comic,#refreshImg,#verifyCodeImg",'click',function(index){
      $("#verifyCode").val("");
      $.ajax({
            type: "POST",
            url: "<?php echo U('caijibukaimg','',false);?>",
            data: "",
            cache:false,
            dataType:'json',
            success: function(msg){

              $("#verifyCodeImg").attr("src","__PUBLIC__/images/verify_img.jpg?"+Math.random());
              $("#bukaVerify").modal('show');
            },
        });
      
      return;
  });
  

    //开始抓取
  $(document).delegate("#caijiBukaForm",'submit',function(index){
      $("#bukaVerify").modal('hide');
      var verifyCode=$("#verifyCode").val();
      $.ajax({
            type: "POST",
            url: "<?php echo U('caijibuka','',false);?>"+'?'+Math.random(),
            data: {verifyCode:verifyCode},
            cache:false,
            dataType:'json',
            success: function(msg){
              
              //console.log(msg);
              if(msg.status==1){
                //ajaxLoading.end();

              }else{ //验证码错误
                  layer.close(load_id);
                  clearInterval(clockId);
                  resetAll();
                  layer.alert(msg.info);
              }
            },
        });
        /*$.ajax({
            type: "POST",
            url: "<?php echo U('test','',false);?>",
            data: {},
            cache:false,
            dataType:'json',
            success: function(msg){
              
            },
        });*/
      checkCaijiProgress();
      return false;
  });
  <?php endif;?>
  
  //中断采集
  $(document).delegate("#cancelCaiji","click",function(){
      clearInterval(clockId);
      resetAll();
  });

});
</script>>

    </div>
	
    <script src="__PUBLIC__/se7en/javascripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/raphael.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/selectivizr-min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/fullcalendar.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/gcal.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/datatable-editable.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/excanvas.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/isotope_extras.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/modernizr.custom.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/select2.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/styleswitcher.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/wysiwyg.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/summernote.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.inputmask.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.validate.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-fileupload.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-timepicker.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-colorpicker.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/typeahead.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/daterange-picker.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/date.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/morris.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/skycons.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/fitvids.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/main.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/respond.js" type="text/javascript"></script>
<!--   se7en自带的  <script src="__PUBLIC__/se7en/javascripts/layer.js" type="text/javascript"></script>
 -->
 <script src="__PUBLIC__/vendors/layer/layer.js" type="text/javascript"></script>
  </body>

</html>