<?php /* Smarty version Smarty-3.1.18, created on 2017-03-06 14:45:25
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176985800b3144e1ec6-35064953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1488807895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176985800b3144e1ec6-35064953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800b3144e5b17_80149216',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800b3144e5b17_80149216')) {function content_5800b3144e5b17_80149216($_smarty_tpl) {?><!DOCTYPE html>
<div id="header">

    <nav>
        <h1 id="title">Liveset Database</h1>
        <form action="/search.html" class="search-wrapper cf">
            <input type="text" placeholder="Search here..." required="">
            <button type="submit">Search</button>
        </form>
    </nav>



</div>
<?php }} ?>
