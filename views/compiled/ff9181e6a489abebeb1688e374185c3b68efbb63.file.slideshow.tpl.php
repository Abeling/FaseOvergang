<?php /* Smarty version Smarty-3.1.18, created on 2017-03-13 14:07:36
         compiled from "views\slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2398358c697fd2354d9-81250116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff9181e6a489abebeb1688e374185c3b68efbb63' => 
    array (
      0 => 'views\\slideshow.tpl',
      1 => 1489410427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2398358c697fd2354d9-81250116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c697fd238023_96549550',
  'variables' => 
  array (
    'bannerResult' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c697fd238023_96549550')) {function content_58c697fd238023_96549550($_smarty_tpl) {?><!DOCTYPE html>
<div class="slideshow-container">
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bannerResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <div class="mySlides fade">
        <img src="content/banner/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['bannerName'];?>
.jpg" style="width:100%">
    </div>
    <?php } ?>
</div>
<br>
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<br>
<script src="js/slideshow.js"></script><?php }} ?>
