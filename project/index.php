<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Site</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- -------------------- Header menus ------------------- -->

    <div class="container-fluid top-menu">
        <div class="container">
            <div class="row top-menu">
                
                <div class="col-md-6">
                    <div class="address">
                        <i class="fa fa-address"></i>
                        <p>Address : 15, First Floor, 62nd street, Ashok Nagar, Chennai-600083 Landmark : Opp Little Flower School</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="phone">
                        <p>Phone : +91 75500 00206</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container-fluid" id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
                    <img src="img/home_logo.png" alt="Home-logo" class="img-fluid" />
                </div>
                <div class="col-md-9">
                    
                    <nav class="navbar navbar-expand-md float-right">
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                          <ul class="navbar-nav menu">
                            <li class="nav-item">
                              <a class="nav-link" href="#home">HOME</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#about">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#footer">CONTACT</a>
                            </li>
                            <li class="nav-item">
                            <button type="button" class="btn btn-success mt-2" data-toggle="modal" data-target="#myModal">FORM</button>

                            <div class="modal fade mt-5" id="myModal" role="dialog">
                                <div class="modal-dialog">
    
                                 <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Your Form</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            
                                        </div>
                                        <div class="modal-body">
                                        <form action="/action_page.php">

                                            <div class="form-group fg2">                                   
                                                <input type="text" class="form-control" placeholder="Your Name *" id="email" required autocomplete="off">
                                            </div>

                                            <div class="form-group fg2">                                    
                                                <input type="text" class="form-control" placeholder="Email *" id="email" required autocomplete="off">
                                            </div>

                                            <div class="form-group fg2">
                                                <textarea class="form-control" rows="5" id="comment" placeholder="Your Message *"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary my-4 btn-block">Send</button>
                                        </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<!-- --------- Model ------------------  -->








<!-- Home slide -->


    <div class="container-fluid p-0">
       
            <div class="row">
                <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/l1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/l2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/l3.png" alt="Third slide">
                        </div>
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
            </div>
        </div>
       
    </div>


<!-- Best Service -->

    <!-- <div class="container" id="service">
        <div class="row">
            <div class="col my-1 service">
                <h4 class="mt-5 s-head">Best <span>Service</span></h4>
                <p class="s-para mt-5">If you are going to use a passage of Lorem Ipsum, you need to be sure there<br/> isn't anything embarrassing hidden in the middle of text.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 service-sec">
                <div class="shad1">
                <i class="fa fa-cloud ico"></i>
                <h4 class="sub-head">Full Responsive</h4>
                <p class="sub-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button type="button" class="btn btn-success mb-4">Read More ></button>
            </div>
            </div>
            <div class="col-md-4 service-sec">
                <div class="shad1">
                <i class="fa fa-html5 ico"></i>
                <h4 class="sub-head">Easy Customize</h4>
                <p class="sub-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button type="button" class="btn btn-success mb-4">Read More ></button>
            </div>
            </div>
            <div class="col-md-4 service-sec">
                <div class="shad1">
                <i class="fa fa-mobile ico"></i>
                <h4 class="sub-head">Extreme Security</h4>
                <p class="sub-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button type="button" class="btn btn-success mb-4">Read More ></button>
            </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 service-sec">
                <div class="shad1">
                    <i class="fa fa-android ico"></i>
                    <h4 class="sub-head">Free Update</h4>
                    <p class="sub-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <button type="button" class="btn btn-success mb-4">Read More ></button>
                </div>
            </div>
            <div class="col-md-4 service-sec">
                <div class="shad1">
                    <i class="fa fa-bar-chart ico"></i>
                <h4 class="sub-head">Unlimited Color</h4>
                <p class="sub-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button type="button" class="btn btn-success mb-4">Read More ></button>
                </div>
            </div>
            <div class="col-md-4 service-sec">
                <div class="shad1">
                    <i class="fa fa-facebook ico"></i>
                <h4 class="sub-head">Live Chat</h4>
                <p class="sub-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button type="button" class="btn btn-success mb-4">Read More ></button>
                </div>
            </div>
        </div>
    </div> -->

<!-- About Us -->
    <div class="container my-5" id="about">
        <div class="row">
            <div class="col-md-6">
                <img src="img/mobile.png" alt="mobile" class="img-fluid mt-5 mobile" />
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-secondary btm-small mt-5 outline-none">About US</button>
                <h5 class="sec-heading mb-4">Stay One Step Ahead With Applyou.</h5>
                <p class="sec-para mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <h6 class="side-menu mb-3"><span class="badge"><i class="fa fa-check"></i></span> Bugs resolved, built with secure data.</h6>
                <h6 class="side-menu mb-3"><span class="badge badge-secondary"><i class="fa fa-check"></i></span> Modern browser support and mobile menu options.</h6>
                <h6 class="side-menu mb-3"><span class="badge badge-secondary"><i class="fa fa-check"></i></span> Social media video sharing plugin.</h6>
                <h6 class="side-menu"><span class="badge badge-secondary"><i class="fa fa-check"></i></span> Responsive Sidebar Menu.</h6>
                <button type="button" class="btn about-btn mt-4">Get Started ></button>
            </div>
        </div>
    </div>


<!-- Features -->
    <div class="container my-5" id="feature">
        <div class="row">
            <div class="col-md-7">
            <button type="button" class="btn btn-secondary btm-small mt-5 outline-none">Feature</button>
                <h5 class="sec-heading mb-4">Stay One Step Ahead With Applyou.</h5>
                <p class="sec-para mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <h6 class="side-menu mb-3"><span class="badge"><i class="fa fa-check"></i></span> Bugs resolved, built with secure data.</h6>
                <h6 class="side-menu mb-3"><span class="badge badge-secondary"><i class="fa fa-check"></i></span> Modern browser support and mobile menu options.</h6>
                <h6 class="side-menu mb-3"><span class="badge badge-secondary"><i class="fa fa-check"></i></span> Social media video sharing plugin.</h6>
                <h6 class="side-menu"><span class="badge badge-secondary"><i class="fa fa-check"></i></span> Responsive Sidebar Menu.</h6>
            </div>
            <div class="col-md-5 my-5">
                <img src="img/feature.png" alt="feature-img" class="img-fluid">
            </div>
        </div>
    </div>

<!-- FAQ -->

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center s-head">What Questions Do Our <br/>Customers <span>Ask Most Often?</span></h1>
            <p class="s-para mt-4">If you are going to use a passage of Lorem Ipsum, you need to be sure there <br/>isn't anything embarrassing hidden in the middle of text.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 my-5">
            <div class="lc1 lc2 d-flex mx-auto">
                <h6>01</h6>
                <!-- <h5>How Are The Packages Updated ?</h5> -->
    <!-- -------------------------------------------------------------------- -->
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0 btn-collaspe">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseThree">
                             Q. What is another question?<i class="fa fa-plus float-right"></i>
                            </button>
                          </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </div>
                    </div>
                </div>
            </div>
    <!-- --------------------------------------------------------------------------------   -->
            </div>
            
            <div class="lc1 lc3 d-flex mx-auto">
                <h6>02</h6>
                <!-- <h5>How Are The Packages Updated ?</h5>
                <i class="fa fa-plus"></i> -->
                
                <div class="accordion" id="faqExample">
                    <div class="card">
                        <div class="card-header p-2" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseThree">
                                  Q. What is another question?<i class="fa fa-plus float-right"></i>
                                </button>
                              </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                            <div class="card-body">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="lc1 lc4 d-flex mx-auto">
                <h6>03</h6>
                <!-- <h5>How Are The Packages Updated ?</h5>
                <i class="fa fa-plus"></i> -->

                <div class="accordion" id="faqExample">
                    <div class="card">
                        <div class="card-header p-2" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Q. What is another question?<i class="fa fa-plus float-right"></i>
                                </button>
                              </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                            <div class="card-body">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="lc1 lc5 d-flex mx-auto">
        
                <h6>04</h6>

                <div class="accordion" id="faqExample">
                    <div class="card">
                        <div class="card-header p-2" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                  Q. What is another question?<i class="fa fa-plus float-right"></i>
                                </button>
                              </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                            <div class="card-body">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="col-md-6">
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-12">
                        <h3 class="f-head">Do You Have Any Question?</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <form action="/action_page.php">

                            <div class="form-group fg2">                                   
                              <input type="text" class="form-control" placeholder="Your Name *" id="email" required autocomplete="off">
                            </div>

                            <div class="form-group fg2">                                    
                              <input type="text" class="form-control" placeholder="Your Problem *" id="email" required autocomplete="off">
                            </div>

                            <div class="form-group fg2">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Your Problem *"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary my-4 btn-block">Send Question</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- --------- Testimonial -----------------------  -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <section>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 class="mb-4">Testimonials</h3>
      <p class="mb-4 pb-2 mb-md-5 pb-md-0">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
        numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
        quisquam eum porro a pariatur veniam.
      </p>
    </div>
  </div>

  <div class="row text-center d-flex align-items-stretch">
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #9d789b;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="img/team-1.png"
            class="rounded-circle img-fluid mt-0" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">Maria Smantha</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fa fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
            consectetur adipisicing elit.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #7a81a8;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="img/team-2.png"
            class="rounded-circle img-fluid mt-0" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">Lisa Cudrow</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fa fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
            repudi mollitia architecto.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #6d5b98;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="img/team-3.png"
            class="rounded-circle img-fluid mt-0" />
        </div>
        <div class="card-body">
          <h4 class="mb-4">John Smith</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fa fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
            aliquam repellat rem unde ducimus.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
        </div>
    </div>
</div>


<!-- Footer -->

<div class="container-fluid mt-5" id="footer" >
    <div class="container">
        <div class="row">
            <div class="col-md-3 my-5">
                <div class="fhead">
                    <h4>About Us</h4>
                    <hr>
                </div>
                <p class="fp1 mt-4">Applyou is the Landing Page Template for the Mobile App. Discover the unique features of Applyou</p>
                <div class="footer-link">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-whatsapp"></i>
                </div>
            </div>

            <div class="col-md-3 my-5">
                <div class="fhead">
                    <h4>Usefull Links</h4>
                    <hr>
                </div>
                <div class="flinks mt-4">
                    <ul class="list-group">
                        <li></i><a href="#"><span class="gt">>></span>Home</a></li>
                        <li></i><a href="#"><span class="gt">>></span>About</a></li>
                        <li></i><a href="#"><span class="gt">>></span>Service</a></li>
                        <li></i><a href="#"><span class="gt">>></span>Features</a></li>
                        <li></i><a href="#"><span class="gt">>></span>Blog</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 my-5">
                <div class="fhead">
                    <h4>Other Links</h4>
                    <hr>
                </div>
                <div class="flinks mt-4">
                    <ul class="list-group">
                        <li></i><a href="#"><span class="gt">>></span>Team</a></li>
                        <li></i><a href="#"><span class="gt">>></span>404</a></li>
                        <li></i><a href="#"><span class="gt">>></span>Terms</a></li>
                        <li></i><a href="#"><span class="gt">>></span>Support</a></li>
                        <li></i><a href="#"><span class="gt">>></span>Pricing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 my-5">
                <div class="fhead">
                    <h4>Contact Info</h4>
                    <hr>
                </div>
                <div class="fcnt">
                    <p>15, First Floor, 62nd street, <br/>Ashok Nagar, <>Chennai-600083</p>

                    <div class="flinks1 mt-0">
                        <ul class="list-group">
                            <li></i><a href="#"><span class="p"><i class="fa fa-phone"></i></span>+02 - 123 456 78 9</a></li>
                            <li></i><a href="#"><span class="m"><i class="fa fa-envelope"></i></span>example@gmail.com</a></li>
                            <li></i><a href="#"><span class="f"><i class="fa fa-fax"></i></span>+02 - 123 456 78 00</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid badge-secondary py-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="mt-4">&#169; Copyright 2021 Smart Roofs and Fabs. All Right Reserved</p>
            </div>
        </div>
    </div>
</div>
  
</body>
</html>