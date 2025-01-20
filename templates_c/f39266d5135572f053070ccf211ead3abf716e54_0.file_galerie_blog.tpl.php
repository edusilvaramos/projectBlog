<?php
/* Smarty version 5.4.3, created on 2025-01-20 10:13:00
  from 'file:galerie_blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678e21ac1a4308_05945990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f39266d5135572f053070ccf211ead3abf716e54' => 
    array (
      0 => 'galerie_blog.tpl',
      1 => 1737367372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_blog.tpl' => 1,
  ),
))) {
function content_678e21ac1a4308_05945990 (\Smarty\Template $_smarty_tpl) {
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
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(3, 1fr);
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
        <div class="image" style="--clip-start: ellipse(0 0 at 0 0); --clip-end: ellipse(150% 150% at 0 0);">
            <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5ke27NVJp2M32tpT05tHyMe_cGJkyFBwOpg&s" onclick="window.location.href='<?php echo $_smarty_tpl->getValue('roots')['path'];?>
afficher_blog.php?id=<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID'];?>
';" /><img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5ke27NVJp2M32tpT05tHyMe_cGJkyFBwOpg&s" onclick="window.location.href='<?php echo $_smarty_tpl->getValue('roots')['path'];?>
afficher_blog.php?id=<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID'];?>
';" />
        </div>
                <div class="image" style="--clip-start: inset(100% 0 0 0); --clip-end: inset(0 0 0 0);"><img
                src="https://www.60millions-mag.com/sites/default/files/styles/hp_full_desktop/public/istock-996422284.jpg?itok=2WsOP1TS" /><img
                src="https://www.60millions-mag.com/sites/default/files/styles/hp_full_desktop/public/istock-996422284.jpg?itok=2WsOP1TS" />
        </div>

        
        <div class="image" style="--clip-start: ellipse(0 0 at 100% 0); --clip-end: ellipse(150% 150% at 100% 0);">
        <img src="https://cdn.shopify.com/s/files/1/0113/2557/1136/files/2_600x600.jpg?v=1685596350" />
        <img src="https://cdn.shopify.com/s/files/1/0113/2557/1136/files/2_600x600.jpg?v=1685596350" />
        </div>

        
        <div class="image"
            style="--clip-start: polygon(50% 50%,  50% 50%,  50% 50%, 50% 50%); --clip-end: polygon(-50% 50%, 50% -50%, 150% 50%, 50% 150%);">
            <img src="" onclick="window.location.href='<?php echo $_smarty_tpl->getValue('roots')['path'];?>
afficher_blog.php?id=<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID'];?>
';" />
            <img src="" onclick="window.location.href='<?php echo $_smarty_tpl->getValue('roots')['path'];?>
afficher_blog.php?id=<?php echo $_smarty_tpl->getValue('postAll')[($_smarty_tpl->getValue('__smarty_section_cardBllet')['index'] ?? null)]['ID'];?>
';" />
        </div>
        
        <div class="image" style="--clip-start: circle(0); --clip-end: circle(125%);"><img
                src="https://sarcdprodstrapi.blob.core.windows.net/strapi-media/assets/10_Livres_relations_internationales_e382ee8d71.jpg" /><img
                src="https://sarcdprodstrapi.blob.core.windows.net/strapi-media/assets/10_Livres_relations_internationales_e382ee8d71.jpg" />
        </div>

                <div class="image" style="--clip-start: inset(100% 100% 100% 100%); --clip-end: inset(0 0 0 0);"><img
                src="https://ygo-assets-websites-editorial-emea.yougov.net/images/168838.original.jpg" /><img
                src="https://ygo-assets-websites-editorial-emea.yougov.net/images/168838.original.jpg" /></div>
                <div class="image" style="--clip-start: ellipse(0 0 at 0 100%); --clip-end: ellipse(150% 150% at 0 100%);"><img
                src="https://radio.vinci-autoroutes.com/medias/image/6f0ec1d326993cb6d05ff27be479cf52.jpg" /><img
                src="https://radio.vinci-autoroutes.com/medias/image/6f0ec1d326993cb6d05ff27be479cf52.jpg" /></div>
                <div class="image" style="--clip-start: inset(0 0 100% 0); --clip-end: inset(0 0 0 0);"><img
                src="https://www.iledefrance.fr/sites/default/files/styles/hub_exposition_banner_desktop/public/medias/istock-photobyphotoboy.jpg.webp?itok=_2VuK8a4" /><img
                src="https://www.iledefrance.fr/sites/default/files/styles/hub_exposition_banner_desktop/public/medias/istock-photobyphotoboy.jpg.webp?itok=_2VuK8a4" />
        </div>
                <div class="image"
            style="--clip-start: ellipse(0 0 at 100% 100%); --clip-end: ellipse(150% 150% at 100% 100%);">
            <img
                src="https://popcinema.fr/wp-content/uploads/2024/09/Levolution-du-cinema-americain-des-debuts-muets-aux-blockbusters-contemporains.jpg" /><img
                src="https://popcinema.fr/wp-content/uploads/2024/09/Levolution-du-cinema-americain-des-debuts-muets-aux-blockbusters-contemporains.jpg" />
        </div>
    </div>
</div>

</body>

</html><?php }
}
