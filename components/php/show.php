<link rel="stylesheet" href="../style/bootstrap.min.css">
<?php
require_once("../../config_blog.php");
$roots = [
    'path' => '/classPHP/class/projectBlog/components/php/',
    'home' => '/classPHP/class/projectBlog/',
];

$smarty->assign('roots', $roots);
$smarty->assign('titre', 'Nouveau billet');
$smarty->display('edition_blog.tpl');
