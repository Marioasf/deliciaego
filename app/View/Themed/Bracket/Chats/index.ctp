<div class="chats index">
	<h2><?php echo __('Lista de conversações'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Receptor'); ?></th>
			<th><?php echo $this->Paginator->sort('Destinatário'); ?></th>
			<th><?php echo $this->Paginator->sort('Mensagem'); ?></th>
			<th><?php echo $this->Paginator->sort('Data'); ?></th>
			<th class="actions"><?php echo __('Acções'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($chats as $chat): ?>
	<tr>
		<td><?php echo h($chat['Chat']['user1']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['user2']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['text']); ?>&nbsp;</td>
		<td><?php echo h($chat['Chat']['datemade']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver detalhes'), array('action' => 'view', $chat['Chat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $chat['Chat']['id']), array(), __('De certeza que quer apagar?')); ?>
			<?php
			if($chat['Chat']['user1'] == $_SESSION["Auth"]["User"]["username"] )
				echo $this->Html->link(__('Responder'), array('action' => '/add/', $chat['Chat']['user2']));
			elseif ($chat['Chat']['user2'] == $_SESSION["Auth"]["User"]["username"]) {
			 	echo $this->Html->link(__('Responder'), array('action' => '/add/', $chat['Chat']['user1']));
			 } ?>

			 <?php 
			 if($chat['Chat']['checked']==0){
			 	echo $this->Form->create('Chat');	
			 	echo $this->Form->input('id', array('value' => $chat['Chat']['id'], 'type' => 'hidden'));
			 	echo $this->Form->input('checked', array('value' => '1', 'type' => 'hidden'));
			    echo $this->Form->end(__('Marcar como lida'), array(), __('De certeza que quer marcar esta mensagem como lida?'));
			}
			 ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, a mostrar {:current} registos de um total de {:count}, a começar no registo {:start}, e a acabar em {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('antes'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('depois') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acções'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Escrever nova mensagem'), array('action' => 'add')); ?></li>
	</ul>
</div>
