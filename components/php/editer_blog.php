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
    date_default_timezone_set('Europe/Paris');
    $stmt->execute([
        ':titre' => $titre,
        ':contenu' => $contenu,
        ':categorie' => $categorie,
        ':date_billet' => date('Y-m-d H:i'),

    ]);
    // Obter o ID do post recém-criado
    $billetId = $db->lastInsertId();


    // ------------ Upload de la photo ------------
    $imageDir = '/Applications/MAMP/htdocs/classPHP/class/projectBlog/components/image/';
    // Verifica se o arquivo foi enviado
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $tmpFile = $_FILES['image']['tmp_name'];
        $fileName = basename($_FILES['image']['name']);
        $imagePath = $imageDir . $fileName;
        // Verifica permissões e move o arquivo
        if (move_uploaded_file($tmpFile, $imagePath)) {
            echo "Arquivo enviado com sucesso!";
            // Inserir o caminho da imagem na tabela images_blog
            $queryImage = 'INSERT INTO images_blog (billet_id, image_path) VALUES (:billet_id, :image_path)';
            $stmtImage = $db->prepare($queryImage);
            $stmtImage->execute([
                ':billet_id' => $billetId,
                ':image_path' => $fileName,
            ]);

            echo "Post adicionado com sucesso!";
        } else {
            echo "Erro ao salvar o arquivo.";
        }
    } else {
        echo "Nenhum arquivo enviado ou erro no upload.";
    }
    // ------------ Upload de la photo ------------

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

header("Location: afficher_blog.php");
