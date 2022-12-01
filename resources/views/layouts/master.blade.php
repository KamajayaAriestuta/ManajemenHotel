<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ URL::to('') }}../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ URL::to('') }}../assets/images/favicon.png" type="image/x-icon">
    <title>Enny's Homestay</title>
    <!-- Google font-->
    <link rel="preconnect" href="{{ URL::to('https://fonts.gstatic.com') }}">
    <link href="{{ URL::to('../../css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap') }}" rel="stylesheet">
    <link href="{{ URL::to('../../css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap') }}" rel="stylesheet">
    <link href="{{ URL::to('../../css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap') }}" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/vector-map.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ URL::to('../assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('../assets/css/responsive.css') }}">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ URL::to('../assets/images/logo/logo.png') }}" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ URL::to('../assets/images/logo/dark-logo.png') }}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Search for bookmark...">
                    </div>
                  </div>
                 
                </div>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{ URL::to('../assets/images/dashboard/1.png') }}" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">Cynthia</h6></a>
            <p class="mb-0 font-roboto">Admin</p>
          </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">           
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>General</h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="bookmark.html"><i data-feather="align-justify"></i><span>Dashboard</span></a></li>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="bookmark.html"><i data-feather="book"></i><span>Data</span></a></li>
                    <ul class="nav-submenu menu-content">
                      <li><a href="general-widget.html">General</a></li>
                      <li><a href="chart-widget.html">Chart</a></li>
                    </ul>
                  </li>
                  
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Facilities</h6>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="moon"></i><span>Homestay</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="state-color.html">State color</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="avatars.html">Avatars</a></li>
                      <li><a href="helper-classes.html">helper classes</a></li>
                      <li><a href="grid.html">Grid</a></li>
                      <li><a href="tag-pills.html">Tag & pills</a></li>
                      <li><a href="progress-bar.html">Progress</a></li>
                      <li><a href="modal.html">Modal</a></li>
                      <li><a href="alert.html">Alert</a></li>
                      <li><a href="popover.html">Popover</a></li>
                      <li><a href="tooltip.html">Tooltip</a></li>
                      <li><a href="loader.html">Spinners</a></li>
                      <li><a href="dropdown.html">Dropdown</a></li>
                      <li><a href="according.html">Accordion</a></li>
                      <li><a class="submenu-title" href="javascript:void(0)">Tabs<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="tab-bootstrap.html">Bootstrap Tabs</a></li>
                          <li><a href="tab-material.html">Line Tabs</a></li>
                        </ul>
                      </li>
                      <li><a href="navs.html">Navs</a></li>
                      <li><a href="box-shadow.html">Shadow</a></li>
                      <li><a href="list.html">Lists</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="map"></i><span>Guide Tour</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="scrollable.html">Scrollable</a></li>
                      <li><a href="tree.html">Tree view</a></li>
                      <li><a href="bootstrap-notify.html">Bootstrap Notify</a></li>
                      <li><a href="rating.html">Rating</a></li>
                      <li><a href="dropzone.html">dropzone</a></li>
                      <li><a href="tour.html">Tour</a></li>
                      <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                      <li><a href="modal-animated.html">Animated Modal</a></li>
                      <li><a href="owl-carousel.html">Owl Carousel</a></li>
                      <li><a href="ribbons.html">Ribbons</a></li>
                      <li><a href="pagination.html">Pagination</a></li>
                      <li><a href="steps.html">Steps</a></li>
                      <li><a href="breadcrumb.html">Breadcrumb</a></li>
                      <li><a href="range-slider.html">Range Slider</a></li>
                      <li><a href="image-cropper.html">Image cropper</a></li>
                      <li><a href="sticky.html">Sticky         </a></li>
                      <li><a href="basic-card.html">Basic Card</a></li>
                      <li><a href="creative-card.html">Creative Card</a></li>
                      <li><a href="tabbed-card.html">Tabbed Card</a></li>
                      <li><a href="dragable-card.html">Draggable Card</a></li>
                      <li><a class="submenu-title" href="javascript:void(0)">Timeline<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="timeline-v-1.html">Timeline 1</a></li>
                          <li><a href="timeline-v-2.html">Timeline 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Art Shopping</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="form-builder-1.html">Form Builder 1</a></li>
                      <li><a href="form-builder-2.html">Form Builder 2</a></li>
                      <li><a href="pagebuild.html">Page Builder</a></li>
                      <li> <a href="button-builder.html">Button Builder</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Applications</h6>
                    </div>
                  </li>
                 <li class="dropdown"><a class="nav-link menu-title link-nav" href="bookmark.html"><i data-feather="heart"></i><span>Bookmarks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="task.html"><i data-feather="check-square"></i><span>Tasks</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="calendar-basic.html"><i data-feather="calendar"></i><span>Calender</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="to-do.html"><i data-feather="clock"></i><span>To-Do</span></a></li>
                    <div class="mega-menu-container menu-content">
                      <div class="container">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="error-page1.html" target="_blank">Error page 1</a></li>
                                  <li><a href="error-page2.html" target="_blank">Error page 2</a></li>
                                  <li><a href="error-page3.html" target="_blank">Error page 3</a></li>
                                  <li><a href="error-page4.html" target="_blank">Error page 4                         </a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="login.html" target="_blank">Login Simple</a></li>
                                  <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                                  <li><a href="login_two.html" target="_blank">Login with image two                      </a></li>
                                  <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                                  <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                                  <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                                  <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                  <li><a href="sign-up-one.html" target="_blank">Register with Bg Image                              </a></li>
                                  <li><a href="sign-up-two.html" target="_blank">Register with Bg video                          </a></li>
                                  <li><a href="unlock.html">Unlock User</a></li>
                                  <li><a href="forget-password.html">Forget Password</a></li>
                                  <li><a href="creat-password.html">Creat Password</a></li>
                                  <li><a href="maintenance.html">Maintenance</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="comingsoon.html">Coming Simple</a></li>
                                  <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                  <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                              </div>
                              <div class="submenu-content opensubmegamenu">
                                <ul>
                                  <li><a href="basic-template.html">Basic Email</a></li>
                                  <li><a href="email-header.html">Basic With Header</a></li>
                                  <li><a href="template-email.html">Ecomerce Template</a></li>
                                  <li><a href="template-email-2.html">Email Template 2</a></li>
                                  <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                  <li><a href="email-order-success.html">Order Success      </a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
               </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        @yield('contents')
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2022-23 © Enny Homestay All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ URL::to('../assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ URL::to('../assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ URL::to('../assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ URL::to('../assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ URL::to('../assets/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ URL::to('../assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ URL::to('../assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ URL::to('../assets/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ URL::to('../assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ URL::to('../assets/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ URL::to('../assets/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ URL::to('../assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ URL::to('../assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ URL::to('../assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ URL::to('../assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ URL::to('../assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::to('../assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::to('../assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ URL::to('../assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ URL::to('../assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ URL::to('../assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ URL::to('../assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ URL::to('../assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ URL::to('../assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ URL::to('../assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ URL::to('../assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ URL::to('../assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ URL::to('../assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
    <script src="{{ URL::to('../assets/js/dashboard/default.js') }}"></script>
    <script src="{{ URL::to('../assets/js/notify/index.js') }}"></script>
    <script src="{{ URL::to('../assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ URL::to('../assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ URL::to('../assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ URL::to('../assets/js/script.js') }}"></script>
    <script src="{{ URL::to('../assets/js/theme-customizer/customizer.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>