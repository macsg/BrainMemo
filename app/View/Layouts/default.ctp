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
        echo $this->Html->css('font-awesome/font-awesome.min.css');
        echo $this->Html->css('style.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');

	?>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>
<body id="page-top" class="index">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php 
                    echo $this->Html->link('Brain Memo', array(
                    'controller' => 'home'
                    ), array(
                    'class' => 'navbar-brand'
                    ));
                ?>
                
                <!-- <a class="navbar-brand" href="index.html">Brain Memo</a> -->
            </div>

            <!-- normal display -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <li class="page-scroll">
                        <?php
                        echo $this->Html->link('Lessons', array('controller' => 'lessons'));
                        ?>
                        <!-- <a href="lessons.html">Lessons</a> -->
                    </li>
                    <li class="page-scroll">
                        <?php echo $this->Html->link('Create', array('controller' => 'create'));?>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">USERS <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Your Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Action 1</a></li>
                            <li><a href="#">Action 2</a></li>
                            <li><a href="#">Action 3</a></li>
                            <li class="divider"></li>
                            <li><?php echo $this->Html->link('LOGOUT', array(
                                    'controller' => 'users',
                                    'action' => 'logout'));?></li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
	<div id="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>About Brain Memo</h3>
                        <p><span style="color:red">Brain Memo</span> makes learning </br>
                            languages and vocab is fun.</br>
                            Let's try it for <span style="color:red">FREE!</span></p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Social Network</h3>

                        <ul class="list-inline">
                            <li>
                                <a href="http://www.facebook.com" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/?lang=th" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Help</h3>
                        <p><a href="#">FAQ</a></p>
                        <p><a href="#">Support</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Brain Memo 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php
    echo $this->Html->script('jquery-2.1.3.min.js');
    echo $this->Html->script('bootstrap.min.js');
    echo $this->Html->script('jquery.easing.min');
    echo $this->Html->script('classie.js');
    echo $this->Html->script('cbpAnimatedHeader.js');
    echo $this->Html->script('brainmemo.js');
    echo $this->Html->script('file-upload.js');
    echo $this->fetch('script');
    ?>
</body>
</html>
