<div id="{{$bejegyzes->getAzonosito()}}">
        <!-- likek szama -->
        {if $bejegyzes->getLikeCount() > 0}
                <div class="mt-3 like_count">{{$bejegyzes->getLikeCount()}} embernek tetszik ez a bejegyzés</div>
        {/if}
        <div class="post-footer">
                {if $like}
                <button onclick="klubLike({{$bejegyzes->getAzonosito()}})" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button>
                {else}
                <button onclick="klubLike({{$bejegyzes->getAzonosito()}})" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button>
                {/if}
        </div>
</div>