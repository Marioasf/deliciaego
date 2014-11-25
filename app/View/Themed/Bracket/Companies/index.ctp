          <?php echo $this->Html->css('style.default'); ?>
          <?php echo $this->Html->css('prettyPhoto'); ?>
              
          <div class="pageheader">
            <h2><i class="fa fa-user"></i> Empresas</h2>
            <div class="breadcrumb-wrapper"> 
              <span class="label">Caminho:</span>
              <ol class="breadcrumb">
                <li><a href="/">Deliciaego</a></li> 
                <li class="active">Empresas</li>
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
                $follower_button='<button id="follower" class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> A seguir</button>';
                $followcompany_button='<button id="followcompany" class="btn btn-sm btn-success mr5" onclick="followRequest(this.id)" ><i class="fa fa-user"></i> Seguir esta empresa</button>';
                for($i=0; $i<count($companies); $i++)
                {
                  $found_company=false;
                  echo '
                  <div class="col-md-6">
                    <div class="people-item">
                      <div class="media">';

                        echo '<a href="companies/view/'.$companies[$i]['Company']['id'].'" class="pull-left">
                          <img alt="" src="'.$companies[$i]['Company']['picture'].'" class="thumbnail media-object">
                        </a>
                        <div class="media-body">
                          <a href="companies/view/'.$companies[$i]['Company']['id'].'">
                            <h4 class="person-name">'.$companies[$i]['Company']['name'].'</h4>
                          </a>';
               
                          echo '<div class="text-muted"><i class="fa fa-map-marker"></i> '.$companies[$i]['Company']['address'].'</div>
                          <div class="text-muted"><i class="fa fa-globe"></i> '.$companies[$i]['Company']['location'].'</a></div>
                          <ul class="social-list">
                           <li>';
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

        </div><!-- contentpanel -->
