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
    <script language="javascript">
 function validateForm() {
  // Récupération des valeurs des champs
  var name = document.getElementById("name").value();
  var email = document.getElementById("email").value();
  var message = document.getElementById("message").value();

  // Validation du champ Nom
  if (name === "") {
    alert("Veuillez entrer votre nom");
    return false;
  }

  // Validation du champ Email
  if (email === "") {
    alert("Veuillez entrer votre adresse email");
    return false;
  } else if (!/^\S+@\S+\.\S+$/.test(email)) {
    alert("L'adresse email n'est pas valide");
    return false;
  }

  // Validation du champ Message
  if (message === "") {
    alert("Veuillez entrer votre message");
    return false;
  }

  // Si toutes les validations sont passées avec succès, retourne true pour soumettre le formulaire
  return true;
}


    </script>
    <style>
        form {
       display: flex;
       flex-direction: column;
       max-width: 500px;
       margin: auto;
     }
     
     label, input, textarea {
       margin: 10px 0;
     }
     
     input[type="text"],
     input[type="email"],
     textarea {
       padding: 10px;
       border: 1px solid #ccc;
       border-radius: 4px;
       font-size: 16px;
     }
     
     button[type="submit"] {
       background-color: #4CAF50;
       color: white;
       padding: 10px 20px;
       border: none;
       border-radius: 4px;
       cursor: pointer;
       font-size: 16px;
     }
     
     button[type="submit"]:hover {
       background-color: #45a049;
     }
     .tt 
{
  text-align: center;
  color: rgb(156, 122, 122);
 
}
#Mytable {
  width: 80%;
}
.my-container .table-class {
  width: 80%;
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
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <a href="event.php" class="nav-item nav-link">Events</a>
                <a href="contact (2).php" class="nav-item nav-link active">Contact</a>
                <a href="chat_.php" class="nav-item nav-link">chat</a>
            

            </div>
            
            <a href="LOGIN_.html" class="btn btn-primary py-2 px-lg-3 d-none d-lg-block">
                LOGIN  </a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Entrez en contact</h5>
                    <p class="mb-4">Le formulaire de contact est actuellement inactif. Obtenez un formulaire de contact fonctionnel et opérationnel avec Ajax & PHP en quelques minutes. Il vous suffit de copier-coller les fichiers, d'ajouter un peu de code et le tour est joué. Téléchargez maintenant. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">5 Rue Saleh Ayech - 7100 Kef</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">(216) 78 201 056</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">isikef.rnu.tn</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form method="POST" action="contact.php">
  <div class="row g-3">
    <div class="col-md-6">
      <div class="form-floating">
        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
        <label for="name">Nom</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="col-12">
      <div class="form-floating">
        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
        <label for="message">Message</label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
    </div>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

     
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
    
</body>

</html>