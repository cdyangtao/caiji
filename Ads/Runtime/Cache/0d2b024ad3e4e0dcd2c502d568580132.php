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
                <a href="jsvascript:;"><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
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
      广告组详情
    </h1>
  </div>
  
  <div class="row">
      <div class="col-lg-12">
        <div class="widget-container fluid-height">
          <div class="heading tabs">
            <i class="icon-sitemap"></i><?php echo $adGroup['name'];?>
            <ul class="nav nav-tabs pull-right" data-tabs="tabs" id="tabs">
              <li  class="active">
                <a data-toggle="tab" href="#detail"><i class="icon-user"></i><span>Detail</span></a>
              </li>
              <li>
                <a data-toggle="tab" href="#ads"><i class="icon-paper-clip"></i><span>Ads</span></a>
              </li>
              <li>
                <a data-toggle="tab" href="#keywords"><i class="icon-user"></i><span>Keywords</span></a>
              </li>
            </ul>
          </div>
          <div class="tab-content padded" id="my-tab-content">

            <!-- 详情 -->
            <div class="tab-pane active" id="detail">            
                <div class="widget-content padded clearfix">
                  <table class="table table-striped table-bordered">                 
                    <tbody>
                      <?php foreach($adGroup as $field=>$value):?>
                      <tr>
                        <td>
                          <?php echo $field; ?>
                        </td>
                        <td>
                          <?php  if(!is_array($value)){ echo $value; }else{ echo '--'; } ?>
                        </td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
            </div>

            <!-- 广告 -->
            <div class="tab-pane" id="ads">
              <div class="widget-content padded clearfix">
                  <table class="table table-striped table-bordered">                 
                    <tbody>
                      
                      <tr>
                        <td>Ad</td>
                        <td>Status</td>
                        <td>Labels</td>
                        <td>ApprovalStatus</td>
                        <td>AdType</td>
                      </tr>
                      <?php foreach($ads as $ad):?>
                        <tr>
                        <td>
                        <?php echo $ad['ad']['headlinePart1'];?></br>
                        <?php echo $ad['ad']['headlinePart2'];?></br>
                        <?php echo $ad['ad']['finalUrls'][0];?></br>
                        <?php echo $ad['ad']['description'];?>
                        </td>
                        <td><?php echo $ad['status'];?></td>
                        <td><?php foreach($ad['labels'] as $label):?>
                  <span class="label label-success" style="background:<?php echo $label['attribute']['backgroundColor'];?>"><?php echo $label['name'];?></span>
                <?php endforeach;?></td>
                        <td><?php echo $ad['approvalStatus'];?></td>
                        <td><?php echo $ad['ad']['AdType'];?></td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
            </div>

            <!-- 关键词 -->
            <div class="tab-pane" id="keywords">      
                  <form>   
              <div class="widget-content padded clearfix">              
                  <table class="table table-striped table-bordered">                 
                    <tbody> 
                      <tr>
                        <td class="check-header hidden-xs"><label><input id="checkAll"  type="checkbox"><span></span></label></td>    
                        <td>Keyword</td>
                        <td>Status</td>
                        <td>Max. CPC</td>
                        <td>Labels</td>
                      </tr>
                      <?php foreach($keywords as $keyword):?>
                        <tr>
                          <td class="check hidden-xs"><label><input name="keywords_edit" type="checkbox" value="<?php echo $keyword['criterion']['id'];?>"><span></span></label></td>
                          <td><?php echo $keyword['criterion']['text'];?></td>
                          <td><?php echo $keyword['userStatus'];?></td>
                          <td>$<?php echo number_format($keyword['biddingStrategyConfiguration']['bids'][0]['bid']['microAmount']/1000000,2);?></td>
                          <td><?php foreach($keyword['labels'] as $label):?>
                            <span class="label label-success" style="background:<?php echo $label['attribute']['backgroundColor'];?>"><?php echo $label['name'];?></span>
                            <?php endforeach;?></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
                <div class="heading">
                    <div class="col-md-2">
                      <select class="form-control" name="status" id="keyword_status">
                        <option value="1"> -- Edit -- </option>
                        <option value="ENABLED">Enable</option>
                        <option value="PAUSED">Paused</option>
                        <!--<option value="REMOVED">Removed</option>-->
                      </select>
                    </div>
                </div>
                </form> 
            </div>

          </div>
        </div>
      </div>
    </div>
</div>


<script type="text/javascript">
$(function(){

  $("#keyword_status").on("change",function(){
    if(this.value=='1'){return false;}

    var ids=[];
    $(":checkbox:checked[name='keywords_edit']").each(function(){
      ids.push(this.value);
    });
    var ids_str=ids.join("|");
    if(ids.length>0){
      //console.log(ids);return false;
      ajaxLoading.start();
      $.ajax({
        type: "POST",
        url: "<?php echo U('updateKeyword','',false);?>",
        data: 'ids='+ids_str+'&adGroupId=<?php echo $adGroupId;?>'+'&status='+this.value,
        cache:false,
        dataType:'json',
        success: function(msg){
            ajaxLoading.end();
            if(msg.status==1){
              layer.open({
                    title: '提示',
                    content: '编辑成功',
                    btn:['好的'],
                    end: function(index){
                        layer.close(index);   
                        window.location.href="<?php echo U('detail','adGroupId='.$adGroupId,false); ?>";                                                                
                    },
                });
            }else{
              layer.open({
                    title: '提示',
                    content: '编辑败',
                    btn:['好的'],
                    yes: function(index){
                        layer.close(index);                                                                      
                    },
                });
            }
        },
      });
    
    }


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
    <script src="__PUBLIC__/se7en/javascripts/layer.js" type="text/javascript"></script>

  </body>

</html>