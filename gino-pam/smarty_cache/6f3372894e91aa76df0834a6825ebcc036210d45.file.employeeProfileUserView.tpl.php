<?php /* Smarty version Smarty-3.0.7, created on 2013-09-23 18:40:05
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/profile/employeeProfileUserView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:339152406ee51614a2-55504283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f3372894e91aa76df0834a6825ebcc036210d45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/profile/employeeProfileUserView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '339152406ee51614a2-55504283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeProfileUserView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['styleLabelWidth'] = new Smarty_variable('style="width:220px;"', null, null);?>
<table class="content-table employee" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hasUser()){?>
    <tr>
        <td class="content-label" <?php echo $_smarty_tpl->getVariable('styleLabelWidth')->value;?>
><?php echo TXT_UCF('USERNAME');?>
:</td>
        <td class="content-value"><span<?php if (!$_smarty_tpl->getVariable('valueObject')->value->isActive()){?> class="inactive" title="<?php echo TXT_UCF('DEACTIVATED_USER');?>
"<?php }?>><?php echo $_smarty_tpl->getVariable('valueObject')->value->getLogin();?>
</span><?php if (!$_smarty_tpl->getVariable('valueObject')->value->isActive()){?>&nbsp;<em><?php echo TXT_UCF('DEACTIVATED_USER');?>
</em><?php }?></td>
    </tr>
    <tr>
        <td class="content-label"><?php echo TXT_UCF('SECURITY');?>
:</td>
        <td class="content-value"><?php echo UserLevelConverter::display($_smarty_tpl->getVariable('valueObject')->value->getUserLevel());?>
</td>
    </tr>
    <?php }else{ ?>
    <tr>
        <td colspan="2" class="content-label info-text"><?php echo TXT_UCF('NO_EMPLOYEE_USER_LINK');?>
.</td>
    </tr>
    <?php }?>
</table>
<!-- /employeeProfileUserView.tpl -->