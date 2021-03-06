<div class="groups view">
<h2><?php echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), array(), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($group['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Userlevel'); ?></th>
		<th><?php echo __('About'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Company'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Facebook'); ?></th>
		<th><?php echo __('Google'); ?></th>
		<th><?php echo __('Twitter'); ?></th>
		<th><?php echo __('Ip'); ?></th>
		<th><?php echo __('Signup'); ?></th>
		<th><?php echo __('Lastlogin'); ?></th>
		<th><?php echo __('Activated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($group['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['country']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['userlevel']; ?></td>
			<td><?php echo $user['about']; ?></td>
			<td><?php echo $user['title']; ?></td>
			<td><?php echo $user['company']; ?></td>
			<td><?php echo $user['phone']; ?></td>
			<td><?php echo $user['picture']; ?></td>
			<td><?php echo $user['website']; ?></td>
			<td><?php echo $user['facebook']; ?></td>
			<td><?php echo $user['google']; ?></td>
			<td><?php echo $user['twitter']; ?></td>
			<td><?php echo $user['ip']; ?></td>
			<td><?php echo $user['signup']; ?></td>
			<td><?php echo $user['lastlogin']; ?></td>
			<td><?php echo $user['activated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
