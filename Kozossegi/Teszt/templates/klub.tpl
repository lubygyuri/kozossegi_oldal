{include file="header.tpl"}
{include file="menu.tpl"}

<div id="app2">
    <b-row>
        {if $error != null}
            <b-col>
                <div class="shadow-lg p-3 bg-white rounded align-self-baseline p-3 mb-2 mt-2 ml-2">
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    <div class="alert alert-dark" role="alert">
                       A csatlakozáshoz keresrá egy Klub nevére és csatlakoz!
                    </div>
                </div>
            </b-col>
        {else}
        <b-col>
            <div class="shadow-lg p-3 bg-white rounded align-self-baseline p-3 mb-2 mt-2 ml-2">
                <b-list-group>
                    {if $klubbok}
                    {for $i=0 to $klubbok|@count-1}
                        {if $aktiv == $klubbok[$i]->getNev()}
                            <a class="klub_link" href="klub.php?id={{$klubbok[$i]->getNev()}}"><b-list-group-item active>{{$klubbok[$i]->getNev()}}</b-list-group-item></a>
                        {else}
                            <a class="klub_link" href="klub.php?id={{$klubbok[$i]->getNev()}}"><b-list-group-item>{{$klubbok[$i]->getNev()}}</b-list-group-item></a>
                        {/if}
                    {/for}
                    {/if}
                </b-list-group>
            </div>
    </b-col>

    <b-col>
        <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 mb-5 mt-2 mx-auto">
            <form action="klub.php" method="post" enctype="multipart/form-data">
                <div class="post-header2">
                    <img src="{{$belepettFelhasznalo->getProfilkep()}}">
                    <div class="post-header-details">
                        <span>{{$belepettFelhasznalo->getVezeteknev()}} {{$belepettFelhasznalo->getKeresztnev()}} </span>
                    </div>
                </div>
                <div class="form-floating mt-3 mb-3">
                    <textarea class="form-control" placeholder="Írjon bejegyzést..." id="floatingTextarea2" name="text" style="height: 100px"></textarea>
                    <input  name="klubAzonosito" type="hidden" value="{{$aktiv}}"/>
                </div>
                <div class="image-upload">
                    <label for="file-input" class="h6 mb-2">
                        <i class="fas fa-upload"></i>
                        Kép feltöltés
                    </label>
                    <input id="file-input" type="file" name="postImgUzenofal"/>
                    <button type="submit" class="btn btn-primary" name="submit">Közzététel</button>
                </div>
            </form>
        </div>


        {if $bejegyzesek}
            {for $i=0 to $bejegyzesek|@count-1}
                {strip}
                    <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-100 mb-5 mx-auto">
                        <b-row>
                            <div class="post-header">
                                {* Profilkép *}
                                <img src="{{$bejegyzesek[$i]->getFelhasznaloAzonosito()->getProfilkep()}}" alt="profilkép">
                                {* Poszt adatok *}
                                <div class="post-header-details">
                                    <span>{{$bejegyzesek[$i]->getFelhasznaloAzonosito()->getVezeteknev()}} {{$bejegyzesek[$i]->getFelhasznaloAzonosito()->getKeresztnev()}}</span>
                                    <span class="small">{{$bejegyzesek[$i]->getLetrehozasIdeje()}}</span>
                                </div>
                            </div>
                            <div >
                                <p class="m-3"> {{$bejegyzesek[$i]->getUzenet()}}</p>
                                {if $bejegyzesek[$i]->getKep()}
                                    <b-img src="{{$bejegyzesek[$i]->getKep()}}" class="rounded mx-auto d-block" fluid alt="Fluid image"></b-img>
                                {/if}
                            </div>
                        </b-row>
                        <b-row>
                            <b-col cols="auto" class="w-100">
                                <div id="{{$bejegyzesek[$i]->getAzonosito()}}">
                                    <!-- likek szama -->
                                    {if $bejegyzesek[$i]->getLikeCount() > 0}
                                        <div class="mt-3 like_count">{{$bejegyzesek[$i]->getLikeCount()}} embernek tetszik ez a bejegyzés</div>
                                    {/if}
                                <div class="post-footer mt-3">
                                        {if $bejegyzesek[$i]->getIsLiked()}
                                            <button onclick="klubLike({{$bejegyzesek[$i]->getAzonosito()}})" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button>
                                        {else}
                                            <button onclick="klubLike({{$bejegyzesek[$i]->getAzonosito()}})" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button>
                                        {/if}
                                </div>
                                </div>
                            </b-col>
                        </b-row>
                    </div>
                {/strip}
            {/for}
        {/if}

    </b-col>
            {/if}
    <b-col>
            <div class="shadow-lg p-3 bg-white rounded align-self-baseline p-3 m-2">
                <div class="input-group rounded">
                    <input onkeyup="klubKereses()" type="search" id="searchboxclub" class="form-control rounded" placeholder="Keresés..." aria-label="Search"
                           aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search mr-0"></i>
                    </span>
                </div>
                <div id="klubKeresesDiv">
                </div>
                <b-button variant="success" class="mb-0 mt-3 w-100" @click="$bvModal.show('bv-modal-ujklubletrehozasa')">Új klub hozzáadása</b-button>
             </div>
    </b-col>
        <b-modal id="bv-modal-ujklubletrehozasa" hide-footer title="Új klub létrehozása">
            <p class="mt-2">Kérlek töltsd ki az alábbi adatokat:</p>
            <div>
                <form action="klub.php" class="kulso-form" method="post">
                    <input type="text" name="klub_name" placeholder="Klub neve" class="mt-3 p-2 h-25" required>
                    <input type="text" name="leiras" placeholder="Leírása" class="mt-3 p-2 h-25" required>
                    <div class="flex-row mt-3 p-2 h-25">
                        <div class="register-genderclass rounded">
                            <input type="radio" id="public" name="lathatosag" value="0" checked>
                            <label for="public">Publikus</label><br>
                        </div>
                        <div class="register-genderclass rounded" >
                            <input type="radio" id="private" name="lathatosag" value="1">
                            <label for="private">Privát</label><br>
                        </div>
                    </div>
                    <div class="flex-row">
                        <button type="submit" name="submit_klub" id="register-id" class="mt-3 p2 btn btn-success">Klub létrehozása</button>
                        <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-ujklubletrehozasa')">Mégse</b-button>
                    </div>
                </form>
            </div>
        </b-modal>
    </b-row>
</div>

{include file="footer.tpl"}

