<?php /* Smarty version Smarty-3.1.18, created on 2016-12-08 12:18:18
         compiled from "views\insert_newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250705849417a62e917-78651456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85eac43f5892ad333eb54b9043db3059f622830c' => 
    array (
      0 => 'views\\insert_newsarticles.tpl',
      1 => 1480493827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250705849417a62e917-78651456',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5849417a9d77a4_90349962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5849417a9d77a4_90349962')) {function content_5849417a9d77a4_90349962($_smarty_tpl) {?><!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primaryadmin">
        <form action="insert_newsarticles.php" method="POST">
          id title content
          Title:<br><input type="text" name="firstname"><br>
          Content:<br><input type="text" name="lastname"><br>
          <input type="submit" value="submit">
        </form>
      </div>
<?php }} ?>
