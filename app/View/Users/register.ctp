<div style="margin-top: 150px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Register</div>
            <div style="float:right; font-size: 90%; position: relative; top:-20px">
                <?php echo $this->Html->link('Back to login', array('controller' => 'users', 'action' => 'login'), array('style' => 'color:white;'));?></div>            
        </div>
        <div class="panel-body" >
            <?php
            echo $this->Form->create('User', array(
                'class' => 'form-horizontal'
            ));
            ?>
                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="username" class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Confirm Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="confirmpassword" placeholder="Password Again">
                    </div>
                </div>  

                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">E-mail</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                    </div>
                </div>
                
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-9">
                        <?php echo $this->Form->button('Sign Up', array(
                            'class' => 'btn btn-info',
                            'type' => 'submit'));
                        ?>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>