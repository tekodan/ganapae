
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
  scEventControl_data["latitud" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["longitud" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["idalerta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["geo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["correo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["celular" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["alerta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rutavideo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rutaaudio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rutaimagen" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["canal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["radicado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["origenalerta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["departamento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["municipio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["lugar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["escalar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["motivo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["terminado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["latitud" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["latitud" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["longitud" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["longitud" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idalerta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idalerta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["geo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["geo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["celular" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["celular" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["alerta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["alerta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rutavideo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rutavideo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rutaaudio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rutaaudio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rutaimagen" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rutaimagen" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["canal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["canal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["radicado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["radicado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["origenalerta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["origenalerta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["departamento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["departamento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["municipio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["municipio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["lugar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["lugar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["escalar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["escalar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["motivo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["motivo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["terminado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["terminado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["motivo" + iSeqRow]["autocomp"]) {
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
  $('#id_sc_field_latitud' + iSeqRow).bind('blur', function() { sc_form_alerta_1_latitud_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_alerta_1_latitud_onfocus(this, iSeqRow) });
  $('#id_sc_field_longitud' + iSeqRow).bind('blur', function() { sc_form_alerta_1_longitud_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_alerta_1_longitud_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado' + iSeqRow).bind('blur', function() { sc_form_alerta_1_estado_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_1_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_idalerta' + iSeqRow).bind('blur', function() { sc_form_alerta_1_idalerta_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_alerta_1_idalerta_onfocus(this, iSeqRow) });
  $('#id_sc_field_geo' + iSeqRow).bind('blur', function() { sc_form_alerta_1_geo_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_alerta_1_geo_onfocus(this, iSeqRow) });
  $('#id_sc_field_correo' + iSeqRow).bind('blur', function() { sc_form_alerta_1_correo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_1_correo_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombre' + iSeqRow).bind('blur', function() { sc_form_alerta_1_nombre_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_1_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_celular' + iSeqRow).bind('blur', function() { sc_form_alerta_1_celular_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_alerta_1_celular_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion' + iSeqRow).bind('blur', function() { sc_form_alerta_1_direccion_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_1_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_alerta' + iSeqRow).bind('blur', function() { sc_form_alerta_1_alerta_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_1_alerta_onfocus(this, iSeqRow) });
  $('#id_sc_field_rutavideo' + iSeqRow).bind('blur', function() { sc_form_alerta_1_rutavideo_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_1_rutavideo_onfocus(this, iSeqRow) });
  $('#id_sc_field_rutaaudio' + iSeqRow).bind('blur', function() { sc_form_alerta_1_rutaaudio_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_1_rutaaudio_onfocus(this, iSeqRow) });
  $('#id_sc_field_rutaimagen' + iSeqRow).bind('blur', function() { sc_form_alerta_1_rutaimagen_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_alerta_1_rutaimagen_onfocus(this, iSeqRow) });
  $('#id_sc_field_canal' + iSeqRow).bind('blur', function() { sc_form_alerta_1_canal_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_alerta_1_canal_onfocus(this, iSeqRow) });
  $('#id_sc_field_radicado' + iSeqRow).bind('blur', function() { sc_form_alerta_1_radicado_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_alerta_1_radicado_onfocus(this, iSeqRow) });
  $('#id_sc_field_origenalerta' + iSeqRow).bind('blur', function() { sc_form_alerta_1_origenalerta_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_alerta_1_origenalerta_onfocus(this, iSeqRow) });
  $('#id_sc_field_departamento' + iSeqRow).bind('blur', function() { sc_form_alerta_1_departamento_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_alerta_1_departamento_onfocus(this, iSeqRow) });
  $('#id_sc_field_municipio' + iSeqRow).bind('blur', function() { sc_form_alerta_1_municipio_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_1_municipio_onfocus(this, iSeqRow) });
  $('#id_sc_field_lugar' + iSeqRow).bind('blur', function() { sc_form_alerta_1_lugar_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_alerta_1_lugar_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha' + iSeqRow).bind('blur', function() { sc_form_alerta_1_fecha_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_alerta_1_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_escalar' + iSeqRow).bind('blur', function() { sc_form_alerta_1_escalar_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_alerta_1_escalar_onfocus(this, iSeqRow) });
  $('#id_sc_field_motivo' + iSeqRow).bind('blur', function() { sc_form_alerta_1_motivo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_1_motivo_onfocus(this, iSeqRow) });
  $('#id_sc_field_terminado' + iSeqRow).bind('blur', function() { sc_form_alerta_1_terminado_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_1_terminado_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_alerta_1_latitud_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_latitud();
  scCssBlur(oThis);
}

function sc_form_alerta_1_latitud_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_longitud_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_longitud();
  scCssBlur(oThis);
}

function sc_form_alerta_1_longitud_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_estado();
  scCssBlur(oThis);
}

function sc_form_alerta_1_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_idalerta_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_idalerta();
  scCssBlur(oThis);
}

function sc_form_alerta_1_idalerta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_geo_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_geo();
  scCssBlur(oThis);
}

function sc_form_alerta_1_geo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_correo_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_correo();
  scCssBlur(oThis);
}

function sc_form_alerta_1_correo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_nombre();
  scCssBlur(oThis);
}

function sc_form_alerta_1_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_celular_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_celular();
  scCssBlur(oThis);
}

function sc_form_alerta_1_celular_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_direccion();
  scCssBlur(oThis);
}

function sc_form_alerta_1_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_alerta_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_alerta();
  scCssBlur(oThis);
}

function sc_form_alerta_1_alerta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_rutavideo_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_rutavideo();
  scCssBlur(oThis);
}

function sc_form_alerta_1_rutavideo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_rutaaudio_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_rutaaudio();
  scCssBlur(oThis);
}

function sc_form_alerta_1_rutaaudio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_rutaimagen_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_rutaimagen();
  scCssBlur(oThis);
}

function sc_form_alerta_1_rutaimagen_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_canal_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_canal();
  scCssBlur(oThis);
}

function sc_form_alerta_1_canal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_radicado_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_radicado();
  scCssBlur(oThis);
}

function sc_form_alerta_1_radicado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_origenalerta_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_origenalerta();
  scCssBlur(oThis);
}

function sc_form_alerta_1_origenalerta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_departamento_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_departamento();
  scCssBlur(oThis);
}

function sc_form_alerta_1_departamento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_municipio_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_municipio();
  scCssBlur(oThis);
}

function sc_form_alerta_1_municipio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_lugar_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_lugar();
  scCssBlur(oThis);
}

function sc_form_alerta_1_lugar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_fecha();
  scCssBlur(oThis);
}

function sc_form_alerta_1_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_escalar_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_escalar();
  scCssBlur(oThis);
}

function sc_form_alerta_1_escalar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_1_motivo_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_motivo();
  scCssBlur(oThis);
}

function sc_form_alerta_1_motivo_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_alerta_1_terminado_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_1_validate_terminado();
  scCssBlur(oThis);
}

function sc_form_alerta_1_terminado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecha" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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

