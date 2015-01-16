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
    
    
    <div class="signinpanel">
  

      <div class="row">
           
        <div class="col-md-7">
                  <?php
            echo $this->Session->flash();
          ?>
          <div class="signin-info">
            <div class="logopanel">
              <h1><span>[</span> Deliciaego <span>]</span></h1>
            </div><!-- logopanel -->
            
            <div class="mb20"></div>
            
            <h5><strong>Bem-vindo!</strong></h5>
            <ul>
              <li><i class="fa fa-arrow-circle-o-right mr5"></i> As melhores ofertas da internet</li>
              <li><i class="fa fa-arrow-circle-o-right mr5"></i> Partilhe com os seus amigos</li>
              <li><i class="fa fa-arrow-circle-o-right mr5"></i> Totalmente gratuito</li>
              <li><i class="fa fa-arrow-circle-o-right mr5"></i> e muito mais...</li>
            </ul>
            <div class="mb20"></div>
            <strong>Ainda não se registou? <a href="/users/signup">Faça-o agora</a></strong>
          </div><!-- signin0-info -->
          
        </div><!-- col-sm-7 -->
        
        <div class="col-md-5">
          
          <form method="post" action="/users/login">
            <h4 class="nomargin">Entrar</h4>
            <p class="mt5 mb20">Introduza os seus dados para aceder à sua conta.</p>
            
            <input type="text" class="form-control uname" placeholder="Utilizador" name="data[User][username]" maxlength="16" id="UserUsername" required="required"/>
            <input type="password" class="form-control pword" placeholder="Palavra-passe" input name="data[User][password]" id="UserPassword" required="required"/>
            <a href="#"><small>Esqueceu-se da palavra-passe?</small></a>
            <button class="btn btn-success btn-block">Entrar</button>
            
          </form>
        </div><!-- col-sm-5 -->
        
      </div><!-- row -->
      
      <div class="signup-footer">
        <div class="pull-left">
          &copy; 2014. All Rights Reserved. Deliciaego
        </div>
        <div class="pull-right">
          Created By: <a href="" target="_blank">Deliciaego</a>
        </div>
      </div>
      
    </div><!-- signin -->
    
  </section>

  <?php echo $this->Html->script('jquery-1.10.2.min'); ?>
  <?php echo $this->Html->script('jquery-migrate-1.2.1.min'); ?>
  <?php echo $this->Html->script('bootstrap.min'); ?>
  <?php echo $this->Html->script('modernizr.min'); ?>
  <?php echo $this->Html->script('retina.min'); ?>

  <?php echo $this->Html->script('custom'); ?>

</body>
</html>