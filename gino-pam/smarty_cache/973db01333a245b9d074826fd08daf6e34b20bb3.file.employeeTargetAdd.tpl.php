<?php /* Smarty version Smarty-3.0.7, created on 2019-05-22 15:05:09
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/target/employeeTargetAdd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129645ce54904c2bf17-04506328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973db01333a245b9d074826fd08daf6e34b20bb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/target/employeeTargetAdd.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129645ce54904c2bf17-04506328',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeTargetAdd.tpl -->
<table border="0" cellspacing="0" cellpadding="4" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
">
    <tr>
        <td class="form-label" style="width:150px;">
            <label for="target_name"><?php echo TXT_UCF('TARGET');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input id="target_name" name="target_name" size="80" type="text" value="" />
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="performance_indicator"><?php echo TXT_UCF('KPI');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <input id="performance_indicator" name="performance_indicator" size="80" type="text" value="" />
        </td>
    </tr>
    </tr>
        <td class="form-label">
            <label for="end_date"><?php echo TXT_UCF('TARGET_END_DATE');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEndDatePicker();?>

        </td>
    </tr>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isAddAllowedEvaluation()){?>
    <tr>
        <td colspan="100%">&nbsp;</td>
    </tr>
    <tr>
        <td class="form-label"><label for="status"><?php echo TXT_UCF('TARGET_STATUS');?>
</label></td>
        <td class="form-value">
            <select id="status" name="status">
            <?php $_template = new Smarty_Internal_Template('components/selectOptionsComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('values',EmployeeTargetStatusValue::values());$_template->assign('currentValue',null);$_template->assign('required',false);$_template->assign('converter','EmployeeTargetStatusConverter'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </select>
        </td>
    </tr>
    <?php }?>
</table>
<!-- /employeeTargetAdd.tpl -->
