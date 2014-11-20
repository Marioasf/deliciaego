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
	        
	        <div class="mb30"></div>
	        
	        <div class="people-list">
	          <div class="row">
	            <?php
	            $friends_button='<button id="friend" class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Amigos</button>';
	            $addfriend_button='<button id="add_friend" class="btn btn-sm btn-success mr5" onclick="friendRequest(this.id)" ><i class="fa fa-user"></i> Enviar pedido de amizade</button>';
	            for($i=0; $i<count($users); $i++)
	            {
	              $found_user=false;
	              echo '
	              <div class="col-md-6">
	                <div class="people-item">
	                  <div class="media">';
	                  if(isset($friends[$i]) && $friends[$i]['Friend']['accepted']==1) 
	                  {
	                    echo '<a href="users/view/'.$users[$i]['User']['id'].'" class="pull-left">
	                      <img alt="" src="'.$users[$i]['User']['picture'].'" class="thumbnail media-object">
	                    </a>
	                    <div class="media-body">
	                      <a href="users/view/'.$users[$i]['User']['id'].'">
	                        <h4 class="person-name">'.$users[$i]['User']['first_name'].' '.$users[$i]['User']['last_name'].'</h4>
	                      </a>';
	                  }
	                    else
	                     {
	                      echo '
	                         <div class="pull-left"><img alt="" src="'.$users[$i]['User']['picture'].'" class="thumbnail media-object"></div>
	                        <div class="media-body">
	                           <div> <h4 class="person-name">'.$users[$i]['User']['first_name'].' '.$users[$i]['User']['last_name'].'</h4></div>
	                      ';
	                  	}
	                      echo '<div class="text-muted"><i class="fa fa-map-marker"></i> '.$users[$i]['User']['country'].'</div>
	                      <div class="text-muted"><i class="fa fa-briefcase"></i> '.$users[$i]['User']['company'].'</a></div>
	                      <ul class="social-list">
	                       <li>';
	                       for($j=0;$j<count($friends);$j++)
	                       {//percorre array de amigos
	      	                   if($users[$i]['User']['username']===$friends[$j]['Friend']['user2'] && !$found_user)//verificar se é amigo, coloca botão Amigos
	                           { 
	                            if($friends[$j]['Friend']['accepted']==1)
	                            {
	                              echo '<button id="friend" class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Amigos</button>';
	                              $found_user=true;
	                            }
	                            else
	                            {
	                                echo '<button id="waiting_friend" class="btn btn-sm btn-success mr5" ><i class="fa fa-user"></i> Pedido de amizade enviado!</button>';
	                                $found_user=true;
	                            }
	                          }
	                        } 
	                     if(!$found_user) //senão coloca botão para adicionar amigos
	                     {
	                     	
	                     	echo $this->Form->create('Friend');
							echo $this->Form->input('user1',array('value' => $_SESSION["Auth"]["User"]["username"], 'type' => 'hidden'));
							echo $this->Form->input('user2',array('value' => $users[$i]['User']['username'], 'type' => 'hidden'));
							$dt = date("Y-m-d h:i:s");
							echo $this->Form->input('datemade',array('value' => $dt, 'type' => 'hidden'));
							echo $this->Form->input('accepted',array('value' => '0', 'type' => 'hidden'));
	                     	//echo '<div class="pull-left"><i class="fa fa-user"></i>';
					        //echo '<div class="pull-right">';
					        echo $this->Form->submit(' Enviar pedido de amizade', array(
					        	'id' => $users[$i]['User']['username'],
								'class' => 'btn btn-sm btn-success mr5',
								'onclick' => 'friendRequest(this.id)',
								'title' => '</div class="pull-left"><i class="fa fa-user"></i>'
							));
							echo $this->Form->end();
							//echo '</div></div>';
	                      $found_user=true;
	                    }
	                    echo ' </li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	          </div><!-- col-md-6 -->';
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

	    </div><!-- contentpanel -->
