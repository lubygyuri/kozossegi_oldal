{include file="header.tpl"}
{include file="menu.tpl"}
<div id="app3">
    <div class="profile-area">
        <div class="profile-container">
            <div class="profile-card col-md-11">
                {* Fejléc Háttérkép *}
                <div class="background-image">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="fejléc">
                </div>

                {* Profilkép *}
                <div class="profile-image">
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="profilkép">
                </div>

                {* Main szekció *}
                <div class="profile-main">
                    {* Teljes név *}
                    <div class="profile-name">
                        <h2>Example example</h2>
                    </div>
                    {* Személyes adatok *}
                    <div class="personal-details">
                        <span><i class="fas fa-envelope"></i>example@example.com</span>
                        <span><i class="fas fa-birthday-cake"></i>2000-08-05</span>
                    </div>

                    {* Adatok és bejegyzés szekció *}
                    <div class="flex-row">
                        {* Adatok *}
                        <div class="profile-card more-details">
                            <h3>Infos</h3>
                            <ul>
                                <li><i class="fas fa-user"></i>Male (Gender)</li>
                                <li><i class="fas fa-suitcase"></i>Google (Job)</li>
                                <li><i class="fas fa-graduation-cap"></i>SZTE (University)</li>
                            </ul>
                        </div>
                        {* Bejegyzés írása *}
                        <div class="profile-card profile-posting">
                            <h3>Bejegyzés Írása</h3>
                            <div class="form-floating mt-3 mb-3">
                                <textarea class="form-control" placeholder="Írjon bejegyzést" id="floatingTextarea2"></textarea>
                            </div>
                            <div class="flex-row">
                                <div class="image-upload">
                                    <label for="file-input">
                                        <p class="h6 mb-2"><b-icon icon="upload" aria-hidden="true" class="mr-2"></b-icon>Kép feltöltés</p>
                                    </label>
                                    <input id="file-input" type="file"/>
                                </div>
                                <button type="button" class="btn btn-primary">Közzététel</button>
                            </div>
                        </div>
                    </div>

                    {* Posztok *}
                    <div class="profile-card post-card mx-auto">
                        {* Posztok fejléce *}
                        <div class="post-header">
                            {* Profilkép *}
                            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="profilkép">
                            {* Poszt adatok *}
                            <div class="post-header-details">
                                <span>Example example</span>
                                <span class="small">12:32</span>
                            </div>
                        </div>

                        {* Posztok main *}
                        <div class="post-main">
                            <div class="image-container">
                                {* Poszt képe *}
                                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="">
                            </div>
                            {* Posztok szövege *}
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda culpa deleniti deserunt nemo ratione. Animi aspernatur autem cupiditate dolore eligendi est, illum iste iure mollitia necessitatibus optio praesentium quam rerum sequi similique tempore veritatis voluptatum.</p>
                        </div>

                        {* Akció gombok *}
                        <div class="post-footer">
                            <button><i class="far fa-heart"></i>Tetszik</button>
                            <button><i class="far fa-comment-alt"></i>Hozzászólás</button>
                            <button><i class="fas fa-external-link-alt"></i>Megosztás</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}