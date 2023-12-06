
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

function test1() {
  // Récupérer les valeurs des champs
  var nom = document.getElementById("inputNom").value;
  var prenom = document.getElementById("inputPrenom").value;
  var email = document.getElementById("inputEmaill").value;
  var motdepasse = document.getElementById("motdepasse").value;
  var role = document.getElementById("inputRole").value;
  var cle = document.getElementById("cle").value;

  // Vérifier si les champs obligatoires sont remplis
  if (nom == "" || prenom == "" || email == "" || motdepasse == "" || role == "choix") {
    alert("Veuillez remplir tous les champs obligatoires.");
    return false;
  }

  // Vérifier la longueur du mot de passe
  if (password === "") {
    alert("Veuillez entrer votre mot de passe.");
    return false;
  } else if (!passwordRegex.test(password)) {
    alert("Le mot de passe doit contenir 8 chiffres.");
    return false;
  }

  return true;

  // Vérifier si la clé enseignant est saisie pour un rôle de professeur ou directeur
  if ((role == "prof" || role == "directeur") && cle == "") {
    alert("Veuillez saisir la clé enseignant.");
    return false;
  }

  // Si toutes les vérifications sont passées, le formulaire est soumis
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
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">


          
          
            <a href="LOGIN_.html" class="btn btn-primary py-2 px-lg-3 d-none d-lg-block">
                LOGIN  </a>
                
              
                </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container">
    <form class="form" action="ajouter_etudiant.php" method="POST">
        <h4>SIGN UP</h4>
        <div class="form-group">
            Nom : <input type="text" name="nom" id="inputNom" placeholder="Entrez votre nom">
        </div>
        <div class="form-group">
            Prénom : <input type="text" name="prenom" id="inputPrenom" placeholder="Entrez votre prénom">
        </div>
        <div class="form-group">
            Email UVT : <input type="text" name="mail" id="inputEmaill" placeholder="Entrez votre adresse email">
        </div>
        <div class="form-group">
            Mot de passe :<input type="password" name="password" id="motdepasse">
        </div>
        <div class="form-group">
            <label for="inputRole">Liste de rôles </label>
            <select class="form-control" id="inputRole" name="role">
                <option value="choix">Sélectionner un rôle : </option>
                <option value="etudiant">Etudiant</option>
                <option value="prof">Professeur</option>
                <option value="directeur">Directeur</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cle">Clé enseignant:</label><input type="password" name="cle" id="cle" placeholder="Saisir votre clé">
        </div>
        <button type="submit" onclick="test1()">SIGN UP</button>
        <br>
        <br>
        <a href="LOGIN_.php">Retour à la page précédente</a>
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
   
    </script>
</body>







</html>