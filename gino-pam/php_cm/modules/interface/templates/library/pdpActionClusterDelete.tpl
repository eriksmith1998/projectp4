<!-- pdpActionClusterDelete.tpl -->
{assign var=valueObject value=$interfaceObject->getValueObject()}
<p>{$interfaceObject->getConfirmQuestion()}</p>
<table border="0" cellspacing="0" cellpadding="2" style="width:{$interfaceObject->getDisplayWidth()};">
    <tr>
        <td class="bottom_line form-label" style="width:100px;">{'CLUSTER'|TXT_UCF}</td>
        <td class="bottom_line form-value">{$valueObject->getClusterName()}</td>
    </tr>
</table>
<!-- /pdpActionClusterDelete.tpl -->