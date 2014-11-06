<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Deliciaego</title>

  <?php echo $this->Html->css('style.default'); ?>
  <?php echo $this->Html->css('style.blue'); ?>

  <?php echo $this->Html->script('jquery-1.10.2.min'); ?>
  <?php echo $this->Html->script('jquery-migrate-1.2.1.min'); ?>
  <?php echo $this->Html->script('modernizr.min'); ?>
  <?php echo $this->Html->script('bootstrap.min'); ?>
  <?php echo $this->Html->script('jquery.dropdown'); ?>
  <?php echo $this->Html->script('custom'); ?>

  <script>
    jQuery(document).ready(function(){
      var winHeight = jQuery(window).height();
      jQuery('#framedemo').height(winHeight - 65);

      jQuery('#cd-dropdown').dropdown( {
        gutter : 5,
        stack : false,
        slidingIn : 100
      });


    });
  </script>

</head>

<body>
  <div class="headframe">
    <div class="row-fluid">
      <div class="span3"><a href="http://themepixels.com/"><img src="../../../images/tp-logo.png" /></a></div>
      <div class="span9 align-right">
        <a href="_div%20style%3d.html"border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

          <h4>A PHP Error was encountered</h4>

          <p>Severity: Notice</p>
          <p>Message:  Trying to get property of non-object</p>
          <p>Filename: views/demo.php</p>
          <p>Line Number: 40</p>

        </div>" class="btn btn-primary btn-small"><span class="iconfa-shopping-cart"></span> Purchase Theme</a>
        <a href="_div%20style%3d.html"border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

          <h4>A PHP Error was encountered</h4>

          <p>Severity: Notice</p>
          <p>Message:  Trying to get property of non-object</p>
          <p>Filename: views/demo.php</p>
          <p>Line Number: 41</p>

        </div>" class="btn btn-black btn-small"><span class="cls">&times;</span> Remove Frame</a>
      </div>
    </div><!-- row-fluid -->
  </div>
  <iframe id="framedemo" src="_div%20style%3d.html"border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

    <h4>A PHP Error was encountered</h4>

    <p>Severity: Notice</p>
    <p>Message:  Trying to get property of non-object</p>
    <p>Filename: views/demo.php</p>
    <p>Line Number: 45</p>

  </div>"></iframe>

</body>
</html>