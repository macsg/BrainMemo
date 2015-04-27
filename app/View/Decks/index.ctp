<div class="decks index">
	<h2><?php echo __('Decks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($decks as $deck): ?>
	<tr>
		<td><?php echo h($deck['Deck']['id']); ?>&nbsp;</td>
		<td><?php echo h($deck['Deck']['name']); ?>&nbsp;</td>
		<td><?php echo h($deck['Deck']['description']); ?>&nbsp;</td>
		<td><?php echo h($deck['Deck']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deck['User']['id'], array('controller' => 'users', 'action' => 'view', $deck['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($deck['Category']['name'], array('controller' => 'categories', 'action' => 'view', $deck['Category']['id'])); ?>
		</td>
		<td><?php echo h($deck['Deck']['created']); ?>&nbsp;</td>
		<td><?php echo h($deck['Deck']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deck['Deck']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deck['Deck']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deck['Deck']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $deck['Deck']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Deck'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deck Tags'), array('controller' => 'deck_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck Tag'), array('controller' => 'deck_tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scores'), array('controller' => 'scores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Score'), array('controller' => 'scores', 'action' => 'add')); ?> </li>
	</ul>
</div>
