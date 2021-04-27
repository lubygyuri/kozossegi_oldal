<?php
/* Smarty version 3.1.39, created on 2021-04-27 10:54:35
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6087d14be1ea58_31272094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '174b6949c410e5ae785cc93c6eb8403a5b3ede49' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/profil.tpl',
      1 => 1619513636,
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
function content_6087d14be1ea58_31272094 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <?php if ($_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getEmail() == $_smarty_tpl->tpl_vars['felhasznalo']->value->getEmail()) {?>
                                <form action="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getEmail();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" method="post" enctype="multipart/form-data">
                                    <div class="image-upload align-items-end">
                                        <label for="file-input" class="h6 mr-2">
                                            <i class="fas fa-upload"></i>
                                            Profilkép csere
                                        </label>
                                        <input id="file-input" type="file" name="profileImg"/>
                                        <button type="submit" class="btn btn-primary" name="profileImgUpload">Feltöltés</button>
                                    </div>
                                </form>


                                                                                    <b-button variant="primary" @click="$bvModal.show('bv-modal-example')">Adatok módosítása</b-button>

                                <b-modal id="bv-modal-example" hide-footer title="Adatok módosítása">
                                    <p class="mt-2">Módosításhoz változtatsd meg a kívánt mezőt:</p>
                                    <div>
                                        <form action="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getEmail();
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" class="kulso-form" method="post">
                                            <input type="text" name="firstname" class="mt-3 p-2 h-25" placeholder="Vezetéknév" value=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getVezeteknev();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
>
                                            <input type="text" name="lastname" class="mt-3 p-2 h-25" placeholder="Keresztnév" value=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getKeresztnev();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
>
                                            <?php if ($_smarty_tpl->tpl_vars['felhasznalo']->value->getIskola()) {?>
                                                <input type="text" name="school" class="mt-3 p-2 h-25" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getIskola();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
">
                                            <?php } else { ?>
                                                <input type="text" name="school" class="mt-3 p-2 h-25" placeholder="Tanulmányok">
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['felhasznalo']->value->getMunkahely()) {?>
                                                <input type="text" name="job" class="mt-3 p-2 h-25" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getMunkahely();
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
">
                                            <?php } else { ?>
                                                <input type="text" name="job" class="mt-3 p-2 h-25" placeholder="Munkahely">
                                            <?php }?>

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
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['friendStatus']->value == "belaPendingEsBela") {?>
                                <form action="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getEmail();
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
" method="post">
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-times"></i>Ismerőskérelem visszavonása</button>
                                </form>
                            <?php } elseif ($_smarty_tpl->tpl_vars['friendStatus']->value == "belaPendingEsJuli") {?>
                                <form action="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getEmail();
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
" method="post">
                                    <button type="submit" name="friendAccept" class="btn btn-warning"><i class="fas fa-user-friends"></i>Ismerőskérelem visszaigazolása</button>
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-times"></i>Ismerőskérelem visszautasítása</button>
                                </form>
                            <?php } elseif ($_smarty_tpl->tpl_vars['friendStatus']->value == "juliPendingEsJuli") {?>
                                <form action="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getEmail();
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
" method="post">
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-times"></i>Ismerőskérelem visszavonása</button>
                                </form>
                            <?php } elseif ($_smarty_tpl->tpl_vars['friendStatus']->value == "juliPendingEsBela") {?>
                                <form action="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getEmail();
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
" method="post">
                                    <button type="submit" name="friendAccept" class="btn btn-warning"><i class="fas fa-user-friends"></i>Ismerőskérelem visszaigazolása</button>
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-times"></i>Ismerőskérelem visszautasítása</button>
                                </form>
                            <?php } elseif ($_smarty_tpl->tpl_vars['friendStatus']->value == "belaEsJuliBaratok") {?>
                                <form action="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getEmail();
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
" method="post">
                                    <button type="button" class="btn btn-success"><i class="fas fa-user-check"></i>Ismerős</button>
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-minus"></i>Ismerős törlése</button>
                                </form>
                            <?php } elseif ($_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getEmail() != $_smarty_tpl->tpl_vars['felhasznalo']->value->getEmail()) {?>
                                <form action="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getEmail();
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
" method="post">
                                    <button type="submit" name="friendRequest" class="btn btn-primary"><i class="fas fa-user-plus"></i>Ismerősnek jelölés</button>
                                </form>
                            <?php }?>
                        </div>

                    
                    <div class="flex-row">
                                                <div class="profile-card more-details">
                            <h3>Adatok</h3>
                            <ul>
                                <li><i class="fas fa-user"></i><?php ob_start();
echo ucwords($_smarty_tpl->tpl_vars['felhasznalo']->value->getNeme());
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
 (Nem)</li>
                                <?php if ($_smarty_tpl->tpl_vars['felhasznalo']->value->getIskola()) {?>
                                    <li><i class="fas fa-graduation-cap"></i><?php ob_start();
echo ucwords($_smarty_tpl->tpl_vars['felhasznalo']->value->getIskola());
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
 (Tanulmányok)</li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['felhasznalo']->value->getMunkahely()) {?>
                                    <li><i class="fas fa-suitcase"></i><?php ob_start();
echo ucwords($_smarty_tpl->tpl_vars['felhasznalo']->value->getMunkahely());
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
 (Munkahely)</li>
                                <?php }?>
                            </ul>
                        </div>
                                                <div class="profile-card profile-posting">
                            <form action="profil.php?email=<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getEmail();
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
" method="post" enctype="multipart/form-data">
                                <h3>Bejegyzés Írása</h3>
                                <div class="form-floating mt-3 mb-3">
                                    <textarea class="form-control" placeholder="Írjon bejegyzést" name="text" id="floatingTextarea2"></textarea>
                                </div>
                                <div class="flex-row">
                                    <label for="postImageInput" class="h6 label-cursor">
                                        <i class="fas fa-upload"></i>
                                        Kép feltöltés
                                    </label>
                                    <input hidden id="postImageInput" type="file" name="postImage"/>
                                    <button type="submit" class="btn btn-primary" name="createPost">Közzététel</button>
                                </div>
                            </form>
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
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
" alt="profilkép">
                                                                        <div class="post-header-details">
                                        <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getVezeteknev();
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getKeresztnev();
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
</span>
                                        <span class="small"><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getLetrehozasIdeje();
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
</span>
                                    </div>
                                </div>

                                                                <div class="post-main">
                                    <div class="image-container">
                                                                                <?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep()) {?>
                                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep();
$_prefixVariable26 = ob_get_clean();
echo $_prefixVariable26;?>
" alt="poszt_kepe">
                                        <?php }?>
                                    </div>
                                                                        <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable27 = ob_get_clean();
echo $_prefixVariable27;?>
</p>
                                </div>
                                                                    <div class="post-footer">
                                        <div id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable28 = ob_get_clean();
echo $_prefixVariable28;?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getIsLiked()) {?>
                                                <button onclick="like(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable29 = ob_get_clean();
echo $_prefixVariable29;?>
)" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button>
                                            <?php } else { ?>
                                                <button onclick="like(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable30 = ob_get_clean();
echo $_prefixVariable30;?>
)" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button>
                                            <?php }?>
                                        </div>
                                        <button v-b-toggle.my-collapse<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable31 = ob_get_clean();
echo $_prefixVariable31;?>
 id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable32 = ob_get_clean();
echo $_prefixVariable32;?>
"><i class="far fa-comment-alt"></i>Hozzászólás</button>
                                    </div>
                                <template>
                                    <b-collapse id="my-collapse<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable33 = ob_get_clean();
echo $_prefixVariable33;?>
" class="mt-4">
                                        <div id="komment<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable34 = ob_get_clean();
echo $_prefixVariable34;?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKommentek()) {?>
                                                <?php $_smarty_tpl->_assignInScope('x', $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKommentek());?>
                                                <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? count($_smarty_tpl->tpl_vars['x']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['x']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
                                                    <div class="border border-1 mt-2 rounded align-self-baseline w-100">
                                                        <div class="post-header2">
                                                            <b-img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getProfilkep();
$_prefixVariable35 = ob_get_clean();
echo $_prefixVariable35;?>
" rounded="circle"  class="d-inline-block align-top"></b-img>
                                                            <div class="post-header-details">
                                                                <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getVezeteknev();
$_prefixVariable36 = ob_get_clean();
echo $_prefixVariable36;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getFelhasznaloAzonosito()->getKeresztnev();
$_prefixVariable37 = ob_get_clean();
echo $_prefixVariable37;?>
</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p class="m-3"><?php ob_start();
echo $_smarty_tpl->tpl_vars['x']->value[$_smarty_tpl->tpl_vars['j']->value]->getUzenet();
$_prefixVariable38 = ob_get_clean();
echo $_prefixVariable38;?>
 </p>
                                                        </div>
                                                    </div>
                                                <?php }
}
?>
                                            <?php }?>
                                        </div>
                                        <div class="border border-3 mt-2">
                                            <div class="post-header2">
                                                <b-img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getProfilkep();
$_prefixVariable39 = ob_get_clean();
echo $_prefixVariable39;?>
" rounded="circle" class="d-inline-block align-top "></b-img>
                                                <div class="post-header-details">
                                                    <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getVezeteknev();
$_prefixVariable40 = ob_get_clean();
echo $_prefixVariable40;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getKeresztnev();
$_prefixVariable41 = ob_get_clean();
echo $_prefixVariable41;?>
</span>
                                                </div>
                                            </div>
                                            <div class="form-floating mt-3 mb-1">
                                                <textarea class="form-control" placeholder="Írjon kommentet" id="textarea<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable42 = ob_get_clean();
echo $_prefixVariable42;?>
" style="height: 100px"></textarea>
                                            </div>
                                            <button type="button" class="btn btn-primary" onclick="komment(<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable43 = ob_get_clean();
echo $_prefixVariable43;?>
)">Közzététel</button>
                                        </div>
                                    </b-collapse>
                                </template>



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
