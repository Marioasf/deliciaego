<div class="wishlists form">
<?php echo $this->Form->create('Wishlist'); ?>
	<fieldset>
		<legend><?php echo __('Add Wishlist'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('user');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Wishlists'), array('action' => 'index')); ?></li>
	</ul>
</div>
