{include file="header.tpl"}
{* TODO: Smarty errors handling *}
<div id="app4" class="container px-4 mt-5">

  <div class="shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5 mx-auto">
      <form action="login.php" class="kulso-form" method="post">
          <h1 class="h3 mb-3 font-weight-bold text-center">Üdvözöllek!</h1>
          <input type="email" name="email" placeholder="E-mail cím" class="mt-3 p-2 h-25" required>
          <input type="password" name="password" placeholder="Jelszó" class="mb-3 mt-2 p-2 h-25" required>
          <div class="login-flex-c">
            <input type="submit" name="submit" id="sign-in" variant="primary" class="p-2">Bejelentkezés</input>
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
              <input type="date" name="birth-date" class="mt-2 h-25" required>
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
                <input type="submit" id="register-id" variant="success" class="mt-3 p2" name="submit">Regisztráció</input>
                <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-example')">Cancel</b-button>
              </div>
            </form>
          </div>
        </b-modal>


    {if !is_null($errors)}
      {for $i=0 to $errors|@count-1}
        <p class="error">{{$errors[$i]}}</p>
      {/for}
    {/if}

  </div>


</div>