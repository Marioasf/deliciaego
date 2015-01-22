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
            if($friend_info_user1[$i][0]['User']['username'] != $_SESSION["Auth"]["User"]["username"]){
    				echo '
    				<div class="col-md-5">
    					<div class="people-item">
    						<div class="media">
    							<a href="users/view/'.$friend_info_user1[$i][0]['User']['id'].'" class="pull-left">';
                  if(!empty($friend_info_user1[$i][0]['User']['picture']))
    								echo '<img alt="" src="'.$friend_info_user1[$i][0]['User']['picture'].'" class="thumbnail media-object">';
    							echo '</a>
    							<div class="media-body">
                  <a href="users/view/'.$friend_info_user1[$i][0]['User']['id'].'">
    								<h4 class="person-name">'.$friend_info_user1[$i][0]['User']['first_name'].' '.$friend_info_user1[$i][0]['User']['last_name'].'</h4>
                  </a>';
    								if(!empty($friend_info_user1[$i][0]['User']['country'])) echo '<div class="text-muted"><i class="fa fa-map-marker"></i> '.$friend_info_user1[$i][0]['User']['country'].'</div>';
    								if(!empty($friend_info_user1[$i][0]['User']['company'])) echo '<div class="text-muted"><i class="fa fa-briefcase"></i> '.$friend_info_user1[$i][0]['User']['company'].'</a></div>';
    								echo '<ul class="social-list">';
    									 if(!empty($friend_info_user1[$i][0]['User']['email'])) {
                        echo '<li><a href="mailto:'; 
                        echo $friend_info_user1[$i][0]['User']['email'];
                        echo '" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>';
                      }
                      if(!empty($friend_info_user1[$i][0]['User']['website'])) {
                        echo '<li><a href="'.$friend_info_user1[$i][0]['User']['website'].'" class="tooltips" data-toggle="tooltip" data-placement="top" title="Website"><i class="fa fa-external-link-square"></i></a></li>';
                      }
    									if(!empty($friend_info_user1[$i][0]['User']['facebook'])) {
                        echo '<li><a href="'.$friend_info_user1[$i][0]['User']['facebook'].'" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>';
                      }
    									if(!empty($friend_info_user1[$i][0]['User']['google'])) {
                        echo '<li><a href="'.$friend_info_user1[$i][0]['User']['google'].'" class="tooltips" data-toggle="tooltip" data-placement="top" title="Google"><i class="fa fa-google-plus"></i></a></li>';
                      }
    									if(!empty($friend_info_user1[$i][0]['User']['twitter'])) {
                        echo '<li><a href="'.$friend_info_user1[$i][0]['User']['twitter'].'" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>';
                      }
    								echo '</ul>
    							</div>
    						</div>
    					</div>
    				</div><!-- col-md-5 -->';
            } 
          }
          }

          if(isset($friend_info_user2))
        {
          for($i=0; $i<count($friend_info_user2); $i++)
          {

            if($friend_info_user2[$i][0]['User']['username'] != $_SESSION["Auth"]["User"]["username"]){
            echo '
            <div class="col-md-5">
              <div class="people-item">
                <div class="media">
                  <a href="users/view/'.$friend_info_user2[$i][0]['User']['id'].'" class="pull-left">';
                    if(!empty($friend_info_user1[$i][0]['User']['picture']))
                    echo '<img alt="" src="'.$friend_info_user2[$i][0]['User']['picture'].'" class="thumbnail media-object">';
                  echo '</a>
                  <div class="media-body">
                  <a href="users/view/'.$friend_info_user2[$i][0]['User']['id'].'">
                    <h4 class="person-name">'.$friend_info_user2[$i][0]['User']['first_name'].' '.$friend_info_user2[$i][0]['User']['last_name'].'</h4>
                  </a>';
                    if(!empty($friend_info_user2[$i][0]['User']['country'])) echo '<div class="text-muted"><i class="fa fa-map-marker"></i> '.$friend_info_user2[$i][0]['User']['country'].'</div>';
                    if(!empty($friend_info_user2[$i][0]['User']['company'])) echo '<div class="text-muted"><i class="fa fa-briefcase"></i> '.$friend_info_user2[$i][0]['User']['company'].'</a></div>';
                    echo '<ul class="social-list">';
                      if(!empty($friend_info_user2[$i][0]['User']['email'])) {
                        echo '<li><a href="mailto:'; 
                        echo $friend_info_user2[$i][0]['User']['email'];
                        echo '" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>';
                      }
                      if(!empty($friend_info_user2[$i][0]['User']['website'])) {
                        echo '<li><a href="'.$friend_info_user2[$i][0]['User']['website'].'" class="tooltips" data-toggle="tooltip" data-placement="top" title="Website"><i class="fa fa-external-link-square"></i></a></li>';
                      }
                      if(!empty($friend_info_user2[$i][0]['User']['facebook'])) {
                        echo '<li><a href="'.$friend_info_user2[$i][0]['User']['facebook'].'" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>';
                      }
                      if(!empty($friend_info_user2[$i][0]['User']['google'])) {
                        echo '<li><a href="'.$friend_info_user2[$i][0]['User']['google'].'" class="tooltips" data-toggle="tooltip" data-placement="top" title="Google"><i class="fa fa-google-plus"></i></a></li>';
                      }
                      if(!empty($friend_info_user2[$i][0]['User']['twitter'])) {
                        echo '<li><a href="'.$friend_info_user2[$i][0]['User']['twitter'].'" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>';
                      }
                    echo '</ul>
                  </div>
                </div>
              </div>
            </div><!-- col-md-5 -->';
            } 
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