<div class="deckTags form">
<?php echo $this->Form->create('DeckTag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deck Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('deck_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DeckTag.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DeckTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Deck Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
