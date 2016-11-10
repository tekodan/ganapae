
function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('input:checkbox.sc-js-input').listen();
  $('input:radio.sc-js-input').listen();
  $('select.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if (false == scSetFocusOnField($oField) && $("#id_ac_" + sField).length > 0) {
    scSetFocusOnField($("#id_ac_" + sField));
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["idresponsablealerta_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cedula_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["idalerta_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fecha_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["origen_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["destino_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["tipo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["acci_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idresponsablealerta_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idresponsablealerta_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cedula_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cedula_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idalerta_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idalerta_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fecha_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecha_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["origen_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["origen_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["destino_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["destino_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["acci_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["acci_" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_active_all() {
  for (var i = 1; i < iAjaxNewLine; i++) {
    if (scEventControl_active(i)) {
      return true;
    }
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("cedula_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("tipo_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onChange_call(sFieldName, iFieldSeq) {
  var oField, fieldId, fieldName;
  oField = $("#id_sc_field_" + sFieldName + iFieldSeq);
  fieldId = oField.attr("id");
  fieldName = fieldId.substr(12);
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_idresponsablealerta_' + iSeqRow).bind('blur', function() { sc_form_responsablexalertaline_idresponsablealerta__onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_responsablexalertaline_idresponsablealerta__onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_responsablexalertaline_idresponsablealerta__onfocus(this, iSeqRow) });
  $('#id_sc_field_cedula_' + iSeqRow).bind('blur', function() { sc_form_responsablexalertaline_cedula__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_responsablexalertaline_cedula__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_responsablexalertaline_cedula__onfocus(this, iSeqRow) });
  $('#id_sc_field_idalerta_' + iSeqRow).bind('blur', function() { sc_form_responsablexalertaline_idalerta__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_responsablexalertaline_idalerta__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_responsablexalertaline_idalerta__onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha_' + iSeqRow).bind('blur', function() { sc_form_responsablexalertaline_fecha__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_responsablexalertaline_fecha__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_responsablexalertaline_fecha__onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha__hora' + iSeqRow).bind('blur', function() { sc_form_responsablexalertaline_fecha__hora_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_responsablexalertaline_fecha__hora_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_responsablexalertaline_fecha__hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_origen_' + iSeqRow).bind('blur', function() { sc_form_responsablexalertaline_origen__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_responsablexalertaline_origen__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_responsablexalertaline_origen__onfocus(this, iSeqRow) });
  $('#id_sc_field_destino_' + iSeqRow).bind('blur', function() { sc_form_responsablexalertaline_destino__onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_responsablexalertaline_destino__onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_responsablexalertaline_destino__onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_' + iSeqRow).bind('blur', function() { sc_form_responsablexalertaline_tipo__onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_responsablexalertaline_tipo__onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_responsablexalertaline_tipo__onfocus(this, iSeqRow) });
  $('#id_sc_field_acci_' + iSeqRow).bind('blur', function() { sc_form_responsablexalertaline_acci__onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_responsablexalertaline_acci__onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_responsablexalertaline_acci__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_responsablexalertaline_idresponsablealerta__onblur(oThis, iSeqRow) {
  do_ajax_form_responsablexalertaline_validate_idresponsablealerta_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_idresponsablealerta__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_responsablexalertaline_idresponsablealerta__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_cedula__onblur(oThis, iSeqRow) {
  do_ajax_form_responsablexalertaline_validate_cedula_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_cedula__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_responsablexalertaline_cedula__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_idalerta__onblur(oThis, iSeqRow) {
  do_ajax_form_responsablexalertaline_validate_idalerta_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_idalerta__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_responsablexalertaline_idalerta__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_fecha__onblur(oThis, iSeqRow) {
  do_ajax_form_responsablexalertaline_validate_fecha_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_fecha__hora_onblur(oThis, iSeqRow) {
  do_ajax_form_responsablexalertaline_validate_fecha_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_fecha__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_responsablexalertaline_fecha__hora_onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_responsablexalertaline_fecha__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_fecha__hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_origen__onblur(oThis, iSeqRow) {
  do_ajax_form_responsablexalertaline_validate_origen_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_origen__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_responsablexalertaline_origen__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_destino__onblur(oThis, iSeqRow) {
  do_ajax_form_responsablexalertaline_validate_destino_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_destino__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_responsablexalertaline_destino__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_tipo__onblur(oThis, iSeqRow) {
  do_ajax_form_responsablexalertaline_validate_tipo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_tipo__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_responsablexalertaline_tipo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_acci__onblur(oThis, iSeqRow) {
  do_ajax_form_responsablexalertaline_validate_acci_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_responsablexalertaline_acci__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_responsablexalertaline_acci__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecha_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['fecha_']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fecha_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fecha_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

