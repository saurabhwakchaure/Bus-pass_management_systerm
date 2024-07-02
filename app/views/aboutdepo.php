<!DOCTYPE html>
<html lang="en">

    <head>
        <style>
            .mydiv1{
                color:violet;
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
        <link rel="stylesheet" href="<?php echo site_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');?>">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?php echo site_url('lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap1.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style1.css" rel="stylesheet">
        <link href="/css/mainform.css" rel="stylesheet" media="all">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                             <a href="dashboardserver"><button type="button" class="btn btn-warning" title="book" style="margin-left:300px;margin-right:10px;">Home</button></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div style="margin-bottom:1px;">
        </div>

       

        <!--
        - Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">महाराष्ट्र राज्य मार्ग परिवहन महामंडळ</h1>
               
                       
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Fact Start -->
        <diV class="container mt-5">
        <table border="5" class="table table-striped table-hover bg-white table-responsive-sm">
            <thead class="bg-dark">
                <tr>
                    <th>Collection of MSRTCs Rare Old  Bus Photos</th>
                    <th><center>History of MSRTC</center></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img style="margin-left:0px;width:150px;height:150px;"src="\img\BUS_IMAGE\old1.jpg"></td>
                    <td>The Maharashtra State Road Transport Corporation is established by State Government of Maharashtra as per the provision in Section 3 of RTC Act 1950. 
                        The M.S.R.T.Corporation is operating it's services by the approved scheme of Road Transport Published vide Notification MVA 3173/30303-XIIA dated 29.11.1973 in the official gazette
                    </td>
                </tr>
                <tr>
                    <td><img style="margin-left:0px;width:150px;height:150px;"src="\img\BUS_IMAGE\old2.jpg"></td>
                    <td>The area covered by the scheme is entire area of the State of Maharashtra. 
                        The undertaking is operating stage and contract carriage services in the entire area of the state of Maharashtra except S.T. undertaking defined under Section 68 A (b) of M. V. Act and other exception published in the scheme. 
                        The Present Maharashtra State Road Transport Corporation(M.S.R.T.C.) represents the confluence of three streams for providing passenger road transport in the public sector. 
                        These related to the Pre-1956 Reorganization states of Bombay, Madhya Pradesh and Hyderabad. 
                        However, in chronological sequence, the place of pride for providing public road transport services goes to the Hyderabad state.
                    </td>
                </tr>
                <tr>
                     <td><img style="margin-left:0px;width:150px;height:150px;"src="\img\BUS_IMAGE\old3.jpg"></td>
                     <td>First bus having been flagged off from the Pune to Ahmednagar in 1948.
                         It's a story that had a hesitant beginning, with many people then not giving the State Transport (ST) bus service more than a couple of years of existence. 
                         Standing today by this milestone of 71 years, its position of strength speaks for itself - 18,449-odd buses, 1,02,000 employees, about 67 lakh citizens utilizing the service daily. 
                         Tracing the history that saw this development, we go back to the 1920s, when various entrepreneurs started their operations in the public transport scenario. 
                         Till the Motor Vehicle Act came into being in 1939, there were no regulations monitoring their activities, and this resulted in arbitrary competition, unregulated fares. 
                         The implementation of the act rectified matters to an extent. 
                         The individual operators were asked to form a union on defined routes in a particular area. 
                         This also proved to be beneficial for travelers as some sort of schedule set in, with a time table, pick-up points, conductors, and fixed ticket prices. Thus continued the state of affairs till 1948, when then Bombay State Government,started its own state road transport service, called State Transport Bombay. 
                         And the first blue and silver-topped bus took off from Pune to Ahmednagar.
                    </td>
                </tr>
                <tr>
                    <td><img style="margin-left:0px;width:150px;height:150px;"src="\img\BUS_IMAGE\old4.jpg"></td>
                    <td>The driver and conductor used to wear khaki uniforms and peak caps. 
                        There were 10 makes of buses in use then - Chevrolet, Fort, Bedford, Seddon, Studebaker, Morris Commercial, Albion, Leyland, Commer and Fiat. 
                        In the early 1950s, two luxury coaches were also introduced with Morris Commercial Chassis. 
                        These were called Neelkamal and Giriyarohini and used to ply on the Pune-Mahableshwar route. 
                        They had two by two seats, curtains, interior decoration, a clock and green tinted glasses. 
                        In 1950, a Road Transport Corporation Act was passed by the Central Government and it delegated powers to states to form their individual road transport corporations with the Central Government contributing one-third of the capital. 
                        The Bombay State Road Transport Corporation (BSRTC) thus came into being, later changing its name to MSRTC with the re-organization of the state.
                    </td>
                </tr>
                <tr>
                    <td><img style="margin-left:0px;width:150px;height:150px;"src="\img\BUS_IMAGE\old5.jpg"></td>
                    <td>The ST started with 30 Bedford buses having wooden bodies, coir seats and the fare charged on the Pune-Nagar route was nine paisa. 
                        Having seen the ST undergo many changes, lists them off as- increasing the seating capacity from the original 30 to 45 to 54, introduction of all-steel bodies to replace wooden bodies to make them stronger and cushion seats for more comfort. Later, in 1960, aluminium bodies were introduced as steel corrodes, especially in coastal areas, and the colour code also changed to red from the blue and silver. 
                        A partial night service was launched in 1956; the overnight service about a decade later and the semi-luxury class came into being during the Asian Games in 1982. 
                        Significantly, the ST does not only carry people but also takes care of the postal mail, distribution of medicines, newspapers and even tiffins to children studying in the bigger towns. 
                        In rural areas, it aids farmers to transport their goods to the cities.
                        All this in the face of bad roads, recurring losses, hiked taxes and yet it retains its identity of a transport service for everybody.
                    <td>
                </tr>
                <tr>
                     <td style="color:yellow;background-color:red;"colspan="2"><center>No matter what, the ST reaches every village that is connected by road, however bad it may be, truly living up to its motto of jithe rasta, tithe ST' (where there's a road, there's a ST bus)!</center></td>
                </tr>
                   
                    
                    
                    
                    
                    
              
             
                


                 
                  
            </tbody>
        </table>

    </diV>
      
        

        

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
                        <!--/* This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. */-->
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