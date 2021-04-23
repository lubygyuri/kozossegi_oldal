<?php
/* Smarty version 3.1.39, created on 2021-04-23 16:39:52
  from 'D:\XAMPP\htdocs\adatbalapu\kozossegi_oldal\Kozossegi\Teszt\includes\classAutoLoad.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6082dc380c10b4_01329295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3623f844d181a85ace76eb4f1418b0043d3fb1' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\adatbalapu\\kozossegi_oldal\\Kozossegi\\Teszt\\includes\\classAutoLoad.php',
      1 => 1618784721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6082dc380c10b4_01329295 (Smarty_Internal_Template $_smarty_tpl) {
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
