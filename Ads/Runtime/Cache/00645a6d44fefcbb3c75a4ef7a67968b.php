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
        
      </ul>
    </div>
  </div>

        
</div>
<!-- End Navigation -->
</div>
<div class="container-fluid main-content">
  <div class="page-title">
    <h1>
      设置子账户
    </h1>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="heading">
          <i class="icon-reorder"></i>Basic Components
        </div>
        <div class="widget-content padded">
           <form action="<?php echo U('set','',false);?>" method="POST" class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-md-2">当前子账户ID</label>
                <div class="col-md-5">
                  <span><?php if($customer_id)echo $customer_id;else{echo '---';}?></span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2">子账户ID（Custom ID）</label>
                <div class="col-md-5">
                  <input class="form-control" placeholder="Text" type="text" name="customer_id" />
                </div>
              </div>
              
              
              <div class="form-group">
                <label class="control-label col-md-2"></label>
                <div class="col-md-5">
                  <button class="btn btn-primary" type="submit">设 置</button>
                </div>
              </div>

            </form>
        </div>
      </div>
    </div>
  </div>
</div>

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