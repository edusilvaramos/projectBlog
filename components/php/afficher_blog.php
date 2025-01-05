<link rel="stylesheet" href="../style/bootstrap.min.css">
<?php
require_once("../../config_blog.php");
$db = returnCnx();

$id = $_GET['id'] ?? null;
// echo "ID: $id<br>";

if ($id == null) {
    $req = $db->query('SELECT ID, titre, date_billet, categorie, contenu FROM billets_blog ORDER BY ID DESC LIMIT 1');
    $lastPost = $req->fetch();
} else {

    $req = $db->query('SELECT ID, titre, date_billet, categorie, contenu FROM billets_blog WHERE ID = ' . $id);
    $lastPost = $req->fetch();
}

$postID = $lastPost['ID'];


$coments = $db->prepare('SELECT * FROM commentaires_blog WHERE ID = ? ORDER BY date_comment');
$coments->execute([$postID]);
$comentsPost = $coments->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($comentsPost);
// echo "</pre>";

$smarty->assign('lastPost', $lastPost);
$smarty->assign('comentsPost', $comentsPost);
$smarty->display('afficher_blog.tpl');
