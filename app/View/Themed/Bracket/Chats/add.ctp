<div class="chats form">
<?php echo $this->Form->create('Chat'); ?>
	<fieldset>
		<legend><?php echo __('Add Chat'); ?></legend>
	<?php
		echo $this->Form->input('user1', array('value' => $_SESSION["Auth"]["User"]["username"], 'type' => 'hidden'));
		echo $this->Form->input('user2', array('label' => 'Utilizador', 'placeholder' => 'Nome do utilizador para o qual irá ser enviada a mensagem'));
		$dt = date("Y-m-d h:i:s");
		echo $this->Form->input('datemade', array('value' => $dt, 'type' => 'hidden'));
		echo $this->Form->input('text');
		echo $this->Form->input('checked', array('value' => 0, 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Chats'), array('action' => 'index')); ?></li>
	</ul>
</div>
