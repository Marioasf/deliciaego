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
  <link href="css/prettyPhoto.css" rel="stylesheet">

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
            <li><a href="people-directory.html"><i class="fa fa-caret-right"></i> People Directory</a></li>
            <li class="active"><a href="profile.html"><i class="fa fa-caret-right"></i> Profile</a></li>
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
      <h2><i class="fa fa-user"></i> Profile <span>Subtitle goes here...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
          <li><a href="index.html">Pages</a></li>
          <li class="active">Profile</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
      
      <div class="row">
        <div class="col-sm-3">
          <img src="images/photos/profile-1.png" class="thumbnail img-responsive" alt="" />
          
          <div class="mb30"></div>
          
          <h5 class="subtitle">About</h5>
          <p class="mb30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat... <a href="#">Show More</a></p>
          
          <h5 class="subtitle">Connect</h5>
          <ul class="profile-social-list">
            <li><i class="fa fa-twitter"></i> <a href="#">twitter.com/eileensideways</a></li>
            <li><i class="fa fa-facebook"></i> <a href="#">facebook.com/eileen</a></li>
            <li><i class="fa fa-youtube"></i> <a href="#">youtube.com/eileen22</a></li>
            <li><i class="fa fa-linkedin"></i> <a href="#">linkedin.com/4ever-eileen</a></li>
            <li><i class="fa fa-pinterest"></i> <a href="#">pinterest.com/eileen</a></li>
            <li><i class="fa fa-instagram"></i> <a href="#">instagram.com/eiside</a></li>
          </ul>
          
          <div class="mb30"></div>
          
          <h5 class="subtitle">Address</h5>
          <address>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
          
        </div><!-- col-sm-3 -->
        <div class="col-sm-9">
          
          <div class="profile-header">
            <h2 class="profile-name">Eileen Sideways</h2>
            <div class="profile-location"><i class="fa fa-map-marker"></i> San Francisco, California, USA</div>
            <div class="profile-position"><i class="fa fa-briefcase"></i> Software Engineer at <a href="#">SomeCompany, Inc.</a></div>
            
            <div class="mb20"></div>
            
            <button class="btn btn-success mr5"><i class="fa fa-user"></i> Follow</button>
            <button class="btn btn-white"><i class="fa fa-envelope-o"></i> Message</button>
          </div><!-- profile-header -->
          
          <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified nav-profile">
          <li class="active"><a href="#activities" data-toggle="tab"><strong>Activities</strong></a></li>
          <li><a href="#followers" data-toggle="tab"><strong>Followers</strong></a></li>
          <li><a href="#following" data-toggle="tab"><strong>Following</strong></a></li>
          <li><a href="#events" data-toggle="tab"><strong>My Events</strong></a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="activities">
            <div class="activity-list">
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user1.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Ray Sin</strong> started following <strong>Eileen Sideways</strong>. <br />
                  <small class="text-muted">Yesterday at 3:30pm</small>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> posted a new blog. <br />
                  <small class="text-muted">Today at 3:18pm</small>
                      
                  <div class="media blog-media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="images/photos/media5.png" alt="" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-title"><a href="#">Ut Enim Ad Minim Veniam</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                    </div>
                  </div><!-- media -->
                  
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user2.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Chris Anthemum</strong> started following <strong>Eileen Sideways</strong>. <br />
                  <small class="text-muted">2 days ago at 8:30am</small>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> uploaded <a href="#">5 photos</a>. <br />
                  <small class="text-muted">5 days ago at 12:30pm</small>
                  
                  <ul class="uploadphoto-list">
                    <li><a href="images/photos/media1.jpg" data-rel="prettyPhoto"><img src="images/photos/media1.jpg" class="img-responsive" alt="" /></a></li>
                    <li><a href="images/photos/media2.png" data-rel="prettyPhoto"><img src="images/photos/media2.png" class="img-responsive" alt="" /></a></li>
                    <li><a href="images/photos/media3.png" data-rel="prettyPhoto"><img src="images/photos/media3.png" class="img-responsive" alt="" /></a></li>
                  </ul>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user4.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Frank Furter</strong> started following <strong>Eileen Sideways</strong>. <br />
                  <small class="text-muted">6 days ago at 8:15am</small>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> posted a new note. <br />
                  <small class="text-muted">6 days ago at 6:18am</small>
                  <h4 class="media-title"><a href="#">Consectetur Adipisicing Elit</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> posted a new blog. <br />
                  <small class="text-muted">December 25 at 3:18pm</small>
                      
                  <div class="media blog-media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="images/photos/media4.png" alt="" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-title"><a href="#">Ut Enim Ad Minim Veniam</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                    </div>
                  </div><!-- media -->
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> added new photo. <br />
                  <small class="text-muted">December 24 at 1:30pm</small>
                  <div class="mb20"></div>
                  <a href="images/photos/media6.png" data-rel="prettyPhoto" class="img-single"><img src="images/photos/media6.png" class="img-responsive" alt="" /></a>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user5.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Weno Carasbong</strong> started following <strong>Eileen Sideways</strong>. <br />
                  <small class="text-muted">December 15 at 3:30pm</small>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> posted a new blog. <br />
                  <small class="text-muted">December 15 at 3:18pm</small>
                      
                  <div class="media blog-media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="images/photos/media7.png" alt="" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-title"><a href="#">Ut Enim Ad Minim Veniam</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                    </div>
                  </div><!-- media -->
                  
                </div>
              </div><!-- media -->
              
            </div><!-- activity-list -->
            
            <button class="btn btn-white btn-block">Show More</button>

          </div>
          <div class="tab-pane" id="followers">
            
            <div class="follower-list">
              
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="holder.js/100x125.html" alt="" />
                </a>
                <div class="media-body">
                  <h3 class="follower-name">Ray Sin</h3>
                  <div class="profile-location"><i class="fa fa-map-marker"></i> San Francisco, California, USA</div>
                  <div class="profile-position"><i class="fa fa-briefcase"></i> Software Engineer at <a href="#">SomeCompany, Inc.</a></div>
                  
                  <div class="mb20"></div>
                  
                  <button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                  <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                </div>
              </div><!-- media -->
              
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="holder.js/100x125.html" alt="" />
                </a>
                <div class="media-body">
                  <h3 class="follower-name">Weno Carasbong</h3>
                  <div class="profile-location"><i class="fa fa-map-marker"></i> Cebu City, Philippines</div>
                  <div class="profile-position"><i class="fa fa-briefcase"></i> Software Engineer at <a href="#">ITCompany, Inc.</a></div>
                  
                  <div class="mb20"></div>
                  
                  <button class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Following</button>
                  <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                </div>
              </div><!-- media -->
              
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="holder.js/100x125.html" alt="" />
                </a>
                <div class="media-body">
                  <h3 class="follower-name">Nusja Nawancali</h3>
                  <div class="profile-location"><i class="fa fa-map-marker"></i> Madrid, Spain</div>
                  <div class="profile-position"><i class="fa fa-briefcase"></i> CEO at <a href="#">SomeCompany, Inc.</a></div>
                  
                  <div class="mb20"></div>
                  
                  <button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                  <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                </div>
              </div><!-- media -->
              
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="holder.js/100x125.html" alt="" />
                </a>
                <div class="media-body">
                  <h3 class="follower-name">Zaham Sindilmaca</h3>
                  <div class="profile-location"><i class="fa fa-map-marker"></i> Bangkok, Thailand</div>
                  <div class="profile-position"><i class="fa fa-briefcase"></i> Java Developer at <a href="#">ITCompany, Inc.</a></div>
                  
                  <div class="mb20"></div>
                  
                  <button class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Following</button>
                  <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                </div>
              </div><!-- media -->
              
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="holder.js/100x125.html" alt="" />
                </a>
                <div class="media-body">
                  <h3 class="follower-name">Christopher Atam</h3>
                  <div class="profile-location"><i class="fa fa-map-marker"></i> Tokyo, Japan</div>
                  <div class="profile-position"><i class="fa fa-briefcase"></i> QA Engineer at <a href="#">SomeCompany, Inc.</a></div>
                  
                  <div class="mb20"></div>
                  
                  <button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                  <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                </div>
              </div><!-- media -->
              
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="holder.js/100x125.html" alt="" />
                </a>
                <div class="media-body">
                  <h3 class="follower-name">Venro Leonga</h3>
                  <div class="profile-location"><i class="fa fa-map-marker"></i> Paris, France</div>
                  <div class="profile-position"><i class="fa fa-briefcase"></i> UX Designer at <a href="#">ITCompany, Inc.</a></div>
                  
                  <div class="mb20"></div>
                  
                  <button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Follow</button>
                  <button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Message</button>
                </div>
              </div><!-- media -->
              
            </div><!--follower-list -->
            
          </div>
          <div class="tab-pane" id="following">
            
            <div class="activity-list">
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user2.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Chris Anthemum</strong> liked a photos<br />
                  <small class="text-muted">Today at 12:30pm</small>
                  
                  <ul class="uploadphoto-list">
                    <li><a href="images/photos/media5.png" data-rel="prettyPhoto"><img src="images/photos/media5.png" class="img-responsive" alt="" /></a></li>
                    <li><a href="images/photos/media4.png" data-rel="prettyPhoto"><img src="images/photos/media4.png" class="img-responsive" alt="" /></a></li>
                  </ul>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user1.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Ray Sin</strong> is now following to <strong>Chris Anthemum</strong>. <br />
                  <small class="text-muted">Yesterday at 1:30pm</small>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user4.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Frank Furter</strong> is now following to <strong>Ray Sin</strong>. <br />
                  <small class="text-muted">3 days ago at 1:30pm</small>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user2.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Chris Anthemum</strong> liked a photos<br />
                  <small class="text-muted">5 days ago at 12:30pm</small>
                  
                  <ul class="uploadphoto-list">
                    <li><a href="images/photos/media6.png" data-rel="prettyPhoto"><img src="images/photos/media6.png" class="img-responsive" alt="" /></a></li>
                    <li><a href="images/photos/media7.png" data-rel="prettyPhoto"><img src="images/photos/media7.png" class="img-responsive" alt="" /></a></li>
                    <li><a href="images/photos/media2.png" data-rel="prettyPhoto"><img src="images/photos/media2.png" class="img-responsive" alt="" /></a></li>
                  </ul>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user1.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Nusja Nawancali</strong> is now following to <strong>Zaham Sindilmaca</strong>. <br />
                  <small class="text-muted">December 25 at 1:30pm</small>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user4.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Frank Furter</strong> is now following to <strong>Zaham Sindilmaca</strong>. <br />
                  <small class="text-muted">December 24 at 1:30pm</small>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user3.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Nusja NawanCali</strong> posted a new blog. <br />
                  <small class="text-muted">December 23 at 3:18pm</small>
                      
                  <div class="media blog-media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="images/photos/media3.png" alt="" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-title"><a href="#">Ut Enim Ad Minim Veniam</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                    </div>
                  </div><!-- media -->
                  
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user4.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Mark Zonsion</strong> is now following to <strong>Weno Carasbong</strong>. <br />
                  <small class="text-muted">December 23 at 1:30pm</small>
                </div>
              </div><!-- media -->
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user4.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Frank Furter</strong> is now following to <strong>Weno Carasbong</strong>. <br />
                  <small class="text-muted">December 20 at 4:30pm</small>
                </div>
              </div><!-- media -->
              
            </div><!-- activity-list -->
            
            <button class="btn btn-white btn-block">Show More</button>
            
          </div>
          <div class="tab-pane" id="events">
            <div class="events">
              <h5 class="subtitle">Upcoming Events</h5>
              <div class="row">
                <div class="col-sm-6">
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="holder.js/100x120.html" alt="" />
                    </a>
                    <div class="media-body event-body">
                      <h4 class="event-title"><a href="#">Free Living Trust Seminar</a></h4>
                      <small class="text-muted"><i class="fa fa-map-marker"></i> Silicon Valley, San Francisco, CA</small>
                      <small class="text-muted"><i class="fa fa-calendar"></i> Sunday, January 15, 2014 at 11:00am</small>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    </div>
                  </div><!-- media -->
                </div><!-- col-sm-6 -->
                
                <div class="col-sm-6">
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="holder.js/100x120.html" alt="" />
                    </a>
                    <div class="media-body event-body">
                      <h4 class="event-title"><a href="#">Serious Games Seminar</a></h4>
                      <small class="text-muted"><i class="fa fa-map-marker"></i> New York City</small>
                      <small class="text-muted"><i class="fa fa-calendar"></i> Monday, January 14, 2014 at 8:00am</small>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    </div>
                  </div><!-- media -->
                </div><!-- col-sm-6 -->
                
                <div class="col-sm-6">
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="holder.js/100x120.html" alt="" />
                    </a>
                    <div class="media-body event-body">
                      <h4 class="event-title"><a href="#">Travel &amp; Adventure Show</a></h4>
                      <small class="text-muted"><i class="fa fa-map-marker"></i> Los Angeles, CA</small>
                      <small class="text-muted"><i class="fa fa-calendar"></i> Friday, January 12, 2014 at 8:00am</small>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    </div>
                  </div><!-- media -->
                </div><!-- col-sm-6 -->
                
                <div class="col-sm-6">
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="holder.js/100x120.html" alt="" />
                    </a>
                    <div class="media-body event-body">
                      <h4 class="event-title"><a href="#">Mobile Games Summit</a></h4>
                      <small class="text-muted"><i class="fa fa-map-marker"></i> Bay Area, San Francisco</small>
                      <small class="text-muted"><i class="fa fa-calendar"></i> Saturday, January 10, 2014 at 8:00am</small>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    </div>
                  </div><!-- media -->
                </div><!-- col-sm-6 -->
              </div>
              
              <br />
              
              <h5 class="subtitle">Past Events</h5>
              <div class="row">
                <div class="col-sm-6">
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="holder.js/100x120.html" alt="" />
                    </a>
                    <div class="media-body event-body">
                      <h4 class="event-title"><a href="#">Free Living Trust Seminar</a></h4>
                      <small class="text-muted"><i class="fa fa-map-marker"></i> Silicon Valley, San Francisco, CA</small>
                      <small class="text-muted"><i class="fa fa-calendar"></i> Sunday, January 15, 2014 at 11:00am</small>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    </div>
                  </div><!-- media -->
                </div><!-- col-sm-6 -->
                
                <div class="col-sm-6">
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="holder.js/100x120.html" alt="" />
                    </a>
                    <div class="media-body event-body">
                      <h4 class="event-title"><a href="#">Serious Games Seminar</a></h4>
                      <small class="text-muted"><i class="fa fa-map-marker"></i> New York City</small>
                      <small class="text-muted"><i class="fa fa-calendar"></i> Monday, January 14, 2014 at 8:00am</small>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    </div>
                  </div><!-- media -->
                </div><!-- col-sm-6 -->
                
                <div class="col-sm-6">
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="holder.js/100x120.html" alt="" />
                    </a>
                    <div class="media-body event-body">
                      <h4 class="event-title"><a href="#">Travel &amp; Adventure Show</a></h4>
                      <small class="text-muted"><i class="fa fa-map-marker"></i> Los Angeles, CA</small>
                      <small class="text-muted"><i class="fa fa-calendar"></i> Friday, January 12, 2014 at 8:00am</small>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    </div>
                  </div><!-- media -->
                </div><!-- col-sm-6 -->
                
                <div class="col-sm-6">
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="holder.js/100x120.html" alt="" />
                    </a>
                    <div class="media-body event-body">
                      <h4 class="event-title"><a href="#">Mobile Games Summit</a></h4>
                      <small class="text-muted"><i class="fa fa-map-marker"></i> Bay Area, San Francisco</small>
                      <small class="text-muted"><i class="fa fa-calendar"></i> Saturday, January 10, 2014 at 8:00am</small>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
                    </div>
                  </div><!-- media -->
                </div><!-- col-sm-6 -->
              </div>
              
            </div><!-- events -->
          </div>
        </div><!-- tab-content -->
          
        </div><!-- col-sm-9 -->
      </div><!-- row -->
      
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

<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/holder.js"></script>

<script src="js/custom.js"></script>
<script>
  jQuery(document).ready(function(){
    
    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
    
    //Replaces data-rel attribute to rel.
    //We use data-rel because of w3c validation issue
    jQuery('a[data-rel]').each(function() {
        jQuery(this).attr('rel', jQuery(this).data('rel'));
    });
    
  });
</script>

</body>
</html>