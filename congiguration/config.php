<?php
// Paramètres de connexion à la base de données
//Constantes d'environnement
define('DB_HOST', 'localhost');  // Hôte de la base de données
define('DB_NAME', 'quiz_ad'); // Nom de la base de données
define('DB_USER', 'root'); // Utilisateur de la base de données
define('DB_PASS', ''); // Mot de passe de la base de données

// Autres configurations éventuelles
define('APP_NAME', 'Quiz Assistante Dentaire');

// DSN de connexion pour PDO
$dsn = "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST;

// Se connecter à la BBD
try {
    // Une instance de PDO
    $db = new PDO($dsn, DB_USER, DB_PASS);
    echo "On est connectés ";

    //envoyer les données en UTF8

    $db->exec("SET NAMES utf8");

    //On definit le mode de "fetch" par défaut
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Execution que si souci avec le try
} catch (PDOException $e) {
    die("erreur" . $e->getMessage());
}

//Ici on est connectés à la base 

// On peut recupere la liste des utilisateurs 
$sql = "SELECT * FROM `utilisateur`";
// On execute directement la requête
$requete = $db->query($sql);
var_dump($requete);
//On récupére les données (fetch ou fetchALl)
$user = $requete->fetch();
echo "<pre>";
print_r($user);
echo "</pre>";


//Ajouter un utilisateur 
// $sql = "INSERT INTO `utilisateur`(`nom`,`prenom`, `email`) VALUES ('Marin','Elisa','marin.elisa@exemple.com')";
// $requete = $db->query($sql);
// var_dump($requete);

//modifier un utilisateur 
$sql = "UPDATE `utilisateur` SET `email`='dupont.paul@exemple.com'  WHERE `id`=1";
$requete = $db->query($sql);
var_dump($requete);

//supprimer un utilisateur
$sql = "DELETE FROM `utilisateur` WHERE `id`=5";
$requete = $db->query($sql);
var_dump($requete);
