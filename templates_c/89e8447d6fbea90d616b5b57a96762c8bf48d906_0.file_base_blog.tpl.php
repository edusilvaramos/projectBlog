<?php
/* Smarty version 5.4.3, created on 2025-01-17 16:33:25
  from 'file:base_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678a78453b7232_72654469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89e8447d6fbea90d616b5b57a96762c8bf48d906' => 
    array (
      0 => 'base_blog.tpl',
      1 => 1737128003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678a78453b7232_72654469 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/templates';
?><nav class="navbar navbar-expand-lg bg-light w-100" data-bs-theme="light" style="font-family: 'Playfair Display', serif; font-size: 1.5rem;" >
  <div class="container-fluid">
    <a class="navbar-brand" href="index_blog.php">
      <img src="https://cdn.logojoy.com/wp-content/uploads/2018/05/30164225/572.png" class="img" style=" height: 6rem;
  border-radius: 100%;" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
      aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index_blog.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="show.php">Nouveau Billet</a>
        </li>
      </ul>
      <form class="d-flex" action="index_blog.php" method="get">
        <input class="form-control me-sm-2" type="search" placeholder="Chercher pur titre" name="title">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Chercher</button>
      </form>
    </div>
  </div>
</nav>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"><?php }
}
