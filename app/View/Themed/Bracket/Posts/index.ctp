 <?php
if ($this->Session->read('Auth.User')) {
 //var_dump($friend_list);
 
    var_dump($friend_list);

echo '<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>';

    $this->Session->flash();
    echo '<div class="contentpanel">';
     echo $this->Form->create('BoostCake', array(
        'inputDefaults' => array(
            'wrapInput' => false
        ),
        'class' => 'well'
      ));
        $user = $_SESSION["Auth"]["User"]["username"];
        echo $this->Form->input('text', array(
        'label' => '',
        'placeholder' => 'Título do seu post...',
        'name' => 'data[Post][user]',
        'required' => 'required',
        'maxlength' => 16,
        'type' => 'hidden',
        'value' => $user
      ));
      echo '<div class="panel panel-dark panel-alt timeline-post">
            <div class="panel">';
              echo $this->Form->input('text', array(
                'label' => '',
                'placeholder' => 'Título do seu post...',
                'name' => 'data[Post][title]',
                'class' => 'form-control',
                'required' => 'required',
                'rows' => 1,
                'onfocus' => 'this.rows=1',
                'style' => 'resize:none;',
                'maxlength' => 25
            ));  
            echo '</div>
            <div class="panel-body">';
              echo $this->Form->input('text', array(
                'label' => '',
                'placeholder' => 'Diga algo sobre si...',
                'rows' => 5,
                'onfocus' => 'this.rows=5',
                'class' => 'form-control',
                'name' => 'data[Post][content]',
                'maxlength' => 255,
                'required' => 'required',
                'style' => 'resize:none;'
            ));  
            echo '</div>
            <div class="panel-footer">
                <div class="timeline-btns text-center">
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><a href="#" class="tooltips" data-toggle="tooltip" title="Foto" ><i class="glyphicon glyphicon-picture" ></i></a></button>

                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">';
                            echo $this->Form->input('picture', array(
                              'label' => '',
                              'placeholder' => 'Introduza aqui o link da imagem.',
                              'rows' => 5,
                              'onfocus' => 'this.rows=5',
                              'class' => 'form-control',
                              'name' => 'data[Post][picture]',
                              'maxlength' => 255,
                              'style' => 'resize:none;'
                          ));  
                          echo '<div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                       
                      </div>

                    </div>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm2">
                    <a href="#" class="tooltips" data-toggle="tooltip" title="Video" ><i class="glyphicon glyphicon-facetime-video"></i></a></button>

                    <div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div class="modal-content">';
                            echo $this->Form->input('video', array(
                              'label' => '',
                              'placeholder' => 'Introduza aqui o link do vídeo.',
                              'rows' => 5,
                              'onfocus' => 'this.rows=5',
                              'class' => 'form-control',
                              'name' => 'data[Post][video]',
                              'maxlength' => 255,
                              'style' => 'resize:none;'
                          ));  
                          echo '<div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                       
                      </div>

                    </div>
                    <!-- Localização e tags de utilizadores desativada
                    <a href="#" class="tooltips" data-toggle="tooltip" title="Localização" ><i class="glyphicon glyphicon-map-marker"></i></a>
                    <a href="#" class="tooltips" data-toggle="tooltip" title="Identificar amigo" ><i class="glyphicon glyphicon-user"></i></a>
                    -->
                </div>';

                  echo $this->Form->submit('Submeter Post', array(
                'div' => 'form-group',
                'class' => 'btn btn-primary pull-left',
                'type' => 'submit',
                'value' => 'Submit',
                'action' => '/posts/index',
                'method' => 'post'
                ));  
                    echo $this->Form->end();  
            echo '</div><!-- panel-footer-->
      </div>
      <div style="position: relative; height: 1641.38px;" id="bloglist" class="row">';
       
      if(isset($friend_posts)){
          for($i=0; $i<count($friend_posts); $i++){
          	//if a post has picture only
            $liked=FALSE;
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
                            <div class="pull-left">';

                                //<a href="#" class="tooltips" data-toggle="tooltip" title="Gostar"><i class="glyphicon glyphicon-heart"></i></a>

                                if(isset($likes))
                                {
                                  //percorrer lista de likes
                                  for($j=0;$j<count($likes);$j++){
                                    if($likes[$j]['Like']['post_id']==$friend_posts[$i]['Post']['id'] && !$liked){//caso o utilizador tenha feito like num post
                                          $liked=TRUE;
                                          echo '<div class="tooltips" data-toggle="tooltip" title="Não gostar">';    
                                          echo $this->Form->postLink('♥', array('action' => 'deleteLike', $likes[$j]['Like']['id']));
                                          echo '</div>';   
                                    }
                                }
                                  //se utilizador não fez like
                                  if(!$liked){
                                          echo '<div class="tooltips" data-toggle="tooltip" title="Gostar">';
                                          echo $this->Form->create('Like');
                                          echo $this->Form->input('post_id', array('type' => 'hidden','value' => $friend_posts[$i]['Post']['id']));
                                          echo $this->Form->input('username', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username']));
                                          echo $this->Form->submit('♡');
                                          echo $this->Form->end();
                                          echo '</div>';

                                     }
                                 $liked=TRUE;
                                  
                              }
                              //se utilizador não fez like
                              else{
                                      echo '<div class="tooltips" data-toggle="tooltip" title="Gostar">';
                                      echo $this->Form->create('Like');
                                      echo $this->Form->input('post_id', array('type' => 'hidden','value' => $friend_posts[$i]['Post']['id']));
                                      echo $this->Form->input('username', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username']));
                                     /* echo $this->Form->button('<i class="fa fa-heart"></i> Send', array(
                                          'type' => 'button',
                                          'class' => 'btn btn-warning fa fa-heart',
                                          'escape' => false
                                      ));*/
                                      echo $this->Form->submit('♡');
                                      echo $this->Form->end();
                                      echo '</div>';
                                 }

                                echo '<a href="#" class="tooltips" data-toggle="tooltip" title="Adicionar Comentário"><i class="glyphicon glyphicon-comment"></i></a>
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Partilhar"><i class="glyphicon glyphicon-Partilhar"></i></a>
                            </div>
                            <div class="pull-right">
                                <small class="text-muted">';
                                if($likes_count[$i] > 1) echo $likes_count.' pessoas gostam disto';
                                else if($likes_count[$i] == 1) echo '1 pessoa gosta disto';
                                echo '</small>
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
                                <small class="text-muted">'.$comments[$j]['Comment']['datemade'].'</small>';
                                echo '<div class="tooltips pull-right" data-toggle="tooltip" title="Remover comentário">';

                                echo $this->Form->postLink('×', array('action' => 'deleteComment', $comments[$j]['Comment']['id']), array('confirm' => 'De certeza que deseja remover este comentário?'), array('class' => 'panel-close text-right pull-right'));
                                
                            
                                echo '</div>';
                                echo '<p>'.$comments[$j]['Comment']['content'].'</p>
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

                           
                              echo $this->Form->create('Comment',array('action'=>'add','id'=>'saveForm'));
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
                            'class' => 'btn btn-primary pull-right publish',
                  
                            ));

                            echo $this->Form->end();

                        echo '</div><!-- media-body -->
                        </div><!-- media -->
                    </div><!-- panel-footer -->
                  </div><!-- panel -->';

                  
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
                                <div class="pull-left">';
                                   
                                        if(isset($likes))
                                        {
                                          //percorrer lista de likes
                                          for($j=0;$j<count($likes);$j++){
                                            if($likes[$j]['Like']['post_id']==$friend_posts[$i]['Post']['id'] && !$liked){//caso o utilizador tenha feito like num post
                                                  $liked=TRUE;
                                                  echo '<div class="tooltips" data-toggle="tooltip" title="Não gostar">';    
                                                  echo $this->Form->postLink('♥', array('action' => 'deleteLike', $likes[$j]['Like']['id']));
                                                  echo '</div>';   
                                            }
                                        }
                                          //se utilizador não fez like
                                          if(!$liked){
                                                  echo '<div class="tooltips" data-toggle="tooltip" title="Gostar">';
                                                  echo $this->Form->create('Like');
                                                  echo $this->Form->input('post_id', array('type' => 'hidden','value' => $friend_posts[$i]['Post']['id']));
                                                  echo $this->Form->input('username', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username']));
                                                  echo $this->Form->submit('♡');
                                                  echo $this->Form->end();
                                                  echo '</div>';

                                             }
                                         $liked=TRUE;
                                          
                                      }
                                      //se utilizador não fez like
                                      else{
                                              echo '<div class="tooltips" data-toggle="tooltip" title="Gostar">';
                                              echo $this->Form->create('Like');
                                              echo $this->Form->input('post_id', array('type' => 'hidden','value' => $friend_posts[$i]['Post']['id']));
                                              echo $this->Form->input('username', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username']));
                                             
                                              echo $this->Form->submit('♡');
                                              echo $this->Form->end();
                                              echo '</div>';
                                         }

                                        echo '<a href="#" class="tooltips" data-toggle="tooltip" title="Adicionar Comentário"><i class="glyphicon glyphicon-comment"></i></a>
                                        <a href="#" class="tooltips" data-toggle="tooltip" title="Partilhar"><i class="glyphicon glyphicon-Partilhar"></i></a>
                                    </div>
                                    <div class="pull-right">
                                        <small class="text-muted">';
                                        if($likes_count[$i] > 1) echo $likes_count.' pessoas gostam disto';
                                        else if($likes_count[$i] == 1) echo '1 pessoa gosta disto';
                                        echo '</small>
                                    </div> 

                                </div>
                        </div><!-- panel-body -->';
                        for($j=0; $j<count($comments); $j++){
                            if($friend_posts[$i]['Post']['id']===$comments[$j]['Comment']['post']){
                                echo '<ul class="media-list comment-list">
                                <li class="media">
                                    <a class="pull-left" href="#">';
                                    for($k=0; $k<count($user_comment); $k++){
                                        if($comments[$j]['Comment']['user']===$user_comment[$k]['User']['username']){
                                            
                                            echo $this->Html->image('/uploads/'.$_SESSION['Auth']['User']['picture'], array('class'=>'media-object thumbnail', 'alt' => 'No image'));
                                        }
                                    } 
                                echo '" alt="" />
                                    </a>
                                    <small class="text-muted">'.$comments[$j]['Comment']['datemade'].'</small>';
                                    echo '<div class="tooltips pull-right" data-toggle="tooltip" title="Remover comentário">';

                                    echo $this->Form->postLink('×', array('action' => 'deleteComment', $comments[$j]['Comment']['id']), array('confirm' => 'De certeza que deseja remover este comentário?'), array('class' => 'panel-close text-right pull-right'));
                                    
                                    echo '</div>
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
                                'action' => '/posts/index',
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
                                <div class="pull-left">';

                                    if(isset($likes))
                                    {
                                      //percorrer lista de likes
                                      for($j=0;$j<count($likes);$j++){
                                        if($likes[$j]['Like']['post_id']==$friend_posts[$i]['Post']['id'] && !$liked){//caso o utilizador tenha feito like num post
                                              $liked=TRUE;
                                              echo '<div class="tooltips" data-toggle="tooltip" title="Não gostar">';    
                                              echo $this->Form->postLink('♥', array('action' => 'deleteLike', $likes[$j]['Like']['id']));
                                              echo '</div>';   
                                        }
                                    }
                                      //se utilizador não fez like
                                      if(!$liked){
                                              echo '<div class="tooltips" data-toggle="tooltip" title="Gostar">';
                                              echo $this->Form->create('Like');
                                              echo $this->Form->input('post_id', array('type' => 'hidden','value' => $friend_posts[$i]['Post']['id']));
                                              echo $this->Form->input('username', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username']));
                                              echo $this->Form->submit('♡');
                                              echo $this->Form->end();
                                              echo '</div>';

                                         }
                                     $liked=TRUE;
                                      
                                  }
                                  //se utilizador não fez like
                                  else{
                                          echo '<div class="tooltips" data-toggle="tooltip" title="Gostar">';
                                          echo $this->Form->create('Like');
                                          echo $this->Form->input('post_id', array('type' => 'hidden','value' => $friend_posts[$i]['Post']['id']));
                                          echo $this->Form->input('username', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username']));
                                         /* echo $this->Form->button('<i class="fa fa-heart"></i> Send', array(
                                              'type' => 'button',
                                              'class' => 'btn btn-warning fa fa-heart',
                                              'escape' => false
                                          ));*/
                                          echo $this->Form->submit('♡');
                                          echo $this->Form->end();
                                          echo '</div>';
                                     }

                                    echo '<a href="#" class="tooltips" data-toggle="tooltip" title="Adicionar Comentário"><i class="glyphicon glyphicon-comment"></i></a>
                                    <a href="#" class="tooltips" data-toggle="tooltip" title="Partilhar"><i class="glyphicon glyphicon-Partilhar"></i></a>
                                </div>
                                <div class="pull-right">
                                    <small class="text-muted">';
                                    if($likes_count[$i] > 1) echo $likes_count.' pessoas gostam disto';
                                    else if($likes_count[$i] == 1) echo '1 pessoa gosta disto';
                                    echo '</small>
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
                                    <small class="text-muted">'.$comments[$j]['Comment']['datemade'].'</small>';
                                    echo '<div class="tooltips pull-right" data-toggle="tooltip" title="Remover comentário">';
                                    echo $this->Form->postLink('×', array('action' => 'deleteComment', $comments[$j]['Comment']['id']), array('confirm' => 'De certeza que deseja remover este comentário?'), array('class' => 'panel-close text-right pull-right'));
                                    echo '</div>
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
                            'action' => '/posts/index',
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
                        <div class="pull-left">';

                            if(isset($likes))
                            {
                              //percorrer lista de likes
                              for($j=0;$j<count($likes);$j++){
                                if($likes[$j]['Like']['post_id']==$friend_posts[$i]['Post']['id'] && !$liked){//caso o utilizador tenha feito like num post
                                      $liked=TRUE;
                                      echo '<div class="tooltips" data-toggle="tooltip" title="Não gostar">';    
                                      echo $this->Form->postLink('♥', array('action' => 'deleteLike', $likes[$j]['Like']['id']));
                                      echo '</div>';   
                                }
                            }
                              //se utilizador não fez like
                              if(!$liked){
                                      echo '<div class="tooltips" data-toggle="tooltip" title="Gostar">';
                                      echo $this->Form->create('Like');
                                      echo $this->Form->input('post_id', array('type' => 'hidden','value' => $friend_posts[$i]['Post']['id']));
                                      echo $this->Form->input('username', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username']));
                                      echo $this->Form->submit('♡');
                                      echo $this->Form->end();
                                      echo '</div>';

                                 }
                             $liked=TRUE;
                              
                          }
                          //se utilizador não fez like
                          else{
                                  echo '<div class="tooltips" data-toggle="tooltip" title="Gostar">';
                                  echo $this->Form->create('Like');
                                  echo $this->Form->input('post_id', array('type' => 'hidden','value' => $friend_posts[$i]['Post']['id']));
                                  echo $this->Form->input('username', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username']));
                                
                                  echo $this->Form->submit('♡');
                                  echo $this->Form->end();
                                  echo '</div>';
                             }

                            echo '<a href="#" class="tooltips" data-toggle="tooltip" title="Adicionar Comentário"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="#" class="tooltips" data-toggle="tooltip" title="Partilhar"><i class="glyphicon glyphicon-Partilhar"></i></a>
                        </div>
                        <div class="pull-right">
                            <small class="text-muted">';
                            if($likes_count[$i] > 1) echo $likes_count.' pessoas gostam disto';
                            else if($likes_count[$i] == 1) echo '1 pessoa gosta disto';
                            echo '</small>
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
                                <small class="text-muted">'.$comments[$j]['Comment']['datemade'].'</small>';
                                    echo '<div class="tooltips pull-right" data-toggle="tooltip" title="Remover comentário">';
                                    echo $this->Form->postLink('×', array('action' => 'deleteComment', $comments[$j]['Comment']['id']), array('confirm' => 'De certeza que deseja remover este comentário?'), array('class' => 'panel-close text-right pull-right'));
                                    echo '</div>
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
                            'action' => 'posts/index',
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
                  <strong>Atenção!</strong> Não adicionaste ainda qualquer amigo, <a href="/users/index" class="alert-link">clica aqui </a> para o fazer.
                </div>';
              }

      echo '</div><!-- row -->';
      
  }
    else{
          echo 
                '<div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <strong>Atenção!</strong> Não te encontras autenticado. Clica aqui para te <a href="/users/signup" class="alert-link">registares</a> ou para fazeres <a href="/users/login" class="alert-link">login</a>!
                </div>';
              
    }

 ?>