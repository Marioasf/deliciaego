<?php echo $this->Form->create('Item'); ?>
<div class="contentpanel">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Adicionar Produto</h4>
      <p>Insira aqui a informação relativa a um produto destinado a venda</p>
    </div>
    <div class="panel-body">
      <form class="form-inline">
          <div class="form-group">
            <?php echo $this->Form->input('name', array(
            'label' => 'Nome',
            'placeholder' => 'Nome do produto'
            )); ?>
          </div>
          <div class="form-group">
            <?php echo $this->Form->input('category', array(
            'label' => 'Categoria',
            'placeholder' => 'Tipo de produto'
            )); ?>
          </div>
          <div class="form-group">
            <?php echo $this->Form->input('price', array(
            'label' => 'Preço (€)',
            'placeholder' => 'Preço incluindo taxas'
            )); ?>
          </div>
          <div class="form-group">
            <?php echo $this->Form->input('alias', array(
            'label' => 'URL para a página do produto',
            'placeholder' => 'Nome para o link'
            )); ?>
          </div>
        </div><!-- panel-body -->
      </form>
      <form class="form-inline">
        <div class="form-group">
          <?php echo $this->Form->input('description', array(
          'label' => 'Descrição',
          'div' => 'col-sm-7',
          'rows' => '5',
          'placeholder' => 'Breve descrição do produto'
          )); ?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('picture', array(
          'label' => 'Imagem',
          'placeholder' => 'Link da imagem do produto'
          )); ?>
        </div>
        <div class="panel-footer">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <?php echo $this->Form->input('user',array('value' => $_SESSION["Auth"]["User"]["username"], 'type' => 'hidden')); ?>
              <?php
              echo $this->Form->submit('Guardar', array(
              'class' => 'btn btn-success btn-block'
              ));?>
              <?php echo $this->Form->end(); ?>
            </div>
          </div>
        </div><!-- panel-footer -->
      </form>
  </div><!--panel panel-default>-->
</div><!--contentpanel-->