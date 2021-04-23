<?php
/* Smarty version 3.1.39, created on 2021-04-24 01:18:10
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608355b2a072c6_65585595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e749b5c2999d3c0e453e0a70212d3f560aaa1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\menu.tpl',
      1 => 1619219884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608355b2a072c6_65585595 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a class="nav-link active" href="Uzenofal.php"><b-icon icon="house-fill" aria-hidden="true" class="mr-2"></b-icon>Kezdolap</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="profil.php"><b-icon icon="person-fill" aria-hidden="true" class="mr-2"></b-icon>Profil</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="uzenetek.php"><b-icon icon="chat-square-dots-fill" aria-hidden="true" class="mr-2"></b-icon>Uzenetek</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="klub.php"><b-icon icon="people-fill" aria-hidden="true" class="mr-2"></b-icon>Klubbok</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="#"><b-icon icon="bell-fill" aria-hidden="true" class="mr-2"></b-icon>Ertesitesek</a>
            </li>
            <li class="nav-item mr-4 border border-4 rounded">
                <a class="nav-link" href="logout.php"><b-icon icon="door-closed-fill" aria-hidden="true" class="mr-2"></b-icon>Kijelentkezés</a>
            </li>
            <div class="input-group rounded">
                <input type="search" class="form-control rounded mr-2" placeholder="Search" aria-label="Search" aria-describedby="search-addon"/>
                <button class="btn btn-primary" id="search-addon"><i class="fas fa-search"></i></button>
            </div>
        </ul>
    </nav>

</div><?php }
}
