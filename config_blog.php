<link rel="stylesheet" href="./components/style/bootstrap.min.css">
<?php

require_once 'vendor/autoload.php';

function returnCnx()
{
    $host = 'localhost';
    $dbname = 'blog';
    $user = 'root';
    $password = '';
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
