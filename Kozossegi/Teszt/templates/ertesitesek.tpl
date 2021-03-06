{include file="header.tpl"}
{include file="menu.tpl"}

<div class="ertesitesek-container">
    <ul class="list-group">
    {if $ertesitesek}
        {for $i=0 to $ertesitesek|@count-1}
            <li class="list-item">
                <form action="ertesitesek.php?ertesites_azonosito={{$ertesitesek[$i]->getAzonosito()}}" method="post" class="ertesitesek-form">
                    <i class="fas fa-bell"></i>
                    <p>{{$ertesitesek[$i]->getUzenet()}}</p>
                    <div class="ertesitesek-timer">
                        <small>{{$ertesitesek[$i]->getErtesitesIdeje()}}</small>
                        <button type="submit" name="ertesitest_torol"><i class="fas fa-trash"></i></button>
                    </div>
                </form>
            </li>
        {/for}
    {else}
        <li class="list-item p-2" style="text-align: center"><p class="mb-0">Nincsenek új értesítéseid...</p></li>
    {/if}
    </ul>
</div>

{include file="footer.tpl"}