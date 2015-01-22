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
              <li>Por: <?php echo h($item['Item']['user']); echo " ";?></li>
              <li><?php echo h($item['Item']['datemade']); ?></li>
              <li><?php 
              if(count($comments)>0){
                echo count($comments); 
              }
              if(count($comments)==1) {
                echo " Comentário"; 
              }
              if(count($comments)>1) {
                echo "Comentários"; 
              }
              ?></li>
              <li>Preço <?php echo h($item['Item']['price']); ?>€</li>
            </ul>

            <br />
            <div class="blog-img"><?php echo '<img style="width: 225px; height: 250px; "src="'.h($item['Item']['picture']).'" class="img-responsive" alt="" />'; ?></div>
            <div class="mb20"></div>
            <?php echo h($item['Item']['description']); ?>
          </div><!-- panel-body -->
        </div><!-- panel -->
        
        <div class="authorpanel">
        <?php 
          echo '<div class="media">';
           if(!empty($user['User']['picture']))
            echo '<a class="pull-left" href="#">
                     <img style="width: 50px; height: 50px; class="media-object thumbnail" src="'.$user['User']['picture'].'" alt="" />
                 </a>';
            
            if(!empty($user['User']['about']))
            echo '<div class="media-body event-body">
              <h4 class="subtitle">Sobre este utilizador</h4>'
               . $user['User']['about']. 
            '</div>';?>
          </div>
        </div><!-- authorpanel -->
        <?php if ($this->Session->read('Auth.User')) {
        echo '<div class="mb30"></div>';
        
        if(count($comments)>0){
          echo'<h5 class="subtitle">'. count($comments);
        }
        if(count($comments==1)){
          echo " Comentário".'</h5>';
        }
        else if(count($comments>1)){
          echo " Comentários".'</h5>';
        }
        echo '<div class="mb30"></div>
        
        <ul class="media-list comment-list">';
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
                                echo $this->Form->postLink('×', array('action' => 'deleteComment', $comments[$i]['Comment']['id']), array('confirm' => 'De certeza que deseja remover este comentário?'), array('class' => 'panel-close text-right pull-right'));
                                echo '</div>';
                              }
                              echo' <p>'.$comments[$i]['Comment']['content'].'</p>   
                            </div>'; 
                          
                          echo '</li><!-- media -->';
            }
          
        
        echo '</ul>
        
        <div class="mb30"></div>';

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