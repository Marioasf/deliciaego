<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>
    <div class="pageheader">
            <div class="panel panel-dark panel-alt timeline-post">
                <div class="panel-body">              
                    <textarea placeholder="Diga algo sobre si..." class="form-control"></textarea>
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <div class="timeline-btns pull-left">
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Foto" style="margin-left: 20em;"><i class="glyphicon glyphicon-picture" ></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Video" style="margin-left: 5em;"><i class="glyphicon glyphicon-facetime-video"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Localização" style="margin-left: 5em;"><i class="glyphicon glyphicon-map-marker"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Identificar amigo" style="margin-left: 5em;"><i class="glyphicon glyphicon-user"></i></a>
                    </div><!--timeline-btns -->
                    <button class="btn btn-primary pull-right">Submit Post</button>
                </div><!-- panel-footer -->
            </div>
    </div>
    
    <div class="contentpanel">
      <div id="timeline-list" class="row" style="max-width: 950px;">   
      <?php 
      /*var_dump($friend_posts);
      var_dump("__________________");
      var_dump($friend_plist);
      var_dump("__________________");
      var_dump($friend_info);
      var_dump("__________________");
      var_dump($user_friend);*/
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
                            <h4 class="text-primary">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].'  <small>shared a photo</small></h4>
                            <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                        </div>
                    </div><!-- media -->
                    
                </div><!-- panel-heading -->
                <div class="panel-body">
                    <a href="#"><img src="'.$friend_posts[$i]['Post']['picture'].'" alt="" style="width: 400px; height: 250px;" /></a>
                    <div class="timeline-btns">
                        <div class="pull-left">
                            <a href="#" class="tooltips" data-toggle="tooltip" title="Like"><i class="glyphicon glyphicon-heart"></i></a>
                            <a href="#" class="tooltips" data-toggle="tooltip" title="Add Comment"><i class="glyphicon glyphicon-comment"></i></a>
                            <a href="#" class="tooltips" data-toggle="tooltip" title="Share"><i class="glyphicon glyphicon-share"></i></a>
                        </div>
                        <div class="pull-right">
                            <small class="text-muted">2 people like this</small>
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
                                <h4 class="text-primary">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].' <small>shared a photo</small></h4>
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
                          <h4><a href="#">My Favorite Place</a></h4>
                          <p>'.$friend_posts[$i]['Post']['content'].'</p>
                        </div>
                      </div>
                        
                        <div class="timeline-btns">
                            <div class="pull-left">
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Like"><i class="glyphicon glyphicon-heart"></i></a>
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Add Comment"><i class="glyphicon glyphicon-comment"></i></a>
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Share"><i class="glyphicon glyphicon-share"></i></a>
                            </div>
                            <div class="pull-right">
                                <small class="text-muted">1 people like this</small>
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
                                <h4 class="text-primary">'.$user_friend[$i]['User']['first_name']." ".$user_friend[$i]['User']['last_name'].' <small>shared a photo</small></h4>
                                <small class="text-muted">'.$friend_posts[$i]['Post']['datemade'].'</small>
                            </div>
                        </div><!-- media -->
                        
                    </div><!-- panel-heading -->
                    <div class="panel-body">
                        
                        <div class="timeline-video">
                            <iframe src="'.$friend_posts[$i]['Post']['video'].'" allowfullscreen></iframe>
                        </div>
                        
                        <div class="timeline-btns">
                            <div class="pull-left">
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Like"><i class="glyphicon glyphicon-heart"></i></a>
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Add Comment"><i class="glyphicon glyphicon-comment"></i></a>
                                <a href="#" class="tooltips" data-toggle="tooltip" title="Share"><i class="glyphicon glyphicon-share"></i></a>
                            </div>
                            <div class="pull-right">
                                <small class="text-muted">6 people like this</small>
                            </div>
                        </div>
                    </div><!-- panel-body -->
                    <div class="panel-footer">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="" src="images/photos/user3.png" class="media-object">
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
        <div class="col-sm-6">
          <div class="panel panel-default panel-timeline">
            <div class="panel-heading">
                
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" src="images/photos/user2.png" class="media-object">
                    </a>
                    <div class="media-body">
                        <h4 class="text-primary">Nusja Nawancali <small>shared photo</small></h4>
                        <small class="text-muted">January 9, 2014 at 7:30am</small>
                    </div>
                </div><!-- media -->
                
            </div><!-- panel-heading -->
            <div class="panel-body">
                <a href="#"><img src="images/photos/media3.png" class="img-responsive" alt="" /></a>
                <div class="timeline-btns">
                    <div class="pull-left">
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Like"><i class="glyphicon glyphicon-heart"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Add Comment"><i class="glyphicon glyphicon-comment"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Share"><i class="glyphicon glyphicon-share"></i></a>
                    </div>
                    <div class="pull-right">
                        <small class="text-muted">6 people like this</small>
                    </div>
                </div>
            </div><!-- panel-body -->
            <div class="panel-footer">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" src="images/photos/user3.png" class="media-object">
                    </a>
                    <div class="media-body">
                        <input type="text" class="form-control" placeholder="Write a comment" />
                    </div>
                </div><!-- media -->
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6">
          <div class="panel panel-default panel-timeline">
            <div class="panel-heading">
                
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" src="images/photos/user2.png" class="media-object">
                    </a>
                    <div class="media-body">
                        <h4 class="text-primary">Nusja Nawancali <small>shared photo</small></h4>
                        <small class="text-muted">January 9, 2014 at 5:30am</small>
                    </div>
                </div><!-- media -->
                
            </div><!-- panel-heading -->
            <div class="panel-body">
                
                <div class="media">
                <a href="#" class="pull-left">
                  <img alt="" src="images/photos/media4.png" class="media-object">
                </a>
                <div class="media-body">
                  <h4><a href="#">My Favorite Place</a></h4>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
                
                <div class="timeline-btns">
                    <div class="pull-left">
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Like"><i class="glyphicon glyphicon-heart"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Add Comment"><i class="glyphicon glyphicon-comment"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Share"><i class="glyphicon glyphicon-share"></i></a>
                    </div>
                    <div class="pull-right">
                        <small class="text-muted">1 people like this</small>
                    </div>
                </div>
            </div><!-- panel-body -->
            <div class="panel-footer">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" src="images/photos/user3.png" class="media-object">
                    </a>
                    <div class="media-body">
                        <input type="text" class="form-control" placeholder="Write a comment" />
                    </div>
                </div><!-- media -->
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6">
          <div class="panel panel-default panel-timeline">
            <div class="panel-heading">
                
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" src="images/photos/user4.png" class="media-object">
                    </a>
                    <div class="media-body">
                        <h4 class="text-primary">Weno Carasbong <small>shared photo</small></h4>
                        <small class="text-muted">January 8, 2014 at 2:30am</small>
                    </div>
                </div><!-- media -->
                
            </div><!-- panel-heading -->
            <div class="panel-body">
                
                <div class="timeline-video">
                    <iframe src="http://www.youtube.com/embed/z2u3nqHIn1g" allowfullscreen></iframe>
                </div>
                
                <div class="timeline-btns">
                    <div class="pull-left">
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Like"><i class="glyphicon glyphicon-heart"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Add Comment"><i class="glyphicon glyphicon-comment"></i></a>
                        <a href="#" class="tooltips" data-toggle="tooltip" title="Share"><i class="glyphicon glyphicon-share"></i></a>
                    </div>
                    <div class="pull-right">
                        <small class="text-muted">6 people like this</small>
                    </div>
                </div>
            </div><!-- panel-body -->
            <div class="panel-footer">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img alt="" src="images/photos/user3.png" class="media-object">
                    </a>
                    <div class="media-body">
                        <input type="text" class="form-control" placeholder="Write a comment" />
                    </div>
                </div><!-- media -->
            </div>
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
      </div><!-- row -->
          

