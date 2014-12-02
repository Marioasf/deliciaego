    <div class="pageheader">
      <h2><i class="fa fa-file-text"></i> Produtos <span>Os nossos produtos...</span></h2>    
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="/">Deliciaego</a></li>
          <li class="active">Produtos</li>
        </ol>
      </div>
      <br/>
    <a href="items/add" class="btn btn-primary">Adicione os seus produtos!</a>
    </div>

    <div class="contentpanel">
      <?php
          $paginator = $this->Paginator;
          echo 'Ordenar por:';
          echo $paginator->sort('name', 'Nome /');
          echo $paginator->sort('category', 'Categoria /');
          echo $paginator->sort('price', 'Preço');
        ?>
      <div id="bloglist" class="row">
                <?php for($i=0; $i<count($items); $i++){
                  echo '
                      <div class="col-xs-6 col-sm-4">
                        <div class="blog-item">
                          <a href="/items/view/'.$items[$i]['Item']['id'].'" class="blog-img"><img src="'.$items[$i]['Item']['picture'].'" class="img-responsive" alt=""   style="width: 225px; height: 250px;" /></a>
                          <div class="blog-details">
                            <h4 class="blog-title"><a href="/items/view/'.$items[$i]['Item']['id'].'">'.$items[$i]['Item']['name'].'</a></h4>
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
      <?php echo $this->Paginator->pagination(array(
        'ul' => 'pagination'
      )); ?>
    </div><!-- contentpanel -->