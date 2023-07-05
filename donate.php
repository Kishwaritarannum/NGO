<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sahyog Samvriddhi Foundation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-3">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-2 px-lg-3">
            <img class="img-fluid" src="img/logo4.jpg" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About us</a>
                <a href="team.html" class="nav-item nav-link">Our Team</a>
                <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="contact.php" class="dropdown-item">Contact</a>
                        <a href="testimonial.html" class="dropdown-item">Our Volunteers</a>
                        <a href="reach.html" class="dropdown-item">Our Reach</a>
                    </div>
                </div>
               
            </div>
            <!-- <a href="donate.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block rounded-circle">Donate Now<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
        <a href="donate.php" class="btn btn-primary py-md-7 px-md-10 me-7 animated slideInLeft fs-5 h-50 ">Donate Now</a>
    </nav>
    <!-- Navbar End -->
    <?php 
    include 'sendmail.php';
     error_reporting(E_ALL);
     ini_set('display_errors', 0);
     
    ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Donate</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                            <li class="breadcrumb-item text-white active" aria-current="page">Donate</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="col-md-12" style="background-color:white;"><?php echo $alert; ?></div><br/>
  
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Billing</h6>
                <h1 class="mb-5">Billing Address</h1>
            </div>
            <p>
           
            </p>
               <center>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form action = "" method="POST">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="number" id="number" placeholder="Mobile Number" required>
                                    <label for="subject">Mobile Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Enter Aadhar No." id="aadhar" name="aadhar" required>
                                    <label for="aadhar">Aadhar No</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Enter Amount" id="amount" name="amount" required>
                                    <label for="message">Amount</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Address" id="address" name="address" required>
                                    <label for="message">Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <!-- <button class="btn btn-primary w-100 py-3" name="submit" id="submit" type="submit">Proceed to pay</button> -->
                                <button type="submit" name="submit" id="submit" class="btn btn-primary w-100 py-3" >
                                    Submit
                                </button>
                            </div>
                            <div class="col-12">
                                <!-- <button class="btn btn-primary w-100 py-3" name="submit" id="submit" type="submit">Proceed to pay</button> -->
                                <button type="submit" name="submit" id="submit" class="btn btn-primary w-100 py-3" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                    Proceed to Pay
                                </button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Donate Here</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <h4>Kishwari Tarannum</h4><br/> -->
                                        <img src="img/imgist.png" alt="" style="width: 300px; height: 450px;" >
                                        <!-- <h4>QRCode Scan &amp; Pay </h4> -->
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </form>
                </div></center>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-3 mt-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Useful Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="privacy.html">Privacy Policy</a>
                    <a class="btn btn-link" href="condition.html">Terms & Condition</a>
                    <a class="btn btn-link" href="contact.php">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact US</h4>
                    <small class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>House No.-K2/68, Kisan Colony, &nbsp;Phase-2, Pragati Path, Anisabad, Phulwari, Patna-800002</small>
                    <br/>
                    <small class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91-9718179291</small>
                    <br/>
                    <small class="mb-2"><i class="fa fa-envelope me-3"></i>sahyogfoundation25@gmail.com</small>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Our Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/medi.jpeg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/medi2.jpeg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/medi3.jpeg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/medi4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/medi.jpeg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/medi2.jpeg" alt="">
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Social Links</h4>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://instagram.com/sahyogsamvriddhifoundation_?igshid=ZGUzMzM3NWJiOQ=="><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100091244824502&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://youtube.com/@sahyogsamvriddhifoundation25"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/samvirdhi?t=2QhfX_w-xaEZ-9Y6mVDqCA&s=09"><i class="fab fa-twitter"></i></a>
                    </div>
                </div> 
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="" href="#">Sahyog Samvriddhi Foundation</a>@2023.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="" href="">Developer</a> -->
                    </div>
                    <!-- <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>