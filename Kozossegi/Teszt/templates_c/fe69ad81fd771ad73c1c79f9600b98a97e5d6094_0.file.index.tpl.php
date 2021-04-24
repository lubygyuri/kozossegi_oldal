<?php
/* Smarty version 3.1.39, created on 2021-04-24 01:45:59
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60835c37b77cc6_62847587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe69ad81fd771ad73c1c79f9600b98a97e5d6094' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\index.tpl',
      1 => 1619221559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60835c37b77cc6_62847587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app4" class="container px-4 mt-5">

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
        <div class="alert alert-danger" role="alert"><?php ob_start();
echo $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->tpl_vars['i']->value];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</div>
      <?php }
}
?>
    <?php }?>

  </div>


</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
