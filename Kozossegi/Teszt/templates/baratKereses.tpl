<div id="keresesDiv2">
    <ul id="keresesUl" class="list-group" style=" z-index: 1">
        {for $i=0 to $keresesEredmeny|@count-1}
            <li class="list-group-item list-group-item-dark"><a href="profil.php?email={{$keresesEredmeny[$i]->getEmail()}}">{{$keresesEredmeny[$i]->getVezeteknev()}} {{$keresesEredmeny[$i]->getKeresztnev()}}</a></li>
        {/for}
    </ul>
</div>