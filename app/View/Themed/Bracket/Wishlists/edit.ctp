<div class="wishlists form">
<?php echo $this->Form->create('Wishlist'); ?>
	<fieldset>
		<legend><?php echo __('Edit Wishlist'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('user');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Wishlist.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Wishlist.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('action' => 'index')); ?></li>
	</ul>
</div>
