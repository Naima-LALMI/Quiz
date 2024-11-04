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
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];

    $requete->execute(
        
    );
}

?>
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