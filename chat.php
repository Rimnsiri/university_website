<?php
// informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_js";

// création de la connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// récupération des données du formulaire
$nom = $_POST['nom'];
$comment = $_POST['comment'];

// requête SQL préparée pour insérer les données dans la table "commentaires"
$stmt = $conn->prepare("INSERT INTO commentaires (nom, comment) VALUES (?, ?)");
$stmt->bind_param("ss", $nom, $comment);

// exécution de la requête SQL préparée
if ($stmt->execute()) {
    echo "Les données ont été insérées avec succès.";
} else {
    echo "Erreur : " . $stmt->error;
}

// fermeture de la connexion à la base de données
$stmt->close();
$conn->close();
?>