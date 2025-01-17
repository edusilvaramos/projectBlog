<link rel="stylesheet" href="../style/bootstrap.min.css">
<?php

require_once("../../config_blog.php");


$categoryFilter = $_GET['categorie'] ?? null;
// echo "ID: $categoryFilter<br>";
$titleSearch = $_GET['title'] ?? null;
// echo "titleSearch: $titleSearch<br>";

$db = returnCnx();
$query = 'SELECT ID, titre, date_billet, categorie, contenu FROM billets_blog';
$params = [];

// Filtrando por categoria, se necessário
if ($categoryFilter !== null && $categoryFilter !== "all") {
    $query .= ' WHERE categorie = :category';
    $params[':category'] = $categoryFilter;
}

// Filtrando por título, se necessário
if ($titleSearch !== null) {
    $query .= (strpos($query, 'WHERE') !== false ? ' AND' : ' WHERE') . ' titre LIKE LOWER(:title)
';
    $params[':title'] = '%' . $titleSearch . '%';
}

// Preparando e executando a consulta
$req = $db->prepare($query);
$req->execute($params);

// Obtendo os resultados
$postAll = $req->fetchAll(PDO::FETCH_ASSOC);

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

$category = $db->query('SELECT DISTINCT categorie FROM billets_blog');
$category->execute();
$categoryPost = $category->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($categoryPost);
// echo "</pre>";
$smarty->assign('categoryPost', $categoryPost);
$smarty->assign('postAll', $postAll);
$smarty->assign('commentCounts', $idCounts);
$smarty->display('index_blog.tpl');



if (empty($postAll)) {
    echo '<div style="text-align: center; margin-top: 20px; color: #555;">
              <h1> <i class="bi bi-file-earmark-excel"></i> Oops! Aucun billet trouvé.</h1>
              <p>Il semble qu’il n’y ait rien à voir ici pour le moment.</p>
          </div>';
}
