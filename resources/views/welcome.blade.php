<!doctype html>
<html class="no-js" lang="en">
<head>
<!-- title -->
<title>Landing Page</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<meta name="author" content="">
<!-- description -->
<meta name="description" content="">
<!-- keywords -->
<meta name="keywords" content="">
<!-- Favicon -->
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
<!-- animation -->
<link rel="stylesheet" href="landingpage/css/animate.css" />
<!-- bootstrap -->
<link rel="stylesheet" href="landingpage/css/bootstrap.min.css" />
<!-- et line icon -->
<link rel="stylesheet" href="landingpage/css/et-line-icons.css" />
<!-- font-awesome icon -->
<link rel="stylesheet" href="landingpage/css/font-awesome.min.css" />
<!-- themify icon -->
<link rel="stylesheet" href="landingpage/css/themify-icons.css">
<!-- swiper carousel -->
<link rel="stylesheet" href="landingpage/css/swiper.min.css">
<!-- justified gallery  -->
<link rel="stylesheet" href="landingpage/css/justified-gallery.min.css">
<!-- magnific popup -->
<link rel="stylesheet" href="landingpage/css/magnific-popup.css" />
<!-- revolution slider -->
<link rel="stylesheet" type="text/css" href="landingpage/revolution/css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="landingpage/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="landingpage/revolution/css/navigation.css">
<!-- bootsnav -->
<link rel="stylesheet" href="landingpage/css/bootsnav.css">
<!-- style -->
<link rel="stylesheet" href="landingpage/css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="landingpage/css/responsive.css" />
<link rel="stylesheet" href="landingpage/css/custom.css" />

  <!-- Styles -->
  <style>
      .bg {
        /* The image used */
        background-image: url("img/background.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .portfolio-grid.work-4col li, .blog-grid.blog-4col li {
          width: 33.3% !important; 
      }
  </style>
</head>
<body class="bg">

<footer class="wow fadeIn">
  <div class="padding-50px-tb xs-padding-30px-tb">
    <div class="container">
      <div class="row" style="background-color: #fff; padding-top: 25px; border-radius: 10px">
        <div class="col-md-2 col-sm-2 col-xs-2 text-center"> 
          <img class="logo" style="width: 150px;  height: 150px; border-radius: 75px" src="img/profile.jpg">
        </div>
        <div class="col-md-7 col-sm-7 col-xs-7">
          <h6>{{$name}}</h6>
          <p style="font-weight: bold;margin-top: -20px">Bio</p>
          <p style="margin-top: -30px; font-size: 14px; line-height: 20px">{{$bio}}</p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
          <p style="font-weight: bold; margin-top: 30px">Phone</p>
          <p style="margin-top: -30px; color: #bc007b">{{$phone}}</p>
          <p style="font-weight: bold;margin-top: -30px">Email</p>
          <p style="margin-top: -30px; color: #bc007b">{{$email}}</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- start portfolio -->
<section class="wow fadeIn no-padding" id="demos" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <div class="filter-content overflow-hidden padding-50px-all sm-padding-15px-all">
        <ul class="portfolio-grid work-4col hover-option11 gutter-extra-large">
          <li class="grid-sizer"></li>
          @foreach($posts as $post)
          <li class="grid-item classic wow fadeInUp">
            <div class=" " style="background-color: #fff; border-radius: 5px">
              <img src="{{$post['img']}}" style="border-radius: 5px; border-top: 5px, "/>
              <p style="font-weight: bold;margin-top: -35px; margin-left: 10px; color: #fff">{{$post['title']}}</p>
              <p style="padding-left: 15px; font-size: 12px; line-height: 20px;margin-top: -10px;">{{$post['description']}}</p>
              <div style="padding-right: 15px; padding-left: 15px; padding-bottom: 15px;margin-top: -20px;">
                @if($post['featured'])
                <img src="img/hart.png" style="width: 20px; height: 20px, "/>
                @endif
                <img src="" style="width: 20px; height: 20px, "/>

                <p style="float: right; font-size: 13px" class="">{{$post['date']}}</p>
              </div>
            </div>
          </li>
          @endforeach
          
          
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- end portfolio -->


<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript libraries -->
<script type="text/javascript" src="landingpage/js/jquery.js"></script>
<script type="text/javascript" src="landingpage/js/modernizr.js"></script>
<script type="text/javascript" src="landingpage/js/bootstrap.min.js"></script>
<script type="text/javascript" src="landingpage/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="landingpage/js/skrollr.min.js"></script>
<script type="text/javascript" src="landingpage/js/smooth-scroll.js"></script>
<script type="text/javascript" src="landingpage/js/jquery.appear.js"></script>
<!-- menu navigation -->
<script type="text/javascript" src="landingpage/js/bootsnav.js"></script>
<script type="text/javascript" src="landingpage/js/jquery.nav.js"></script>
<!-- animation -->
<script type="text/javascript" src="landingpage/js/wow.min.js"></script>
<!-- swiper carousel -->
<script type="text/javascript" src="landingpage/js/swiper.min.js"></script>
<!-- parallax -->
<script type="text/javascript" src="landingpage/js/jquery.stellar.js"></script>
<!-- magnific popup -->
<script type="text/javascript" src="landingpage/js/jquery.magnific-popup.min.js"></script>
<!-- portfolio with shorting tab -->
<script type="text/javascript" src="landingpage/js/isotope.pkgd.min.js"></script>
<!-- images loaded -->
<script type="text/javascript" src="landingpage/js/imagesloaded.pkgd.min.js"></script>
<!-- pull menu -->
<script type="text/javascript" src="landingpage/js/classie.js"></script>
<script type="text/javascript" src="landingpage/js/hamburger-menu.js"></script>
<!-- counter  -->
<script type="text/javascript" src="landingpage/js/counter.js"></script>
<!-- fit video  -->
<script type="text/javascript" src="landingpage/js/jquery.fitvids.js"></script>
<!-- equalize -->
<script type="text/javascript" src="landingpage/js/equalize.min.js"></script>
<!-- skill bars  -->
<script type="text/javascript" src="landingpage/js/skill.bars.jquery.js"></script>
<!-- justified gallery  -->
<script type="text/javascript" src="landingpage/js/justified-gallery.min.js"></script>
<!--pie chart-->
<script type="text/javascript" src="landingpage/js/jquery.easypiechart.min.js"></script>
<!-- instagram -->
<script type="text/javascript" src="landingpage/js/instafeed.min.js"></script>
<!-- retina -->
<script type="text/javascript" src="landingpage/js/retina.min.js"></script>
<!-- revolution -->
<script type="text/javascript" src="landingpage/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="landingpage/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="landingpage/js/main.js"></script>
</body>
</html>
