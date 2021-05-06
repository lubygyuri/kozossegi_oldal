{include file="header.tpl"}
{include file="menu.tpl"}
<div id="app5">

    <div class="profile-area">
        <div class="profile-container">
            <div class="messages-card mx-auto">

                {* Üzenetek fejléc *}
                <div class="messages-header">
                    {* Keresés a partnerek között *}
                    <form action="#" class="mx-auto">

                        <input  id="baratkereses" onkeyup="friendsKereses()" type="search" placeholder="Keresés... "autocomplete="off">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    {* Üzenetek fejlécének adatai *}
                    <div class="header-details-container">
                        {* Profil név (azaz én) *}
                        <span>{{$belepettFelhasznalo->getVezeteknev()}} {{$belepettFelhasznalo->getKeresztnev()}}</span>
                        {* Profilkép *}
                        <img src="{{$belepettFelhasznalo->getProfilkep()}}" alt="profilkép">
                    </div>
                </div>
                <div id="keresesDiv2">
                </div>

                {* Üzenetek main *}
                <div class="messages-main">
                    {* Barátok listázva *}
                    <div class="messages-friends-container">
                        <ul>
                            {if $friendsList}
                            {for $i=0 to $friendsList|@count-1}
                                {if $profil && $profil == $friendsList[$i]->getEmail()}
                                    <a href="uzenetek.php?profil={{$friendsList[$i]->getEmail()}}" class="friendsList-li active">
                                        <li>
                                            {* Barát profilképe *}
                                            <img src="{{$friendsList[$i]->getProfilkep()}}" alt="profilkép">
                                            {* Barát adatai *}
                                            <div class="friend-details">
                                                {* Barát neve *}
                                                <span>{{$friendsList[$i]->getVezeteknev()}} {{$friendsList[$i]->getKeresztnev()}}</span>
                                                <div class="flex-row">
                                                    {for $j=0 to $latestMessages|@count-1}
                                                        {if $latestMessages[$j]->getKuldoAzonosito() == $friendsList[$i]->getEmail()}
                                                            {* Barát utolsó üzenete *}
                                                            <p>{{$latestMessages[$j]->getUzenet()}}</p>
                                                            {* Barát utolsó üzenetének időpontja *}
                                                            <small>{{$latestMessages[$j]->getKuldesIdeje()}}</small>
                                                        {/if}
                                                    {/for}
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                {else}
                                    <a href="uzenetek.php?profil={{$friendsList[$i]->getEmail()}}" class="friendsList-li">
                                        <li>
                                            {* Barát profilképe *}
                                            <img src="{{$friendsList[$i]->getProfilkep()}}" alt="profilkép">
                                            {* Barát adatai *}
                                            <div class="friend-details">
                                                {* Barát neve *}
                                                <span>{{$friendsList[$i]->getVezeteknev()}} {{$friendsList[$i]->getKeresztnev()}}</span>
                                                <div class="flex-row">
                                                    {for $j=0 to $latestMessages|@count-1}
                                                        {if $latestMessages[$j]->getKuldoAzonosito() == $friendsList[$i]->getEmail()}
                                                            {* Barát utolsó üzenete *}
                                                            <p>{{$latestMessages[$j]->getUzenet()}}</p>
                                                            {* Barát utolsó üzenetének időpontja *}
                                                            <small>{{$latestMessages[$j]->getKuldesIdeje()}}</small>
                                                        {/if}
                                                    {/for}
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                {/if}
                            {/for}
                            {/if}
                        </ul>
                    </div>

                    {* Maga a chat *}
                    <div class="chat-section">

                        {* Aktuális chaten megjelenő üzenetek *}
                        <div class="chat-messages" id="chat-messages">
                        {if $uzenetek}
                        {for $i=0 to $uzenetek|@count-1}
                            <div class="chat-messages-timer"><small>{{$uzenetek[$i]->getKuldesIdeje()}}</small></div>
                                {if $uzenetek[$i]->getFogadoAzonosito() == $belepettFelhasznalo->getEmail()}
                                    {* Bejövő üzenetek *}
                                    <div class="incoming-messages">
                                        {* Maga a bejövő üzenet *}
                                        <p>{{$uzenetek[$i]->getUzenet()}}</p>
                                    </div>
                                {else}
                                    {* Kimenő üzenetek *}
                                    <div class="outgoing-messages">
                                        {* Maga a kimenő üzenet *}
                                        <p>{{$uzenetek[$i]->getUzenet()}}</p>
                                    </div>
                                {/if}
                        {/for}
                        {/if}
                            </div>

                        {* Eszköztár *}
                        <div class="chat-toolbar">
                            <form action="uzenetek.php?profil={{$profil}}" method="post">
                                {* Ahova írhaod az üzeneted *}
                                <input type="text" name="messageInp" placeholder="Írj egy üzenetet...">
                                {* A gomb amivel elküldheted az üzeneted *}
                                <button type="submit" name="sendMessage"><i class="far fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

{include file="footer.tpl"}
