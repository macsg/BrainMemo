<div style="margin:150px;"></div>

<div class="admin">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Administrator Control</h2>
            <hr class="seperate">
        </div>
    </div>
</div>
		<?php
			echo $this->Html->image("animal/bear.png", array(
   				"alt" => "Brownies",
    			'url' => array('controller' => 'admins', 'action' => 'usermanage')
			));
			echo $this->Html->image("animal/tiger.png", array(
   				"alt" => "Brownies",
    			'url' => array('controller' => 'admins', 'action' => 'usermanage')
			));
			echo $this->Html->image("animal/lion.png", array(
   				"alt" => "Brownies",
    			'url' => array('controller' => 'admins', 'action' => 'usermanage')
			));
		?>