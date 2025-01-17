<link rel="stylesheet" href="../style/bootstrap.min.css">
<?php
require_once("../../config_blog.php");

$smarty->assign('image', '../image/logo.png');

$smarty->display('base_blog.tpl');
