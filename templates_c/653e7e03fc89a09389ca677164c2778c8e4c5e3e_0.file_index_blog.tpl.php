<?php
/* Smarty version 5.4.3, created on 2025-01-16 15:02:39
  from 'file:index_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67891f8f7d7a82_36672942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '653e7e03fc89a09389ca677164c2778c8e4c5e3e' => 
    array (
      0 => 'index_blog.tpl',
      1 => 1737039673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_blog.tpl' => 1,
  ),
))) {
function content_67891f8f7d7a82_36672942 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/classPHP/class/projectBlog/templates';
?><!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
	<title>MON Blog</title>
</head>
<?php $_smarty_tpl->renderSubTemplate("file:base_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<body>
	<div class="row">
		<div class="col-4 w-25 p-5">
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
		<div class="col mt-5">
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
							onclick="window.location.href='afficher_blog.php?id=<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID'];?>
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

</html><?php }
}
