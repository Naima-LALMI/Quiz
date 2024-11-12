<?php
//Connection BDD 
require __DIR__ .'/../congiguration/config.php';

?>

<?php
//Faire la requête préparer pour la creation d'une nouvelle question avec ses réponses 
$sql = "INSERT INTO `questions`(`question`, `option_a`, `option_b`, `option_c`, `option_d`, `bonne_reponse`) VALUES (:question, :option_a, :option_b, :option_c, :option_d, :bonne_reponse)";
$requete = $db->prepare($sql);

//Liaison avec les paramétres et les variables 
$requete->bindParam(':question', $question);
$requete->bindParam(':option_a',$option_a);
$requete->bindParam(':option_b',$option_b);
$requete->bindParam(':option_c',$option_c);
$requete->bindParam(':option_d',$option_d);
$requete->bindParam(':bonne_reponse',$reponse);

//Définiton des valeurs des variables 
$enCoursDeTraitement = isset($_POST['question']);
//Verifie que le formulaire à été rempli avant d'executer la requete SQL
if ($enCoursDeTraitement) {
$question = htmlspecialchars($_POST['question']);
$option_a = htmlspecialchars($_POST['option_a']);
$option_b = htmlspecialchars($_POST['option_b']);
$option_c = htmlspecialchars($_POST['option_c']);
$option_d = htmlspecialchars($_POST['option_d']);
$reponse = htmlspecialchars($_POST['bonne_reponse']);

//executer la requête
$requete->execute();
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
    <br>
    <?php echo "Créer tes propres questions afin de nous améliorer tous ensemble, à toi de jouer ! " ; ?>
    <br>

    <form action="" method="post">
    <label for="question">Votre question : </label>
    <input type="text" id="question" name="question">

    <label for="option_a"> Réponse A :  </label>
    <input type="text" id="option_a" name="option_a">

    <label for="option_b"> Réponse B :  </label>
    <input type="text" id="option_b" name="option_b">

    <label for="option_c"> Réponse C : </label>
    <input type="text" id="option_c" name="option_c">

    <label for="option_d"> Réponse D : </label>
    <input type="text" id="option_d" name="option_d">

    <label for="bonne_reponse"> La réponse : </label>
    <select name="bonne_reponse" id="bonne_reponse">
        <option value ="A">A</option>
        <option value ="B">B</option>
        <option value ="C">C</option>
        <option value ="D">D</option>
    </select>

    <button type="submit">Envoyer</button>

    </form>

    
</html>