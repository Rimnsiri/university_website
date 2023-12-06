<?php
// connexion avec le serveur (APACHE)
$username = "root";
$password = "";
$hostname = "localhost";
// enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// connection string with database
$dbhandle = mysqli_connect($hostname, $username, $password);
// connect with database
$selected = mysqli_select_db($dbhandle, "projet_js");

if (!$selected) {
    die("La sélection de la base de données a échoué: " . mysqli_error($dbhandle));
}

// Vérifier si le formulaire est soumis
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['role']) && isset($_POST['cle'])) {
    /* récupérer les données du formulaire en utilisant
    la valeur des attributs name comme clé
    */
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $cle = $_POST['cle'];

    // Vérification de la clé d'enseignant
    $result_cle = mysqli_query($dbhandle, "SELECT * FROM `enseignant` WHERE `cle` = '$cle'");
    if (mysqli_num_rows($result_cle) == 0) {
        die("Clé d'enseignant invalide!");
    }

    // définition de la requete + execution de la requete
    $result = mysqli_query($dbhandle, "INSERT INTO `etudiant1` (nom, prenom, mail, password, role) VALUES ('$nom', '$prenom', '$mail', '$password', '$role');");

    if ($result) {
        echo "Inscription effectuée avec succès!!";
    } else {
        echo "Échec lors de l'inscription!";
    }
}
?>