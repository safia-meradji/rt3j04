<?php
// Connexion à la base de données
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "utilisateurs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Récupération des utilisateurs
$query = "SELECT * FROM utilisateurs";
$result = $conn->query($query);

// Création d'un tableau associatif pour stocker les utilisateurs
$users = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $users[] = $row;
  }
}

// Fermeture de la connexion à la base de données
$conn->close();

// Affichage des utilisateurs au format JSON
header('Content-Type: application/json');
echo json_encode($users);
?>
