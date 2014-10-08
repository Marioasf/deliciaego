    <div class="pageheader">
      <h2><i class="fa fa-file-text"></i> Produtos <span>Os nossos produtos...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
          <li><a href="index.html">Pages</a></li>
          <li class="active">Blog List</li>
        </ol>
      </div>
    </div>
    <div class="contentpanel">
      
      <div id="bloglist" class="row">
                <?php for($i=0; $i<count($items); $i++){
                  echo '
                      <div class="col-xs-6 col-sm-4">
                        <div class="blog-item">
                          <a href="/Products" class="blog-img"><img src="'.$items[$i]['Item']['picture'].'" class="img-responsive" alt=""   style="width: 225px; height: 250px;" /></a>
                          <div class="blog-details">
                            <h4 class="blog-title"><a href="/Products">'.$items[$i]['Item']['name'].'</a></h4>
                            <ul class="blog-meta">
                              <li>By: <a href="#">'.$items[$i]['Item']['user'].'</a></li>
                              <li>Jan 03, 2014</li>
                              <li><a href="#">2 Comments</a></li>
                            </ul>
                            <div class="blog-summary">
                              <p>'.$items[$i]['Item']['description'].'</p>
                              <button class="btn btn-sm btn-white">Read More</button>
                            </div>
                          </div>
                        </div><!-- blog-item -->
                      </div><!-- col-xs-6 -->';
                    }
                ?>
      </div><!-- row -->
      
    </div><!-- contentpanel -->