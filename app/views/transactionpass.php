<!DOCTYPE html>
<html lang="en">

    <head>
        <style>
            .mydiv1{
                color:violet;
            }
            .mydiv1{
                color:violet;
            }
            *{
                box-sizing: border-box;
             }
            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
             background-color: #04AA6D;
             color: white;
             padding: 12px 20px;
             border: none;
             border-radius: 4px;
             cursor: pointer;
             float: right;
            }

            input[type=submit]:hover {
                 background-color: #45a049;
            }

            .container {
                 border-radius: 5px;
                 padding: 20px;
            }

            .col-25 {
                float: left;
                 width: 25%;
                 margin-top: 6px;
            }

            .col-75 {
              float: left;
              width: 75%;
             margin-top: 6px;
            }

/* Clear floats after the columns */
            .row::after {
                 content: "";
                display: table;
                clear: both;
            }

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
             .col-25, .col-75, input[type=submit] {
             width: 100%;
             margin-top: 0;
            }
            }
        </style>
        <meta charset="utf-8">
        <title>Bus-Pass Management System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="<?php echo site_url('https://fonts.googleapis.com');?>">
        <link rel="preconnect" href="<?php echo site_url('https://fonts.gstatic.com');?>" crossorigin>
        <link href=" <?php echo site_url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap');?>" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo site_url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo site_url('https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css');?>" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Libraries Stylesheet -->
        <link href="<?php echo site_url('lib/animate/animate.min.css');?>" rel="stylesheet">
        <link href="<?php echo site_url('lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap1.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style1.css" rel="stylesheet">
        <link href="/css/mainform.css" rel="stylesheet" media="all">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-secondary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="text-warning"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Chhatrapati Shivaji Nagar, Pune, Maharashtra 411003</small><br>
                        <small class="text-warning"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>msrtchelpdesk@gmail.com</small>

                    </div>
                    <div class="top-link">
                        <a href="https://www.facebook.com/groups/372526313842/" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                        <a href="<?php echo site_url('https://twitter.com/msrtcMumbai');?>" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a>
                        <a href="https://www.instagram.com/msrtc_official/?hl=en#:~:text=MSRTC%20Official%20(%40msrtc_official)%20%E2%80%A2%20Instagram%20photos%20and%20videos" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                        <a href="https://in.linkedin.com/company/maharashtra-state-road-transport-corp-msrtc-" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="mydiv1">
            <marquee>तांत्रिक मदतीसाठी -७७३८०८७१०३
संगणकीय आरक्षण करिता मदतीसाठी या दूरध्वनी क्र. १८००२२१२५० संपर्क साधावा.
रा.प. महामंडळाची मालवाहतूक सेवा " अधिक माहितीसाठी संपर्क क्र :- ०२२-२३०२४०६८</marquee>
        </div>
        <div class="container-fluid bg-info">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.html" class="navbar-brand">
                        <img style="margin-left:0px;width:100px;height:100px;"src="\img\BUS_IMAGE\MSRTC.png">
                       <!-- <h1 class="text-white fw-bold d-block"><span class="text-secondary">Maharashtra State Road Transport Corporation</span> </h1>-->
                        <span style="margin-left:10px;color:red;" class="navbar-text">
                        Maharashtra State Road Transport Corporation
                        </span>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav">
                        <a href="myui"><button type="button" class="btn btn-success" title="book" style="margin-left:300px;margin-right:10px;">Home</button></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div style="margin-bottom:1px;">
        </div>

        
       
        <!-- Page Header End -->



        <!-- Fact Start -->
       
        <!-- form -->
        <div class="container">
  <form action="insertransactionpass" method="post">
  <div class="row">
  <h2 style="margin-left:310px;" class="title">TRANSACTION DETAILS</h2>
    <div class="col-25">
      <label >First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
    </div>
  </div>
  
  <div class="row">
  <div class="col-25">
    <label>TransactionID</label>
  </div>
  <div class="col-75">
    <input type="text" id="lname" name="transactionid" placeholder="ID..." required>
  </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

      

      
      
        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-8">
                        <a href="index.html">
                            <h1 class="text-white fw-bold d-block">जय <span class="text-secondary">महाराष्ट्र</span> </h1>
                        </a>
                        <h4><p class="mt-4 text-light">सुरक्षित प्रवास! एस.टी.प्रवास</p></h4>
                        <div class="d-flex hightech-link">
                            <a href="https://www.facebook.com/groups/372526313842/" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                            <a href="https://twitter.com/msrtcMumbai" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                            <a href="https://www.instagram.com/msrtc_official/?hl=en#:~:text=MSRTC%20Official%20(%40msrtc_official)%20%E2%80%A2%20Instagram%20photos%20and%20videos" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                            <a href="https://in.linkedin.com/company/maharashtra-state-road-transport-corp-msrtc-" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <a href="#" class="h3 text-secondary">Short Link</a>
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="about" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Services</a>
                        </div>
                    </div>
                  
                    <div class="col-lg-4 col-md-8">
                        <a href="#" class="h3 text-secondary">Contact Us</a>
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i>Chhatrapati Shivaji Nagar, Pune, Maharashtra 411003</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> 022-23024068.</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i>msrtchelpdesk@gmail.com</a>
                        </div>
                    </div>
                </div>
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>MSRTC Management System</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-secondary"> Saurabh & Sejal</a> for <a href="https://themewagon.com">govt.</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo base_url('js/main.js');?>"></script>
    </body>

</html>