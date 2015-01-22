       <link href="css/style.default.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">   
      <div class="pageheader">
        <h2><i class="fa fa-gift"></i>Post <span><?php echo h($post['Post']['title']); ?></span></h2>
        <div class="breadcrumb-wrapper">
          <span class="label">You are here:</span>
          <ol class="breadcrumb">
            <li><a href="/">Deliciaego</a></li>
            <li><a href="/posts">Posts</a></li>
            <li class="active"><?php  echo h($post['Post']['title']); ?> </li>
          </ol>
        </div>
      </div>

    <?php echo $this->Session->flash();
    ?>
    <div class="contentpanel">
      
      <div class="row blog-content">
      <div class="col-sm-9">
        
        <div class="panel panel-default panel-blog">
          <div class="panel-body">
            <h3 class="blogsingle-title"> <?php echo h($post['Post']['title']); ?></h3>
            
            <ul class="blog-meta">
              <li>Por: <a href="#"><?php echo $user['User']['first_name']; echo " "; echo $user['User']['last_name']; ?></a></li>
              <li><?php echo h($post['Post']['datemade']); ?></li>
              <li><a href="#"><?php if(count($comments)>0)echo count($comments); echo " "; echo "Comentários"; ?></a></li>
            </ul>
           
            <br />
           <?php //Conteúdo imagem do post
           if(isset($post['Post']['picture']) && !empty($post['Post']['picture']))
           {
           echo '<div class="blog-img"><img src="'.h($post['Post']['picture']).'" class="img-responsive" alt="" /></div>'; 
            }
            
           ?>
            <div class="mb20"></div>
            
            <?php //Conteúdo vídeo do post

              if(isset($post['Post']['video']) && !empty($post['Post']['video']))
              {
               
                $url=$post['Post']['video'];
                function get_youtube_id_from_link($url)
                {
                    if (stristr($url,'youtu.be/'))
                        {preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
                    else 
                        {@preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; }
                }
                echo '<div class="timeline-video">';
                
                $url=$post['Post']['video'];

               
                echo '<object width="420" height="315"
                 data="http://www.youtube.com/v/'.
                    get_youtube_id_from_link($url)
                 .'">
                </object>
            </div>';
              }
            ?>

            <!-- Conteúdo em texto do post-->
            <p>
              <?php
                if(isset($post['Post']['content']) && !empty($post['Post']['content']))
                {
                  echo h($post['Post']['content']);
                } 
                echo '<div class="timeline-btns">
                    <div class="pull-left">';

                        if(isset($likes))
                        {
                          $liked=FALSE;
                          //percorrer lista de likes
                          for($j=0;$j<$likes_count;$j++){
                            if($likes['Like']['post_id']==$current_post['Post']['id'] && !$liked){//caso o utilizador tenha feito like num post
                                  $liked=TRUE;
                                  echo '<div class="tooltips" data-toggle="tooltip" title="Não gostar">';    
                                  echo $this->Form->postLink('♥', array('action' => 'deleteLike', $likes['Like']['id']));
                                  echo '</div>';
                            }
                        }
                          //se utilizador não fez like
                          if(!$liked){
                                  echo '<div class="tooltips" data-toggle="tooltip" title="Gostar">';
                                  echo $this->Form->create('Like');
                                  echo $this->Form->input('post_id', array('type' => 'hidden','value' => $current_post['Post']['id']));
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
                              echo $this->Form->input('post_id', array('type' => 'hidden','value' => $current_post['Post']['id']));
                              echo $this->Form->input('username', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username']));
                            
                              echo $this->Form->submit('♡');
                              echo $this->Form->end();
                              echo '</div>';
                         }

                    echo '</div>
                    <div class="pull-right">
                        <small class="text-muted">';
                        if($likes_count > 1) echo $likes_count.' pessoas gostam disto';
                        else if($likes_count == 1) echo '1 pessoa gosta disto';
                        echo '</small>
                    </div>';

              ?>
            </p>
          
          </div><!-- panel-body -->
        </div><!-- panel -->
        
        <div class="authorpanel">
          <div class="media">
          <?php if(!empty($user['User']['picture'])) 
            echo '<a class="pull-left" href="#">
                  <img style="width: 50px; height: 50px;" class="media-object thumbnail" src="'.$user['User']['picture'].'" alt="" />
                </a>';
                if(!empty($user['User']['about']))
            echo '<div class="media-body event-body">
              <h4 class="subtitle">Sobre o autor</h4>
              <p>'. $user['User']['about'] .'</p>
            </div>';
            ?>
          </div><!-- media -->
        </div><!-- authorpanel -->
        
        <div class="mb30"></div>
        <h5 class="subtitle"><?php if(count($comments)>1)echo count($comments). " Comentários";
        else if(count($comments)==1) echo count($comments). " Comentário";?>
        </h5>
        <div class="mb30"></div>
        
        <ul class="media-list comment-list">
          
          <?php
          for($i=0; $i<count($comments); $i++){
            echo '<li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object thumbnail" src="';
                          echo $user_comment[$i]['0']['User']['picture'];
                          echo '" alt="" />
                            </a>
                            <div class="media-body">
                              <h4>';
                              echo $user_comment[$i]['0']['User']['first_name'].' '.$user_comment[$i]['0']['User']['last_name'];
                              echo '</h4>
                              <small class="text-muted">'.$comments[$i]['Comment']['datemade'].'</small>';
                               if($comments[$i]['Comment']['user']==$_SESSION["Auth"]["User"]["username"]){
                                  echo '<div class="tooltips pull-right" data-toggle="tooltip" title="Remover comentário">';
                                  echo $this->Form->postLink('×', array('action' => 'deleteCommentInPost', $comments[$i]['Comment']['id']), array('confirm' => 'De certeza que deseja remover este comentário?'), array('class' => 'panel-close text-right pull-right'));
                                }
                                  echo '</div>';
                                  echo '<p>'.$comments[$i]['Comment']['content'].'</p>   
                                </div>'; 

                            echo '</li><!-- media -->';
          }
          ?>
        </ul>
        
        <div class="mb30"></div>
        <h5 class="subtitle mb5">Deixe um comentário</h5>
        <div class="mb20"></div>
        <?php echo $this->Form->create('BoostCake', array(
          'inputDefaults' => array(
            'wrapInput' => false
          ),
          'class' => 'well'
        )); ?>
        <?php $user = $_SESSION["Auth"]["User"]["username"];
          echo $this->Form->input('text', array(
          'label' => '',
          'name' => 'data[Comment][user]',
          'required' => 'required',
          'maxlength' => 16,
          'type' => 'hidden',
          'value' => $user
        )); ?>
        <?php echo $this->Form->input('text', array(
          'label' => '',
          'name' => 'data[Comment][post]',
          'required' => 'required',
          'maxlength' => 16,
          'type' => 'hidden',
          'value' => h($post['Post']['id'])
        )); ?>

        <?php echo $this->Form->input('text', array(
          'label' => '',
          'placeholder' => 'Comentário...',
          'rows' => 5,
          'onfocus' => 'this.rows=5',
          'class' => 'form-control',
          'name' => 'data[Comment][content]',
          'maxlength' => 255,
          'required' => 'required',
          'style' => 'resize:none;'
        )); ?>
      <?php echo $this->Form->submit('Publicar', array(
      'div' => 'form-group',
      'class' => 'btn btn-primary pull-right',
      'type' => 'submit',
      'value' => 'Submit',
      'action' => '/index.php/posts/view',
      'method' => 'post'
      )); ?>
      
     
      </div><!-- col-sm-8 -->
      
      <div class="col-sm-3">
        <div class="blog-sidebar">
          
          <!--<h5 class="subtitle">Text Widget</h5>
          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam</p>
          
          <div class="mb30"></div>
          
          <h5 class="subtitle">Categories</h5>
          <ul class="sidebar-list">-->
          <?php
            if(isset($all_posts) && !empty($all_posts))
            {
              for($i=0;$i<$all_posts;$i++)
              {
                echo '
                  <li><a href="/'. $all_posts[$i]['Post']['id'] .'"><i class="fa fa-angle-right"></i>'. $all_posts[$i]['Post']['title'] .'</a></li>
                ';
              }
            }
            ?>
          </ul>
          
          <div class="mb30"></div>
          
          <!--<h5 class="subtitle">Archives</h5>
          <ul class="sidebar-list">
            <li><a href="#"><i class="fa fa-angle-right"></i> January 2014</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> December 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> November 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> October 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> September 2013</a></li>
          </ul>-->
          
        </div><!-- blog-sidebar -->
        
      </div><!-- col-sm-4 -->
      
      </div><!-- row -->
      
    </div><!-- contentpanel -->


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/custom.js"></script>
<script>
  jQuery(window).load(function(){
  
    var container = document.querySelector('#bloglist');
    var msnry = new Masonry( container, {
      // options
      columnWidth: '.col-xs-6',
      itemSelector: '.col-xs-6'
    });
  
  });
</script>