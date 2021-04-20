<?php
/* Smarty version 3.1.39, created on 2021-04-20 22:13:23
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\includes\classAutoLoad.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607f35e3bcb085_61076038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41fc1044c6bc774274cb769f092b1503998ed077' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\includes\\classAutoLoad.php',
      1 => 1618780198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f35e3bcb085_61076038 (Smarty_Internal_Template $_smarty_tpl) {
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
