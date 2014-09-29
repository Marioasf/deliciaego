<div class="friends index">
	<h2><?php echo __('Friends'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user1'); ?></th>
			<th><?php echo $this->Paginator->sort('user2'); ?></th>
			<th><?php echo $this->Paginator->sort('datemade'); ?></th>
			<th><?php echo $this->Paginator->sort('accepted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($friends as $friend): ?>
	<tr>
		<td><?php echo h($friend['Friend']['id']); ?>&nbsp;</td>
		<td><?php echo h($friend['Friend']['user1']); ?>&nbsp;</td>
		<td><?php echo h($friend['Friend']['user2']); ?>&nbsp;</td>
		<td><?php echo h($friend['Friend']['datemade']); ?>&nbsp;</td>
		<td><?php echo h($friend['Friend']['accepted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $friend['Friend']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $friend['Friend']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $friend['Friend']['id']), array(), __('Are you sure you want to delete # %s?', $friend['Friend']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Friend'), array('action' => 'add')); ?></li>
	</ul>
</div>
