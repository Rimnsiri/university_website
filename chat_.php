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
    $(document).ready(function() {
  // Lorsque le bouton Envoyer est cliqué
  $("#butsave").click(function() {
    // Récupération des données du formulaire
    var name = $("input[name='name']").val();
    var msg = $("textarea[name='msg']").val();
    // Envoi des données via une requête AJAX
    $.ajax({
      url: "envoyer.php",
      type: "POST",
      data: { name: name, msg: msg },
      success: function(data) {
        // Affichage des résultats dans la table
        $("#Mytable").html(data);
        // Réinitialisation du formulaire
        $("form[name='frm']").trigger("reset");
      }
    });
  });

  // Lorsque le bouton Répondre est cliqué
  $("#btnreply").click(function() {
    // Récupération des données du formulaire
    var Rcommentid = $("input[name='Rcommentid']").val();
    var Rname = $("input[name='Rname']").val();
    var Rmsg = $("textarea[name='Rmsg']").val();
    // Envoi des données via une requête AJAX
    $.ajax({
      url: "repondre.php",
      type: "POST",
      data: { Rcommentid: Rcommentid, Rname: Rname, Rmsg: Rmsg },
      success: function(data) {
        // Affichage des résultats dans la table
        $("#Mytable").html(data);
        // Réinitialisation du formulaire
        $("form[name='frm1']").trigger("reset");
      }
    });
  });
});


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
.taille 
{
    max-width: 600px; /* ajustez la valeur en fonction de vos besoins */
    margin: 0 auto; /* centrez horizontalement le formulaire dans son conteneur */
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
                <a href="LOGIN_.php" class="nav-item nav-link">login</a>
                <a href="SIGNUP (2).php" class="nav-item nav-link">signup</a>
            

            </div>
            
            <a href="LOGIN_.html" class="btn btn-primary py-2 px-lg-3 d-none d-lg-block">
                LOGIN  </a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-3 mt-3 wow fadeIn" data-wow-delay="0.1s">
        <h2 class="display-12 text-center text-white">Espace CHAT</h2>
      
        <div class="container py-3">
          <div class="row g-3">
            <div class="col-lg-9">
              <div class="panel panel-default" style="margin-top:20px">
                <div class="panel-body">
                  <h2 class="display-4 text-white">Formulaire communautaire</h2>
                  <hr>
                  <h4 class="tt mb-3">Commentaire</h4>
                  <form name="frm" method="POST" action="chat.php">
  <input type="hidden" id="commentid" name="pcommentid" value="0">
  <div class="form-group">
    <label for="usr" class="fs-6">Écrire votre nom :</label>
    <input id="name" type="text" class="form-control form-control-sm" name="nom" required>
  </div>
  <div class="form-group">
    <label for="comment" class="fs-6">Rédigez votre question :</label>
    <textarea id="comment" class="form-control form-control-sm" rows="3" name="comment" required></textarea>
  </div>
  <input type="submit" id="butsave" name="save" class="btn btn-primary btn-sm" value="Envoyer">
</form>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-body">
                  <h4 class="tt mb-3">Répondre à la question</h4>
                  <table class="table table-sm" id="Mytable" style="background-color:#edfafa; border:0px; border-color: blue;"></table>
                  <body id="record">
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="modal-content">
                <div class="form-group">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="tt mb-3">Répondre à la question</h4>
                </div>
                <div>
                  <form name="frm1" method="post">
                    <input type="hidden" id="commentid" name="Rcommentid">
                    <div class="form-group">
                      <label for="tt" class="fs-6">Écrire votre nom :</label>
                      <input id="nrep" type="text" class="form-control form-control-sm" name="Rname" required>
                    </div>
                    <div class="form-group">
                      <label for="tt" class="fs-6">Rédigez votre réponse :</label>
                      <textarea class="form-control form-control-sm" rows="3" name="Rmsg" required></textarea>
                    </div>
                    <input type="button" id="resp" name="btnreply" class="btn btn-primary btn-sm" value="Envoyer" onclick="test()">
                  </form>
          
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        function verif() {
            if (document.getElementById("name").value=="") {
                alert("Tapez le name svp!!.");
                document.getElementById("name").focus();
                return false;
            }
            if (document.getElementById("comment").value=="") {
                alert("Tapez le commentaire svp!!.");
                document.getElementById("comment").focus();
                return false;
            }
          }
          function test() {
            if (document.getElementById("nrep").value=="") {
                alert("Tapez le name svp!!.");
                document.getElementById("nrep").focus();
                return false;
            }
            if (document.getElementById("resp").value=="") {
                alert("Tapez la réponse svp!!.");
                document.getElementById("resp").focus();
                return false;
            }
          }
      </script>
     

  <!-- footer End -->  
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
