<?php if (!defined('THINK_PATH')) exit();?><html>
  
<head>
    <title>
    title
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
    <link href="__PUBLIC__/se7en/stylesheets/layer.css" media="all" rel="stylesheet" type="text/css" />
    <script src="__PUBLIC__/se7en/javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/se7en/javascripts/jquery-ui.js" type="text/javascript"></script>
    
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body>
 
<div class="modal-shiftfix">
<!-- Navigation -->
<div class="navbar navbar-fixed-top scroll-hide">
  <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
              <li class="dropdown notifications hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-flag"></span>
                  <div class="sr-only">
                    Notifications
                  </div>
                  <p class="counter">
                    4
                  </p>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New user added: Jane Smith
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      Sales targets available
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New performance metric added
                    </p></a>
                    
                  </li>
                  <li><a href="#">
                    <div class="notifications label label-info">
                      New
                    </div>
                    <p>
                      New growth data available
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li class="dropdown messages hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-envelope"></span>
                  <div class="sr-only">
                    Messages
                  </div>
                  <p class="counter">
                    3
                  </p>
                </a>
                <ul class="dropdown-menu messages">
                  <li><a href="#">
                    <img width="34" height="34" src="images/avatar-male2.png" />Could we meet today? I wanted...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="images/avatar-female.png" />Important data needs your analysis...</a>
                  </li>
                  <li><a href="#">
                    <img width="34" height="34" src="images/avatar-male2.png" />Buy Se7en today, it's a great theme...</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown settings hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-gear"></span>
                  <div class="sr-only">
                    Settings
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span>Blue</a>
                  </li>
                  <li>
                    <a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span>Green</a>
                  </li>
                  <li>
                    <a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span>Orange</a>
                  </li>
                  <li>
                    <a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span>Magenta</a>
                  </li>
                  <li>
                    <a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span>Gray</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img width="34" height="34" src="images/avatar-male.jpg" />John Smith<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">
                    <i class="icon-user"></i>My Account</a>
                  </li>
                  <li><a href="#">
                    <i class="icon-gear"></i>Account Settings</a>
                  </li>
                  <li><a href="login1.html">
                    <i class="icon-signout"></i>Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="index-2.html">se7en</a>
          <form class="navbar-form form-inline col-lg-2 hidden-xs">
            <input class="form-control" placeholder="Search" type="text">
          </form>
        </div>
  <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a href="<?php echo U('/index/index','',false);?>" <?php if(__ACTION__=='/index/index'):?>class="current"<?php endif;?>><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
              </li>
              
             
             <!-- 广告系列 -->
              <li class="dropdown"><a data-toggle="dropdown" <?php if(__URL__=='/campaign'):?>class="current"<?php endif;?> href="jsvascript:;">
                <span aria-hidden="true" class="se7en-feed"></span>广告系列<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="<?php echo U('/campaign/index','',false);?>" <?php if(__ACTION__=='/campaign/index'):?>class="current"<?php endif;?>>所有广告系列</a>
                  </li>
                  <li>
                    <a href="<?php echo U('/campaign/add','',false);?>" <?php if(__ACTION__=='/campaign/add'):?>class="current"<?php endif;?> >添加广告系列</a>
                  </li>                  
                </ul>
              </li>

              <!-- 广告组 -->
              <li class="dropdown"><a data-toggle="dropdown" <?php if(__URL__=='/group'):?>class="current"<?php endif;?> href="jsvascript:;">
                <span aria-hidden="true" class="se7en-feed"></span>广告组<b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li>
                    <a href="<?php echo U('/group/index','',false);?>" <?php if(__ACTION__=='/group/index'):?>class="current"<?php endif;?>>所有广告组</a>
                  </li>
                  <li>
                    <a href="<?php echo U('/group/add','',false);?>" <?php if(__ACTION__=='/group/add'):?>class="current"<?php endif;?> >添加广告组</a>
                  </li>     
                </ul>
              </li>

             

              <li><a href="<?php echo U('/account/index','',false);?>" <?php if(__ACTION__=='/group/add'):?>class="current"<?php endif;?>>
                <span aria-hidden="true" class="se7en-tables"></span>设置子账户</a>
              </li>
             
            </ul>
          </div>
        </div>

        
</div>
<!-- End Navigation -->
</div>
<div class="container-fluid main-content">
  <div class="page-title">
    <h1>
      漫画采集
    </h1>
  </div>
  <!-- DataTables Example -->
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        


        <div class="heading tabs">
          <ul class="nav nav-tabs pull-left" data-tabs="tabs" id="tabs">
            <li  class="active">
              <a data-toggle="tab" href="#qq"><i class="icon-linux"></i><span>腾讯</span></a>
            </li>
            <li>
              <a data-toggle="tab" href="#ads"><i class="icon-paper-clip"></i><span>网易</span></a>
            </li>
            <li>
              <a data-toggle="tab" href="#keywords"><i class="icon-bold"></i><span>布卡</span></a>
            </li>
          </ul>
        </div>

        <div class="heading">
            <a class="btn btn-sm btn-primary-outline pull-right" data-toggle="modal" href="#myModal" id="add-campaign"><i class="icon-plus"></i>添加漫画</a>
          </div>

        <div class="tab-content padded" id="my-tab-content">

          

          <!-- QQ -->
          <div class="tab-pane active" id="qq"> 

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
                <tbody>
                  
                  <tr>
                    <td class="check hidden-xs">
                      <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                    </td>
                    <td>1</td>
                    <td>---</td>
                   
                    <td class="actions">
                      <div class="action-buttons">
                       <a class="table-actions removeCampaign" custom_attr="<?php echo $campaign['id']; ?>"  href="javascript:;"><i class="icon-trash"></i></a>
                      </div>
                    </td>
                  </tr>  
                </tbody>
              </table>
            </div>
          </div>
          <!-- qq end -->

          <!-- 163 -->
          <div class="tab-pane" id="wangyi">     

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
                <tbody>
                  
                  <tr>
                    <td class="check hidden-xs">
                      <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                    </td>
                    <td>2</td>
                    <td>---</td>
                   
                    <td class="actions">
                      <div class="action-buttons">
                       <a class="table-actions removeCampaign" custom_attr="<?php echo $campaign['id']; ?>"  href="javascript:;"><i class="icon-trash"></i></a>
                      </div>
                    </td>
                  </tr>  
                </tbody>
              </table>
            </div>
          </div>
          <!-- 163 end-->

          <!-- buka -->
          <div class="tab-pane" id="buka">     

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
                <tbody>
                  
                  <tr>
                    <td class="check hidden-xs">
                      <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                    </td>
                    <td>3</td>
                    <td>---</td>
                   
                    <td class="actions">
                      <div class="action-buttons">
                       <a class="table-actions removeCampaign" custom_attr="<?php echo $campaign['id']; ?>"  href="javascript:;"><i class="icon-trash"></i></a>
                      </div>
                    </td>
                  </tr>  
                </tbody>
              </table>
            </div>
          </div>
          <!-- buka end-->

        </div>

        <div class="heading">
          <a class="btn btn-sm btn-primary-outline pull-right" data-toggle="modal" href=";" id="caiji"><i class="icon-play"></i>开始采集</a>
        </div>

      </div>
    </div>
  </div>
  <!-- end DataTables Example -->

    


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
        <form action="<?php echo U('add','',false);?>" method="POST" class="form-horizontal">
          <div class="modal-body">

            <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                  <div class="heading">
                    <i class="icon-reorder"></i>添加漫画
                  </div>
                  <div class="widget-content padded">
                      <div class="form-group">
                        <label class="control-label col-md-2">漫画名</label>
                        <div class="col-md-7">
                          <input class="form-control"  type="text" name="comicName" />
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-2">地址</label>
                        <div class="col-md-7">
                          <input class="form-control"  type="text" name="url" />
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">提交</button><button class="btn btn-default-outline" data-dismiss="modal" type="button">取消</button>
          </div>
        </form>

      </div>
       
      </div>
    </div>
  </div>
  <!--  add comic end-->
</div>

<script type="text/javascript">
$(function(){

  $(".removeCampaign").on("click",function(index){
    var campaignId=$(this).attr('custom_attr');
    //console.log(campaignId);return;
    layer.open({
        title: '提示',
        content: '确认要删除该广告系列 ?',
        btn:['确定','取消'],
        yes: function(index){
            ajaxLoading.start();
            $.ajax({
              type: "POST",
              url: "<?php echo U('remove','',false);?>",
              data: "campaignId="+campaignId,
              cache:false,
              dataType:'json',
              success: function(msg){
                 ajaxLoading.end();
                 layer.close(index);  
                 if(msg.status==1){
                    layer.open({
                          title: '提示',
                          content: '删除成功',
                          btn:['好的'],
                          yes: function(index){
                              layer.close(index);   
                              window.location.href="<?php echo U('index','',false); ?>";                                                                  
                          },
                      });
                 }else{
                    layer.open({
                          title: '提示',
                          content: '删除失败',
                          btn:['好的'],
                          yes: function(index){
                              layer.close(index);                                                                      
                          },
                      });
                 }
              },

            });                                                               
        },
        no:function(index){
          layer.close(index);  
        }
    });
     
  }) 
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
    <script src="__PUBLIC__/se7en/javascripts/layer.js" type="text/javascript"></script>

  </body>

</html>