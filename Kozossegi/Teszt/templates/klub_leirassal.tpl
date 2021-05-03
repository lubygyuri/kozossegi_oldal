{include file="header.tpl"}
{include file="menu.tpl"}

<div id="app2">
    <div class= "shadow-lg pl-3 pr-3 pb-3 bg-white rounded align-self-baseline mr-2 w-75 mb-5 mx-auto">
        <h1 class="mt-3 pt-2 text-center">{{$klub->getNev()}}</h1>
        <div>
            <span>{{$klub->getLeiras()}}</span>
        </div>
        <div>
            <ul class="list-group">
                <li class="list-group-item">tag1</li>
                <li class="list-group-item">tag2</li>
                <li class="list-group-item">tag3</li>
                <li class="list-group-item">további x</li>
            </ul>
        </div>
        <button class="btn btn-primary w-100" type="submit" >Csatlakozas a csoporthoz</button>
    </div>
</div>