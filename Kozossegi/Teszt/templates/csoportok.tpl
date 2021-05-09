{include file="header.tpl"}
{include file="menu.tpl"}
<div id="app5">

    <div class="profile-area">
        <div class="profile-container">
            <div class="messages-card mx-auto">

                {* Csoport üzenetek fejléc *}
                <div class="messages-header" style="justify-content: space-between !important;">
                    <div class="flex-row col-md-3" style="align-items: center !important;">
                        <b-button variant="primary" @click="$bvModal.show('bv-modal-csoport')" class="ml-3 col-md-10">Csoport létrehozása</b-button>
                        <b-button variant="primary" @click="$bvModal.show('bv-modal-csoportTagHozzaadasa')" class="ml-4" style="display: flex; justify-content: center;"><b-icon icon="person-plus-fill"></b-icon></b-button>
                    </div>

                    {* Csoport létrehozása *}
                    <b-modal id="bv-modal-csoport" hide-footer title="Csoport létrehozása">
                        <p>Az alábbi mező kitöltésével új csoportos beszélgetést nyithatsz:</p>
                        <div>
                            <form action="csoportok.php" class="kulso-form" method="post">
                                <input type="text" class="mt-3 p-2 h-25" name="csoportNev" placeholder="Csoport neve" required>
                                <div class="flex-row">
                                    <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="csoportLetrehozas">Létrehozás</button>
                                    <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-csoport')">Mégse</b-button>
                                </div>
                            </form>
                        </div>
                    </b-modal>

                    {* Csoporttag hozzáadása *}
                    <b-modal id="bv-modal-csoportTagHozzaadasa" hide-footer title="Csoporttag hozzáadása">
                        <p>Az alábbi mezők kitöltésével új tagot vehetsz fel az egyik csoportodba:</p>
                        <div>
                            <form action="csoportok.php" class="kulso-form" method="post">
                                <select name="group" id="groups" class="form-select mt-3 p-2 h-25" aria-label="Csoport kiválasztása" onchange="getAllGroupMember()">
                                    {if count($groupOptions) != 0}
                                            <option selected disabled>Válassz csoportot</option>
                                        {for $i=0 to $groupOptions|@count-1}
                                            <option value="{{$groupOptions[$i]->getAzonosito()}}">{{$groupOptions[$i]->getNev()}}</option>
                                        {/for}
                                    {else}
                                        <option selected disabled>Nincsenek csoportjaid</option>
                                    {/if}
                                </select>
                                <div id="members" class="w-100"></div>
                                <div class="flex-row">
                                    <button type="submit" id="register-id" class="mt-3 p2 btn btn-success" name="csoportTagFelvétele">Felvétel</button>
                                    <b-button id="cancel" variant="warning" class="mt-3 p2" @click="$bvModal.hide('bv-modal-csoportTagHozzaadasa')">Mégse</b-button>
                                </div>
                            </form>
                        </div>
                    </b-modal>

                    {* Csoport üzenetek fejlécének adatai *}
                    <div class="header-details-container">
                        {* Profil név (azaz én) *}
                        <span>{{$belepettFelhasznalo->getVezeteknev()}} {{$belepettFelhasznalo->getKeresztnev()}}</span>
                        {* Profilkép *}
                        <img src="{{$belepettFelhasznalo->getProfilkep()}}" alt="profilkép">
                    </div>
                </div>

                {* Csoport üzenetek main *}
                <div class="messages-main">
                    {* Csoportok listázva *}
                    <div class="messages-friends-container">
                        <ul>
                            {if $csoportok}
                                {for $i=0 to $csoportok|@count-1}
                                    {if $csoportok[$i]->getAzonosito() == $recentCsoport->getAzonosito()}
                                        <a href="csoportok.php?csoportAzonosito={{$csoportok[$i]->getAzonosito()}}" class="friendsList-li active">
                                            <li>
                                                 {* Csoport adatai *}
                                                <div class="friend-details">
                                                     {* Csoport neve *}
                                                    <span>{{$csoportok[$i]->getNev()}}</span>
                                                    <div class="flex-row">
                                                            {for $j=0 to $latestGroupMessages|@count-1}
                                                                {if $latestGroupMessages[$j]->getCsoportAzonosito() == $csoportok[$i]->getAzonosito()}
                                                                     {* Csoport utolsó üzenete *}
                                                                    <p><strong class="mr-2">{$latestGroupMessages[$j]->getNev()}:</strong>{{$latestGroupMessages[$j]->getUzenet()}}</p>
                                                                     {* Csoport utolsó üzenetének időpontja *}
                                                                    <small>{{$latestGroupMessages[$j]->getKuldesIdeje()}}</small>
                                                                {/if}
                                                            {/for}
                                                    </div>
                                                </div>
                                            </li>
                                        </a>
                                    {else}
                                        <a href="csoportok.php?csoportAzonosito={{$csoportok[$i]->getAzonosito()}}" class="friendsList-li">
                                            <li>
                                                {* Csoport adatai *}
                                                <div class="friend-details">
                                                    {* Csoport neve *}
                                                    <span>{{$csoportok[$i]->getNev()}}</span>
                                                    <div class="flex-row">
                                                        {for $j=0 to $latestGroupMessages|@count-1}
                                                             {if $latestGroupMessages[$j]->getCsoportAzonosito() == $csoportok[$i]->getAzonosito()}
                                                                {* Csoport utolsó üzenete *}
                                                                <p><strong class="mr-2">{$latestGroupMessages[$j]->getNev()}:</strong>{{$latestGroupMessages[$j]->getUzenet()}}</p>
                                                                {* Csoport utolsó üzenetének időpontja *}
                                                                <small>{{$latestGroupMessages[$j]->getKuldesIdeje()}}</small>
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
                            {if $csoportUzenetek}
                                {for $i=0 to $csoportUzenetek|@count-1}
                                    <div class="chat-messages-timer"><small>{{$csoportUzenetek[$i]->getKuldesIdeje()}}</small></div>
                                    {if $csoportUzenetek[$i]->getKuldoAzonosito() != $belepettFelhasznalo->getEmail()}
                                        {* Bejövő üzenetek *}
                                        <div class="incoming-messages">
                                            {* Maga a bejövő üzenet *}
                                            <p><strong class="mr-2">{{$csoportUzenetek[$i]->getNev()}}:</strong> {{$csoportUzenetek[$i]->getUzenet()}}</p>
                                        </div>
                                    {else}
                                        {* Kimenő üzenetek *}
                                        <div class="outgoing-messages">
                                            {* Maga a kimenő üzenet *}
                                            <p>{{$csoportUzenetek[$i]->getUzenet()}}</p>
                                        </div>
                                    {/if}
                                {/for}
                            {/if}
                        </div>

                        {* Eszköztár *}
                        <div class="chat-toolbar">
                            <form action="csoportok.php?csoportAzonosito={{$recentCsoport->getAzonosito()}}" method="post">
                                {* Ahova írhaod az üzeneted *}
                                <input type="text" name="csoportMessageInp" placeholder="Írj egy üzenetet...">
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
