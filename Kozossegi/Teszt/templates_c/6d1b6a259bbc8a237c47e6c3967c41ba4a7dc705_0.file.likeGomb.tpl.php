<?php
/* Smarty version 3.1.39, created on 2021-05-06 16:22:53
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/likeGomb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6093fbbd7130d2_37229436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d1b6a259bbc8a237c47e6c3967c41ba4a7dc705' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/likeGomb.tpl',
      1 => 1620310970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6093fbbd7130d2_37229436 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzes']->value->getAzonosito();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">

    <!-- likek szama -->
    <?php if ($_smarty_tpl->tpl_vars['bejegyzes']->value->getLikeCount() > 0) {?>
        <div class="mt-3 like_count"><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzes']->value->getLikeCount();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 embernek tetszik ez a bejegyzés</div>
    <?php }?>
    <div class="post-footer">
        <?php if ($_smarty_tpl->tpl_vars['like']->value) {?>
                <button onclick="like(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzes']->value->getAzonosito();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
)" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button>
        <?php } else { ?>
                <button onclick="like(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzes']->value->getAzonosito();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
)" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button>
        <?php }?>
                <button v-b-toggle.my-collapse<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzes']->value->getAzonosito();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
 id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzes']->value->getAzonosito();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
"><i class="far fa-comment-alt"></i>Hozzászólás</button>
    </div>
</div><?php }
}
