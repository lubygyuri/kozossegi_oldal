<?php
/* Smarty version 3.1.39, created on 2021-04-24 02:23:53
  from 'D:\XAMPP\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\uzenetek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6083651983a337_13375814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0eb4a2bfc6498764db298b9f2dd86f98fcc0df6' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\uzenetek.tpl',
      1 => 1619223668,
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
function content_6083651983a337_13375814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="app5">

    <div class="profile-area">
        <div class="profile-container">
            <div class="messages-card mx-auto">

                                <div class="messages-header">
                                        <form action="#" class="mx-auto">
                        <input type="search" placeholder="Keresés...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>

                                        <div class="header-details-container">
                                                <span>Example example</span>
                                                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="profilkép">
                    </div>
                </div>

                                <div class="messages-main">
                                        <div class="messages-friends-container">
                        <ul>
                            <li>
                                                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="profilkép">
                                                                <div class="friend-details">
                                                                        <span>Example2 Example2</span>
                                    <div class="flex-row">
                                                                                <p>Lorem ipsum dolor...</p>
                                                                                <small>14:34</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                                        <div class="chat-section">
                                                <div class="chat-partner">
                                                        <img src="https://images.unsplash.com/photo-1492681290082-e932832941e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="profilkép">
                                                        <span>Example2 example2</span>
                        </div>

                                                <div class="chat-messages">
                                                        <div class="incoming-messages">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti ex iste iusto mollitia, nisi quis repellendus reprehenderit sunt unde?</p>
                            </div>
                                                        <div class="outgoing-messages">
                                                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                                                <div class="chat-toolbar">
                            <form action="#">
                                                                <input type="text" placeholder="Írj egy üzenetet...">
                                                                <button><i class="far fa-paper-plane"></i></button>
                            </form>
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
