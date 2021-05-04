<?php
/* Smarty version 3.1.39, created on 2021-05-05 01:21:05
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/klubLikeGomb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6091d6e1a75a99_17864613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5cb26ede7d5a758642eb3a8c7d8a0397dbabee1' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/klubLikeGomb.tpl',
      1 => 1620170462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6091d6e1a75a99_17864613 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['azonosito']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">
    <?php if ($_smarty_tpl->tpl_vars['like']->value) {?>
        <button onclick="klubLike(<?php ob_start();
echo $_smarty_tpl->tpl_vars['azonosito']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
)" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button>
    <?php } else { ?>
        <button onclick="klubLike(<?php ob_start();
echo $_smarty_tpl->tpl_vars['azonosito']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
)" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button>
    <?php }?>
</div><?php }
}
