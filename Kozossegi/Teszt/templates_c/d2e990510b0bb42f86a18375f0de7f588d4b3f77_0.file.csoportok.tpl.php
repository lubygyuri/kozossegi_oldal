<?php
/* Smarty version 3.1.39, created on 2021-05-07 19:11:28
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\csoportok.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609574c0599a50_24867692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e990510b0bb42f86a18375f0de7f588d4b3f77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\csoportok.tpl',
      1 => 1620407486,
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
function content_609574c0599a50_24867692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="app5">

    <div class="profile-area">
        <div class="profile-container">
            <div class="messages-card mx-auto">

                                <div class="messages-header" style="justify-content: space-between !important;">
                    <b-button variant="primary" @click="$bvModal.show('bv-modal-csoport')" class="col-md-3 ml-4">Csoport létrehozása</b-button>

                    <b-modal id="bv-modal-csoport" hide-footer title="Csoport létrehozása">
                        <p>Az alábbi mező kitöltésével új csoportos beszélgetést nyithatsz:</p>
                        <div>
                            <form action="#" class="kulso-form" method="post">
                                <input type="text" class="mt-3 p-2 h-25" name="csoportNev" placeholder="Csoport neve" required>
                                <div class="flex-row">
                                    <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="csoportLetrehozas">Létrehozás</button>
                                    <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-csoport')">Mégse</b-button>
                                </div>
                            </form>
                        </div>
                    </b-modal>

                                        <div class="header-details-container">
                                                <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getVezeteknev();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getKeresztnev();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</span>
                                                <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getProfilkep();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" alt="profilkép">
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
