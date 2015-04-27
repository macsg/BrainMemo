<div class="deckTags view">
<h2><?php echo __('Deck Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deckTag['DeckTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deck'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deckTag['Deck']['name'], array('controller' => 'decks', 'action' => 'view', $deckTag['Deck']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deckTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $deckTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deck Tag'), array('action' => 'edit', $deckTag['DeckTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deck Tag'), array('action' => 'delete', $deckTag['DeckTag']['id']), array(), __('Are you sure you want to delete # %s?', $deckTag['DeckTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deck Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
