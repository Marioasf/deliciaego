<div class="friends form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add Friend'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('country');
		echo $this->Form->input('userlevel');
		echo $this->Form->input('about');
		echo $this->Form->input('title');
		echo $this->Form->input('company');
		echo $this->Form->input('phone');
		echo $this->Form->input('picture');
		echo $this->Form->input('website');
		echo $this->Form->input('facebook');
		echo $this->Form->input('google');
		echo $this->Form->input('twitter');
		echo $this->Form->input('ip');
		echo $this->Form->input('signup');
		echo $this->Form->input('lastlogin');
		echo $this->Form->input('notescheck');
		echo $this->Form->input('activated');
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
