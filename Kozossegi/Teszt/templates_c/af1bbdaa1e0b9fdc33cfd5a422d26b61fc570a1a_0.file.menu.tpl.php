<?php
/* Smarty version 3.1.39, created on 2021-05-03 20:17:03
  from 'D:\XAMPP\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60903e1fe5e434_63625254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af1bbdaa1e0b9fdc33cfd5a422d26b61fc570a1a' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\menu.tpl',
      1 => 1619628740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60903e1fe5e434_63625254 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="app">
    <div class="header">
        <!-- Image and text -->
        <b-navbar variant="faded" type="dark">
            <b-navbar-brand href="Uzenofal.php">
                <img src="style/logo.png" class="d-inline-block align-top" alt="fsociety">
            </b-navbar-brand>
        </b-navbar>
    </div>

    <nav class="border border-4">
        <ul class="nav nav-pills mb-2 mb-lg-0">
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link active" href="Uzenofal.php"><b-icon icon="house-fill" aria-hidden="true" class="mr-2"></b-icon>Kezdőlap</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="profil.php"><b-icon icon="person-fill" aria-hidden="true" class="mr-2"></b-icon>Profil</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="uzenetek.php"><b-icon icon="chat-square-dots-fill" aria-hidden="true" class="mr-2"></b-icon>Üzenetek</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="klub.php"><b-icon icon="people-fill" aria-hidden="true" class="mr-2"></b-icon>Klubbok</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="#"><b-icon icon="bell-fill" aria-hidden="true" class="mr-2"></b-icon>Értesítések</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="logout.php"><b-icon icon="door-closed-fill" aria-hidden="true" class="mr-2"></b-icon>Kijelentkezés</a>
            </li>

            <form>
                <div class="input-group rounded">
                    <input onkeyup="kereses()" type="search" id="searchbox" class="form-control rounded mr-2 sbox" placeholder="Keresés..." autocomplete="off">
                    <button class="btn btn-primary" id="search-addon"><i class="fas fa-search"></i></button>
                </div>
                <div id="keresesDiv">

                </div>
            </form>
        </ul>
    </nav>

</div><?php }
}
