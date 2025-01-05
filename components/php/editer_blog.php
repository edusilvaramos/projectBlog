<?php
require_once("../../config_blog.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titre = isset($_POST["titre"]) ? htmlspecialchars($_POST["titre"]) : '';
    $contenu = isset($_POST["contenu"]) ? htmlspecialchars($_POST["contenu"]) : '';
    $categorie = isset($_POST["categorie"]) ? htmlspecialchars($_POST["categorie"]) : '';
}

$db = returnCnx();
try {

    $query = 'INSERT INTO billets_blog (titre, contenu, categorie,date_billet)
              VALUES (:titre, :contenu, :categorie, :date_billet)';
    $stmt = $db->prepare($query);
    $stmt->execute([
        ':titre' => $titre,
        ':contenu' => $contenu,
        ':categorie' => $categorie,
        ':date_billet' => date('Y-m-d H:i'),
    ]);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

header("Location: afficher_blog.php");
