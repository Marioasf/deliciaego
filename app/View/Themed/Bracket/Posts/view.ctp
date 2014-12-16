    <div class="contentpanel">
      
      <div class="row blog-content">
      <div class="col-sm-9">
        
        <div class="panel panel-default panel-blog">
          <div class="panel-body">
            <h3 class="blogsingle-title"> <?php echo h($post['Post']['title']); ?></h3>
            
            <ul class="blog-meta">
              <li>Por: <a href="#"><?php echo $user[0]['User']['first_name']; echo " "; echo $user[0]['User']['last_name']; ?></a></li>
              <li><?php echo h($post['Post']['datemade']); ?></li>
              <li><a href="#"><?php echo count($comments); echo " "; echo "Comments"; ?></a></li>
            </ul>
            
            <br />
           <?php echo '<div class="blog-img"><img src="'.h($post['Post']['picture']).'" class="img-responsive" alt="" /></div>'; ?>
            <div class="mb20"></div>
            
            <p><?php echo h($post['Post']['content']); ?></p>
          
          </div><!-- panel-body -->
        </div><!-- panel -->
        
        <div class="authorpanel">
          <div class="media">
            <a class="pull-left" href="#">
              <?php echo '<img  style="width: 50px; height: 50px;" class="media-object thumbnail" src="'.$user[0]['User']['picture'].'" alt="" />';?>
            </a>
            <div class="media-body event-body">
              <h4 class="subtitle">Sobre o autor</h4>
              <p><?php echo $user[0]['User']['about']; ?></p>
            </div>
          </div><!-- media -->
        </div><!-- authorpanel -->
        
        <div class="mb30"></div>
        <h5 class="subtitle"><?php echo count($comments); echo ' Comments' ?></h5>
        <div class="mb30"></div>
        
        <ul class="media-list comment-list">
          
          <li class="media">
          <?php
          for($i=0; $i<count($comments); $i++){
            echo '
                <img class="media-object thumbnail" src="';
                  for($k=0; $k<count($user_comment); $k++){
                    if($comments[$i]['Comment']['user']===$user_comment[$k]['User']['username']){
                      echo $user_comment[$k]['User']['picture'];
                      echo '" alt="" />
                        </a>
                        <div class="media-body">
                          <a href="#" class="btn btn-primary btn-xs pull-right reply">Reply</a>
                          <h4>';
                          echo $user_comment[$k]['User']['first_name'].' '.$user_comment[$k]['User']['last_name'];
                          echo '</h4>
                          <small class="text-muted">'.$comments[$i]['Comment']['datemade'].'</small>
                          <p>'.$comments[$i]['Comment']['content'].'</p>   
                        </div>'; 
            }
          }
          }
          ?>
          </li><!-- media -->
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
      
      <?php echo $this->Session->flash();
      //echo '<br/>';
      //var_dump($this->request->data);
      ?>
      </div><!-- col-sm-8 -->
      
      <div class="col-sm-3">
        <div class="blog-sidebar">
          
          <h5 class="subtitle">Text Widget</h5>
          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam</p>
          
          <div class="mb30"></div>
          
          <h5 class="subtitle">Categories</h5>
          <ul class="sidebar-list">
            <li><a href="#"><i class="fa fa-angle-right"></i> Science &amp; Technology</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Food &amp; Health</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Entertainment</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Web Development</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Communication</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Movies &amp; TV Shows</a></li>
          </ul>
          
          <div class="mb30"></div>
          
          <h5 class="subtitle">Archives</h5>
          <ul class="sidebar-list">
            <li><a href="#"><i class="fa fa-angle-right"></i> January 2014</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> December 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> November 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> October 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> September 2013</a></li>
          </ul>
          
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