<h2><?php __('Login'); ?></h2>
<?php
echo $this->Html->css('bootstrap/bootstrap.min.css');
echo $this->Html->css('font-awesome/font-awesome.min.css');
echo $this->Html->script('jquery-2.1.3.min');
echo $this->Html->css('css-login.css');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
echo $this->Session->flash('auth');
?>
<div id="loginform">
    <div id="facebook"><i class="fa fa-facebook"></i><div id="connect">Connect with Facebook</div></div>
    <div id="mainlogin">
        <div id="or">or</div>
        <h1>Log in with awesome new thing</h1>
        <form action="#">
            <input type="text" placeholder="username or email" value="" required>
            <input type="password" placeholder="password" value="" required>
            <button type="submit"><i class="fa fa-arrow-right"></i></button>
        </form>
        <div id="note"><a href="#">Forgot your password?</a></div>
    </div>
</div>