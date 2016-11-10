
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
  scEventControl_data["nombre_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["descripcion_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["adjunto_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["grupo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
  scEventControl_data["subgrupo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["nombre_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombre_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descripcion_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descripcion_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["grupo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["grupo_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["subgrupo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["subgrupo_" + iSeqRow]["change"]) {
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
  if ("grupo_" + iSeq == fieldName) {
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
  $('#id_sc_field_nombre_' + iSeqRow).bind('blur', function() { sc_form_documentacion_nombre__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_documentacion_nombre__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_documentacion_nombre__onfocus(this, iSeqRow) });
  $('#id_sc_field_descripcion_' + iSeqRow).bind('blur', function() { sc_form_documentacion_descripcion__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_documentacion_descripcion__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_documentacion_descripcion__onfocus(this, iSeqRow) });
  $('#id_sc_field_adjunto_' + iSeqRow).bind('blur', function() { sc_form_documentacion_adjunto__onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_documentacion_adjunto__onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_documentacion_adjunto__onfocus(this, iSeqRow) });
  $('#id_sc_field_grupo_' + iSeqRow).bind('blur', function() { sc_form_documentacion_grupo__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_documentacion_grupo__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_documentacion_grupo__onfocus(this, iSeqRow) });
  $('#id_sc_field_subgrupo_' + iSeqRow).bind('blur', function() { sc_form_documentacion_subgrupo__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_documentacion_subgrupo__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_documentacion_subgrupo__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_documentacion_nombre__onblur(oThis, iSeqRow) {
  do_ajax_form_documentacion_validate_nombre_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_documentacion_nombre__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_documentacion_nombre__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_documentacion_descripcion__onblur(oThis, iSeqRow) {
  do_ajax_form_documentacion_validate_descripcion_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_documentacion_descripcion__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_documentacion_descripcion__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_documentacion_adjunto__onblur(oThis, iSeqRow) {
  scCssBlur(oThis, iSeqRow);
}

function sc_form_documentacion_adjunto__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_documentacion_adjunto__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_documentacion_grupo__onblur(oThis, iSeqRow) {
  do_ajax_form_documentacion_validate_grupo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_documentacion_grupo__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_documentacion_grupo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_documentacion_subgrupo__onblur(oThis, iSeqRow) {
  do_ajax_form_documentacion_validate_subgrupo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_documentacion_subgrupo__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_documentacion_subgrupo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_adjunto_" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_documentacion_ul_save.php",
    dropZone: $("#hidden_field_data_adjunto_" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'adjunto_'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_adjunto_" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_adjunto_" + iSeqRow);
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
        $("#id_img_loader_adjunto_" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_adjunto_" + iSeqRow).hide();
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
      $("#id_sc_field_adjunto_" + iSeqRow).val("");
      $("#id_sc_field_adjunto__ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_adjunto__ul_type" + iSeqRow).val(fileData[0].type);
      $("#id_ajax_doc_adjunto_" + iSeqRow).html(fileData[0].name);
      $("#id_ajax_doc_adjunto_" + iSeqRow).css("display", "");
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_adjunto_" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_adjunto_" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

