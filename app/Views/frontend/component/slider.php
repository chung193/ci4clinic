<style>
    .carousel-indicators li{
        padding-bottom: 0px;
    }
    .caption{
        position: absolute; 
        display: block; 
        pointer-events: auto; 
        left: 930.5px; 
        top: 254px; 
        z-index: 5; 
        visibility: visible; 
        perspective: 601px;
    }

    .caption .main_title{
        z-index: 5; 
        font-family: Roboto; 
        height: auto; 
        color: rgb(0, 0, 0); 
        text-decoration: none; 
        white-space: normal; 
        width: 600px; 
        min-height: 0px; 
        min-width: 0px; 
        max-height: none; 
        max-width: none; 
        text-align: inherit; 
        line-height: 60px; 
        letter-spacing: 0px; 
        font-weight: 300; 
        font-size: 50px; 
        transform-origin: 50% 50%; 
        opacity: 1; 
        transform: translate(0px, 0px); 
        visibility: visible;
    }
    .caption .sub_title{
      z-index: 10;
      font-family: Roboto;
      height: auto;
      color: rgb(59, 59, 59);
      text-decoration: none;
      white-space: normal;
      width: 600px;
      min-height: 0px;
      min-width: 0px;
      max-height: none;
      max-width: none;
      text-align: inherit;
      line-height: 30px;
      letter-spacing: 0px;
      font-weight: 300;
      font-size: 30px;
      transform-origin: 50% 50%;
      opacity: 1;
      transform: translate(0px, 0px);
      visibility: visible;
    }
</style>
<?php 
// print_r($base['slider']); die();
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <?php 
    $i = 1;
        foreach($base['slider'] as $val){
        
    ?>
    <div class="carousel-item <?php if($i==1) echo "active"; else echo "";?>">
        <div class="caption">
            <h2 class="main_title"><?= $val['main_title'] ?></h2>
            <h3 class="sub_title"><?= $val['sub_title'] ?></h3>
            <a class="action" href="<?= $val['url'] ?>">Chi tiết</a>
        </div>
      <img class="d-block w-100" src="<?= base_url().'/public/uploads/slider/'.$val['img']?>" alt="First slide">
    </div>
    <?php
      $i++;
        }
    ?>

    <!-- <div class="carousel-item active">
      <img class="d-block w-100" src="https://i.pinimg.com/originals/bf/82/f6/bf82f6956a32819af48c2572243e8286.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://newevolutiondesigns.com/images/freebies/cool-4k-wallpaper-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images5.alphacoders.com/116/1166049.jpg" alt="Third slide">
    </div> -->

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>