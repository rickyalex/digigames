<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">


    <div class="jumbotron">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $covers = isset($covers) ? $covers : array(); ?>
                <?php if (!empty($covers)) { ?>
                    <?php foreach ($covers as $cover => $item): ?>
                        <?php if ($cover === 0) { ?> <div class="item active"> 
                        <?php } else { ?> <div class="item"> <?php } ?>
                            <img src="<?= $item->image_link ?>" alt="Chania">
                                <div class="carousel-caption">
                                    <h3><?php echo $item->caption; ?></h3>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php }else { ?>
                        <div class="item active">
                            <img src="assets/images/empty.jpg" alt="Chania">
                            <div class="carousel-caption">
                                <h3>No Image, please add through the cover module !</h3>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
            <div class="body-content">
                <?php $games = isset($games) ? $games : array(); ?>
                <?php if (!empty($games)) { 
                        $limit = count($games); $x=0; $row=1; foreach ($games as $game => $item): 
                        if ($x % 3 === 0) { $row = $row +1; ?> <div class="row"> <?php } ?>
                        <div class="col-sm-4 col-md-4 box col-lg-4 box">
                                <span class="box-title">User Reviews</span>
                                <div class="box-pic">
                                    <a href="<?= $item->url ?>"><img src="<?= $item->image_link ?>" /></a>
                                </div>
                                <p class="caption"><b><?php echo $item->caption; ?></b><p>
                            </div>
                        <?php if (($x == $limit) || ($x != 0 && $x/(3*($row+1)) === 1)){ ?> </div> <?php } ?>
                        <?php $x++; endforeach; ?>
                            <?php }else { ?>
                        <div class="row"><div class="col-sm-4 col-md-4 box col-lg-4 box">
                            <span class="box-title">User Reviews</span>
                                <div class="box-pic">
                                    <img src="assets/images/box_empty.jpg" />
                                </div>
                                <p class="caption"><b>No games yet, add through the game module !</b><p>
                                    </div></div>
                        <?php } ?>
            </div>
        </div>
