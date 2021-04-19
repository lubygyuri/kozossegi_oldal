<?php
/* Smarty version 3.1.39, created on 2021-04-19 21:42:06
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\login.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607ddd0e14b272_13460900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b64f01cdb29cf04b682d204eb2d1bc0aff90389c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\login.php',
      1 => 1618857584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607ddd0e14b272_13460900 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
include_once 'includes/classAutoLoad.php';
include_once 'includes/controllerAutoLoad.php';

require '../libs/Smarty.class.php';
$smarty = new Smarty;

if(isset($_POST["submit"])){
    $felhasznalo = new Felhasznalo();
    $felhasznalo->setEmail($_POST["email"]);
    $felhasznalo->setJelszo($_POST["password"]);

    $validation = new ValidatorController();
    $errors = $validation->validateLogin($felhasznalo->getEmail(), $felhasznalo->getJelszo());

    if (count($errors) == 0) {
        $controller = new FelhasznaloController();
        $user_id = $controller->login($felhasznalo);

//        TODO: session implementation
//        session_start();
//        $_SESSION["azonosito"] = $user_id;

        $smarty->display("profil.tpl");
        exit();
    }

    $smarty->assign("errors", $errors);
    $smarty->display("index.tpl");
    exit();
} else {
    $smarty->display("index.tpl");
    exit();
}
<?php }
}
