<?php
$config = JComponentHelper::getParams('com_dashboard');
$maxLength = $config->get('inputMaxLength', 255);
?>

<div class="content-control">
    <input id="partner-email" class="form-control" type="text" data-ng-model="partner.Email"
           name="partnerEmail"
           placeholder="<?php echo JText::_("MOD_DASHBOARD_MANAGEMENT_PARTNER_EMAIL_PLACEHOLDER") ?>"
           data-ng-required="true"
           data-ng-pattern="/^[_a-z0-9A-Z]+(\.[_a-z0-9A-Z]+)*@[a-z0-9A-Z-]+(\.[a-z0-9A-Z-]+)*(\.[a-zA-Z]{2,4})$/"
           data-ng-maxlength="<?php echo $maxLength ?>"
    />
    <div data-ng-if="formSavePartner.$submitted">

        <span data-ng-show="formSavePartner.partnerEmail.$error.required"
              data-tooltip="<?php echo JText::_("MOD_DASHBOARD_COMMON_BLANK_ERROR_MESSAGE") ?>"
              data-tooltip-placement="top-left"
              class="fa fa-exclamation-triangle form-control-feedback">
        </span>

        <span data-ng-show="formSavePartner.partnerEmail.$error.pattern"
              data-tooltip="<?php echo JText::_("ERROR_EMAIL_INVALID") ?>"
              data-tooltip-placement="top-left" class="fa fa-exclamation-triangle form-control-feedback">
        </span>

        <span data-ng-show="formAddNote.noteAmount.$error.maxlength"
              data-tooltip="<?php echo JText::sprintf("MOD_DASHBOARD_NOTE_TITLE_MAX_LENGTH_REACHED", $maxLength); ?>"
              data-tooltip-placement="top-left" class="fa fa-exclamation-triangle form-control-feedback">
        </span>

    </div>
</div>