<?php
session_start(); // Démarrer la session
session_destroy(); // Détruire la session
header('Location: login.php'); // Rediriger l'utilisateur vers la page de connexion
exit; // Terminer l'exécution du script
mysqli_close($con); // Fermer la connexion à la base de données
?>