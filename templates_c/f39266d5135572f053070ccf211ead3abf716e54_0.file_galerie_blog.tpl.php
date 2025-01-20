<?php
/* Smarty version 5.4.3, created on 2025-01-20 13:25:36
  from 'file:galerie_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678e4ed097d031_45440782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f39266d5135572f053070ccf211ead3abf716e54' => 
    array (
      0 => 'galerie_blog.tpl',
      1 => 1737379534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_blog.tpl' => 1,
  ),
))) {
function content_678e4ed097d031_45440782 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/classPHP/class/projectBlog/templates';
$_smarty_tpl->renderSubTemplate("file:base_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<style>
    .container-father {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-container {
        display: grid;
        align-items: center;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 1fr);
        width: 700px;
        grid-gap: 0.5rem;
    }

    .image-container .image {
        position: relative;
        padding-bottom: 100%;
    }

    .image-container .image img {
        height: 100%;
        width: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        left: 0;
        position: absolute;
        top: 0;
    }

    .image-container .image img:nth-of-type(1) {
        filter: grayscale(1) brightness(40%);
    }

    .image-container .image img:nth-of-type(2) {
        -webkit-clip-path: var(--clip-start);
        clip-path: var(--clip-start);
        transition: -webkit-clip-path 0.5s;
        transition: clip-path 0.5s;
        transition: clip-path 0.5s, -webkit-clip-path 0.5s;
    }

    .image-container .image:hover img:nth-of-type(2) {
        -webkit-clip-path: var(--clip-end);
        clip-path: var(--clip-end);
    }
</style>
<div class="container-father">
    <div class="image-container">
        <?php
$__section_image_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('imagePost')) ? count($_loop) : max(0, (int) $_loop));
$__section_image_0_total = $__section_image_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_image'] = new \Smarty\Variable(array());
if ($__section_image_0_total !== 0) {
for ($__section_image_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_image']->value['index'] = 0; $__section_image_0_iteration <= $__section_image_0_total; $__section_image_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_image']->value['index']++){
?>
            <div class="image" style="--clip-start: ellipse(0 0 at 0 0); --clip-end: ellipse(150% 150% at 0 0);">
                <img src="<?php echo $_smarty_tpl->getValue('roots')['photoPath'];
echo $_smarty_tpl->getValue('imagePost')[($_smarty_tpl->getValue('__smarty_section_image')['index'] ?? null)]['image_path'];?>
"
                    onclick="window.location.href='<?php echo $_smarty_tpl->getValue('roots')['path'];?>
afficher_blog.php?id=<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_image')['index'] ?? null)]['ID'];?>
';" /><img
                    src="<?php echo $_smarty_tpl->getValue('roots')['photoPath'];
echo $_smarty_tpl->getValue('imagePost')[($_smarty_tpl->getValue('__smarty_section_image')['index'] ?? null)]['image_path'];?>
"
                    onclick="window.location.href='<?php echo $_smarty_tpl->getValue('roots')['path'];?>
afficher_blog.php?id=<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_image')['index'] ?? null)]['ID'];?>
';" />
            </div>
        <?php
}
}
?>
    </div>
</div>
</body>
</html>

<?php }
}
