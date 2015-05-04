<section id="lesson">
    <div class="container">
        <br><br>
        <h1 class="text-center"> Lesson Name </h1>
        <br><br>
        <div id="owl-demo" class="owl-carousel owl-theme">
            <?php foreach ($cards as $card_show): ?>
            <div class="item"><?php echo $this->Html->image($card_show['Card']['front'], array(
                    'class' => 'img-responsive center-block'
                )); ?>
            </div>
            <?php endforeach; ?>
            <!--<div class="item"><img src="assets/fullimage2.jpg" alt="GTA V"></div>-->
        </div>

        <br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="list-group center-block col-md-4">
                <?php 
                    $questionNum = 1;
                    foreach ($random_answers as $random_answer): ?>
                    <div class="input-group" style="margin:10px">
                    <span class="input-group-addon" id="sizing-addon2"><?= $questionNum ?></span>
                    <?php echo $this->Html->link($random_answer['Card']['back'], array()
                            , array('class' => 'list-group-item')); ?>
                     </div>
                <?php $questionNum=$questionNum+1; endforeach;?>
                
            </div>
            <div class="col-md-4"></div>
        </div>
</section>