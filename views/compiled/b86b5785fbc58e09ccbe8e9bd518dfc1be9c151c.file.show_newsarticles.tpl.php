<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 12:25:14
         compiled from "views\show_newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103095847cbc5f304e3-80956299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b86b5785fbc58e09ccbe8e9bd518dfc1be9c151c' => 
    array (
      0 => 'views\\show_newsarticles.tpl',
      1 => 1481109902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103095847cbc5f304e3-80956299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5847cbc6105a32_44379951',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847cbc6105a32_44379951')) {function content_5847cbc6105a32_44379951($_smarty_tpl) {?><!DOCTYPE html>
  <section>
    <div id="main">
      <div id="primaryadmin">
        <table id="personaltable">
            <tr id="hds">
              <th>ID</th>
              <th>School name</th>
              <th colspan="2">Options</th>
            </tr>
          <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <tr>
              <td><p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</p></td>
              <td><p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['schoolName'];?>
</p></td>
              <td><p><a href="?action=admin&cms_action=editnewsarticles&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">edit</a></p></td>
              <td><p><a href="?action=admin&cms_action=deletenewsarticles&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a></p></td>
            </tr>
          <?php } ?>
        </table>
        <p id=insert><a href=?action=admin&cms_action=insertnewsarticles><img src="content/img/insertButton.png"></img></a></p>
      </div>
<?php }} ?>
