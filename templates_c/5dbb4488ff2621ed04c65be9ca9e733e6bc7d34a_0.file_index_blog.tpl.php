<?php
/* Smarty version 5.4.3, created on 2025-01-04 19:56:10
  from 'file:index_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6779844a609d27_89404364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dbb4488ff2621ed04c65be9ca9e733e6bc7d34a' => 
    array (
      0 => 'index_blog.tpl',
      1 => 1736016831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6779844a609d27_89404364 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/templates';
?><!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <title>MON Blog</title>
  </head>
  <body>
    <div class="d-flex justify-content-between align-items-center">
      <a href="index_blog.php">
        <h1 class="title m-3"><strong>MON Blog</strong></h1>
      </a>
      <a href="show.php">
        <h4 class="title m-3"><strong>Nouveau Billet</strong></h4>
      </a>
    </div>
    <div class="row">
      <div class="col-4 w-25 p-5">
        <label for="categorie" class="form-label">
          Sélectionnez une catégorie :</label
        >
        <ul
          id="categorie"
          class="card text-white bg-secondary p-2"
          name="categorie"
          style="list-style: none; padding: 0; margin: 0"
          required
        >
          <li value="technologie">⚙️ Technologie</li>
          <li value="voyages">🌍 Voyages</li>
          <li value="art-design">🎨 Art et Design</li>
          <li value="livres">📚 Livres et Littérature</li>
          <li value="jeux">🎮 Jeux</li>
          <li value="cuisine">🍳 Cuisine et Gastronomie</li>
          <li value="sante">🧘 Santé et Bien-être</li>
          <li value="fitness">🏋️‍♂️ Fitness</li>
          <li value="photographie">📸 Photographie</li>
          <li value="musique">🎶 Musique</li>
          <li value="developpement-web">🖥️ Développement Web</li>
          <li value="carriere">💼 Carrière et Entreprises</li>
          <li value="tutoriels">💡 Conseils et Tutoriels</li>
          <li value="programmation">👨‍💻 Programmation</li>
          <li value="diy">🛠️ DIY (Fait-Maison)</li>
          <li value="automobile">🚗 Automobile</li>
          <li value="cinema-series">🎥 Cinéma et Séries</li>
          <li value="animaux">🐾 Animaux et Nature</li>
          <li value="jardinage">🌱 Jardinage</li>
          <li value="reflexions">💬 Réflexions et Pensées</li>
        </ul>
      </div>
      <div class="col mb-3 mt-5">
        <div class="container mt-5">
          <?php
$__section_cardBllet_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('postAll')) ? count($_loop) : max(0, (int) $_loop));
$__section_cardBllet_0_total = $__section_cardBllet_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cardBllet'] = new \Smarty\Variable(array());
if ($__section_cardBllet_0_total !== 0) {
for ($__section_cardBllet_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cardBllet']->value['index'] = 0; $__section_cardBllet_0_iteration <= $__section_cardBllet_0_total; $__section_cardBllet_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cardBllet']->value['index']++){
?>
          <article class="card mx-auto mb-3" style="max-width: 700px">
            <div
              class="card-body"
              style="
                cursor: pointer;
                padding: 20px;
                transition: background-color 0.3s;
              "
              onmouseover="this.style.backgroundColor='#dcdcdc';"
              onmouseout="this.style.backgroundColor='#f0f0';"
              onclick="window.location.href='afficher_blog.php?id=<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID'];?>
';"
            >
              <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">
                  <strong><?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['titre'];?>
</strong>
                </h3>
                <h5
                  class="card-subtitle mb-2 text-muted date-billet"
                  data-date="<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['date_billet'];?>
"
                ></h5>
              </div>

              <h5 class="card-subtitle mb-2 text-muted">
                Categorie : <?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['categorie'];?>

              </h5>
              <p class="card-text mt-2"><?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['contenu'];?>
</p>

              <?php if ((true && (true && null !== ($_smarty_tpl->getValue('commentCounts')[$_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID']] ?? null)))) {?>
              <?php echo $_smarty_tpl->getValue('commentCounts')[$_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID']];?>
 <?php } else { ?> 0 <?php }?>
              <i class="bi bi-chat-left-dots"></i>
            </div>
          </article>
          <?php
}
}
?>
        </div>
      </div>
    </div>
    <?php echo '<script'; ?>
>
      function formatDate(dateString) {
        const options = {
          day: "2-digit",
          month: "long",
          year: "numeric",
          hour: "2-digit",
          minute: "2-digit",
        };
        const date = new Date(dateString);
        return date.toLocaleDateString("fr-FR", options);
      }

      document.querySelectorAll(".date-billet").forEach((element) => {
        const originalDate = element.getAttribute("data-date");
        if (originalDate) {
          element.textContent = formatDate(originalDate);
        }
      });
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
