<div class="activities index">
	<h2><?php echo __('Lista de notificações'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('Utilizador'); ?></th>
			<th><?php echo $this->Paginator->sort('Data'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($activities as $activity): ?>
	<tr>
		<td><?php echo h($activity['Activity']['type']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['username']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['datemade']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver detalhes'), array('action' => 'view', $activity['Activity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $activity['Activity']['id']), array(), __('De certeza que deseja apagar?')); ?>
			 <?php 
			 if($activity['Activity']['checked']==0){
			 	echo $this->Form->create('Activity');	
			 	echo $this->Form->input('id', array('value' => $activity['Activity']['id'], 'type' => 'hidden'));
			 	echo $this->Form->input('checked', array('value' => '1', 'type' => 'hidden'));
			    echo $this->Form->end(__('Marcar como lida'), array(), __('De certeza que quer marcar esta actividade como lida?'));
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