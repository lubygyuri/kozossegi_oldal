<?php
/* Smarty version 3.1.39, created on 2021-05-08 16:10:25
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\likeGomb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60969bd1269127_96401869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '462e1ab6f1d41e535b073be40df637a88aafd0f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\likeGomb.tpl',
      1 => 1620380254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60969bd1269127_96401869 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzes']->value->getAzonosito();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">

    <!-- likek szama -->
    <?php if ($_smarty_tpl->tpl_vars['bejegyzes']->value->getLikeCount() > 0) {?>
        <div class="mt-3 like_count p-1"><?php ob_start();
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
