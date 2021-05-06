{include file="header.tpl"}
{include file="menu.tpl"}
<div id="app2">
<div class="container px-4 mt-5">

    <div class="shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-50 mb-5 mx-auto text-center">
        <h1>Kiket Ismerhetsz</h1>
        <ul  class="list-group list-group-horizontal overflow-auto">
            {for $i=0 to $kitIsmerhetek|@count-1}
            <li class="list-group-item"><a href="profil.php?email={{$kitIsmerhetek[$i]->getEmail()}}">{{$kitIsmerhetek[$i]->getVezeteknev()}} {{$kitIsmerhetek[$i]->getKeresztnev()}}</a></li>
            {/for}
        </ul>
    </div>

    {*
        Közzététel
    *}
    <div class="shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-50 mb-5 mx-auto">
        {*
  Ismerős ajánlás
  *}
        <form action="Uzenofal.php" method="post" enctype="multipart/form-data">
            <div class="post-header2">
                <img src="{{$belepettFelhasznalo->getProfilkep()}}">
                <div class="post-header-details">
                <span>{{$belepettFelhasznalo->getVezeteknev()}} {{$belepettFelhasznalo->getKeresztnev()}} </span>
                </div>
            </div>
        <div class="form-floating mt-3 mb-3">
            <textarea class="form-control" placeholder="Írjon bejegyzést..." id="floatingTextarea2" name="text" style="height: 100px"></textarea>
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
            <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-50 mb-5 mx-auto">
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
                                            <b-img src="{{$belepettFelhasznalo->getProfilkep()}}" rounded="circle" class="d-inline-block align-top "></b-img>
                                            <div class="post-header-details">
                                            <span>{{$belepettFelhasznalo->getVezeteknev()}} {{$belepettFelhasznalo->getKeresztnev()}}</span>
                                            </div>
                                        </div>
                                        <div class="form-floating mt-3 mb-1">
                                        <textarea class="form-control" placeholder="Írjon kommentet" id="floatingTextarea{{$bejegyzesek[$i]->getAzonosito()}}" style="height: 100px"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-primary" onclick="komment({{$bejegyzesek[$i]->getAzonosito()}})">Közzététel</button>
                                    </div>


                            </b-collapse>
                        </template>
                    </b-col>
                </b-row>
            </div>
        {/strip}
    {/for}
    {/if}
</div>
</div>
{include file="footer.tpl"}
