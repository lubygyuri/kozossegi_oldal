<?php
/* Smarty version 3.1.39, created on 2021-04-24 15:59:50
  from 'D:\XAMPP\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60842456bf9c02_90946763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1559240bbd5bee48f4efefd4f674ef47968ac60' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\profil.tpl',
      1 => 1619272787,
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
function content_60842456bf9c02_90946763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app3">
    <div class="profile-area">
        <div class="profile-container">
            <div class="profile-card col-md-11">
                                <div class="background-image">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="fejléc">
                </div>

                                <div class="profile-image">
                    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getProfilkep();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" alt="profilkép">
                </div>

                                <div class="profile-main">
                                        <div class="profile-name">
                        <h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getVezeteknev();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getKeresztnev();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h2>
                    </div>
                                        <div class="personal-details">
                        <span><i class="fas fa-envelope"></i><?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getEmail();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</span>
                        <span><i class="fas fa-birthday-cake"></i><?php ob_start();
echo date_format(date_create($_smarty_tpl->tpl_vars['felhasznalo']->value->getSzuletesiDatum()),"Y-m-d");
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</span>
                    </div>

                    
                                            <div class="flex-row p-3 border-top border-bottom">
                            <form action="profil.php" method="post" enctype="multipart/form-data">
                                <div class="image-upload align-items-end">
                                    <label for="file-input" class="h6 mr-2">
                                        <i class="fas fa-upload"></i>
                                        Profilkép csere
                                    </label>
                                    <input id="file-input" type="file" name="profileImg"/>
                                    <button type="submit" class="btn btn-primary" name="profileImgUpload">Feltöltés</button>
                                </div>
                            </form>
                            

                            
                                <b-button variant="success" @click="$bvModal.show('bv-modal-example')">Adatok módosítása</b-button>

                                <b-modal id="bv-modal-example" hide-footer title="Adatok módosítása">
                                    <p class="mt-2">Módosításhoz változtatsd meg a kívánt mezőt:</p>
                                    <div>
                                        <form action="profil.php" class="kulso-form" method="post">
                                            <input type="text" name="firstname" placeholder="Vezetéknév" class="mt-3 p-2 h-25" value=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getVezeteknev();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
>
                                            <input type="text" name="lastname" placeholder="Keresztnév" class="mt-3 p-2 h-25" value=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getKeresztnev();
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
>
                                            <div class="flex-row mt-3 p-2 h-25">
                                                <div class="register-genderclass rounded">
                                                    <?php if ($_smarty_tpl->tpl_vars['felhasznalo']->value->getNeme() == "férfi") {?>
                                                        <input type="radio" id="male" name="gender" value="férfi" checked>
                                                    <?php } else { ?>
                                                        <input type="radio" id="male" name="gender" value="férfi" >
                                                    <?php }?>
                                                    <label for="male">Férfi</label><br>
                                                </div>
                                                <div class="register-genderclass rounded" >
                                                    <?php if ($_smarty_tpl->tpl_vars['felhasznalo']->value->getNeme() == "nő") {?>
                                                        <input type="radio" id="female" name="gender" value="nő" checked>
                                                    <?php } else { ?>
                                                        <input type="radio" id="female" name="gender" value="nő">
                                                    <?php }?>
                                                    <label for="female">Nő</label><br>
                                                </div>
                                                <div class="register-genderclass rounded">
                                                    <?php if ($_smarty_tpl->tpl_vars['felhasznalo']->value->getNeme() == "egyéb") {?>
                                                        <input type="radio" id="other" name="gender" value="egyéb" checked>
                                                    <?php } else { ?>
                                                        <input type="radio" id="other" name="gender" value="egyéb">
                                                    <?php }?>
                                                    <label for="other">Egyéb</label>
                                                </div>
                                            </div>
                                            <div class="flex-row">
                                                <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="save">Mentés</button>
                                                <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-example')">Mégse</b-button>
                                            </div>
                                        </form>
                                    </div>
                                </b-modal>
                            </div>

                    
                    <div class="flex-row">
                                                <div class="profile-card more-details">
                            <h3>Adatok</h3>
                            <ul>
                                <li><i class="fas fa-user"></i><?php ob_start();
echo ucwords($_smarty_tpl->tpl_vars['felhasznalo']->value->getNeme());
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
 (Nem)</li>
                                <?php if ($_smarty_tpl->tpl_vars['felhasznalo']->value->getIskola()) {?>
                                    <li><i class="fas fa-graduation-cap"></i><?php ob_start();
echo ucwords($_smarty_tpl->tpl_vars['felhasznalo']->value->getIskola());
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
 (Tanulmányok)</li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['felhasznalo']->value->getMunkahely()) {?>
                                    <li><i class="fas fa-suitcase"></i><?php ob_start();
echo ucwords($_smarty_tpl->tpl_vars['felhasznalo']->value->getMunkahely());
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
 (Munkahely)</li>
                                <?php }?>
                            </ul>
                        </div>
                                                <div class="profile-card profile-posting">
                            <h3>Bejegyzés Írása</h3>
                            <div class="form-floating mt-3 mb-3">
                                <textarea class="form-control" placeholder="Írjon bejegyzést" id="floatingTextarea2"></textarea>
                            </div>
                            <div class="flex-row">
                                <div class="image-upload">
                                    <label for="file-input" class="h6">
                                        <i class="fas fa-upload"></i>
                                        Kép feltöltés
                                    </label>
                                    <input id="file-input" type="file"/>
                                </div>
                                <button type="button" class="btn btn-primary">Közzététel</button>
                            </div>
                        </div>
                    </div>

                                        <?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value) {?>
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['bejegyzesek']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['bejegyzesek']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                            <div class="profile-card post-card mx-auto w-50">
                                                                <div class="post-header">
                                                                        <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getProfilkep();
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
" alt="profilkép">
                                                                        <div class="post-header-details">
                                        <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getVezeteknev();
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getKeresztnev();
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</span>
                                        <span class="small"><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getLetrehozasDatuma();
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</span>
                                    </div>
                                </div>

                                                                <div class="post-main">
                                    <div class="image-container">
                                                                                <?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep()) {?>
                                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep();
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
" alt="poszt_kepe">
                                        <?php }?>
                                    </div>
                                                                        <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</p>
                                </div>

                                                                <div class="post-footer">
                                    <button><i class="far fa-heart"></i>Tetszik</button>
                                    <button><i class="far fa-comment-alt"></i>Hozzászólás</button>
                                </div>
                            </div>
                        <?php }
}
?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
