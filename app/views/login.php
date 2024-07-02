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

        <!-- Libraries Stylesheet -->
        <link href="<?php echo site_url('lib/animate/animate.min.css');?>" rel="stylesheet">
        <link href="<?php echo site_url('lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap1.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style1.css" rel="stylesheet">
        <link href="/css/login.css" rel="stylesheet" media="all">
    </head>

    <body>
       <div class="page-wrapper bg-warning p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">BOOKING DETAILS</h2>
                    <form method="get" action="insertreserve">
                        <div class="row row-space">
                         <div class="col-2">
                          <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="First Name" name="first_name" required>
                          </div>
                         </div> 
                         <div class="col-2">
                          <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Last Name" name="last_name" required>
                          </div>
                         </div>
                        </div> 
                        <div class="input-group">
                           <input class="input--style-2 js-datepicker" type="text" placeholder="Address" name="address" required>
                        </div>
                        <div class="row row-space">
                         <div class="col-2">
                          <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender" placeholder="Gender" required>
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                </div>
                        <div class="col-2">
                        <div class="input-group">
                        <small>upload your identity</small><input type="file" placeholder="upload your file" name="file" required>
                        </div>
                        </div>
                        </div>
                        <div class="row row-space">
                         <div class="col-2">
                          <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="From" name="from" required>
                          </div>
                         </div> 
                         <div class="col-2">
                          <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="to" name="to" required>
                          </div>
                         </div>
                        </div> 
                        <div class="row row-space">
                          <div class="col-2">
                          <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="contact_no" name="contact_no" required>
                          </div>
                         </div>
                        
                            
                            <div class="col-2">
                               <div class="input-group">
                                 <input class="input--style-2 js-datepicker" type="date" placeholder="date" name="date" required> 
                               </div>
                            </div>
                            <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                 <input class="input--style-2 js-datepicker" type="text" placeholder="price(from above price table)" name="price"required> 
                               </div>
                            </div>
                           <div class="col-2">
                               <div class="input-group">
                                 <small>Scan QR here<small>
                                 <img style="width:220px;height:220px;" src="\img\BUS_IMAGE\QR.jpeg">
                               </div>
                            </div>
                           </div>  
                           

                       
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Book</button>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
        </body>


      
        <!-- Footer Start -->
    