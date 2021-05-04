{include file="header.tpl"}
{include file="menu.tpl"}

<div id="app2">
    <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-75 mb-5 mx-auto">
        <h1 class="mt-3 pt-2 text-center">{{$klub->getNev()}}</h1>
        <div>
            <span>{{$klub->getLeiras()}}</span>
        </div>
        <div>
            <ul class="list-group">
                {$x = $klub->getTagok()}
                {for $i=0 to $x|@count-1}
                <li class="list-group-item">{{$x[$i]['VEZETEKNEV']}} {{$x[$i]['KERESZTNEV']}}</li>
                {/for}
            </ul>
        </div>
        {if !$csatlakozva}
            <form action="klub_leirassal.php?nev={{$klub->getNev()}}" method="post">
                <button class="btn btn-primary w-100" type="submit" name="csatlakozas_submit">Csatlakozas a csoporthoz</button>
            </form>
        {else}
            <form action="klub_leirassal.php?nev={{$klub->getNev()}}" method="post">
                <button class="btn btn-danger w-100" type="submit" name="kilepes_submit">Kilépés a csoportból</button>
            </form>
        {/if}

    </div>
</div>