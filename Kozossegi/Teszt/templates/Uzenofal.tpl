{include file="header.tpl"}
{include file="menu.tpl"}

<div id="app2"  class="container px-4 mt-5">

    {*
        Közzététel
    *}
    <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5 mx-auto">
        <form action="Uzenofal.php" method="post">
        <b-img src="https://placekitten.com/g/30/30"  rounded="circle" class="d-inline-block align-top"></b-img>
        Teszt Elek
        <div class="form-floating mt-3 mb-3">
            <textarea class="form-control" placeholder="Írjon bejegyzést" id="floatingTextarea2" name="text" style="height: 100px"></textarea>
        </div>
        <div class="image-upload">
            <label for="file-input">
                <p class="h6 mb-2"><b-icon icon="upload" aria-hidden="true" class="mr-2"></b-icon>Kép feltöltés</p>
            </label>
            <input id="file-input" type="file"/>
        </div>
            <button type="submit" class="btn btn-primary" name="submit">Közzététel</button>
        </form>
    </div>
    {if $bejegyzesek}
    {for $i=0 to $bejegyzesek|@count-1}
        {strip}
            <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5 mx-auto">
                <b-row >
                    <b-navbar variant="faded" type="light">
                        <b-navbar-brand href="#">
                            <b-img src="{{$bejegyzesek[$i]->getFelhasznaloAzonosito()->getProfilkep()}}"  rounded="circle" class="d-inline-block align-top mr-2 lg"></b-img>
                            {{$bejegyzesek[$i]->getFelhasznaloAzonosito()->getVezeteknev()}} {{$bejegyzesek[$i]->getFelhasznaloAzonosito()->getKeresztnev()}}
                        </b-navbar-brand>

                    </b-navbar>
                    <div >
                        <p class="m-3"> {{$bejegyzesek[$i]->getUzenet()}}</p>
                        {if $bejegyzesek[$i]->getKep()}
                            <b-img src="{{$bejegyzesek[$i]->getKep()}}" class="rounded mx-auto d-block" fluid alt="Fluid image"></b-img>
                        {/if}
                    </div>
                </b-row>
                <b-row class="mt-5">
                    <b-col cols="auto" class="w-100">
                        <b-button-group class="w-100">
                            <b-button  variant="btn-outline-primary" @click="asd">
                                <b-icon icon="heart" aria-hidden="true" v-if="like"></b-icon>
                                <b-icon icon="heart-fill" aria-hidden="true" v-if="!like"></b-icon>
                                Tetszik
                            </b-button>
                            <b-button v-b-toggle.my-collapse{{$i}} variant="btn-outline-primary">
                                <b-icon  icon="chat-left" aria-hidden="true"></b-icon> Hozzászólás
                            </b-button>
                            <b-button  variant="btn-outline-primary">
                                <b-icon icon="box-arrow-up-right" aria-hidden="true"></b-icon> Megosztás
                            </b-button>
                        </b-button-group>
                        <template>
                            <b-collapse id="my-collapse{{$i}}" class="mt-4">
                                 {literal}
                                    <div class="border border-1 mt-2 rounded align-self-baseline w-100" v-for="value in bejegyzes">
                                        <div v-for="(v,i,j) in value">
                                            <b-img src="https://placekitten.com/g/30/30" rounded="circle"  class="d-inline-block align-top" v-if="j==0"></b-img>
                                           <span> {{ v }}</span>
                                        </div>
                                        <div >
                                            <p class="m-3"></p>
                                        </div>
                                    </div>
                                    <div class="border border-3 mt-2">
                                    <b-img src="https://placekitten.com/g/30/30" rounded="circle" class="d-inline-block align-top "></b-img>
                                    Teszt Elek
                                    <div class="form-floating mt-3 mb-1">
                                        <textarea class="form-control" placeholder="Írjon kommentet" id="floatingTextarea2" style="height: 100px" v-model="text"></textarea>
                                    </div>

                                    <button type="button" class="btn btn-primary" @click="komm">Közzététel</button>
                                    </div>

                                {/literal}
                            </b-collapse>
                        </template>
                    </b-col>
                </b-row>
            </div>
        {/strip}
    {/for}
    {/if}
</div>

{include file="footer.tpl"}
