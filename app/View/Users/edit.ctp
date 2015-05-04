<div style="margin:150px"></div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading" style="background-color: #2c3e50">
                    <h3 class="panel-title">Edit Profile</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                            <?php $this->Form->create('User', array(
                                'class' => 'form-horizontal'
                            ));?>
                                <div class="col-md-12">
                                    <?php
                                    echo $this->Form->input('username', array(
                                        'class' => 'form-control',));
                                    echo $this->Form->input('password', array(
                                        'class' => 'form-control'
                                    ));
                                    echo $this->Form->input('firstname', array(
                                        'class' => 'form-control'
                                    ));
                                    echo $this->Form->input('lastname', array(
                                        'class' => 'form-control'
                                    ));
                                    echo $this->Form->input('email', array(
                                        'class' => 'form-control'
                                    ));
                                    echo $this->Form->submit(__('OK'));
                                    echo $this->Form->button('OK', array(
                                        'class' => 'btn btn-success',
                                        'type' => 'submit',
                                        'style' => 'margin-top:20px'));
                                    echo $this->Html->link('Cancel', array(
                                        'controller' => 'users',
                                        'action' => 'view',
                                        $this->Session->read('Auth.User.id')),array(
                                        'class' => 'btn btn-success',
                                        'style' => 'margin-top:20px; margin-left: 20px;'
                                        ));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#UserEditForm").validate({
        rules: {
            username: {
                required: true,
                minlength: 4

            },
            password: {
                required: true,
                minlength: 6
            },
            confirmpassword: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            },
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            username: {
                required: "Please enter a username",
                minlength: "Your username must contain of at least 4 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: 'Your password must be at least 6 characters long'
            },
            confirmpassword: {
                required: "Please provide a password",
                minlength: 'Your password must be at least 6 characters long',
                equalTo: 'Please enter the same password as above'
            },
            firstname: 'Please enter a firstname',
            lastname: 'Please enter a lastname',
            email: "Please enter an email"
        }
    });
</script>



