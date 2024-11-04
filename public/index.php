<?php
//Connection BDD
require __DIR__ . '/../congiguration/config.php'; 

//On récupere la liste des questions
//On fait la requete 
$sql ="SELECT `question` FROM `questions`";
//On execute la requete
$requete= $db->query($sql);
//On recupere les données de la requete
$listequestion = $requete->fetchAll();
// echo "<pre>";
// var_dump($listequestion);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
<h1>Quiz Assistantes dentaires </h1>
<a href="index.php">Accueil</a>
<a href="ajout_question.php">Formulaire</a>
<a href="login.php">Compte</a>
<br>
<?php echo "Bienvenue ! Testez vos connaissances sur les soins dentaires. Bonne chance !";?>
<br>

<p>Liste des articles</p>
<?php foreach($listequestion as $question):?>
<article>
    <li> <?php echo  $question ["question"] ?></li>
</article>
<?php 
    endforeach;
?>




  
<footer>&copy;2024</footer>
</body>
</html>