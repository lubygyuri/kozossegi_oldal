<?php
/* Smarty version 3.1.39, created on 2021-05-06 17:36:50
  from '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60940d120b2b60_94920920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35651e7d1322b25cf2bfdd8d2c1d1192998a8d89' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossegi/kozossegi_oldal/Kozossegi/Teszt/templates/index.tpl',
      1 => 1620311085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60940d120b2b60_94920920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app4" class="container p-5" style="height: 96vh">

  <div class="shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5 mx-auto">
      <form action="login.php" class="kulso-form" method="post">
          <h1 class="h3 mb-3 font-weight-bold text-center">Üdvözöllek!</h1>

          <input type="email" name="email" placeholder="E-mail cím" class="mt-3 p-2 h-25" required>
          <input type="password" name="password" placeholder="Jelszó" class="mb-3 mt-2 p-2 h-25" required>
          <div class="login-flex-c">
            <button type="submit" name="submit" id="sign-in" class="p-2 btn btn-primary">Bejelentkezés</button>
            <b-button id="register-id" variant="success" class="m-3 p2" @click="$bvModal.show('bv-modal-example')">Regisztráció</b-button>
          </div>
      </form>

        <b-modal id="bv-modal-example" hide-footer title="Regisztráció">
          <p class="mt-2">Kérlek töltsd ki az alábbi adatokat:</p>
          <div>
            <form action="regisztracio.php" class="kulso-form" method="post">
              <input type="text" name="firstname" placeholder="Vezetéknév" class="mt-3 p-2 h-25" required>
              <input type="text" name="lastname" placeholder="Keresztnév" class="mt-3 p-2 h-25" required>
              <input type="email" name="email" placeholder="E-mail cím" class="mt-3 p-2 h-25" required>
              <input type="password" name="password" placeholder="Jelszó" class="mt-3 p-2 h-25" required>
              <input type="password" name="password-secure" placeholder="Jelszó megerősítése" class="mt-3 p-2 h-25">
              <input type="date" name="birth-date" class="mt-3 p-2 h-25" required>
              <div class="flex-row mt-3 p-2 h-25">
                <div class="register-genderclass rounded">
                  <input type="radio" id="male" name="gender" value="férfi">
                  <label for="male">Férfi</label><br>
                </div>
                <div class="register-genderclass rounded" >
                  <input type="radio" id="female" name="gender" value="nő">
                  <label for="female">Nő</label><br>
                </div>
                <div class="register-genderclass rounded">
                  <input type="radio" id="other" name="gender" value="egyéb" checked>
                  <label for="other">Egyéb</label>
                </div>
              </div>
              <div class="flex-row">
                <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="submit">Regisztráció</button>
                <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-example')">Mégse</b-button>
              </div>
            </form>
          </div>
        </b-modal>

        <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['errors']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['errors']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <?php if (strpos($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['i']->value],"Sikeres") === 0) {?>
          <div class="alert alert-success" role="alert"><?php ob_start();
echo $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['i']->value];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</div>
        <?php } else { ?>
          <div class="alert alert-danger" role="alert"><?php ob_start();
echo $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['i']->value];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</div>
        <?php }?>
      <?php }
}
?>
    <?php }?>

  </div>

</div>
<div id="loginfooter">
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
