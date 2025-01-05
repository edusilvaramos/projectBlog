<link rel="stylesheet" href="../style/bootstrap.min.css">
<?php

require_once("../../config_blog.php");

$db = returnCnx();

$req = $db->query('SELECT ID, titre, date_billet, categorie, contenu FROM billets_blog');
$postAll = $req->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($postAll);
// echo "</pre>";

$coments = $db->query('SELECT * FROM commentaires_blog ');
$comentsPost = $coments->fetchAll(PDO::FETCH_ASSOC);

$idCounts = [];
foreach ($comentsPost as $comment) {
    $id = $comment["ID"];
    if (isset($idCounts[$id])) {
        $idCounts[$id]++;
    } else {
        $idCounts[$id] = 1;
    }
}

// echo "<pre>";
// print_r($idCounts);
// echo "</pre>";

$smarty->assign('postAll', $postAll);
$smarty->assign('commentCounts', $idCounts);
$smarty->display('index_blog.tpl');


if (empty($postAll)) {
    echo '<div style="text-align: center; margin-top: 20px; color: #555;">
              <h1> <i class="bi bi-file-earmark-excel"></i> Oops! Aucun billet trouvé.</h1>
              <p>Il semble qu’il n’y ait rien à voir ici pour le moment.</p>
          </div>';
}
