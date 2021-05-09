<select name="groupMember" id="members" class="form-select mt-3 p-2 h-25 w-100" aria-label="Csoporttag kiválasztása">
    {if count($csoportTagok) != 0}
        <option value="{{$csoportTagok[0]->getEmail()}}" selected>{{$csoportTagok[0]->getVezeteknev()}} {{$csoportTagok[0]->getKeresztnev()}}</option>
        {for $i=1 to $csoportTagok|@count-1}
            <option value="{{$csoportTagok[$i]->getEmail()}}">{{$csoportTagok[$i]->getVezeteknev()}} {{$csoportTagok[$i]->getKeresztnev()}}</option>
        {/for}
    {else}
        <option selected>Minden barátod hozzáadtad már ehhez a csoporthoz</option>
    {/if}
</select>