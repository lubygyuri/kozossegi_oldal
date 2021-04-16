<?php
/* Smarty version 3.1.39, created on 2021-04-16 17:31:07
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6079adbb2240e3_02338124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e749b5c2999d3c0e453e0a70212d3f560aaa1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\menu.tpl',
      1 => 1618587046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6079adbb2240e3_02338124 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="app">
    <div class="header">
        <!-- Image and text -->
        <b-navbar variant="faded" type="dark">
            <b-navbar-brand href="index.php">
                <img src="https://placekitten.com/g/30/30" class="d-inline-block align-top" alt="Kitten">
                fsociety
            </b-navbar-brand>
        </b-navbar>
    </div>

    <nav class="navbar border border-4 navbar-expand-lg">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mr-4 border border-4 p-2">
                    <a href="Uzenofal.php" ><b-icon icon="house-fill" aria-hidden="true" class="mr-2"></b-icon>Kezdolap</a>
                </li>
                <li class="nav-item mr-4 border border-4 p-2">
                    <a href="profil.php"><b-icon icon="person-fill" aria-hidden="true" class="mr-2"></b-icon>Profil</a>
                </li>
                <li class="nav-item mr-4 border border-4 p-2">
                    <a href="#"><b-icon icon="chat-square-dots-fill" aria-hidden="true" class="mr-2"></b-icon>Uzenetek</a>
                </li>
                <li class="nav-item mr-4 border border-4 p-2">
                    <a href="#"><b-icon icon="people-fill" aria-hidden="true" class="mr-2"></b-icon>Csoportok</a>
                </li>
                <li class="nav-item mr-4 border border-4 p-2">
                    <a href="#"><b-icon icon="bell-fill" aria-hidden="true" class="mr-2"></b-icon>Ertesitesek</a>
                </li>
            </ul>
        </div>

    </nav>

</div><?php }
}
