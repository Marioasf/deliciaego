<div class="activities view">
<h2><?php echo __('Activity'); ?></h2>
	<dl>
		
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['type']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Utilizador'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['username']); ?>
			&nbsp;

		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['datemade']); ?>
			&nbsp;
		</dd>

	</dl>
</div>
