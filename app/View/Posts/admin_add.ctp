<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Post'); ?></legend>
	<?php
		echo $this->Form->input('user');
		echo $this->Form->input('datemade');
		echo $this->Form->input('content');
		echo $this->Form->input('picture');
		echo $this->Form->input('video');
		echo $this->Form->input('location');
		echo $this->Form->input('tagged');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>
