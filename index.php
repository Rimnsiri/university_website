<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ISI KEF </title>
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
    <style>
        * {
          box-sizing: border-box;
        }
  
        body {
          margin: 0;
          padding: 0;
          font-family: Arial, sans-serif;
        }
  
        .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 20px;
        }
  
        h1 {
          text-align: center;
          margin-bottom: 40px;
        }
  
        .button-container {
          display: flex;
          justify-content: center;
          margin-bottom: 40px;
        }
  
        .button-container button {
          margin-right: 10px;
          padding: 10px 20px;
          border: none;
          background-color: #333;
          color: #fff;
          font-size: 18px;
          cursor: pointer;
        }
  
        .button-container button:hover {
          background-color: #555;
        }
  
        .image-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
          grid-gap: 20px;
        }
  
        .image-container {
          position: relative;
          overflow: hidden;
        }
  
        .image-container img {
          width: 60%;
          margin: 150px ;
          border: 4px solid black;
          height: auto;
          opacity: 0.8 ;
          transition: transform 0.3s ease;
        }
  
        .image-container:hover img {
          transform: scale(1.05);
          opacity: 1;
        }
  
        .image-container:hover .image-overlay {
          opacity: 1;
        }
  
        .image-overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
          color: #fff;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          opacity: 0;
          transition: opacity 0.3s ease;
        }
  
        .image-overlay h3 {
          font-size: 24px;
          margin-bottom: 10px;
        }
  
        .image-overlay p {
          font-size: 18px;
        }
        .image-container {
  display: none;
}
.image-container.all {
  display: block;
}
.image-container.salle {
  display: block;
}
.image-container.labo {
  display: block;
}
.image-container.ext {
  display: block;
}
.tt {
        
          text-align: center;
          color: rgb(156, 122, 122);
         
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
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <a href="event.php" class="nav-item nav-link">Events</a>
                <a href="contact (2).php" class="nav-item nav-link">Contact</a>
                <a href="chat_.php" class="nav-item nav-link">chat</a>
               


            </div>

       
            <a href="LOGIN_.php" class="btn btn-primary py-2 px-lg-3 d-none d-lg-block">
                LOGIN  </a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/vue.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Univeristé de Jendouba</h5>
                                <h1 class="display-3 text-white animated slideInDown">institut supérieur d'informatique de kef </h1>
                                <p class="fs-5 text-white mb-4 pb-2">L’institut supérieur d’informatique du 
                                    Kef à été crée selon le décret n°06-1587 du 6 juin 2006 portant création 
                                    d’établissement d’enseignement supérieur et de recherche .
                                     En effet , l’IS Kef est l’une des établissements universitaires de l’université de 
                                    Jendouba </p>
                                <a href="GaleriedeFaculté.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Galerie de Facultée</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/isi.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Univeristé de Jendouba</h5>
                                <h1 class="display-3 text-white animated slideInDown">institut supérieur d'informatique de kef </h1>
                                <p class="fs-5 text-white mb-4 pb-2"> L’institut supérieur d’informatique du 
                                    Kef à été crée selon le décret n°06-1587 du 6 juin 2006 portant création 
                                    d’établissement d’enseignement supérieur et de recherche .
                                     En effet , l’IS Kef est l’une des établissements universitaires de l’université de 
                                    Jendouba </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Acquérir des compétences</h5>
                            <p>il est important de pratiquer régulièrement et d'apprendre de nouvelles choses chaque jour</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Travail de groupe</h5>
                            <p>Travailler en groupe peut être très efficace car cela permet de partager les idées, les compétences et les tâches de manière équitable</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Projets à domicile</h5>
                            <p>Les projets à domicile peuvent être une excellente façon d'apprendre de nouvelles compétences et de créer quelque chose de pratique</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Acquisition de connaissances</h5>
                            <p>élargir notre compréhension du monde qui nous entoure et à améliorer notre capacité à résoudre les problèmes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/isi1.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Bienveune dans Isi Kef </h1>
                    <p class="mb-4"> L’institut supérieur d’informatique du 
                        Kef à été crée selon le décret n°06-1587 du 6 juin 2006 portant création 
                        d’établissement d’enseignement supérieur et de recherche .
                         En effet , l’IS Kef est l’une des établissements universitaires de l’université de 
                        Jendouba </p>
                    <p class="mb-4">Nos formations : </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>-LCS

                                Cette Licence Intitulé "Computer Science" Comprend Deux Spécialités :
                                
                                 
                                
                                Génie Logiciel Et Système D'Information : GL
                                Informatique et Multimédia : IM</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>- LCE

                                Licence en Computer Engineering
                                
                                 
                                
                                Cette Licence Contient une seule Spécialité : Ingénierie des réseaux et systèmes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>- SIW

                                Mastère de Recherche en Systèmes d'Informations et Web</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>- ASRI

                                Mastère Professionnel en Administration et Sécurité des Réseaux Informatiques</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>- AWI

                                Mastère Professionnel en Application Web Intelligente</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> - NTICDIA

                                Mastère Co-Construite en Nouvelles Technologies de l’Information et de la Communication dédiées à l'Innovation de l'Agriculture</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Formations</h6>
                <h1 class="mb-5">ISI KEF : </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/c1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Licence</h5>
                            <small>Computer Science</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/c2.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                          
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Licence</h5>
                            <small>en Computer Engineering</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/c3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                           
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mastère</h5>
                            <small>de Recherche en Systèmes d'Informations et Web</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/c4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mastrère</h5>
                            <small>Professionnel en Administration et Sécurité des Réseaux Informatiques</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/c5.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mastrère</h5>
                            <small>Professionnel en Application Web Intelligente</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/c66.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mastrère</h5>
                            <small>Co-Construite en Nouvelles Technologies de l’Information et de la Communication dédiées à l'Innovation de l'Agriculture</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Catégories</h6>
                <h1 class="mb-5">Cours Catégories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Computer Science</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Computer Engineering</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/rech.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-7 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Recherche en Systèmes d'Informations et Web</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/app.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-7 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Application Web Intelligente</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-17 px-12" style="margin: 1px;">
                                    <h5 class="m-0">Co-Construite en Nouvelles Technologies de l’Information et de la Communication dédiées à l'Innovation de l'Agriculture</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/reee.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Administration et Sécurité des Réseaux Informatiques</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">ISI KEF</h6>
                <h1 class="mb-5">Professeurs</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/prof1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/safsaf.ctt"><i class="fab fa-facebook-f"></i></a>
                              </div>
                        </div>
                        <div class="text-left p-4">
                            <h5>Madame Safa</h5>
                            <small>Entreprise</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/prof2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/jemai.ftayma"><i class="fab fa-facebook-f"></i></a>
                              </div>
                        </div>
                        <div class="text-left p-4">
                            <h5>Madame Fatma</h5>
                            <small>Programmation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/prof3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/waritheddine.djeddi"><i class="fab fa-facebook-f"></i></a>
                              </div>
                        </div>
                        <div class="text-left p-4">
                            <h5>Monsieur Warith</h5>
                            <small>PHP</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/prof4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com/yahya.bouslimi.9"><i class="fab fa-facebook-f"></i></a>
                              </div>
                        </div>
                        <div class="text-left p-4">
                            <h5 >Monsieur Yahya</h5>
                            <small>laravel</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    
                <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">CATÉGORIES</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>5 Rue Saleh Ayech - 7100 Kef</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(216) 78 201 056</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>isikef.rnu.tn</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100057592473413"><i class="fab fa-facebook-f"></i></a>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">GaleriedeFaculté</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/b.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/isi1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/a.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/cat-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/f-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Footer End -->   
                 
                    </body>
                  
                </div>
            </div>
        </div>
      
    </div>
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
    <script language="javascript">
    // Récupération des boutons et des images
const allButton = document.querySelector('#all-button');
const laboButton = document.querySelector('#labo-button');
const salleButton = document.querySelector('#salle-button');
const exterieurButton = document.querySelector('#exterieur-button');
const allImages = document.querySelectorAll('.image-container');

// Ajout des écouteurs d'événements aux boutons
allButton.addEventListener('click', () => {
  // Affichage de toutes les images
  allImages.forEach(image => image.style.display = 'block');
});

laboButton.addEventListener('click', () => {
  // Affichage des images avec l'ID "labo"
  allImages.forEach(image => {
    if (image.querySelector('img').id === 'labo') {
      image.style.display = 'block';
    } else {
      image.style.display = 'none';
    }
  });
});

salleButton.addEventListener('click', () => {
  // Affichage des images avec l'ID "salle"
  allImages.forEach(image => {
    if (image.querySelector('img').id === 'salle') {
      image.style.display = 'block';
    } else {
      image.style.display = 'none';
    }
  });
});

exterieurButton.addEventListener('click', () => {
  // Affichage des images avec l'ID "ext"
  allImages.forEach(image => {
    if (image.querySelector('img').id === 'ext') {
      image.style.display = 'block';
    } else {
      image.style.display = 'none';
    }
  });
});

    </script>
</body>

</html>