<div style="margin:150px;"></div>

<div class="admin">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Administrator Panel</h1>
            <hr class="seperate">
            <?php
            echo $this->Html->link('',array('controller' => 'admins', 'action' => 'manageuser'),array('class' => 'admin-userbutton'));
            echo '<span> </span>';
            echo $this->Html->link('',array('controller' => 'admins', 'action' => 'managecategory'),array('class' => 'admin-categorybutton'));
            echo '<span> </span>';
            echo $this->Html->link('',array('controller' => 'admins', 'action' => 'managelesson'),array('class' => 'admin-lessonbutton'));
            ?>
        </div>
    </div>
</div>