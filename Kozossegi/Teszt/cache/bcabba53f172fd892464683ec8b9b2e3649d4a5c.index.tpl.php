<?php
/* Smarty version 3.1.39, created on 2021-03-16 16:11:19
  from '/opt/lampp/htdocs/Smarty_Teszt/demo/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6050ca97104b65_71436543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9417295ce6703d3e88158b2f24df1269cce672df' => 
    array (
      0 => '/opt/lampp/htdocs/Smarty_Teszt/demo/templates/index.tpl',
      1 => 1615905759,
      2 => 'file',
    ),
    '9292d7158e802cf3b7a2ea97f4bed05100903e25' => 
    array (
      0 => '/opt/lampp/htdocs/Smarty_Teszt/demo/templates/header.tpl',
      1 => 1615905453,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_6050ca97104b65_71436543 (Smarty_Internal_Template $_smarty_tpl) {
?>
<HTML>
<HEAD>
<TITLE>foo - <br />
<b>Notice</b>:  Undefined index: Name in <b>/opt/lampp/htdocs/Smarty_Teszt/demo/templates_c/9292d7158e802cf3b7a2ea97f4bed05100903e25_0.file.header.tpl.cache.php</b> on line <b>29</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>/opt/lampp/htdocs/Smarty_Teszt/demo/templates_c/9292d7158e802cf3b7a2ea97f4bed05100903e25_0.file.header.tpl.cache.php</b> on line <b>29</b><br />
</TITLE>
    <link rel="stylesheet" href="Style/style.css">
    
    <script>
       var xhttp = new XMLHttpRequest();
        function loadDoc() {
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementsByTagName("BODY")[0].innerHTML = this.responseText;                }
            };
            var selectBox = document.getElementById("megyek");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            xhttp.open("GET", "Varosok.php?megyeid=" + selectedValue, true);
            xhttp.send();
        }

       function VarosModisitoGombok(x,megy_id) {
           document.getElementById(x).removeAttribute("onclick");
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById(x).innerHTML = this.responseText;
               }
           };
           xhttp.open("GET", "View/VarosModositasView.php?id="+x+"&megyeid="+megy_id, true);
           xhttp.send();
       }
       function VarosAdd(nev,megy_id) {
           document.getElementById('nev').value = ''
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("VarosLista").innerHTML = this.responseText;
               }
           };
           xhttp.open("GET", "Controller/VarosFelvetel.php?nev="+nev+"&megyeid="+megy_id, true);
           xhttp.send();
       }
       function VarosDelete(id,megy_id) {
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("VarosLista").innerHTML = this.responseText;
               }
           };
           xhttp.open("GET", "Controller/VarosTorles.php?id="+id+"&megyeid="+megy_id, true);
           xhttp.send();
       }
       function Megse(id,megy_id) {
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("VarosLista").innerHTML = this.responseText;
               }
           };
           xhttp.open("GET", "Controller/Megse.php?id="+id+"&megyeid="+megy_id, true);
           xhttp.send();
       }
       function VarosModosit(id,nev,megy_id) {
           xhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("VarosLista").innerHTML = this.responseText;
               }
           };
           xhttp.open("GET", "Controller/VarosModosit.php?id="+id+"&nev="+nev+"&megyeid="+megy_id, true);
           xhttp.send();
       }

       </script>
    
</HEAD>
<BODY>

<div id="megye_valasztas0">
    <form action="">
        <select name="Megye" id="megyek" onchange="loadDoc()" >
            <label for="megyek">Megye:</label>
            <option value="" selected disabled hidden>V??lasszon</option>
            <option value="2">Baranya</option>
<option value="4">Borsod-Aba??j-Zempl??n</option>
<option value="1">B??cs-Kiskun</option>
<option value="3">B??k??s</option>
<option value="5">Csongr??d-Csan??d</option>
<option value="6">Fej??r</option>
<option value="7">Gy??r-Moson-Sopron</option>
<option value="8">Hajd??-Bihar</option>
<option value="9">Heves</option>
<option value="10">J??sz-Nagykun-Szolnok</option>
<option value="11">Kom??rom-Esztergom</option>
<option value="12">N??gr??d</option>
<option value="13">Pest</option>
<option value="14">Somogy</option>
<option value="15">Szabolcs-Szatm??r-Bereg</option>
<option value="16">Tolna</option>
<option value="17">Vas</option>
<option value="18">Veszpr??m</option>
<option value="19">Zala</option>

        </select>
    </form>
</div><?php }
}
