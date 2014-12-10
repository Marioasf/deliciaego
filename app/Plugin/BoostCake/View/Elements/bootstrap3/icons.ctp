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
        <li class="nav-parent nav-active active"><a href="#"><i class="fa fa-suitcase"></i> <span>UI Elements</span></a>
          <ul class="children" style="display: block">
            <li><a href="buttons.html"><i class="fa fa-caret-right"></i> Buttons</a></li>
            <li class="active"><a href="icons.html"><i class="fa fa-caret-right"></i> Icons</a></li>
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
        <li class="nav-parent"><a href="#"><i class="fa fa-file-text"></i> <span>Pages</span></a>
          <ul class="children">
            <li><a href="calendar.html"><i class="fa fa-caret-right"></i> Calendar</a></li>
            <li><a href="media-manager.html"><i class="fa fa-caret-right"></i> Media Manager</a></li>
            <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a></li>
            <li><a href="blog-list.html"><i class="fa fa-caret-right"></i> Blog List</a></li>
            <li><a href="blog-single.html"><i class="fa fa-caret-right"></i> Blog Single</a></li>
            <li><a href="people-directory.html"><i class="fa fa-caret-right"></i> People Directory</a></li>
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
      <h2><i class="fa fa-flag"></i> Icons <span>Subtitle goes here...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
          <li><a href="buttons.html">UI Elements</a></li>
          <li class="active">Icons</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="#" class="panel-close">&times;</a>
            <a href="#" class="minimize">&minus;</a>
          </div><!-- panel-btns -->
          <h4 class="panel-title">Glyphicons</h4>
          <p>Includes 200 glyphs in font format from the <a href="http://glyphicons.com/" target="_blank">Glyphicons</a> Halflings set.</p>
        </div><!-- panel-heading -->
        <div class="panel-body">
          <p>For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</p>
          <pre>&lt;span class=&quot;glyphicon glyphicon-iconname&quot;&gt;&lt;/span&gt;</pre>
          
          <div class="row">
            <div class="col-md-4">
              <ul class="fonticon-list">
                <li><span class="glyphicon glyphicon-adjust"></span> glyphicon-adjust</li>
                <li><span class="glyphicon glyphicon-align-center"></span> glyphicon-align-center</li>
                <li><span class="glyphicon glyphicon-align-justify"></span> glyphicon-align-justify</li>
                <li><span class="glyphicon glyphicon-align-left"></span> glyphicon-align-left</li>
                <li><span class="glyphicon glyphicon-align-right"></span> glyphicon-align-right</li>
                <li><span class="glyphicon glyphicon-arrow-down"></span> glyphicon-arrow-down</li>
                <li><span class="glyphicon glyphicon-arrow-left"></span> glyphicon-arrow-left</li>
                <li><span class="glyphicon glyphicon-arrow-right"></span> glyphicon-arrow-right</li>
                <li><span class="glyphicon glyphicon-arrow-up"></span> glyphicon-arrow-up</li>
                <li><span class="glyphicon glyphicon-asterisk"></span> glyphicon-asterisk</li>
                <li><span class="glyphicon glyphicon-backward"></span> glyphicon-backward</li>
                <li><span class="glyphicon glyphicon-ban-circle"></span> glyphicon-ban-circle</li>
                <li><span class="glyphicon glyphicon-barcode"></span> glyphicon-barcode</li>
                <li><span class="glyphicon glyphicon-bell"></span> glyphicon-bell</li>
                <li><span class="glyphicon glyphicon-bold"></span> glyphicon-bold</li>
                <li><span class="glyphicon glyphicon-book"></span> glyphicon-book</li>
                <li><span class="glyphicon glyphicon-bookmark"></span> glyphicon-bookmark</li>
                <li><span class="glyphicon glyphicon-briefcase"></span> glyphicon-briefcase</li>
                <li><span class="glyphicon glyphicon-bullhorn"></span> glyphicon-bullhorn</li>
                <li><span class="glyphicon glyphicon-calendar"></span> glyphicon-calendar</li>
                <li><span class="glyphicon glyphicon-camera"></span> glyphicon-camera</li>
                <li><span class="glyphicon glyphicon-certificate"></span> glyphicon-certificate</li>
                <li><span class="glyphicon glyphicon-check"></span> glyphicon-check</li>
                <li><span class="glyphicon glyphicon-chevron-down"></span> glyphicon-chevron-down</li>
                <li><span class="glyphicon glyphicon-chevron-left"></span> glyphicon-chevron-left</li>
                <li><span class="glyphicon glyphicon-chevron-right"></span> glyphicon-chevron-right</li>
                <li><span class="glyphicon glyphicon-chevron-up"></span> glyphicon-chevron-up</li>
                <li><span class="glyphicon glyphicon-circle-arrow-down"></span> glyphicon-circle-arrow-down</li>
                <li><span class="glyphicon glyphicon-circle-arrow-left"></span> glyphicon-circle-arrow-left</li>
                <li><span class="glyphicon glyphicon-circle-arrow-right"></span> glyphicon-circle-arrow-right</li>
                <li><span class="glyphicon glyphicon-circle-arrow-up"></span> glyphicon-circle-arrow-up</li>
                <li><span class="glyphicon glyphicon-cloud"></span> glyphicon-cloude</li>
                <li><span class="glyphicon glyphicon-cloud-download"></span> glyphicon-cloud-download</li>
                <li><span class="glyphicon glyphicon-cloud-upload"></span> glyphicon-cloud-upload</li>
                <li><span class="glyphicon glyphicon-cog"></span> glyphicon-cog</li>
                <li><span class="glyphicon glyphicon-collapse-down"></span> glyphicon-collapse-down</li>
                <li><span class="glyphicon glyphicon-collapse-up"></span> glyphicon-collapse-up</li>
                <li><span class="glyphicon glyphicon-comment"></span> glyphicon-comment</li>
                <li><span class="glyphicon glyphicon-compressed"></span> glyphicon-compressed</li>
                <li><span class="glyphicon glyphicon-copyright-mark"></span> glyphicon-copyright-mark</li>
                <li><span class="glyphicon glyphicon-credit-card"></span> glyphicon-credit-card</li>
                <li><span class="glyphicon glyphicon-cutlery"></span> glyphicon-cutlery</li>
                <li><span class="glyphicon glyphicon-dashboard"></span> glyphicon-dashboard</li>
                <li><span class="glyphicon glyphicon-download"></span> glyphicon-download</li>
                <li><span class="glyphicon glyphicon-download-alt"></span> glyphicon-download-alt</li>
                <li><span class="glyphicon glyphicon-earphone"></span> glyphicon-earphone</li>
                <li><span class="glyphicon glyphicon-edit"></span> glyphicon-edit</li>
                <li><span class="glyphicon glyphicon-eject"></span> glyphicon-eject</li>
                <li><span class="glyphicon glyphicon-envelope"></span> glyphicon-envelope</li>
                <li><span class="glyphicon glyphicon-euro"></span> glyphicon-euro</li>
                <li><span class="glyphicon glyphicon-exclamation-sign"></span> glyphicon-exclamation-sign</li>
                <li><span class="glyphicon glyphicon-expand"></span> glyphicon-expand</li>
                <li><span class="glyphicon glyphicon-export"></span> glyphicon-export</li>
                <li><span class="glyphicon glyphicon-eye-close"></span> glyphicon-eye-close</li>
                <li><span class="glyphicon glyphicon-eye-open"></span> glyphicon-eye-open</li>
                <li><span class="glyphicon glyphicon-facetime-video"></span> glyphicon-facetime-video</li>
                <li><span class="glyphicon glyphicon-fast-backward"></span> glyphicon-fast-backward</li>
                <li><span class="glyphicon glyphicon-fast-forward"></span> glyphicon-fast-forward</li>
                <li><span class="glyphicon glyphicon-file"></span> glyphicon-file</li>
                <li><span class="glyphicon glyphicon-film"></span> glyphicon-film</li>
                <li><span class="glyphicon glyphicon-filter"></span> glyphicon-filter</li>
                <li><span class="glyphicon glyphicon-fire"></span> glyphicon-fire</li>
                <li><span class="glyphicon glyphicon-flag"></span> glyphicon-flag</li>
                <li><span class="glyphicon glyphicon-flash"></span> glyphicon-flash</li>
                <li><span class="glyphicon glyphicon-floppy-disk"></span> glyphicon-floppy-disk</li>
                <li><span class="glyphicon glyphicon-floppy-open"></span> glyphicon-floppy-open</li>
                <li><span class="glyphicon glyphicon-floppy-remove"></span> glyphicon-floppy-remove</li>
              </ul>
            </div><!-- col-md-4 -->
            
            <div class="col-md-4">
              <ul class="fonticon-list">
                <li><span class="glyphicon glyphicon-floppy-save"></span> glyphicon-floppy-save</li>
                <li><span class="glyphicon glyphicon-floppy-saved"></span> glyphicon-floppy-saved</li>
                <li><span class="glyphicon glyphicon-folder-close"></span> glyphicon-folder-close</li>
                <li><span class="glyphicon glyphicon-folder-open"></span> glyphicon-folder-open</li>
                <li><span class="glyphicon glyphicon-font"></span> glyphicon-font</li>
                <li><span class="glyphicon glyphicon-forward"></span> glyphicon-forward</li>
                <li><span class="glyphicon glyphicon-fullscreen"></span> glyphicon-fullscreen</li>
                <li><span class="glyphicon glyphicon-gbp"></span> glyphicon-gbp</li>
                <li><span class="glyphicon glyphicon-gift"></span> glyphicon-gift</li>
                <li><span class="glyphicon glyphicon-glass"></span> glyphicon-glass</li>
                <li><span class="glyphicon glyphicon-globe"></span> glyphicon-globe</li>
                <li><span class="glyphicon glyphicon-hand-down"></span> glyphicon-hand-down</li>
                <li><span class="glyphicon glyphicon-hand-left"></span> glyphicon-hand-left</li>
                <li><span class="glyphicon glyphicon-hand-right"></span> glyphicon-hand-right</li>
                <li><span class="glyphicon glyphicon-hand-up"></span> glyphicon-hand-up</li>
                <li><span class="glyphicon glyphicon-hd-video"></span> glyphicon-hd-video</li>
                <li><span class="glyphicon glyphicon-hdd"></span> glyphicon-hdd</li>
                <li><span class="glyphicon glyphicon-header"></span> glyphicon-header</li>
                <li><span class="glyphicon glyphicon-headphones"></span> glyphicon-headphones</li>
                <li><span class="glyphicon glyphicon-heart"></span> glyphicon-heart</li>
                <li><span class="glyphicon glyphicon-heart-empty"></span> glyphicon-heart-empty</li>
                <li><span class="glyphicon glyphicon-home"></span> glyphicon-home</li>
                <li><span class="glyphicon glyphicon-import"></span> glyphicon-import</li>
                <li><span class="glyphicon glyphicon-inbox"></span> glyphicon-inbox</li>
                <li><span class="glyphicon glyphicon-indent-left"></span> glyphicon-indent-left</li>
                <li><span class="glyphicon glyphicon-indent-right"></span> glyphicon-indent-right</li>
                <li><span class="glyphicon glyphicon-info-sign"></span> glyphicon-info-sign</li>
                <li><span class="glyphicon glyphicon-italic"></span> glyphicon-italic</li>
                <li><span class="glyphicon glyphicon-leaf"></span> glyphicon-leaf</li>
                <li><span class="glyphicon glyphicon-link"></span> glyphicon-link</li>
                <li><span class="glyphicon glyphicon-list"></span> glyphicon-list</li>
                <li><span class="glyphicon glyphicon-list-alt"></span> glyphicon-list-alt</li>
                <li><span class="glyphicon glyphicon-lock"></span> glyphicon-lock</li>
                <li><span class="glyphicon glyphicon-log-in"></span> glyphicon-log-in</li>
                <li><span class="glyphicon glyphicon-log-out"></span> glyphicon-log-out</li>
                <li><span class="glyphicon glyphicon-magnet"></span> glyphicon-magnet</li>
                <li><span class="glyphicon glyphicon-map-marker"></span> glyphicon-map-marker</li>
                <li><span class="glyphicon glyphicon-minus"></span> glyphicon-minus</li>
                <li><span class="glyphicon glyphicon-minus-sign"></span> glyphicon-minus-sign</li>
                <li><span class="glyphicon glyphicon-move"></span> glyphicon-move</li>
                <li><span class="glyphicon glyphicon-music"></span> glyphicon-music</li>
                <li><span class="glyphicon glyphicon-new-window"></span> glyphicon-new-window</li>
                <li><span class="glyphicon glyphicon-off"></span> glyphicon-off</li>
                <li><span class="glyphicon glyphicon-ok"></span> glyphicon-ok</li>
                <li><span class="glyphicon glyphicon-ok-circle"></span> glyphicon-ok-circle</li>
                <li><span class="glyphicon glyphicon-ok-sign"></span> glyphicon-ok-sign</li>
                <li><span class="glyphicon glyphicon-open"></span> glyphicon-open</li>
                <li><span class="glyphicon glyphicon-paperclip"></span> glyphicon-paperclip</li>
                <li><span class="glyphicon glyphicon-pause"></span> glyphicon-pause</li>
                <li><span class="glyphicon glyphicon-pencil"></span> glyphicon-pencil</li>
                <li><span class="glyphicon glyphicon-phone"></span> glyphicon-phone</li>
                <li><span class="glyphicon glyphicon-phone-alt"></span> glyphicon-phone-alt</li>
                <li><span class="glyphicon glyphicon-picture"></span> glyphicon-picture</li>
                <li><span class="glyphicon glyphicon-plane"></span> glyphicon-plane</li>
                <li><span class="glyphicon glyphicon-play"></span> glyphicon-play</li>
                <li><span class="glyphicon glyphicon-play-circle"></span> glyphicon-play-circle</li>
                <li><span class="glyphicon glyphicon-plus"></span> glyphicon-plus</li>
                <li><span class="glyphicon glyphicon-plus-sign"></span> glyphicon-plus-sign</li>
                <li><span class="glyphicon glyphicon-print"></span> glyphicon-print</li>
                <li><span class="glyphicon glyphicon-pushpin"></span> glyphicon-pushpin</li>
                <li><span class="glyphicon glyphicon-qrcode"></span> glyphicon-qrcode</li>
                <li><span class="glyphicon glyphicon-question-sign"></span> glyphicon-question-sign</li>
                <li><span class="glyphicon glyphicon-random"></span> glyphicon-random</li>
                <li><span class="glyphicon glyphicon-record"></span> glyphicon-record</li>
                <li><span class="glyphicon glyphicon-refresh"></span> glyphicon-refresh</li>
                <li><span class="glyphicon glyphicon-registration-mark"></span> glyphicon-registration-mark</li>
                <li><span class="glyphicon glyphicon-remove"></span> glyphicon-remove</li>
              </ul>  
            </div><!-- col-md-4 -->
            
            <div class="col-md-4">
              <ul class="fonticon-list">
                <li><span class="glyphicon glyphicon-remove-circle"></span> glyphicon-remove-circle</li>
                <li><span class="glyphicon glyphicon-remove-sign"></span> glyphicon-remove-sign</li>
                <li><span class="glyphicon glyphicon-repeat"></span> glyphicon-repeat</li>
                <li><span class="glyphicon glyphicon-resize-full"></span> glyphicon-resize-full</li>
                <li><span class="glyphicon glyphicon-resize-horizontal"></span> glyphicon-resize-horizontal</li>
                <li><span class="glyphicon glyphicon-resize-small"></span> glyphicon-resize-small</li>
                <li><span class="glyphicon glyphicon-resize-vertical"></span> glyphicon-resize-vertical</li>
                <li><span class="glyphicon glyphicon-retweet"></span> glyphicon-retweet</li>
                <li><span class="glyphicon glyphicon-road"></span> glyphicon-road</li>
                <li><span class="glyphicon glyphicon-save"></span> glyphicon-save</li>
                <li><span class="glyphicon glyphicon-saved"></span> glyphicon-saved</li>
                <li><span class="glyphicon glyphicon-screenshot"></span> glyphicon-screenshot</li>
                <li><span class="glyphicon glyphicon-sd-video"></span> glyphicon-sd-video</li>
                <li><span class="glyphicon glyphicon-search"></span> glyphicon-search</li>
                <li><span class="glyphicon glyphicon-send"></span> glyphicon-send</li>
                <li><span class="glyphicon glyphicon-share"></span> glyphicon-share</li>
                <li><span class="glyphicon glyphicon-share-alt"></span> glyphicon-share-alt</li>
                <li><span class="glyphicon glyphicon-shopping-cart"></span> glyphicon-shopping-cart</li>
                <li><span class="glyphicon glyphicon-signal"></span> glyphicon-signal</li>
                <li><span class="glyphicon glyphicon-sort"></span> glyphicon-sort</li>
                <li><span class="glyphicon glyphicon-sort-by-alphabet"></span> glyphicon-sort-by-alphabet</li>
                <li><span class="glyphicon glyphicon-sort-by-alphabet-alt"></span> glyphicon-sort-by-alphabet-alt</li>
                <li><span class="glyphicon glyphicon-sort-by-attributes"></span> glyphicon-sort-by-attributes</li>
                <li><span class="glyphicon glyphicon-sort-by-attributes-alt"></span> glyphicon-sort-by-attributes-alt</li>
                <li><span class="glyphicon glyphicon-sort-by-order"></span> glyphicon-sort-by-order</li>
                <li><span class="glyphicon glyphicon-sort-by-order-alt"></span> glyphicon-sort-by-order-alt</li>
                <li><span class="glyphicon glyphicon-sound-5-1"></span> glyphicon-sound-5-1</li>
                <li><span class="glyphicon glyphicon-sound-6-1"></span> glyphicon-sound-6-1</li>
                <li><span class="glyphicon glyphicon-sound-7-1"></span> glyphicon-sound-7-1</li>
                <li><span class="glyphicon glyphicon-sound-dolby"></span> glyphicon-sound-dolby</li>
                <li><span class="glyphicon glyphicon-sound-stereo"></span> glyphicon-sound-stereo</li>
                <li><span class="glyphicon glyphicon-star"></span> glyphicon-star</li>
                <li><span class="glyphicon glyphicon-star-empty"></span> glyphicon-star-empty</li>
                <li><span class="glyphicon glyphicon-stats"></span> glyphicon-stats</li>
                <li><span class="glyphicon glyphicon-step-backward"></span> glyphicon-step-backward</li>
                <li><span class="glyphicon glyphicon-step-forward"></span> glyphicon-step-forward</li>
                <li><span class="glyphicon glyphicon-stop"></span> glyphicon-stop</li>
                <li><span class="glyphicon glyphicon-subtitles"></span> glyphicon-subtitles</li>
                <li><span class="glyphicon glyphicon-tag"></span> glyphicon-tag</li>
                <li><span class="glyphicon glyphicon-tags"></span> glyphicon-tags</li>
                <li><span class="glyphicon glyphicon-tasks"></span> glyphicon-tasks</li>
                <li><span class="glyphicon glyphicon-text-height"></span> glyphicon-text-height</li>
                <li><span class="glyphicon glyphicon-text-width"></span> glyphicon-text-width</li>
                <li><span class="glyphicon glyphicon-th"></span> glyphicon-th</li>
                <li><span class="glyphicon glyphicon-th-large"></span> glyphicon-th-large</li>
                <li><span class="glyphicon glyphicon-th-list"></span> glyphicon-th-list</li>
                <li><span class="glyphicon glyphicon-thumbs-down"></span> glyphicon-thumbs-down</li>
                <li><span class="glyphicon glyphicon-thumbs-up"></span> glyphicon-thumbs-up</li>
                <li><span class="glyphicon glyphicon-time"></span> glyphicon-time</li>
                <li><span class="glyphicon glyphicon-tint"></span> glyphicon-tint</li>
                <li><span class="glyphicon glyphicon-tower"></span> glyphicon-tower</li>
                <li><span class="glyphicon glyphicon-transfer"></span> glyphicon-transfer</li>
                <li><span class="glyphicon glyphicon-trash"></span> glyphicon-trash</li>
                <li><span class="glyphicon glyphicon-tree-conifer"></span> glyphicon-tree-conifer</li>
                <li><span class="glyphicon glyphicon-tree-deciduous"></span> glyphicon-tree-deciduous</li>
                <li><span class="glyphicon glyphicon-unchecked"></span> glyphicon-unchecked</li>
                <li><span class="glyphicon glyphicon-upload"></span> glyphicon-upload</li>
                <li><span class="glyphicon glyphicon-usd"></span> glyphicon-usd</li>
                <li><span class="glyphicon glyphicon-user"></span> glyphicon-user</li>
                <li><span class="glyphicon glyphicon-volume-down"></span> glyphicon-volume-down</li>
                <li><span class="glyphicon glyphicon-volume-up"></span> glyphicon-volume-up</li>
                <li><span class="glyphicon glyphicon-volume-off"></span> glyphicon-volume-off</li>
                <li><span class="glyphicon glyphicon-warning-sign"></span> glyphicon-warning-sign</li>
                <li><span class="glyphicon glyphicon-wrench"></span> glyphicon-wrench</li>
                <li><span class="glyphicon glyphicon-zoom-in"></span> glyphicon-zoom-in</li>
                <li><span class="glyphicon glyphicon-zoom-out"></span> glyphicon-zoom-out</li>
              </ul>  
            </div><!-- col-md-4 -->
            
          </div><!-- row -->
          
          <br />
          
          <h5 class="subtitle">Examples</h5>
          <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>
          
          <div class="btn-group">
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-fast-backward"></span></button>
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-step-backward"></span></button>
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-play"></span></button>
            <button class="btn btn-default active" type="button"><span class="glyphicon glyphicon-stop"></span></button>
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-step-forward"></span></button>
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-fast-forward"></span></button>
          </div>
          
        </div><!-- panel-body -->
      </div><!-- panel -->
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="#" class="panel-close">&times;</a>
            <a href="#" class="minimize">&minus;</a>
          </div><!-- panel-btns -->
          <h4 class="panel-title">Font Awesome</h4>
          <p>Font Awesome gives you scalable vector icons that can instantly be customized - size, color, drop shadow, and anything that can be done with the power of CSS. </p>
        </div><!-- panel-heading -->
        <div class="panel-body">
          <p>The complete set of 369 icons in <a href="http://fontawesome.io/icons/" target="_blank">Font Awesome 4.0.3</a></p>
          <br />
          <h5 class="subtitle">Web Application Icons</h5>
          
          <ul class="row fontawesome-list">
            <li class="col-md-3 col-sm-4"><span class="fa fa-adjust"></span> fa-adjust</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-anchor"></span> fa-anchor</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-archive"></span> fa-archive</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows"></span> fa-arrows</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows-h"></span> fa-arrows-h</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows-v"></span> fa-arrows-v</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-asterisk"></span> fa-asterisk</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-ban"></span> fa-ban</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bar-chart-o"></span> fa-bar-chart-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-barcode"></span> fa-barcode</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bars"></span> fa-bars</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-beer"></span> fa-beer</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bell"></span> fa-bell</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bell-o"></span> fa-bell-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bolt"></span> fa-bolt</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-book"></span> fa-book</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bookmark"></span> fa-bookmark</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bookmark-o"></span> fa-bookmark-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-briefcase"></span> fa-briefcase</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bug"></span> fa-bug</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-building-o"></span> fa-building-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bullhorn"></span> fa-bullhorn</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bullseye"></span> fa-bullseye</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-calendar"></span> fa-calendar</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-calendar-o"></span> fa-calendar-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-camera"></span> fa-camera</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-camera-retro"></span> fa-camera-retro</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-down"></span> fa-caret-square-o-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-left"></span> fa-caret-square-o-left</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-right"></span> fa-caret-square-o-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-up"></span> fa-caret-square-o-up</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-certificate"></span> fa-certificate</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-check"></span> fa-check</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-check-circle"></span> fa-check-circle</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-check-circle-o"></span> fa-check-circle-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-check-square"></span> fa-check-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-check-square-o"></span> fa-check-square-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-circle"></span> fa-circle</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-circle-o"></span> fa-circle-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-clock-o"></span> fa-clock-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-cloud"></span> fa-cloud</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-cloud-download"></span> fa-cloud-download</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-cloud-upload"></span> fa-cloud-upload</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-code"></span> fa-code</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-code-fork"></span> fa-code-fork</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-coffee"></span> fa-coffee</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-cog"></span> fa-cog</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-cogs"></span> fa-cogs</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-comment"></span> fa-comment</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-comment-o"></span> fa-comment-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-comments"></span> fa-comments</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-comments-o"></span> fa-comments-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-compass"></span> fa-compass</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-credit-card"></span> fa-credit-card</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-crop"></span> fa-crop</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-crosshairs"></span> fa-crosshairs</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-cutlery"></span> fa-cutlery</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-dashboard"></span> fa-dashboard</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-desktop"></span> fa-desktop</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-dot-circle-o"></span> fa-dot-circle-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-download"></span> fa-download</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-edit"></span> fa-edit</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-ellipsis-h"></span> fa-ellipsis-h</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-ellipsis-v"></span> fa-ellipsis-v</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-envelope"></span> fa-envelope</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-envelope-o"></span> fa-envelope-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-eraser"></span> fa-eraser</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-exchange"></span> fa-exchange</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-exclamation"></span> fa-exclamation</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-exclamation-circle"></span> fa-exclamation-circle</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-exclamation-triangle"></span> fa-exclamation-triangle</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-external-link"></span> fa-external-link</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-external-link-square"></span> fa-external-link-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-eye"></span> fa-eye</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-eye-slash"></span> fa-eye-slash</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-female"></span> fa-female</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-fighter-jet"></span> fa-fighter-jet</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-film"></span> fa-film</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-filter"></span> fa-filter</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-fire"></span> fa-fire</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-fire-extinguisher"></span> fa-fire-extinguisher</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-flag"></span> fa-flag</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-flag-checkered"></span> fa-flag-checkered</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-flag-o"></span> fa-flag-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-flash"></span> fa-flash</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-flask"></span> fa-flask</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-folder"></span> fa-folder</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-folder-o"></span> fa-folder-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-folder-open"></span> fa-folder-open</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-folder-open-o"></span> fa-folder-open-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-frown-o"></span> fa-frown-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-gamepad"></span> fa-gamepad</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-gavel"></span> fa-gavel</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-gear"></span> fa-gear</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-gears"></span> fa-gears</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-gift"></span> fa-gift</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-glass"></span> fa-glass</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-globe"></span> fa-globe</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-group"></span> fa-group</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-hdd-o"></span> fa-hdd-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-headphones"></span> fa-headphones</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-heart"></span> fa-heart</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-heart-o"></span> fa-heart-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-home"></span> fa-home</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-inbox"></span> fa-inbox</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-info"></span> fa-info</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-info-circle"></span> fa-info-circle</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-key"></span> fa-key</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-keyboard-o"></span> fa-keyboard-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-laptop"></span> fa-laptop</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-leaf"></span> fa-leaf</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-legal"></span> fa-legal</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-lemon-o"></span> fa-lemon-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-level-down"></span> fa-level-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-level-up"></span> fa-level-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-lightbulb-o"></span> fa-lightbulb-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-location-arrow"></span> fa-location-arrow</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-lock"></span> fa-lock</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-magic"></span> fa-magic</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-magnet"></span> fa-magnet</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-mail-forward"></span> fa-mail-forward</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-mail-reply"></span> fa-mail-reply</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-mail-reply-all"></span> fa-mail-reply-all</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-male"></span> fa-male</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-map-marker"></span> fa-map-marker</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-meh-o"></span> fa-meh-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-microphone"></span> fa-microphone</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-microphone-slash"></span> fa-microphone-slash</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-minus"></span> fa-minus</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-minus-circle"></span> fa-minus-circle</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-minus-square"></span> fa-minus-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-minus-square-o"></span> fa-minus-square-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-mobile"></span> fa-mobile</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-mobile-phone"></span> fa-mobile-phone</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-money"></span> fa-money</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-moon-o"></span> fa-moon-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-music"></span> fa-music</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-pencil"></span> fa-pencil</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-pencil-square"></span> fa-pencil-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-pencil-square-o"></span> fa-pencil-square-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-phone"></span> fa-phone</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-phone-square"></span> fa-phone-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-picture-o"></span> fa-picture-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-plane"></span> fa-plane</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-plus"></span> fa-plus</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-plus-circle"></span> fa-plus-circle</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-plus-square"></span> fa-plus-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-plus-square-o"></span> fa-plus-square-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-power-off"></span> fa-power-off</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-print"></span> fa-print</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-puzzle-piece"></span> fa-puzzle-piece</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-qrcode"></span> fa-qrcode</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-question"></span> fa-question</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-question-circle"></span> fa-question-circle</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-quote-left"></span> fa-quote-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-quote-right"></span> fa-quote-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-random"></span> fa-random</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-refresh"></span> fa-refresh</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-reply"></span> fa-reply</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-reply-all"></span> fa-reply-all</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-retweet"></span> fa-retweet</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-road"></span> fa-road</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-rocket"></span> fa-rocket</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-rss"></span> fa-rss</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-rss-square"></span> fa-rss-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-search"></span> fa-search</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-search-minus"></span> fa-search-minus</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-search-plus"></span> fa-search-plus</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-share"></span> fa-share</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-share-square"></span> fa-share-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-share-square-o"></span> fa-share-square-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-shield"></span> fa-shield</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-shopping-cart"></span> fa-shopping-cart</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-sign-in"></span> fa-sign-in</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-sign-out"></span> fa-sign-out</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-signal"></span> fa-signal</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-sitemap"></span> fa-sitemap</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-smile-o"></span> fa-smile-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort"></span> fa-sort</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-alpha-asc"></span> fa-sort-alpha-asc</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-alpha-desc"></span> fa-sort-alpha-desc</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-amount-asc"></span> fa-sort-amount-asc</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-amount-desc"></span> fa-sort-amount-desc</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-asc"></span> fa-sort-asc</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-desc"></span> fa-sort-desc</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-down"></span> fa-sort-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-numeric-asc"></span> fa-sort-numeric-asc</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-numeric-desc"></span> fa-sort-numeric-desc</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-sort-up"></span> fa-sort-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-spinner"></span> fa-spinner</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-square"></span> fa-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-square-o"></span> fa-square-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-star"></span> fa-star</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-star-half"></span> fa-star-half</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-star-half-empty"></span> fa-star-half-empty</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-star-half-full"></span> fa-star-half-full</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-star-half-o"></span> fa-star-half-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-star-o"></span> fa-star-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-subscript"></span> fa-subscript</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-suitcase"></span> fa-suitcase</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-sun-o"></span> fa-sun-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-superscript"></span> fa-superscript</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-tablet"></span> fa-tablet</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-tachometer"></span> fa-tachometer</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-tag"></span> fa-tag</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-tags"></span> fa-tags</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-tasks"></span> fa-tasks</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-terminal"></span> fa-terminal</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-thumb-tack"></span> fa-thumb-tack</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-thumbs-down"></span> fa-thumbs-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-thumbs-o-down"></span> fa-thumbs-o-down</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-thumbs-o-up"></span> fa-thumbs-o-up</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-thumbs-up"></span> fa-thumbs-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-ticket"></span> fa-ticket</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-times"></span> fa-times</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-times-circle"></span> fa-times-circle</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-times-circle-o"></span> fa-times-circle-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-tint"></span> fa-tint</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-down"></span> fa-toggle-down</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-left"></span> fa-toggle-left</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-right"></span> fa-toggle-right</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-up"></span> fa-toggle-up</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-trash-o"></span> fa-trash-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-trophy"></span> fa-trophy</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-truck"></span> fa-truck</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-umbrella"></span> fa-umbrella</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-unlock"></span> fa-unlock</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-unlock-alt"></span> fa-unlock-alt</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-unsorted"></span> fa-unsorted</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-upload"></span> fa-upload</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-user"></span> fa-user</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-users"></span> fa-users</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-video-camera"></span> fa-video-camera</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-volume-down"></span> fa-volume-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-volume-off"></span> fa-volume-off</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-volume-up"></span> fa-volume-up</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-warning"></span> fa-warning</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-wheelchair"></span> fa-wheelchair</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-wrench"></span> fa-wrench</li>
          </ul>
          
          <br />
          <h5 class="subtitle">Form Control Icons</h5>
          
          <ul class="row fontawesome-list">
            <li class="col-md-3 col-sm-4"><span class="fa fa-check-square"></span> fa-check-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-check-square-o"></span> fa-check-square-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-circle"></span> fa-circle</li>          
            <li class="col-md-3 col-sm-4"><span class="fa fa-circle-o"></span> fa-circle-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-dot-circle-o"></span> fa-dot-circle-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-minus-square"></span> fa-minus-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-minus-square-o"></span> fa-minus-square-o</li>          
            <li class="col-md-3 col-sm-4"><span class="fa fa-plus-square"></span> fa-plus-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-plus-square-o"></span> fa-plus-square-o</li>          
            <li class="col-md-3 col-sm-4"><span class="fa fa-square"></span> fa-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-square-o"></span> fa-square-o</li>
          </ul>
          
          <br />
          <h5 class="subtitle">Currency Icons</h5>
          
          <ul class="row fontawesome-list">
            <li class="col-md-3 col-sm-4"><span class="fa fa-bitcoin"></span> fa-bitcoin</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-btc"></span> fa-btc</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-cny"></span> fa-cny</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-dollar"></span> fa-dollar</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-eur"></span> fa-eur</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-euro"></span> fa-euro</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-gbp"></span> fa-gbp</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-inr"></span> fa-inr</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-jpy"></span> fa-jpy</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-krw"></span> fa-krw</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-money"></span> fa-money</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-rmb"></span> fa-rmb</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-rouble"></span> fa-rouble</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-rub"></span> fa-rub</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-ruble"></span> fa-ruble</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-rupee"></span> fa-rupee</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-try"></span> fa-try</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-turkish-lira"></span> fa-turkish-lira</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-usd"></span> fa-usd</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-won"></span> fa-won</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-yen"></span> fa-yen</li>
          </ul>
          
          <br />
          <h5 class="subtitle">Text Editor Icons</h5>
          
          <ul class="row fontawesome-list">
            <li class="col-md-3 col-sm-4"><span class="fa fa-align-center"></span> fa-align-center</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-align-justify"></span> fa-align-justify</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-align-left"></span> fa-align-left</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-align-right"></span> fa-align-right</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-bold"></span> fa-bold</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-chain"></span> fa-chain</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-chain-broken"></span> fa-chain-broken</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-clipboard"></span> fa-clipboard</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-columns"></span> fa-columns</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-copy"></span> fa-copy</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-cut"></span> fa-cut</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-dedent"></span> fa-dedent</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-eraser"></span> fa-eraser</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-file"></span> fa-file</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-file-o"></span> fa-file-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-file-text"></span> fa-file-text</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-file-text-o"></span> fa-file-text-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-files-o"></span> fa-files-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-floppy-o"></span> fa-floppy-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-font"></span> fa-font</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-indent"></span> fa-indent</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-italic"></span> fa-italic</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-link"></span> fa-link</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-list"></span> fa-list</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-list-alt"></span> fa-list-alt</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-list-ol"></span> fa-list-ol</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-list-ul"></span> fa-list-ul</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-outdent"></span> fa-outdent</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-paperclip"></span> fa-paperclip</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-paste"></span> fa-paste</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-repeat"></span> fa-repeat</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-rotate-left"></span> fa-rotate-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-rotate-right"></span> fa-rotate-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-save"></span> fa-save</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-scissors"></span> fa-scissors</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-strikethrough"></span> fa-strikethrough</li>   
            <li class="col-md-3 col-sm-4"><span class="fa fa-table"></span> fa-table</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-text-height"></span> fa-text-height</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-text-width"></span> fa-text-width</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-th"></span> fa-th</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-th-large"></span> fa-th-large</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-th-list"></span> fa-th-list</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-underline"></span> fa-underline</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-undo"></span> fa-undo</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-unlink"></span> fa-unlink</li>
          </ul>
          
          <br />
          <h5 class="subtitle">Directional Icons</h5>
        
          <ul class="row fontawesome-list">
            <li class="col-md-3 col-sm-4"><span class="fa fa-angle-double-down"></span> fa-angle-double-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-angle-double-left"></span> fa-angle-double-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-angle-double-right"></span> fa-angle-double-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-angle-double-up"></span> fa-angle-double-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-angle-down"></span> fa-angle-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-angle-left"></span> fa-angle-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-angle-right"></span> fa-angle-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-angle-up"></span> fa-angle-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-circle-down"></span> fa-arrow-circle-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-circle-left"></span> fa-arrow-circle-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-circle-o-down"></span> fa-arrow-circle-o-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-circle-o-left"></span> fa-arrow-circle-o-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-circle-o-right"></span> fa-arrow-circle-o-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-circle-o-up"></span> fa-arrow-circle-o-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-circle-right"></span> fa-arrow-circle-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-circle-up"></span> fa-arrow-circle-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-down"></span> fa-arrow-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-left"></span> fa-arrow-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-right"></span> fa-arrow-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrow-up"></span> fa-arrow-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows"></span> fa-arrows</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows-alt"></span> fa-arrows-alt</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows-h"></span> fa-arrows-h</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows-v"></span> fa-arrows-v</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-down"></span> fa-caret-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-left"></span> fa-caret-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-right"></span> fa-caret-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-down"></span> fa-caret-square-o-down</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-left"></span> fa-caret-square-o-left</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-right"></span> fa-caret-square-o-right</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-square-o-up"></span> fa-caret-square-o-up</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-caret-up"></span> fa-caret-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-chevron-circle-down"></span> fa-chevron-circle-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-chevron-circle-left"></span> fa-chevron-circle-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-chevron-circle-right"></span> fa-chevron-circle-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-chevron-circle-up"></span> fa-chevron-circle-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-chevron-down"></span> fa-chevron-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-chevron-left"></span> fa-chevron-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-chevron-right"></span> fa-chevron-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-chevron-up"></span> fa-chevron-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-hand-o-down"></span> fa-hand-o-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-hand-o-left"></span> fa-hand-o-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-hand-o-right"></span> fa-hand-o-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-hand-o-up"></span> fa-hand-o-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-long-arrow-down"></span> fa-long-arrow-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-long-arrow-left"></span> fa-long-arrow-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-long-arrow-right"></span> fa-long-arrow-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-long-arrow-up"></span> fa-long-arrow-up</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-down"></span> fa-toggle-down</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-left"></span> fa-toggle-left</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-right"></span> fa-toggle-right</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-toggle-up"></span> fa-toggle-up</li>    
          </ul>
          
          <br />
          <h5 class="subtitle">Video Player Icons</h5>
          
          <ul class="row fontawesome-list">
            <li class="col-md-3 col-sm-4"><span class="fa fa-arrows-alt"></span> fa-arrows-alt</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-backward"></span> fa-backward</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-compress"></span> fa-compress</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-eject"></span> fa-eject</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-expand"></span> fa-expand</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-fast-backward"></span> fa-fast-backward</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-fast-forward"></span> fa-fast-forward</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-forward"></span> fa-forward</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-pause"></span> fa-pause</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-play"></span> fa-play</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-play-circle"></span> fa-play-circle</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-play-circle-o"></span> fa-play-circle-o</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-step-backward"></span> fa-step-backward</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-step-forward"></span> fa-step-forward</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-stop"></span> fa-stop</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-youtube-play"></span> fa-youtube-play</li>    
          </ul>
          
          <br />
          <h5 class="subtitle">Brand Icons</h5>
          <ul class="row fontawesome-list">
            <li class="col-md-3 col-sm-4"><span class="fa fa-adn"></span> fa-adn</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-android"></span> fa-android</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-apple"></span> fa-apple</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bitbucket"></span> fa-bitbucket</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-bitbucket-square"></span> fa-bitbucket-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-bitcoin"></span> fa-bitcoin</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-btc"></span> fa-btc</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-css3"></span> fa-css3</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-dribbble"></span> fa-dribbble</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-dropbox"></span> fa-dropbox</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-facebook"></span> fa-facebook</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-facebook-square"></span> fa-facebook-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-flickr"></span> fa-flickr</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-foursquare"></span> fa-foursquare</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-github"></span> fa-github</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-github-alt"></span> fa-github-alt</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-github-square"></span> fa-github-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-gittip"></span> fa-gittip</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-google-plus"></span> fa-google-plus</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-google-plus-square"></span> fa-google-plus-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-html5"></span> fa-html5</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-instagram"></span> fa-instagram</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-linkedin"></span> fa-linkedin</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-linkedin-square"></span> fa-linkedin-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-linux"></span> fa-linux</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-maxcdn"></span> fa-maxcdn</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-pagelines"></span> fa-pagelines</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-pinterest"></span> fa-pinterest</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-pinterest-square"></span> fa-pinterest-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-renren"></span> fa-renren</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-skype"></span> fa-skype</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-stack-exchange"></span> fa-stack-exchange</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-stack-overflow"></span> fa-stack-overflow</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-trello"></span> fa-trello</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-tumblr"></span> fa-tumblr</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-tumblr-square"></span> fa-tumblr-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-twitter"></span> fa-twitter</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-twitter-square"></span> fa-twitter-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-vimeo-square"></span> fa-vimeo-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-vk"></span> fa-vk</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-weibo"></span> fa-weibo</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-windows"></span> fa-windows</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-xing"></span> fa-xing</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-xing-square"></span> fa-xing-square</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-youtube"></span> fa-youtube</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-youtube-play"></span> fa-youtube-play</li>    
            <li class="col-md-3 col-sm-4"><span class="fa fa-youtube-square"></span> fa-youtube-square</li>
          </ul>
          
          <br />
          <h5 class="subtitle">Medical Icons</h5>
          <ul class="row fontawesome-list">
            <li class="col-md-3 col-sm-4"><span class="fa fa-ambulance"></span> fa-ambulance</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-h-square"></span> fa-h-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-hospital-o"></span> fa-hospital-o</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-medkit"></span> fa-medkit</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-plus-square"></span> fa-plus-square</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-stethoscope"></span> fa-stethoscope</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-user-md"></span> fa-user-md</li>
            <li class="col-md-3 col-sm-4"><span class="fa fa-wheelchair"></span> fa-wheelchair</li>
          </ul>
        </div><!-- panel-body -->
      </div><!-- panel -->
      
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

<script src="js/custom.js"></script>


</body>
</html>