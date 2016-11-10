
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
  scEventControl_data["cedula" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["cargo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["funciones" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["correo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["celular" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["verificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["canal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["grupo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["cedula" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cedula" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cargo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cargo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["funciones" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["funciones" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["celular" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["celular" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["verificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["verificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["canal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["canal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["grupo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["grupo" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
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
  $('#id_sc_field_cedula' + iSeqRow).bind('blur', function() { sc_form_responsable_cedula_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_responsable_cedula_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombre' + iSeqRow).bind('blur', function() { sc_form_responsable_nombre_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_responsable_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_cargo' + iSeqRow).bind('blur', function() { sc_form_responsable_cargo_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_responsable_cargo_onfocus(this, iSeqRow) });
  $('#id_sc_field_funciones' + iSeqRow).bind('blur', function() { sc_form_responsable_funciones_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_responsable_funciones_onfocus(this, iSeqRow) });
  $('#id_sc_field_correo' + iSeqRow).bind('blur', function() { sc_form_responsable_correo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_responsable_correo_onfocus(this, iSeqRow) });
  $('#id_sc_field_celular' + iSeqRow).bind('blur', function() { sc_form_responsable_celular_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_responsable_celular_onfocus(this, iSeqRow) });
  $('#id_sc_field_verificacion' + iSeqRow).bind('blur', function() { sc_form_responsable_verificacion_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_responsable_verificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_canal' + iSeqRow).bind('blur', function() { sc_form_responsable_canal_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_responsable_canal_onfocus(this, iSeqRow) });
  $('#id_sc_field_grupo' + iSeqRow).bind('blur', function() { sc_form_responsable_grupo_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_responsable_grupo_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_responsable_cedula_onblur(oThis, iSeqRow) {
  do_ajax_form_responsable_mob_validate_cedula();
  scCssBlur(oThis);
}

function sc_form_responsable_cedula_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_responsable_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_responsable_mob_validate_nombre();
  scCssBlur(oThis);
}

function sc_form_responsable_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_responsable_cargo_onblur(oThis, iSeqRow) {
  do_ajax_form_responsable_mob_validate_cargo();
  scCssBlur(oThis);
}

function sc_form_responsable_cargo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_responsable_funciones_onblur(oThis, iSeqRow) {
  do_ajax_form_responsable_mob_validate_funciones();
  scCssBlur(oThis);
}

function sc_form_responsable_funciones_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_responsable_correo_onblur(oThis, iSeqRow) {
  do_ajax_form_responsable_mob_validate_correo();
  scCssBlur(oThis);
}

function sc_form_responsable_correo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_responsable_celular_onblur(oThis, iSeqRow) {
  do_ajax_form_responsable_mob_validate_celular();
  scCssBlur(oThis);
}

function sc_form_responsable_celular_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_responsable_verificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_responsable_mob_validate_verificacion();
  scCssBlur(oThis);
}

function sc_form_responsable_verificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_responsable_canal_onblur(oThis, iSeqRow) {
  do_ajax_form_responsable_mob_validate_canal();
  scCssBlur(oThis);
}

function sc_form_responsable_canal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_responsable_grupo_onblur(oThis, iSeqRow) {
  do_ajax_form_responsable_mob_validate_grupo();
  scCssBlur(oThis);
}

function sc_form_responsable_grupo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup) {
  if ('over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
  }
}
