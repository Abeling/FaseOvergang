<?php /* Smarty version Smarty-3.1.18, created on 2017-03-13 14:00:45
         compiled from "views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203115819c85a3e5bc7-60498160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64ec67b9351f7c35c643899da1c549889b16a43' => 
    array (
      0 => 'views\\home.tpl',
      1 => 1489410037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203115819c85a3e5bc7-60498160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5819c85a428052_22016756',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
    'nr_pages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819c85a428052_22016756')) {function content_5819c85a428052_22016756($_smarty_tpl) {?><!DOCTYPE html>
            <table>
            <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</th>
                    <th><img class="organisationlogo" src="content/partylogo/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['partyName'];?>
.png">
                    <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['partyName'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['yearName'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['djName'];?>
</th>
                    <th><img class="organisationlogo" src="content/organisationlogo/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['organisationName'];?>
.png">
                    <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['organisationName'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['genreName'];?>
</th>
                </tr>
            <?php } ?>
            </table>
            <div id="pagination">
                <ul>
                    <li id="toFirst"><a href="?page=djs&pagenr=1">←</a></li>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nr_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <li><a href="?page=djs&pagenr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                    <?php }} ?>
                    <li id="toLast"><a href="?page=djs&pagenr=<?php echo $_smarty_tpl->tpl_vars['nr_pages']->value;?>
">→</a></li>
                </ul>
            </div>
        </div>
<?php }} ?>
