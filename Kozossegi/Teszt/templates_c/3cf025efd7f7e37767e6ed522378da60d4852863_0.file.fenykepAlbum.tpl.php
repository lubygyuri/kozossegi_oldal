<?php
/* Smarty version 3.1.39, created on 2021-05-06 22:38:31
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\fenykepAlbum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609453c755ef12_86153711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cf025efd7f7e37767e6ed522378da60d4852863' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\fenykepAlbum.tpl',
      1 => 1620333503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_609453c755ef12_86153711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
    <div class="px-lg-5"">

        <!-- Fejléc -->
        <div class="row py-5">
            <div class="col-lg-12 mx-auto">
                <div class="p-5 shadow rounded banner">
                    <h1 class="display-4">Fényképalbumaid</h1>
                    <p class="lead"><?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getVezeteknev();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getKeresztnev();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</p>
                    <a href="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getEmail();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" class="btn btn-primary"><i class="fas fa-arrow-left mr-0"></i></a>
                </div>
            </div>
        </div>
        <!-- Fejléc vége -->

        <div class="row">
            <!-- Gallery item -->
            <?php if ($_smarty_tpl->tpl_vars['fenykepAlbumok']->value) {?>
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['fenykepAlbumok']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['fenykepAlbumok']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294929/matthew-hamilton-351641-unsplash_zmvozs.jpg" alt="kep" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="fenykepek.php?fenykepAlbum=<?php ob_start();
echo $_smarty_tpl->tpl_vars['fenykepAlbumok']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" class="text-dark"><?php ob_start();
echo $_smarty_tpl->tpl_vars['fenykepAlbumok']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</a></h5>
                                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Album mérete</span></p>
                                    <div class="badge badge-danger px-3 rounded-pill font-weight-normal"><?php if ($_smarty_tpl->tpl_vars['fenykepAlbumok']->value[$_smarty_tpl->tpl_vars['i']->value]->getTeljesMeret() > 0) {
ob_start();
echo $_smarty_tpl->tpl_vars['fenykepAlbumok']->value[$_smarty_tpl->tpl_vars['i']->value]->getTeljesMeret();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;
} else { ?>0<?php }?> MB</div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Album képeinek száma</span></p>
                                    <div class="badge badge-primary px-3 rounded-pill font-weight-normal"><?php ob_start();
echo $_smarty_tpl->tpl_vars['fenykepAlbumok']->value[$_smarty_tpl->tpl_vars['i']->value]->getKepekSzama();
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
 db</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
}
?>
            <?php }?>
            <!-- End -->
        </div>
    </div>
</div><?php }
}
