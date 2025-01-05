<?php
/* Smarty version 5.4.3, created on 2025-01-02 17:09:52
  from 'file:teste.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6776ba5093f936_02449511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd22233ea83856f0f8b00b2a241ee7aeb1788fe28' => 
    array (
      0 => 'teste.tpl',
      1 => 1735834168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6776ba5093f936_02449511 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/classPHP/class/projectBlog/templates';
?><html>
<head>
    <title><?php echo $_smarty_tpl->getValue('titulo');?>
</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->getValue('titulo');?>
</h1>
    <p><?php echo $_smarty_tpl->getValue('conteudo');?>
</p>
</body>
</html>
<?php }
}
