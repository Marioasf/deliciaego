<div class="comments form">
<?php echo $this->Form->create('Comment'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Comment'); ?></legend>
	<?php
		echo $this->Form->input('post');
		echo $this->Form->input('product');
		echo $this->Form->input('user');
		echo $this->Form->input('datemade');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?></li>
	</ul>
</div>
