<?php
/* Smarty version 3.1.39, created on 2021-04-23 22:39:09
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6083306dc70517_63263750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '174b6949c410e5ae785cc93c6eb8403a5b3ede49' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/profil.tpl',
      1 => 1619210297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:../includes/classAutoLoad.php' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6083306dc70517_63263750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:../includes/classAutoLoad.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

                                        <div class="flex-row">
                                                <div class="profile-card more-details">
                            <h3>Infos</h3>
                            <ul>
                                <li><i class="fas fa-user"></i><?php ob_start();
echo ucwords($_smarty_tpl->tpl_vars['felhasznalo']->value->getNeme());
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
 (Nem)</li>
                                <li><i class="fas fa-graduation-cap"></i><?php ob_start();
echo ucwords($_smarty_tpl->tpl_vars['felhasznalo']->value->getIskola());
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
 (Tanulmányok)</li>
                                <li><i class="fas fa-suitcase"></i><?php ob_start();
echo ucwords($_smarty_tpl->tpl_vars['felhasznalo']->value->getMunkahely());
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
 (Munkahely)</li>
                            </ul>
                        </div>
                                                <div class="profile-card profile-posting">
                            <h3>Bejegyzés Írása</h3>
                            <div class="form-floating mt-3 mb-3">
                                <textarea class="form-control" placeholder="Írjon bejegyzést" id="floatingTextarea2"></textarea>
                            </div>
                            <div class="flex-row">
                                <div class="image-upload">
                                    <label for="file-input">
                                        <p class="h6 mb-2"><b-icon icon="upload" aria-hidden="true" class="mr-2"></b-icon>Kép feltöltés</p>
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
                            <div class="profile-card post-card mx-auto">
                                                                <div class="post-header">
                                                                        <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getProfilkep();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" alt="profilkép">
                                                                        <div class="post-header-details">
                                        <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getVezeteknev();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['felhasznalo']->value->getKeresztnev();
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</span>
                                        <span class="small"><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getLetrehozasDatuma();
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</span>
                                    </div>
                                </div>

                                                                <div class="post-main">
                                    <div class="image-container">
                                                                                <?php if ($_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep()) {?>
                                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKep();
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
" alt="poszt_kepe">
                                        <?php }?>
                                    </div>
                                                                        <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['bejegyzesek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</p>
                                </div>

                                                                <div class="post-footer">
                                    <button><i class="far fa-heart"></i>Tetszik</button>
                                    <button><i class="far fa-comment-alt"></i>Hozzászólás</button>
                                    <button><i class="fas fa-external-link-alt"></i>Megosztás</button>
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
