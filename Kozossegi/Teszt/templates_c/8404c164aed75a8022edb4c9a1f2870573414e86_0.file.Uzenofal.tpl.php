<?php
/* Smarty version 3.1.39, created on 2021-04-20 00:25:54
  from 'C:\xampp\htdocs\kozossegi_oldal\Kozossegi\Teszt\templates\Uzenofal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607e0372585770_88500824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8404c164aed75a8022edb4c9a1f2870573414e86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kozossegi_oldal\\Kozossegi\\Teszt\\templates\\Uzenofal.tpl',
      1 => 1618871115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_607e0372585770_88500824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="app2"  class="container px-4 mt-5">

        <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5 mx-auto">
        <b-img src="https://placekitten.com/g/30/30"  rounded="circle" class="d-inline-block align-top"></b-img>
        Teszt Elek
        <div class="form-floating mt-3 mb-3">
            <textarea class="form-control" placeholder="Írjon bejegyzést" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        <div class="image-upload">
            <label for="file-input">
                <p class="h6 mb-2"><b-icon icon="upload" aria-hidden="true" class="mr-2"></b-icon>Kép feltöltés</p>
            </label>
            <input id="file-input" type="file"/>
        </div>
        <button type="button" class="btn btn-primary">Közzététel</button>
    </div>

    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['tomb']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['tomb']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <div class= "shadow-lg p-3 bg-white rounded align-self-baseline mr-2 w-50 p-3 mb-5 mx-auto"><b-row ><b-navbar variant="faded" type="light"><b-navbar-brand href="#"><b-img src="https://placekitten.com/g/30/30" rounded="circle" class="d-inline-block align-top mr-2 lg"></b-img><?php ob_start();
echo $_smarty_tpl->tpl_vars['tomb']->value[$_smarty_tpl->tpl_vars['i']->value]['nev'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</b-navbar-brand></b-navbar><div ><p class="m-3"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['tomb']->value[$_smarty_tpl->tpl_vars['i']->value]['szoveg'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</p><?php if ($_smarty_tpl->tpl_vars['tomb']->value[$_smarty_tpl->tpl_vars['i']->value]['url'] != '') {?><b-img src=" <?php ob_start();
echo $_smarty_tpl->tpl_vars['tomb']->value[$_smarty_tpl->tpl_vars['i']->value]['url'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" class="rounded mx-auto d-block" fluid alt="Fluid image"></b-img><?php }?></div></b-row><b-row class="mt-5"><b-col cols="auto" class="w-100"><b-button-group class="w-100"><b-button  variant="btn-outline-primary" @click="asd"><b-icon icon="heart" aria-hidden="true" v-if="like"></b-icon><b-icon icon="heart-fill" aria-hidden="true" v-if="!like"></b-icon>Tetszik</b-button><b-button v-b-toggle.my-collapse<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
 variant="btn-outline-primary"><b-icon  icon="chat-left" aria-hidden="true"></b-icon> Hozzászólás</b-button><b-button  variant="btn-outline-primary"><b-icon icon="box-arrow-up-right" aria-hidden="true"></b-icon> Megosztás</b-button></b-button-group><template><b-collapse id="my-collapse<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" class="mt-4">
                                    <div class="border border-1 mt-2 rounded align-self-baseline w-100" v-for="value in bejegyzes">
                                        <div v-for="(v,i,j) in value">
                                            <b-img src="https://placekitten.com/g/30/30" rounded="circle"  class="d-inline-block align-top" v-if="j==0"></b-img>
                                           <span> {{ v }}</span>
                                        </div>
                                        <div >
                                            <p class="m-3"></p>
                                        </div>
                                    </div>
                                    <div class="border border-3 mt-2">
                                    <b-img src="https://placekitten.com/g/30/30" rounded="circle" class="d-inline-block align-top "></b-img>
                                    Teszt Elek
                                    <div class="form-floating mt-3 mb-1">
                                        <textarea class="form-control" placeholder="Írjon kommentet" id="floatingTextarea2" style="height: 100px" v-model="text"></textarea>
                                    </div>

                                    <button type="button" class="btn btn-primary" @click="komm">Közzététel</button>
                                    </div>

                                </b-collapse></template></b-col></b-row></div>
    <?php }
}
?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
