<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Deliciaego, o seu portal de ofertas</title>

  <?php echo $this->Html->css('style.default'); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

  <!-- Preloader -->
  <div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
  </div>


<section>
    <div class="lockedpanel">
        <div class="locked">
            <i class="fa fa-lock"></i>
        </div>
        <?php
        if(!empty($user['User']['picture'])) 
          echo '<div class="loginuser">
            <img src="'.$user['User']['picture'].'" alt="">
        </div>';
        ?>
        <div class="logged">
            <h4><?php echo $user['User']['first_name']; ?> <?php echo $user['User']['last_name']; ?></h4>
            <small class="text-muted"><?php echo $user['User']['email']; ?></small>
        </div>
        <form method="post" action="/users/login">
            <input type="hidden" class="form-control uname" placeholder="Utilizador" name="data[User][username]" maxlength="16" id="UserUsername" required="required" value="<?php echo $user['User']['username']; ?>"/>
            <input type="password" class="form-control pword" placeholder="Palavra-passe" input name="data[User][password]" id="UserPassword" required="required"/>
            <button class="btn btn-success btn-block">Desbloquear</button>
        </form>

        <div class="signup-footer">
          <div class="pull-left">
            &copy; 2014. All Rights Reserved. Deliciaego
          </div>
          <div class="pull-right">
            Created By: <a href="" target="_blank">Deliciaego</a>
          </div>
        </div>
    </div><!-- lockedpanel -->
      
    </section>

<?php echo $this->Html->script('jquery-1.10.2.min'); ?>
<?php echo $this->Html->script('jquery-migrate-1.2.1.min'); ?>
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->Html->script('modernizr.min'); ?>
<?php echo $this->Html->script('jquery.sparklin.min'); ?>
<?php echo $this->Html->script('jquery.cookies.min'); ?>

<?php echo $this->Html->script('toggles.min'); ?>
<?php echo $this->Html->script('retina.min'); ?>

<?php echo $this->Html->script('custom'); ?>

<script>
    jQuery(document).ready(function(){
        
        "use strict";
        
        // Do not use the code below
        // This is for demo purposes only
        var c = jQuery.cookie('change-skin');
        if (c && c == 'katniss') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        }
        
    });
</script>


</body>