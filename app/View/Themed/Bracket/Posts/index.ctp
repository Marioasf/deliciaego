<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

    <?php echo $this->Session->flash();?>
    <div class="contentpanel">
      <?php echo $this->Form->create('BoostCake', array(
        'inputDefaults' => array(
            'wrapInput' => false
        ),
        'class' => 'well'
      )); ?>
      <?php $user = $_SESSION["Auth"]["User"]["username"];
        echo $this->Form->input('text', array(
        'label' => '',
        'placeholder' => 'Título do seu post...',
        'name' => 'data[Post][user]',
        'required' => 'required',
        'maxlength' => 16,
        'type' => 'hidden',
        'value' => $user
      )); ?>
      <div class="panel panel-dark panel-alt timeline-post">
            <div class="panel">
            <?php echo $this->Form->input('text', array(
                'label' => '',
                'placeholder' => 'Título do seu post...',
                'name' => 'data[Post][title]',
                'class' => 'form-control',
                'required' => 'required',
                'rows' => 1,
                'onfocus' => 'this.rows=1',
                'style' => 'resize:none;',
                'maxlength' => 25
            )); ?>
            </div>
            <div class="panel-body">
            <?php echo $this->Form->input('text', array(
                'label' => '',
                'placeholder' => 'Diga algo sobre si...',
                'rows' => 5,
                'onfocus' => 'this.rows=5',
                'class' => 'form-control',
                'name' => 'data[Post][content]',
                'maxlength' => 255,
                'required' => 'required',
                'style' => 'resize:none;'
            )); ?>
            </div>
            <div class="panel-footer">
                <div class="timeline-btns text-center">
                    <a href="#" class="tooltips" data-toggle="tooltip" title="Foto" ><i class="glyphicon glyphicon-picture" ></i></a>
                    <a href="#" class="tooltips" data-toggle="tooltip" title="Video" ><i class="glyphicon glyphicon-facetime-video"></i></a>
                    <a href="#" class="tooltips" data-toggle="tooltip" title="Localização" ><i class="glyphicon glyphicon-map-marker"></i></a>
                    <a href="#" class="tooltips" data-toggle="tooltip" title="Identificar amigo" ><i class="glyphicon glyphicon-user"></i></a>
                </div>

                <?php echo $this->Form->submit('Submeter Post', array(
                'div' => 'form-group',
                'class' => 'btn btn-primary pull-left',
                'type' => 'submit',
                'value' => 'Submit',
                'action' => '/index.php/posts/index',
                'method' => 'post'
                )); ?>
                  <?php echo $this->Form->end(); ?>
            </div><!-- panel-footer-->
      </div>
      <div style="position: relative; height: 1641.38px;" id="bloglist" class="row">
      <?php
      if(isset($friend_posts)){
          for($i=0; $i<count($friend_posts); $i++){
          	//if a post has picture only
            if($friend_posts[$i]['Post']['video'] =="" && $friend_posts[$i]['Post']['content'] == "" && $friend_posts[$i]['Post']['picture'] != ""){
                echo '        <div class="col-sm-6">
                  <div class="panel panel-default panel-timeline">
                    <div class="panel-heading">
                        
                        <div class="media">
                            <a href="/users/view/'.$user_friend[$i]['User']['id'].'" class="pull-left">
                                <img alt="" src="'.$user_friend[$i]['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">
                            
                                <h4 class="text-primary"><a href="/users/view/'.$user_friend[$i]['User']['id'].'">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].'  </a><small>Partilhou uma imagem</small></h4>
                            
                                <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                            </div>
                        </div><!-- media -->
                        
                    </div><!-- panel-heading -->
                    <div class="panel-body">
                    <h4><a href="/posts/view/'.$friend_posts[$i]['Post']['id'].'">'.$friend_posts[$i]['Post']['title'].'</a></h4>
                        <a href="/posts/view/'.$friend_posts[$i]['Post']['id'].'"><img src="'.$friend_posts[$i]['Post']['picture'].'" alt="" style="width: 400px; height: 250px;" /></a>
                        <div class="timeline-btns">
                            <div class="pull-left">
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Gostar"><i class="glyphicon glyphicon-heart"></i></a>
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Adicionar Comentário"><i class="glyphicon glyphicon-comment"></i></a>
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Partilhar"><i class="glyphicon glyphicon-Partilhar"></i></a>
                            </div>
                            <div class="pull-right">
                                <small class="text-muted">2 pessoas gostam disto</small>
                            </div>
                        </div>
                    </div><!-- panel-body -->
                    <ul class="media-list comment-list">';
                    for($j=0; $j<count($comments); $j++){
                        if($friend_posts[$i]['Post']['id']===$comments[$j]['Comment']['post']){
                            echo '
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object thumbnail" src="';
                                    for($k=0; $k<count($user_comment); $k++){
                                        if($comments[$j]['Comment']['user']===$user_comment[$k]['User']['username']){
                                            echo $user_comment[$k]['User']['picture'];
                                        }
                                    } 
                                    echo '" alt="" />
                                </a>
                                <small class="text-muted">'.$comments[$j]['Comment']['datemade'].'</small>
                                <p>'.$comments[$j]['Comment']['content'].'</p>
                            </li>';
                        }
                    }
                        echo '</ul>
                        <div class="panel-footer">
                        <div class="media">
                            <a href="/profile" class="pull-left">
                                <img alt="" src="'.$_SESSION['Auth']['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">';

                              echo $this->Form->create('BoostCake', array(
                                'inputDefaults' => array(
                                  'wrapInput' => false,
                                )
                              )); 
                              $user = $_SESSION["Auth"]["User"]["username"];
                                echo $this->Form->input('text', array(
                                'name' => 'data[Comment][user]',
                                'required' => 'required',
                                'maxlength' => 16,
                                'type' => 'hidden',
                                'value' => $user
                              ));
                              echo $this->Form->input('text', array(
                                'name' => 'data[Comment][post]',
                                'required' => 'required',
                                'maxlength' => 16,
                                'type' => 'hidden',
                                'value' => h($friend_posts[$i]['Post']['id'])
                              )); 

                              echo $this->Form->input('text', array(
                                'label' => false,
                                'placeholder' => 'Comentário...',
                                'onfocus' => 'this.rows=2',
                                'class' => 'form-control',
                                'name' => 'data[Comment][content]',
                                'maxlength' => 255,
                                'required' => 'required',
                                'style' => 'resize:none;'
                              )); 

                              echo '<br />';

                            echo $this->Form->submit('Publicar', array(
                            'div' => 'form-group',
                            'class' => 'btn btn-primary pull-right',
                            'type' => 'submit',
                            'value' => 'Submit',
                            'action' => '/index.php/posts/index',
                            'method' => 'post'
                            ));
                            echo $this->Form->end();

                        echo '</div><!-- media-body -->
                        </div><!-- media -->
                    </div><!-- panel-footer -->
                  </div><!-- panel -->';

                  //var_dump($this->request->data);
                  
                echo '</div><!-- col-sm-6 -->
                ';

                }
                //if a post has content only
                if($friend_posts[$i]['Post']['video'] =="" && $friend_posts[$i]['Post']['picture'] =="" && $friend_posts[$i]['Post']['content'] != ""){
                    echo '        <div class="col-sm-6">
                      <div class="panel panel-default panel-timeline">
                        <div class="panel-heading">
                            
                            <div class="media">
                                <a href="/users/view/'.$user_friend[$i]['User']['id'].'" class="pull-left">
                                    <img alt="" src="'.$user_friend[$i]['User']['picture'].'" class="media-object">
                                </a>
                                <div class="media-body">
                                
                                    <h4 class="text-primary"><a href="/users/view/'.$user_friend[$i]['User']['id'].'">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].' </a><small>Partilhou uma mensagem</small></h4>
                                
                                    <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                                </div>
                            </div><!-- media -->
                            
                        </div><!-- panel-heading -->
                        <div class="panel-body">
                            
                            <div class="media">
                            <a href="/posts/view/'.$friend_posts[$i]['Post']['id'].'" class="pull-left">
                              <img alt="" src="'.$friend_posts[$i]['Post']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">
                              <h4><a href="/posts/view/'.$friend_posts[$i]['Post']['id'].'">'.$friend_posts[$i]['Post']['title'].'</a></h4>
                              <p>'.$friend_posts[$i]['Post']['content'].'</p>
                            </div>
                          </div>
                            <div class="timeline-btns">
                                <div class="pull-left">
                                    <a href="#" class="tooltips" data-toggle="tooltip" title="Gostar"><i class="glyphicon glyphicon-heart"></i></a>
                                    <a href="#" class="tooltips" data-toggle="tooltip" title="Adicionar Comentário"><i class="glyphicon glyphicon-comment"></i></a>
                                    <a href="#" class="tooltips" data-toggle="tooltip" title="Partilhar"><i class="glyphicon glyphicon-Partilhar"></i></a>
                                </div>
                                <div class="pull-right">
                                    <small class="text-muted">1 pessoas gostam disto</small>
                                </div>
                            </div>
                        </div><!-- panel-body -->';
                        for($j=0; $j<count($comments); $j++){
                            if($friend_posts[$i]['Post']['id']===$comments[$j]['Comment']['post']){
                                echo '<ul class="media-list comment-list">
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object thumbnail" src="';
                                    for($k=0; $k<count($user_comment); $k++){
                                        if($comments[$j]['Comment']['user']===$user_comment[$k]['User']['username']){
                                            echo $user_comment[$k]['User']['picture'];
                                        }
                                    } 
                                echo '" alt="" />
                                    </a>
                                    <small class="text-muted">'.$comments[$j]['Comment']['datemade'].'</small>
                                    <p>'.$comments[$j]['Comment']['content'].'</p>
                                </li>
                                </ul>';
                            }
                        }   
                        echo '

                            <div class="panel-footer">
                            <div class="media">
                                <a href="/profile" class="pull-left">
                                    <img alt="" src="'.$_SESSION['Auth']['User']['picture'].'" class="media-object">
                                </a>
                                <div class="media-body">';

                                  echo $this->Form->create('BoostCake', array(
                                    'inputDefaults' => array(
                                      'wrapInput' => false,
                                    )
                                  )); 
                                  $user = $_SESSION["Auth"]["User"]["username"];
                                    echo $this->Form->input('text', array(
                                    'name' => 'data[Comment][user]',
                                    'required' => 'required',
                                    'maxlength' => 16,
                                    'type' => 'hidden',
                                    'value' => $user
                                  ));
                                  echo $this->Form->input('text', array(
                                    'name' => 'data[Comment][post]',
                                    'required' => 'required',
                                    'maxlength' => 16,
                                    'type' => 'hidden',
                                    'value' => h($friend_posts[$i]['Post']['id'])
                                  )); 

                                  echo $this->Form->input('text', array(
                                    'label' => false,
                                    'placeholder' => 'Comentário...',
                                    'onfocus' => 'this.rows=2',
                                    'class' => 'form-control',
                                    'name' => 'data[Comment][content]',
                                    'maxlength' => 255,
                                    'required' => 'required',
                                    'style' => 'resize:none;'
                                  )); 

                                  echo '<br />';

                                echo $this->Form->submit('Publicar', array(
                                'div' => 'form-group',
                                'class' => 'btn btn-primary pull-right',
                                'type' => 'submit',
                                'value' => 'Submit',
                                'action' => '/index.php/posts/index',
                                'method' => 'post'
                                ));
                                echo $this->Form->end();

                            echo '</div><!-- media-body -->
                            </div><!-- media -->
                        </div><!-- panel-footer -->

                      </div><!-- panel -->
                    </div><!-- col-sm-6 -->';
                }
                
              //if a post has video only
                if($friend_posts[$i]['Post']['content'] == "" && $friend_posts[$i]['Post']['picture'] == "" && $friend_posts[$i]['Post']['video'] != ""){
                    echo ' <div class="col-sm-6">
                      <div class="panel panel-default panel-timeline">
                        <div class="panel-heading">
                            
                            <div href="/users/view/'.$user_friend[$i]['User']['id'].'" class="media">
                                <a class="pull-left">
                                    <img alt="" src="'.$user_friend[$i]['User']['picture'].'" class="media-object">
                                </a>
                                <div class="media-body">
                                
                                    <h4 class="text-primary"><a href="/users/view/'.$user_friend[$i]['User']['id'].'">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].' </a><small>Partilhou um vídeo</small></h4>
                                
                                    <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                                </div>
                            </div><!-- media -->
                            
                        </div><!-- panel-heading -->
                        <div class="panel-body">
                            <h4><a href="/posts/view/'.$friend_posts[$i]['Post']['id'].'">'.$friend_posts[$i]['Post']['title'].'</a></h4>
                            <div class="timeline-video">';
                                
                                $url=$friend_posts[$i]['Post']['video'];

                                function get_youtube_id_from_url($url)
                                {
                                    if (stristr($url,'youtu.be/'))
                                        {preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
                                    else 
                                        {@preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; }
                                }

                                echo '<object width="420" height="315"
                                 data="http://www.youtube.com/v/'.
                                    get_youtube_id_from_url($url)
                                 .'">
                                </object>
                            </div>
                            
                            <div class="timeline-btns">
                                <div class="pull-left">
                                    <a href="#" class="tooltips" data-toggle="tooltip" title="Gostar"><i class="glyphicon glyphicon-heart"></i></a>
                                    <a href="#" class="tooltips" data-toggle="tooltip" title="Adicionar Comentário"><i class="glyphicon glyphicon-comment"></i></a>
                                    <a href="#" class="tooltips" data-toggle="tooltip" title="Partilhar"><i class="glyphicon glyphicon-Partilhar"></i></a>
                                </div>
                                <div class="pull-right">
                                    <small class="text-muted">6 pessoas gostam disto</small>
                                </div>
                            </div>
                        </div><!-- panel-body -->';
                        for($j=0; $j<count($comments); $j++){
                            if($friend_posts[$i]['Post']['id']===$comments[$j]['Comment']['post']){
                                echo '<ul class="media-list comment-list">
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object thumbnail" src="';
                                    for($k=0; $k<count($user_comment); $k++){
                                        if($comments[$j]['Comment']['user']===$user_comment[$k]['User']['username']){
                                            echo $user_comment[$k]['User']['picture'];
                                        }
                                    } 
                                echo '" alt="" />
                                    </a>
                                    <small class="text-muted">'.$comments[$j]['Comment']['datemade'].'</small>
                                    <p>'.$comments[$j]['Comment']['content'].'</p>
                                </li>
                                </ul>';
                            }
                        }
                        echo '<div class="panel-footer">
                        <div class="media">
                            <a href="/profile" class="pull-left">
                                <img alt="" src="'.$_SESSION['Auth']['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">';

                              echo $this->Form->create('BoostCake', array(
                                'inputDefaults' => array(
                                  'wrapInput' => false,
                                )
                              )); 
                              $user = $_SESSION["Auth"]["User"]["username"];
                                echo $this->Form->input('text', array(
                                'name' => 'data[Comment][user]',
                                'required' => 'required',
                                'maxlength' => 16,
                                'type' => 'hidden',
                                'value' => $user
                              ));
                              echo $this->Form->input('text', array(
                                'name' => 'data[Comment][post]',
                                'required' => 'required',
                                'maxlength' => 16,
                                'type' => 'hidden',
                                'value' => h($friend_posts[$i]['Post']['id'])
                              )); 

                              echo $this->Form->input('text', array(
                                'label' => false,
                                'placeholder' => 'Comentário...',
                                'onfocus' => 'this.rows=2',
                                'class' => 'form-control',
                                'name' => 'data[Comment][content]',
                                'maxlength' => 255,
                                'required' => 'required',
                                'style' => 'resize:none;'
                              )); 

                              echo '<br />';

                            echo $this->Form->submit('Publicar', array(
                            'div' => 'form-group',
                            'class' => 'btn btn-primary pull-right',
                            'type' => 'submit',
                            'value' => 'Submit',
                            'action' => '/index.php/posts/index',
                            'method' => 'post'
                            ));
                            echo $this->Form->end();

                        echo '</div><!-- media-body -->
                        </div><!-- media -->
                    </div><!-- panel-footer -->
                      </div><!-- panel -->
                    </div><!-- col-sm-6 -->';
                }

            //if a post has content and picture but no video
            if($friend_posts[$i]['Post']['content'] != "" && $friend_posts[$i]['Post']['picture'] != "" && $friend_posts[$i]['Post']['video'] == ""){
            echo'
             <div class="col-sm-6">
              <div class="panel panel-default panel-timeline">
                 <div class="panel-heading">
                            
                            <div class="media">
                                <a href="/users/view/'.$user_friend[$i]['User']['id'].'" class="pull-left">
                                    <img alt="" src="'.$user_friend[$i]['User']['picture'].'" class="media-object">
                                </a>
                                <div class="media-body">
                                
                                    <h4 class="text-primary"><a href="/users/view/'.$user_friend[$i]['User']['id'].'">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].' </a><small>Partilhou uma mensagem com imagem</small></h4>
                                
                                    <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                                </div>
                            </div><!-- media -->
                            
                        </div><!-- panel-heading -->
                <div class="panel-body">
                    
                    <div class="media">
                    <a href="/posts/view/'.$friend_posts[$i]['Post']['id'].'" class="pull-left">
                      <img alt="" src="'.$friend_posts[$i]['Post']['picture'].'" class="media-object">
                    </a>
                    <div class="media-body">
                      <h4><a href="/posts/view/'.$friend_posts[$i]['Post']['id'].'">'.$friend_posts[$i]['Post']['title'].'</a></h4>
                      <p>'.$friend_posts[$i]['Post']['content'].'</p>
                    </div>
                  </div>
                    
                    <div class="timeline-btns">
                        <div class="pull-left">
                            <a href="#" class="tooltips" data-toggle="tooltip" title="Gostar"><i class="glyphicon glyphicon-heart"></i></a>
                            <a href="#" class="tooltips" data-toggle="tooltip" title="Adicionar Comentário"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="#" class="tooltips" data-toggle="tooltip" title="Partilhar"><i class="glyphicon glyphicon-Partilhar"></i></a>
                        </div>
                        <div class="pull-right">
                            <small class="text-muted">1 pessoas gostam disto</small>
                        </div>
                    </div>
                </div><!-- panel-body -->';
                    for($j=0; $j<count($comments); $j++){
                        if($friend_posts[$i]['Post']['id']===$comments[$j]['Comment']['post']){
                            echo '<ul class="media-list comment-list">
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object thumbnail" src="';
                                    for($k=0; $k<count($user_comment); $k++){
                                        if($comments[$j]['Comment']['user']===$user_comment[$k]['User']['username']){
                                            echo $user_comment[$k]['User']['picture'];
                                        }
                                    } 
                                echo '" alt="" />
                                </a>
                                <small class="text-muted">'.$comments[$j]['Comment']['datemade'].'</small>
                                <p>'.$comments[$j]['Comment']['content'].'</p>
                            </li>
                            </ul>';
                        }
                    }
                echo '<div class="panel-footer">
                        <div class="media">
                            <a href="/profile" class="pull-left">
                                <img alt="" src="'.$_SESSION['Auth']['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">';

                              echo $this->Form->create('BoostCake', array(
                                'inputDefaults' => array(
                                  'wrapInput' => false,
                                )
                              )); 
                              $user = $_SESSION["Auth"]["User"]["username"];
                                echo $this->Form->input('text', array(
                                'name' => 'data[Comment][user]',
                                'required' => 'required',
                                'maxlength' => 16,
                                'type' => 'hidden',
                                'value' => $user
                              ));
                              echo $this->Form->input('text', array(
                                'name' => 'data[Comment][post]',
                                'required' => 'required',
                                'maxlength' => 16,
                                'type' => 'hidden',
                                'value' => h($friend_posts[$i]['Post']['id'])
                              )); 

                              echo $this->Form->input('text', array(
                                'label' => false,
                                'placeholder' => 'Comentário...',
                                'onfocus' => 'this.rows=2',
                                'class' => 'form-control',
                                'name' => 'data[Comment][content]',
                                'maxlength' => 255,
                                'required' => 'required',
                                'style' => 'resize:none;'
                              )); 

                              echo '<br />';

                            echo $this->Form->submit('Publicar', array(
                            'div' => 'form-group',
                            'class' => 'btn btn-primary pull-right',
                            'type' => 'submit',
                            'value' => 'Submit',
                            'action' => '/index.php/posts/index',
                            'method' => 'post'
                            ));
                            echo $this->Form->end();

                        echo '</div><!-- media-body -->
                        </div><!-- media -->
                    </div><!-- panel-footer -->
              </div><!-- panel -->
            </div><!-- col-sm-6 -->';
        }
    }
}
 else{
                echo 
                '<div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <strong>Atenção!</strong> Não adicionaste ainda qualquer amigo, não fizeste nenhum post... <a href="" class="alert-link">Não cliques aqui </a> para o fazer.
                </div>';
              }
?>
        
        
      </div><!-- row -->
          

