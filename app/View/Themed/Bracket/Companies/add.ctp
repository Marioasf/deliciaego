

		<?php echo $this->Session->flash(); ?>
		<?php //var_dump($this->request->data['User']['picture']); ?>
				<div class="pageheader">
				      <h2><i class="fa fa-folder-open"></i> Está associado a uma empresa? <span>Adicione aqui a sua empresa</span></h2>
				</div>
				<?php echo $this->Form->create('Company', array(
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

						<h4 class="panel-title">Dados Básicos</h4>
						<p>Insira os dados básicos sobre a sua empresa</p>
					</div>
					</br>
					
					<div class="form-group">
					<div class="col-md-6">

						
						<?php echo $this->Form->input('name', array(
						'label' => 'Nome',
						'placeholder' => 'Nome da sua empresa'
						)); ?>

							
						<?php echo $this->Form->input('category', array(
						'label' => 'Categoria',
						'placeholder' => 'Área empresarial'
						)); ?>

						<?php echo $this->Form->input('ifn', array(
						      'label' => 'Número de Identificação Fiscal',
						      'placeholder' => 'NIF da empresa'
						));	?>


							<?php echo $this->Form->input('country', array(
								'label' => 'Localização',
								'placeholder' => 'Localização da empresa'
								));	?>
								
	<?php echo $this->Form->input('address', array(
	'placeholder' => 'Morada da empresa'
	)); ?>

	
	


	</div><!-- col-md-6 -->

	<div class="col-md-6">
		<div class="panel-body">
			<?php //echo $this->Form->input('picture', array('type' => 'file', 'label' => 'Imagem')); ?>

			<?php echo $this->Form->input('phone', array(
				  'label' => 'Telefone',
			      'placeholder' => 'Número de apoio ao cliente'
			)); ?>

			<?php echo $this->Form->input('email', array(
				  'label' => 'Email',
			      'placeholder' => 'Correio eletrónico'
			)); ?>

			<?php echo $this->Form->input('about', array(
			'label' => 'Descrição',
			'placeholder' => 'Breve descrição sobre a empresa e os produtos disponíveis'
			)); ?>
			
			<?php echo $this->Form->input('picture', array(
			'label' => 'Imagem',
			'placeholder' => 'Link da imagem'
			)); ?>-
			
			<?php echo $this->Form->input('user',array('value' => $_SESSION["Auth"]["User"]["username"], 'type' => 'hidden')); ?>
			
			
			</div><!-- panel-body -->

		</div> <!-- col-md-6 -->
		</div> <!-- form-group-->
				<div class="col-md-offset-3">
					<?php echo $this->Form->submit('Guardar', array(
						'div' => false,
						'class' => 'btn btn-primary'
					)); ?>
					<!--<button type="button" class="btn btn-default">Cancelar</button>-->
				</div>



	<?php echo $this->Html->script('jquery.maskedinput.min'); ?>
	<script>

		jQuery("#phone").mask("(999) 9999999");
	</script>