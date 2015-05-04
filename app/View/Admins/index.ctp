<div style="margin:150px;"></div>

<div class="admin">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Administrator Control</h1>
            <hr class="seperate">
            <?php
      // echo $this->Html->image("adminbutton/usermanage-hold.png", array(
      //     "alt" => "UserManage",
      //     'url' => array('controller' => 'admins', 'action' => 'usermanage'),array('class' => 'admin-button')
      // ));


      // echo $this->Html->image("adminbutton/lessonmanage-hold.png", array(
      //     "alt" => "LessonManage",
      //     'url' => array('controller' => 'admins', 'action' => 'usermanage')
      // ));
      // echo '<span> </span>';
      // echo $this->Html->image("adminbutton/usermanage-hold.png", array(
      //     "alt" => "SomethingManage",
      //     'url' => array('controller' => 'admins', 'action' => 'usermanage')
      // ));
      echo $this->Html->link('',array('controller' => 'admins', 'action' => 'usermanage'),array('class' => 'admin-userbutton'));
      echo '<span> </span>';
      echo $this->Html->link('',array('controller' => 'admins', 'action' => 'lessonmanage'),array('class' => 'admin-lessonbutton'));
            ?>
        </div>
    </div>
</div>