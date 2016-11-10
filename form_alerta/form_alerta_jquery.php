
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
  scEventControl_data["aprobada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["noaprobada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["escalar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["geocode" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["audio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["motivo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["terminado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["categoria" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["subcategoria" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fecharechazada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fechaenatencion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fechafinalizada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["geo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["correo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["celular" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["idalerta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["latitud" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["longitud" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["departamento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["municipio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["lugar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["canal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["origenalerta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["radicado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["alerta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rutavideo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rutaaudio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["rutaimagen" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["aprobada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["aprobada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["noaprobada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["noaprobada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["escalar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["escalar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["geocode" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["geocode" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["audio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["audio" + iSeqRow]["change"]) {
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
  if (scEventControl_data["categoria" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["categoria" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["subcategoria" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["subcategoria" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fecharechazada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecharechazada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fechaenatencion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fechaenatencion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fechafinalizada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fechafinalizada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecha" + iSeqRow]["change"]) {
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
  if (scEventControl_data["idalerta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idalerta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estado" + iSeqRow]["change"]) {
    return true;
  }
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
  if (scEventControl_data["canal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["canal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["origenalerta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["origenalerta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["radicado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["radicado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["alerta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["alerta" + iSeqRow]["change"]) {
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
  if ("escalar" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("categoria" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("subcategoria" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("estado" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("municipio" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("lugar" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("origenalerta" + iSeq == fieldName) {
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
  if ("lugar" + iFieldSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = oField.val();
    return;
  }
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_subcategoria' + iSeqRow).bind('blur', function() { sc_form_alerta_subcategoria_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_alerta_subcategoria_onfocus(this, iSeqRow) });
  $('#id_sc_field_categoria' + iSeqRow).bind('blur', function() { sc_form_alerta_categoria_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_alerta_categoria_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_categoria_onfocus(this, iSeqRow) });
  $('#id_sc_field_latitud' + iSeqRow).bind('blur', function() { sc_form_alerta_latitud_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_alerta_latitud_onfocus(this, iSeqRow) });
  $('#id_sc_field_longitud' + iSeqRow).bind('blur', function() { sc_form_alerta_longitud_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_alerta_longitud_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado' + iSeqRow).bind('blur', function() { sc_form_alerta_estado_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_idalerta' + iSeqRow).bind('blur', function() { sc_form_alerta_idalerta_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_alerta_idalerta_onfocus(this, iSeqRow) });
  $('#id_sc_field_geo' + iSeqRow).bind('blur', function() { sc_form_alerta_geo_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_alerta_geo_onfocus(this, iSeqRow) });
  $('#id_sc_field_correo' + iSeqRow).bind('blur', function() { sc_form_alerta_correo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_correo_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombre' + iSeqRow).bind('blur', function() { sc_form_alerta_nombre_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_celular' + iSeqRow).bind('blur', function() { sc_form_alerta_celular_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_alerta_celular_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion' + iSeqRow).bind('blur', function() { sc_form_alerta_direccion_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_alerta' + iSeqRow).bind('blur', function() { sc_form_alerta_alerta_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_alerta_onfocus(this, iSeqRow) });
  $('#id_sc_field_rutavideo' + iSeqRow).bind('blur', function() { sc_form_alerta_rutavideo_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_rutavideo_onfocus(this, iSeqRow) });
  $('#id_sc_field_rutaaudio' + iSeqRow).bind('blur', function() { sc_form_alerta_rutaaudio_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_rutaaudio_onfocus(this, iSeqRow) });
  $('#id_sc_field_rutaimagen' + iSeqRow).bind('blur', function() { sc_form_alerta_rutaimagen_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_alerta_rutaimagen_onfocus(this, iSeqRow) });
  $('#id_sc_field_canal' + iSeqRow).bind('blur', function() { sc_form_alerta_canal_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_alerta_canal_onfocus(this, iSeqRow) });
  $('#id_sc_field_radicado' + iSeqRow).bind('blur', function() { sc_form_alerta_radicado_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_alerta_radicado_onfocus(this, iSeqRow) });
  $('#id_sc_field_origenalerta' + iSeqRow).bind('blur', function() { sc_form_alerta_origenalerta_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_alerta_origenalerta_onfocus(this, iSeqRow) });
  $('#id_sc_field_departamento' + iSeqRow).bind('blur', function() { sc_form_alerta_departamento_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_alerta_departamento_onfocus(this, iSeqRow) });
  $('#id_sc_field_municipio' + iSeqRow).bind('blur', function() { sc_form_alerta_municipio_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_alerta_municipio_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_municipio_onfocus(this, iSeqRow) });
  $('#id_sc_field_lugar' + iSeqRow).bind('blur', function() { sc_form_alerta_lugar_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_alerta_lugar_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_alerta_lugar_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha' + iSeqRow).bind('blur', function() { sc_form_alerta_fecha_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_alerta_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_escalar' + iSeqRow).bind('blur', function() { sc_form_alerta_escalar_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_alerta_escalar_onchange(this, iSeqRow) })
                                     .bind('click', function() { sc_form_alerta_escalar_onclick(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_alerta_escalar_onfocus(this, iSeqRow) });
  $('#id_sc_field_motivo' + iSeqRow).bind('blur', function() { sc_form_alerta_motivo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_alerta_motivo_onfocus(this, iSeqRow) });
  $('#id_sc_field_terminado' + iSeqRow).bind('blur', function() { sc_form_alerta_terminado_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_alerta_terminado_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecharechazada' + iSeqRow).bind('blur', function() { sc_form_alerta_fecharechazada_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_alerta_fecharechazada_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecharechazada_hora' + iSeqRow).bind('blur', function() { sc_form_alerta_fecharechazada_hora_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_alerta_fecharechazada_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_fechaenatencion' + iSeqRow).bind('blur', function() { sc_form_alerta_fechaenatencion_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_alerta_fechaenatencion_onfocus(this, iSeqRow) });
  $('#id_sc_field_fechaenatencion_hora' + iSeqRow).bind('blur', function() { sc_form_alerta_fechaenatencion_hora_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_alerta_fechaenatencion_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_fechafinalizada' + iSeqRow).bind('blur', function() { sc_form_alerta_fechafinalizada_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_alerta_fechafinalizada_onfocus(this, iSeqRow) });
  $('#id_sc_field_fechafinalizada_hora' + iSeqRow).bind('blur', function() { sc_form_alerta_fechafinalizada_hora_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_alerta_fechafinalizada_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_aprobada' + iSeqRow).bind('blur', function() { sc_form_alerta_aprobada_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_alerta_aprobada_onfocus(this, iSeqRow) });
  $('#id_sc_field_audio' + iSeqRow).bind('blur', function() { sc_form_alerta_audio_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_alerta_audio_onfocus(this, iSeqRow) });
  $('#id_sc_field_geocode' + iSeqRow).bind('blur', function() { sc_form_alerta_geocode_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_alerta_geocode_onfocus(this, iSeqRow) });
  $('#id_sc_field_noaprobada' + iSeqRow).bind('blur', function() { sc_form_alerta_noaprobada_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_alerta_noaprobada_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_alerta_subcategoria_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_subcategoria();
  scCssBlur(oThis);
}

function sc_form_alerta_subcategoria_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_categoria_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_categoria();
  scCssBlur(oThis);
}

function sc_form_alerta_categoria_onchange(oThis, iSeqRow) {
  do_ajax_form_alerta_refresh_categoria();
}

function sc_form_alerta_categoria_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_latitud_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_latitud();
  scCssBlur(oThis);
}

function sc_form_alerta_latitud_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_longitud_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_longitud();
  scCssBlur(oThis);
}

function sc_form_alerta_longitud_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_estado();
  scCssBlur(oThis);
}

function sc_form_alerta_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_idalerta_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_idalerta();
  scCssBlur(oThis);
}

function sc_form_alerta_idalerta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_geo_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_geo();
  scCssBlur(oThis);
}

function sc_form_alerta_geo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_correo_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_correo();
  scCssBlur(oThis);
}

function sc_form_alerta_correo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_nombre();
  scCssBlur(oThis);
}

function sc_form_alerta_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_celular_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_celular();
  scCssBlur(oThis);
}

function sc_form_alerta_celular_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_direccion();
  scCssBlur(oThis);
}

function sc_form_alerta_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_alerta_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_alerta();
  scCssBlur(oThis);
}

function sc_form_alerta_alerta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_rutavideo_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_alerta_rutavideo_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_alerta_rutaaudio_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_alerta_rutaaudio_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_alerta_rutaimagen_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_alerta_rutaimagen_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_alerta_canal_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_canal();
  scCssBlur(oThis);
}

function sc_form_alerta_canal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_radicado_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_radicado();
  scCssBlur(oThis);
}

function sc_form_alerta_radicado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_origenalerta_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_origenalerta();
  scCssBlur(oThis);
}

function sc_form_alerta_origenalerta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_departamento_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_departamento();
  scCssBlur(oThis);
}

function sc_form_alerta_departamento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_municipio_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_municipio();
  scCssBlur(oThis);
}

function sc_form_alerta_municipio_onchange(oThis, iSeqRow) {
  do_ajax_form_alerta_refresh_municipio();
}

function sc_form_alerta_municipio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_lugar_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_lugar();
  scCssBlur(oThis);
}

function sc_form_alerta_lugar_onchange(oThis, iSeqRow) {
  do_ajax_form_alerta_event_lugar_onchange();
}

function sc_form_alerta_lugar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_fecha();
  scCssBlur(oThis);
}

function sc_form_alerta_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_escalar_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_escalar();
  scCssBlur(oThis);
}

function sc_form_alerta_escalar_onchange(oThis, iSeqRow) {
  sc_escalar_onchange();
}

function sc_form_alerta_escalar_onclick(oThis, iSeqRow) {
  do_ajax_form_alerta_event_escalar_onclick();
}

function sc_form_alerta_escalar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_motivo_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_motivo();
  scCssBlur(oThis);
}

function sc_form_alerta_motivo_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_alerta_terminado_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_terminado();
  scCssBlur(oThis);
}

function sc_form_alerta_terminado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_fecharechazada_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_fecharechazada();
  scCssBlur(oThis);
}

function sc_form_alerta_fecharechazada_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_fecharechazada();
  scCssBlur(oThis);
}

function sc_form_alerta_fecharechazada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_fecharechazada_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_fechaenatencion_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_fechaenatencion();
  scCssBlur(oThis);
}

function sc_form_alerta_fechaenatencion_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_fechaenatencion();
  scCssBlur(oThis);
}

function sc_form_alerta_fechaenatencion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_fechaenatencion_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_fechafinalizada_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_fechafinalizada();
  scCssBlur(oThis);
}

function sc_form_alerta_fechafinalizada_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_fechafinalizada();
  scCssBlur(oThis);
}

function sc_form_alerta_fechafinalizada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_fechafinalizada_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_aprobada_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_aprobada();
  scCssBlur(oThis);
}

function sc_form_alerta_aprobada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_audio_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_audio();
  scCssBlur(oThis);
}

function sc_form_alerta_audio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_geocode_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_geocode();
  scCssBlur(oThis);
}

function sc_form_alerta_geocode_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_alerta_noaprobada_onblur(oThis, iSeqRow) {
  do_ajax_form_alerta_validate_noaprobada();
  scCssBlur(oThis);
}

function sc_form_alerta_noaprobada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecharechazada" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecharechazada" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['fecharechazada']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fecharechazada']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fecharechazada']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_fechaenatencion" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fechaenatencion" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['fechaenatencion']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fechaenatencion']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fechaenatencion']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_fechafinalizada" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fechafinalizada" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['fechafinalizada']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fechafinalizada']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fechafinalizada']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

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

function scJQPopupAdd(iSeqRow) {
  $('.scFormPopupBubble' + iSeqRow).each(function() {
    var distance = 10;
    var time = 250;
    var hideDelay = 500;
    var hideDelayTimer = null;
    var beingShown = false;
    var shown = false;
    var trigger = $('.scFormPopupTrigger', this);
    var info = $('.scFormPopup', this).css('opacity', 0);
    $([trigger.get(0), info.get(0)]).mouseover(function() {
      if (hideDelayTimer) clearTimeout(hideDelayTimer);
      if (beingShown || shown) {
        // don't trigger the animation again
        return;
      } else {
        // reset position of info box
        beingShown = true;
        info.css({
          top: trigger.position().top - (info.height() - trigger.height()),
          left: trigger.position().left - ((info.width() - trigger.width()) / 2),
          display: 'block'
        }).animate({
          top: '-=' + distance + 'px',
          opacity: 1
        }, time, 'swing', function() {
          beingShown = false;
          shown = true;
        });
      }
      return false;
      }).mouseout(function() {
      if (hideDelayTimer) clearTimeout(hideDelayTimer);
      hideDelayTimer = setTimeout(function() {
        hideDelayTimer = null;
        info.animate({
          top: '-=' + distance + 'px',
          opacity: 0
        }, time, 'swing', function() {
          shown = false;
          info.css('display', 'none');
        });
      }, hideDelay);
      return false;
    });
  });
} // scJQPopupAdd

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_rutavideo" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_alerta_ul_save.php",
    dropZone: $("#hidden_field_data_rutavideo" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'rutavideo'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_rutavideo" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_rutavideo" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_rutavideo" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_rutavideo" + iSeqRow).hide();
      }
      if (fileData && fileData[0] && fileData[0].error && "acceptFileTypes" == fileData[0].error) {
        oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl']; ?>"};
        scAjaxShowDebug(oTemp);
        return;
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      $("#id_sc_field_rutavideo" + iSeqRow).val("");
      $("#id_sc_field_rutavideo_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_rutavideo_ul_type" + iSeqRow).val(fileData[0].type);
      $("#id_ajax_doc_rutavideo" + iSeqRow).html(fileData[0].name);
      $("#id_ajax_doc_rutavideo" + iSeqRow).css("display", "");
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_rutavideo" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_rutavideo" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_rutaaudio" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_alerta_ul_save.php",
    dropZone: $("#hidden_field_data_rutaaudio" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'rutaaudio'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_rutaaudio" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_rutaaudio" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_rutaaudio" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_rutaaudio" + iSeqRow).hide();
      }
      if (fileData && fileData[0] && fileData[0].error && "acceptFileTypes" == fileData[0].error) {
        oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl']; ?>"};
        scAjaxShowDebug(oTemp);
        return;
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      $("#id_sc_field_rutaaudio" + iSeqRow).val("");
      $("#id_sc_field_rutaaudio_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_rutaaudio_ul_type" + iSeqRow).val(fileData[0].type);
      $("#id_ajax_doc_rutaaudio" + iSeqRow).html(fileData[0].name);
      $("#id_ajax_doc_rutaaudio" + iSeqRow).css("display", "");
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_rutaaudio" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_rutaaudio" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_rutaimagen" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_alerta_ul_save.php",
    dropZone: $("#hidden_field_data_rutaimagen" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'rutaimagen'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_rutaimagen" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_rutaimagen" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_rutaimagen" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_rutaimagen" + iSeqRow).hide();
      }
      if (fileData && fileData[0] && fileData[0].error && "acceptFileTypes" == fileData[0].error) {
        oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl']; ?>"};
        scAjaxShowDebug(oTemp);
        return;
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      $("#id_sc_field_rutaimagen" + iSeqRow).val("");
      $("#id_sc_field_rutaimagen_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_rutaimagen_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_rutaimagen = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_rutaimagen) ? "none" : "";
      $("#id_ajax_img_rutaimagen" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_rutaimagen" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_rutaimagen) {
        document.F1.temp_out_rutaimagen.value = var_ajax_img_thumb;
        document.F1.temp_out1_rutaimagen.value = var_ajax_img_rutaimagen;
      }
      else if (document.F1.temp_out_rutaimagen) {
        document.F1.temp_out_rutaimagen.value = var_ajax_img_rutaimagen;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_rutaimagen" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_rutaimagen" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_rutaimagen" + iSeqRow).css("display", "none");
      $("#id_ajax_link_rutaimagen" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQPopupAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

