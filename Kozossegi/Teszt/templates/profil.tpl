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
                    <div class="flex-row">
                        {* Adatok *}
                        <div class="profile-card more-details">
                            <h3>Infos</h3>
                            <ul>
                                <li><i class="fas fa-user"></i>{{ucwords($felhasznalo->getNeme())}} (Nem)</li>
{*                                TODO: Csekkolni, hogy léteznek-e  *}
                                <li><i class="fas fa-graduation-cap"></i>{{ucwords($felhasznalo->getIskola())}} (Tanulmányok)</li>
                                <li><i class="fas fa-suitcase"></i>{{ucwords($felhasznalo->getMunkahely())}} (Munkahely)</li>
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
                                    <label for="file-input">
                                        <p class="h6 mb-2"><b-icon icon="upload" aria-hidden="true" class="mr-2"></b-icon>Kép feltöltés</p>
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
                            <div class="profile-card post-card mx-auto">
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
                                    <button><i class="fas fa-external-link-alt"></i>Megosztás</button>
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