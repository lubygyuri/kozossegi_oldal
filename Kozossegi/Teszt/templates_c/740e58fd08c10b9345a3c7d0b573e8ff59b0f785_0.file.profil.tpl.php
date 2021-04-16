<?php
/* Smarty version 3.1.39, created on 2021-04-16 17:12:55
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6079a977544de9_26613641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '740e58fd08c10b9345a3c7d0b573e8ff59b0f785' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\profil.tpl',
      1 => 1618585965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6079a977544de9_26613641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                        <div class="profile-card more-details col-md-4">
                            <h3>Infos</h3>
                            <ul>
                                <li><i class="fas fa-user"></i>Male (Gender)</li>
                                <li><i class="fas fa-suitcase"></i>Google (Job)</li>
                                <li><i class="fas fa-graduation-cap"></i>SZTE (University)</li>
                            </ul>
                        </div>
                        <div class="profile-card profile-posting col-md-7">
                            <h3>Poszt</h3>
                            <textarea name="" id="" cols="30" rows="10" placeholder="Posztolj..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
