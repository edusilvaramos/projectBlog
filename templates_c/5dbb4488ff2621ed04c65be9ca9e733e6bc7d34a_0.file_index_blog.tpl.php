<?php
/* Smarty version 5.4.3, created on 2025-01-17 18:46:09
  from 'file:index_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678a9761e25419_25613498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dbb4488ff2621ed04c65be9ca9e733e6bc7d34a' => 
    array (
      0 => 'index_blog.tpl',
      1 => 1737135968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_blog.tpl' => 1,
  ),
))) {
function content_678a9761e25419_25613498 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/templates';
$_smarty_tpl->renderSubTemplate("file:base_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="row">
	<div class="col-4 w-25 p-5 d-none d-sm-block "
		style="font-family: 'Playfair Display', serif; font-size: 1.5rem; font-weight: bold;  text-transform: uppercase;">
		<label for="categorie" class="form-label">
			Sélectionnez une catégorie
		</label>
		<ul class="menu-categorias">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categoryPost'), 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
				<li>
					<a href="?categorie=<?php echo $_smarty_tpl->getValue('cat')['categorie'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('cat')['categorie']);?>
</a>
				</li>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ul>
		<a href="?categorie=all">Toutes les categories</a>
	</div>
	<div class="col-12 d-block d-sm-none mt-3">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuCategorias"
			aria-controls="menuCategorias" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon fs-5"><i class="bi bi-arrow-bar-down"></i></span>
		</button>
		<div class="collapse text-center" id="menuCategorias">
			<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categoryPost'), 'cat');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach1DoElse = false;
?>
				<a style="margin: 1rem;" href="?categorie=<?php echo $_smarty_tpl->getValue('cat')['categorie'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('cat')['categorie']);?>
</a>
			<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
			<a href="?categorie=all">Toutes les categories</a>
		</div>
	</div>
	<div class="col d-sm-mt-5" style="font-family: 'Playfair Display', serif; ">
		<div class="container mt-5">
			<?php
$__section_cardBllet_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('postAll')) ? count($_loop) : max(0, (int) $_loop));
$__section_cardBllet_0_total = $__section_cardBllet_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cardBllet'] = new \Smarty\Variable(array());
if ($__section_cardBllet_0_total !== 0) {
for ($__section_cardBllet_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cardBllet']->value['index'] = 0; $__section_cardBllet_0_iteration <= $__section_cardBllet_0_total; $__section_cardBllet_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cardBllet']->value['index']++){
?>
				<article class="card mx-auto mb-3" style="max-width: 900px">
					<div class="card-body" style="
							                cursor: pointer;
							                padding: 20px;
							                transition: background-color 0.3s;
							              " onmouseover="this.style.backgroundColor='#dcdcdc';"
						onmouseout="this.style.backgroundColor='#f0f0';"
						onclick="window.location.href='<?php echo $_smarty_tpl->getValue('roots')['path'];?>
afficher_blog.php?id=<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID'];?>
';">
						<div class="d-flex justify-content-between align-items-center">
							<h3 class="card-title">
								<strong><?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['titre'];?>
</strong>
							</h3>
							<h5 class="card-subtitle mb-2 text-muted date-billet"
								data-date="<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['date_billet'];?>
"></h5>
						</div>

						<h5 class="card-subtitle mb-2 text-muted">
							Categorie : <?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['categorie'];?>

						</h5>
						<p class="card-text mt-2"><?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['contenu'];?>
</p>

						<?php if ((true && (true && null !== ($_smarty_tpl->getValue('commentCounts')[$_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID']] ?? null)))) {?>
						<?php echo $_smarty_tpl->getValue('commentCounts')[$_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID']];?>
 <?php } else { ?> 0
						<?php }?>
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
			minute: "2-digit"
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
<link rel="stylesheet" href="../components/style/bootstrap.min.css"><?php }
}
