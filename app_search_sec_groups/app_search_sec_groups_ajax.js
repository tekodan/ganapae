  function nmAjaxShowAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId)) {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "";
      document.getElementById("id_ac_" + sFrameId).focus();
    }
  }
  function nmAjaxHideAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId)) {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "none";
    }
  }
  function nmAjaxSpecCharParser(sParseString)
  {
    var ta = document.createElement("textarea");
    ta.innerHTML = sParseString.replace(/</g, "&lt;").replace(/>/g, "&gt;");
    return ta.value;
  } 
  function nmAjaxProcOn()
  {
    if (document.getElementById("id_div_process")) {
      if ($ && $.blockUI) {
        $.blockUI({
          message: $("#id_div_process_block"),
          overlayCSS: { backgroundColor: sc_ajaxBg },
          css: {
            borderColor: sc_ajaxBordC,
            borderStyle: sc_ajaxBordS,
            borderWidth: sc_ajaxBordW
          }
        });
      }
      else {
        document.getElementById("id_div_process").style.display = "";
        document.getElementById("id_fatal_error").style.display = "none";
      }
    }
  }
  function nmAjaxProcOff()
  {
    if (document.getElementById("id_div_process")) {
      if ($ && $.unblockUI) {
        $.unblockUI();
      }
      else {
        document.getElementById("id_div_process").style.display = "none";
      }
    }
  }
