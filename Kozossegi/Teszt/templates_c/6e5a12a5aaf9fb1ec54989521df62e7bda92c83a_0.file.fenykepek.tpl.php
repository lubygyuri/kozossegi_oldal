<?php
/* Smarty version 3.1.39, created on 2021-05-06 20:30:12
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\fenykepek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609435b41d9883_50126381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e5a12a5aaf9fb1ec54989521df62e7bda92c83a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\fenykepek.tpl',
      1 => 1620325808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_609435b41d9883_50126381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" id="app6">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0 flex-row">
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['recentAlbum']->value->getNev();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

        <div>
            <b-button variant="primary" @click="$bvModal.show('bv-modal-fenykep')">Fénykép hozzáadása</b-button>

            <b-modal id="bv-modal-fenykep" hide-footer title="Fénykép feltöltése">
                <p>Az alábbi mezőre kattintva egy új képet tölthetsz fel az albumodba:</p>
                <div>
                    <form action="fenykepek.php?fenykepAlbum=<?php ob_start();
echo $_smarty_tpl->tpl_vars['recentAlbum']->value->getAzonosito();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" class="kulso-form" method="post" enctype="multipart/form-data">
                        <div class="image-upload flex-row">
                            <label for="fenykep" class="mt-3 p-2 h-25">
                                <i class="fas fa-upload"></i>
                                Kép feltöltés
                            </label>
                            <input id="fenykep" type="file" name="fenykep">
                        </div>
                        <div class="flex-row">
                            <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="fenykepFeltoltes">Feltöltés</button>
                            <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-fenykep')">Mégse</b-button>
                        </div>
                    </form>
                </div>
            </b-modal>

            <a href="fenykepalbum.php?back=true" class="btn btn-primary"><i class="fas fa-arrow-left mr-0"></i></a>
        </div>
    </h1>

    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-left">

        <?php if ($_smarty_tpl->tpl_vars['fenykepek']->value) {?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['fenykepek']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['fenykepek']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <div class="col-lg-3 col-md-4 col-6">
                    <img class="img-fluid img-thumbnail" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['fenykepek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" alt="">
                </div>
            <?php }
}
?>
        <?php }?>

    </div>

</div><?php }
}
