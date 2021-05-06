{include file="header.tpl"}
{include file="menu.tpl"}

<div id="app2">
    <div class= "shadow-lg pl-3 pr-3 pb-3 mt-3 bg-white rounded align-self-baseline mr-2 w-75 mb-5 mx-auto">
        <h1 class="mt-3 pt-2 text-center">{{$klub->getNev()}}</h1>
        <div class="row mt-3">
            <div class="col">
                <h6>Tagok száma: {count($klub->getTagok())}</h6>
                <ul class="list-group w-50 klub_leiras_scroll">
                    {$x = $klub->getTagok()}
                    {for $i=0 to $x|@count-1}
                        <li class="list-group-item">{{$x[$i]['VEZETEKNEV']}} {{$x[$i]['KERESZTNEV']}}</li>
                    {/for}
                </ul>
            </div>
            <div class="col">
                <h3>Leírás</h3>
                <span>{{$klub->getLeiras()}}</span>
            </div>
            <div class="col">
                <h5>Létrehozva</h5><h6>{{$klub->getLetrehozasDatuma()}}</h6>
                <h5>Láthatóság</h5>
                {if $klub->getLathatosag() == 0}
                    <h6>publikus</h6>
                {else}
                    <h6>privát</h6>
                {/if}
            </div>
        </div>
        {if $klub->getLathatosag() == 0}
        <div class="mt-3">
            {if !$csatlakozva}
                <form action="klub_leirassal.php?nev={{$klub->getNev()}}" method="post">
                    <button class="btn btn-primary w-100" type="submit" name="csatlakozas_submit">Csatlakozas a csoporthoz</button>
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