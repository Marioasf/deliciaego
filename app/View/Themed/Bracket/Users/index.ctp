	      <?php echo $this->Html->css('style.default'); ?>
	      <?php echo $this->Html->css('prettyPhoto'); ?>
	          
	      <div class="pageheader">
	        <h2><i class="fa fa-user"></i> Utilizadores</h2>
	        <div class="breadcrumb-wrapper"> 
	          <span class="label">Caminho:</span>
	          <ol class="breadcrumb">
	            <li><a href="/">Deliciaego</a></li> 
	            <li class="active">Utilizadores</li>
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
	        
	          <!--<a class="btn btn-info-alt">Ordenar por:</a>-->
			
			<?php echo $this->Session->flash();?>
	         
	        <div class="people-list">
	          <div class="row">
	            <?php
	            /*Lista utilizadores amigos com pedidos aceites*/
	            if(isset($accepted_friends_info) && !empty($accepted_friends_info))
		            for($i=0; $i<count($accepted_friends_info); $i++){	
						echo '<div class="col-md-5">
			                <div class="people-item">
			                	<div class="media"><a href="users/view/'.$accepted_friends_info[$i]['User']['id'].'" class="pull-left">';
			                	if(!empty($accepted_friends_info[$i]['User']['picture']))
			                      echo '<img alt="" src="'.$accepted_friends_info[$i]['User']['picture'].'" class="thumbnail media-object">
			                    </a>';
			                    echo '<div class="media-body">
			                      <a href="users/view/'.$accepted_friends_info[$i]['User']['id'].'">
			                        <h4 class="person-name">'.$accepted_friends_info[$i]['User']['first_name'].' '.$accepted_friends_info[$i]['User']['last_name'].'</h4>
			                      </a>';
			                      if(!empty($accepted_friends_info[$i]['User']['country']))
			                      echo '<div class="text-muted"><i class="fa fa-map-marker"></i> '.$users[$i]['User']['country'].'</div>';
			                  	  if(!empty($accepted_friends_info[$i]['User']['company']))
			                      echo '<div class="text-muted"><i class="fa fa-briefcase"></i> '.$accepted_friends_info[$i]['User']['company'].'</a></div>';
			                      echo '<ul class="social-list">
			                       <li><button id="friend" class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Amigos</button>
			                       </li>
			                  </ul>
			                </div>
			              </div>
			            </div>

			            </div>
			          </div><!-- col-md-5 -->';
			      }
			    /*Lista utilizadores com pedido de amizade pendente*/
		      	if(!empty($not_accepted_friends_info))
		            for($i=0; $i<count($not_accepted_friends_info); $i++){
			      		echo '<div class="col-md-5">
		                       	  <div class="people-item">
		                       	    <div class="media">';
		                       	    if(!empty($not_accepted_friends_info[$i]['User']['picture']))
		                       	    echo '<div class="pull-left"><img alt="" src="'.$not_accepted_friends_info[$i]['User']['picture'].'" class="thumbnail media-object"></div>';
		                        echo '<div class="media-body">
		                           <div> <h4 class="person-name">'.$not_accepted_friends_info[$i]['User']['first_name'].' '.$not_accepted_friends_info[$i]['User']['last_name'].'</h4></div>';
		                           if(!empty($not_accepted_friends_info[$i]['User']['country']))
		                           	echo '<div class="text-muted"><i class="fa fa-map-marker"></i> '.$not_accepted_friends_info[$i]['User']['country'].'</div>';
		                      if(!empty($not_accepted_friends_info[$i]['User']['company'])) echo '<div class="text-muted"><i class="fa fa-briefcase"></i> '. $not_accepted_friends_info[$i]['User']['company'].'</a></div>';
		                      echo '<ul class="social-list">
		                       <li>
		                       <button id="waiting_friend" class="btn btn-sm btn-success mr5" ><i class="fa fa-user"></i> Pedido de amizade enviado!</button>
		                         </ul>
				                </div>
				              </div>
				            </div>

			            </div>
				          </div><!-- col-md-5 -->';
		            }

				 if(isset($user_info))
		            for($i=0; $i<count($user_info); $i++){
				            echo '<div class="col-md-5">
	                         <div class="people-item">
	                           <div class="media">

	                         <div class="pull-left">';
	                         if(!empty($user_info[$i]['User']['picture']))
	                         echo '<img alt="" src="'.$user_info[$i]['User']['picture'].'" class="thumbnail media-object"></div>';
	                        echo '<div class="media-body">
	                           <div> <h4 class="person-name">'.$user_info[$i]['User']['first_name'].' '.$user_info[$i]['User']['last_name'].'</h4></div>';
	                           if(!empty($user_info[$i]['User']['country']))
	                           echo '<div class="text-muted"><i class="fa fa-map-marker"></i> '.$user_info[$i]['User']['country'].'</div>';
	                       		if(!empty($user_info[$i]['User']['company']))
		                      echo '<div class="text-muted"><i class="fa fa-briefcase"></i> '.$user_info[$i]['User']['company'].'</a></div>';
		                      echo '<ul class="social-list">
		                       <li>';
		                       		echo $this->Form->create('Friend');
									echo $this->Form->input('user1',array('value' => $_SESSION["Auth"]["User"]["username"], 'type' => 'hidden'));
									echo $this->Form->input('user2',array('value' => $user_info[$i]['User']['username'], 'type' => 'hidden'));
									
									echo $this->Form->input('accepted',array('value' => '0', 'type' => 'hidden'));
	                     			//echo '<div class="pull-left"><i class="fa fa-user"></i>';
					        		//echo '<div class="pull-right">';
					        		echo $this->Form->submit(' Enviar pedido de amizade', array(
								        	'id' => $user_info[$i]['User']['username'],
											'class' => 'btn btn-sm btn-success mr5',
											'onclick' => 'friendRequest(this.id)'
										));
									echo $this->Form->end();
		                       echo'</ul>
					                </div>
					              </div>
					            </div>
					            
			            </div>
					          </div><!-- col-md-5 -->';
					      }
	          ?>       

	        <script>
				//procura botão que foi clicado e altera o texto
				function friendRequest(id) {
				document.getElementById(id).value = "Pedido de amizade enviado";
				alert(document.getElementById(id).value + " a " + id);
				//enviar dados para tabela Friends
				}
	        </script>
	        </div><!-- row -->
	      </div><!-- people-list -->
		<?php echo $this->Paginator->pagination(array(
			'ul' => 'pagination'
		)); ?>
		<?php /*echo $this->Paginator->pagination(array(
			'ul' => 'pagination'
		));*/ ?>
	    </div><!-- contentpanel -->
