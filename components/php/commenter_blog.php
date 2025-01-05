<?php
require_once("../../config_blog.php");
$db = returnCnx();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : '';
    $comment = isset($_POST["comment"]) ? htmlspecialchars($_POST["comment"]) : '';
    $ID = isset($_POST["ID"]) ? intval($_POST["ID"]) : 0;

    try {
        $query = 'INSERT INTO commentaires_blog (nom, comment, ID)
                  VALUES (:nom, :comment, :ID)';
        $stmt = $db->prepare($query);
        $stmt->execute([
            ':nom' => $nom,
            ':comment' => $comment,
            ':ID' => $ID
        ]);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }


    header("Location: afficher_blog.php?id=" . $ID);
    exit();
}
