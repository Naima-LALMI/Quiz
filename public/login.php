<?php
//Connection BDD
require __DIR__ . '/../congiguration/config.php';
?>

<?php
//Requete préparée pour la création d'un nvl utilisateur 
$sql = "INSERT INTO `utilisateur`(`nom`, `prenom`, `password`, `email`) VALUES (:nom, :prenom, :password, :email);";
$requete = $db->prepare($sql);
//Bindparam lie les variables à la requete
$requete->bindParam(':nom', $nom);
$requete->bindParam(':prenom', $prenom);
$requete->bindParam(':password', $password);
$requete->bindParam(':email', $email);
//  vérifier si on est en train d'afficher ou de traiter le formulaire
$enCoursDeTraitement = isset($_POST['email']);
if ($enCoursDeTraitement) {
    $email = htmlspecialchars($_POST['email']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $requete->execute(
        
    );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1 class="text-center">Quiz Assistantes dentaires </h1>
    <ul class="nav justify-content-center">
        <a class="nav-link" href="index.php">Accueil</a>
        <a class="nav-link" href="ajout_question.php">Formulaire</a>
        <a class="nav-link" href="login.php">Compte</a>
    </ul>
</body>
</html>
<h1>Formulaire de connexion</h1>
<form action="" method="post">
    <label>Votre nom :</label>
    <input name="nom" id="nom" type="text" />

    <label>Votre prénom :</label>
    <input name="prenom" id="prenom" type="text" /></p>

    <label>Votre email :</label>
    <input name="email" id="email" type="text" /></p>

    <label>Votre password :</label>
    <input name="password" id="password" type="texte" /></p>

    <button type="submit">Valider</button>
</form>


<?php
// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Bonjour, " . htmlspecialchars($_POST['nom']) . ".</p>";
    echo "<p>Tu es bien connecté.</p>";
}
?>