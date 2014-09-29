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

      <ul class="letter-list">
        <li><a href="#">Beleza</a></li>
        <li><a href="#">Bem-estar</a></li>
        <li><a href="#">Entradas</a></li>
        <li><a href="#">Lazer</a></li>
        <li><a href="#">Restaurantes</a></li>
        <li><a href="#">Saúde</a></li>
        <li><a href="#">Serviços</a></li>
        <li><a href="#">Shopping</a></li>
        <li><a href="#">Viagens</a></li>
      </ul>
      <div class="mb30"></div>

      <div id="bloglist" class="row">
                <?php for($i=0; $i<count($items); $i++){
                  echo '
                      <div class="col-xs-6 col-sm-4">
                        <div class="blog-item">
                          <a href="blog-single.html" class="blog-img"><img src="'.$items[$i]['Item']['picture'].'" class="img-responsive" alt=""   style="width: 225px; height: 250px;" /></a>
                          <div class="blog-details">
                            <h4 class="blog-title"><a href="#">'.$items[$i]['Item']['name'].'</a></h4>
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