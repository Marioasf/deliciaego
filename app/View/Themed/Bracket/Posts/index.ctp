<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>
    <div class="pageheader">
            <div class="panel panel-dark panel-alt timeline-post">
               <form id="PostAddForm" accept-charset="utf-8" method="post" action="/">
                <input name="data[Post][user]" maxlength="16" id="PostUser" required="required" type="hidden" value="<?php $_SESSION['Auth']['User']['username']?>">
                <div class="panel">
                    <textarea type="text" id="PostTitle" maxlength="25" name="data[Post][title]" rows="1" onfocus="this.rows=1;" style="resize: none;" placeholder="Título do seu post..." class="form-control"></textarea>
                </div>
                <div class="panel-body">              
                    <textarea type="text" required="required" id="PostContent" maxlength="255" name="data[Post][content]" rows="5" onfocus="this.rows=5;" placeholder="Diga algo sobre si..." class="form-control"></textarea>
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <div class="timeline-btns pull-left">
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Foto" style="margin-left: 20em;"><i class="glyphicon glyphicon-picture" ></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Video" style="margin-left: 5em;"><i class="glyphicon glyphicon-facetime-video"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Localização" style="margin-left: 5em;"><i class="glyphicon glyphicon-map-marker"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Identificar amigo" style="margin-left: 5em;"><i class="glyphicon glyphicon-user"></i></a>
                    </div><!--timeline-btns -->
                    <button type="submit" class="btn btn-primary pull-right">Submeter Post</button>
                </div><!-- panel-footer -->
            </div>
    </div>
    
    <div class="contentpanel">
      <div style="position: relative; height: 1641.38px;" id="bloglist" class="row">
      <?php 
      for($i=0; $i<count($friend_posts); $i++){
      	//if a post has picture only
        if($friend_posts[$i]['Post']['video'] =="" && $friend_posts[$i]['Post']['content'] == "" && $friend_posts[$i]['Post']['picture'] != ""){
            echo '        <div class="col-sm-6">
              <div class="panel panel-default panel-timeline">
                <div class="panel-heading">
                    
                    <div class="media">
                        <a href="#" class="pull-left">
                            <img alt="" src="'.$user_friend[$i]['User']['picture'].'" class="media-object">
                        </a>
                        <div class="media-body">
                            <h4 class="text-primary">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].'  <small>Partilhou uma imagem</small></h4>
                            <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                        </div>
                    </div><!-- media -->
                    
                </div><!-- panel-heading -->
                <div class="panel-body">
                <h4><a href="#">'.$friend_posts[$i]['Post']['title'].'</a></h4>
                    <a href="#"><img src="'.$friend_posts[$i]['Post']['picture'].'" alt="" style="width: 400px; height: 250px;" /></a>
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
                <div class="panel-footer">
                    <div class="media">
                        <a href="#" class="pull-left">
                            <img alt="" src="'.$_SESSION['Auth']['User']['picture'].'" class="media-object">
                        </a>
                        <div class="media-body">
                            <input type="text" class="form-control" placeholder="Write a comment" />
                        </div>
                    </div><!-- media -->
                </div>
              </div><!-- panel -->
            </div><!-- col-sm-6 -->
            ';
            }
            //if a post has content only
            if($friend_posts[$i]['Post']['video'] =="" && $friend_posts[$i]['Post']['picture'] =="" && $friend_posts[$i]['Post']['content'] != ""){
                echo '        <div class="col-sm-6">
                  <div class="panel panel-default panel-timeline">
                    <div class="panel-heading">
                        
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="" src="'.$user_friend[$i]['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">
                                <h4 class="text-primary">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].' <small>Partilhou uma mensagem</small></h4>
                                <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                            </div>
                        </div><!-- media -->
                        
                    </div><!-- panel-heading -->
                    <div class="panel-body">
                        
                        <div class="media">
                        <a href="#" class="pull-left">
                          <img alt="" src="'.$friend_posts[$i]['Post']['picture'].'" class="media-object">
                        </a>
                        <div class="media-body">
                          <h4><a href="#">'.$friend_posts[$i]['Post']['title'].'</a></h4>
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
                    </div><!-- panel-body -->
                    <div class="panel-footer">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="" src="'.$_SESSION['Auth']['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">
                                <input type="text" class="form-control" placeholder="Write a comment" />
                            </div>
                        </div><!-- media -->
                    </div>
                  </div><!-- panel -->
                </div><!-- col-sm-6 -->';
            }
            
          //if a post has video only
            if($friend_posts[$i]['Post']['content'] == "" && $friend_posts[$i]['Post']['picture'] == "" && $friend_posts[$i]['Post']['video'] != ""){
                echo ' <div class="col-sm-6">
                  <div class="panel panel-default panel-timeline">
                    <div class="panel-heading">
                        
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="" src="'.$user_friend[$i]['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">
                                <h4 class="text-primary">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].' <small>Partilhou um vídeo</small></h4>
                                <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                            </div>
                        </div><!-- media -->
                        
                    </div><!-- panel-heading -->
                    <div class="panel-body">
                        <h4><a href="#">'.$friend_posts[$i]['Post']['title'].'</a></h4>
                        <div class="timeline-video">
                            <iframe src="'.$friend_posts[$i]['Post']['video'].'" allowfullscreen></iframe>
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
                    </div><!-- panel-body -->
                     <div class="panel-footer">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="" src="'.$_SESSION['Auth']['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">
                                <input type="text" class="form-control" placeholder="Write a comment" />
                            </div>
                        </div><!-- media -->
                    </div>
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
                            <a href="#" class="pull-left">
                                <img alt="" src="'.$user_friend[$i]['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">
                                <h4 class="text-primary">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].' <small>Partilhou uma mensagem com imagem</small></h4>
                                <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                            </div>
                        </div><!-- media -->
                        
                    </div><!-- panel-heading -->
            <div class="panel-body">
                
                <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="'.$friend_posts[$i]['Post']['picture'].'" class="media-object">
                </a>
                <div class="media-body">
                  <h4><a href="#">'.$friend_posts[$i]['Post']['title'].'</a></h4>
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
            </div><!-- panel-body -->
             <div class="panel-footer">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="" src="'.$_SESSION['Auth']['User']['picture'].'" class="media-object">
                            </a>
                            <div class="media-body">
                                <input type="text" class="form-control" placeholder="Write a comment" />
                            </div>
                        </div><!-- media -->
                    </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->';
    }
}
      ?>
        
        
      </div><!-- row -->
          

