<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>My Resume</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <style type="text/css">
    	/* My Resume */
    .profile {
        margin-bottom: 25px;
    }
    .profile .jobster-user-info {
        display: inline-block;
        width: 100%;
    }
    .profile .jobster-user-info .profile-avatar {
        position: relative;
        height: 115px;
        width: 115px;
        border-radius: 100%;
        display: inline-block;
    }
    .profile .jobster-user-info .profile-avatar img {
        border-radius: 100%;
    }
    .profile .jobster-user-info .profile-avatar i {
        font-size: 16px;
        color: #21c87a;
        position: absolute;
        background: #ffffff;
        border-radius: 100%;
        cursor: pointer;
        height: 30px;
        width: 30px;
        line-height: 30px;
        text-align: center;
        bottom: 20px;
        right: -5px;
    }

    .about-candidate {
        padding: 25px 0px;
    }

    .about-candidate .candidate-info {
        margin-bottom: 20px;
    }

    .resume-experience {
        padding-left: 10px;
        padding-top: 60px;
        padding-bottom: 60px;
        position: relative;
        padding-right: 50px;
        background: #f6f6f6;
    }

    .resume-experience:before {
        position: absolute;
        left: -40%;
        right: 0;
        width: 100%;
        height: 100%;
        background: #f6f6f6;
        content: "";
        z-index: -1;
        top: 0;
    }

    .resume-experience .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle {
        border-color: #f6f6f6;
    }

    .user-dashboard-info-box .select2-container--default .select2-selection--single .select2-selection__rendered {
        font-weight: bold;
        color: #626262;
    }

    @media (max-width: 1199px) {
        .secondary-menu ul li a {
            padding: 10px 15px;
        }
    }

    @media (max-width: 991px) {
        .resume-experience {
            padding-left: 15px;
            padding-top: 30px;
            padding-bottom: 30px;
            padding-right: 15px;
        }
        .resume-experience:before {
            content: none;
    }

    .secondary-menu ul li {
        display: inline-block;
    }
}

    @media (max-width: 575px) {
        .secondary-menu ul li a {
            padding: 4px 8px;
    }
    }

/*****************************
    Progress Bar
*****************************/
    .progress {
        position: relative;
        overflow: inherit;
        height: 3px;
        margin: 40px 0px 15px;
        width: 100%;
        display: inline-block;
    }
    .progress .progress-bar {
        height: 3px;
        background: #21c87a;
    }

    .progress .progress-bar-title {
        position: absolute;
        left: 0;
        top: -20px;
        color: #212529;
        font-size: 14px;
        font-weight: 600;
    }

    .progress .progress-bar-number {
        position: absolute;
        right: 0;
        color: #646f79;
        top: -20px;
    }


/* Jobster Candidate */
    .jobster-candidate-timeline {
        position: relative;
    }

    .jobster-candidate-timeline:before {
        content: "";
        position: absolute;
        left: 20px;
        width: 2px;
        top: 5px;
        bottom: 5px;
        height: calc(100% - 5px);
        background-color: #eeeeee;
    }

    .jobster-candidate-timeline .jobster-timeline-item {
        display: table;
        position: relative;
        margin-bottom: 20px;
        width: 100%;
    }

    .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle {
        border-radius: 50%;
        border: 12px solid white;
        z-index: 1;
        top: 5px;
        left: 9px;
        position: absolute;
    }

    .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle:before {
        content: "";
        position: absolute;
        left: 12px;
        width: 20px;
        top: -1px;
        bottom: 5px;
        height: 2px;
        background-color: #eeeeee;
    }

    .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-cricle > i {
        font-size: 15px;
        top: -8px;
        left: -7px;
        position: absolute;
        color: #21c87a;
    }

    .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-info {
        display: table-cell;
        vertical-align: top;
        padding: 5px 0 0 70px;
    }

    .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-info h6 {
        color: #21c87a;
        margin: 5px 0 0px;
    }
    .jobster-candidate-timeline .jobster-timeline-item .jobster-timeline-info span {
        color: #212529;
        font-size: 13px;
        font-weight: 500;
    }

    .jobster-candidate-timeline span.jobster-timeline-time {
        color: #646f79 !important;
    }

    .jobster-candidate-timeline .jobster-timeline-icon {
        border: 2px solid #eeeeee;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        line-height: 42px;
        text-align: center;
        background: #ffffff;
        position: relative;
        margin-bottom: 20px;
    }

    .jobster-candidate-timeline .jobster-timeline-icon i {
        font-size: 16px;
        color: #212529;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 16px;
    }

    </style>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="resume-base bg-primary user-dashboard-info-box p-4">
                        <div class="profile">
                            <div class="jobster-user-info">
                                <div class="profile-avatar">
                                    <img class="img-fluid " src="img\myphoto.jpeg" alt>
                                </div>
                                <div class="profile-avatar-info mt-3"><br>
                                    <span>
                                    <h5 class="text-white">Saurabh Wakchaure</h5>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <div class="about-candidate border-top">
                    <div class="candidate-info">
                        <h6 class="text-white">Email:</h6>
                        <p class="text-white">saurabh.wakchaure@adypu.edu.in</p>
                       <!-- <p class="text-white"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="45312036317571052228242c296b262a28">[email&#160;protected]</a></p>-->
                    </div>
                    <div class="candidate-info">
                        <h6 class="text-white">Phone:</h6>
                        <p class="text-white">+91 9168916690</p>
                    </div>
                    <div class="candidate-info">
                        <h6 class="text-white">Date Of Birth:</h6>
                        <p class="text-white">2002-14-12</p>
                    </div>
                    <div class="candidate-info">
                        <h6 class="text-white">Address:</h6>
                        <p class="text-white">Infront Of Polytechnic College, K.G.Road, Akole, Dist.A.Nagar</p>
                    </div>
                    <div class="candidate-info">
                        <h6 class="text-white">Gender:</h6>
                        <p class="text-white">Male</p>
                    </div>
                </div>
                <div class="mt-0">
                    <h5 class="text-white">Technical Skill:</h5>
                    <div class="progress bg-dark">
                        <div class="progress-bar bg-white" role="progressbar" style="width:88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar-title text-white">HTML/CSS</div>
                        <span class="progress-bar-number text-white">88%</span>
                    </div>
                </div>
                <div class="progress bg-dark">
                    <div class="progress-bar bg-white" role="progressbar" style="width:80%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar-title text-white">C++</div>
                    <span class="progress-bar-number text-white">80%</span>
                </div>
                </div>
                <div class="progress bg-dark">
                    <div class="progress-bar bg-white" role="progressbar" style="width:90%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar-title text-white">JAVA</div>
                    <span class="progress-bar-number text-white">90%</span>
                </div>
                </div>
                    <div class="progress bg-dark">
                    <div class="progress-bar bg-white" role="progressbar" style="width:95%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar-title text-white">Advanced JAVA</div>
                    <span class="progress-bar-number text-white">95%</span>
                </div>
                </div>
                    <div class="progress bg-dark ">
                    <div class="progress-bar bg-white" role="progressbar" style="width:80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar-title text-white">PHP With Codeignitor</div>
                    <span class="progress-bar-number text-white">80%</span>
                </div>
                </div>
                    <div class="progress bg-dark">
                    <div class="progress-bar bg-white" role="progressbar" style="width:90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar-title text-white">Postgresql,MySQL</div>
                    <span class="progress-bar-number text-white">90%</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-7">
    <div class="resume-experience">
        <div class="timeline-box">
            <h5 class="resume-experience-title">Education:</h5>
                <div class="jobster-candidate-timeline">
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                            <div class="dashboard-timeline-info">
                                <span class="jobster-timeline-time">2020-2023</span>
                                    <h6 class="mb-2">Bachelor in Computer Science</h6>
                                        <span>- Sangamner College,Sangamner</span>
                            </div>
                        </div>
                    </div>
                    <div class="jobster-timeline-item mb-0">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                            <div class="dashboard-timeline-info">
                                <span class="jobster-timeline-time">2023-2025</span>
                                    <h6 class="mb-2">Masters in Computer Application</h6>
                                    <span>- Ajeenkya DY Patil University,Pune</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline-box mt-4">
                <h5 class="resume-experience-title">Certification Courses:</h5>
                <div class="jobster-candidate-timeline">
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                    <div class="jobster-timeline-info">
                        <div class="dashboard-timeline-info">
                                <h6 class="mb-2">c++ Language</h6>
                            <span>- Technorbit Infosystem</span>
                        </div>
                    </div>
                </div>
                <div class="jobster-timeline-item mb-0">
                    <div class="jobster-timeline-cricle">
                        <i class="far fa-circle"></i>
                    </div>
                <div class="jobster-timeline-info">
                <div class="dashboard-timeline-info">
                        <h6 class="mb-2">Java Language</h6>
                            <span>- Technorbit Infosystem </span>
                        </div>
                    </div>
                </div>
                <br>
            
                <div class="jobster-timeline-item mb-0">
                    <div class="jobster-timeline-cricle">
                        <i class="far fa-circle"></i>
                    </div>
                <div class="jobster-timeline-info">
                <div class="dashboard-timeline-info">
                        <h6 class="mb-2">Android & Python</h6>
                            <span>- SSIT Pvt.Ltd</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="jobster-timeline-item mb-0">
                    <div class="jobster-timeline-cricle">
                        <i class="far fa-circle"></i>
                    </div>
                <div class="jobster-timeline-info">
                <div class="dashboard-timeline-info">
                        <h6 class="mb-2">Data Science</h6>
                            <span>- Pantech e Learning</span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="jobster-timeline-item mb-0">
                    <div class="jobster-timeline-cricle">
                        <i class="far fa-circle"></i>
                    </div>
                <div class="jobster-timeline-info">
                <div class="dashboard-timeline-info">
                        <h6 class="mb-2">Bootstrap</h6>
                            <span>- Sangamner College,Sangamner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline-box mt-4">
            <h5 class="resume-experience-title">Working Platforms:</h5>
                <div class="jobster-candidate-timeline">
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                         <div class="dashboard-timeline-info">
                            <h6 class="mb-2">Windows</h6>
                           </div>
                        </div>
                    </div>
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                         <div class="dashboard-timeline-info">
                            <h6 class="mb-2">Linux</h6>
                           </div>
                        </div>
                    </div>
                </div>  
        </div>
        <div class="timeline-box mt-4">
            <h5 class="resume-experience-title">Awards:</h5>
                <div class="jobster-candidate-timeline">
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                         <div class="dashboard-timeline-info">
                            <h6 class="mb-2">SRS(Student Research Scheme)</h6>
                            <span>- Sangamner College,Sangamner</span>
                               <p class="mt-2">Got a second price at college level in Research Scheme</p>
                         </div>
                        </div>
                    </div>
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                         <div class="dashboard-timeline-info">
                            <h6 class="mb-2">Student Rank</h6>
                            <span>- Sangamner College,Sangamner</span>
                               <p class="mt-2">Got a second rank in Third Year Computer Science</p>
                         </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="timeline-box mt-4">
            <h5 class="resume-experience-title">Projects:</h5>
                <div class="jobster-candidate-timeline">
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                         <div class="dashboard-timeline-info">
                            <h6 class="mb-2">Blind Stick Using Arduino UNO</h6>
                            <span>- Sangamner College,Sangamner</span>
                         </div>
                        </div>
                    </div>
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                         <div class="dashboard-timeline-info">
                            <h6 class="mb-2">Bus Pass Management System</h6>
                            <span>- Sangamner College,Sangamner</span>
                         </div>
                        </div>
                    </div>
                    
                </div>
        </div>
        <div class="timeline-box mt-4">
            <h5 class="resume-experience-title">Hobbies:</h5>
                <div class="jobster-candidate-timeline">
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                         <div class="dashboard-timeline-info">
                            <h6 class="mb-2">Travelling</h6>
                           </div>
                        </div>
                    </div>
                    <div class="jobster-timeline-item">
                        <div class="jobster-timeline-cricle">
                            <i class="far fa-circle"></i>
                        </div>
                        <div class="jobster-timeline-info">
                         <div class="dashboard-timeline-info">
                            <h6 class="mb-2">Listening music</h6>
                           </div>
                        </div>
                    </div>
                </div>  
        </div>

        
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>