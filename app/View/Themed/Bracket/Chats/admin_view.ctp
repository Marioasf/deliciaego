<div class="chats view">
<h2><?php echo __('Chat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User1'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['user1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User2'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['user2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datemade'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['datemade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checked'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['checked']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chat'), array('action' => 'edit', $chat['Chat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Chat'), array('action' => 'delete', $chat['Chat']['id']), array(), __('Are you sure you want to delete # %s?', $chat['Chat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chat'), array('action' => 'add')); ?> </li>
	</ul>
</div>
