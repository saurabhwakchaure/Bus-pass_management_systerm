<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <link rel="icon" type="image/x-icon" href="">
    <title>Digital Farmer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css');?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo site_url('css/style.css');?>">
        <link rel="stylesheet" href="<?php echo site_url('css/login.css');?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo site_url('css/responsive.css');?>">
    <!-- fevicon -->
    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo site_url('css/jquery.mCustomScrollbar.min.css');?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="<?php echo site_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css');?>" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->   

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="home"><img src="/images/BUS_IMAGE/MSRTC.jpg" alt="#" ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="/icon/loc1.png" />Pune</li>
                                <li><img src="/icon/email1.png" />msrtchelpdesk@gmail.com</li>

                                <li><img src="/icon/call1.png" />(+91)022-23024068</li>
                            </ul>
                        
                       
                            <strong><h2 style="color:white;height:100px;margin-left:7cm;margin-top:0.5cm;">Maharashtra State Road Transport Corporation</h2></strong>
                            <h5 style="color:yellow;"><marquee>For Any Assistance/Queries in respect of online Reservation/Pass system ,contact our call-centre No:1800221250</marquee></h5>
                                       
                        </div>
                    </div>
                </div>
                <div class="row w-150">
                    <div class="col-md-12 location_icon_bottum">

                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="reservation.jsp" class=" btn-outline-success">Reservation</a> </li>
                                               
                                                <li><a href="one.jsp" class=" btn-outline-success">Pass</a></li>
                                             
                                                <li><a href="complaint.jsp" class=" btn-outline-success">Complaint-box</a></li>
                                            
                                               
                                            </ul>
                                             </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="img\search_icon.png"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
  
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="/images/BUS_IMAGE/bus3.webp" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <a class="buynow" href="#about">About us</a>
                         </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="/images/BUS_IMAGE/bus2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1 class="text-dark"></h1>
                            <span class="text-dark"></span>

                            <p class="text-dark"></p>
                            <a class="buynow" href="#about">About us</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="/images/BUS_IMAGE/bus3.webp" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1 class="text-dark"></h1>
                            <span class="text-dark"></span>

                            <p class="text-dark"></p>
                            <a class="buynow" href="#about">About us</a>

                        </div>
                    </div>
                </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>About Bus Service</h2><br><h3><u>Developed By Student's For Community</u></h3>
                        <p>The Maharashtra State Road Transport Corporation is established by State Government of Maharashtra as per the provision in Section 3 of RTC Act 1950. 
                            The M.S.R.T.Corporation is operating it's services by the approved scheme of Road Transport Published vide Notification MVA 3173/30303-XIIA dated 29.11.1973 in the official gazette.
                            The first bus was flagged off from Pune to Ahmednagar in 1948.
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="/images/BUS_IMAGE/old.jpg" class="img-fluid border border-5 border-dark rounded" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- for_box -->
   
    <!-- end for_box -->
  
    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>MSRTC New<strong class="black"> Looks</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="product_box">
                                <a href="#"><figure><img src="/images/BUS_IMAGE/bus.png" alt="#" />
                                    <h3>LALPARI</h3></figure></a>
                            </div>
                        </div>
                         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="product_box">
                                <a href="#"><figure stytle="width: 20px"><img src="images/BUS_IMAGE/vithai.jpg" alt="#" />
                                    <h3>VITAHI</h3>
                                </figure></a>
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="product_box">
                                <a href="#"><figure><img src="/images/BUS_IMAGE/hirkani.jpg" alt="#" />
                                    <h3>HIRKANI</h3></figure></a>
                            </div>
                        </div>
                    
               
                
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <div class="product_box">
                                <a href="#"><figure><img src="/images/BUS_IMAGE/shivshahi.png" alt="#" />
                                    <h3>SHIVSHAHI</h3></figure></a>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <div class="product_box">
                                <a href="#"><figure><img src="/images/BUS_IMAGE/shivneri.png" alt="#" />
                                    <h3>SHIVNERI</h3></figure></a>
                            </div>
                        </div>



                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <div class="product_box">
                                <a href="#"><figure><img src="/images/BUS_IMAGE/ashwamedh.jpg" alt="#" />
                                    <h3>ASHWAMEDH</h3></figure></a>
                            </div>
                        </div>        
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <div class="product_box">
                                <a href="#"><figure><img src="/images/BUS_IMAGE/shayanyaan.jpg" alt="#" />
                                    <h3>SHAYANYAAN</h3></figure></a>
                            </div>
                        </div>     
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                            <div class="product_box">
                                <a href="#"><figure><img src="/images/BUS_IMAGE/shivai.jpg" alt="#" />
                                    <h3>SHIVAI</h3></figure></a>
                            </div>
                        </div>           
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->
    
   
   
   <!--  footer -->
    <footr>
        <div class="footer top_layer ">
            <div class="">

                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                           <figure> <a href="home"> <img src="/images/BUS_IMAGE/logo.jpg" alt="logo" /></a>
                            <h5 class="text-white text-center">"OUR MOTTO: Safe And Accident Free Bus Service" </h5>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="icon/3.png" alt="#" /> <a href="#"> Join Us</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Our Cummunity</a> </li>
                                <li><img src="icon/3.png" alt="#" /> <a href="#">Our Services</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Subcribe email</h3>
                            <p>It is very important for the Traveller to follow us for more information.. </p>
                            <input class="form-control" placeholder="Your Email" type="type" name="Your Email">
                            <button class="submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Contact Us</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="/icon/loc.png" alt="#" /></a>Sangamner
                                    <br>India </li>
                                <li>
                                    <a href="#"><img src="/icon/email.png" alt="#" /></a>msrtchelpdesk@gmail.com</li>
                                <li>
                                    <a href="#"><img src="/icon/call.png" alt="#" /></a>(+91)022-23024068</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Send Message</h3>

                            <form class="">
                       
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text" name="Name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            
                        </form>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
     
        <div class="copyright">
            <div class="container">
                <p>Copyright © 2024.</p>
                <p>The Website belongs to Maharashtra State Road Transport Corporation.</p>
           
        </div>
        </div>
    </footr>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
</body>

</html>