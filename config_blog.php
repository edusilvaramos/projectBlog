<link rel="stylesheet" href="./components/style/bootstrap.min.css">
<?php

require_once 'vendor/autoload.php';

function returnCnx()
{
    $host = 'localhost';
    $dbname = 'blog';
    $user = 'Eduardo';
    $password = 'MyBlog';
    try {
        $connexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // to show the result in the console
        echo "<script>console.log('Connexion OK');</script>";
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
    return $connexion;
}

//--------------------  Smarty -------------------------

$smarty = new Smarty\Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates/');
$smarty->setCompileDir(__DIR__ . '/templates_c/');
$smarty->setCacheDir(__DIR__ . '/cache/');

//--------------------  DB -------------------------


// user db blog

// CREATE USER 'Eduardo'@'localhost' IDENTIFIED BY 'MyBlog';
// GRANT ALL PRIVILEGES ON blog.* TO 'Eduardo'@'localhost';



// $db = returnCnx();

// $query = "INSERT INTO `billets_blog` ( `titre`, `contenu`, `annonce`, `date_billet`, `categorie`) VALUES
// ( 'Les bienfaits du yoga', 'Découvrez pourquoi le yoga est excellent pour votre santé mentale et physique.', 'Les bienfaits du yoga pour le bien-être.', '2025-01-01 10:00:00', 'Santé'),
// ( 'Recette de quiche lorraine', 'Une recette simple et délicieuse pour préparer une quiche lorraine traditionnelle.', 'Apprenez à préparer une quiche lorraine parfaite.', '2025-01-02 14:30:00', 'Cuisine'),
// ( 'Top 5 des livres pour entrepreneurs', 'Voici une liste des meilleurs livres pour apprendre à entreprendre.', 'Les livres indispensables pour les entrepreneurs.', '2025-01-03 09:15:00', 'Business'),
// ( 'Les secrets d’une photo réussie', 'Conseils et astuces pour améliorer vos compétences en photographie.', 'Comment réussir ses photos comme un pro.', '2025-01-04 17:45:00', 'Photographie'),
// ( 'Voyager en solo : conseils pratiques', 'Tout ce que vous devez savoir pour voyager seul en toute sécurité.', 'Voyager seul n’a jamais été aussi facile.', '2025-01-05 12:00:00', 'Voyage'),
// ( 'Les bases du codage pour débutants', 'Un guide simple pour commencer à coder dès aujourd’hui.', 'Apprenez les bases du codage en quelques étapes.', '2025-01-06 08:30:00', 'Informatique'),
// ( 'Les tendances mode 2025', 'Découvrez les styles qui domineront cette année.', 'Tout ce qu’il faut savoir sur la mode 2025.', '2025-01-07 15:20:00', 'Mode'),
// ( 'Organiser un mariage parfait', 'Des conseils pour planifier un mariage de rêve sans stress.', 'Planifiez votre mariage sans stress.', '2025-01-08 10:45:00', 'Événements'),
// ( 'Les meilleurs exercices pour débuter le sport', 'Voici une sélection d’exercices parfaits pour les débutants.', 'Commencez votre parcours sportif dès aujourd’hui.', '2025-01-09 18:00:00', 'Sport'),
// ( 'Les effets de la méditation sur le cerveau', 'La science explique comment la méditation peut transformer votre esprit.', 'Méditation et cerveau : ce que dit la science.', '2025-01-10 16:30:00', 'Bien-être')";


// $stmt = $db->prepare($query);
// $stmt->execute();
