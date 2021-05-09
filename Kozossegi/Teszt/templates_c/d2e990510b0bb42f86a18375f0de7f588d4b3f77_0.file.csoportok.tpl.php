<?php
/* Smarty version 3.1.39, created on 2021-05-09 16:48:07
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\csoportok.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6097f627388c98_86041836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e990510b0bb42f86a18375f0de7f588d4b3f77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\csoportok.tpl',
      1 => 1620571686,
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
function content_6097f627388c98_86041836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="app5">

    <div class="profile-area">
        <div class="profile-container">
            <div class="messages-card mx-auto">

                                <div class="messages-header" style="justify-content: space-between !important;">
                    <div class="flex-row col-md-3" style="align-items: center !important;">
                        <b-button variant="primary" @click="$bvModal.show('bv-modal-csoport')" class="ml-3 col-md-10">Csoport létrehozása</b-button>
                        <b-button variant="primary" @click="$bvModal.show('bv-modal-csoportTagHozzaadasa')" class="ml-4" style="display: flex; justify-content: center;"><b-icon icon="person-plus-fill"></b-icon></b-button>
                    </div>

                                        <b-modal id="bv-modal-csoport" hide-footer title="Csoport létrehozása">
                        <p>Az alábbi mező kitöltésével új csoportos beszélgetést nyithatsz:</p>
                        <div>
                            <form action="csoportok.php" class="kulso-form" method="post">
                                <input type="text" class="mt-3 p-2 h-25" name="csoportNev" placeholder="Csoport neve" required>
                                <div class="flex-row">
                                    <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="csoportLetrehozas">Létrehozás</button>
                                    <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-csoport')">Mégse</b-button>
                                </div>
                            </form>
                        </div>
                    </b-modal>

                                        <b-modal id="bv-modal-csoportTagHozzaadasa" hide-footer title="Csoporttag hozzáadása">
                        <p>Az alábbi mezők kitöltésével új tagot vehetsz fel az egyik csoportodba:</p>
                        <div>
                            <form action="csoportok.php" class="kulso-form" method="post">
                                <select name="group" id="groups" class="form-select mt-3 p-2 h-25" aria-label="Csoport kiválasztása" onchange="getAllGroupMember()">
                                    <?php if (count($_smarty_tpl->tpl_vars['groupOptions']->value) != 0) {?>
                                            <option selected disabled>Válassz csoportot</option>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['groupOptions']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['groupOptions']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                            <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['groupOptions']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['groupOptions']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</option>
                                        <?php }
}
?>
                                    <?php } else { ?>
                                        <option selected disabled>Nincsenek csoportjaid</option>
                                    <?php }?>
                                </select>
                                <div id="members" class="w-100"></div>
                                <div class="flex-row">
                                    <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="csoportTagFelvétele">Felvétel</button>
                                    <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-csoportTagHozzaadasa')">Mégse</b-button>
                                </div>
                            </form>
                        </div>
                    </b-modal>

                                        <div class="header-details-container">
                                                <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getVezeteknev();
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getKeresztnev();
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</span>
                                                <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getProfilkep();
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" alt="profilkép">
                    </div>
                </div>

                                <div class="messages-main">
                                        <div class="messages-friends-container">
                        <ul>
                            <?php if ($_smarty_tpl->tpl_vars['csoportok']->value) {?>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['csoportok']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['csoportok']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                    <?php if ($_smarty_tpl->tpl_vars['csoportok']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito() == $_smarty_tpl->tpl_vars['recentCsoport']->value->getAzonosito()) {?>
                                        <a href="csoportok.php?csoportAzonosito=<?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportok']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" class="friendsList-li active">
                                            <li>
                                                                                                 <div class="friend-details">
                                                                                                         <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportok']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</span>
                                                    <div class="flex-row">
                                                            <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? count($_smarty_tpl->tpl_vars['latestGroupMessages']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['latestGroupMessages']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
                                                                <?php if ($_smarty_tpl->tpl_vars['latestGroupMessages']->value[$_smarty_tpl->tpl_vars['j']->value]->getCsoportAzonosito() == $_smarty_tpl->tpl_vars['csoportok']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito()) {?>
                                                                                                                                         <p><strong class="mr-2"><?php echo $_smarty_tpl->tpl_vars['latestGroupMessages']->value[$_smarty_tpl->tpl_vars['j']->value]->getNev();?>
:</strong><?php ob_start();
echo $_smarty_tpl->tpl_vars['latestGroupMessages']->value[$_smarty_tpl->tpl_vars['j']->value]->getUzenet();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
</p>
                                                                                                                                         <small><?php ob_start();
echo $_smarty_tpl->tpl_vars['latestGroupMessages']->value[$_smarty_tpl->tpl_vars['j']->value]->getKuldesIdeje();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</small>
                                                                <?php }?>
                                                            <?php }
}
?>
                                                    </div>
                                                </div>
                                            </li>
                                        </a>
                                    <?php } else { ?>
                                        <a href="csoportok.php?csoportAzonosito=<?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportok']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" class="friendsList-li">
                                            <li>
                                                                                                <div class="friend-details">
                                                                                                        <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportok']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</span>
                                                    <div class="flex-row">
                                                        <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? count($_smarty_tpl->tpl_vars['latestGroupMessages']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['latestGroupMessages']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
                                                             <?php if ($_smarty_tpl->tpl_vars['latestGroupMessages']->value[$_smarty_tpl->tpl_vars['j']->value]->getCsoportAzonosito() == $_smarty_tpl->tpl_vars['csoportok']->value[$_smarty_tpl->tpl_vars['i']->value]->getAzonosito()) {?>
                                                                                                                                <p><strong class="mr-2"><?php echo $_smarty_tpl->tpl_vars['latestGroupMessages']->value[$_smarty_tpl->tpl_vars['j']->value]->getNev();?>
:</strong><?php ob_start();
echo $_smarty_tpl->tpl_vars['latestGroupMessages']->value[$_smarty_tpl->tpl_vars['j']->value]->getUzenet();
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</p>
                                                                                                                                <small><?php ob_start();
echo $_smarty_tpl->tpl_vars['latestGroupMessages']->value[$_smarty_tpl->tpl_vars['j']->value]->getKuldesIdeje();
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</small>
                                                            <?php }?>
                                                        <?php }
}
?>
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

                                                <div class="chat-messages" id="chat-messages">
                            <?php if ($_smarty_tpl->tpl_vars['csoportUzenetek']->value) {?>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['csoportUzenetek']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['csoportUzenetek']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                    <div class="chat-messages-timer"><small><?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportUzenetek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKuldesIdeje();
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</small></div>
                                    <?php if ($_smarty_tpl->tpl_vars['csoportUzenetek']->value[$_smarty_tpl->tpl_vars['i']->value]->getKuldoAzonosito() != $_smarty_tpl->tpl_vars['belepettFelhasznalo']->value->getEmail()) {?>
                                                                                <div class="incoming-messages">
                                                                                        <p><strong class="mr-2"><?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportUzenetek']->value[$_smarty_tpl->tpl_vars['i']->value]->getNev();
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
:</strong> <?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportUzenetek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
</p>
                                        </div>
                                    <?php } else { ?>
                                                                                <div class="outgoing-messages">
                                                                                        <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['csoportUzenetek']->value[$_smarty_tpl->tpl_vars['i']->value]->getUzenet();
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
</p>
                                        </div>
                                    <?php }?>
                                <?php }
}
?>
                            <?php }?>
                        </div>

                                                <div class="chat-toolbar">
                            <form action="csoportok.php?csoportAzonosito=<?php ob_start();
echo $_smarty_tpl->tpl_vars['recentCsoport']->value->getAzonosito();
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
" method="post">
                                                                <input type="text" name="csoportMessageInp" placeholder="Írj egy üzenetet...">
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
