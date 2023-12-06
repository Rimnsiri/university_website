<?php
$username = "root";
$password = "";
$hostname = "localhost";

// activer le rapport d'erreur
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connection string with database
$dbhandle = mysqli_connect($hostname, $username, $password);

// connect with table
$selected = mysqli_select_db($dbhandle, "projet_js");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['password'])) {
    $nom = mysqli_real_escape_string($dbhandle, $_POST['nom']);
    $prenom = mysqli_real_escape_string($dbhandle, $_POST['prenom']);
    $mail = mysqli_real_escape_string($dbhandle, $_POST['mail']);
    $password = mysqli_real_escape_string($dbhandle, $_POST['password']);

    $sql = "SELECT * FROM etudiant1 WHERE nom='$nom' AND prenom='$prenom' AND  mail='$mail' AND password='$password' ";
    $result = mysqli_query($dbhandle, $sql);

    if (mysqli_num_rows($result) == 1) {
      session_start();
      $_SESSION['nom'] = $nom;
      $_SESSION['prenom'] = $prenom;
      $_SESSION['mail'] = $mail;
      $_SESSION['password'] = $password;
      header('Location: espace_etudiant.php');
      exit;
    } else {
      echo "Invalid username or password.";
    }
  }
}
$dbhandle->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ISI KEF</title>
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
    <script language="javascript">
   function test() {
  var nom = document.getElementById("inputNom").value.trim();
  var prenom = document.getElementById("inputPrenom").value.trim();
  var email = document.getElementById("inputEmail").value.trim();
  var password = document.getElementById("inputPassword").value.trim();
  var emailRegex = /\S+@\S+\.\S+/;
  var passwordRegex = /^\d{8}$/;

  if (nom === "") {
    alert("Veuillez entrer votre nom.");
    return false;
  }

  if (prenom === "") {
    alert("Veuillez entrer votre prénom.");
    return false;
  }

  if (email === "") {
    alert("Veuillez entrer votre adresse email.");
    return false;
  } else if (!emailRegex.test(email)) {
    alert("Veuillez entrer une adresse email valide.");
    return false;
  }

  if (password === "") {
    alert("Veuillez entrer votre mot de passe.");
    return false;
  } else if (!passwordRegex.test(password)) {
    alert("Le mot de passe doit contenir 8 chiffres.");
    return false;
  }

  return true;
}



         </script>
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
    <div class="container">
        <form class="form" name="connexion"  onsubmit="return test()" >
          <h4>LOGIN</h4>
          <div class="form-group">
            Nom : <input type="text" id="inputNom" placeholder="Entrez votre nom">
          </div>
          <div class="form-group">
            Prénom : <input type="text" id="inputPrenom" placeholder="Entrez votre prénom">
          </div>
          <div class="form-group">
            Email :
            <input type="email" class="form-control" id="inputEmail" placeholder="Entrez votre adresse email">
          </div>
          <div class="form-group">
            Mot de passe :<input type="password" id="inputPassword" pattern="\d{8}" title="Le mot de passe doit contenir 8 chiffres">
          </div>

      
          <button type="submit" onclick="test()" >Se connecter</button>
          <br>
          <br>
          <a href="SIGNUP (2).php">Crée une compte </a>
          <br>
          <br>
          <a href="index.php">  Je suis un(e) visteur</a>   
        </form>
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