    <div class="pageheader">
      <h2><i class="fa fa-file-text"></i> Produtos <span>Os nossos produtos...</span></h2>    
      <div class="breadcrumb-wrapper">
        <span class="label">Caminho:</span>
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
        <!--<?php var_dump($wishlist);?>-->
        <?php echo $this->Session->flash();?>
      <div id="bloglist" class="row">
                <?php for($i=0; $i<count($items); $i++){
                  $found_wish=FALSE;
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
                                <li>';
                                //se utilizador tiver lista de desejos
                                if(isset($wishlist))
                                {
                                  //percorrer lista e colocar botão para remover da lista caso já lá exista ou botão para adicionar
                                  for($j=0;$j<count($wishlist);$j++){
                                    if($wishlist[$j]['Wishlist']['product_id']==$items[$i]['Item']['id'] && !$found_wish){//caso o item já esteja na lista de desejos e ainda não tenha sido encontrado nenhum item na lista de desejos anteriormente

                                          $found_wish=TRUE;
                                          echo '<div class="tooltips" data-toggle="tooltip" title="Remover da sua lista de desejos">';
                        
                                          echo $this->Form->postLink('♥', array('action' => 'delete', $wishlist[$j]['Wishlist']['id']), array('confirm' => 'De certeza que deseja remover este item?'));

                                          echo '</div>';
                                        }
                                       
                                  }
                                  //se não foi encontrado item na lista de desejos
                                  if(!$found_wish){
                                          echo '<div class="tooltips" data-toggle="tooltip" title="Adicionar à lista de desejos">';
                                          echo $this->Form->create('Wishlist');
                                          echo $this->Form->input('product_id', array('type' => 'hidden','value' => $items[$i]['Item']['id']));
                                          echo $this->Form->input('user', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username'])); 
                                          echo $this->Form->submit('♡', array('confirm' => 'De certeza que deseja adicionar este item?'));
                                          echo $this->Form->end();
                                          echo '</div>';
                                  }
                                  //faz reset à variável
                                  $found_wish=FALSE;
                                 
                                }
                                //se utilizador não tiver lista de desejos, colocar em todos os items botão para adicionar à lista de desejos
                                else {
                                  echo '<div class="tooltips" data-toggle="tooltip" title="Adicionar à lista de desejos">';
                                        echo $this->Form->create('Wishlist');
                                        echo $this->Form->input('product_id', array('type' => 'hidden','value' => $items[$i]['Item']['id']));
                                        echo $this->Form->input('user', array('type' => 'hidden','value' => $_SESSION['Auth']['User']['username'])); 
                                        echo $this->Form->submit('♡', array('confirm' => 'De certeza que deseja adicionar este item?'));
                                        echo $this->Form->end();

                                        echo '</div>';
                                }

                          echo '</li>
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