<?php
/* Smarty version 3.1.39, created on 2021-04-26 12:58:02
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/Uzenofal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60869cba63d686_79404133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '819e4363637301802ced59ee208a5c84c8730c38' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/Uzenofal.tpl',
      1 => 1619434677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60869cba63d686_79404133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app2"  class="container px-4 mt-5">

        <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-50 mb-5 mx-auto">
        <form action="Uzenofal.php" method="post" enctype="multipart/form-data">
            <div class="post-header2">
                <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getProfilkep();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">
                <div class="post-header-details">
                <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getVezeteknev();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getKeresztnev();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
 </span>
                </div>
            </div>
        <div class="form-floating mt-3 mb-3">
            <textarea class="form-control" placeholder="Írjon bejegyzést..." id="floatingTextarea2" name="text" style="height: 100px"></textarea>
        </div>
        <div class="image-upload">
            <label for="file-input" class="h6 mb-2">
                <i class="fas fa-upload"></i>
                Kép feltöltés
            </label>
            <input id="file-input" type="file" name="postImgUzenofal"/>
            <button type="submit" class="btn btn-primary" name="submit">Közzététel</button>
        </div>
        </form>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value) {?>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['bejegyzesek']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['bejegyzesek']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-50 mb-5 mx-auto"><b-row><div class="post-header"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getFelhasznaloAzonosito()->getProfilkep();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" alt="profilkép"><div class="post-header-details"><span><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getFelhasznaloAzonosito()->getVezeteknev();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getFelhasznaloAzonosito()->getKeresztnev();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</span><span class="small"><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getLetrehozasIdeje();
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</span></div></div><div ><p class="m-3"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</p><?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep()) {?><b-img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" class="rounded mx-auto d-block" fluid alt="Fluid image"></b-img><?php }?></div></b-row><b-row><b-col cols="auto" class="w-100"><b-button-group class="w-100"><b-button  variant="btn-outline-primary" @click="asd"><b-icon icon="heart" aria-hidden="true" v-if="like"></b-icon><b-icon icon="heart-fill" aria-hidden="true" v-if="!like"></b-icon>Tetszik</b-button><b-button v-b-toggle.my-collapse<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
 id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
" variant="btn-outline-primary" onchange="kommentList(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
)"><b-icon  icon="chat-left" aria-hidden="true"></b-icon> Hozzászólás</b-button></b-button-group><template><b-collapse id="my-collapse<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
" class="mt-4"><?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKommentek()) {
$_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKommentek());
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? count($_smarty_tpl->tpl_vars['x']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['x']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?><div class="border border-1 mt-2 rounded align-self-baseline w-100"><div class="post-header2"><b-img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getProfilkep();
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
" rounded="circle" class="d-inline-block align-top"></b-img><div class="post-header-details"><span><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getVezeteknev();
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getKeresztnev();
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</span></div></div><div><p class="m-3"><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getUzenet();
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
 </p></div></div><?php }
}
}?><div class="border border-3 mt-2"><div class="post-header2"><b-img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getProfilkep();
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
" rounded="circle" class="d-inline-block align-top "></b-img><div class="post-header-details"><span><?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getVezeteknev();
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getKeresztnev();
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
</span></div></div><div class="form-floating mt-3 mb-1"><textarea class="form-control" placeholder="Írjon kommentet" id="floatingTextarea2" style="height: 100px" v-model="text"></textarea></div><button type="button" class="btn btn-primary" @click="komm">Közzététel</button></div></b-collapse></template></b-col></b-row></div>
    <?php }
}
?>
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
