<?php
/* Smarty version 3.1.39, created on 2021-04-16 21:11:33
  from '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6079e1659d4135_91992777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f3efde752bec4b8f1d87b0ca892f6e720e35de' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/menu.tpl',
      1 => 1618600292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6079e1659d4135_91992777 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="klub.php"><b-icon icon="people-fill" aria-hidden="true" class="mr-2"></b-icon>Klubbok</a>
                </li>
                <li class="nav-item mr-4 border border-4 p-2">
                    <a href="#"><b-icon icon="bell-fill" aria-hidden="true" class="mr-2"></b-icon>Ertesitesek</a>
                </li>
            </ul>
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                       aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
            </div>
        </div>
    </nav>

</div><?php }
}
