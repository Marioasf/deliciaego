  <?php echo $this->Html->css('style.default'); ?>
  <?php echo $this->Html->css('prettyPhoto'); ?>
  
  <div class="pageheader">
  	<h2><i class="fa fa-user"></i> Pedidos de amizade</h2>
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
        if($friends)
        {
          for($i=0; $i<count($friends); $i++)
          {
    				echo '
    				<div class="col-md-6">
    					<div class="people-item">
    						<div class="media">
    							<a href="users/view/'.$friend_info[$i][0]['User']['id'].'" class="pull-left">
    								<img alt="" src="'.$friend_info[$i][0]['User']['picture'].'" class="thumbnail media-object">
    							</a>
    							<div class="media-body">
                  <a href="users/view/'.$friend_info[$i][0]['User']['id'].'">
    								<h4 class="person-name">'.$friend_info[$i][0]['User']['first_name'].' '.$friend_info[$i][0]['User']['last_name'].'</h4>
                  </a>
    								<div class="text-muted"><i class="fa fa-map-marker"></i> '.$friend_info[$i][0]['User']['country'].'</div>
    								<div class="text-muted"><i class="fa fa-briefcase"></i> '.$friend_info[$i][0]['User']['company'].'</a></div>
    								<ul class="social-list">
    									<li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Email"><i class="fa fa-envelope-o"></i></a></li>
    									<li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
    									<li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
    									<li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
    									<li><a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
    								</ul>';
                    echo $this->Form->create('Friend');
                    echo $this->Form->input('id', array('value' => $friends[$i]['Friend']['id'], 'type' => 'hidden'));
                    $dt = date("Y-m-d h:i:s");
                    echo $this->Form->input('datemade',array('value' => $dt, 'type' => 'hidden'));
                    echo $this->Form->input('accepted',array('value' => '1', 'type' => 'hidden'));
                    echo $this->Form->submit('Aceitar pedido de amizade', array(
                       'id' => $friend_info[$i][0]['User']['username'],
                       'class' => 'btn btn-sm btn-success mr5',
                       'onclick' => 'accept_index(this.id)'
                     ));
                     echo $this->Form->end();
    							echo '</div>
    						</div>
    					</div>
    				</div><!-- col-md-6 -->';
             
            } 
           
          }
          else
          {
            echo '<div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              Não tem pedidos de amizade pendentes</a>!
            </div>';
            
          }
          ?>
  			</div><!-- row -->
  		</div><!-- people-list -->

  	</div><!-- contentpanel -->