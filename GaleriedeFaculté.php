<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ISI KEF</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
    <link href="css/stylelogin.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
    height: 100vh;
    padding-top: 80px;
    background-color: #131313; 
}

h1 {
  color: #14addc;
  text-transform: uppercase;
  text-align: center;
  padding-bottom: 65px;
  letter-spacing: 15px;
}

.gallery {
  width: 1000px;
  margin: 0 auto;

  position: relative;
}

.gallery_photo {
  width: 250px;
  height: 250px;
  border-radius: 2px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.4);

  position: absolute;
  z-index: 10;
  outline-offset: 20px;
  transition: all 0.2s;
}

.gallary__photo--1{
  top: 0;
  left: 0;
}

.gallary__photo--2{
  top: 0;
  right: 0;
  z-index: 1;
}

.gallary__photo--3{
  top: 40px;
  left: 20%;
}

.gallary__photo--4{
  top: 60;
  left: 40%;
}

.gallary__photo--5{
  top: 40px;
  left: 60%;
  z-index: 2;
}

.gallery_photo:hover {
  outline: 15px solid #14addc;
  transform: scale(1.05) translateY(-20px);
  z-index: 20;
}

.gallery:hover .gallery__photo:not(:hover)
{
  transform : scale(0.9);
}


    </style>
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="arriere">
            
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
               

            
          
            <a href="LOGIN_.php" class="btn btn-primary py-2 px-lg-3 d-none d-lg-block">
                LOGIN  </a></div>
            </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    
    <!-- Header End -->

    <!-- Contact Start -->
   



<h1>Photo Gallery</h1> 
<div class="gallery">

<img src="img/f-1.jpg" alt="photo-1" class="gallery_photo gallary__photo--1 ">
<img src="img/f-2.jpg" alt="photo-1" class="gallery_photo gallary__photo--2 ">
<img src="img/f-3.jpg" alt="photo-1" class="gallery_photo gallary__photo--3 ">
<img src="img/f-4.jpg" alt="photo-1" class="gallery_photo gallary__photo--4 ">
<img src="img/f-5.jpg" alt="photo-1" class="gallery_photo gallary__photo--5 ">
</div>

      <!-- Contact End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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