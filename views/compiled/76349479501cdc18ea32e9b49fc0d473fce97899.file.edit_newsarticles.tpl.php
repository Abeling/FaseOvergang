<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 12:42:04
         compiled from "views\edit_newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73715847cc08836f16-04622084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76349479501cdc18ea32e9b49fc0d473fce97899' => 
    array (
      0 => 'views\\edit_newsarticles.tpl',
      1 => 1481110920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73715847cc08836f16-04622084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5847cc08887c93_06439478',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847cc08887c93_06439478')) {function content_5847cc08887c93_06439478($_smarty_tpl) {?>  <form method="post">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['id'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['schoolName'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['adress'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['adressNumber'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['adressExtra'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['zipcode'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['district'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['telnr'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['email'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['website'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openDag1'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openDag2'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openDag3'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openClass1'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openClass2'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openClass3'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openClass4'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['openClass5'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['infoNight1'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['infoNight2'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['private'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['level'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['concept'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['specials'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['tto'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sports'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['tech'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['spanish'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['vso'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['vmbob'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['vmbok'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['vmbot'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['havo'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['vwo'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['gymnasium'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['basis'];?>
"><br>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['art'];?>
"><br>
    <input type="submit" name="save_update" value="save">
  </form>
<?php }} ?>
