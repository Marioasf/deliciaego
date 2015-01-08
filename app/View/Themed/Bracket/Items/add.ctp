

    <?php echo $this->Session->flash(); ?>

      <div class="row">
        <?php echo $this->Form->create('Item', array(
          'type' => 'file',
          'inputDefaults' => array(
            'div' => 'form-group',
            'label' => array(
              'class' => 'col col-md-3 control-label'
              ),
            'wrapInput' => 'col col-md-9',
            'class' => 'form-control'
            ),
          'class' => 'well form-horizontal',
          )); ?>
          <div class="panel-heading">

            <h4 class="panel-title">Dados de Conta</h4>
            <p>Utilize esta página para adicionar os seus produtos.</p>
          </div>
          <div class="form-group">
            <div class="col-md-6">

              
              <div class="panel-body">
   
                <?php echo $this->Form->input('name', array(
                  'label' => 'Nome'
                  )); ?>
                <?php echo $this->Form->input('description', array(
                  'label' => 'Descrição curta'
                  )); ?>

                <?php echo $this->Form->input('picture', array(
                  'label' => 'Link da imagem'
                  )); ?>


                <?php echo $this->Form->input('user', array(
                  'value' => $_SESSION['Auth']['User']['username'],
                  'type' => 'hidden'
                  )); ?>



                </div>

    
            </div>


         <div class="col-md-6">

           
           <div class="panel-body">
         

                <?php echo $this->Form->input('price', array(
               'label' => 'Preço',
               'type' => 'number',
               'min' => '0'
               )); ?>

                <?php echo $this->Form->input('category', array(
               'label' => 'Tipo'
               )); ?>

                <?php echo $this->Form->input('alias', array(
               'label' => 'Nome curto',
               'placeholder' => 'Identificador do produto'
               )); ?>

             </div>

              </div><!-- col-md-6 -->
          </div>
        <div class="col-md-offset-3">
          <?php echo $this->Form->submit('Guardar', array(
            'div' => false,
            'class' => 'btn btn-primary'
          )); ?>
          <?php echo $this->Form->end(); ?>
          <!--<button type="button" class="btn btn-default">Cancelar</button>-->
        </div>

  </div><!-- row -->