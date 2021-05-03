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
                        <input type="search" placeholder="Keresés...">
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

                {* Üzenetek main *}
                <div class="messages-main">
                    {* Barátok listázva *}
                    <div class="messages-friends-container">
                        <ul>
                            {if $friendsList}
                            {for $i=0 to $friendsList|@count-1}
                                <li>
                                    {* Barát profilképe *}
                                    <img src="{{$friendsList[$i]->getProfilkep()}}" alt="profilkép">
                                    {* Barát adatai *}
                                    <div class="friend-details">
                                        {* Barát neve *}
                                        <span>{{$friendsList[$i]->getVezeteknev()}} {{$friendsList[$i]->getKeresztnev()}}</span>
                                        <div class="flex-row">
                                            {* Barát utolsó üzenete *}
                                            <p>Lorem ipsum dolor...</p>
                                            {* Barát utolsó üzenetének időpontja *}
                                            <small>14:34</small>
                                        </div>
                                    </div>
                                </li>
                            {/for}
                            {/if}
                        </ul>
                    </div>

                    {* Maga a chat *}
                    <div class="chat-section">
                        {* Aktuális chat partner *}
                        <div class="chat-partner">
                            {* Aktuális chat partner képe *}
                            <img src="https://images.unsplash.com/photo-1492681290082-e932832941e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="profilkép">
                            {* Aktuális chat partner neve*}
                            <span>Example2 example2</span>
                        </div>

                        {* Aktuális chaten megjelenő üzenetek *}
                        <div class="chat-messages">
                            {* Bejövő üzenetek *}
                            <div class="incoming-messages">
                                {* Maga a bejövő üzenet *}
                                <p>Bejövő üzenet</p>
                            </div>
                            {* Kimenő üzenetek *}
                            <div class="outgoing-messages">
                                {* Maga a kimenő üzenet *}
                                <p>Kimenő üzenet</p>
                            </div>
                        </div>

                        {* Eszköztár *}
                        <div class="chat-toolbar">
                            <form action="#">
                                {* Ahova írhaod az üzeneted *}
                                <input type="text" placeholder="Írj egy üzenetet...">
                                {* A gomb amivel elküldheted az üzeneted *}
                                <button><i class="far fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

{include file="footer.tpl"}
