  <?php echo $this->Html->css('style.default'); ?>
  <?php echo $this->Html->css('prettyPhoto'); ?>
  
  <div class="pageheader">
    <h2><i class="fa fa-user"></i> Utilizadores</h2>
    <div class="breadcrumb-wrapper"> 
      <span class="label">You are here:</span>
      <ol class="breadcrumb">
        <li><a href="index.html">Bracket</a></li> 
        <li><a href="index.html">Pages</a></li>
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
         
         for($i=0; $i<count($users); $i++){
          $friend_request=true;
          echo '
          <div class="col-md-6">
            <div class="people-item">
              <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="'.$users[$i]['User']['picture'].'" class="thumbnail media-object">
                </a>
                <div class="media-body">
                  <h4 class="person-name">'.$users[$i]['User']['first_name'].' '.$users[$i]['User']['last_name'].'</h4>
                  <div class="text-muted"><i class="fa fa-map-marker"></i> '.$users[$i]['User']['country'].'</div>
                  <div class="text-muted"><i class="fa fa-briefcase"></i> '.$users[$i]['User']['company'].'</a></div>
                  <ul class="social-list">
                   <li> ';
                   for($j=0;$j<count($friends);$j++){
	                   if($users[$i]['User']['username']===$friends[$j]['Friend']['user2'])
                      { 

                        $friend_request=false;
                        echo '<button class="btn btn-sm btn-primary mr5"><i class="fa fa-check"></i> Amigos</button>';
	                   	}
	                   else
                     {
                       if($friend_request)
                       {
  	                   	echo '<button class="btn btn-sm btn-success mr5"><i class="fa fa-user"></i> Enviar pedido de amizade</button>';
                       }

                        $friend_request=false;
                   }
                 } 
                 echo ' </li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->';} ?>
        </div><!-- row -->
      </div><!-- people-list -->
      
    </div><!-- contentpanel -->
