<div id="{{$azonosito}}">
    {if $like}
        <button onclick="klubLike({{$azonosito}})" type="submit" name="likePost"><i class="fas fa-heart"></i>Tetszik</button>
    {else}
        <button onclick="klubLike({{$azonosito}})" type="submit" name="likePost"><i class="far fa-heart"></i>Tetszik</button>
    {/if}
</div>