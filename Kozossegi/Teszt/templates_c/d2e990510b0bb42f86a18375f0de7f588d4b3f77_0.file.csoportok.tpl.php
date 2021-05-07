<?php
/* Smarty version 3.1.39, created on 2021-05-07 18:51:44
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\csoportok.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60957020b6b0b0_88857350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e990510b0bb42f86a18375f0de7f588d4b3f77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\csoportok.tpl',
      1 => 1620406303,
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
function content_60957020b6b0b0_88857350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="app5">

    <div class="profile-area">
        <div class="profile-container">
            <div class="messages-card mx-auto">

                                <div class="messages-header">
                                        <div class="header-details-container">
                                                <span>Teljes Név</span>
                                                <img src="" alt="profilkép">
                    </div>
                </div>

                                <div class="messages-main">
                                        <div class="messages-friends-container">
                        <ul>
                            <a href="#" class="friendsList-li active">
                                <li>
                                                                        <div class="friend-details">
                                                                                <span>Csoport Neve</span>
                                        <div class="flex-row">
                                                                                        <p>Lorem ipsum dolor sit amet.</p>
                                                                                        <small>11:12</small>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        </ul>
                    </div>

                                        <div class="chat-section">

                                                <div class="chat-messages" id="chat-messages">
                            <div class="chat-messages-timer"><small></small></div>
                                                                <div class="incoming-messages">
                                                                        <p><strong class="mr-2">Név:</strong> Helloka</p>
                                </div>
                                                                <div class="outgoing-messages">
                                                                        <p>Hello</p>
                            </div>
                        </div>

                                                <div class="chat-toolbar">
                            <form action="#" method="post">
                                                                <input type="text" name="messageInp" placeholder="Írj egy üzenetet...">
                                                                <button type="submit" name="sendMessage"><i class="far fa-paper-plane"></i></button>
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
