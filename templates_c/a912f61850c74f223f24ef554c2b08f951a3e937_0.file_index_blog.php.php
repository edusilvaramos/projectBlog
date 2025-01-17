<?php
/* Smarty version 5.4.3, created on 2025-01-16 23:16:07
  from 'file:index_blog.php' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678985278e7883_41517285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a912f61850c74f223f24ef554c2b08f951a3e937' => 
    array (
      0 => 'index_blog.php',
      1 => 1737053233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678985278e7883_41517285 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/components/php';
?><link rel="stylesheet" href="../style/bootstrap.min.css">
<?php echo '<?php'; ?>


require_once("../../config_blog.php");


$categoryFilter = $_GET['categorie'] ?? null;
// echo "ID: $categoryFilter<br>";
$titleSearch = $_GET['title'] ?? null;
// echo "titleSearch: $titleSearch<br>";

if ($categoryFilter === null || $categoryFilter === "all") {
    $db = returnCnx();
    $req = $db->query('SELECT ID, titre, date_billet, categorie, contenu FROM billets_blog');
    $postAll = $req->fetchAll(PDO::FETCH_ASSOC);
    $categoryFilter === null;
    // echo "<pre>";
    // print_r($postAll);
    // echo "</pre>";

    if ($titleSearch !== null) {
        $db = returnCnx();
        $req = $db->query('SELECT ID, titre, date_billet, categorie, contenu FROM billets_blog where titre = "' . $titleSearch . '"');
        $postAll = $req->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($postAll);
        // echo "</pre>";
    }
} else {
    $db = returnCnx();
    $req = $db->query('SELECT ID, titre, date_billet, categorie, contenu FROM billets_blog where categorie = "' . $categoryFilter . '"');
    $postAll = $req->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($postAll);
    // echo "</pre>";
}


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
<?php }
}
