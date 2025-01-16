<?php
/* Smarty version 5.4.3, created on 2025-01-16 15:57:42
  from 'file:base_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67892c76d0b500_85619913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7721a95e4e4f22404874f56bfd08a710fe30b99' => 
    array (
      0 => 'base_blog.tpl',
      1 => 1737043059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67892c76d0b500_85619913 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/classPHP/class/projectBlog/templates';
?><nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
    <div class="container-fluid">

        <a class="navbar-brand" href="index_blog.php">MON Blog</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
            aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="show.php">Nouveau Billet</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Photos</a>
            </li>
            </ul>
                <form class="d-flex" action="index_blog.php" method="get">
                <input class="form-control me-sm-2" type="search" placeholder="Chercher pur titre" name="title">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Chercher</button>
            </form>
        </div>
    </div>
</nav><?php }
}
