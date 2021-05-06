{include file="header.tpl"}

<div class="container-fluid">
    <div class="px-lg-5"">

        <!-- Fejléc -->
        <div class="row py-5">
            <div class="col-lg-12 mx-auto">
                <div class="p-5 shadow rounded banner">
                    <h1 class="display-4">Fényképalbumaid</h1>
                    <p class="lead">{{$belepettFelhasznalo->getVezeteknev()}} {{$belepettFelhasznalo->getKeresztnev()}}</p>
                    <a href="profil.php?email={{$belepettFelhasznalo->getEmail()}}" class="btn btn-primary"><i class="fas fa-arrow-left mr-0"></i></a>
                </div>
            </div>
        </div>
        <!-- Fejléc vége -->

        <div class="row">
            <!-- Gallery item -->
            {if $fenykepAlbumok}
                {for $i=0 to $fenykepAlbumok|@count-1}
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="bg-white rounded shadow"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294929/matthew-hamilton-351641-unsplash_zmvozs.jpg" alt="kep" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="fenykepek.php?fenykepAlbum={{$fenykepAlbumok[$i]->getAzonosito()}}" class="text-dark">{{$fenykepAlbumok[$i]->getNev()}}</a></h5>
                                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Album mérete</span></p>
                                    <div class="badge badge-danger px-3 rounded-pill font-weight-normal">{if $fenykepAlbumok[$i]->getTeljesMeret() > 0}{{$fenykepAlbumok[$i]->getTeljesMeret()}}{else}0{/if} MB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                {/for}
            {/if}
            <!-- End -->
        </div>
    </div>
</div>