<div class="friends form">
<?php echo $this->Form->create('Friend'); ?>
	<fieldset>
		<legend><?php echo __('Add Friend'); ?></legend>
	<?php
		echo $this->Form->input('user1');
		echo $this->Form->input('user2');
		echo $this->Form->input('datemade');
		echo $this->Form->input('accepted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Friends'), array('action' => 'index')); ?></li>
	</ul>
</div>
