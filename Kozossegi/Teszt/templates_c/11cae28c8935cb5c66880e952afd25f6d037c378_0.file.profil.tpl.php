<?php
/* Smarty version 3.1.39, created on 2021-04-16 19:46:18
  from '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6079cd6a7cdff6_02965099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11cae28c8935cb5c66880e952afd25f6d037c378' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/profil.tpl',
      1 => 1618595101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_6079cd6a7cdff6_02965099 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="profilkép">
                </div>

                                <div class="profile-main">
                                        <div class="profile-name">
                        <h2>Example Example</h2>
                    </div>
                                        <div class="personal-details">
                        <span><i class="fas fa-envelope"></i>example@example.com</span>
                        <span><i class="fas fa-birthday-cake"></i>2000.08.05.</span>
                    </div>

                                        <div class="flex-row">
                                                <div class="profile-card more-details">
                            <h3>Infos</h3>
                            <ul>
                                <li><i class="fas fa-user"></i>Male (Gender)</li>
                                <li><i class="fas fa-suitcase"></i>Google (Job)</li>
                                <li><i class="fas fa-graduation-cap"></i>SZTE (University)</li>
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

                                        <div class="profile-card post-card mx-auto">
                        <div class="post-header">
                            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="profilkép">
                            <div class="post-header-details">
                                <span>Example example</span>
                                <span class="small">12:32</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div><?php }
}
