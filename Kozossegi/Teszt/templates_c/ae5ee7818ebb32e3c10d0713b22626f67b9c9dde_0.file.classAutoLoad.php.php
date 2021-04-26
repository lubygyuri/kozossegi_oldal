<?php
/* Smarty version 3.1.39, created on 2021-04-24 02:23:31
  from 'D:\XAMPP\htdocs\kozossegi_oldal\Kozossegi\Teszt\includes\classAutoLoad.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60836503d86c74_95403653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae5ee7818ebb32e3c10d0713b22626f67b9c9dde' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\includes\\classAutoLoad.php',
      1 => 1619223668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60836503d86c74_95403653 (Smarty_Internal_Template $_smarty_tpl) {
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
