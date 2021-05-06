<div id="{{$bejegyzes->getAzonosito()}}">

    <!-- likek szama -->
    {if $bejegyzes->getLikeCount() > 0}
        <div class="mt-3 like_count">{{$bejegyzes->getLikeCount()}} embernek tetszik ez a bejegyzés</div>
    {/if}
    <div class="post-footer">
        {if $like}
                <button onclick="like({{$bejegyzes->getAzonosito()}})" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button>
        {else}
                <button onclick="like({{$bejegyzes->getAzonosito()}})" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button>
        {/if}
                <button v-b-toggle.my-collapse{{$bejegyzes->getAzonosito()}} id="{{$bejegyzes->getAzonosito()}}"><i class="far fa-comment-alt"></i>Hozzászólás</button>
    </div>
</div>