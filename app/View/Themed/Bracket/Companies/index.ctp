          <?php echo $this->Html->css('style.default'); ?>
          <?php echo $this->Html->css('prettyPhoto'); ?>
              
          <div class="pageheader">
            <h2><i class="fa fa-briefcase"></i> Empresas</h2>
            <div class="breadcrumb-wrapper"> 
              <span class="label">Caminho:</span>
              <ol class="breadcrumb">
                <li><a href="/">Deliciaego</a></li> 
                <li class="active">Empresas</li>
              </ol>
            </div>
          </div>
          
          <div class="contentpanel">
            
            <div class="mb30"></div>
            <?php
                    $paginator = $this->Paginator;
                    echo 'Ordenar por:';
                    echo $paginator->sort('name', 'Nome /');
                    echo $paginator->sort('location', 'Localização /');
                    echo $paginator->sort('category', 'Tipo');
                  ?>
            <div class="people-list">
              <div class="row">
                <?php
                $follower_button='<button id="follower" class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> A seguir</button>';
                $followcompany_button='<button id="followcompany" class="btn btn-sm btn-success mr5" onclick="followRequest(this.id)" ><i class="fa fa-user"></i> Seguir esta empresa</button>';
                for($i=0; $i<count($companies); $i++)
                {
                  $found_company=false;
                  echo '
                  <div class="col-md-6">
                    <div class="people-item">
                      <div class="media">';

                        echo '<a href="companies/view/'.$companies[$i]['Company']['id'].'" class="pull-left">';
                          if(!empty($companies[$i]['Company']['picture'])) echo '<img alt="" src="'.$companies[$i]['Company']['picture'].'" class="thumbnail media-object">';
                        echo '</a>
                        <div class="media-body">
                          <a href="companies/view/'.$companies[$i]['Company']['id'].'">
                            <h4 class="person-name">'.$companies[$i]['Company']['name'].'</h4>
                          </a>';
               
                          if(!empty($companies[$i]['Company']['address'])) echo '<div class="text-muted"><i class="fa fa-map-marker"></i> '.$companies[$i]['Company']['address'].'</div>';
                          if(!empty($companies[$i]['Company']['location'])) echo '<div class="text-muted"><i class="fa fa-globe"></i> '.$companies[$i]['Company']['location'].'</a></div>';
                          echo '<ul class="social-list">
                           <li>';
                           if ($this->Session->read('Auth.User')) 
                           {
                             for($j=0; $j<count($followers);$j++)
                             {

                              if($followers[$j]['Follower']['company']===$companies[$i]['Company']['name'] && $followers[$j]['Follower']['user']===$_SESSION["Auth"]["User"]["username"] && !$found_company)//verificar se utilizador segue a empresa
                                 { 
                                   
                                      echo '<button id="follower" class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> A seguir</button>';
                                      $found_company=true;
                                  }
                              }
                              if(!$found_company)//senão coloca botão para adicionar amigos
                              {
                                      echo $this->Form->create('Follower');
                                      echo $this->Form->input('user',array('value' => $_SESSION["Auth"]["User"]["username"], 'type' => 'hidden'));
                                      echo $this->Form->input('company',array('value' => $companies[$i]['Company']['name'], 'type' => 'hidden'));
                                      $dt = date("Y-m-d h:i:s");
                                      echo $this->Form->input('datemade',array('value' => $dt, 'type' => 'hidden'));
                                      //echo '<div class="pull-left"><i class="fa fa-user"></i>';
                                      //echo '<div class="pull-right">';
                                      echo $this->Form->submit(' Seguir esta empresa', array(
                                          'id' => $companies[$i]['Company']['name'],
                                          'class' => 'btn btn-sm btn-success mr5',
                                          'onclick' => 'followerRequest(this.id)',
                                          'title' => '</div class="pull-left"><i class="fa fa-user"></i>'
                                      ));
                                      echo $this->Form->end();
                                      //echo '</div></div>';
                                    $found_company=true;
                               }
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
            function followerRequest(id) {
                document.getElementById(id).value = "A seguir";
                alert(document.getElementById(id).value + " a " + id);
                //enviar dados para tabela Followers

            }
            </script>
            </div><!-- row -->
          </div><!-- people-list -->
          <?php echo $this->Paginator->pagination(array(
            'ul' => 'pagination'
          )); ?>
        </div><!-- contentpanel -->
