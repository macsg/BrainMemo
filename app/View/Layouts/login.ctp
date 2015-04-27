<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon', $this->Html->url('/favicon.ico'));
    echo $this->Html->css('bootstrap/bootstrap.min.css');
    echo $this->Html->css('login.css');
    echo $this->Html->script('jquery-2.1.3.min.js');
    echo $this->Html->script('bootstrap.min.js');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div id="container">
    <div id="content">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
</div>
</body>
</html>
