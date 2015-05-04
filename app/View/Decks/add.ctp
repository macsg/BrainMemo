

<div class="decks form" style="margin-top:3em;text-align:center">
	<?php echo $this->Form->create('Deck',array(
		'enctype' => 'multipart/form-data',

		'url' => [
		'controller' => 'decks',
		'action' => 'add'
		]

		)); ?>

		<br><br><br>
		<h3><?php echo __('Create Lessons'); ?></h3>
		<br>
		<div class="row">

			<div class="col-sm-6 col-md-6 col-md-offset-3 column">
				<div class="input-group">
					<span class="input-group-addon">Lessonname</span>
					<?php echo $this->Form->input('deckname', [
						'label' => false,
						'div' => false,
						'type' => 'text',
						'required',
						'placeholder' => 'Lessonname',
						'class' => 'form-control',
						'aria-describedby' => 'basic-addon1'
						]);
						?>
					</div>
				</div>
				<div class="col-sm-6"></div>
			</div>

			<br>

			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 column" >
					<div class="input-group">
						<span class="input-group-addon">Description</span>

						<?php echo $this->Form->input('description', [
							'label' => false,
							'div' => false,
							'type' => 'textarea',
							'placeholder' => 'Description',
							'class' => 'form-control',
							'row' => '2',
							'aria-describedby' => 'basic-addon1'

							]);
							?>
						</div>

					</div>
					<div class="col-sm-6"></div>

				</div>

				<br>


				<div class="row">
					<div class="col-sm-6 col-md-6 col-md-offset-3 column" >
						<div class="input-group">
							<span class="input-group-addon">Category</span>
							<?php

							$options = array();
							foreach ($categorys as $categorys):
				$options[$categorys['Category']['id']] = $categorys['Category']['name'];
							endforeach;?>

									<?php echo $this->Form->input('select',[
										'label' => false,
										'options' => $options,
										'class' => 'form-control',
										'aria-describedby' => 'basic-addon1'
										]); ?>



								</div>
								<div class="col-sm-6"></div>

							</div>





							<br><br>
							<?php echo $this->Form->end(__('Submit')); ?>








						</div>




						<script>
						function cardform(){

							alert('aaaaaa');
						}

						</script>

		<!-- <div class="actions">
			<h3><?php //echo __('Actions'); ?></h3>
			<ul>

				<li><?php //echo $this->Html->link(__('List Decks'), array('action' => 'index')); ?></li>
				<li><?php //echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php //echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
				<li><?php //echo $this->Html->link(__('List Cards'), array('controller' => 'cards', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(__('New Card'), array('controller' => 'cards', 'action' => 'add')); ?> </li>
				<li><?php //echo $this->Html->link(__('List Deck Tags'), array('controller' => 'deck_tags', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(__('New Deck Tag'), array('controller' => 'deck_tags', 'action' => 'add')); ?> </li>
				<li><?php //echo $this->Html->link(__('List Scores'), array('controller' => 'scores', 'action' => 'index')); ?> </li>
				<li><?php //echo $this->Html->link(__('New Score'), array('controller' => 'scores', 'action' => 'add')); ?> </li>
			</ul>
		</div> -->
