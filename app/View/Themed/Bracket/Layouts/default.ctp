<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Deliciaego, o seu portal de ofertas</title>

  <!--<link href="css/style.default.css" rel="stylesheet">
  <link href="css/jquery.datatables.css" rel="stylesheet">--> 
  <?php echo $this->Html->css('style.default'); ?>
  <?php echo $this->Html->css('jquery.datatables'); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <?php echo $this->Html->js('html5shiv.js'); ?>
  <?php echo $this->Html->js('respond.min.js'); ?>
  <![endif]-->
</head>

<body>

  <section>

    <div class="leftpanel">

      <div class="logopanel">
        <h1><span>[</span> Deliciaego <span>]</span></h1>
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
          
          <h5 class="sidebartitle actitle">Conta</h5>
          <ul class="nav nav-pills nav-stacked nav-bracket mb30">
            <li><a href="/profile"><i class="fa fa-user"></i> <span>Perfil</span></a></li>
            <li><a href="/users/edit"><i class="fa fa-cog"></i> <span>Definições de conta</span></a></li>
            <li><a href="/pages/help"><i class="fa fa-question-circle"></i> <span>Ajuda</span></a></li>
            <li><a href="/users/logout"><i class="fa fa-sign-out"></i> <span>Sair</span></a></li>
          </ul>
        </div>
        
        <h5 class="sidebartitle">Menu</h5>
        <ul class="nav nav-pills nav-stacked nav-bracket">
          <li class="active"><a href="/"><i class="fa fa-home"></i> <span> Página inicial</span></a></li>
          <li><a href="/items"><i class="fa fa-gift"></i> <span> Produtos</span></a></li>
          <li><a href="/users"><i class="fa fa-user"></i> <span> Utilizadores</span></a></li>
          <li><a href="/friends"><i class="fa fa-thumbs-o-up"></i> Amigos</a></li>
        </ul>
        
        <div class="infosummary">
        </div><!-- infosummary -->
        
      </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->
    
    <div class="mainpanel">

      <div class="headerbar">

        <a class="menutoggle"><i class="fa fa-bars"></i></a>
        
        <form class="searchform" action="http://themepixels.com/demo/webpage/bracket/index.html" method="post">
          <input type="text" class="form-control" name="keyword" placeholder="Pesquisa aqui..." />
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
                  <h5 class="title">2 novos utilizadores registados</h5>
                  <ul class="dropdown-list user-list">
                    <li class="novo">
                      <div class="thumb"><a href=""><img src="images/photos/user1.png" alt="" /></a></div>
                      <div class="desc">
                        <h5><a href="">Draniem Daamul (@draniem)</a> <span class="badge badge-success">novo</span></h5>
                      </div>
                    </li>
                    <li class="novo">
                      <div class="thumb"><a href=""><img src="images/photos/user2.png" alt="" /></a></div>
                      <div class="desc">
                        <h5><a href="">Zaham Sindilmaca (@zaham)</a> <span class="badge badge-success">novo</span></h5>
                      </div>
                    </li>
                    <li>
                      <div class="thumb"><a href=""><img src="images/photos/user3.png" alt="" /></a></div>
                      <div class="desc">
                        <h5><a href="">Weno Carasbong (@wenocar)</a></h5>
                      </div>
                    </li>
                    <li>
                      <div class="thumb"><a href=""><img src="images/photos/user4.png" alt="" /></a></div>
                      <div class="desc">
                        <h5><a href="">Nusja Nawancali (@nusja)</a></h5>
                      </div>
                    </li>
                    <li>
                      <div class="thumb"><a href=""><img src="images/photos/user5.png" alt="" /></a></div>
                      <div class="desc">
                        <h5><a href="">Lane Kitmari (@lane_kitmare)</a></h5>
                      </div>
                    </li>
                    <li class="novo"><a href="">Ver todos os utilizadores</a></li>
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
                  <h5 class="title">Tens 1 mensagem nova</h5>
                  <ul class="dropdown-list gen-list">
                    <li class="novo">
                      <a href="">
                        <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Draniem Daamul <span class="badge badge-success">novo</span></span>
                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <span class="thumb"><img src="images/photos/user2.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Nusja Nawancali</span>
                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Weno Carasbong</span>
                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Zaham Sindilmaca</span>
                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Veno Leongal</span>
                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                        </span>
                      </a>
                    </li>
                    <li class="novo"><a href="">Ler todas as mensagens</a></li>
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
                  <h5 class="title">Tens 5 notificações novas</h5>
                  <ul class="dropdown-list gen-list">
                    <li class="novo">
                      <a href="">
                        <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Zaham Sindilmaca <span class="badge badge-success">novo</span></span>
                          <span class="msg">está agora a seguir-te</span>
                        </span>
                      </a>
                    </li>
                    <li class="novo">
                      <a href="">
                        <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Weno Carasbong <span class="badge badge-success">novo</span></span>
                          <span class="msg">está agora a seguir-te</span>
                        </span>
                      </a>
                    </li>
                    <li class="novo">
                      <a href="">
                        <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Veno Leongal <span class="badge badge-success">novo</span></span>
                          <span class="msg">gosta do teu estado recente</span>
                        </span>
                      </a>
                    </li>
                    <li class="novo">
                      <a href="">
                        <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Nusja Nawancali <span class="badge badge-success">novo</span></span>
                          <span class="msg">fez download do teu trabalho</span>
                        </span>
                      </a>
                    </li>
                    <li class="novo">
                      <a href="">
                        <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                        <span class="desc">
                          <span class="name">Nusja Nawancali <span class="badge badge-success">novo</span></span>
                          <span class="msg">envioue-t 2 mensagens</span>
                        </span>
                      </a>
                    </li>
                    <li class="novo"><a href="">Ver todas as notificações</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo $_SESSION['Auth']['User']['picture']?>" alt="" />
                  <?php echo $_SESSION['Auth']['User']['first_name']." ".$_SESSION['Auth']['User']['last_name']; ?>&nbsp;
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                  <li><a href="/profile"><i class="glyphicon glyphicon-user"></i> O meu perfil</a></li>
                  <li><a href="/users/edit/<?php echo $_SESSION['Auth']['User']['id']; ?>"><i class="glyphicon glyphicon-cog"></i> Definições de conta</a></li>
                  <li><a href="/pages/help"><i class="glyphicon glyphicon-question-sign"></i> Ajuda</a></li>
                  <li><a href="users/logout"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>
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
      
      <div class="contentpanel">
       <!-- Page content -->
       <?php echo $content_for_layout; ?>
     </div><!-- contentpanel -->
     
   </div><!-- mainpanel -->
   
   <div class="rightpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
      <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
      <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
      <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="rp-alluser">
        <h5 class="sidebartitle">Utilizadores online</h5>
        <ul class="chatuserlist">
          <li class="online">
            <div class="media">
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
        
        <h5 class="sidebartitle">Utilizadores offline</h5>
        <ul class="chatuserlist">
          <li>
            <div class="media">
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
        <h5 class="sidebartitle">Favoritos</h5>
        <ul class="chatuserlist">
          <li class="online">
            <div class="media">
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
        <h5 class="sidebartitle">Histórico</h5>
        <ul class="chatuserlist">
          <li class="online">
            <div class="media">
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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
              <a href="" class="pull-left media-thumb">
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

        <h5 class="sidebartitle mb20">Definições</h5>
        <div class="form-group">
          <label class="col-xs-8 control-label">Mostrar utilizadores offline</label>
          <div class="col-xs-4 control-label">
            <div class="toggle toggle-success"></div>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-xs-8 control-label">Ligar histórico</label>
          <div class="col-xs-4 control-label">
            <div class="toggle toggle-success"></div>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-xs-8 control-label">Mostrar nome completo</label>
          <div class="col-xs-4 control-label">
            <div class="toggle-chat1 toggle-success"></div>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-xs-8 control-label">Mostrar localização</label>
          <div class="col-xs-4 control-label">
            <div class="toggle toggle-success"></div>
          </div>
        </div>
        
      </div><!-- tab-pane -->
      
    </div><!-- tab-content -->
  </div><!-- rightpanel -->
  
  
</section>

<?php echo $this->Html->script('jquery.datatables'); ?>

<?php echo $this->Html->script('jquery-1.10.2.min'); ?>
<?php echo $this->Html->script('jquery-migrate-1.2.1.min'); ?>
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->Html->script('modernizr.min'); ?>
<?php echo $this->Html->script('jquery.sparkline.min'); ?>
<?php echo $this->Html->script('toggles.min'); ?>
<?php echo $this->Html->script('retina.min'); ?>
<?php echo $this->Html->script('jquery.cookies'); ?>

<?php echo $this->Html->script('flot/flot.min'); ?>
<?php echo $this->Html->script('flot/flot.resize.min'); ?>
<?php echo $this->Html->script('morris.min'); ?>
<?php echo $this->Html->script('raphael-2.1.0.min'); ?>

<?php echo $this->Html->script('jquery.datatables.min'); ?>
<?php echo $this->Html->script('chosen.jquery.min'); ?>

<?php echo $this->Html->script('custom'); ?>
<?php echo $this->Html->script('dashboard'); ?>

</body>
</html>
