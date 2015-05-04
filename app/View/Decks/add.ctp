
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
							<br>
							<h3><?php echo __('Adding Cards'); ?></h3>
							<br>
							<!-- card form -->
							<div class="row">
								<div class="col-sm-6 col-md-6 col-md-offset-4">
									<div id="form_sample">

										<input class="hidden" id="hdNumFormCard" type="text" value="4">
										<div id="divCard1">
											<h2>Card #1</h2>
											<img id="img1" src="/brainmemo/img/200x200.png">
											<input onchange="readURL(this,'img1')" type="file" id="fileCard1">
											<label>Your Anwser</label><input type="text" value="" id="anwser1">	
										</div>	
										<hr>
										<div id="divCard2">
											<h2>Card #2</h2>
											<img id="img2" src="/brainmemo/img/200x200.png">
											<input onchange="readURL(this,'img2')" type="file" id="fileCard2">
											<label>Your Anwser</label><input type="text" value="" id="anwser2">	
										</div>
										<div id="divCard3">
											<h2>Card #3</h2>
											<img id="img3" src="/brainmemo/img/200x200.png">
										    <input onchange="readURL(this,'img3')" type="file" id="fileCard3">
											<label>Your Anwser</label><input type="text" value="" id="anwser3">	
										</div>
										<div id="divCard4">
											<h2>Card #4</h2>
											<img id="img4" src="/brainmemo/img/200x200.png">
							
											<input onchange="readURL(this,'img4')" type="file" id="fileCard4">
											<label>Your Anwser</label><input type="text" value="" id="anwser4">	
										</div>																						
										<hr>
									</div>
									
									<div class="col-sm-6 col-md-6"></div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-4 col-md-4" ></div>
									<div class="col-sm-4 col-md-4">
										<?php echo $this->Form->button('Add more Card',[
										'label' => false,
										'class' => 'btn btn default',
										'type' => 'button',
										'onclick' => 'addCardForm()']); ?>

										<br>

										<?php echo $this->Form->end('Submit',[
										'label' => false,
										'class' => 'btn btn default']); ?>
									</div>
								<div class="col-sm-4 col-md-4"></div>

							</div>
							<br>







<script  type="text/javascript">

function addCardForm(){
	var numForm = $("#hdNumFormCard").val();
	numForm = (numForm*1) + 1;
	$("#hdNumFormCard").val(numForm);
	var stringHTML = '<div id="divCard"'+ numForm +'>';
	stringHTML += '<h2>Card #'+ numForm +'</h2>';
	stringHTML += '<img id="img'+ numForm +'" src="/brainmemo/img/200x200.png">';

	stringHTML += "<input onchange=readURL(this,'img" + numForm +"') type='file' id='fileCard"+ numForm +"'>";
	stringHTML += '<label>Your Anwser</label><input type="text" value="" id="anwser'+ numForm +'">';
	stringHTML += '</div>';
	stringHTML += '<hr>';
$("#form_sample").append(stringHTML);


}

function test(){


}
function readURL(input,idimg) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#'+idimg).attr('src', e.target.result);
                    $('#'+idimg).css("width","200px").css("heigh","200px");
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp").change(function(){
            readURL(this);
        });

</script>