<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Bracket Responsive Bootstrap3 Admin</title>

  <link href="css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>[</span> bracket <span>]</span></h1>
    </div><!-- logopanel -->
    
    <div class="leftpanelinner">
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>John Doe</h4>
                    <span>"Life is so..."</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href="#"><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
      
      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="email.html"><i class="fa fa-envelope-o"></i> <span>Email</span></a></li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Forms</span></a>
          <ul class="children">
            <li><a href="general-forms.html"><i class="fa fa-caret-right"></i> General Forms</a></li>
            <li><a href="form-layouts.html"><i class="fa fa-caret-right"></i> Form Layouts</a></li>
            <li><a href="form-validation.html"><i class="fa fa-caret-right"></i> Form Validation</a></li>
            <li><a href="form-wizards.html"><i class="fa fa-caret-right"></i> Form Wizards</a></li>
            <li><a href="wysiwyg.html"><i class="fa fa-caret-right"></i> WYSIWYG</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-suitcase"></i> <span>UI Elements</span></a>
          <ul class="children">
            <li><a href="buttons.html"><i class="fa fa-caret-right"></i> Buttons</a></li>
            <li><a href="icons.html"><i class="fa fa-caret-right"></i> Icons</a></li>
            <li><a href="typography.html"><i class="fa fa-caret-right"></i> Typography</a></li>
            <li><a href="alerts.html"><i class="fa fa-caret-right"></i> Alerts &amp; Notifications</a></li>
            <li><a href="tabs-accordions.html"><i class="fa fa-caret-right"></i> Tabs &amp; Accordions</a></li>
            <li><a href="sliders.html"><i class="fa fa-caret-right"></i> Sliders</a></li>
            <li><a href="graphs.html"><i class="fa fa-caret-right"></i> Graphs &amp; Charts</a></li>
            <li><a href="widgets.html"><i class="fa fa-caret-right"></i> Panels &amp; Widgets</a></li>
            <li><a href="extras.html"><i class="fa fa-caret-right"></i> Extras</a></li>
          </ul>
        </li>
        <li><a href="tables.html"><i class="fa fa-th-list"></i> <span>Tables</span></a></li>
        <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
        <li class="nav-parent nav-active active"><a href="#"><i class="fa fa-file-text"></i> <span>Pages</span></a>
          <ul class="children" style="display: block;">
            <li><a href="calendar.html"><i class="fa fa-caret-right"></i> Calendar</a></li>
            <li><a href="media-manager.html"><i class="fa fa-caret-right"></i> Media Manager</a></li>
            <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a></li>
            <li><a href="blog-list.html"><i class="fa fa-caret-right"></i> Blog List</a></li>
            <li><a href="blog-single.html"><i class="fa fa-caret-right"></i> Blog Single</a></li>
            <li class="active"><a href="people-directory.html"><i class="fa fa-caret-right"></i> People Directory</a></li>
            <li><a href="profile.html"><i class="fa fa-caret-right"></i> Profile</a></li>
            <li><a href="invoice.html"><i class="fa fa-caret-right"></i> Invoice</a></li>
            <li><a href="search-results.html"><i class="fa fa-caret-right"></i> Search Results</a></li>
            <li><a href="blank.html"><i class="fa fa-caret-right"></i> Blank Page</a></li>
            <li><a href="notfound.html"><i class="fa fa-caret-right"></i> 404 Page</a></li>
            <li><a href="locked.html"><i class="fa fa-caret-right"></i> Locked Screen</a></li>
            <li><a href="signin.html"><i class="fa fa-caret-right"></i> Sign In</a></li>
            <li><a href="signup.html"><i class="fa fa-caret-right"></i> Sign Up</a></li>
          </ul>
        </li>
        <li><a href="layouts.html"><i class="fa fa-laptop"></i> <span>Skins &amp; Layouts</span></a></li>
      </ul>
      
      <div class="infosummary">
        <h5 class="sidebartitle">Information Summary</h5>    
        <ul>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Daily Traffic</span>
                    <h4>630, 201</h4>
                </div>
                <div id="sidebar-chart" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Average Users</span>
                    <h4>1, 332, 801</h4>
                </div>
                <div id="sidebar-chart2" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Disk Usage</span>
                    <h4>82.2%</h4>
                </div>
                <div id="sidebar-chart3" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">CPU Usage</span>
                    <h4>140.05 - 32</h4>
                </div>
                <div id="sidebar-chart4" class="chart"></div>   
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Memory Usage</span>
                    <h4>32.2%</h4>
                </div>
                <div id="sidebar-chart5" class="chart"></div>   
            </li>
        </ul>
      </div><!-- infosummary -->
      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <form class="searchform" action="http://themepixels.com/demo/webpage/bracket/index.html" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
      </form>
      
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i>
                <span class="badge">2</span>
              </button>
              <div class="dropdown-menu dropdown-menu-head pull-right">
                <h5 class="title">2 Newly Registered Users</h5>
                <ul class="dropdown-list user-list">
                  <li class="new">
                    <div class="thumb"><a href="#"><img src="images/photos/user1.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="#">Draniem Daamul (@draniem)</a> <span class="badge badge-success">new</span></h5>
                    </div>
                  </li>
                  <li class="new">
                    <div class="thumb"><a href="#"><img src="images/photos/user2.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="#">Zaham Sindilmaca (@zaham)</a> <span class="badge badge-success">new</span></h5>
                    </div>
                  </li>
                  <li>
                    <div class="thumb"><a href="#"><img src="images/photos/user3.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="#">Weno Carasbong (@wenocar)</a></h5>
                    </div>
                  </li>
                  <li>
                    <div class="thumb"><a href="#"><img src="images/photos/user4.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="#">Nusja Nawancali (@nusja)</a></h5>
                    </div>
                  </li>
                  <li>
                    <div class="thumb"><a href="#"><img src="images/photos/user5.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href="#">Lane Kitmari (@lane_kitmare)</a></h5>
                    </div>
                  </li>
                  <li class="new"><a href="#">See All Users</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                <i class="glyphicon glyphicon-envelope"></i>
                <span class="badge">1</span>
              </button>
              <div class="dropdown-menu dropdown-menu-head pull-right">
                <h5 class="title">You Have 1 New Message</h5>
                <ul class="dropdown-list gen-list">
                  <li class="new">
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Draniem Daamul <span class="badge badge-success">new</span></span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user2.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Nusja Nawancali</span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Weno Carasbong</span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Zaham Sindilmaca</span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Veno Leongal</span>
                      <span class="msg">Lorem ipsum dolor sit amet...</span>
                    </span>
                    </a>
                  </li>
                  <li class="new"><a href="#">Read All Messages</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                <i class="glyphicon glyphicon-globe"></i>
                <span class="badge">5</span>
              </button>
              <div class="dropdown-menu dropdown-menu-head pull-right">
                <h5 class="title">You Have 5 New Notifications</h5>
                <ul class="dropdown-list gen-list">
                  <li class="new">
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Zaham Sindilmaca <span class="badge badge-success">new</span></span>
                      <span class="msg">is now following you</span>
                    </span>
                    </a>
                  </li>
                  <li class="new">
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Weno Carasbong <span class="badge badge-success">new</span></span>
                      <span class="msg">is now following you</span>
                    </span>
                    </a>
                  </li>
                  <li class="new">
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Veno Leongal <span class="badge badge-success">new</span></span>
                      <span class="msg">likes your recent status</span>
                    </span>
                    </a>
                  </li>
                  <li class="new">
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                      <span class="msg">downloaded your work</span>
                    </span>
                    </a>
                  </li>
                  <li class="new">
                    <a href="#">
                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                    <span class="desc">
                      <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                      <span class="msg">send you 2 messages</span>
                    </span>
                    </a>
                  </li>
                  <li class="new"><a href="#">See All Notifications</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="images/photos/loggeduser.png" alt="" />
                John Doe
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
          <li>
            <button id="chatview" class="btn btn-default tp-icon chat-icon">
                <i class="glyphicon glyphicon-comment"></i>
            </button>
          </li>
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->
        
    <div class="pageheader">
      <h2><i class="fa fa-user"></i> People Directory</h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
          <li><a href="index.html">Pages</a></li>
          <li class="active">People Directory</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
      
      <ul class="letter-list">
        <li><a href="#">a</a></li>
        <li><a href="#">b</a></li>
        <li><a href="#">c</a></li>
        <li><a href="#">d</a></li>
        <li><a href="#">e</a></li>
        <li><a href="#">f</a></li>
        <li><a href="#">g</a></li>
        <li><a href="#">h</a></li>
        <li><a href="#">i</a></li>
        <li><a href="#">j</a></li>
        <li><a href="#">k</a></li>
        <li><a href="#">l</a></li>
        <li><a href="#">m</a></li>
        <li><a href="#">n</a></li>
        <li><a href="#">o</a></li>
        <li><a href="#">p</a></li>
        <li><a href="#">q</a></li>
        <li><a href="#">r</a></li>
        <li><a href="#">s</a></li>
        <li><a href="#">t</a></li>
        <li><a href="#">u</a></li>
        <li><a href="#">v</a></li>
        <li><a href="#">w</a></li>
        <li><a href="#">x</a></li>
        <li><a href="#">y</a></li>
        <li><a href="#">z</a></li>
      </ul>
      
      <div class="mb30"></div>
      
      <div class="people-list">
        <div class="row">
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="images/photos/user2.png" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Ray Sin</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Cebu City, Philippines</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Software Engineer at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Zaham Sindilmaca</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Cebu City, Philippines</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Software Engineer at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Venro Leonga</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Bangcok, Thailand</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> CEO at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="images/photos/user3.png" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Weno Carasbong</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Riyadh, Saudi Arabia</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Software Analyst at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="images/photos/user4.png" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Christopher Atam</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Sydney, Australia</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Web Developer at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="images/photos/user5.png" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Nusja Nawancali</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Phuket, Thailand</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Product Manager at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Dyanne Cerona</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Manila, Philippines</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Executive Manager at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Sephjo Bykir Dulaaven</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Paris, France</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Vice President at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Ray Sin</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Cebu City, Philippines</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Software Engineer at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Zaham Sindilmaca</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Cebu City, Philippines</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Software Engineer at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Venro Leonga</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Bangcok, Thailand</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> CEO at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Weno Carasbong</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Riyadh, Saudi Arabia</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Software Analyst at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Christopher Atam</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Sydney, Australia</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Web Developer at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Nusja Nawancali</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Phuket, Thailand</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Product Manager at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Dyanne Cerona</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Manila, Philippines</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Executive Manager at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="holder.js/110x110.html" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">Sephjo Bykir Dulaaven</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> Paris, France</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> Vice President at <a href="#">SomeCompany, Inc.</a></div>
                  <ul class="social-list">
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->
          
        </div><!-- row -->
      </div><!-- people-list -->
      
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->
  
  <div class="rightpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
        <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
        <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
        <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
    </ul>
        
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="rp-alluser">
            <h5 class="sidebartitle">Online Users</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/userprofile.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user1.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <span class="pull-right badge badge-danger">2</span>
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
            
            <div class="mb30"></div>
            
            <h5 class="sidebartitle">Offline Users</h5>
            <ul class="chatuserlist">
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="rp-favorites">
            <h5 class="sidebartitle">Favorites</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user1.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="rp-history">
            <h5 class="sidebartitle">History</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Hi hello, ctc?... would you mind if I go to your...</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>This is to inform you that your product that we...</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Are you willing to have a long term relat...</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane pane-settings" id="rp-settings">
            
            <h5 class="sidebartitle mb20">Settings</h5>
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Offline Users</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Enable History</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Full Name</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle-chat1 toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Location</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
        </div><!-- tab-pane -->
        
    </div><!-- tab-content -->
  </div><!-- rightpanel -->
  
</section>


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/holder.js"></script>

<script src="js/custom.js"></script>
<script>
  jQuery(window).load(function(){
  
    var container = document.querySelector('#bloglist');
    var msnry = new Masonry( container, {
      // options
      columnWidth: '.col-xs-6',
      itemSelector: '.col-xs-6'
    });
  
  });
</script>

</body>
</html>
