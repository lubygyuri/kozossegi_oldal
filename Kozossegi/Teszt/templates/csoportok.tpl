{include file="header.tpl"}
{include file="menu.tpl"}
<div id="app5">

    <div class="profile-area">
        <div class="profile-container">
            <div class="messages-card mx-auto">

                {* Csoport üzenetek fejléc *}
                <div class="messages-header">
                    {* Csoport üzenetek fejlécének adatai *}
                    <div class="header-details-container">
                        {* Profil név (azaz én) *}
                        <span>Teljes Név</span>
                        {* Profilkép *}
                        <img src="" alt="profilkép">
                    </div>
                </div>

                {* Csoport üzenetek main *}
                <div class="messages-main">
                    {* Csoportok listázva *}
                    <div class="messages-friends-container">
                        <ul>
                            <a href="#" class="friendsList-li active">
                                <li>
                                    {* Csoport adatai *}
                                    <div class="friend-details">
                                        {* Csoport neve *}
                                        <span>Csoport Neve</span>
                                        <div class="flex-row">
                                            {* Csoport utolsó üzenete *}
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            {* Csoport utolsó üzenetének időpontja *}
                                            <small>11:12</small>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        </ul>
                    </div>

                    {* Maga a chat *}
                    <div class="chat-section">

                        {* Aktuális chaten megjelenő üzenetek *}
                        <div class="chat-messages" id="chat-messages">
                            <div class="chat-messages-timer"><small></small></div>
                                {* Bejövő üzenetek *}
                                <div class="incoming-messages">
                                    {* Maga a bejövő üzenet *}
                                    <p><strong class="mr-2">Név:</strong> Helloka</p>
                                </div>
                                {* Kimenő üzenetek *}
                                <div class="outgoing-messages">
                                    {* Maga a kimenő üzenet *}
                                    <p>Hello</p>
                            </div>
                        </div>

                        {* Eszköztár *}
                        <div class="chat-toolbar">
                            <form action="#" method="post">
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
