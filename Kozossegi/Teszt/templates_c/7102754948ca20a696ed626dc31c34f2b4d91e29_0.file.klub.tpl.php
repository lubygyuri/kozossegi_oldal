<?php
/* Smarty version 3.1.39, created on 2021-05-05 16:51:09
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\klub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6092b0dd137b29_14491685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7102754948ca20a696ed626dc31c34f2b4d91e29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\klub.tpl',
      1 => 1620226254,
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
function content_6092b0dd137b29_14491685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app2">
    <b-row>
        <?php if ($_smarty_tpl->tpl_vars['error']->value != null) {?>
            <b-col>
                <div class="shadow-lg p-3 bg-white rounded align-self-baseline p-3 mb-2 mt-2 ml-2">
                    <div class="alert alert-danger" role="alert">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['error']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                    </div>
                    <div class="alert alert-dark" role="alert">
                       A csatlakozáshoz keresrá egy Klub nevére és csatlakoz!
                    </div>
                </div>
            </b-col>
        <?php } else { ?>
        <b-col>
            <div class="shadow-lg p-3 bg-white rounded align-self-baseline p-3 mb-2 mt-2 ml-2">
                <b-list-group>
                    <?php if ($_smarty_tpl->tpl_vars['klubbok']->value) {?>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['klubbok']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['klubbok']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['aktiv']->value == $_smarty_tpl->tpl_vars['klubbok']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev()) {?>
                            <a class="klub_link" href="klub.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['klubbok']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"><b-list-group-item active><?php ob_start();
echo $_smarty_tpl->tpl_vars['klubbok']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</b-list-group-item></a>
                        <?php } else { ?>
                            <a class="klub_link" href="klub.php?id=<?php ob_start();
echo $_smarty_tpl->tpl_vars['klubbok']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
"><b-list-group-item><?php ob_start();
echo $_smarty_tpl->tpl_vars['klubbok']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</b-list-group-item></a>
                        <?php }?>
                    <?php }
}
?>
                    <?php }?>
                </b-list-group>
            </div>
    </b-col>

    <b-col>
        <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 mb-5 mt-2 mx-auto">
            <form action="klub.php" method="post" enctype="multipart/form-data">
                <div class="post-header2">
                    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getProfilkep();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
">
                    <div class="post-header-details">
                        <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getVezeteknev();
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getKeresztnev();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
 </span>
                    </div>
                </div>
                <div class="form-floating mt-3 mb-3">
                    <textarea class="form-control" placeholder="Írjon bejegyzést..." id="floatingTextarea2" name="text" style="height: 100px"></textarea>
                    <input  name="klubAzonosito" type="hidden" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['aktiv']->value;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
"/>
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
                <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-100 mb-5 mx-auto"><b-row><div class="post-header"><img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getFelhasznaloAzonosito()->getProfilkep();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" alt="profilkép"><div class="post-header-details"><span><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getFelhasznaloAzonosito()->getVezeteknev();
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getFelhasznaloAzonosito()->getKeresztnev();
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</span><span class="small"><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getLetrehozasIdeje();
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</span></div></div><div ><p class="m-3"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</p><?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep()) {?><b-img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep();
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
" class="rounded mx-auto d-block" fluid alt="Fluid image"></b-img><?php }?></div></b-row><b-row><b-col cols="auto" class="w-100"><div class="post-footer mt-3"><div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
"><?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getIsLiked()) {?><button onclick="klubLike(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
)" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button><?php } else { ?><button onclick="klubLike(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
)" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button><?php }?></div></div></b-col></b-row></div>
            <?php }
}
?>
        <?php }?>

    </b-col>
            <?php }?>
    <b-col>
            <div class="shadow-lg p-3 bg-white rounded align-self-baseline p-3 m-2">
                <div class="input-group rounded">
                    <input onkeyup="klubKereses()" type="search" id="searchboxclub" class="form-control rounded" placeholder="Keresés..." aria-label="Search"
                           aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
                <div id="klubKeresesDiv">
                </div>
                <b-button variant="success" class="mb-0 mt-3 w-100" @click="$bvModal.show('bv-modal-ujklubletrehozasa')">Új klub hozzáadása</b-button>
             </div>
    </b-col>
        <b-modal id="bv-modal-ujklubletrehozasa" hide-footer title="Új klub létrehozása">
            <p class="mt-2">Kérlek töltsd ki az alábbi adatokat:</p>
            <div>
                <form action="klub.php" class="kulso-form" method="post">
                    <input type="text" name="klub_name" placeholder="Klub neve" class="mt-3 p-2 h-25" required>
                    <input type="text" name="leiras" placeholder="Leírása" class="mt-3 p-2 h-25" required>
                    <div class="flex-row mt-3 p-2 h-25">
                        <div class="register-genderclass rounded">
                            <input type="radio" id="public" name="lathatosag" value="0" checked>
                            <label for="public">Publikus</label><br>
                        </div>
                        <div class="register-genderclass rounded" >
                            <input type="radio" id="private" name="lathatosag" value="1">
                            <label for="private">Privát</label><br>
                        </div>
                    </div>
                    <div class="flex-row">
                        <button type="submit" name="submit_klub" id="register-id" class="mt-3 p2 btn btn-success">Klub létrehozása</button>
                        <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-ujklubletrehozasa')">Mégse</b-button>
                    </div>
                </form>
            </div>
        </b-modal>
    </b-row>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
