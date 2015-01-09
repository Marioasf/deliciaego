<div class="chats view">
<h2><?php echo __('Chat'); ?></h2>
	<dl>
		<dt><?php echo __('Receptor'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['user1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destinatário'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['user2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($chat['Chat']['datemade']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $chat['Chat']['id']), array(), __('Are you sure you want to delete # %s?', $chat['Chat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar todas as mensagens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Escrever nova mensagem'), array('action' => 'add')); ?> </li>
	</ul>
</div>
