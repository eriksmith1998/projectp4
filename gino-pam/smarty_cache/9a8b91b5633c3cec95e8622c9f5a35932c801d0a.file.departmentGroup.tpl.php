<?php /* Smarty version Smarty-3.0.7, created on 2013-09-23 18:40:39
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\organisation/departmentGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2657752406f07d6fcc5-27184461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8b91b5633c3cec95e8622c9f5a35932c801d0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\organisation/departmentGroup.tpl',
      1 => 1379954117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2657752406f07d6fcc5-27184461',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- departmentGroup.tpl -->
<table class="content-table" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <th class="bottom_line shaded_title"><?php echo TXT_UCF('DEPARTMENT');?>
</th>
        <th class="bottom_line shaded_title centered" style="width:100px;"><?php echo TXT_UCF('EMPLOYEES');?>
</th>
        <th class="bottom_line shaded_title centered" style="width:100px;"><?php echo TXT_UCF('USERS');?>
</th>
        <th class="bottom_line shaded_title actions"  style="width:100px;">&nbsp;</td>
    </tr>
    <?php if (count($_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects())>0){?>
        <?php  $_smarty_tpl->tpl_vars['viewObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['viewObject']->key => $_smarty_tpl->tpl_vars['viewObject']->value){
?>
            <?php echo $_smarty_tpl->getVariable('viewObject')->value->fetchHtml();?>

        <?php }} ?>
    <?php }else{ ?>
    <tr>
        <td colspan="100%"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->displayEmptyMessage();?>
</td>
    </tr>
    <?php }?>
</table>
<!-- /departmentGroup.tpl -->