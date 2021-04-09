{include file="header.tpl"}

<div id="app2"  class="container px-4 mt-5">
    {for $i=0 to $tomb|@count-1}
        {strip}
            <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5">
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
                                <b-card title="Collapsible card">
                                    Hello world!
                                </b-card>
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
