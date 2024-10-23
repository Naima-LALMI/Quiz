# Quiz pour Assistantes Dentaires

Ce projet est une application web de quiz destinée aux assistantes dentaires. Elle permet de tester et d'améliorer leurs connaissances sur des sujets variés de la profession à travers un système de questions à choix multiples (QCM).

## Fonctionnalités
* Système de quiz avec des questions à choix multiples
* Gestion des utilisateurs et de leurs droits
* Interface simple et responsive grâce à Bootstrap
* Gestion dynamique des questions et des réponses via une base de données

## Technologies Utilisées

### Langages et Frameworks

* PHP : Langage backend pour la gestion des quiz et du serveur
* HTML / CSS : Pour la structure et le style des pages
* JavaScript : Pour ajouter des interactions dynamiques au niveau de l'utilisateur
* Bootstrap : Framework CSS pour rendre l'application responsive et agréable visuellement

### Base de Données

* SGBD : MySQL (via XAMPP)
* Requêtes SQL : Pour gérer les tables des questions, réponses et utilisateurs

## Installation et Déploiement

1. Cloner le repository
git clone https://github.com/ton-utilisateur/quiz-assistantes-dentaires.git

2. Installer les dépendances
(Si tu utilises Composer pour gérer les dépendances PHP, précise ici la commande pour l'installation)

3. Lancer XAMPP

Ouvrir XAMPP et démarrer les services **Apache** et **MySQL**.

4. Créer la base de données
Exécuter le script SQL fourni dans le dossier /sql pour créer les tables.

5. Configurer la base de données
Modifier le fichier config.php pour ajouter vos identifiants de base de données :

define('DB_HOST', 'localhost');
define('DB_NAME', 'nom_de_la_base');
define('DB_USER', 'utilisateur');
define('DB_PASS', 'mot_de_passe');

6. Accéder à l'application
Placer le dossier du projet dans le répertoire **htdocs** de XAMPP. [Accéder à l'application via le navigateur à l'adresse :](http://localhost/quiz-ad) 

7. Utilisation

* Les utilisateurs pourront sélectionner un quiz, répondre aux questions, et recevoir leur score à la fin.