<?php
/* Smarty version 3.1.39, created on 2021-04-09 10:32:12
  from '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6070110ce1c159_54994995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c5c8baf4ec724b7946ed266a6e1746d24e3d96' => 
    array (
      0 => '/opt/lampp/htdocs/Kozossego_Oldal/kozossegi_oldal/Kozossegi/Teszt/templates/header.tpl',
      1 => 1617957132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6070110ce1c159_54994995 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html >
<HTML lang="hu">
<HEAD>
<TITLE>Teszt Feladat</TITLE>
    <link rel="stylesheet" href="Style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="app.js" defer><?php echo '</script'; ?>
>

    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap@4.6.0/dist/css/bootstrap.min.css" />

    <!-- Load Vue followed by BootstrapVue -->
    <?php echo '<script'; ?>
 src="https://unpkg.com/vue@2.6.12/dist/vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/bootstrap-vue@2.21.2/dist/bootstrap-vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
  src = "https://unpkg.com/bootstrap-vue@2.21.2/dist/bootstrap-vue-icons.min.js" > <?php echo '</script'; ?>
>
</HEAD>
<BODY>
    <div id="app">
        <div class="header">
            <!-- Image and text -->
            <b-navbar variant="faded" type="dark">
                <b-navbar-brand href="#">
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
                        <a href="#"><b-icon icon="person-fill" aria-hidden="true" class="mr-2"></b-icon>Profil</a>
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

    </div>



<?php }
}
