<?php
/* Smarty version 5.4.3, created on 2025-01-20 09:03:23
  from 'file:galerie_blog.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678e115bbb80e8_25690484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '404069942387068e73c84edf955f8d083d608dd7' => 
    array (
      0 => 'galerie_blog.html',
      1 => 1737363765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base_blog.tpl' => 1,
  ),
))) {
function content_678e115bbb80e8_25690484 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/classPHP/class/projectBlog/templates';
$_smarty_tpl->renderSubTemplate("file:base_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<style>
    /* body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
} */
    .image-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(3, 1fr);
        width: 600px;
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

<div class="image-container">
    <div class="image" style="--clip-start: ellipse(0 0 at 0 0); --clip-end: ellipse(150% 150% at 0 0);">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5ke27NVJp2M32tpT05tHyMe_cGJkyFBwOpg&s" /><img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5ke27NVJp2M32tpT05tHyMe_cGJkyFBwOpg&s" />
    </div>
        <div class="image" style="--clip-start: inset(100% 0 0 0); --clip-end: inset(0 0 0 0);"><img
            src="https://www.zdnet.fr/wp-content/uploads/zdnet/2024/02/technologie-1.jpg" /><img
            src="https://www.zdnet.fr/wp-content/uploads/zdnet/2024/02/technologie-1.jpg" />
    </div>

    
    <div class="image" style="--clip-start: ellipse(0 0 at 100% 0); --clip-end: ellipse(150% 150% at 100% 0);"><img
            src="https://i.picsum.photos/id/642/200/200.jpg?hmac=MJkhEaTWaybCn0y7rKfh_irNHvVuqRHmxcpziWABTKw" /><img
            src="https://i.picsum.photos/id/642/200/200.jpg?hmac=MJkhEaTWaybCn0y7rKfh_irNHvVuqRHmxcpziWABTKw" />
    </div>

    
    <div class="image"
        style="--clip-start: polygon(50% 50%,  50% 50%,  50% 50%, 50% 50%); --clip-end: polygon(-50% 50%, 50% -50%, 150% 50%, 50% 150%);">
        <img src="./Screenshot.png" /><img
            src="./Screenshot.png" />
    </div>
    
    <div class="image" style="--clip-start: circle(0); --clip-end: circle(125%);"><img
            src="https://i.picsum.photos/id/604/200/200.jpg?hmac=qgFjxODI1hMBMfHo68VvLeji-zvG9y-iPYhyW0EkvOs" /><img
            src="https://i.picsum.photos/id/604/200/200.jpg?hmac=qgFjxODI1hMBMfHo68VvLeji-zvG9y-iPYhyW0EkvOs" /></div>
        <div class="image" style="--clip-start: inset(100% 100% 100% 100%); --clip-end: inset(0 0 0 0);"><img
            src="https://i.picsum.photos/id/119/200/200.jpg?hmac=JGrHG7yCKfebsm5jJSWw7F7x2oxeYnm5YE_74PhnRME" /><img
            src="https://i.picsum.photos/id/119/200/200.jpg?hmac=JGrHG7yCKfebsm5jJSWw7F7x2oxeYnm5YE_74PhnRME" /></div>
        <div class="image" style="--clip-start: ellipse(0 0 at 0 100%); --clip-end: ellipse(150% 150% at 0 100%);"><img
            src="https://i.picsum.photos/id/520/200/200.jpg?hmac=gq6GVKg64GMqsvk_d6gzXZ7L1htska1jEdgBnAwm4xU" /><img
            src="https://i.picsum.photos/id/520/200/200.jpg?hmac=gq6GVKg64GMqsvk_d6gzXZ7L1htska1jEdgBnAwm4xU" /></div>
        <div class="image" style="--clip-start: inset(0 0 100% 0); --clip-end: inset(0 0 0 0);"><img
            src="https://i.picsum.photos/id/553/200/200.jpg?hmac=HSLKzqqoxnajv4KjLxYSjZokWcuCCiZLGdRPUoryhXk" /><img
            src="https://i.picsum.photos/id/553/200/200.jpg?hmac=HSLKzqqoxnajv4KjLxYSjZokWcuCCiZLGdRPUoryhXk" /></div>
        <div class="image" style="--clip-start: ellipse(0 0 at 100% 100%); --clip-end: ellipse(150% 150% at 100% 100%);">
        <img src="https://i.picsum.photos/id/988/200/200.jpg?hmac=-lwK-i6PssD9WlUeVPDIhOxDVxlzJKeM4MgEx_fIqJg" /><img
            src="https://i.picsum.photos/id/988/200/200.jpg?hmac=-lwK-i6PssD9WlUeVPDIhOxDVxlzJKeM4MgEx_fIqJg" />
    </div>
</div><?php }
}
