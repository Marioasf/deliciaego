  <?php echo $this->Html->css('style.default'); ?>
  <?php echo $this->Html->css('prettyPhoto'); ?>
  
  <div class="pageheader">
  	<h2><i class="fa fa-user"></i> Amigos</h2>
  	<div class="breadcrumb-wrapper">
  		<span class="label">Caminho :</span>
  		<ol class="breadcrumb">
  			<li><a href="/">Deliciaego</a></li>
  			<li class="active">Amigos</li>
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

    <?php
        $paginator = $this->Paginator;
        echo 'Ordenar por:';
        echo $paginator->sort('first_name', 'Nome /');
        echo $paginator->sort('country', 'País /');
        echo $paginator->sort('company', 'Empresa');
      ?>

  	<div class="mb30"></div>

  	<div class="people-list">
  		<div class="row">
  			<?php 
        if(isset($friend_info_user1))
        {
          for($i=0; $i<count($friend_info_user1); $i++)
          {
            if($friend_info_user1[$i][0]['User']['username'] != $_SESSION["Auth"]["User"]["username"])
    				echo '
    				<div class="col-md-6">
    					<div class="people-item">
    						<div class="media">
    							<a href="users/view/'.$friend_info_user1[$i][0]['User']['id'].'" class="pull-left">
    								<img alt="" src="'.$friend_info_user1[$i][0]['User']['picture'].'" class="thumbnail media-object">
    							</a>
    							<div class="media-body">
                  <a href="users/view/'.$friend_info_user1[$i][0]['User']['id'].'">
    								<h4 class="person-name">'.$friend_info_user1[$i][0]['User']['first_name'].' '.$friend_info_user1[$i][0]['User']['last_name'].'</h4>
                  </a>
    								<div class="text-muted"><i class="fa fa-map-marker"></i> '.$friend_info_user1[$i][0]['User']['country'].'</div>
    								<div class="text-muted"><i class="fa fa-briefcase"></i> '.$friend_info_user1[$i][0]['User']['company'].'</a></div>
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
    				</div><!-- col-md-6 -->';
            } 
          }
          
          if(isset($friend_info_user2))
        {
          for($i=0; $i<count($friend_info_user2); $i++)
          {
            if($friend_info_user2[$i][0]['User']['username'] != $_SESSION["Auth"]["User"]["username"])
            echo '
            <div class="col-md-6">
              <div class="people-item">
                <div class="media">
                  <a href="users/view/'.$friend_info_user2[$i][0]['User']['id'].'" class="pull-left">
                    <img alt="" src="'.$friend_info_user2[$i][0]['User']['picture'].'" class="thumbnail media-object">
                  </a>
                  <div class="media-body">
                  <a href="users/view/'.$friend_info_user2[$i][0]['User']['id'].'">
                    <h4 class="person-name">'.$friend_info_user2[$i][0]['User']['first_name'].' '.$friend_info_user2[$i][0]['User']['last_name'].'</h4>
                  </a>
                    <div class="text-muted"><i class="fa fa-map-marker"></i> '.$friend_info_user2[$i][0]['User']['country'].'</div>
                    <div class="text-muted"><i class="fa fa-briefcase"></i> '.$friend_info_user2[$i][0]['User']['company'].'</a></div>
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
            </div><!-- col-md-6 -->';
            } 
          }
          else
          {
            echo 
                           '<div class="alert alert-info">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                             <strong>Atenção!</strong> Não tens amigos ainda. Clica aqui para começares a <a href="/users/index" class="alert-link">adicionar</a>!
                           </div>';
          }
          ?>
  			</div><!-- row -->
  		</div><!-- people-list -->

  	</div><!-- contentpanel -->