<?php
/* Smarty version 3.1.39, created on 2021-05-05 18:29:48
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\uzenetek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6092c7fc4e83c3_83978469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '384aab2ccffe3e3fa45ec699e3298a54df090614' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\uzenetek.tpl',
      1 => 1620232187,
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
function content_6092c7fc4e83c3_83978469 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <?php if ($_smarty_tpl->tpl_vars['friendsList']->value) {?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['friendsList']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['friendsList']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php if ($_smarty_tpl->tpl_vars['profil']->value && $_smarty_tpl->tpl_vars['profil']->value == $_smarty_tpl->tpl_vars['friendsList']->value[$_smarty_tpl->tpl_vars['i']->value]->getEmail()) {?>
                                    <a href="uzenetek.php?profil=<?php ob_start();
echo $_smarty_tpl->tpl_vars['friendsList']->value[$_smarty_tpl->tpl_vars['i']->value]->getEmail();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
" class="friendsList-li active">
                                        <li>
                                                                                        <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['friendsList']->value[$_smarty_tpl->tpl_vars['i']->value]->getProfilkep();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" alt="profilkép">
                                                                                        <div class="friend-details">
                                                                                                <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['friendsList']->value[$_smarty_tpl->tpl_vars['i']->value]->getVezeteknev();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['friendsList']->value[$_smarty_tpl->tpl_vars['i']->value]->getKeresztnev();
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</span>
                                                <div class="flex-row">
                                                                                                        <p>Lorem ipsum dolor...</p>
                                                                                                        <small>14:34</small>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                <?php } else { ?>
                                    <a href="uzenetek.php?profil=<?php ob_start();
echo $_smarty_tpl->tpl_vars['friendsList']->value[$_smarty_tpl->tpl_vars['i']->value]->getEmail();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" class="friendsList-li">
                                        <li>
                                                                                        <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['friendsList']->value[$_smarty_tpl->tpl_vars['i']->value]->getProfilkep();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" alt="profilkép">
                                                                                        <div class="friend-details">
                                                                                                <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['friendsList']->value[$_smarty_tpl->tpl_vars['i']->value]->getVezeteknev();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['friendsList']->value[$_smarty_tpl->tpl_vars['i']->value]->getKeresztnev();
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</span>
                                                <div class="flex-row">
                                                                                                        <p>Lorem ipsum dolor...</p>
                                                                                                        <small>14:34</small>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                <?php }?>
                            <?php }
}
?>
                            <?php }?>
                        </ul>
                    </div>

                                        <div class="chat-section">

                                                <div class="chat-messages">
                        <?php if ($_smarty_tpl->tpl_vars['uzenetek']->value) {?>
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['uzenetek']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['uzenetek']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php if ($_smarty_tpl->tpl_vars['uzenetek']->value[$_smarty_tpl->tpl_vars['i']->value]->getFogadoAzonosito() == $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getEmail()) {?>
                                                                        <div class="incoming-messages">
                                                                                <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['uzenetek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</p>
                                    </div>
                                <?php } else { ?>
                                                                        <div class="outgoing-messages">
                                                                                <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['uzenetek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</p>
                                    </div>
                                <?php }?>
                        <?php }
}
?>
                        <?php }?>
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
