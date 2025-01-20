<?php
/* Smarty version 5.4.3, created on 2025-01-19 20:05:39
  from 'file:afficher_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678d5b1345c454_67087444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42cf74d8269c4d210b292c54ef133c5fda82977d' => 
    array (
      0 => 'afficher_blog.tpl',
      1 => 1737316627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_blog.tpl' => 1,
  ),
))) {
function content_678d5b1345c454_67087444 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/classPHP/class/projectBlog/templates';
?>  <?php $_smarty_tpl->renderSubTemplate("file:base_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?><html>
  <h1 class="mb-2"
    style="font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: bold; color: #bababa; text-align: center; text-transform: uppercase; letter-spacing: 2px; line-height: 1.2; margin-bottom: 4rem; margin-top: 3rem;">
    <?php echo $_smarty_tpl->getValue('lastPost')['titre'];?>

  </h1>


  <img src="<?php echo $_smarty_tpl->getValue('imageUrl');?>
" alt="Descrição da Imagem" class="img-fluid d-none d-sm-block"
    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #111111; z-index: -1; filter: brightness(0.3);">

  <div class="container">
    <div class="card mx-auto" style="max-width: 50rem;">
      <div class="card-body text-white bg-dark">

        <div class="d-flex justify-content-between align-items-center ">
          <h1 class="mb-2"><?php echo $_smarty_tpl->getValue('lastPost')['titre'];?>
</h1>
          <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-trash "></i>
          </button>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content bg-secondary">
                <div class="modal-header">
                  <h5 class="modal-title text-white" id="exampleModalLabel">Vous voulez vraiment supprimer ce billet ?
                    les commentaires seront également supprimés
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-primary"
                    onclick="window.location.href='delete_blog.php?id=<?php echo $_smarty_tpl->getValue('lastPost')['ID'];?>
';">oui</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <small class="date-billet"><?php echo $_smarty_tpl->getValue('lastPost')['date_billet'];?>
</small><br />
        <small>Categorie : <?php echo $_smarty_tpl->getValue('lastPost')['categorie'];?>
</small>
        <hr />
        <p class="lead"><?php echo $_smarty_tpl->getValue('lastPost')['contenu'];?>
</p>
      </div>
    </div>
    <div class="card mx-auto mt-4" style="font-family: 'Playfair Display', serif; max-width: 50rem">
      <div class="card-body text-white bg-dark" style="font-family: 'Playfair Display', serif;">
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
</em>):
              <p class="mt-1"><?php echo $_smarty_tpl->getValue('comentsPost')[($_smarty_tpl->getValue('__smarty_section_comment')['index'] ?? null)]['comment'];?>
</p>
            </li>
          <?php
}
}
?>
        </ul>
        <hr />
        <p>
          <a href="javascript:void(0);" onclick="afficherFormulaire()" class="btn btn-link">Ajouter un commentaire</a>
        </p>
      </div>
    </div>

    <div id="formComent" class="card mx-auto p-4 mt-4 shadow bg-light"
      style="display: none; max-width: 600px; font-family: 'Playfair Display', serif;">
      <form method="POST" action="../php/commenter_blog.php">
        <input type="hidden" name="ID" value="<?php echo $_smarty_tpl->getValue('lastPost')['ID'];?>
" />
        <div class="mb-3">
          <label for="nom" class="form-label">Nom:</label>
          <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" required />
        </div>
        <div class="mb-3">
          <label for="comment" class="form-label">Commentaire:</label>
          <textarea name="comment" id="comment" class="form-control" rows="4" placeholder="Entrez votre commentaire"
            required></textarea>
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
      const originalDate = element.textContent.trim();
      if (originalDate) {
        const formattedDate = formatDate(originalDate);
        element.textContent = formattedDate;
      }
    })

    function afficherFormulaire() {
      document.getElementById("formComent").style.display = "block";
    }
  <?php echo '</script'; ?>
>
</body><?php }
}
