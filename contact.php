<?php
// Récupération des données du formulaire
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Validation des données
if ($name === "" || $email === "" || $message === "") {
  // Redirige l'utilisateur vers le formulaire avec un message d'erreur si les champs ne sont pas remplis
  header("Location: formulaire.php?error=missing_fields");
  exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // Redirige l'utilisateur vers le formulaire avec un message d'erreur si l'adresse email est invalide
  header("Location: formulaire.php?error=invalid_email");
  exit();
}

// Connexion à la base de données MySQL
$conn = mysqli_connect("localhost", "root", "", "projet_js");

// Vérification de la connexion
if (!$conn) {
  die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Insertion des données dans la table "messages"
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if (!mysqli_query($conn, $sql)) {
  // Redirige l'utilisateur vers le formulaire avec un message d'erreur si l'insertion a échoué
  header("Location: formulaire.php?error=insertion_failed");
  exit();
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);

// Redirige l'utilisateur vers une page de confirmation
header("Location: confirmation.php");
exit();

?>