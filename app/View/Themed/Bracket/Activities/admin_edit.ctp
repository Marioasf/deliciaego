<div class="activities form">
<?php echo $this->Form->create('Activity'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Activity'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('activity_id');
		echo $this->Form->input('username');
		echo $this->Form->input('friend_username');
		echo $this->Form->input('datemade');
		echo $this->Form->input('checked');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Activity.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Activity.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?></li>
	</ul>
</div>
