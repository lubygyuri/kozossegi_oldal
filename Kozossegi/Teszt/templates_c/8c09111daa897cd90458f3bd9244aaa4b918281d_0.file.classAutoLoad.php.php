<?php
/* Smarty version 3.1.39, created on 2021-04-23 22:39:09
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/includes/classAutoLoad.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6083306dc74837_45464328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c09111daa897cd90458f3bd9244aaa4b918281d' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/includes/classAutoLoad.php',
      1 => 1619210297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6083306dc74837_45464328 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>
spl_autoload_register('classAutoLoad');

function classAutoLoad($className) {
    $path = "model/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}

<?php }
}
