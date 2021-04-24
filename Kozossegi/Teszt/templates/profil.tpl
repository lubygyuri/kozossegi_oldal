{include file="header.tpl"}
{include file="menu.tpl"}
{include file="../includes/classAutoLoad.php"}

<div id="app3">
    <div class="profile-area">
        <div class="profile-container">
            <div class="profile-card col-md-11">
                {* Fejléc Háttérkép *}
                <div class="background-image">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="fejléc">
                </div>

                {* Profilkép *}
                <div class="profile-image">
                    <img src="{{$felhasznalo->getProfilkep()}}" alt="profilkép">
                </div>

                {* Main szekció *}
                <div class="profile-main">
                    {* Teljes név *}
                    <div class="profile-name">
                        <h2>{{$felhasznalo->getVezeteknev()}} {{$felhasznalo->getKeresztnev()}}</h2>
                    </div>
                    {* Személyes adatok *}
                    <div class="personal-details">
                        <span><i class="fas fa-envelope"></i>{{$felhasznalo->getEmail()}}</span>
                        <span><i class="fas fa-birthday-cake"></i>{{date_format(date_create($felhasznalo->getSzuletesiDatum()), "Y-m-d")}}</span>
                    </div>

                    {* Adatok és bejegyzés szekció *}

                    {* Profilkép feltöltés *}
                        <div class="flex-row p-3 border-top border-bottom">
                            <form action="profil.php" method="post" enctype="multipart/form-data">
                                <div class="image-upload align-items-end">
                                    <label for="file-input" class="h6 mr-2">
                                        <i class="fas fa-upload"></i>
                                        Profilkép csere
                                    </label>
                                    <input id="file-input" type="file" name="profileImg"/>
                                    <button type="submit" class="btn btn-primary" name="profileImgUpload">Feltöltés</button>
                                </div>
                            </form>

                            {* Adatok módosítása *}
                            
{* Működő update profile *}
{*                            <div>*}
{*                                <b-button variant="success" class="m-3 p2" @click="$bvModal.show('bv-modal-example')">Adatok módosítása</b-button>*}

{*                                <b-modal id="'bv-modal-example'" hide-footer title="Adatok módosítása">*}
{*                                    <p class="mt-2">Módosításhoz változtatsd meg a kívánt mezőt:</p>*}
{*                                    <div>*}
{*                                        <form action="profil.php" class="kulso-form" method="post">*}
{*                                            <input type="text" name="firstname" placeholder="Vezetéknév" class="mt-3 p-2 h-25" value={{$felhasznalo->getVezeteknev()}}>*}
{*                                            <input type="text" name="lastname" placeholder="Keresztnév" class="mt-3 p-2 h-25" value={{$felhasznalo->getKeresztnev()}}>*}
{*                                            <div class="flex-row mt-3 p-2 h-25">*}
{*                                                <div class="register-genderclass rounded">*}
{*                                                    {if $felhasznalo->getNeme() == "férfi"}*}
{*                                                        <input type="radio" id="male" name="gender" value="férfi" checked>*}
{*                                                    {else}*}
{*                                                        <input type="radio" id="male" name="gender" value="férfi" >*}
{*                                                    {/if}*}
{*                                                    <label for="male">Férfi</label><br>*}
{*                                                </div>*}
{*                                                <div class="register-genderclass rounded" >*}
{*                                                    {if $felhasznalo->getNeme() == "nő"}*}
{*                                                        <input type="radio" id="female" name="gender" value="nő" checked>*}
{*                                                    {else}*}
{*                                                        <input type="radio" id="female" name="gender" value="nő">*}
{*                                                    {/if}*}
{*                                                    <label for="female">Nő</label><br>*}
{*                                                </div>*}
{*                                                <div class="register-genderclass rounded">*}
{*                                                    {if $felhasznalo->getNeme() == "egyéb"}*}
{*                                                        <input type="radio" id="other" name="gender" value="egyéb" checked>*}
{*                                                    {else}*}
{*                                                        <input type="radio" id="other" name="gender" value="egyéb">*}
{*                                                    {/if}*}
{*                                                    <label for="other">Egyéb</label>*}
{*                                                </div>*}
{*                                            </div>*}
{*                                            <div class="flex-row">*}
{*                                                <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="save">Mentés</button>*}
{*                                                <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-example')">Mégse</b-button>*}
{*                                            </div>*}
{*                                        </form>*}
{*                                    </div>*}
{*                                </b-modal>*}
{*                            </div>*}
                        </div>

                    <div class="flex-row">
                        {* Adatok *}
                        <div class="profile-card more-details">
                            <h3>Adatok</h3>
                            <ul>
                                <li><i class="fas fa-user"></i>{{ucwords($felhasznalo->getNeme())}} (Nem)</li>
                                {if $felhasznalo->getIskola()}
                                    <li><i class="fas fa-graduation-cap"></i>{{ucwords($felhasznalo->getIskola())}} (Tanulmányok)</li>
                                {/if}
                                {if $felhasznalo->getMunkahely()}
                                    <li><i class="fas fa-suitcase"></i>{{ucwords($felhasznalo->getMunkahely())}} (Munkahely)</li>
                                {/if}
                            </ul>
                        </div>
                        {* Bejegyzés írása *}
                        <div class="profile-card profile-posting">
                            <h3>Bejegyzés Írása</h3>
                            <div class="form-floating mt-3 mb-3">
                                <textarea class="form-control" placeholder="Írjon bejegyzést" id="floatingTextarea2"></textarea>
                            </div>
                            <div class="flex-row">
                                <div class="image-upload">
                                    <label for="file-input" class="h6">
                                        <i class="fas fa-upload"></i>
                                        Kép feltöltés
                                    </label>
                                    <input id="file-input" type="file"/>
                                </div>
                                <button type="button" class="btn btn-primary">Közzététel</button>
                            </div>
                        </div>
                    </div>

                    {* Posztok *}
                    {if $bejegyzesek}
                        {for $i=0 to $bejegyzesek|@count-1}
                            <div class="profile-card post-card mx-auto w-50">
                                {* Posztok fejléce *}
                                <div class="post-header">
                                    {* Profilkép *}
                                    <img src="{{$felhasznalo->getProfilkep()}}" alt="profilkép">
                                    {* Poszt adatok *}
                                    <div class="post-header-details">
                                        <span>{{$felhasznalo->getVezeteknev()}} {{$felhasznalo->getKeresztnev()}}</span>
                                        <span class="small">{{$bejegyzesek[$i]->getLetrehozasDatuma()}}</span>
                                    </div>
                                </div>

                                {* Posztok main *}
                                <div class="post-main">
                                    <div class="image-container">
                                        {* Poszt képe *}
                                        {if $bejegyzesek[$i]->getKep()}
                                            <img src="{{$bejegyzesek[$i]->getKep()}}" alt="poszt_kepe">
                                        {/if}
                                    </div>
                                    {* Posztok szövege *}
                                    <p>{{$bejegyzesek[$i]->getUzenet()}}</p>
                                </div>

                                {* Akció gombok *}
                                <div class="post-footer">
                                    <button><i class="far fa-heart"></i>Tetszik</button>
                                    <button><i class="far fa-comment-alt"></i>Hozzászólás</button>
                                </div>
                            </div>
                        {/for}
                    {/if}
                    
                </div>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}