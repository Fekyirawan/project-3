<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="{{url('public')}}/img/favicon.png" rel="icon">
  <link href="{{url('public')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{url('public')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="{{url('public')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet">
  <link href="{{url('public')}}/css/style-responsive.css" rel="stylesheet">
  <script src="{{url('public')}}/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="{{url('/template')}}" class="logo"><b>MyAdmin<span></span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme"></span>
              </a>
            
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="{{url('/template')}}">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme"></span>
              </a>
          
          <!-- inbox dropdown end -->
         
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{url('/login')}}">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu " id="nav-accordion">
          <p class="centered"><a href="{{url('public')}}/profile.html"><img src="{{url('public')}}/img/3x4.jpg" class="img-circle" width="80" height="70"></a></p>
          <h5 class="centered">Feky Irawan</h5>
          <li class="mt">
            <a class="active" href="{{url('/template')}}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
            
              <li><a href="{{url('/product')}}">Produk Gallery</a></li>
              <li><a href="{{url('/multiple')}}">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('/blank')}}">Blank Page</a></li>
              <li><a href="{{url('/login')}}">Login</a></li>
              <li><a href="{{url('/profil')}}">Profile</a></li>
              <li><a href="{{url('/404')}}">404 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('/contact')}}">Contact Form</a></li>
            </ul>
          </li>
        
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
   <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Multiple Files Uploader</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <!-- The file upload form used as target for the file upload widget -->
            <form id="fileupload" action="http://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
              <!-- Redirect browsers with JavaScript disabled to the origin page -->
              <noscript>
                  <input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/">
                </noscript>
              <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
              <div class="row fileupload-buttonbar">
                <div class="col-lg-8">
                  <!-- The fileinput-button span is used to style the file input field as button -->
                   <button type="submit" class="btn btn-success start">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files..</span>
                    </button>
                  <button type="submit" class="btn btn-theme start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                    </button>
                  <button type="reset" class="btn btn-theme02 cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                    </button>
                  <button type="button" class="btn btn-theme04 delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                    </button>
                  <input type="checkbox" class="toggle">
                  <!-- The global file processing state -->
                  <span class="fileupload-process"></span>
                </div>
                <!-- /col-lg-7 -->
                <!-- The global progress state -->
                <div class="col-lg-4 fileupload-progress fade">
                  <!-- The global progress bar -->
                  <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;">
                    </div>
                  </div>
                  <!-- The extended global progress state -->
                  <div class="progress-extended">
                    &nbsp;
                  </div>
                </div>
                <!-- /col-lg-5 -->
              </div>
              <!-- /row -->
              <!-- The table listing the files available for upload/download -->
              <table role="presentation" class="table table-striped">
                <tbody class="files">
                </tbody>
              </table>
            </form>
            <br>
            <div class="content-panel">
              <div class="panel-body">
                <h4>Notes</h4>
                <ul>
                  <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
                  <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
                  <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>
                  <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support">Browser support</a>).</li>
                  <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
                  <li>Built with Twitter's <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> CSS framework and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
                </ul>
              </div>
            </div>
            <!-- /panel -->
            <!-- The blueimp Gallery widget -->
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
              <div class="slides"></div>
              <h3 class="title"></h3>
              <a class="prev">‹</a>
              <a class="next">›</a>
              <a class="close">×</a>
              <a class="play-pause"></a>
              <ol class="indicator"></ol>
            </div>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->
    <!--footer start-->

    <footer class="site-footer">
      <div class="text-center">
        <p style="margin-left: 170px;">
          &copy; Copyrights <strong>Feky Irawan</strong>. All Rights Reserved
        </p>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{url('public')}}/lib/jquery/jquery.min.js"></script>

  <script src="{{url('public')}}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="{{url('public')}}/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="{{url('public')}}/lib/jquery.scrollTo.min.js"></script>
  <script src="{{url('public')}}/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="{{url('public')}}/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="{{url('public')}}/lib/common-scripts.js"></script>
  <script type="text/javascript" src="{{url('public')}}/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="{{url('public')}}/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="{{url('public')}}/lib/sparkline-chart.js"></script>
  <script src="{{url('public')}}/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">

  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
