<div class="userBadges view">
<h2><?php echo __('User Badge'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userBadge['UserBadge']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userBadge['User']['id'], array('controller' => 'users', 'action' => 'view', $userBadge['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Badge'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userBadge['Badge']['name'], array('controller' => 'badges', 'action' => 'view', $userBadge['Badge']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userBadge['UserBadge']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Badge'), array('action' => 'edit', $userBadge['UserBadge']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Badge'), array('action' => 'delete', $userBadge['UserBadge']['id']), array(), __('Are you sure you want to delete # %s?', $userBadge['UserBadge']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Badges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Badge'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Badges'), array('controller' => 'badges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Badge'), array('controller' => 'badges', 'action' => 'add')); ?> </li>
	</ul>
</div>
