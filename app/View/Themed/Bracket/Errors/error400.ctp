<?php $this->layout=''; //set your layout here ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Bracket Responsive Bootstrap3 Admin</title>

  <?php echo $this->Html->css('style.default'); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="notfound">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="notfoundpanel">
    <h1>404!</h1>
    <h3>A página que procuravas não foi encontrada!</h3>
    <h4>A página que procuravas poderá ter sido removida, ter o seu nome alterado, ou encontra-se indisponível. <!--<br />Talvez tenhas mais sorte numa pesquisa:</h4>
    <form action="http://themepixels.com/demo/webpage/bracket/search-results.html">
        <input type="text" class="form-control" placeholder="Procura a página" /> <button class="btn btn-success">Procura</button>
    </form>
  </div><!-- notfoundpanel -->

</section>

<?php echo $this->Html->script('jquery-1.10.2.min'); ?>
<?php echo $this->Html->script('jquery-migrate-1.2.1.min'); ?>
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->Html->script('modernizr.min'); ?>
<?php echo $this->Html->script('retina.min'); ?>

<?php echo $this->Html->script('custom'); ?>

</body>
</html>
