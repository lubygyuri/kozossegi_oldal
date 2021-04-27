<?php
/* Smarty version 3.1.39, created on 2021-04-27 13:29:07
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\klub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6087f583d83970_35145475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7102754948ca20a696ed626dc31c34f2b4d91e29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\klub.tpl',
      1 => 1619522946,
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
function content_6087f583d83970_35145475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app2">
    <b-row>
        <b-col>
            <div class="shadow-lg p-3 bg-white rounded align-self-baseline p-3 mb-2 mt-2 ml-2">
                <b-list-group>
                    <?php if ($_smarty_tpl->tpl_vars['klubbok']->value) {?>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['klubbok']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['klubbok']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <b-list-group-item><?php ob_start();
echo $_smarty_tpl->tpl_vars['klubbok']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</b-list-group-item>
                    <?php }
}
?>
                    <?php }?>
                </b-list-group>

            </div>
        </b-col>
<b-col>

    <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 mb-5 mt-2 mx-auto">
        <form action="Uzenofal.php" method="post" enctype="multipart/form-data">
            <div class="post-header2">
                <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getProfilkep();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
">
                <div class="post-header-details">
                    <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getVezeteknev();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getKeresztnev();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
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
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" alt="profilkép"><div class="post-header-details"><span><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getFelhasznaloAzonosito()->getVezeteknev();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getFelhasznaloAzonosito()->getKeresztnev();
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</span><span class="small"><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getLetrehozasIdeje();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</span></div></div><div ><p class="m-3"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</p><?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep()) {?><b-img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" class="rounded mx-auto d-block" fluid alt="Fluid image"></b-img><?php }?></div></b-row><b-row><b-col cols="auto" class="w-100"><div class="post-footer mt-3"><div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
"><?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getIsLiked()) {?><button onclick="like(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
)" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button><?php } else { ?><button onclick="like(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
)" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button><?php }?></div><button v-b-toggle.my-collapse<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
 id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
"><i class="far fa-comment-alt"></i>Hozzászólás</button></div><template><b-collapse id="my-collapse<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
" class="mt-4"><div id="komment<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
"><?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKommentek()) {
$_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKommentek());
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? count($_smarty_tpl->tpl_vars['x']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['x']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?><div class="border border-1 mt-2 rounded align-self-baseline w-100"><div class="post-header2"><b-img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getProfilkep();
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
" rounded="circle" class="d-inline-block align-top"></b-img><div class="post-header-details"><span><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getVezeteknev();
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getKeresztnev();
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
</span></div></div><div><p class="m-3"><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getUzenet();
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
 </p></div></div><?php }
}
}?></div><div class="border border-3 mt-2"><div class="post-header2"><b-img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getProfilkep();
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
" rounded="circle" class="d-inline-block align-top "></b-img><div class="post-header-details"><span><?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getVezeteknev();
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getKeresztnev();
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
</span></div></div><div class="form-floating mt-3 mb-1"><textarea class="form-control" placeholder="Írjon kommentet" id="textarea<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
" style="height: 100px"></textarea></div><button type="button" class="btn btn-primary" onclick="komment(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
)">Közzététel</button></div></b-collapse></template></b-col></b-row></div>
        <?php }
}
?>
    <?php }?>


</b-col>
<b-col>
        <div class="shadow-lg p-3 bg-white rounded align-self-baseline p-3 m-2">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                       aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <b-button class="mt-3">Csatlakozás</b-button>
            <b-button class="mt-3">Új hozzáadás</b-button>
         </div>
</b-col>



    </b-row>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
