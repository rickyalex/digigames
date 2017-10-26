<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    
<div class="jumbotron">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="assets/images/cover1.jpg" alt="Chania">
                <div class="carousel-caption">
                  <h3>Los Angeles</h3>
                  <p>LA is always so much fun!</p>
                </div>
              </div>

              <div class="item">
                <img src="assets/images/cover2.jpg" alt="Chania">
                <div class="carousel-caption">
                  <h3>Chicago</h3>
                  <p>Thank you, Chicago!</p>
                </div>
              </div>

              <div class="item">
                <img src="assets/images/cover3.jpg" alt="Chania">
                <div class="carousel-caption">
                  <h3>New York</h3>
                  <p>We love the Big Apple!</p>
                </div>
              </div>
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
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 box">
                <span class="box-title">User Reviews</span>
                <div class="box-pic">
                    <img src="assets/images/box1.jpg" />
                </div>

                <p class="caption"><b>The Largest RTS Community</b><p>
            </div>
            <div class="col-lg-4 box">
                <span class="box-title">User Reviews</span>
                <div class="box-pic">
                    <img src="assets/images/box2.jpg" />
                </div>

                <p class="caption"><b>Titanfall 2</b></p>
            </div>
            <div class="col-lg-4 box">
                <span class="box-title">User Reviews</span>
                <div class="box-pic">
                    <img src="assets/images/box3.jpg" />
                </div>

                <p class="caption"><b>The Birds Are Still Angry</b></p>
            </div>
        </div>

    </div>
</div>
