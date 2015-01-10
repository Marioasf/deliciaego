     <link href="css/style.default.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">   
    <div class="pageheader">
      <h2><i class="fa fa-gift"></i><?php echo h($item['Item']['category']); ?> <span><?php echo h($item['Item']['name']); ?></span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="/">Deliciaego</a></li>
          <li><a href="/items">Produtos</a></li>
          <li class="active"><?php  echo h($item['Item']['name']); ?> </li>
        </ol>
      </div>
    </div>
    
    <?php echo $this->Session->flash();?>
    <div class="contentpanel">
      
      <div class="row blog-content">
      <div class="col-sm-9">
        
        <div class="panel panel-default panel-blog">
          <div class="panel-body">
            <h3 class="blogsingle-title"><?php  echo h($item['Item']['name']); ?></h3>
            
            <ul class="blog-meta">
              <li>By: <a href="#"><?php echo h($item['Item']['user']); ?></a></li>
              <li>Jan 02, 2014</li>
              <li><a href="#"><?php echo count($comments); echo " "; echo "Comments"; ?></a></li>
              <li>Preço <?php echo h($item['Item']['price']); ?>€</li>
            </ul>
            
            <br />
            <div class="blog-img"><?php echo '<img style="width: 225px; height: 250px; "src="'.h($item['Item']['picture']).'" class="img-responsive" alt="" />'; ?></div>
            <div class="mb20"></div>
            <?php echo h($item['Item']['description']); ?>
          </div><!-- panel-body -->
        </div><!-- panel -->
        
        <div class="authorpanel">
          <div class="media">
            <a class="pull-left" href="#">
             <?php echo '<img style="width: 50px; height: 50px; class="media-object thumbnail" src="'.$user['User']['picture'].'" alt="" />'; ?>
            </a>
            <div class="media-body event-body">
              <h4 class="subtitle">About The Author</h4>
              <?php echo $user['User']['about']; ?>
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
                          <h4>';
                          echo $user_comment[$k]['User']['first_name'].' '.$user_comment[$k]['User']['last_name'];
                          echo '</h4>
                          <small class="text-muted">'.$comments[$i]['Comment']['datemade'].'</small>';
                          echo '<div class="tooltips pull-right" data-toggle="tooltip" title="Remover comentário">';
                          echo $this->Form->postLink('×', array('action' => 'deleteComment', $comments[$i]['Comment']['id']), array('confirm' => 'De certeza que deseja remover este comentário?'), array('class' => 'panel-close text-right pull-right'));
                          echo '</div>';
                          echo' <p>'.$comments[$i]['Comment']['content'].'</p>   
                        </div>'; 
            }
          }
          }
          ?>
          </li><!-- media -->
        </ul>
        
        <div class="mb30"></div>

        
        <?php if ($this->Session->read('Auth.User')) 
        {

          echo '<h5 class="subtitle mb5">Deixe um comentário</h5>
          <div class="mb20"></div>';

        echo $this->Form->create('BoostCake', array(
          'inputDefaults' => array(
            'wrapInput' => false
          ),
          'class' => 'well'
        )); 
        $user = $_SESSION["Auth"]["User"]["username"];
          echo $this->Form->input('text', array(
          'label' => '',
          'name' => 'data[Comment][user]',
          'required' => 'required',
          'maxlength' => 16,
          'type' => 'hidden',
          'value' => $user
        )); 
        echo $this->Form->input('text', array(
          'label' => '',
          'name' => 'data[Comment][product]',
          'required' => 'required',
          'maxlength' => 16,
          'type' => 'hidden',
          'value' => h($item['Item']['id'])
        )); 

         echo $this->Form->input('text', array(
          'label' => '',
          'placeholder' => 'Comentário...',
          'rows' => 5,
          'onfocus' => 'this.rows=5',
          'class' => 'form-control',
          'name' => 'data[Comment][content]',
          'maxlength' => 255,
          'required' => 'required',
          'style' => 'resize:none;'
        )); 
        echo $this->Form->submit('Publicar', array(
      'div' => 'form-group',
      'class' => 'btn btn-primary pull-right',
      'type' => 'submit',
      'value' => 'Submit',
      'action' => '/posts/view',
      'method' => 'post'
      ));
      }
      ?>
      
      </div><!-- col-sm-8 -->
      
      <div class="col-sm-3">
        <div class="blog-sidebar">

          <?php
            if(isset($company) && !empty($company))
            {
              echo '<h5 class="subtitle">Perfil da empresa</h5>
              <a href="/companies/view/'. $company['Company']['id'] .'"><i class="fa fa-angle-right"></i>'. $company['Company']['name'] .'</a>';
            }
          ?>


          <div class="mb30"></div>

          <?php
            if(isset($company) && !empty($company))
            {
              echo '<div class="blog-img"><img style="width: 225px; height: 250px; "src="'.h($company['Company']['picture']).'" class="img-responsive" alt=""></div>';
            }
          ?>

          <div class="mb30"></div>

          <?php
            if(isset($company) && !empty($company))
            {
              echo '<h5 class="subtitle">Ramo</h5>
              <p>'.$company['Company']['category'].'</p>';
            }
          ?>
          
          <div class="mb30"></div>

          <?php
            if(isset($company) && !empty($company))
            {
              echo '<h5 class="subtitle">Descrição</h5>
              <p>'.$company['Company']['about'].'</p>';
            }
          ?>
            
            <div class="mb30"></div>

            <?php
              if(isset($company) && !empty($company))
              {
                echo '<h5 class="subtitle">Morada</h5>
                <p>'.$company['Company']['address'].'</p>';
              }
            ?>
          
          <div class="mb30"></div>
          
          
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