<div id="keresesDiv">
    <ul id="keresesUl" class="list-group" style="position: absolute; z-index: 1; width: 100%">
        {for $i=0 to $keresesEredmeny|@count-1}
            <li class="list-group-item"><a href="klub_leirassal.php?nev={{$keresesEredmeny[$i]->getNev()}}">{{$keresesEredmeny[$i]->getNev()}}</a></li>
        {/for}
    </ul>
</div>