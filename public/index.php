<?php
//Connection BDD
require __DIR__ . '/../congiguration/config.php';

//On récupere la liste des questions
//On fait la requete 
$sql = "SELECT `question` FROM `questions`";
//On execute la requete
$requete = $db->query($sql);
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>

<body>
    <h1 class="text-center">Quiz Assistantes dentaires </h1>
    <ul class="nav justify-content-center">
        <a class="nav-link" href="index.php">Accueil</a>
        <a class="nav-link" href="ajout_question.php">Formulaire</a>
        <a class="nav-link" href="login.php">Compte</a>
    </ul>
    <br>
    <?php echo "Bienvenue ! Testez vos connaissances sur les soins dentaires. Bonne chance !"; ?>
    <br>

    <p>Liste des articles</p>
    <?php foreach ($listequestion as $question): ?>
        <article>
            <div class="card mb-3" style="width: 18rem;">
                <div class="card-body">
                    <li> <?php echo  $question["question"] ?></li>
                </div>
            </div>
        </article>
    <?php
    endforeach;
    ?>

    <button type="button"></button>





    <footer>&copy;2024</footer>
</body>

</html>