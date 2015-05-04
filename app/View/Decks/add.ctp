
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


						<?php echo $this->Form->create('Cards',array(
							'enctype' => 'multipart/form-data',

							'url' => [
							'controller' => 'cards',
							'action' => 'add'
							]

							)); ?>
							<br><br>

							<div class="row">
								<div class="col-sm-6 col-md-6 col-md-offset-3 column" >

									<?php echo $this->Form->button('add card',[
										'label' => false,
										'class' => 'btn btn default',
										'type' => 'button',
										'onclick' => 'cardform()',
										'id' => 'addbutton'

										]); ?>

									</div>
									<div class="col-sm-6"></div>

								</div>

								<!-- card form -->
								<div class="row">
									<div class="col-sm-6 col-md-6 col-md-offset-5">
										<div id="main">
											<div id="form_sample"></div>
										</div>
										<div class="col-sm-6 col-md-6"></div>

									</div>



									<div class="row">
										<div class="col-sm-6 col-md-6 col-md-offset-3 column" >
											<?php echo $this->Form->end('Submit',[
												'label' => false,
												'class' => 'btn btn default']); ?>


											</div>
											<div class="col-sm-6"></div>

										</div>


<script>
function cardform(){
alert('Add card number....');

// Fetching HTML Elements in Variables by ID.
var x = document.getElementById("form_sample");
var createform = document.createElement('form'); // Create New Element Form
createform.setAttribute("action", ""); // Setting Action Attribute on Form
createform.setAttribute("method", "post"); // Setting Method Attribute on Form
x.appendChild(createform);

var heading = document.createElement('h2'); // Heading of Form
heading.innerHTML = "Adding Cards ";
createform.appendChild(heading);

var line = document.createElement('hr'); // Giving Horizontal Row After Heading
createform.appendChild(line);

var linebreak = document.createElement('br');
createform.appendChild(linebreak);

var namelabel = document.createElement('label'); // Create Label for Name Field
namelabel.innerHTML = "Your Image : "; // Set Field Labels
createform.appendChild(namelabel);

var inputelement = document.createElement('input'); // Create Input Field for Name
inputelement.setAttribute("type", "file");
inputelement.setAttribute("name", "dname");
createform.appendChild(inputelement);

var linebreak = document.createElement('br');
createform.appendChild(linebreak);

var emaillabel = document.createElement('label'); // Create Label for E-mail Field
emaillabel.innerHTML = "Your Answer : ";
createform.appendChild(emaillabel);

var emailelement = document.createElement('input'); // Create Input Field for E-mail
emailelement.setAttribute("type", "text");
emailelement.setAttribute("name", "demail");
createform.appendChild(emailelement);

var emailbreak = document.createElement('br');
createform.appendChild(emailbreak);



var submitelement = document.createElement('input'); // Append Submit Button
submitelement.setAttribute("type", "button");
submitelement.setAttribute("name", "dsubmit");
submitelement.setAttribute("value", "Add more Card");
submitelement.setAttribute("onclick","cardform()");
createform.appendChild(submitelement);

var disable = document.getElementById("addbutton");
disable.setVisible(false);
}
</script>