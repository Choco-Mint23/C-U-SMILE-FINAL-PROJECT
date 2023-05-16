<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C U Smile</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="index_style.css">

    <!-- Link FontAwesome -->
    <script src="https://kit.fontawesome.com/8fa2bccd91.js" crossorigin="anonymous"></script>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="#"><i class="fa-solid fa-tooth fa-lg" style="color: #ffffff;"></i> &nbsp C U Smile </i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link lg text-end fs-4 nav-services navbar-selections" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item nav-about">
                    <a class="nav-link text-end fs-4 navbar-selections" href="aboutUs.php">About</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link fs-4 login-button text-end navbar-selections" >Login</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="container d-lg-flex gap-lg-3 flex-lg-row flex-md-row flex-md-row hero-container">
        
        <div class="container d-lg-flex gap-lg-3 flex-lg-row flex-md-row flex-md-row">
            <div class="hero-left">
                <img src="img/placeholder.png" alt="" class="hero-img">
            </div>
            <div class="hero-right">
                <div class="">
                    <h1>Let's <span>C U Smile</span></h1>
                    <h1>Right now!</h1>
                    <!-- <a class="btn btn-primary appointment-button" href="#" role="button">Book Appointment</a> -->
                    <a href="login.php" class="button book-appointment-button" type="button">Book Appointment</a>
                    <h3>or <i class="fa-solid fa-phone fa-beat" style="color: #000000;"></i>123-4567</h3>
                </div>
            </div>
        </div>
    
    </div>

    <!-- What We Offer Section -->
    <section class="offer-section">
        <p class="offer-text offer-title" style="font-size: 62px;">What we offer</p>
        <div class="d-lg-flex flex-lg-row justify-content-lg-evenly justify-content-md-center gap-5 d-md-flex flex-md-wrap d-sm-flex flex-sm-column align-items-sm-center">
            <div class="card card-offer-1" style="width: 25rem;">
                <img src="braces.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Braces</h5>
                    <p class="card-text">Dental braces are devices used to straighten and align teeth by applying gentle pressure. They are made up of brackets, wires, and bands and can treat various dental issues.
                        Regular adjustments and checkups are necessary, and treatment typically takes several months to a few years.</p>
                </div>
            </div>
        
            <div class="card card-offer-2" style="width: 25rem;">
                <img src="cleaning.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cleaning</h5>
                    <p class="card-text">Dental cleaning at the dentist is a procedure to remove plaque, tartar, and other buildup from teeth. It involves the use of specialized tools, such as scalers and polishers, to clean the teeth and leave them smoother and brighter. 
                        Regular tooth cleaning can help prevent tooth decay, gum disease, and other dental problems.</p>
                </div>
            </div>
        
            <div class="card card-offer-3" style="width: 25rem;">
                <img src="canal.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Root Canal</h5>
                    <p class="card-text">A root canal is a dental procedure used to treat an infected or damaged tooth. During the operation, the dentist removes the damaged or infected pulp from the tooth's root canal, cleans the area, and fills it with a sealing material.
                        A crown or filling is then placed on top of the tooth to protect it and restore its function.</p>
                </div>
            </div>
        </div>
        <p class="offer-text offer-footer" style="font-size: 62px;">
            And more!
        </p>
    </section>
    
    
    <!-- Our Dentist Section -->
    <div class="our-dentist-container container">
        <center>
            <h1>Our Dentists</h1>
        </center>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/ourDentist/dentist_1.jpg" class="d-block w-100 h-75" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/ourDentist/dentist_2.jpg" class="d-block w-100 h-75" alt="...">
                
            </div>
            <div class="carousel-item">
                <img src="img/ourDentist/dentist_3.jpg" class="d-block w-100 h-75" alt="...">             
            </div><div class="carousel-item">
                <img src="img/ourDentist/dentist_4.jpg" class="d-block w-100 h-75" alt="...">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <center><h1 style="font-size: 62px; margin-bottom: 25px;">Testimonies</h1></center>
    


    <!-- Testimonies -->
    <section class="testimony-container w-100">
        <div class="subwrapper d-flex d-lg-flex flex-lg-row justify-content-lg-evenly justify-content-md-center gap-5 d-md-flex flex-md-column d-sm-flex flex-sm-column align-items-sm-center align-content-start">
            <div class="testimony-content p-5 container d-flex flex-column align-content-center gap-5">
                <center>
                    <img class="" src="test1.png" alt="..." class="">
                </center>
                <p class="testimony-text">"Getting braces at C U Smile was the best decision I've ever made! 
                    The staff was so friendly and knowledgeable, and they made the process easy and comfortable. 
                    My teeth are now perfectly straight, and I couldn't be happier with the results."</p>
            </div>
            <div class="testimony-content p-5 container d-flex flex-column align-content-center gap-5">
                <center>
                    <img class="" src="test2.png" alt="..." class="">
                </center>
                <p class="testimony-text">"I was nervous about getting a root canal, but the team at C U Smile put me at ease right away. 
                    They explained everything clearly and made sure I was comfortable throughout the entire procedure. Thanks to their expert care, my tooth is now pain-free and healthy again."</p>
            </div>
            <div class="testimony-content p-5 container d-flex flex-column align-content-center gap-5">
                <center>
                    <img class="" src="test3.png" alt="..." class="">
                </center>
                <p class="testimony-text">"I had my teeth cleaned at C U Smile, and it was an excellent experience.
                    The hygienist was gentle but thorough, and my teeth have never felt cleaner. The whole team was friendly and welcoming, and I'll definitely be coming back for my next appointment."</p>
            </div>
        </div>
    </section>

    <!-- Call To Action -->
    <div class="cta-container">
        <div class="container d-inline-flex flex-lg-column align-content-center d-md-flex flex-md-column d-sm-flex flex-sm-column">
            <h1 class="text3">What are you waiting for?</h1>
            <center>
                <a href="login.php" class="button book-appointment-button" type="button">BOOK NOW</a>
            </center>
        </div>
    </div>

    <!-- Footer-->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="logo">
                <a class="navbar-brand fs-4" href="#"><i class="fa-solid fa-tooth fa-lg" style="color: #ffffff;"></i> &nbsp C U Smile </a>
                </div>
                <div class="contact-info">
                    <p>Email: <a href="mailto:youremail@example.com">CUsmile@gmail.com</a></p>
                    <p>Phone: <a href="tel:+123456789">+2310878</a></p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


