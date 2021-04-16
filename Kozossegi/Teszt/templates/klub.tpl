{include file="header.tpl"}
{include file="menu.tpl"}

<div id="app2">
    <b-row>
        <b-col>
            <div class="shadow-lg p-3 bg-white rounded align-self-baseline w-75 p-3 mb-5 mt-5 ml-4">
                <b-list-group>
                    <b-list-group-item>Klub 1</b-list-group-item>
                    <b-list-group-item active>Klub 2</b-list-group-item>
                    <b-list-group-item>Klub 3</b-list-group-item>
                    <b-list-group-item>Klub 4</b-list-group-item>
                    <b-list-group-item>Klub 5</b-list-group-item>
                </b-list-group>

            </div>
        </b-col>
<b-col>
            <div class="container mt-5">
            <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-100 p-3 mb-5">
            <b-img src="https://placekitten.com/g/30/30"  rounded="circle" class="d-inline-block align-top"></b-img>
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
                <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2  w-100  p-3 mb-5">
                    <b-row >
                        <b-navbar variant="faded" type="light">
                            <b-navbar-brand href="#">
                                <b-img src="https://placekitten.com/g/30/30"  rounded="circle" class="d-inline-block align-top mr-2 lg"></b-img>
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
                    </div>
        </b-col>
        <b-col>
                <div class="shadow-lg p-3 bg-white rounded align-self-baseline w-75 p-3 mb-5 mt-5 ml-4">
                    <div class="input-group rounded">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                               aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <b-button class="mt-3">Csatlakozás</b-button>
                    <b-button class="mt-3">Új hozzáadás</b-button>
                 </div>
        </b-col>



    </b-row>
</div>
