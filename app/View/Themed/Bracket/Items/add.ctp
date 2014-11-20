<div class="col-md-6">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-btns">
        <a href="#" class="panel-close">×</a>
        <a href="#" class="minimize">−</a>
      </div>
      <h4 class="panel-title">Assistente</h4>
      <p>Insira aqui o seu produto.</p>
    </div>
    <div class="panel-body panel-body-nopadding">

      <!-- BASIC WIZARD -->

      <div id="progressWizard" class="basic-wizard">

        <ul class="nav nav-pills nav-justified">

          <li class="active"><a href="#ptab1" data-toggle="tab"><span> 1:</span> Informações básicas</a></li>
          <li><a href="#ptab2" data-toggle="tab"><span> 2:</span> Detalhes</a></li>
          <li><a href="#ptab3" data-toggle="tab"><span> 3:</span> Finalizar</a></li>
        </ul>

        <div class="tab-content">

          <div class="progress progress-striped active">

            <div style="width: 33.3333%;" class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            <?php echo $this->Form->create('BoostCake', array(
              'inputDefaults' => array(
               'div' => 'form-group',
               'label' => array(
                'class' => 'col col-md-3 control-label'
                ),
               'wrapInput' => 'col col-md-9',
               'class' => 'form-control'
               ),
              'class' => 'well form-horizontal'
              )); ?>
            </div>
            <div class="tab-pane active" id="ptab1">

             <?php echo $this->Form->input('name', array(
              'label' => 'Nome do produto'
              )); ?>
             <?php echo $this->Form->input('description', array(
              'label' => 'Descrição', 'type' => 'textarea'
              )); ?>

            </div><!-- tab-pane 1 -->

            <div class="tab-pane" id="ptab2">
             <fieldset>Carregue uma imagem</fieldset>
             <?php 
             echo $this->Form->input('Image', array('label' => '','type' => 'file'));
             ?>

           </div><!-- tab-pane 2 -->

           <div class="tab-pane" id="ptab3">
             <?php echo $this->Form->input('price', array(
              'label' => 'Custo', 'type' => 'number', 'name' => 'currency', 'min' => '0', 'max' => '9999', 'step' => '0.01', 'size' => '4', 
              )); ?>
             <?php echo $this->Form->input('select', array(
              'label' => array(
               'text' => 'Escolha uma das opções'
               ),
              'empty' => 'Escolhia uma categoria da seguinte lista',
              'options' => array(
               'Ofertas' => array(
                1 => 'Viagens',
                2 => 'Restaurantes',
                3 => 'Descontos'
                ),
               'Produtos' => array(
                3 => 'Shopping',
                4 => 'Usados'
                )
               ),
               )); ?>
               <?php echo $this->Form->end(); ?>
             </div><!-- tab-pane 3 -->

           </div><!-- tab-content -->

           <ul class="pager wizard">
            <li class="previous disabled"><a href="javascript:void(0)">Previous</a></li>
            <li class="next"><a href="javascript:void(0)">Next</a></li>
          </ul>

        </div><!-- #basicWizard -->

      </div><!-- panel-body -->
    </div><!-- panel -->
  </div>