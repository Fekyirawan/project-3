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
        <h3><i class="fa fa-angle-right"></i> Product Gallery</h3>
        <hr>
        <div class="row mt">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
                    <a class="fancybox" href="{{url('public')}}/img/portfolio/port04.jpg"><img class="img-responsive" src="{{url('public')}}/img/portfolio/port04.jpg" alt=""></a>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- col-lg-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
                    <a class="fancybox" href="{{url('public')}}/img/portfolio/port05.jpg"><img class="img-responsive" src="{{url('public')}}/img/portfolio/port05.jpg" alt=""></a>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- col-lg-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
                    <a class="fancybox" href="{{url('public')}}/img/portfolio/port06.jpg"><img class="img-responsive" src="{{url('public')}}/img/portfolio/port06.jpg" alt=""></a>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- col-lg-4 -->
        </div>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
                    <a class="fancybox" href="{{url('public')}}/img/portfolio/port01.jpg"><img class="img-responsive" src="{{url('public')}}/img/portfolio/port01.jpg" alt=""></a>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

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
