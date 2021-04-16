<?php
/* Smarty version 3.1.39, created on 2021-04-16 20:23:35
  from 'D:\XAMPP\htdocs\adatbalapu\kozossegi_oldal\Kozossegi\Teszt\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6079d6271ac259_80966690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b271b32cbc21d3bc4b91acca0a3e73e4770ed4af' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\adatbalapu\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\index.tpl',
      1 => 1618597413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6079d6271ac259_80966690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="app4" class="container px-4 mt-5">

  <div class="shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5 mx-auto">
      <form action="#" class="kulso-form">
          <h1 class="h3 mb-3 font-weight-bold text-center">Üdvözöllek!</h1>
          <input type="email" name="email" placeholder="E-mail cím" class="mt-3 p-2 h-25">
          <input type="password" name="password" placeholder="Jelszó" class="mb-3 mt-2 p-2 h-25">
          <div class="login-flex-c">
            <b-button id="sign-in" variant="primary" class="p-2">Bejelentkezés</b-button>
            <b-button id="register-id" variant="success" class="m-3 p2" @click="$bvModal.show('bv-modal-example')">Regisztráció</b-button>
          </div>
      </form>

        <b-modal id="bv-modal-example" hide-footer title="Regisztráció">
          <p class="mt-2">Kérlek töltsd ki az alábbi adatokat:</p>
          <div>
            <form action="#" class="kulso-form">
              <input type="text" name="firstname" placeholder="Vezetéknév" class="mt-3 p-2 h-25">
              <input type="text" name="lastname" placeholder="Keresztnév" class="mt-3 p-2 h-25">
              <input type="email" name="email" placeholder="E-mail cím" class="mt-3 p-2 h-25">
              <input type="password" name="password" placeholder="Jelszó" class="mt-3 p-2 h-25">
              <input type="password" name="password-secure" placeholder="Jelszó megerősítése" class="mt-3 p-2 h-25">
              <input type="date" name="birth-date" class="mt-2 h-25">
              <div class="flex-row mt-3 mb-3">
                <div class="register-genderclass rounded">
                  <input type="radio" id="male" name="gender" value="male">
                  <label for="male">Férfi</label><br>
                </div>
                <div class="register-genderclass rounded" >
                  <input type="radio" id="female" name="gender" value="female">
                  <label for="female">Nő</label><br>
                </div>
                <div class="register-genderclass rounded">
                  <input type="radio" id="other" name="gender" value="other" checked>
                  <label for="other">Egyéb</label>
                </div>
              </div>
              <div class="flex-row">
                <b-button id="register-id" variant="success" class="mt-3 p2">Regisztráció</b-button>
                <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-example')">Cancel</b-button>
              </div>
            </form>
          </div>
        </b-modal>

  </div>


</div><?php }
}
