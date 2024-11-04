CREATE TABLE utilisateur (
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE questions (
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,    question TEXT NOT NULL,
    option_a VARCHAR(255) NOT NULL,
    option_b VARCHAR(255) NOT NULL,
    option_c VARCHAR(255) NOT NULL, 
    option_d VARCHAR(255) NOT NULL,
    bonne_reponse CHAR(1) NOT NULL  -- 'A', 'B', 'C', ou 'D
);

CREATE TABLE questions_utilisateur (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,  -- Identifiant unique pour chaque enregistrement dans la table
    utilisateur_id INT NOT NULL,                  -- Identifiant de l'utilisateur qui a ajouté la question
    question_id INT NOT NULL,                     -- Identifiant de la question ajoutée par l'utilisateur
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Date et heure d'ajout de la question, remplie automatiquement
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateur(id), -- Clé étrangère reliant utilisateur_id à l'id de la table utilisateur
    FOREIGN KEY (question_id) REFERENCES questions(id)  -- Clé étrangère reliant question_id à l'id de la table questions
);
