<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 09:47:04
         compiled from "views\adminheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34985847c6f2d6f383-12999118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c512e13c4a801849e5a2e54424881e8d25f25d9' => 
    array (
      0 => 'views\\adminheader.tpl',
      1 => 1481100422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34985847c6f2d6f383-12999118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5847c6f30f4903_22617879',
  'variables' => 
  array (
    'pagedinges' => 0,
    'pageding' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847c6f30f4903_22617879')) {function content_5847c6f30f4903_22617879($_smarty_tpl) {?><!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primaryadmin">
        <h1>Admin Home</h1>
        <div id="header">
          <nav>
            <ul>
              <li><?php if ($_smarty_tpl->tpl_vars['pagedinges']->value=="showpersonal") {?>
                    <a id="home" href="?action=admin&cms_action=showpersonal" style="font-weight:bold;">PERSONAL</a>
                  <?php } elseif (empty($_smarty_tpl->tpl_vars['pageding']->value)) {?>
                    <a id="home" href="?action=admin&cms_action=showpersonal" style="font-weight:bold;">PERSONAL</a>
                  <?php } else { ?>
                    <a id="home" href="?action=admin&cms_action=showpersonal">PERSONAL</a>
                  <?php }?></li>

              <li><?php if ($_smarty_tpl->tpl_vars['pagedinges']->value=="showevents") {?>
                    <a href="?action=admin&cms_action=showevents" style="font-weight:bold;">EVENTS</a>
                  <?php } else { ?>
                    <a href="?action=admin&cms_action=showevents">EVENTS</a>
                  <?php }?></li>

              <li><?php if ($_smarty_tpl->tpl_vars['pagedinges']->value=="showdjs") {?>
                    <a href="?action=admin&cms_action=showdjs" style="font-weight:bold;">DJ's</a>
                  <?php } else { ?>
                    <a href="?action=admin&cms_action=showdjs">DJ's</a>
                  <?php }?></li>

              <li><?php if ($_smarty_tpl->tpl_vars['pagedinges']->value=="shownewsarticles") {?>
                    <a href="?action=admin&cms_action=shownewsarticles" style="font-weight:bold;">NEWS</a>
                  <?php } else { ?>
                      <a href="?action=admin&cms_action=shownewsarticles">NEWS</a>
                  <?php }?></li>

              <li style="float:left"><a id="last" href="?action=home">EXIT</a></li>
            </ul>
          </nav>
        </div>
      </div>
<?php }} ?>
