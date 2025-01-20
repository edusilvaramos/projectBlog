<link rel="stylesheet" href="../style/bootstrap.min.css">
<?php
require_once("../../config_blog.php");

$photoPath = '/Applications/MAMP/htdocs/classPHP/class/projectBlog/components/image/';
$roots = [
    'path' => '/classPHP/class/projectBlog/components/php/',
    'home' => '/classPHP/class/projectBlog/',
    'photoPath' =>  '../image/'
];

$db = returnCnx();

$image = $db->query('SELECT * FROM images_blog');
$image->execute();
$imagePost = $image->fetchAll(PDO::FETCH_ASSOC);


// echo "<pre>";
// print_r($imagePost);
// echo "</pre>";



$technologie = '../image/Screenshot.png';

$smarty->assign('technologie', $technologie);
$smarty->assign('roots', $roots);
$smarty->assign('imagePost', $imagePost);
$roots = [
    'path' => '/classPHP/class/projectBlog/components/php/',
    'home' => '/classPHP/class/projectBlog/',
];
$smarty->display('galerie_blog.tpl');
