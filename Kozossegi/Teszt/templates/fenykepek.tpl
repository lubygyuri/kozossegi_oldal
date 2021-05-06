{include file="header.tpl"}

<div class="container" id="app6">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0 flex-row">
        {{$recentAlbum->getNev()}}
        <div>
            <b-button variant="primary" @click="$bvModal.show('bv-modal-fenykep')">Fénykép hozzáadása</b-button>

            <b-modal id="bv-modal-fenykep" hide-footer title="Fénykép feltöltése">
                <p>Az alábbi mezőre kattintva egy új képet tölthetsz fel az albumodba:</p>
                <div>
                    <form action="fenykepek.php?fenykepAlbum={{$recentAlbum->getAzonosito()}}" class="kulso-form" method="post" enctype="multipart/form-data">
                        <div class="image-upload flex-row">
                            <label for="fenykep" class="mt-3 p-2 h-25">
                                <i class="fas fa-upload"></i>
                                Kép feltöltés
                            </label>
                            <input id="fenykep" type="file" name="fenykep">
                        </div>
                        <div class="flex-row">
                            <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="fenykepFeltoltes">Feltöltés</button>
                            <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-fenykep')">Mégse</b-button>
                        </div>
                    </form>
                </div>
            </b-modal>

            <a href="fenykepalbum.php?back=true" class="btn btn-primary"><i class="fas fa-arrow-left mr-0"></i></a>
        </div>
    </h1>

    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-left">

        {if $fenykepek}
            {for $i=0 to $fenykepek|@count-1}
                <div class="col-lg-3 col-md-4 col-6">
                    <img class="img-fluid img-thumbnail" src="{{$fenykepek[$i]->getKep()}}" alt="">
                </div>
            {/for}
        {/if}

    </div>

</div>