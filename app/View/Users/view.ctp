<div style="margin:150px"></div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading" style="background-color: #2c3e50">
                    <h3 class="panel-title"><?php echo h($user['User']['username'])?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <?php echo $this->Html->image(h($user['User']['img']), array('style' => 'width:100px')); ?>
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Username:</td>
                                    <td><?php echo h($user['User']['username'])?></td>
                                </tr>
                                <tr>
                                    <td>Firstname:</td>
                                    <td><?php echo h($user['User']['firstname'])?></td>
                                </tr>
                                <tr>
                                    <td>Lastname:</td>
                                    <td><?php echo h($user['User']['lastname'])?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo h($user['User']['email'])?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span class="pull-left"></span>
                    <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', array(
                        'controller' => 'users',
                        'action' => 'edit',
                        $this->Session->read('Auth.User.id')), array(
                        'data-original-title' => 'Edit this user',
                        'data-toggle' => 'tooltip',
                        'type' => 'button',
                        'class' => 'btn btn-sm btn-warning',
                        'escape' => false
                    ));?>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin:20px;"></div>
