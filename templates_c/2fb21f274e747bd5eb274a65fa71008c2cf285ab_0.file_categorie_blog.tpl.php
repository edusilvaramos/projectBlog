<?php
/* Smarty version 5.4.3, created on 2025-01-03 16:11:39
  from 'file:categorie_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6777fe2ba214b7_79996285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fb21f274e747bd5eb274a65fa71008c2cf285ab' => 
    array (
      0 => 'categorie_blog.tpl',
      1 => 1735917023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6777fe2ba214b7_79996285 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/templates';
?>     <div class="mb-3">
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

                </div><?php }
}
