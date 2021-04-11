{include file="header.tpl"}

<div id="app2"  class="container px-4 mt-5">

    <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5 mx-auto">
        <b-img src="https://placekitten.com/g/30/30" class="d-inline-block align-top"></b-img>
        Teszt Elek
        <div class="form-floating mt-3 mb-3">
            <textarea class="form-control" placeholder="Írjon bejegyzést" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        <div class="image-upload">
            <label for="file-input">
                <p class="h6 mb-2"><b-icon icon="upload" aria-hidden="true" class="mr-2"></b-icon>Kép feltöltés</p>

            </label>
            <input id="file-input" type="file"/>
        </div>

        <button type="button" class="btn btn-primary">Közzététel</button>
    </div>



    {for $i=0 to $tomb|@count-1}
        {strip}
            <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5 mx-auto">
                <b-row >
                    <b-navbar variant="faded" type="light">
                        <b-navbar-brand href="#">
                            <b-img src="https://placekitten.com/g/30/30" class="d-inline-block align-top"></b-img>
                            {{$tomb[$i]['nev']}}
                        </b-navbar-brand>

                    </b-navbar>
                    <div >
                        <p class="m-3"> {{$tomb[$i]['szoveg']}}</p>
                        {if $tomb[$i]['url'] ne ''}
                            <b-img src=" {{$tomb[$i]['url']}}" class="rounded mx-auto d-block" fluid alt="Fluid image"></b-img>
                        {/if}
                    </div>
                </b-row>

                <b-row class="mt-5">
                    <b-col cols="auto" class="">
                        <b-button-group>
                            <b-button  variant="light">
                                <b-icon icon="heart" aria-hidden="true"></b-icon> Tetszik
                            </b-button>
                            <b-button v-b-toggle.my-collapse @click="asd" variant="light">
                                <b-icon  icon="chat-left" aria-hidden="true"></b-icon> Hozzászólás
                            </b-button>
                            <b-button  variant="light">
                                <b-icon icon="box-arrow-up-right" aria-hidden="true"></b-icon> Megosztás
                            </b-button>
                        </b-button-group>
                        <template>
                            <b-collapse id="my-collapse">


                                    <div class="border border-3 mt-2">
                                        <b-img src="https://placekitten.com/g/30/30" class="d-inline-block align-top"></b-img>Random Ember
                                        <div >
                                            <p class="m-3"> Szia Lajos!</p>
                                        </div>
                                    </div>
                                    <div class="border border-3 mt-2">
                                        <b-img src="https://placekitten.com/g/30/30" class="d-inline-block align-top"></b-img>A legenda
                                        <div >
                                            <p class="m-3"> Szia bazdmeg!</p>
                                        </div>
                                    </div>
                                    <div class="border border-3 mt-2">
                                        <b-img src="https://placekitten.com/g/30/30" class="d-inline-block align-top"></b-img>Random Ember
                                        <div >
                                            <p class="m-3"> Kutyáidat sétáltatod?</p>
                                        </div>
                                    </div>

                                    <div class="border border-3 mt-2">
                                    <b-img src="https://placekitten.com/g/30/30" class="d-inline-block align-top"></b-img>
                                    Teszt Elek
                                    <div class="form-floating mt-3 mb-1">
                                        <textarea class="form-control" placeholder="Írjon kommentet" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>

                                    <button type="button" class="btn btn-primary">Közzététel</button>
                                    </div>


                            </b-collapse>
                        </template>
                    </b-col>
                </b-row>

                {* <b-row class="mt-5" v-if="Komment">
                 Komment
                 </b-row>*}
            </div>
        {/strip}
    {/for}
</div>
