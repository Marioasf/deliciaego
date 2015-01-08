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
        <h1><a href="/"><span>[</span> Deliciaego <span>]</span></a></h1>
      </div><!-- logopanel -->
      
      <div class="leftpanelinner">    

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
          <div class="media userlogged">
            <img alt="" src="<?php echo $_SESSION['Auth']['User']['picture']?>" class="media-object">
            <div class="media-body">
              <h4><?php echo $_SESSION['Auth']['User']['first_name']." ".$_SESSION['Auth']['User']['last_name']; ?>&nbsp;</h4>
              <span>"Life is so..."</span>
            </div>
          </div>
          
          <h5 class="sidebartitle actitle">Conta</h5>
          <ul class="nav nav-pills nav-stacked nav-bracket mb30">
            <li><a href="/users/view/<?php echo $_SESSION['Auth']['User']['id'];?>"><i class="fa fa-user"></i> <span>Perfil</span></a></li>
            <li><a href="/users/edit/<?php echo $_SESSION['Auth']['User']['id'];?>"><i class="fa fa-cog"></i> <span>Definições de conta</span></a></li>
            <li><a href="/companies/add"><i class="fa fa-folder-open"></i> <span>Está associado a uma empresa?</span></a></li>
            <li><a href="/pages/help"><i class="fa fa-question-circle"></i> <span>Ajuda</span></a></li>
            <li><a href="/users/lock"><i class="fa fa-lock"></i> <span>Bloquear sessão</span></a></li>
            <li><a href="/users/logout"><i class="fa fa-sign-out"></i> <span>Sair</span></a></li>
          </ul>
        </div>
        
        <h5 class="sidebartitle">Menu</h5>
        <ul id="leftbar" class="nav nav-pills nav-stacked nav-bracket">
          <li id="home"><a href="/"><i class="fa fa-home"></i> <span> Página inicial</span></a></li>
          <li id="items"><a href="/items"><i class="fa fa-gift"></i> <span> Produtos</span></a></li>
          <li id="users"><a href="/users"><i class="fa fa-user"></i> <span> Utilizadores</span></a></li> 
          <li id="companies"><a href="/companies"><i class="fa fa-folder-open"></i> <span> Empresas</span></a></li>
          <li id="friends"><a href="/friends"><i class="fa fa-thumbs-o-up"></i> <span> Amigos</span></a></li>
          <li id="myposts"><a href="/posts/myposts"><i class="fa fa-file"></i> <span> Os meus Posts</span></a></li>
        </ul>

        <div class="infosummary">
        </div><!-- infosummary -->
        
      </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->
    <div class="mainpanel">

      <div class="headerbar">

      <?php echo $this->Session->flash();?>
        <a class="menutoggle"><i class="fa fa-bars"></i></a>
        
        <div class="header-right">
  
          <ul class="headermenu">
            <li>
              <div class="btn-group">

                <!-- Número de pedidos de amizade a apresentar no icon-->
                <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown" input action="checkActivities" type="submit" value="Submit">
                  <i class="glyphicon glyphicon-user"></i>
                  <span class="badge"><?php if(count($friend_requests)>0) echo count($friend_requests); ?></span>
                </button>

                <!-- Número de pedidos de amizade -->
                <div class="dropdown-menu dropdown-menu-head pull-right">
                  <h5 class="title">
                  <?php
                  if(count($friend_requests)==0)
                          echo 'Não tem pedidos de amizade novos';
                        else if(count($friend_requests)==1)
                          echo 'Tem 1 pedido de amizade novo';
                        else if(count($friend_requests)>1)
                          echo 'Tem '.count($friend_requests).' pedidos de amizade novos';
                   ?>
                  </h5>
                  <ul class="dropdown-list user-list">
                  <?php
                  /* Listagem dos pedidos de amizade */
                  for($i=0;$i<count($friend_requests);$i++)
                  {
                    echo'
                      <li class="novo">
                        <div class="thumb"><a href=""><img src="';
                        echo $request_user[$i][0]['User']['picture'];
                        echo '" alt="" /></a></div>
                        <div class="desc">
                          <h5><a href="">';

                          echo $request_user[$i][0]['User']['first_name'].' '.$request_user[$i][0]['User']['last_name']. '(@'.$request_user[$i][0]['User']['username'].') ';
                         
                          echo '</a> <span class="badge badge-success">
                          Novo
                          </span></h5>
                        </div>
                      </li>
                      ';
                  }

                    echo '<li class="novo"><a href="/friends/accept_index/">Ver todos os pedidos</a></li>';
                    ?>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="btn-group">
                <!-- Número de mensagens a apresentar no icon-->
                <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-envelope"></i>
                  <span class="badge"><?php if(count($chat_received)+count($chat_sent)>0) echo count($chat_received)+count($chat_sent); ?></span>
                </button>

                <!-- Número de mensagens-->
                <div class="dropdown-menu dropdown-menu-head pull-right">
                    <h5 class="title"><?php 
                  if(count($chat_received)+count($chat_sent)==1)
                    echo 'Tens 1 mensagem nova';
                  else if(count($chat_received)+count($chat_sent)>1)
                    echo 'Tens '.count($chat_received)+count($chat_sent).' mensagens novas';
                  else
                    echo 'Não tens mensagens novas';
                  ?></h5>
                  <ul class="dropdown-list gen-list">

                  <!-- Listagem das mensagens-->
                  <?php 
                  for($i=0;$i<count($chat_received);$i++)
                  {
                    if($chat_session_user[$i][0]['User']['username'] != $_SESSION["Auth"]["User"]["username"])
                    echo '
                      <li class="novo">
                        <a href="">
                          <span class="thumb"><img src="img/uploads/'. $chat_session_user[$i][0]['User']['picture'] .'" alt="" /></span>
                          <span class="desc">
                            <span class="name">'.$chat_session_user[$i][0]['User']['first_name']. ' '.$chat_session_user[$i][0]['User']['last_name'].'<span class="badge badge-success">novo</span></span>
                            <span class="msg">'. $chat_received[$i]['Chat']['text'] .'</span>
                          </span>
                        </a>
                      </li>
                    '; 
                  } 
                  for($i=0;$i<count($chat_sent);$i++)
                  {
                    if($chat_user[$i][0]['User']['username'] != $_SESSION["Auth"]["User"]["username"])
                    echo '
                      <li class="novo">
                        <a href="">
                          <span class="thumb"><img src="img/uploads/'. $chat_user[$i][0]['User']['picture'] .'" alt="" /></span>
                          <span class="desc">
                            <span class="name">'.$chat_user[$i][0]['User']['first_name']. ' '.$chat_user[$i][0]['User']['last_name'].'<span class="badge badge-success">novo</span></span>
                            <span class="msg">'. $chat_sent[$i]['Chat']['text'] .'</span>
                          </span>
                        </a>
                      </li>
                    '; 
                  } 
                  ?>
                    <li class="novo"><a href="/chats/index">Ler todas as mensagens</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="btn-group">
                <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-globe"></i>

                  <!-- Número de actividades a apresentar no icon-->
                  <span class="badge"><?php if(count($activities)>0){echo count($activities);}?></span>
                </button>
                <div class="dropdown-menu dropdown-menu-head pull-right">

                <!-- Número de actividades -->
                  <h5 class="title"><?php 
                  if(count($activities)==1)
                    echo 'Tens 1 notificação nova';
                  else if(count($activities)>1)
                    echo 'Tens '.count($activities).' notificações novas';
                  else
                    echo 'Não tens notificações novas';
                  ?></h5>
                  <ul class="dropdown-list gen-list">
                  <!-- Listagem das actividades -->
                   <?php 
                   if(count($activities)>0)
                   {
                     for($i=0;$i<count($activities);$i++){
                      echo '<li class="novo">';
                        if($activities[$i]['Activity']['type']=='comment' || 'like' || 'post'){ echo '<a href="/posts/view/'.$activities[$i]['Activity']['activity_id'].'"">';}
                        else{ echo '<a href="/items/view/'.$activities[$i]['Activity']['activity_id'].'"">';}
                          echo '<span class="thumb"><img src="'.$activity_user[0][$i]['User']['picture'].'" alt="" /></span>
                          <span class="desc">
                            <span class="name">'.$activity_user[0][$i]['User']['first_name']." ".$activity_user[0][$i]['User']['last_name']."";
                            if($activities[$i]['Activity']['checked']==0){echo '<span class="badge badge-success">novo</span>';}
                            if($activities[$i]['Activity']['type']=='comment'){echo '<span class="msg">comentou uma publicação tua</span>';}
                            if($activities[$i]['Activity']['type']=='like'){echo '<span class="msg">gostou de uma publicação tua</span>';}
                            if($activities[$i]['Activity']['type']=='item'){echo '<span class="msg">publicou um produto</span>';}
                            if($activities[$i]['Activity']['type']=='post'){echo '<span class="msg">fez uma publicação</span>';}
                         echo ' </span>
                        </a>
                      </li>';
                    }
                  }
                    //var_dump($activities);
                   ?>
                    <li class="novo"><a href="/activities/index">Ver todas as notificações</a></li>
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
                  <li><a href="/users/view/<?php echo $_SESSION['Auth']['User']['id'];?>"><i class="glyphicon glyphicon-user"></i> O meu perfil</a></li>
                  <li><a href="/users/edit/<?php echo $_SESSION['Auth']['User']['id']; ?>"><i class="glyphicon glyphicon-cog"></i> Definições de conta</a></li>
                  <li><a href="/companies/add"><i class="glyphicon glyphicon-folder-open"></i> Está associado a uma empresa?</a></li>
                  <li><a href="/pages/help"><i class="glyphicon glyphicon-question-sign"></i> Ajuda</a></li>
                  <li><a href="/users/lock"><i class="glyphicon glyphicon-lock"></i> Bloquear</a></li>
                  <li><a href="/users/logout"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div><!-- header-right -->
        
      </div><!-- headerbar -->
      
      <div class="contentpanel">
       <!-- Page content -->
       <?php echo $content_for_layout; ?>
     </div><!-- contentpanel -->
     
   </div><!-- mainpanel -->
   
</section>

<?php echo $this->Html->script('jquery-1.10.2.min'); ?>

<?php echo $this->Html->script('jquery.datatables'); ?>

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


        
        <script type="text/javascript">
          //$('#home').addClass('active');
          $('#leftbar li').on('click', function(){
              //$('#home').removeClass('active');
              $(this).addClass('active').siblings().removeClass('active');
          });
        </script>

</body>
</html>
