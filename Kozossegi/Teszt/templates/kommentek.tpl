<div id="komment{{$azonosito}}">
    {if $kommentek}
        {$x = $kommentek}
        {for $j=0 to $x|@count-1}
            <div class="border border-1 mt-2 rounded align-self-baseline w-100">
                <div class="post-header2">
                    <img src="{{$x[$j]->getFelhasznaloAzonosito()->getProfilkep()}}" rounded="circle"  class="d-inline-block align-top">
                    <div class="post-header-details">
                        <span>{{$x[$j]->getFelhasznaloAzonosito()->getVezeteknev()}} {{$x[$j]->getFelhasznaloAzonosito()->getKeresztnev()}}</span>
                    </div>
                </div>
                <div>
                    <p class="m-3">{{$x[$j]->getUzenet()}} </p>
                </div>
            </div>
        {/for}
    {/if}
</div>