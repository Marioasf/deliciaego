<div class="chats form">
<?php echo $this->Form->create('Chat'); ?>
	<fieldset>
		<legend><?php echo __('Envie aqui a sua mensagem'); ?></legend>
	<?php
		echo $this->Form->input('user1', array('value' => $_SESSION["Auth"]["User"]["username"], 'type' => 'hidden'));
		if(!empty($this->params["pass"]))
			echo $this->Form->input('user2', array('label' => 'Utilizador', 'placeholder' => 'Nome do utilizador para o qual irá ser enviada a mensagem', 'type' => 'hidden'));
		else
			echo $this->Form->input('user2', array('label' => 'Utilizador', 'placeholder' => 'Nome do utilizador para o qual irá ser enviada a mensagem'));
		$dt = date("Y-m-d h:i:s");
		echo $this->Form->input('datemade', array('value' => $dt, 'type' => 'hidden'));
		echo $this->Form->input('text', array('label' => 'Texto'));
		echo $this->Form->input('checked', array('value' => '0', 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->submit('Enviar'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Conversas'), array('action' => 'index')); ?></li>
	</ul>
</div>
