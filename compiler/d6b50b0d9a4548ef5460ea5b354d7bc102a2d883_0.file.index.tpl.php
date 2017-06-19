<?php /* Smarty version 3.1.27, created on 2017-06-19 05:33:14
         compiled from "C:\laragon\www\proyectomvc\assets\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17464145285947621ae61c50_44709153%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6b50b0d9a4548ef5460ea5b354d7bc102a2d883' => 
    array (
      0 => 'C:\\laragon\\www\\proyectomvc\\assets\\templates\\home\\index.tpl',
      1 => 1497850391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17464145285947621ae61c50_44709153',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5947621aeef875_96168378',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5947621aeef875_96168378')) {
function content_5947621aeef875_96168378 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17464145285947621ae61c50_44709153';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <body>
      
  <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

      
<div class="container" style="margin-top: 100px;">
     <div class="jumbotron">
        <h1>Bienvenido al curso!</h1>
        <p class="lead">Plantilla de ejemplo para iniciar el curso de php avanzado.</p>
        <p><a class="btn btn-lg btn-success" href="http://www.prinick.com" role="button">Comenzar!</a></p>
                 
	</div>
</div>

     <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

 
<?php }
}
?>