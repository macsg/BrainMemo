<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo $this->Html->image('bmbanner.png', array(
                    'class' => 'img-responsive'));
                ?>
                <div class="intro-text">
                    <!-- <span class="name">BRAIN MEMO</span> -->
                    <hr class="seperate">
                    <span class="skills">Brain memo - improves memory - helps you memorize better. </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- popular lesson Section -->
<section id="popularlesson">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Popular Lessons</h2>
                <hr class="seperate">

            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <h3>Lesson: A</h3>
                    <img src="img/duck.jpg" class="img-responsive" alt="">
                    <div class="caption">

                        <p>Created By:</p>
                        <p>High Scores:</p>
                        <div class="span7 text-center">
                            <a href="#" class="btn btn-default" role="button"><i class="glyphicon glyphicon-star-empty"></i></a> <a href="#" class="btn btn-default" role="button">Learn</a>

                        </div>


                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <h3>Lesson: B</h3>
                        <img src="img/duck.jpg" class="img-responsive" alt="">
                        <div class="caption">

                            <p>Created By:</p>
                            <p>High Scores:</p>
                            <div class="span7 text-center">
                                <a href="#" class="btn btn-default" role="button"><i class="glyphicon glyphicon-star-empty"></i></a> <a href="#" class="btn btn-default" role="button">Learn</a>

                            </div>


                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <h3>Lesson: C</h3>
                            <img src="img/duck.jpg" class="img-responsive" alt="">
                            <div class="caption">

                                <p>Created By:</p>
                                <p>High Scores:</p>
                                <div class="span7 text-center">
                                    <a href="#" class="btn btn-default" role="button"><i class="glyphicon glyphicon-star-empty"></i></a> <a href="#" class="btn btn-default" role="button">Learn</a>

                                </div>


                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <h3>Lesson: D</h3>
                                <img src="img/duck.jpg" class="img-responsive" alt="">
                                <div class="caption">

                                    <p>Created By:</p>
                                    <p>High Scores:</p>
                                    <div class="span7 text-center">
                                        <a href="#" class="btn btn-default" role="button"><i class="glyphicon glyphicon-star-empty"></i></a> <a href="#" class="btn btn-default" role="button">Learn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</section>

<!-- leaderboard Section -->
<section id="leaderboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Leaderboards</h2>
                <hr class="seperate">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 leaderboard-item">
                <a href="#leaderboardModal1" class="leaderboard-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-plus-circle fa-3x"></i>
                        </div>
                    </div>
                    <?php
                    echo $this->Html->image('leaderboard/one.png', array('class' => 'img-responsive'));
                    ?>
                </a>
            </div>
            <div class="col-sm-4 leaderboard-item">
                <a href="#leaderboardModal2" class="leaderboard-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-plus-circle fa-3x"></i>
                        </div>
                    </div>
                    <?php echo $this->Html->image('leaderboard/two.png', array('class' => 'img-responsive'));?>
                </a>
            </div>
            <div class="col-sm-4 leaderboard-item">
                <a href="#leaderboardModal3" class="leaderboard-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-plus-circle fa-3x"></i>
                        </div>
                    </div>
                    <?php echo $this->Html->image('leaderboard/three.png', array('class' => 'img-responsive'));?>
                </a>
            </div>
            <div class="col-sm-4 leaderboard-item">
                <a href="#leaderboardModal4" class="leaderboard-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-plus-circle fa-3x"></i>
                        </div>
                    </div>
                    <?php echo $this->Html->image('leaderboard/four.png', array('class' => 'img-responsive'));?>
                </a>
            </div>
            <div class="col-sm-4 leaderboard-item">
                <a href="#leaderboardModal5" class="leaderboard-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-plus-circle fa-3x"></i>
                        </div>
                    </div>
                    <?php echo $this->Html->image('leaderboard/five.png', array('class' => 'img-responsive'));?>
                </a>
            </div>
            <div class="col-sm-4 leaderboard-item">
                <a href="#leaderboardModal6" class="leaderboard-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-plus-circle fa-3x"></i>
                        </div>
                    </div>
                    <?php echo $this->Html->image('leaderboard/six.png', array('class' => 'img-responsive')); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- leaderboard Modals -->
<div class="leaderboard-modal modal fade" id="leaderboardModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>leaderboard: First</h2>
                        <hr class="seperate">
                        <img src="img/leaderboard/one.png" class="img-responsive img-centered" alt="">
                        <p>The First is XXX</br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</br><a href="#leaderboard">Back to main page.</a></p>
                        <ul class="list-inline item-details">
                            <li>Creater:
                                <strong><a href="#leaderboard">Mac SG</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="#leaderboard">April 2015</a>
                                </strong>
                            </li>
                            <li>Type:
                                <strong><a href="#leaderboard">Language Exercise</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="leaderboard-modal modal fade" id="leaderboardModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>leaderboard: Second</h2>
                        <hr class="seperate">
                        <img src="img/leaderboard/two.png" class="img-responsive img-centered" alt="">
                        <p>The Second is XXX</br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</br><a href="#leaderboard">Back to main page.</a></p>
                        <ul class="list-inline item-details">
                            <li>Creater:
                                <strong><a href="#leaderboard">Tubbytoey</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="#leaderboard">March 2015</a>
                                </strong>
                            </li>
                            <li>Type:
                                <strong><a href="#leaderboard">Colour</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="leaderboard-modal modal fade" id="leaderboardModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>leaderboard: Third</h2>
                        <hr class="seperate">
                        <img src="img/leaderboard/three.png" class="img-responsive img-centered" alt="">
                        <p>The Third is XXX</br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</br><a href="#leaderboard">Back to main page.</a></p>
                        <ul class="list-inline item-details">
                            <li>Creater:
                                <strong><a href="#leaderboard">PoiPai</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="#leaderboard">January 2015</a>
                                </strong>
                            </li>
                            <li>Type:
                                <strong><a href="#leaderboard">How to train your dragon</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="leaderboard-modal modal fade" id="leaderboardModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>leaderboard: Fourth</h2>
                        <hr class="seperate">
                        <img src="img/leaderboard/four.png" class="img-responsive img-centered" alt="">
                        <p>The Fourth is XXX</br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</br><a href="#leaderboard">Back to main page.</a></p>
                        <ul class="list-inline item-details">
                            <li>Creater:
                                <strong><a href="#leaderboard">jNut</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="#leaderboard">September 2014</a>
                                </strong>
                            </li>
                            <li>Type:
                                <strong><a href="#leaderboard">The Korean</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="leaderboard-modal modal fade" id="leaderboardModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>leaderboard: Fifth</h2>
                        <hr class="seperate">
                        <img src="img/leaderboard/five.png" class="img-responsive img-centered" alt="">
                        <p>The fifth is XXX</br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</br><a href="#leaderboard">Back to main page.</a></p>
                        <ul class="list-inline item-details">
                            <li>Creater:
                                <strong><a href="#leaderboard">Son</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="#leaderboard">yesterday</a>
                                </strong>
                            </li>
                            <li>Type:
                                <strong><a href="#leaderboard">of a bitch</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="leaderboard-modal modal fade" id="leaderboardModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>leaderboard: Sixth</h2>
                        <hr class="seperate">
                        <img src="img/leaderboard/six.png" class="img-responsive img-centered" alt="">
                        <p>The sixth is XXX</br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</br><a href="#leaderboard">Back to main page.</a></p>
                        <ul class="list-inline item-details">
                            <li>Creater:
                                <strong><a href="#leaderboard">Webtech</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="#leaderboard">Get A</a>
                                </strong>
                            </li>
                            <li>Type:
                                <strong><a href="#leaderboard">Yeah!!</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroller to Top -->
<div class="scroll-top page-scroll visible-xs visible-sm visible-md visible-lg">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


