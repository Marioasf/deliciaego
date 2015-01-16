<div class="activities view">
<h2><?php echo __('Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Id'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['activity_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friend Username'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['friend_username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datemade'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['datemade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checked'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['checked']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activity'), array('action' => 'edit', $activity['Activity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activity'), array('action' => 'delete', $activity['Activity']['id']), array(), __('Are you sure you want to delete # %s?', $activity['Activity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('action' => 'add')); ?> </li>
	</ul>
</div>
