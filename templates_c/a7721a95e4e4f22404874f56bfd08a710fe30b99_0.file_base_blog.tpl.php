<?php
/* Smarty version 5.4.3, created on 2025-01-20 10:47:59
  from 'file:base_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678e29dfe288c4_21350890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7721a95e4e4f22404874f56bfd08a710fe30b99' => 
    array (
      0 => 'base_blog.tpl',
      1 => 1737370069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678e29dfe288c4_21350890 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/classPHP/class/projectBlog/templates';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  <?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <title><?php echo $_smarty_tpl->getValue('titre');?>
</title>
</head>
<body class="w-100">
  <nav class="navbar navbar-expand-lg bg-light w-100" data-bs-theme="light"
    style="font-family: 'Playfair Display', serif; font-size: 1.5rem;">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo $_smarty_tpl->getValue('roots')['home'];?>
index_blog.php">
      <img src="https://cdn.logojoy.com/wp-content/uploads/2018/05/30164225/572.png" class="img-fluid d-block d-sm-none" style="height: 4rem; border-radius: 100%;" alt="Logo">
      <img src="https://cdn.logojoy.com/wp-content/uploads/2018/05/30164225/572.png" class="img-fluid d-none d-sm-block" style="height: 6rem; border-radius: 100%;" alt="Logo">
      
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
        aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo $_smarty_tpl->getValue('roots')['home'];?>
index_blog.php">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('roots')['path'];?>
show.php">Nouveau Billet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('roots')['path'];?>
galerie_blog.php">Galerie de photos</a>
          </li>
        </ul>
        <?php if ($_smarty_tpl->getValue('current_page') == 'home') {?>
          <form class="d-flex " action="<?php echo $_smarty_tpl->getValue('roots')['home'];?>
index_blog.php" method="get">
              <input class="form-control me-sm-2" type="search" placeholder="Chercher pur titre" name="title">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Chercher</button>
          </form>
      <?php }?>
      
      </div>
    </div>
</nav>


<?php }
}
