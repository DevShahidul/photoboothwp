<?php include('header.php'); ?>

<div class="clearfix"></div>
<!-- Inner Banner -->
<div class="inner-banner-image" style="background-image:url(img/ElitePhotoBooth-Inner-Banner.jpg);">
  <div class="container">
    <p> Props </p>
  </div>
</div>

<!-- Section -->
<div class="inner-content">
  <div class="wrapper">
    <div class="title">
      <h2> Props </h2>
    </div>
    
    <!-- <div class="inner-video-section small have-boder-bottom line-left">
    <b class ="sub-heading">what our customers say</b>
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object img-circle-user"  src="./img/no-picture.jpg" alt="...">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"> John <span class="pull-right"> New York </span></h4>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
      </div>

      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object img-circle-user"  src="./img/no-picture.jpg" alt="...">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"> John <span class="pull-right"> New York</span></h4>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
      </div>

      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object img-circle-user"  src="./img/no-picture.jpg" alt="...">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"> John <span class="pull-right"> New York </span></h4>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
      </div> -->
  
     

    <!-- <img src="img/video/elite-booth-video-img.jpg" alt="" class="img-thumbnail">               
    <a class="play-btn" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" data-fancybox><i class="fa fa-play-circle"></i></a>        
    </div>  -->
    <!-- </div> -->
    <div>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        </p>
        <br>
        <p class="margin-top"> <b>This can be added to the following props.</b> </p>
        <p> <i class="fa fa-camera"></i>  Fun Hats </p>
        <p> <i class="fa fa-camera"></i>  Boas</p>
        <p> <i class="fa fa-camera"></i>  Scarves</p>
        <p> <i class="fa fa-camera"></i>  Glasses   </p>
        <p> <i class="fa fa-camera"></i>  Mirror Station</p>
        <p> <i class="fa fa-camera"></i>  Bunch </p>
        <div class ="group-list btn-banner">
          <a class="btn">CUSTOMIZE YOUR PHOTO BOOTH EXPERIENCE TODAY!</a>  
        </div>
    </div>
  <br>
  </div>
  <div class="clear"></div>
</div>
    <!-- Photo Gallery -->
<div class="section text-center" id="movePhotoGalary">
  <div class="wrapper">
        <div class="title">
            <h2>Unique fun objects to make your photo experience a Great Memorable</h2>
        </div>
        <p>At SmartBooth Images our emphasis is on creating an interactive and highly energized atmosphere at your event.</p>

        <!--photo gallery-->
        <div class="props-slider">
            <div class="image-container" >
                <div class="owl-carousel"  id ="props">
                    <div class="item" style="background-image:url('img/props-1.jpg')"> </div>
                    <div class="item" style="background-image:url('img/props-2.jpg')"> </div>
                    <div class="item" style="background-image:url('img/props-3.jpg')"> </div>
                    <div class="item" style="background-image:url('img/props-4.jpg')"> </div >
                    <div class="item" style="background-image:url('img/props-5.jpg')"> </div >
                    <div class="item" style="background-image:url('img/props-6.jpg')"> </div >
                </div>
            </div>
            <div class ="slider-left" id="propsThumb">
                <ul>
                   <li class ="active" data-index ="0"> <a> Fun Hats  </a>  <i class="fa fa-caret-right"></i></li>
                   <li data-index ="1"><a>  Boas </a> <i class="fa fa-caret-right"></i></li>
                   <li data-index ="2"><a>  Scarves </a> <i class="fa fa-caret-right"></i></li>
                   <li data-index ="3"><a>  Glasses   </a> <i class="fa fa-caret-right"></i></li>
                   <li data-index ="4"><a>  Mirror Station </a><i class="fa fa-caret-right"></i> </li>
                   <li data-index ="5"><a>  Bunch </a><i class="fa fa-caret-right"></i> </li>
                </ul>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>



<div class="clear"></div>

<div class="clearfix"></div>
<div class="vspace40"></div>	
<!-- DIFFERENT STYLE OF PHOTO BOOTHS -->
<?php
// include('template/different-style-photo-booths.php'); 
?>

<div class="clearfix"></div>
<?php
include('footer.php');
?>

<script>
    var $sync1 = $("#props");

    $('#propsThumb ul li').click( function() {
        $('#propsThumb ul li').removeClass('active');
        let ele =$(this);
        ele.addClass('active');
        let index  =ele.data('index');

        $sync1.trigger('to.owl.carousel', parseInt(index));
    })
  

    $sync1.on('changed.owl.carousel', function(event) {
        let index = event.item.index;
        $('#propsThumb ul li').each( function(e) {
            let eleIndex = $(this).data('index');
     
            if( index  === +eleIndex) {
                $('#propsThumb ul li').removeClass('active');
                $(this).addClass('active');
            }
        })
    });

$sync1
    .owlCarousel({
        items: 1,
        margin: 10,
        nav: false,
        dots: true,
    });
    
    </script>