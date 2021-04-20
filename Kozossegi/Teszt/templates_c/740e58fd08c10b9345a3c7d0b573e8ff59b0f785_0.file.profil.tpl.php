<?php
/* Smarty version 3.1.39, created on 2021-04-20 19:24:29
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607f0e4d331815_06691611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '740e58fd08c10b9345a3c7d0b573e8ff59b0f785' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\profil.tpl',
      1 => 1618871735,
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
function content_607f0e4d331815_06691611 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h2>Example example</h2>
                    </div>
                                        <div class="personal-details">
                        <span><i class="fas fa-envelope"></i>example@example.com</span>
                        <span><i class="fas fa-birthday-cake"></i>2000-08-05</span>
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

                                                <div class="post-main">
                            <div class="image-container">
                                                                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="">
                            </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda culpa deleniti deserunt nemo ratione. Animi aspernatur autem cupiditate dolore eligendi est, illum iste iure mollitia necessitatibus optio praesentium quam rerum sequi similique tempore veritatis voluptatum.</p>
                        </div>

                                                <div class="post-footer">
                            <button><i class="far fa-heart"></i>Tetszik</button>
                            <button><i class="far fa-comment-alt"></i>Hozzászólás</button>
                            <button><i class="fas fa-external-link-alt"></i>Megosztás</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
