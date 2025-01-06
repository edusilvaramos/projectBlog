<?php
/* Smarty version 5.4.3, created on 2025-01-05 17:06:12
  from 'file:afficher_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_677abc04a43c74_67438759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42cf74d8269c4d210b292c54ef133c5fda82977d' => 
    array (
      0 => 'afficher_blog.tpl',
      1 => 1736096599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_677abc04a43c74_67438759 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/classPHP/class/projectBlog/templates';
?><html>
  <head>
    <title>Blog</title>
    <?php echo '<script'; ?>
 type="text/javascript">
      function afficherFormulaire() {
        document.getElementById("formComent").style.display = "block";
      }
    <?php echo '</script'; ?>
>
  </head>
  <body>
    <a href="index_blog.php">
      <h1 class="title m-3"><strong>MON Blog</strong></h1>
    </a>
    <div class="container mt-5">
      <div class="card mx-auto" style="max-width: 600px">
        <div class="card-body">
          <h1 class="mb-2"><?php echo $_smarty_tpl->getValue('lastPost')['titre'];?>
</h1>
          <small class="date-billet"><?php echo $_smarty_tpl->getValue('lastPost')['date_billet'];?>
</small><br />
          <small>Categorie : <?php echo $_smarty_tpl->getValue('lastPost')['categorie'];?>
</small>
          <hr />
          <p class="lead"><?php echo $_smarty_tpl->getValue('lastPost')['contenu'];?>
</p>
        </div>
      </div>
      <!-- Section des commentaires -->
      <div class="card mx-auto mt-4" style="max-width: 600px">
        <div class="card-body">
          <h2>Commentaires</h2>
          <hr />

          <ul class="list-group mb-4">
            <?php
$__section_comment_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('comentsPost')) ? count($_loop) : max(0, (int) $_loop));
$__section_comment_0_total = $__section_comment_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_comment'] = new \Smarty\Variable(array());
if ($__section_comment_0_total !== 0) {
for ($__section_comment_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_comment']->value['index'] = 0; $__section_comment_0_iteration <= $__section_comment_0_total; $__section_comment_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_comment']->value['index']++){
?>
            <li class="list-group-item">
              <strong><?php echo $_smarty_tpl->getValue('comentsPost')[($_smarty_tpl->getValue('__smarty_section_comment')['index'] ?? null)]['nom'];?>
</strong>
              (<em class="date-billet"><?php echo $_smarty_tpl->getValue('comentsPost')[($_smarty_tpl->getValue('__smarty_section_comment')['index'] ?? null)]['date_comment'];?>
</em
              >):
              <p class="mt-1"><?php echo $_smarty_tpl->getValue('comentsPost')[($_smarty_tpl->getValue('__smarty_section_comment')['index'] ?? null)]['comment'];?>
</p>
            </li>
            <?php
}
}
?>
          </ul>
          <hr />
          <!-- Lien pour afficher le formulaire -->
          <p>
            <a
              href="javascript:void(0);"
              onclick="afficherFormulaire()"
              class="btn btn-link"
              >Ajouter un commentaire</a
            >
          </p>
        </div>
      </div>

      <!-- Formulaire caché -->
      <div
        id="formComent"
        class="card mx-auto p-4 mt-4 shadow bg-light"
        style="display: none; max-width: 600px"
      >
        <form method="POST" action="../php/commenter_blog.php">
          <input type="hidden" name="ID" value="<?php echo $_smarty_tpl->getValue('lastPost')['ID'];?>
" />
          <div class="mb-3">
            <label for="nom" class="form-label">Nom:</label>
            <input
              type="text"
              name="nom"
              id="nom"
              class="form-control"
              placeholder="Entrez votre nom"
              required
            />
          </div>
          <div class="mb-3">
            <label for="comment" class="form-label">Commentaire:</label>
            <textarea
              name="comment"
              id="comment"
              class="form-control"
              rows="4"
              placeholder="Entrez votre commentaire"
              required
            ></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </div>
        </form>
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
        const originalDate = element.textContent.trim(); // Obtém o conteúdo do elemento
        if (originalDate) {
          const formattedDate = formatDate(originalDate);
          element.textContent = formattedDate; // Atualiza o conteúdo do elemento
        }
      });
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
