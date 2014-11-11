            <div class="pageheader">
      <h2><i class="fa fa-file-text"></i> Os meus posts <span>Posts submetidos por <?php echo $user[0]['User']['first_name']; ?>...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">Caminho:</span>
        <ol class="breadcrumb">
          <li><a href="/">Deliciaego</a></li>
          <li class="active">Os meus posts</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
      
      <div id="bloglist" class="row">
        <?php
          for($i=0; $i<count($posts); $i++){
              echo '        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="blog-item">
            <a href="/posts/view/'.$posts[$i]['Post']['id'].'" class="blog-img"><img src="'.$posts[$i]['Post']['picture'].'" class="img-responsive" alt="" /></a>';
           if($posts[$i]['Post']['video'] !=""){
            echo '<div class="blog-video">
              <iframe src="'.$posts[$i]['Post']['video'].'" allowfullscreen></iframe>
            </div>';
           }
            echo '<div class="blog-details">
              <h4 class="blog-title"><a href="/posts/view/'.$posts[$i]['Post']['id'].'">'.$posts[$i]['Post']['title'].'</a></h4>
              <ul class="blog-meta">
                <li>By: <a href="/profile">'.$posts[$i]['Post']['user'].'</a></li>
                <li>Jan 03, 2014</li>
                <li><a href="#">2 Comments</a></li>
              </ul>';
              if($posts[$i]['Post']['content'] != "") {
              echo '<div class="blog-summary">
                <p>'.$posts[$i]['Post']['content'].'</p>
                <button class="btn btn-sm btn-white">Read More</button>
              </div>';}
           echo' </div>
          </div><!-- blog-item -->
        </div><!-- col-xs-6 -->';
          }
        ?>              
        
      </div><!-- row -->
      
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->

<script>
  jQuery(window).load(function(){
  
    var container = document.querySelector('#bloglist');
    var msnry = new Masonry( container, {
      // options
      columnWidth: '.col-xs-6',
      itemSelector: '.col-xs-6'
    });
    
    // check on load
    if(jQuery(window).width() <= 480 )
        msnry.destroy();

    // check on resize
    jQuery(window).resize(function(){
        if(jQuery(this).width() <= 480 )
            msnry.destroy();
    });

  });
  
</script>