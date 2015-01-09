<div class="chats index">
	<h2><?php echo __('Chats'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user1'); ?></th>
			<th><?php echo $this->Paginator->sort('user2'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('datemade'); ?></th>
			<th><?php echo $this->Paginator->sort('checked'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($chats as $chat): ?>
	<tr>
		<td><?php echo h($chat['Chat']['id']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['user1']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['user2']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['text']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['datemade']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['checked']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $chat['Chat']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $chat['Chat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $chat['Chat']['id']), array(), __('Are you sure you want to delete # %s?', $chat['Chat']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Chat'), array('action' => 'add')); ?></li>
	</ul>
</div>
