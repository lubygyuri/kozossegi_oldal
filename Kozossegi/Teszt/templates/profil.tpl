{include file="header.tpl"}
{include file="menu.tpl"}

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

                    {*Beállítások sávja*}

                    {* Profilkép feltöltés *}
                        <div class="flex-row p-3 border-top border-bottom">
                            {if $belepettFelhasznalo->getEmail() == $felhasznalo->getEmail()}
                                <form action="profil.php?email={{$belepettFelhasznalo->getEmail()}}" method="post" enctype="multipart/form-data">
                                    <div class="image-upload align-items-end">
                                        <label for="file-input" class="h6 mr-2">
                                            <i class="fas fa-upload"></i>
                                            Profilkép csere
                                        </label>
                                        <input id="file-input" type="file" name="profileImg"/>
                                        <button type="submit" class="btn btn-primary" name="profileImgUpload">Feltöltés</button>
                                    </div>
                                </form>

                                {* Fényképalbumok megtekintése *}
                                <form action="fenykepalbum.php" method="post">
                                    <button type="submit" class="btn btn-primary" name="fenykepAlbumMegtekintes">Fényképalbumok megtekintése</button>
                                </form>

                                {* Fényképalbum létrehozása *}
                                <b-button variant="primary" @click="$bvModal.show('bv-modal-fenykepAlbum')">Fényképalbum létrehozása</b-button>

                                <b-modal id="bv-modal-fenykepAlbum" hide-footer title="Fényképalbum létrehozása">
                                    <p>Az alábbi mező kitöltésével új albumot hozhatsz létre:</p>
                                    <div>
                                        <form action="profil.php?email={{$belepettFelhasznalo->getEmail()}}" class="kulso-form" method="post">
                                            <input type="text" class="mt-3 p-2 h-25" name="fenykepAlbumNev" placeholder="Fénykepalbum neve">
                                            <div class="flex-row">
                                                <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="letrehozFenykepAlbum">Létrehozás</button>
                                                <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-fenykepAlbum')">Mégse</b-button>
                                            </div>
                                        </form>
                                    </div>
                                </b-modal>

                        {* Adatok módosítása *}
                            {* Működő update profile *}
                                <b-button variant="primary" @click="$bvModal.show('bv-modal-example')">Adatok módosítása</b-button>

                                <b-modal id="bv-modal-example" hide-footer title="Adatok módosítása">
                                    <p class="mt-2">Módosításhoz változtatsd meg a kívánt mezőt:</p>
                                    <div>
                                        <form action="profil.php?email={{$belepettFelhasznalo->getEmail()}}" class="kulso-form" method="post">
                                            <input type="text" name="firstname" class="mt-3 p-2 h-25" placeholder="Vezetéknév" value={{$felhasznalo->getVezeteknev()}}>
                                            <input type="text" name="lastname" class="mt-3 p-2 h-25" placeholder="Keresztnév" value={{$felhasznalo->getKeresztnev()}}>
                                            {if $felhasznalo->getIskola()}
                                                <input type="text" name="school" class="mt-3 p-2 h-25" value="{{$felhasznalo->getIskola()}}">
                                            {else}
                                                <input type="text" name="school" class="mt-3 p-2 h-25" placeholder="Tanulmányok">
                                            {/if}
                                            {if $felhasznalo->getMunkahely()}
                                                <input type="text" name="job" class="mt-3 p-2 h-25" value="{{$felhasznalo->getMunkahely()}}">
                                            {else}
                                                <input type="text" name="job" class="mt-3 p-2 h-25" placeholder="Munkahely">
                                            {/if}

                                            <div class="flex-row mt-3 p-2 h-25">
                                                <div class="register-genderclass rounded">
                                                    {if $felhasznalo->getNeme() == "férfi"}
                                                        <input type="radio" id="male" name="gender" value="férfi" checked>
                                                    {else}
                                                        <input type="radio" id="male" name="gender" value="férfi" >
                                                    {/if}
                                                    <label for="male">Férfi</label><br>
                                                </div>
                                                <div class="register-genderclass rounded" >
                                                    {if $felhasznalo->getNeme() == "nő"}
                                                        <input type="radio" id="female" name="gender" value="nő" checked>
                                                    {else}
                                                        <input type="radio" id="female" name="gender" value="nő">
                                                    {/if}
                                                    <label for="female">Nő</label><br>
                                                </div>
                                                <div class="register-genderclass rounded">
                                                    {if $felhasznalo->getNeme() == "egyéb"}
                                                        <input type="radio" id="other" name="gender" value="egyéb" checked>
                                                    {else}
                                                        <input type="radio" id="other" name="gender" value="egyéb">
                                                    {/if}
                                                    <label for="other">Egyéb</label>
                                                </div>
                                            </div>
                                            <div class="flex-row">
                                                <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="save">Mentés</button>
                                                <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-example')">Mégse</b-button>
                                            </div>
                                        </form>
                                    </div>
                                </b-modal>
                            {/if}

                            {if $friendStatus == "belaPendingEsBela"}
                                <form action="profil.php?email={{$felhasznalo->getEmail()}}" method="post">
{*                                    <p>belaPendingEsBela</p>*}
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-times"></i>Ismerőskérelem visszavonása</button>
                                </form>
                            {elseif $friendStatus == "belaPendingEsJuli"}
                                <form action="profil.php?email={{$felhasznalo->getEmail()}}" method="post">
{*                                    <p>belaPendingEsJuli</p>*}
                                    <button type="submit" name="friendAccept" class="btn btn-warning"><i class="fas fa-user-friends"></i>Ismerőskérelem visszaigazolása</button>
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-times"></i>Ismerőskérelem visszautasítása</button>
                                </form>
                            {elseif $friendStatus == "juliPendingEsJuli"}
                                <form action="profil.php?email={{$felhasznalo->getEmail()}}" method="post">
{*                                    <p>juliPendingEsJuli</p>*}
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-times"></i>Ismerőskérelem visszavonása</button>
                                </form>
                            {elseif $friendStatus == "juliPendingEsBela"}
                                <form action="profil.php?email={{$felhasznalo->getEmail()}}" method="post">
{*                                    <p>juliPendingEsBela</p>*}
                                    <button type="submit" name="friendAccept" class="btn btn-warning"><i class="fas fa-user-friends"></i>Ismerőskérelem visszaigazolása</button>
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-times"></i>Ismerőskérelem visszautasítása</button>
                                </form>
                            {elseif $friendStatus == "belaEsJuliBaratok"}
                                <form action="profil.php?email={{$felhasznalo->getEmail()}}" method="post">
{*                                    <p>belaEsJuliBaratok</p>*}
                                    <button type="button" class="btn btn-success"><i class="fas fa-user-check"></i>Ismerős</button>
                                    <button type="submit" name="declineRequest" class="btn btn-danger"><i class="fas fa-user-minus"></i>Ismerős törlése</button>
                                </form>
                            {elseif $belepettFelhasznalo->getEmail() != $felhasznalo->getEmail()}
                                <form action="profil.php?email={{$felhasznalo->getEmail()}}" method="post">
{*                                    <p>Egyik se</p>*}
                                    <button type="submit" name="friendRequest" class="btn btn-primary"><i class="fas fa-user-plus"></i>Ismerősnek jelölés</button>
                                </form>
                            {/if}
                        </div>

                    {* Adatok és bejegyzés szekció *}

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
                            <form action="profil.php?email={{$belepettFelhasznalo->getEmail()}}" method="post" enctype="multipart/form-data">
                                <h3>Bejegyzés Írása</h3>
                                <div class="form-floating mt-3 mb-3">
                                    <textarea class="form-control" placeholder="Írjon bejegyzést" name="text" id="floatingTextarea2"></textarea>
                                </div>
                                <div class="flex-row">
                                    <label for="postImageInput" class="h6 label-cursor">
                                        <i class="fas fa-upload"></i>
                                        Kép feltöltés
                                    </label>
                                    <input hidden id="postImageInput" type="file" name="postImage"/>
                                    <button type="submit" class="btn btn-primary" name="createPost">Közzététel</button>
                                </div>
                            </form>
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
                                        <span class="small">{{$bejegyzesek[$i]->getLetrehozasIdeje()}}</span>
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
                                <div id="{{$bejegyzesek[$i]->getAzonosito()}}">
                                    <!-- likek szama -->
                                    {if $bejegyzesek[$i]->getLikeCount() > 0}
                                        <div class="mt-3 like_count">{{$bejegyzesek[$i]->getLikeCount()}} embernek tetszik ez a bejegyzés</div>
                                    {/if}
                                    <div class="post-footer">
                                            {if $bejegyzesek[$i]->getIsLiked()}
                                                <button onclick="like({{$bejegyzesek[$i]->getAzonosito()}})" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button>
                                            {else}
                                                <button onclick="like({{$bejegyzesek[$i]->getAzonosito()}})" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button>
                                            {/if}
                                        <button v-b-toggle.my-collapse{{$bejegyzesek[$i]->getAzonosito()}} id="{{$bejegyzesek[$i]->getAzonosito()}}"><i class="far fa-comment-alt"></i>Hozzászólás</button>
                                    </div>
                                </div>
                                <template>
                                    <b-collapse id="my-collapse{{$bejegyzesek[$i]->getAzonosito()}}" class="mt-4">
                                        <div id="komment{{$bejegyzesek[$i]->getAzonosito()}}">
                                            {if $bejegyzesek[$i]->getKommentek()}
                                                {$x = $bejegyzesek[$i]->getKommentek()}
                                                {for $j=0 to $x|@count-1}
                                                    <div class="border border-1 mt-2 rounded align-self-baseline w-100">
                                                        <div class="post-header2">
                                                            <b-img src="{{$x[$j]->getFelhasznaloAzonosito()->getProfilkep()}}" rounded="circle"  class="d-inline-block align-top"></b-img>
                                                            <div class="post-header-details">
                                                                <span>{{$x[$j]->getFelhasznaloAzonosito()->getVezeteknev()}} {{$x[$j]->getFelhasznaloAzonosito()->getKeresztnev()}}</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p class="m-3">{{$x[$j]->getUzenet()}} </p>
                                                        </div>
                                                    </div>
                                                {/for}
                                            {/if}
                                        </div>
                                        <div class="border border-3 mt-2">
                                            <div class="post-header2">
                                                <b-img src="{{$felhasznalo->getProfilkep()}}" rounded="circle" class="d-inline-block align-top "></b-img>
                                                <div class="post-header-details">
                                                    <span>{{$felhasznalo->getVezeteknev()}} {{$felhasznalo->getKeresztnev()}}</span>
                                                </div>
                                            </div>
                                            <div class="form-floating mt-3 mb-1">
                                                <textarea class="form-control" placeholder="Írjon kommentet" id="textarea{{$bejegyzesek[$i]->getAzonosito()}}" style="height: 100px"></textarea>
                                            </div>
                                            <button type="button" class="btn btn-primary" onclick="komment({{$bejegyzesek[$i]->getAzonosito()}})">Közzététel</button>
                                        </div>
                                    </b-collapse>
                                </template>



                            </div>
                        {/for}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}