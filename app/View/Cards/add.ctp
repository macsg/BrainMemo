<div class="cards form">
<?php echo $this->Form->create('Card'); ?>
	<fieldset>
		<legend><?php echo __('Add Card'); ?></legend>
	<?php
		echo $this->Form->input('front');
		echo $this->Form->input('back');
		echo $this->Form->input('deck_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
	</ul>
</div>
