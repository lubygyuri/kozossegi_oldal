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
                        <input type="search" placeholder="Search">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>

                    {* Üzenetek fejlécének adatai *}
                    <div class="header-details-container">
                        {* Profil név (azaz én) *}
                        <span>Example example</span>
                        {* Profilkép *}
                        <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="profilkép">
                    </div>
                </div>

                {* Üzenetek main *}
                <div class="messages-main">
                    {* Barátok listázva *}
                    <div class="messages-friends-container">
                        <ul>
                            <li>
                                {* Barát profilképe *}
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="profilkép">
                                {* Barát adatai *}
                                <div class="friend-details">
                                    {* Barát neve *}
                                    <span>Example2 Example2</span>
                                    <div class="flex-row">
                                        {* Barát utolsó üzenete *}
                                        <p>Lorem ipsum dolor...</p>
                                        {* Barát utolsó üzenetének időpontja *}
                                        <small>14:34</small>
                                    </div>
                                </div>
                            </li>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti ex iste iusto mollitia, nisi quis repellendus reprehenderit sunt unde?</p>
                            </div>
                            {* Kimenő üzenetek *}
                            <div class="outgoing-messages">
                                {* Maga a kimenő üzenet *}
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                        {* Eszköztár *}
                        <div class="chat-toolbar">
                            <form action="#">
                                {* Ahova írhaod az üzeneted *}
                                <input type="text" placeholder="Write something...">
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

{* Barátokra példa *}
{*<li>*}
{*    <img src="https://images.unsplash.com/photo-1542103749-8ef59b94f47e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="profilkép">*}
{*    <div class="friend-details">*}
{*        <span>Example3 Example3</span>*}
{*        <div class="flex-row">*}
{*            <p>Lorem ipsum dolor...</p>*}
{*            <small>7:30</small>*}
{*        </div>*}
{*    </div>*}
{*</li>*}
{*<li>*}
{*    <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="profilkép">*}
{*    <div class="friend-details">*}
{*        <span>Example4 Example4</span>*}
{*        <div class="flex-row">*}
{*            <p>Lorem ipsum dolor sit.</p>*}
{*            <small>12:49</small>*}
{*        </div>*}
{*    </div>*}
{*</li>*}
{*<li>*}
{*    <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="profilkép">*}
{*    <div class="friend-details">*}
{*        <span>Example5 Example5</span>*}
{*        <div class="flex-row">*}
{*            <p>Lorem ipsum dolor sit amet.</p>*}
{*            <small>1:15</small>*}
{*        </div>*}
{*    </div>*}
{*</li>*}
{*<li>*}
{*    <img src="https://images.unsplash.com/photo-1492681290082-e932832941e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="profilkép">*}
{*    <div class="friend-details">*}
{*        <span>Example6 Example6</span>*}
{*        <div class="flex-row">*}
{*            <p>Lorem ipsum dolor...</p>*}
{*            <small>21:11</small>*}
{*        </div>*}
{*    </div>*}
{*</li>*}
{*<li>*}
{*    <img src="https://images.unsplash.com/photo-1492681290082-e932832941e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="profilkép">*}
{*    <div class="friend-details">*}
{*        <span>Example6 Example6</span>*}
{*        <div class="flex-row">*}
{*            <p>Lorem ipsum dolor...</p>*}
{*            <small>21:11</small>*}
{*        </div>*}
{*    </div>*}
{*</li>*}
{*<li>*}
{*    <img src="https://images.unsplash.com/photo-1492681290082-e932832941e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="profilkép">*}
{*    <div class="friend-details">*}
{*        <span>Example6 Example6</span>*}
{*        <div class="flex-row">*}
{*            <p>Lorem ipsum dolor...</p>*}
{*            <small>21:11</small>*}
{*        </div>*}
{*    </div>*}
{*</li>*}
{*<li>*}
{*    <img src="https://images.unsplash.com/photo-1492681290082-e932832941e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="profilkép">*}
{*    <div class="friend-details">*}
{*        <span>Example6 Example6</span>*}
{*        <div class="flex-row">*}
{*            <p>Lorem ipsum dolor...</p>*}
{*            <small>21:11</small>*}
{*        </div>*}
{*    </div>*}
{*</li>*}
{*<li>*}
{*    <img src="https://images.unsplash.com/photo-1492681290082-e932832941e6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="profilkép">*}
{*    <div class="friend-details">*}
{*        <span>Example6 Example6</span>*}
{*        <div class="flex-row">*}
{*            <p>Lorem ipsum dolor...</p>*}
{*            <small>21:11</small>*}
{*        </div>*}
{*    </div>*}
{*</li>*}
