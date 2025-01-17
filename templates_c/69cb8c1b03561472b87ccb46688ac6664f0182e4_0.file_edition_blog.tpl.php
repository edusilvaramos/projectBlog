<?php
/* Smarty version 5.4.3, created on 2025-01-17 16:34:50
  from 'file:edition_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678a789ac9cd97_06343222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69cb8c1b03561472b87ccb46688ac6664f0182e4' => 
    array (
      0 => 'edition_blog.tpl',
      1 => 1737128089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_blog.tpl' => 1,
  ),
))) {
function content_678a789ac9cd97_06343222 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/templates';
?><html>
<head>
  <title><?php echo $_smarty_tpl->getValue('titre');?>
</title>
  <style>
    h1 {
      font-family: sans-serif;
      font-size: 20px;
      margin-bottom: 20px;
    }

    body,
    html {
      height: 100%;
      margin: 0;
    }
  </style>
</head>

<body style="font-family: 'Playfair Display', serif;" >
<?php $_smarty_tpl->renderSubTemplate("file:base_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <div class="d-flex justify-content-center mt-5 vh-100">
    <div class="container">
      <h1 class="text-center" style="font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: bold; color: #bababa; text-align: center; text-transform: uppercase; letter-spacing: 2px; line-height: 1.2; margin-bottom: 3rem; margin-top: 3rem;">Nouveau Billet</h1>
      <form method="post" action="editer_blog.php" class="shadow p-4 rounded bg-light w-75 mx-auto" enctype="multipart/form-data"  >
        <div class="mb-3">
          <label for="titre" class="form-label">Titre :</label>
          <input id="titre" name="titre" type="text" class="form-control" placeholder="Entrez le titre" required />
        </div>
        <div class="mb-3">
          <label for="contenu" class="form-label">Contenu :</label>
          <textarea id="contenu" name="contenu" rows="6" class="form-control" placeholder="Entrez le contenu"
            required></textarea>
        </div>
        <div class="mb-3">
          <label for="categorie" class="form-label">Catégorie :</label>

          <select id="categorie" class="form-select" name="categorie" required>
            <option disabled selected></option>
            <option value="technologie">⚙️ Technologie</option>
            <option value="voyages">🌍 Voyages</option>
            <option value="art-design">🎨 Art et Design</option>
            <option value="livres">📚 Livres et Littérature</option>
            <option value="jeux">🎮 Jeux</option>
            <option value="cuisine">🍳 Cuisine et Gastronomie</option>
            <option value="sante">🧘 Santé et Bien-être</option>
            <option value="fitness">🏋️‍♂️ Fitness</option>
            <option value="photographie">📸 Photographie</option>
            <option value="musique">🎶 Musique</option>
            <option value="developpement-web">🖥️ Développement Web</option>
            <option value="carriere">💼 Carrière et Entreprises</option>
            <option value="tutoriels">💡 Conseils et Tutoriels</option>
            <option value="programmation">👨‍💻 Programmation</option>
            <option value="diy">🛠️ DIY (Fait-Maison)</option>
            <option value="automobile">🚗 Automobile</option>
            <option value="cinema-series">🎥 Cinéma et Séries</option>
            <option value="animaux">🐾 Animaux et Nature</option>
            <option value="jardinage">🌱 Jardinage</option>
            <option value="reflexions">💬 Réflexions et Pensées</option>
          </select>
        </div>
        <div class="mt-1 mb-3">
        <label for="formFile" class="form-label mt-1 mb-1">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="image">
      </div>
        <div class="text-center">
          <button name="submit" type="submit" class="btn btn-primary w-50">
            Publier
          </button>
        </div>
      </form>
    </div>
  </div>

  
</body>

</html><?php }
}
