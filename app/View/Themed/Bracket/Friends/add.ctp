<?php echo $this->Form->create('Friend'); ?>
	
	<?php
		echo $this->Form->input('user1',array('value' => 'mario', 'type' => 'hidden'));
		echo $this->Form->input('user2',array('value' => 'maria_albertina', 'type' => 'hidden'));
		echo $this->Form->input('datemade',array('value' => '2015-11-18 10:50:50', 'type' => 'hidden'));
		echo $this->Form->input('accepted',array('value' => 0, 'type' => 'hidden'));
	?>
	
<?php echo $this->Form->end(__('Adicionar amigo')); ?>