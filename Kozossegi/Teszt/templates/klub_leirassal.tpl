{include file="header.tpl"}
{include file="menu.tpl"}

<div id="app2">
    <div class= "shadow-lg p-3 mt-3 bg-white rounded align-self-baseline mr-2 w-75 mb-5 mx-auto">
        <h1 class="mb-5 pt-2 text-center">{{$klub->getNev()}}</h1>
        <div class="row mt-3">
            <div class="col">
                <div class="col">
                    <h3>Leírás</h3>
                    <p style="text-align: justify !important;">{{$klub->getLeiras()}}</p>
                </div>
                <div class="col mt-3">
                    <h5>Láthatóság</h5>
                    {if $klub->getLathatosag() == 0}
                        <h6>publikus</h6>
                    {else}
                        <h6>privát</h6>
                    {/if}
                    <h5 class="mt-3">Létrehozva</h5><h6>{{date_format(date_create($klub->getLetrehozasDatuma()), 'Y.m.d')}}</h6>
                </div>
            </div>
            <div class="col">
                <h5>Tagok száma: {count($klub->getTagok())}</h5>
                <ul class="list-group w-100 klub_leiras_scroll">
                    {$x = $klub->getTagok()}
                    {for $i=0 to $x|@count-1}
                        <li class="list-group-item">{{$x[$i]['VEZETEKNEV']}} {{$x[$i]['KERESZTNEV']}}</li>
                    {/for}
                </ul>
            </div>
        </div>
        {if $klub->getLathatosag() == 0}
        <div>
            {if !$csatlakozva}
                <form action="klub_leirassal.php?nev={{$klub->getNev()}}" method="post">
                    <button class="btn btn-primary w-100" type="submit" name="csatlakozas_submit">Csatlakozas a klubhoz</button>
                </form>
            {else}
                <form action="klub_leirassal.php?nev={{$klub->getNev()}}" method="post">
                    <button class="btn btn-danger w-100" type="submit" name="kilepes_submit">Kilépés a csoportból</button>
                </form>
            {/if}
        {/if}
        </div>
    </div>
</div>