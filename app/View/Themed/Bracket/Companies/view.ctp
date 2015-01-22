  <link href="css/style.default.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">   
    <div class="pageheader">
      <h2><i class="fa fa-briefcase"></i> Perfil <span><?php if(!empty($company[0]['Company']['name']))echo $company[0]['Company']['name']; ?></span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">Caminho:</span>
        <ol class="breadcrumb">
          <li><a href="/">Deliciaego</a></li>
          <li><a href="index.html">Empresas</a></li>
          <li class="active">Perfil</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
      
      <div class="row">
        <div class="col-sm-3">
          <?php  if(!empty(h($company[0]['Company']['picture']))) 
            echo '<img src="'.$company[0]['Company']['picture'].'" class="thumbnail img-responsive" alt="" />';?>
          
          <div class="mb30"></div>
          <?php
          if(!empty($company[0]['Company']['about']))
          echo '<h5 class="subtitle">Sobre</h5>
          <p class="mb30">'.$company[0]['Company']['about'].'&nbsp;</p>';
          
          /*Se utilizador tiver pelo menos um dos campos (twitter, facebook ou google) mostrar*/
          if(!empty(h($company[0]['Company']['twitter'])) || !empty(h($company[0]['Company']['facebook'])) 
            || !empty(h($company[0]['Company']['google'])))
             echo '<h5 class="subtitle">Ligações</h5>
             <ul class="profile-social-list">';
               if(!empty(h($company[0]['Company']['twitter']))) 
                echo '<li><i class="fa fa-twitter"></i> <a href="#">'.h($company[0]['Company']['twitter']).'&nbsp;</a></li>';
               if(!empty(h($company[0]['Company']['facebook'])))
                echo '<li><i class="fa fa-facebook"></i> <a href="#">'.h($company[0]['Company']['facebook']).'&nbsp;</a></li>';
               if(!empty(h($company[0]['Company']['google'])))
                echo '<li><i class="fa fa-google-plus"></i> <a href="#">'.h($company[0]['Company']['google']).'&nbsp;</a></li>';
             echo '</ul>';
          ?>
          <div class="mb30"></div>          
        </div><!-- col-sm-3 -->
        <div class="col-sm-9">
          
          <div class="profile-header">
            <h2 class="profile-name"><?php echo $company[0]['Company']['name']; ?>&nbsp;</h2>
            <?php if(!empty(h($company[0]['Company']['location']))) 
              echo '<div class="profile-location"><i class="fa fa-map-marker"></i>'.$company[0]['Company']['location'].'&nbsp;</div>';?>
            <?php if(!empty(h($company[0]['Company']['address']))) 
             echo '<div class="profile-position"><i class="fa fa-home"></i>'.$company[0]['Company']['address'].'&nbsp;</</div>';?>

            <div class="mb20"></div>

          </div><!-- profile-header -->
          
          <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified nav-profile">
          <!--<li class="active"><a href="#activities" data-toggle="tab"><strong>Actividades</strong></a></li>-->
          <li class="active"><a href="#followers" data-toggle="tab"><strong>Seguidores</strong></a></li>
          <li><a href="#posts" data-toggle="tab"><strong>Publicações</strong></a></li>
          <li ><a href="#myproducts" data-toggle="tab"><strong>Os nossos Produtos</strong></a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <!--<div class="tab-pane active" id="activities">
            <div class="activity-list">
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user1.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Ray Sin</strong> started following <strong>Eileen Sideways</strong>. <br />
                  <small class="text-muted">Yesterday at 3:30pm</small>
                </div>
              </div>
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> posted a new blog. <br />
                  <small class="text-muted">Today at 3:18pm</small>
                      
                  <div class="media blog-media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="images/photos/media5.png" alt="" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-title"><a href="#">Ut Enim Ad Minim Veniam</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                    </div>
                  </div>
                  
                </div>
              </div>
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user2.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Chris Anthemum</strong> started following <strong>Eileen Sideways</strong>. <br />
                  <small class="text-muted">2 days ago at 8:30am</small>
                </div>
              </div>
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> uploaded <a href="#">5 photos</a>. <br />
                  <small class="text-muted">5 days ago at 12:30pm</small>
                  
                  <ul class="uploadphoto-list">
                    <li><a href="images/photos/media1.jpg" data-rel="prettyPhoto"><img src="images/photos/media1.jpg" class="img-responsive" alt="" /></a></li>
                    <li><a href="images/photos/media2.png" data-rel="prettyPhoto"><img src="images/photos/media2.png" class="img-responsive" alt="" /></a></li>
                    <li><a href="images/photos/media3.png" data-rel="prettyPhoto"><img src="images/photos/media3.png" class="img-responsive" alt="" /></a></li>
                  </ul>
                </div>
              </div>
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user4.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Frank Furter</strong> started following <strong>Eileen Sideways</strong>. <br />
                  <small class="text-muted">6 days ago at 8:15am</small>
                </div>
              </div>
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> posted a new note. <br />
                  <small class="text-muted">6 days ago at 6:18am</small>
                  <h4 class="media-title"><a href="#">Consectetur Adipisicing Elit</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                </div>
              </div>
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> posted a new blog. <br />
                  <small class="text-muted">December 25 at 3:18pm</small>
                      
                  <div class="media blog-media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="images/photos/media4.png" alt="" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-title"><a href="#">Ut Enim Ad Minim Veniam</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> added new photo. <br />
                  <small class="text-muted">December 24 at 1:30pm</small>
                  <div class="mb20"></div>
                  <a href="images/photos/media6.png" data-rel="prettyPhoto" class="img-single"><img src="images/photos/media6.png" class="img-responsive" alt="" /></a>
                </div>
              </div>
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user5.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Weno Carasbong</strong> started following <strong>Eileen Sideways</strong>. <br />
                  <small class="text-muted">December 15 at 3:30pm</small>
                </div>
              </div>
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/userprofile.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <strong>Eileen Sideways</strong> posted a new blog. <br />
                  <small class="text-muted">December 15 at 3:18pm</small>
                      
                  <div class="media blog-media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="images/photos/media7.png" alt="" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-title"><a href="#">Ut Enim Ad Minim Veniam</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... <a href="#">Read more</a></p>
                    </div>
                  </div>
                  
                </div>
              </div>
              
            </div>
            
            <button class="btn btn-white btn-block">Show More</button>

          </div>-->
          <div class="tab-pane active" id="followers">
            <div class="follower-list">
            
             <?php 
             if(isset($follower_info) && count($follower_info)>0){
               for($i=0; $i<count($follower_info); $i++){
                if($follower_info[$i]['User']['username'] != $_SESSION["Auth"]["User"]["username"]){
                  echo '<div class="media">';
                  if(!empty($follower_info[$i]['User']['picture'])){
                   echo '<a href="'.$follower_info[$i]['User']['id'].'" class="pull-left">
                        <img alt="" src="'.$follower_info[$i]['User']['picture'].'" class="thumbnail media-object">
                      </a>';
                    }
                    echo '<div class="media-body">
                    
                      <h3 class="follower-name">
                        <a href="'.$follower_info[$i]['User']['id'].'" class="pull-left">'.
                          $follower_info[$i]['User']['first_name']." ".$follower_info[$i]['User']['last_name'].
                        '</a>
                      </h3>
                      </br>';
                      if(!empty($follower_info[$i]['User']['country'])) echo '<div class="profile-location"><i class="fa fa-map-marker"></i>'.$follower_info[$i]['User']['country'].'</div>';
                      if(!empty($follower_info[$i]['User']['company'])) echo '<div class="profile-position"><i class="fa fa-briefcase"></i>'.$follower_info[$i]['User']['company'].'</div>';
                      
                      echo '<div class="mb20"></div>
                      
                      <button class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Amigos</button>
                      <a href="';
                      echo('/chats/add/').$follower_info[$i]['User']['username'];
                      echo'"><button class="btn btn-sm btn-white"><i class="fa fa-envelope-o"></i> Mensagem</button></a>
                    </div>
                  </div><!-- media -->';
                 }     
               }
             }
                else{
                echo 
                '<div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  A empresa ainda não tem qualquer seguidor.
                </div>';
              }

                        ?>
              
            </div><!--follower-list -->
            
          </div>
          

          <div class="tab-pane" id="posts">
    

            <div class="row">
            <?php
                  if(isset($company_posts) && count($company_posts)>0){
                   for($i=0; $i<count($company_posts); $i++){
                    //var_dump($company_posts);
                    echo '<div class="col-sm-6">
                    <div class="media">
                      <a class="pull-left" href="/posts/view/'.$company_posts[$i]['Post']['id'].'">
                        <img class="media-object"  style="width: 50px; height: 50px;" src="'.$company_posts[$i]['Post']['picture'].'" alt="" />
                      </a>
                      <div class="media-body event-body">
                        <h4 class="event-title"><a href="/posts/view/'.$company_posts[$i]['Post']['id'].'">'.$company_posts[$i]['Post']['title'].'</a></h4>
                        <small class="text-muted"><i class="fa fa-user"></i>'.$company_posts[$i]['Post']['datemade'].'</small>
                      </div>
                    </div><!-- media -->
                  </div><!-- col-sm-6 -->';
              }
            }
            else{
              echo 
              '<div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Não foi adicionado ainda qualquer publicação por parte da empresa.
              </div>';
            }
                  ?>
            </div>
                          
                        </div>
                        
                              <div class="tab-pane" id="myproducts">

                                  
                                  <br />

                                  <div class="row">
                                  <?php
                                        if(isset($items) && count($items)>0){
                                         for($i=0; $i<count($items); $i++){
                                          echo '<div class="col-sm-6">
                                          <div class="media">
                                            <a class="pull-left" href="/items/view/'.$items[$i]['Item']['id'].'">
                                              <img class="media-object"  style="width: 50px; height: 50px;" src="'.$items[$i]['Item']['picture'].'" alt="" />
                                            </a>
                                            <div class="media-body event-body">
                                              <h4 class="event-title"><a href="/items/view/'.$items[$i]['Item']['id'].'">'.$items[$i]['Item']['name'].'</a></h4>
                                              <small class="text-muted"><i class="fa fa-user"></i>'.$items[$i]['Item']['user'].'</small>
                                              <small class="text-muted"><i class="fa fa-eur"></i>'.$items[$i]['Item']['price'].'</small>
                                              <p>'.$items[$i]['Item']['description'].'</p>
                                            </div>
                                          </div><!-- media -->
                                        </div><!-- col-sm-6 -->';
                                    }
                                  }
                                  else{
                                    echo 
                                    '<div class="alert alert-info">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                      Não foi adicionado ainda qualquer produto por parte da empresa.
                                    </div>';
                                  }
                                        ?>
                                  </div>
                              </div>
                            </div><!-- tab-content -->
                              
                            </div><!-- col-sm-9 -->
                          </div><!-- row -->
                          
                        </div><!-- contentpanel -->