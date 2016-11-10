<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - alerta"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - alerta"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_alerta/form_alerta_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_alerta_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}

 function enviar() {
  /*
   * This macro allows the execution of JavaScript methods in form/control events
   */
  //sc_ajax_javascript( 'nm_atualiaza', array("alterar"));/**
  javascript: nm_atualiza ('alterar');
  
  
  
 } // enviar

 function nm_field_disabled(Fields, Opt) {
  opcao = "<?php if ($GLOBALS["erro_incl"] == 1) {echo "novo";} else {echo $this->nmgp_opcao;} ?>";
  if (opcao == "novo" && Opt == "U") {
      return;
  }
  if (opcao != "novo" && Opt == "I") {
      return;
  }
  Field = Fields.split(";");
  for (i=0; i < Field.length; i++)
  {
     F_temp = Field[i].split("=");
     F_name = F_temp[0];
     F_opc  = (F_temp[1] && ("disabled" == F_temp[1] || "true" == F_temp[1])) ? true : false;
     if (F_name == "origenalerta")
     {
        $('select[name="origenalerta"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="origenalerta"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="origenalerta"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_alerta_mob_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
  $(".scBtnGrpClick").find("a").click(function(e){
     e.preventDefault();
  });
  $(".scBtnGrpClick").click(function(){
     var aObj = $(this).find("a"), aHref = aObj.attr("href");
     if ("javascript:" == aHref.substr(0, 11)) {
        eval(aHref.substr(11));
     }
     else {
        aObj.trigger("click");
     }
   }).mouseover(function(){
     $(this).css("cursor", "pointer");
  });
  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  addAutocomplete(this);

  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).load(function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         $('#SC_fast_search_t').listen();
     }
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

 function addAutocomplete(elem) {


  $(".sc-ui-autocomp-motivo", elem).focus(function() {
   var sId = $(this).attr("id").substr(6);
   scEventControl_data[sId]["autocomp"] = true;
  }).blur(function() {
   var sId = $(this).attr("id").substr(6), sRow = "motivo" != sId ? sId.substr(6) : "";
   if ("" == $(this).val()) {
    $("#id_sc_field_" + sId).val("");
   }
   scEventControl_data[sId]["autocomp"] = false;
  }).autocomplete({
   source: function (request, response) {
    $.ajax({
     url: "form_alerta_mob.php",
     dataType: "json",
     data: {
      term: request.term,
      nmgp_parms: "NM_ajax_opcao?#?autocomp_motivo",
      script_case_init: document.F2.script_case_init.value
     },
     success: function (data) {
      response(data);
     }
    });
   },
   select: function (event, ui) {
    var sId = $(this).attr("id").substr(6), sRow = 'motivo' != sId ? sId.substr(6) : '';
    $("#id_sc_field_" + sId).val(ui.item.value);
    $(this).val(ui.item.label);
    $("#div_ac_lab_" + sId).html(ui.item.label);
    event.preventDefault();
    setTimeout(function() { scAjaxHideAutocomp(sId); }, 10);
   }
  });
  $.ui.autocomplete.prototype._renderItem = function (ul, item) {
   return $("<li></li>")
    .data("item.autocomplete", item)
    .append("<a>" + item.label + " (" + item.value + ")</a>")
    .appendTo(ul);
  };
}
</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_alerta_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form name="F1" method="post" enctype="multipart/form-data" 
               action="form_alerta_mob.php" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>"> 
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" /> 
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="rutavideo_salva" value="<?php  echo $this->form_encode_input($this->rutavideo) ?>">
<input type="hidden" name="rutaaudio_salva" value="<?php  echo $this->form_encode_input($this->rutaaudio) ?>">
<input type="hidden" name="rutaimagen_salva" value="<?php  echo $this->form_encode_input($this->rutaimagen) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_alerta_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_alerta_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['mostra_cab'] != "N"))
  {
?>
<tr><td>
<style>
#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 
#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:37px; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    	<tr>
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - alerta"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - alerta"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span><?php echo date($this->dateDefaultFormat()); ?></span></td>
        </tr>
    </table>		 
 </div>
</div>
</td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{watermark:'<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>', watermarkClass: 'scFormToolbarInputWm', maxLength: 255}">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = ''; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
        $sCondStyle = ($this->nmgp_botoes['new'] != 'off' || $this->nmgp_botoes['insert'] != 'off' || $this->nmgp_botoes['exit'] != 'off' || $this->nmgp_botoes['update'] != 'off' || $this->nmgp_botoes['delete'] != 'off' || $this->nmgp_botoes['copy'] != 'off') ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "", "", "__sc_grp__");?>
 
<?php
        $NM_btn = true;
?>
<table style="border-collapse: collapse; border-width: 0; display: none; position: absolute; z-index: 1000" id="sc_btgp_div_group_2_t">
 <tr><td class="scBtnGrpBackground">
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_new_t">
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_sai_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "nm_atualiza ('excluir');", "nm_atualiza ('excluir');", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sys_separator">
 </td></tr><tr><td class="scBtnGrpBackground">
  </div>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_clone_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "nm_move ('clone');", "nm_move ('clone');", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "group_2_t");?>
  </div>
 
<?php
        $NM_btn = true;
    }
?>
 </td></tr>
</table>
<?php
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['empty_filter'] = true;
       }
  }
  else
  {
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['estado']))
   {
       $this->nmgp_cmp_hidden['estado'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['geo']))
   {
       $this->nmgp_cmp_hidden['geo'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['direccion']))
   {
       $this->nmgp_cmp_hidden['direccion'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['rutavideo']))
   {
       $this->nmgp_cmp_hidden['rutavideo'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['canal']))
   {
       $this->nmgp_cmp_hidden['canal'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['radicado']))
   {
       $this->nmgp_cmp_hidden['radicado'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['departamento']))
   {
       $this->nmgp_cmp_hidden['departamento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['terminado']))
   {
       $this->nmgp_cmp_hidden['terminado'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><input type="hidden" name="rutavideo_ul_name" id="id_sc_field_rutavideo_ul_name" value="<?php echo $this->form_encode_input($this->rutavideo_ul_name);?>">
<input type="hidden" name="rutavideo_ul_type" id="id_sc_field_rutavideo_ul_type" value="<?php echo $this->form_encode_input($this->rutavideo_ul_type);?>">
<input type="hidden" name="rutaaudio_ul_name" id="id_sc_field_rutaaudio_ul_name" value="<?php echo $this->form_encode_input($this->rutaaudio_ul_name);?>">
<input type="hidden" name="rutaaudio_ul_type" id="id_sc_field_rutaaudio_ul_type" value="<?php echo $this->form_encode_input($this->rutaaudio_ul_type);?>">
<input type="hidden" name="rutaimagen_ul_name" id="id_sc_field_rutaimagen_ul_name" value="<?php echo $this->form_encode_input($this->rutaimagen_ul_name);?>">
<input type="hidden" name="rutaimagen_ul_type" id="id_sc_field_rutaimagen_ul_type" value="<?php echo $this->form_encode_input($this->rutaimagen_ul_type);?>">
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['aprobada']))
    {
        $this->nm_new_label['aprobada'] = "Aprobada Para Seguimiento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $aprobada = $this->aprobada;
   $sStyleHidden_aprobada = '';
   if (isset($this->nmgp_cmp_hidden['aprobada']) && $this->nmgp_cmp_hidden['aprobada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['aprobada']);
       $sStyleHidden_aprobada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_aprobada = 'display: none;';
   $sStyleReadInp_aprobada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['aprobada']) && $this->nmgp_cmp_readonly['aprobada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['aprobada']);
       $sStyleReadLab_aprobada = '';
       $sStyleReadInp_aprobada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['aprobada']) && $this->nmgp_cmp_hidden['aprobada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="aprobada" value="<?php echo $this->form_encode_input($aprobada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_aprobada_line" id="hidden_field_data_aprobada" style="<?php echo $sStyleHidden_aprobada; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_aprobada_line" style="padding: 0px"><span class="scFormLabelOddFormat css_aprobada_label"><span id="id_label_aprobada"><?php echo $this->nm_new_label['aprobada']; ?></span></span><br><input type="hidden" name="aprobada" value="<?php echo $this->form_encode_input($aprobada); ?>"><span id="id_ajax_label_aprobada"><?php echo nl2br($aprobada); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_aprobada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_aprobada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['noaprobada']))
    {
        $this->nm_new_label['noaprobada'] = "Todavia No Aprobada";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $noaprobada = $this->noaprobada;
   $sStyleHidden_noaprobada = '';
   if (isset($this->nmgp_cmp_hidden['noaprobada']) && $this->nmgp_cmp_hidden['noaprobada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['noaprobada']);
       $sStyleHidden_noaprobada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_noaprobada = 'display: none;';
   $sStyleReadInp_noaprobada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['noaprobada']) && $this->nmgp_cmp_readonly['noaprobada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['noaprobada']);
       $sStyleReadLab_noaprobada = '';
       $sStyleReadInp_noaprobada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['noaprobada']) && $this->nmgp_cmp_hidden['noaprobada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="noaprobada" value="<?php echo $this->form_encode_input($noaprobada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_noaprobada_line" id="hidden_field_data_noaprobada" style="<?php echo $sStyleHidden_noaprobada; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_noaprobada_line" style="padding: 0px"><span class="scFormLabelOddFormat css_noaprobada_label"><span id="id_label_noaprobada"><?php echo $this->nm_new_label['noaprobada']; ?></span></span><br><input type="hidden" name="noaprobada" value="<?php echo $this->form_encode_input($noaprobada); ?>"><span id="id_ajax_label_noaprobada"><?php echo nl2br($noaprobada); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_noaprobada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_noaprobada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['escalar']))
   {
       $this->nm_new_label['escalar'] = "Escalar";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $escalar = $this->escalar;
   $sStyleHidden_escalar = '';
   if (isset($this->nmgp_cmp_hidden['escalar']) && $this->nmgp_cmp_hidden['escalar'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['escalar']);
       $sStyleHidden_escalar = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_escalar = 'display: none;';
   $sStyleReadInp_escalar = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['escalar']) && $this->nmgp_cmp_readonly['escalar'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['escalar']);
       $sStyleReadLab_escalar = '';
       $sStyleReadInp_escalar = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['escalar']) && $this->nmgp_cmp_hidden['escalar'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="escalar" value="<?php echo $this->form_encode_input($this->escalar) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_escalar_line" id="hidden_field_data_escalar" style="<?php echo $sStyleHidden_escalar; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_escalar_line" style="padding: 0px"><span class="scFormLabelOddFormat css_escalar_label"><span id="id_label_escalar"><?php echo $this->nm_new_label['escalar']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["escalar"]) &&  $this->nmgp_cmp_readonly["escalar"] == "on") { 

$escalar_look = "";
 if ($this->escalar == "Sin Atender") { $escalar_look .= "Sin Atender" ;} 
 if ($this->escalar == "En Atencion") { $escalar_look .= "En Atencion" ;} 
 if ($this->escalar == "Rechazada") { $escalar_look .= "Rechazada" ;} 
 if ($this->escalar == "Finalizada") { $escalar_look .= "Finalizada" ;} 
 if (empty($escalar_look)) { $escalar_look = $this->escalar; }
?>
<input type="hidden" name="escalar" value="<?php echo $this->form_encode_input($escalar) . "\">" . $escalar_look . ""; ?>
<?php } else { ?>
<?php

$escalar_look = "";
 if ($this->escalar == "Sin Atender") { $escalar_look .= "Sin Atender" ;} 
 if ($this->escalar == "En Atencion") { $escalar_look .= "En Atencion" ;} 
 if ($this->escalar == "Rechazada") { $escalar_look .= "Rechazada" ;} 
 if ($this->escalar == "Finalizada") { $escalar_look .= "Finalizada" ;} 
 if (empty($escalar_look)) { $escalar_look = $this->escalar; }
?>
<span id="id_read_on_escalar" class="css_escalar_line"  style="<?php echo $sStyleReadLab_escalar; ?>"><?php echo $this->form_encode_input($escalar_look); ?></span><span id="id_read_off_escalar" style="<?php echo $sStyleReadInp_escalar; ?>">
 <span id="idAjaxSelect_escalar"><select class="sc-js-input scFormObjectOdd css_escalar_obj" style="" id="id_sc_field_escalar" name="escalar" size="1" alt="{type: 'select', enterTab: false}">
 <option value="Sin Atender" <?php  if ($this->escalar == "Sin Atender") { echo " selected" ;} ?><?php  if (empty($this->escalar)) { echo " selected" ;} ?>>Sin Atender</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_escalar'][] = 'Sin Atender'; ?>
 <option value="En Atencion" <?php  if ($this->escalar == "En Atencion") { echo " selected" ;} ?>>En Atencion</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_escalar'][] = 'En Atencion'; ?>
 <option value="Rechazada" <?php  if ($this->escalar == "Rechazada") { echo " selected" ;} ?>>Rechazada</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_escalar'][] = 'Rechazada'; ?>
 <option value="Finalizada" <?php  if ($this->escalar == "Finalizada") { echo " selected" ;} ?>>Finalizada</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_escalar'][] = 'Finalizada'; ?>
 </select></span>
</span><?php  }?>
<span class="scFormPopupBubble" style="vertical-align: top; display: inline-block"><span class="scFormPopupTrigger"><?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "return false;", "return false;", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</span><table class="scFormPopup"><tbody><?php
if (isset($_SESSION['scriptcase']['reg_conf']['html_dir']) && $_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'") {
?>
<tr><td class="scFormPopupTopRight scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopLeft scFormPopupCorner"></td></tr><tr><td class="scFormPopupRight"></td><td class="scFormPopupContent">Si la alerta, cumple con todos los requerimientos necesarios para escalarse por favor indiquelo, para hacerle el respectivo seguimiento</td><td class="scFormPopupLeft"></td></tr><tr><td class="scFormPopupBottomRight scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomLeft scFormPopupCorner"></td></tr><?php
} else {
?>
<tr><td class="scFormPopupTopLeft scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopRight scFormPopupCorner"></td></tr><tr><td class="scFormPopupLeft"></td><td class="scFormPopupContent">Si la alerta, cumple con todos los requerimientos necesarios para escalarse por favor indiquelo, para hacerle el respectivo seguimiento</td><td class="scFormPopupRight"></td></tr><tr><td class="scFormPopupBottomLeft scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomRight scFormPopupCorner"></td></tr><?php
}
?>
</tbody></table></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_escalar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_escalar_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['geocode']))
    {
        $this->nm_new_label['geocode'] = "Localizacion";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $geocode = $this->geocode;
   $sStyleHidden_geocode = '';
   if (isset($this->nmgp_cmp_hidden['geocode']) && $this->nmgp_cmp_hidden['geocode'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['geocode']);
       $sStyleHidden_geocode = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_geocode = 'display: none;';
   $sStyleReadInp_geocode = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['geocode']) && $this->nmgp_cmp_readonly['geocode'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['geocode']);
       $sStyleReadLab_geocode = '';
       $sStyleReadInp_geocode = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['geocode']) && $this->nmgp_cmp_hidden['geocode'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="geocode" value="<?php echo $this->form_encode_input($geocode) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_geocode_line" id="hidden_field_data_geocode" style="<?php echo $sStyleHidden_geocode; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_geocode_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_geocode_label"><span id="id_label_geocode"><?php echo $this->nm_new_label['geocode']; ?></span></span><br><script type="text/Javascript">
 var aGmapData_geocode = {
  'type': 'latlng',
  'latitude': 'latitud',
  'longitude': 'longitud',
  'depth': 7
 };
</script>
<span id="id_read_on_geocode" style="<?php echo $sStyleReadLab_geocode; ?>"><input name="geocode" type="button" value="Google Maps" onClick="nm_display_googlemaps(aGmapData_geocode, 'modal', 600, 3000); return false" class="scButton_default" />
</span><span id="id_read_off_geocode" style="<?php echo $sStyleReadInp_geocode; ?>"><input name="geocode" type="button" value="Google Maps" onClick="nm_display_googlemaps(aGmapData_geocode, 'modal', 600, 3000); return false" class="scButton_default" />
</span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_geocode_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_geocode_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['audio']))
    {
        $this->nm_new_label['audio'] = "Audio";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $audio = $this->audio;
   $sStyleHidden_audio = '';
   if (isset($this->nmgp_cmp_hidden['audio']) && $this->nmgp_cmp_hidden['audio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['audio']);
       $sStyleHidden_audio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_audio = 'display: none;';
   $sStyleReadInp_audio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['audio']) && $this->nmgp_cmp_readonly['audio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['audio']);
       $sStyleReadLab_audio = '';
       $sStyleReadInp_audio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['audio']) && $this->nmgp_cmp_hidden['audio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="audio" value="<?php echo $this->form_encode_input($audio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_audio_line" id="hidden_field_data_audio" style="<?php echo $sStyleHidden_audio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_audio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_audio_label"><span id="id_label_audio"><?php echo $this->nm_new_label['audio']; ?></span></span><br><span id="id_ajax_label_audio"><?php echo $audio?></span>
<input type="hidden" name="audio" value="<?php echo $this->form_encode_input($audio); ?>">
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_audio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_audio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['motivo']))
    {
        $this->nm_new_label['motivo'] = "Motivo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $motivo = $this->motivo;
   $sStyleHidden_motivo = '';
   if (isset($this->nmgp_cmp_hidden['motivo']) && $this->nmgp_cmp_hidden['motivo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['motivo']);
       $sStyleHidden_motivo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_motivo = 'display: none;';
   $sStyleReadInp_motivo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['motivo']) && $this->nmgp_cmp_readonly['motivo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['motivo']);
       $sStyleReadLab_motivo = '';
       $sStyleReadInp_motivo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['motivo']) && $this->nmgp_cmp_hidden['motivo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="motivo" value="<?php echo $this->form_encode_input($motivo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_motivo_line" id="hidden_field_data_motivo" style="<?php echo $sStyleHidden_motivo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_motivo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_motivo_label"><span id="id_label_motivo"><?php echo $this->nm_new_label['motivo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["motivo"]) &&  $this->nmgp_cmp_readonly["motivo"] == "on") { 

 ?>
<input type="hidden" name="motivo" value="<?php echo $this->form_encode_input($motivo) . "\">" . $motivo . ""; ?>
<?php } else { ?>

<?php
$aRecData['motivo'] = $this->motivo;
$aLookup = array();
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
   {
       $nm_comando = "SELECT respuesta, pregunta + respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
   {
       $nm_comando = "SELECT respuesta, concat(pregunta, respuesta) FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
   {
       $nm_comando = "SELECT respuesta, pregunta&respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
   {
       $nm_comando = "SELECT respuesta, pregunta||respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
   {
       $nm_comando = "SELECT respuesta, pregunta + respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
   {
       $nm_comando = "SELECT respuesta, pregunta||respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   else
   {
       $nm_comando = "SELECT respuesta, pregunta||respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array($rs->fields[0] => $rs->fields[1]);
              $nmgp_def_dados .= $rs->fields[0] . "" . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
$motivo_look = (isset($aLookup[0][$this->motivo])) ? $aLookup[0][$this->motivo] : $this->motivo;
?>
<span id="id_read_on_motivo" class="sc-ui-readonly-motivo css_motivo_line" style="<?php echo $sStyleReadLab_motivo; ?>"><?php echo $motivo_look; ?></span><span id="id_read_off_motivo" style="white-space: nowrap;<?php echo $sStyleReadInp_motivo; ?>">
 <input class="sc-js-input scFormObjectOdd css_motivo_obj" style="" id="id_sc_field_motivo" type=text name="motivo" value="<?php echo $this->form_encode_input($motivo) ?>"
 size=50 maxlength=1000 alt="{datatype: 'text', maxLength: 1000, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php
$aRecData['motivo'] = $this->motivo;
$aLookup = array();
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
   {
       $nm_comando = "SELECT respuesta, pregunta + respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
   {
       $nm_comando = "SELECT respuesta, concat(pregunta, respuesta) FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
   {
       $nm_comando = "SELECT respuesta, pregunta&respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
   {
       $nm_comando = "SELECT respuesta, pregunta||respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
   {
       $nm_comando = "SELECT respuesta, pregunta + respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
   {
       $nm_comando = "SELECT respuesta, pregunta||respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }
   else
   {
       $nm_comando = "SELECT respuesta, pregunta||respuesta FROM baseconocimiento WHERE respuesta = '" . substr($this->Db->qstr($this->motivo), 1, -1) . "' ORDER BY pregunta, respuesta";
   }

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array($rs->fields[0] => $rs->fields[1]);
              $nmgp_def_dados .= $rs->fields[0] . "" . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_motivo'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
$sAutocompValue = (isset($aLookup[0][$this->motivo])) ? $aLookup[0][$this->motivo] : '';
?>
<?php echo nmButtonOutput($this->arr_buttons, "bajaxcapt", "scAjaxShowAutocomp('motivo'); return false", "scAjaxShowAutocomp('motivo'); return false", "motivo_autocomp_cap", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;<div id="id_ac_frame_motivo" style="display: none; position: absolute"><table class="scFormACTable"><tr><td class="scFormACTitle"><?php echo nmButtonOutput($this->arr_buttons, "bajaxclose", "scAjaxHideAutocomp('motivo'); return false", "scAjaxHideAutocomp('motivo'); return false", "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Buscar</td></tr><tr><td class="scFormDataOdd"><input type="text" id="id_ac_motivo" name="motivo_autocomp" class="scFormObjectOdd sc-ui-autocomp-motivo css_motivo_obj" size="30" value="<?php echo $sAutocompValue; ?>" />
<?php
   if (isset($this->Ini->sc_lig_md5["form_baseconocimiento"]) && $this->Ini->sc_lig_md5["form_baseconocimiento"] == "S") {
       $Parms_Lig  = "nm_evt_ret_edit*scindo_ajax_form_alerta_mob_lkpedt_refresh_motivo*scoutnmgp_url_saida*scin*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_alerta_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "nm_evt_ret_edit*scindo_ajax_form_alerta_mob_lkpedt_refresh_motivo*scoutnmgp_url_saida*scin*scoutsc_redir_atualiz*scinok*scout";
   }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "nm_submit_cap('" . $this->Ini->link_form_baseconocimiento_edit. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_form_baseconocimiento_edit. "', '" . $Md5_Lig . "')", "fldedt_motivo", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></div><span id="div_ac_lab_motivo"><?php echo $sAutocompValue; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_motivo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_motivo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['terminado']))
   {
       $this->nm_new_label['terminado'] = "Terminado";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $terminado = $this->terminado;
   if (!isset($this->nmgp_cmp_hidden['terminado']))
   {
       $this->nmgp_cmp_hidden['terminado'] = 'off';
   }
   $sStyleHidden_terminado = '';
   if (isset($this->nmgp_cmp_hidden['terminado']) && $this->nmgp_cmp_hidden['terminado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['terminado']);
       $sStyleHidden_terminado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_terminado = 'display: none;';
   $sStyleReadInp_terminado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['terminado']) && $this->nmgp_cmp_readonly['terminado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['terminado']);
       $sStyleReadLab_terminado = '';
       $sStyleReadInp_terminado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['terminado']) && $this->nmgp_cmp_hidden['terminado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="terminado" value="<?php echo $this->form_encode_input($this->terminado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->terminado_1 = explode(";", trim($this->terminado));
  } 
  else
  {
      if (empty($this->terminado))
      {
          $this->terminado_1= array(); 
          $this->terminado= "0";
      } 
      else
      {
          $this->terminado_1= $this->terminado; 
          $this->terminado= ""; 
          foreach ($this->terminado_1 as $cada_terminado)
          {
             if (!empty($terminado))
             {
                 $this->terminado.= ";"; 
             } 
             $this->terminado.= $cada_terminado; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_terminado_line" id="hidden_field_data_terminado" style="<?php echo $sStyleHidden_terminado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_terminado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_terminado_label"><span id="id_label_terminado"><?php echo $this->nm_new_label['terminado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["terminado"]) &&  $this->nmgp_cmp_readonly["terminado"] == "on") { 

$terminado_look = "";
 if ($this->terminado == "1") { $terminado_look .= "Ok" ;} 
 if (empty($terminado_look)) { $terminado_look = $this->terminado; }
?>
<input type="hidden" name="terminado" value="<?php echo $this->form_encode_input($terminado) . "\">" . $terminado_look . ""; ?>
<?php } else { ?>

<?php

$terminado_look = "";
 if ($this->terminado == "1") { $terminado_look .= "Ok" ;} 
 if (empty($terminado_look)) { $terminado_look = $this->terminado; }
?>
<span id="id_read_on_terminado" class="css_terminado_line" style="<?php echo $sStyleReadLab_terminado; ?>"><?php echo $this->form_encode_input($terminado_look); ?></span><span id="id_read_off_terminado" style="<?php echo $sStyleReadInp_terminado; ?>"><?php echo "<div id=\"idAjaxCheckbox_terminado\" style=\"display: inline-block\">\r\n"; ?><TABLE><TR>
  <TD class="scFormDataFontOdd css_terminado_line"> <input type=checkbox class="sc-ui-checkbox-terminado sc-ui-checkbox-terminado" name="terminado[]" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_terminado'][] = '1'; ?>
<?php  if (in_array("1", $this->terminado_1))  { echo " checked" ;} ?> onClick="" >Ok</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_terminado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_terminado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['categoria']))
   {
       $this->nm_new_label['categoria'] = "Categoria";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $categoria = $this->categoria;
   $sStyleHidden_categoria = '';
   if (isset($this->nmgp_cmp_hidden['categoria']) && $this->nmgp_cmp_hidden['categoria'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['categoria']);
       $sStyleHidden_categoria = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_categoria = 'display: none;';
   $sStyleReadInp_categoria = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['categoria']) && $this->nmgp_cmp_readonly['categoria'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['categoria']);
       $sStyleReadLab_categoria = '';
       $sStyleReadInp_categoria = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['categoria']) && $this->nmgp_cmp_hidden['categoria'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="categoria" value="<?php echo $this->form_encode_input($this->categoria) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_categoria_line" id="hidden_field_data_categoria" style="<?php echo $sStyleHidden_categoria; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_categoria_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_categoria_label"><span id="id_label_categoria"><?php echo $this->nm_new_label['categoria']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["categoria"]) &&  $this->nmgp_cmp_readonly["categoria"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "SELECT nombre, nombre 
FROM categorias 
ORDER BY nombre";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $categoria_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->categoria_1))
          {
              foreach ($this->categoria_1 as $tmp_categoria)
              {
                  if (trim($tmp_categoria) === trim($cadaselect[1])) { $categoria_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->categoria) === trim($cadaselect[1])) { $categoria_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="categoria" value="<?php echo $this->form_encode_input($categoria) . "\">" . $categoria_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "SELECT nombre, nombre 
FROM categorias 
ORDER BY nombre";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $categoria_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->categoria_1))
          {
              foreach ($this->categoria_1 as $tmp_categoria)
              {
                  if (trim($tmp_categoria) === trim($cadaselect[1])) { $categoria_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->categoria) === trim($cadaselect[1])) { $categoria_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($categoria_look))
          {
              $categoria_look = $this->categoria;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_categoria\" class=\"css_categoria_line\" style=\"" .  $sStyleReadLab_categoria . "\">" . $this->form_encode_input($categoria_look) . "</span><span id=\"id_read_off_categoria\" style=\"" . $sStyleReadInp_categoria . "\">";
   echo " <span id=\"idAjaxSelect_categoria\"><select class=\"sc-js-input scFormObjectOdd css_categoria_obj\" style=\"\" id=\"id_sc_field_categoria\" name=\"categoria\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_categoria'][] = 'Categoria'; 
   echo "  <option value=\"Categoria\">Categoria</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->categoria) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->categoria)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_categoria_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_categoria_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['subcategoria']))
   {
       $this->nm_new_label['subcategoria'] = "Subcategoria";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $subcategoria = $this->subcategoria;
   $sStyleHidden_subcategoria = '';
   if (isset($this->nmgp_cmp_hidden['subcategoria']) && $this->nmgp_cmp_hidden['subcategoria'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['subcategoria']);
       $sStyleHidden_subcategoria = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_subcategoria = 'display: none;';
   $sStyleReadInp_subcategoria = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['subcategoria']) && $this->nmgp_cmp_readonly['subcategoria'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['subcategoria']);
       $sStyleReadLab_subcategoria = '';
       $sStyleReadInp_subcategoria = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['subcategoria']) && $this->nmgp_cmp_hidden['subcategoria'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="subcategoria" value="<?php echo $this->form_encode_input($this->subcategoria) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_subcategoria_line" id="hidden_field_data_subcategoria" style="<?php echo $sStyleHidden_subcategoria; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_subcategoria_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_subcategoria_label"><span id="id_label_subcategoria"><?php echo $this->nm_new_label['subcategoria']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["subcategoria"]) &&  $this->nmgp_cmp_readonly["subcategoria"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "SELECT  nombre,nombre 
FROM subcategoria where categoria='$this->categoria'
ORDER BY categoria";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $subcategoria_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->subcategoria_1))
          {
              foreach ($this->subcategoria_1 as $tmp_subcategoria)
              {
                  if (trim($tmp_subcategoria) === trim($cadaselect[1])) { $subcategoria_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->subcategoria) === trim($cadaselect[1])) { $subcategoria_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="subcategoria" value="<?php echo $this->form_encode_input($subcategoria) . "\">" . $subcategoria_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "SELECT  nombre,nombre 
FROM subcategoria where categoria='$this->categoria'
ORDER BY categoria";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_subcategoria'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $subcategoria_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->subcategoria_1))
          {
              foreach ($this->subcategoria_1 as $tmp_subcategoria)
              {
                  if (trim($tmp_subcategoria) === trim($cadaselect[1])) { $subcategoria_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->subcategoria) === trim($cadaselect[1])) { $subcategoria_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($subcategoria_look))
          {
              $subcategoria_look = $this->subcategoria;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_subcategoria\" class=\"css_subcategoria_line\" style=\"" .  $sStyleReadLab_subcategoria . "\">" . $this->form_encode_input($subcategoria_look) . "</span><span id=\"id_read_off_subcategoria\" style=\"" . $sStyleReadInp_subcategoria . "\">";
   echo " <span id=\"idAjaxSelect_subcategoria\"><select class=\"sc-js-input scFormObjectOdd css_subcategoria_obj\" style=\"\" id=\"id_sc_field_subcategoria\" name=\"subcategoria\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->subcategoria) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->subcategoria)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_subcategoria_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_subcategoria_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fecharechazada']))
    {
        $this->nm_new_label['fecharechazada'] = "Fecharechazada";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_fecharechazada = $this->fecharechazada;
   $this->fecharechazada .= ' ' . $this->fecharechazada_hora;
   $fecharechazada = $this->fecharechazada;
   $sStyleHidden_fecharechazada = '';
   if (isset($this->nmgp_cmp_hidden['fecharechazada']) && $this->nmgp_cmp_hidden['fecharechazada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fecharechazada']);
       $sStyleHidden_fecharechazada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fecharechazada = 'display: none;';
   $sStyleReadInp_fecharechazada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fecharechazada']) && $this->nmgp_cmp_readonly['fecharechazada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fecharechazada']);
       $sStyleReadLab_fecharechazada = '';
       $sStyleReadInp_fecharechazada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fecharechazada']) && $this->nmgp_cmp_hidden['fecharechazada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fecharechazada" value="<?php echo $this->form_encode_input($fecharechazada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fecharechazada_line" id="hidden_field_data_fecharechazada" style="<?php echo $sStyleHidden_fecharechazada; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fecharechazada_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fecharechazada_label"><span id="id_label_fecharechazada"><?php echo $this->nm_new_label['fecharechazada']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fecharechazada"]) &&  $this->nmgp_cmp_readonly["fecharechazada"] == "on") { 

 ?>
<input type="hidden" name="fecharechazada" value="<?php echo $this->form_encode_input($fecharechazada) . "\">" . $fecharechazada . ""; ?>
<?php } else { ?>
<span id="id_read_on_fecharechazada" class="sc-ui-readonly-fecharechazada css_fecharechazada_line" style="<?php echo $sStyleReadLab_fecharechazada; ?>"><?php echo $this->form_encode_input($fecharechazada); ?></span><span id="id_read_off_fecharechazada" style="white-space: nowrap;<?php echo $sStyleReadInp_fecharechazada; ?>">
 <input class="sc-js-input scFormObjectOdd css_fecharechazada_obj" style="" id="id_sc_field_fecharechazada" type=text name="fecharechazada" value="<?php echo $this->form_encode_input($fecharechazada) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['fecharechazada']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fecharechazada']['date_format']; ?>', timeSep: '<?php echo $this->field_config['fecharechazada']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['fecharechazada']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fecharechazada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fecharechazada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->fecharechazada = $old_dt_fecharechazada;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fechaenatencion']))
    {
        $this->nm_new_label['fechaenatencion'] = "Fechaenatencion";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_fechaenatencion = $this->fechaenatencion;
   $this->fechaenatencion .= ' ' . $this->fechaenatencion_hora;
   $fechaenatencion = $this->fechaenatencion;
   $sStyleHidden_fechaenatencion = '';
   if (isset($this->nmgp_cmp_hidden['fechaenatencion']) && $this->nmgp_cmp_hidden['fechaenatencion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fechaenatencion']);
       $sStyleHidden_fechaenatencion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fechaenatencion = 'display: none;';
   $sStyleReadInp_fechaenatencion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fechaenatencion']) && $this->nmgp_cmp_readonly['fechaenatencion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fechaenatencion']);
       $sStyleReadLab_fechaenatencion = '';
       $sStyleReadInp_fechaenatencion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fechaenatencion']) && $this->nmgp_cmp_hidden['fechaenatencion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fechaenatencion" value="<?php echo $this->form_encode_input($fechaenatencion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fechaenatencion_line" id="hidden_field_data_fechaenatencion" style="<?php echo $sStyleHidden_fechaenatencion; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fechaenatencion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fechaenatencion_label"><span id="id_label_fechaenatencion"><?php echo $this->nm_new_label['fechaenatencion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fechaenatencion"]) &&  $this->nmgp_cmp_readonly["fechaenatencion"] == "on") { 

 ?>
<input type="hidden" name="fechaenatencion" value="<?php echo $this->form_encode_input($fechaenatencion) . "\">" . $fechaenatencion . ""; ?>
<?php } else { ?>
<span id="id_read_on_fechaenatencion" class="sc-ui-readonly-fechaenatencion css_fechaenatencion_line" style="<?php echo $sStyleReadLab_fechaenatencion; ?>"><?php echo $this->form_encode_input($fechaenatencion); ?></span><span id="id_read_off_fechaenatencion" style="white-space: nowrap;<?php echo $sStyleReadInp_fechaenatencion; ?>">
 <input class="sc-js-input scFormObjectOdd css_fechaenatencion_obj" style="" id="id_sc_field_fechaenatencion" type=text name="fechaenatencion" value="<?php echo $this->form_encode_input($fechaenatencion) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['fechaenatencion']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fechaenatencion']['date_format']; ?>', timeSep: '<?php echo $this->field_config['fechaenatencion']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['fechaenatencion']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fechaenatencion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fechaenatencion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->fechaenatencion = $old_dt_fechaenatencion;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fechafinalizada']))
    {
        $this->nm_new_label['fechafinalizada'] = "Fechafinalizada";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_fechafinalizada = $this->fechafinalizada;
   $this->fechafinalizada .= ' ' . $this->fechafinalizada_hora;
   $fechafinalizada = $this->fechafinalizada;
   $sStyleHidden_fechafinalizada = '';
   if (isset($this->nmgp_cmp_hidden['fechafinalizada']) && $this->nmgp_cmp_hidden['fechafinalizada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fechafinalizada']);
       $sStyleHidden_fechafinalizada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fechafinalizada = 'display: none;';
   $sStyleReadInp_fechafinalizada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fechafinalizada']) && $this->nmgp_cmp_readonly['fechafinalizada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fechafinalizada']);
       $sStyleReadLab_fechafinalizada = '';
       $sStyleReadInp_fechafinalizada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fechafinalizada']) && $this->nmgp_cmp_hidden['fechafinalizada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fechafinalizada" value="<?php echo $this->form_encode_input($fechafinalizada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fechafinalizada_line" id="hidden_field_data_fechafinalizada" style="<?php echo $sStyleHidden_fechafinalizada; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fechafinalizada_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fechafinalizada_label"><span id="id_label_fechafinalizada"><?php echo $this->nm_new_label['fechafinalizada']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fechafinalizada"]) &&  $this->nmgp_cmp_readonly["fechafinalizada"] == "on") { 

 ?>
<input type="hidden" name="fechafinalizada" value="<?php echo $this->form_encode_input($fechafinalizada) . "\">" . $fechafinalizada . ""; ?>
<?php } else { ?>
<span id="id_read_on_fechafinalizada" class="sc-ui-readonly-fechafinalizada css_fechafinalizada_line" style="<?php echo $sStyleReadLab_fechafinalizada; ?>"><?php echo $this->form_encode_input($fechafinalizada); ?></span><span id="id_read_off_fechafinalizada" style="white-space: nowrap;<?php echo $sStyleReadInp_fechafinalizada; ?>">
 <input class="sc-js-input scFormObjectOdd css_fechafinalizada_obj" style="" id="id_sc_field_fechafinalizada" type=text name="fechafinalizada" value="<?php echo $this->form_encode_input($fechafinalizada) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['fechafinalizada']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fechafinalizada']['date_format']; ?>', timeSep: '<?php echo $this->field_config['fechafinalizada']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['fechafinalizada']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fechafinalizada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fechafinalizada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->fechafinalizada = $old_dt_fechafinalizada;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fechafinalizada_dumb = ('' == $sStyleHidden_fechafinalizada) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fechafinalizada_dumb" style="<?php echo $sStyleHidden_fechafinalizada_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fecha']))
    {
        $this->nm_new_label['fecha'] = "Fecha";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fecha = $this->fecha;
   $sStyleHidden_fecha = '';
   if (isset($this->nmgp_cmp_hidden['fecha']) && $this->nmgp_cmp_hidden['fecha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fecha']);
       $sStyleHidden_fecha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fecha = 'display: none;';
   $sStyleReadInp_fecha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fecha']) && $this->nmgp_cmp_readonly['fecha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fecha']);
       $sStyleReadLab_fecha = '';
       $sStyleReadInp_fecha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fecha']) && $this->nmgp_cmp_hidden['fecha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fecha" value="<?php echo $this->form_encode_input($fecha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fecha_line" id="hidden_field_data_fecha" style="<?php echo $sStyleHidden_fecha; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fecha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fecha_label"><span id="id_label_fecha"><?php echo $this->nm_new_label['fecha']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fecha"]) &&  $this->nmgp_cmp_readonly["fecha"] == "on") { 

 ?>
<input type="hidden" name="fecha" value="<?php echo $this->form_encode_input($fecha) . "\">" . $fecha . ""; ?>
<?php } else { ?>
<span id="id_read_on_fecha" class="sc-ui-readonly-fecha css_fecha_line" style="<?php echo $sStyleReadLab_fecha; ?>"><?php echo $this->form_encode_input($fecha); ?></span><span id="id_read_off_fecha" style="white-space: nowrap;<?php echo $sStyleReadInp_fecha; ?>">
 <input class="sc-js-input scFormObjectOdd css_fecha_obj" style="" id="id_sc_field_fecha" type=text name="fecha" value="<?php echo $this->form_encode_input($fecha) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fecha']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fecha']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['fecha']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<?php echo $tmp_form_data; ?></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fecha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fecha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['geo']))
    {
        $this->nm_new_label['geo'] = "Geo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $geo = $this->geo;
   if (!isset($this->nmgp_cmp_hidden['geo']))
   {
       $this->nmgp_cmp_hidden['geo'] = 'off';
   }
   $sStyleHidden_geo = '';
   if (isset($this->nmgp_cmp_hidden['geo']) && $this->nmgp_cmp_hidden['geo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['geo']);
       $sStyleHidden_geo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_geo = 'display: none;';
   $sStyleReadInp_geo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['geo']) && $this->nmgp_cmp_readonly['geo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['geo']);
       $sStyleReadLab_geo = '';
       $sStyleReadInp_geo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['geo']) && $this->nmgp_cmp_hidden['geo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="geo" value="<?php echo $this->form_encode_input($geo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_geo_line" id="hidden_field_data_geo" style="<?php echo $sStyleHidden_geo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_geo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_geo_label"><span id="id_label_geo"><?php echo $this->nm_new_label['geo']; ?></span></span><br><input type="hidden" name="geo" value="<?php echo $this->form_encode_input($geo); ?>"><span id="id_ajax_label_geo"><?php echo nl2br($geo); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_geo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_geo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['correo']))
    {
        $this->nm_new_label['correo'] = "Correo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $correo = $this->correo;
   $sStyleHidden_correo = '';
   if (isset($this->nmgp_cmp_hidden['correo']) && $this->nmgp_cmp_hidden['correo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['correo']);
       $sStyleHidden_correo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_correo = 'display: none;';
   $sStyleReadInp_correo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['correo']) && $this->nmgp_cmp_readonly['correo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['correo']);
       $sStyleReadLab_correo = '';
       $sStyleReadInp_correo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['correo']) && $this->nmgp_cmp_hidden['correo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="correo" value="<?php echo $this->form_encode_input($correo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_correo_line" id="hidden_field_data_correo" style="<?php echo $sStyleHidden_correo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_correo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_correo_label"><span id="id_label_correo"><?php echo $this->nm_new_label['correo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["correo"]) &&  $this->nmgp_cmp_readonly["correo"] == "on") { 

 ?>
<input type="hidden" name="correo" value="<?php echo $this->form_encode_input($correo) . "\">" . $correo . ""; ?>
<?php } else { ?>
<span id="id_read_on_correo" class="sc-ui-readonly-correo css_correo_line" style="<?php echo $sStyleReadLab_correo; ?>"><?php echo $this->form_encode_input($this->correo); ?></span><span id="id_read_off_correo" style="white-space: nowrap;<?php echo $sStyleReadInp_correo; ?>">
 <input class="sc-js-input scFormObjectOdd css_correo_obj" style="" id="id_sc_field_correo" type=text name="correo" value="<?php echo $this->form_encode_input($correo) ?>"
 size=45 maxlength=100 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<?php if ($this->nmgp_opcao != "novo"){ ?><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.correo.value != '') {window.open('mailto:' + document.F1.correo.value); }", "if (document.F1.correo.value != '') {window.open('mailto:' + document.F1.correo.value); }", "correo_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_correo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_correo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nombre']))
    {
        $this->nm_new_label['nombre'] = "Nombre";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nombre = $this->nombre;
   $sStyleHidden_nombre = '';
   if (isset($this->nmgp_cmp_hidden['nombre']) && $this->nmgp_cmp_hidden['nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nombre']);
       $sStyleHidden_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nombre = 'display: none;';
   $sStyleReadInp_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nombre']) && $this->nmgp_cmp_readonly['nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nombre']);
       $sStyleReadLab_nombre = '';
       $sStyleReadInp_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nombre']) && $this->nmgp_cmp_hidden['nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nombre" value="<?php echo $this->form_encode_input($nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nombre_line" id="hidden_field_data_nombre" style="<?php echo $sStyleHidden_nombre; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nombre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nombre_label"><span id="id_label_nombre"><?php echo $this->nm_new_label['nombre']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nombre"]) &&  $this->nmgp_cmp_readonly["nombre"] == "on") { 

 ?>
<input type="hidden" name="nombre" value="<?php echo $this->form_encode_input($nombre) . "\">" . $nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_nombre" class="sc-ui-readonly-nombre css_nombre_line" style="<?php echo $sStyleReadLab_nombre; ?>"><?php echo $this->form_encode_input($this->nombre); ?></span><span id="id_read_off_nombre" style="white-space: nowrap;<?php echo $sStyleReadInp_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_nombre_obj" style="" id="id_sc_field_nombre" type=text name="nombre" value="<?php echo $this->form_encode_input($nombre) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nombre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['celular']))
    {
        $this->nm_new_label['celular'] = "Celular";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $celular = $this->celular;
   $sStyleHidden_celular = '';
   if (isset($this->nmgp_cmp_hidden['celular']) && $this->nmgp_cmp_hidden['celular'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['celular']);
       $sStyleHidden_celular = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_celular = 'display: none;';
   $sStyleReadInp_celular = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['celular']) && $this->nmgp_cmp_readonly['celular'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['celular']);
       $sStyleReadLab_celular = '';
       $sStyleReadInp_celular = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['celular']) && $this->nmgp_cmp_hidden['celular'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="celular" value="<?php echo $this->form_encode_input($celular) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_celular_line" id="hidden_field_data_celular" style="<?php echo $sStyleHidden_celular; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_celular_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_celular_label"><span id="id_label_celular"><?php echo $this->nm_new_label['celular']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["celular"]) &&  $this->nmgp_cmp_readonly["celular"] == "on") { 

 ?>
<input type="hidden" name="celular" value="<?php echo $this->form_encode_input($celular) . "\">" . $celular . ""; ?>
<?php } else { ?>
<span id="id_read_on_celular" class="sc-ui-readonly-celular css_celular_line" style="<?php echo $sStyleReadLab_celular; ?>"><?php echo $this->form_encode_input($this->celular); ?></span><span id="id_read_off_celular" style="white-space: nowrap;<?php echo $sStyleReadInp_celular; ?>">
 <input class="sc-js-input scFormObjectOdd css_celular_obj" style="" id="id_sc_field_celular" type=text name="celular" value="<?php echo $this->form_encode_input($celular) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_celular_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_celular_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['idalerta']))
           {
               $this->nmgp_cmp_readonly['idalerta'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['direccion']))
    {
        $this->nm_new_label['direccion'] = "Direccion";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $direccion = $this->direccion;
   if (!isset($this->nmgp_cmp_hidden['direccion']))
   {
       $this->nmgp_cmp_hidden['direccion'] = 'off';
   }
   $sStyleHidden_direccion = '';
   if (isset($this->nmgp_cmp_hidden['direccion']) && $this->nmgp_cmp_hidden['direccion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['direccion']);
       $sStyleHidden_direccion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_direccion = 'display: none;';
   $sStyleReadInp_direccion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['direccion']) && $this->nmgp_cmp_readonly['direccion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['direccion']);
       $sStyleReadLab_direccion = '';
       $sStyleReadInp_direccion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['direccion']) && $this->nmgp_cmp_hidden['direccion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="direccion" value="<?php echo $this->form_encode_input($direccion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_direccion_line" id="hidden_field_data_direccion" style="<?php echo $sStyleHidden_direccion; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_direccion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_direccion_label"><span id="id_label_direccion"><?php echo $this->nm_new_label['direccion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["direccion"]) &&  $this->nmgp_cmp_readonly["direccion"] == "on") { 

 ?>
<input type="hidden" name="direccion" value="<?php echo $this->form_encode_input($direccion) . "\">" . $direccion . ""; ?>
<?php } else { ?>
<span id="id_read_on_direccion" class="sc-ui-readonly-direccion css_direccion_line" style="<?php echo $sStyleReadLab_direccion; ?>"><?php echo $this->form_encode_input($this->direccion); ?></span><span id="id_read_off_direccion" style="white-space: nowrap;<?php echo $sStyleReadInp_direccion; ?>">
 <input class="sc-js-input scFormObjectOdd css_direccion_obj" style="" id="id_sc_field_direccion" type=text name="direccion" value="<?php echo $this->form_encode_input($direccion) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_direccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_direccion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_direccion_dumb = ('' == $sStyleHidden_direccion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_direccion_dumb" style="<?php echo $sStyleHidden_direccion_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idalerta']))
    {
        $this->nm_new_label['idalerta'] = "Idalerta";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idalerta = $this->idalerta;
   $sStyleHidden_idalerta = '';
   if (isset($this->nmgp_cmp_hidden['idalerta']) && $this->nmgp_cmp_hidden['idalerta'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idalerta']);
       $sStyleHidden_idalerta = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idalerta = 'display: none;';
   $sStyleReadInp_idalerta = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["idalerta"]) &&  $this->nmgp_cmp_readonly["idalerta"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idalerta']);
       $sStyleReadLab_idalerta = '';
       $sStyleReadInp_idalerta = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idalerta']) && $this->nmgp_cmp_hidden['idalerta'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idalerta" value="<?php echo $this->form_encode_input($idalerta) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd css_idalerta_line" id="hidden_field_data_idalerta" style="<?php echo $sStyleHidden_idalerta; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idalerta_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_idalerta_label"><span id="id_label_idalerta"><?php echo $this->nm_new_label['idalerta']; ?></span></span><br><span id="id_read_on_idalerta" class="css_idalerta_line" style="<?php echo $sStyleReadLab_idalerta; ?>"><?php echo $this->form_encode_input($this->idalerta); ?></span><span id="id_read_off_idalerta" style="<?php echo $sStyleReadInp_idalerta; ?>"><input type="hidden" name="idalerta" value="<?php echo $this->form_encode_input($idalerta) . "\">"?><span id="id_ajax_label_idalerta"><?php echo nl2br($idalerta); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idalerta_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idalerta_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['estado']))
   {
       $this->nm_new_label['estado'] = "Estado";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estado = $this->estado;
   if (!isset($this->nmgp_cmp_hidden['estado']))
   {
       $this->nmgp_cmp_hidden['estado'] = 'off';
   }
   $sStyleHidden_estado = '';
   if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estado']);
       $sStyleHidden_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estado = 'display: none;';
   $sStyleReadInp_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estado']) && $this->nmgp_cmp_readonly['estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estado']);
       $sStyleReadLab_estado = '';
       $sStyleReadInp_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estado" value="<?php echo $this->form_encode_input($this->estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_estado_line" id="hidden_field_data_estado" style="<?php echo $sStyleHidden_estado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_estado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_estado_label"><span id="id_label_estado"><?php echo $this->nm_new_label['estado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado"]) &&  $this->nmgp_cmp_readonly["estado"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "select estado from estado";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'][] = $rs->fields[0];
              $nmgp_def_dados .= $rs->fields[0] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $estado_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado_1))
          {
              foreach ($this->estado_1 as $tmp_estado)
              {
                  if (trim($tmp_estado) === trim($cadaselect[1])) { $estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado) === trim($cadaselect[1])) { $estado_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="estado" value="<?php echo $this->form_encode_input($estado) . "\">" . $estado_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "select estado from estado";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_estado'][] = $rs->fields[0];
              $nmgp_def_dados .= $rs->fields[0] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $estado_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado_1))
          {
              foreach ($this->estado_1 as $tmp_estado)
              {
                  if (trim($tmp_estado) === trim($cadaselect[1])) { $estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado) === trim($cadaselect[1])) { $estado_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($estado_look))
          {
              $estado_look = $this->estado;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_estado\" class=\"css_estado_line\" style=\"" .  $sStyleReadLab_estado . "\">" . $this->form_encode_input($estado_look) . "</span><span id=\"id_read_off_estado\" style=\"" . $sStyleReadInp_estado . "\">";
   echo " <span id=\"idAjaxSelect_estado\"><select class=\"sc-js-input scFormObjectOdd css_estado_obj\" style=\"\" id=\"id_sc_field_estado\" name=\"estado\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->estado) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->estado)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['latitud']))
    {
        $this->nm_new_label['latitud'] = "Latitud";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $latitud = $this->latitud;
   $sStyleHidden_latitud = '';
   if (isset($this->nmgp_cmp_hidden['latitud']) && $this->nmgp_cmp_hidden['latitud'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['latitud']);
       $sStyleHidden_latitud = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_latitud = 'display: none;';
   $sStyleReadInp_latitud = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['latitud']) && $this->nmgp_cmp_readonly['latitud'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['latitud']);
       $sStyleReadLab_latitud = '';
       $sStyleReadInp_latitud = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['latitud']) && $this->nmgp_cmp_hidden['latitud'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="latitud" value="<?php echo $this->form_encode_input($latitud) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_latitud_line" id="hidden_field_data_latitud" style="<?php echo $sStyleHidden_latitud; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_latitud_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_latitud_label"><span id="id_label_latitud"><?php echo $this->nm_new_label['latitud']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["latitud"]) &&  $this->nmgp_cmp_readonly["latitud"] == "on") { 

 ?>
<input type="hidden" name="latitud" value="<?php echo $this->form_encode_input($latitud) . "\">" . $latitud . ""; ?>
<?php } else { ?>
<span id="id_read_on_latitud" class="sc-ui-readonly-latitud css_latitud_line" style="<?php echo $sStyleReadLab_latitud; ?>"><?php echo $this->form_encode_input($this->latitud); ?></span><span id="id_read_off_latitud" style="white-space: nowrap;<?php echo $sStyleReadInp_latitud; ?>">
 <input class="sc-js-input scFormObjectOdd css_latitud_obj" style="" id="id_sc_field_latitud" type=text name="latitud" value="<?php echo $this->form_encode_input($latitud) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_latitud_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_latitud_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['longitud']))
    {
        $this->nm_new_label['longitud'] = "Longitud";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $longitud = $this->longitud;
   $sStyleHidden_longitud = '';
   if (isset($this->nmgp_cmp_hidden['longitud']) && $this->nmgp_cmp_hidden['longitud'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['longitud']);
       $sStyleHidden_longitud = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_longitud = 'display: none;';
   $sStyleReadInp_longitud = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['longitud']) && $this->nmgp_cmp_readonly['longitud'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['longitud']);
       $sStyleReadLab_longitud = '';
       $sStyleReadInp_longitud = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['longitud']) && $this->nmgp_cmp_hidden['longitud'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="longitud" value="<?php echo $this->form_encode_input($longitud) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_longitud_line" id="hidden_field_data_longitud" style="<?php echo $sStyleHidden_longitud; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_longitud_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_longitud_label"><span id="id_label_longitud"><?php echo $this->nm_new_label['longitud']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["longitud"]) &&  $this->nmgp_cmp_readonly["longitud"] == "on") { 

 ?>
<input type="hidden" name="longitud" value="<?php echo $this->form_encode_input($longitud) . "\">" . $longitud . ""; ?>
<?php } else { ?>
<span id="id_read_on_longitud" class="sc-ui-readonly-longitud css_longitud_line" style="<?php echo $sStyleReadLab_longitud; ?>"><?php echo $this->form_encode_input($this->longitud); ?></span><span id="id_read_off_longitud" style="white-space: nowrap;<?php echo $sStyleReadInp_longitud; ?>">
 <input class="sc-js-input scFormObjectOdd css_longitud_obj" style="" id="id_sc_field_longitud" type=text name="longitud" value="<?php echo $this->form_encode_input($longitud) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_longitud_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_longitud_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['departamento']))
    {
        $this->nm_new_label['departamento'] = "Departamento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $departamento = $this->departamento;
   if (!isset($this->nmgp_cmp_hidden['departamento']))
   {
       $this->nmgp_cmp_hidden['departamento'] = 'off';
   }
   $sStyleHidden_departamento = '';
   if (isset($this->nmgp_cmp_hidden['departamento']) && $this->nmgp_cmp_hidden['departamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['departamento']);
       $sStyleHidden_departamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_departamento = 'display: none;';
   $sStyleReadInp_departamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['departamento']) && $this->nmgp_cmp_readonly['departamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['departamento']);
       $sStyleReadLab_departamento = '';
       $sStyleReadInp_departamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['departamento']) && $this->nmgp_cmp_hidden['departamento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="departamento" value="<?php echo $this->form_encode_input($departamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_departamento_line" id="hidden_field_data_departamento" style="<?php echo $sStyleHidden_departamento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_departamento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_departamento_label"><span id="id_label_departamento"><?php echo $this->nm_new_label['departamento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["departamento"]) &&  $this->nmgp_cmp_readonly["departamento"] == "on") { 

 ?>
<input type="hidden" name="departamento" value="<?php echo $this->form_encode_input($departamento) . "\">" . $departamento . ""; ?>
<?php } else { ?>
<span id="id_read_on_departamento" class="sc-ui-readonly-departamento css_departamento_line" style="<?php echo $sStyleReadLab_departamento; ?>"><?php echo $this->form_encode_input($this->departamento); ?></span><span id="id_read_off_departamento" style="white-space: nowrap;<?php echo $sStyleReadInp_departamento; ?>">
 <input class="sc-js-input scFormObjectOdd css_departamento_obj" style="" id="id_sc_field_departamento" type=text name="departamento" value="<?php echo $this->form_encode_input($departamento) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_departamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_departamento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['municipio']))
   {
       $this->nm_new_label['municipio'] = "Municipio";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $municipio = $this->municipio;
   $sStyleHidden_municipio = '';
   if (isset($this->nmgp_cmp_hidden['municipio']) && $this->nmgp_cmp_hidden['municipio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['municipio']);
       $sStyleHidden_municipio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_municipio = 'display: none;';
   $sStyleReadInp_municipio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['municipio']) && $this->nmgp_cmp_readonly['municipio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['municipio']);
       $sStyleReadLab_municipio = '';
       $sStyleReadInp_municipio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['municipio']) && $this->nmgp_cmp_hidden['municipio'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="municipio" value="<?php echo $this->form_encode_input($this->municipio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_municipio_line" id="hidden_field_data_municipio" style="<?php echo $sStyleHidden_municipio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_municipio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_municipio_label"><span id="id_label_municipio"><?php echo $this->nm_new_label['municipio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["municipio"]) &&  $this->nmgp_cmp_readonly["municipio"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "SELECT MUNICIPIO FROM municipios";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'][] = $rs->fields[0];
              $nmgp_def_dados .= $rs->fields[0] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $municipio_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->municipio_1))
          {
              foreach ($this->municipio_1 as $tmp_municipio)
              {
                  if (trim($tmp_municipio) === trim($cadaselect[1])) { $municipio_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->municipio) === trim($cadaselect[1])) { $municipio_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="municipio" value="<?php echo $this->form_encode_input($municipio) . "\">" . $municipio_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "SELECT MUNICIPIO FROM municipios";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'][] = $rs->fields[0];
              $nmgp_def_dados .= $rs->fields[0] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $municipio_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->municipio_1))
          {
              foreach ($this->municipio_1 as $tmp_municipio)
              {
                  if (trim($tmp_municipio) === trim($cadaselect[1])) { $municipio_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->municipio) === trim($cadaselect[1])) { $municipio_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($municipio_look))
          {
              $municipio_look = $this->municipio;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_municipio\" class=\"css_municipio_line\" style=\"" .  $sStyleReadLab_municipio . "\">" . $this->form_encode_input($municipio_look) . "</span><span id=\"id_read_off_municipio\" style=\"" . $sStyleReadInp_municipio . "\">";
   echo " <span id=\"idAjaxSelect_municipio\"><select class=\"sc-js-input scFormObjectOdd css_municipio_obj\" style=\"\" id=\"id_sc_field_municipio\" name=\"municipio\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_municipio'][] = 'Municipio'; 
   echo "  <option value=\"Municipio\">Municipio</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->municipio) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->municipio)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_municipio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_municipio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['lugar']))
   {
       $this->nm_new_label['lugar'] = "Lugar";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lugar = $this->lugar;
   $sStyleHidden_lugar = '';
   if (isset($this->nmgp_cmp_hidden['lugar']) && $this->nmgp_cmp_hidden['lugar'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lugar']);
       $sStyleHidden_lugar = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lugar = 'display: none;';
   $sStyleReadInp_lugar = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lugar']) && $this->nmgp_cmp_readonly['lugar'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lugar']);
       $sStyleReadLab_lugar = '';
       $sStyleReadInp_lugar = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lugar']) && $this->nmgp_cmp_hidden['lugar'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="lugar" value="<?php echo $this->form_encode_input($this->lugar) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_lugar_line" id="hidden_field_data_lugar" style="<?php echo $sStyleHidden_lugar; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lugar_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_lugar_label"><span id="id_label_lugar"><?php echo $this->nm_new_label['lugar']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lugar"]) &&  $this->nmgp_cmp_readonly["lugar"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "SELECT NOMBRE_SEDE_EDUCATIVA, NOMBRE_SEDE_EDUCATIVA 
FROM colegios WHERE MUNICIPIO='$this->municipio'
ORDER BY NOMBRE_SEDE_EDUCATIVA";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $lugar_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->lugar_1))
          {
              foreach ($this->lugar_1 as $tmp_lugar)
              {
                  if (trim($tmp_lugar) === trim($cadaselect[1])) { $lugar_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->lugar) === trim($cadaselect[1])) { $lugar_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="lugar" value="<?php echo $this->form_encode_input($lugar) . "\">" . $lugar_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'] = array(); 
    }

   $old_value_fecharechazada = $this->fecharechazada;
   $old_value_fecharechazada_hora = $this->fecharechazada_hora;
   $old_value_fechaenatencion = $this->fechaenatencion;
   $old_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $old_value_fechafinalizada = $this->fechafinalizada;
   $old_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $old_value_fecha = $this->fecha;
   $old_value_idalerta = $this->idalerta;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecharechazada = $this->fecharechazada;
   $unformatted_value_fecharechazada_hora = $this->fecharechazada_hora;
   $unformatted_value_fechaenatencion = $this->fechaenatencion;
   $unformatted_value_fechaenatencion_hora = $this->fechaenatencion_hora;
   $unformatted_value_fechafinalizada = $this->fechafinalizada;
   $unformatted_value_fechafinalizada_hora = $this->fechafinalizada_hora;
   $unformatted_value_fecha = $this->fecha;
   $unformatted_value_idalerta = $this->idalerta;

   $nm_comando = "SELECT NOMBRE_SEDE_EDUCATIVA, NOMBRE_SEDE_EDUCATIVA 
FROM colegios WHERE MUNICIPIO='$this->municipio'
ORDER BY NOMBRE_SEDE_EDUCATIVA";

   $this->fecharechazada = $old_value_fecharechazada;
   $this->fecharechazada_hora = $old_value_fecharechazada_hora;
   $this->fechaenatencion = $old_value_fechaenatencion;
   $this->fechaenatencion_hora = $old_value_fechaenatencion_hora;
   $this->fechafinalizada = $old_value_fechafinalizada;
   $this->fechafinalizada_hora = $old_value_fechafinalizada_hora;
   $this->fecha = $old_value_fecha;
   $this->idalerta = $old_value_idalerta;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_lugar'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   $x = 0; 
   $lugar_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->lugar_1))
          {
              foreach ($this->lugar_1 as $tmp_lugar)
              {
                  if (trim($tmp_lugar) === trim($cadaselect[1])) { $lugar_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->lugar) === trim($cadaselect[1])) { $lugar_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($lugar_look))
          {
              $lugar_look = $this->lugar;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_lugar\" class=\"css_lugar_line\" style=\"" .  $sStyleReadLab_lugar . "\">" . $this->form_encode_input($lugar_look) . "</span><span id=\"id_read_off_lugar\" style=\"" . $sStyleReadInp_lugar . "\">";
   echo " <span id=\"idAjaxSelect_lugar\"><select class=\"sc-js-input scFormObjectOdd css_lugar_obj\" style=\"\" id=\"id_sc_field_lugar\" name=\"lugar\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->lugar) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->lugar)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lugar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lugar_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_lugar_dumb = ('' == $sStyleHidden_lugar) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_lugar_dumb" style="<?php echo $sStyleHidden_lugar_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['canal']))
    {
        $this->nm_new_label['canal'] = "Canal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $canal = $this->canal;
   if (!isset($this->nmgp_cmp_hidden['canal']))
   {
       $this->nmgp_cmp_hidden['canal'] = 'off';
   }
   $sStyleHidden_canal = '';
   if (isset($this->nmgp_cmp_hidden['canal']) && $this->nmgp_cmp_hidden['canal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['canal']);
       $sStyleHidden_canal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_canal = 'display: none;';
   $sStyleReadInp_canal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['canal']) && $this->nmgp_cmp_readonly['canal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['canal']);
       $sStyleReadLab_canal = '';
       $sStyleReadInp_canal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['canal']) && $this->nmgp_cmp_hidden['canal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="canal" value="<?php echo $this->form_encode_input($canal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_canal_line" id="hidden_field_data_canal" style="<?php echo $sStyleHidden_canal; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_canal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_canal_label"><span id="id_label_canal"><?php echo $this->nm_new_label['canal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["canal"]) &&  $this->nmgp_cmp_readonly["canal"] == "on") { 

 ?>
<input type="hidden" name="canal" value="<?php echo $this->form_encode_input($canal) . "\">" . $canal . ""; ?>
<?php } else { ?>
<span id="id_read_on_canal" class="sc-ui-readonly-canal css_canal_line" style="<?php echo $sStyleReadLab_canal; ?>"><?php echo $this->form_encode_input($this->canal); ?></span><span id="id_read_off_canal" style="white-space: nowrap;<?php echo $sStyleReadInp_canal; ?>">
 <input class="sc-js-input scFormObjectOdd css_canal_obj" style="" id="id_sc_field_canal" type=text name="canal" value="<?php echo $this->form_encode_input($canal) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_canal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_canal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['origenalerta']))
   {
       $this->nm_new_label['origenalerta'] = "Origenalerta";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $origenalerta = $this->origenalerta;
   $sStyleHidden_origenalerta = '';
   if (isset($this->nmgp_cmp_hidden['origenalerta']) && $this->nmgp_cmp_hidden['origenalerta'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['origenalerta']);
       $sStyleHidden_origenalerta = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_origenalerta = 'display: none;';
   $sStyleReadInp_origenalerta = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['origenalerta']) && $this->nmgp_cmp_readonly['origenalerta'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['origenalerta']);
       $sStyleReadLab_origenalerta = '';
       $sStyleReadInp_origenalerta = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['origenalerta']) && $this->nmgp_cmp_hidden['origenalerta'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="origenalerta" value="<?php echo $this->form_encode_input($this->origenalerta) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_origenalerta_line" id="hidden_field_data_origenalerta" style="<?php echo $sStyleHidden_origenalerta; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_origenalerta_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_origenalerta_label"><span id="id_label_origenalerta"><?php echo $this->nm_new_label['origenalerta']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["origenalerta"]) &&  $this->nmgp_cmp_readonly["origenalerta"] == "on") { 

$origenalerta_look = "";
 if ($this->origenalerta == "Soma") { $origenalerta_look .= "Soma" ;} 
 if ($this->origenalerta == "WhatsApp") { $origenalerta_look .= "WhatsApp" ;} 
 if ($this->origenalerta == "OjoVoz") { $origenalerta_look .= "OjoVoz" ;} 
 if ($this->origenalerta == "Verbal") { $origenalerta_look .= "Verbal" ;} 
 if ($this->origenalerta == "Escrita") { $origenalerta_look .= "Escrita" ;} 
 if ($this->origenalerta == "Correo") { $origenalerta_look .= "Correo" ;} 
 if (empty($origenalerta_look)) { $origenalerta_look = $this->origenalerta; }
?>
<input type="hidden" name="origenalerta" value="<?php echo $this->form_encode_input($origenalerta) . "\">" . $origenalerta_look . ""; ?>
<?php } else { ?>
<?php

$origenalerta_look = "";
 if ($this->origenalerta == "Soma") { $origenalerta_look .= "Soma" ;} 
 if ($this->origenalerta == "WhatsApp") { $origenalerta_look .= "WhatsApp" ;} 
 if ($this->origenalerta == "OjoVoz") { $origenalerta_look .= "OjoVoz" ;} 
 if ($this->origenalerta == "Verbal") { $origenalerta_look .= "Verbal" ;} 
 if ($this->origenalerta == "Escrita") { $origenalerta_look .= "Escrita" ;} 
 if ($this->origenalerta == "Correo") { $origenalerta_look .= "Correo" ;} 
 if (empty($origenalerta_look)) { $origenalerta_look = $this->origenalerta; }
?>
<span id="id_read_on_origenalerta" class="css_origenalerta_line"  style="<?php echo $sStyleReadLab_origenalerta; ?>"><?php echo $this->form_encode_input($origenalerta_look); ?></span><span id="id_read_off_origenalerta" style="<?php echo $sStyleReadInp_origenalerta; ?>">
 <span id="idAjaxSelect_origenalerta"><select class="sc-js-input scFormObjectOdd css_origenalerta_obj" style="" id="id_sc_field_origenalerta" name="origenalerta" size="1" alt="{type: 'select', enterTab: false}">
 <option value="Soma" <?php  if ($this->origenalerta == "Soma") { echo " selected" ;} ?>>Soma</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_origenalerta'][] = 'Soma'; ?>
 <option value="WhatsApp" <?php  if ($this->origenalerta == "WhatsApp") { echo " selected" ;} ?>>WhatsApp</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_origenalerta'][] = 'WhatsApp'; ?>
 <option value="OjoVoz" <?php  if ($this->origenalerta == "OjoVoz") { echo " selected" ;} ?>>OjoVoz</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_origenalerta'][] = 'OjoVoz'; ?>
 <option value="Verbal" <?php  if ($this->origenalerta == "Verbal") { echo " selected" ;} ?>>Verbal</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_origenalerta'][] = 'Verbal'; ?>
 <option value="Escrita" <?php  if ($this->origenalerta == "Escrita") { echo " selected" ;} ?>>Escrita</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_origenalerta'][] = 'Escrita'; ?>
 <option value="Correo" <?php  if ($this->origenalerta == "Correo") { echo " selected" ;} ?>>Correo</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['Lookup_origenalerta'][] = 'Correo'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_origenalerta_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_origenalerta_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['radicado']))
    {
        $this->nm_new_label['radicado'] = "Radicado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $radicado = $this->radicado;
   if (!isset($this->nmgp_cmp_hidden['radicado']))
   {
       $this->nmgp_cmp_hidden['radicado'] = 'off';
   }
   $sStyleHidden_radicado = '';
   if (isset($this->nmgp_cmp_hidden['radicado']) && $this->nmgp_cmp_hidden['radicado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['radicado']);
       $sStyleHidden_radicado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_radicado = 'display: none;';
   $sStyleReadInp_radicado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['radicado']) && $this->nmgp_cmp_readonly['radicado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['radicado']);
       $sStyleReadLab_radicado = '';
       $sStyleReadInp_radicado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['radicado']) && $this->nmgp_cmp_hidden['radicado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="radicado" value="<?php echo $this->form_encode_input($radicado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_radicado_line" id="hidden_field_data_radicado" style="<?php echo $sStyleHidden_radicado; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_radicado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_radicado_label"><span id="id_label_radicado"><?php echo $this->nm_new_label['radicado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["radicado"]) &&  $this->nmgp_cmp_readonly["radicado"] == "on") { 

 ?>
<input type="hidden" name="radicado" value="<?php echo $this->form_encode_input($radicado) . "\">" . $radicado . ""; ?>
<?php } else { ?>
<span id="id_read_on_radicado" class="sc-ui-readonly-radicado css_radicado_line" style="<?php echo $sStyleReadLab_radicado; ?>"><?php echo $this->form_encode_input($this->radicado); ?></span><span id="id_read_off_radicado" style="white-space: nowrap;<?php echo $sStyleReadInp_radicado; ?>">
 <input class="sc-js-input scFormObjectOdd css_radicado_obj" style="" id="id_sc_field_radicado" type=text name="radicado" value="<?php echo $this->form_encode_input($radicado) ?>"
 size=45 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_radicado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_radicado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_radicado_dumb = ('' == $sStyleHidden_radicado) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_radicado_dumb" style="<?php echo $sStyleHidden_radicado_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['alerta']))
    {
        $this->nm_new_label['alerta'] = "Alerta";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $alerta = $this->alerta;
   $sStyleHidden_alerta = '';
   if (isset($this->nmgp_cmp_hidden['alerta']) && $this->nmgp_cmp_hidden['alerta'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['alerta']);
       $sStyleHidden_alerta = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_alerta = 'display: none;';
   $sStyleReadInp_alerta = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['alerta']) && $this->nmgp_cmp_readonly['alerta'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['alerta']);
       $sStyleReadLab_alerta = '';
       $sStyleReadInp_alerta = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['alerta']) && $this->nmgp_cmp_hidden['alerta'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="alerta" value="<?php echo $this->form_encode_input($alerta) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_alerta_line" id="hidden_field_data_alerta" style="<?php echo $sStyleHidden_alerta; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_alerta_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_alerta_label"><span id="id_label_alerta"><?php echo $this->nm_new_label['alerta']; ?></span></span><br>
<?php
$alerta_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($alerta));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["alerta"]) &&  $this->nmgp_cmp_readonly["alerta"] == "on") { 

 ?>
<input type="hidden" name="alerta" value="<?php echo $this->form_encode_input($alerta) . "\">" . $alerta_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_alerta" class="sc-ui-readonly-alerta css_alerta_line" style="<?php echo $sStyleReadLab_alerta; ?>"><?php echo $this->form_encode_input($alerta_val); ?></span><span id="id_read_off_alerta" style="white-space: nowrap;<?php echo $sStyleReadInp_alerta; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_alerta_obj" style="white-space: pre-wrap;" name="alerta" id="id_sc_field_alerta" rows="2" cols="90"
 alt="{datatype: 'text', maxLength: 3000, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $alerta; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_alerta_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_alerta_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['rutavideo']))
    {
        $this->nm_new_label['rutavideo'] = "Rutavideo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rutavideo = $this->rutavideo;
   if (!isset($this->nmgp_cmp_hidden['rutavideo']))
   {
       $this->nmgp_cmp_hidden['rutavideo'] = 'off';
   }
   $sStyleHidden_rutavideo = '';
   if (isset($this->nmgp_cmp_hidden['rutavideo']) && $this->nmgp_cmp_hidden['rutavideo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rutavideo']);
       $sStyleHidden_rutavideo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rutavideo = 'display: none;';
   $sStyleReadInp_rutavideo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rutavideo']) && $this->nmgp_cmp_readonly['rutavideo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rutavideo']);
       $sStyleReadLab_rutavideo = '';
       $sStyleReadInp_rutavideo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rutavideo']) && $this->nmgp_cmp_hidden['rutavideo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="rutavideo" value="<?php echo $this->form_encode_input($rutavideo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_rutavideo_line" id="hidden_field_data_rutavideo" style="<?php echo $sStyleHidden_rutavideo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_rutavideo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_rutavideo_label"><span id="id_label_rutavideo"><?php echo $this->nm_new_label['rutavideo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rutavideo"]) &&  $this->nmgp_cmp_readonly["rutavideo"] == "on") { 

 ?>
<input type="hidden" name="rutavideo" value="<?php echo $this->form_encode_input($rutavideo) . "\"><img id=\"rutavideo_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><span id=\"id_ajax_doc_rutavideo\"><a href=\"javascript:nm_mostra_doc('0', '" . str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_rutavideo, 3)) . "', 'form_alerta')\">" . $rutavideo . "</a></span>"; ?>
<?php } else { ?>
<span id="id_read_on_rutavideo" class="scFormLinkOdd sc-ui-readonly-rutavideo css_rutavideo_line" style="<?php echo $sStyleReadLab_rutavideo; ?>"><a href="javascript:nm_mostra_doc('0', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_rutavideo, 3)); ?>', 'form_alerta')"><?php echo $this->form_encode_input($this->rutavideo); ?></a></span><span id="id_read_off_rutavideo" style="white-space: nowrap;<?php echo $sStyleReadInp_rutavideo; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-rutavideo" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_rutavideo_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="rutavideo[]" id="id_sc_field_rutavideo" ></span></span>
<span id="chk_ajax_img_rutavideo"<?php if ($this->nmgp_opcao == "novo" || empty($rutavideo)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="rutavideo_limpa" value="<?php echo $rutavideo_limpa . '" '; if ($rutavideo_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span>
<?php 
   $rutavideo = trim($rutavideo); 
   if (!empty($rutavideo)) 
   { 
       $nm_img_icone = $this->gera_icone($rutavideo); 
       if (!empty($nm_img_icone)) 
       { 
           $nm_img_icone = "<img src=\"$nm_img_icone\" id=\"id_ajax_doc_icon_rutavideo\">&nbsp;";
       } 
       echo  $nm_img_icone;
   } 
?> 
<img id="rutavideo_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><span id="id_ajax_doc_rutavideo"><a href="javascript:nm_mostra_doc('0', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_rutavideo, 3)); ?>', 'form_alerta')"><?php echo $rutavideo ?></a></span><div id="id_sc_dragdrop_rutavideo" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragfile'] ?></div>
<div id="id_img_loader_rutavideo" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_rutavideo" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rutavideo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rutavideo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['rutaaudio']))
    {
        $this->nm_new_label['rutaaudio'] = "Rutaaudio";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rutaaudio = $this->rutaaudio;
   $sStyleHidden_rutaaudio = '';
   if (isset($this->nmgp_cmp_hidden['rutaaudio']) && $this->nmgp_cmp_hidden['rutaaudio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rutaaudio']);
       $sStyleHidden_rutaaudio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rutaaudio = 'display: none;';
   $sStyleReadInp_rutaaudio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rutaaudio']) && $this->nmgp_cmp_readonly['rutaaudio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rutaaudio']);
       $sStyleReadLab_rutaaudio = '';
       $sStyleReadInp_rutaaudio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rutaaudio']) && $this->nmgp_cmp_hidden['rutaaudio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="rutaaudio" value="<?php echo $this->form_encode_input($rutaaudio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_rutaaudio_line" id="hidden_field_data_rutaaudio" style="<?php echo $sStyleHidden_rutaaudio; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_rutaaudio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_rutaaudio_label"><span id="id_label_rutaaudio"><?php echo $this->nm_new_label['rutaaudio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rutaaudio"]) &&  $this->nmgp_cmp_readonly["rutaaudio"] == "on") { 

 ?>
<input type="hidden" name="rutaaudio" value="<?php echo $this->form_encode_input($rutaaudio) . "\"><img id=\"rutaaudio_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><span id=\"id_ajax_doc_rutaaudio\"><a href=\"javascript:nm_mostra_doc('1', '" . str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_rutaaudio, 3)) . "', 'form_alerta')\">" . $rutaaudio . "</a></span>"; ?>
<?php } else { ?>
<span id="id_read_on_rutaaudio" class="scFormLinkOdd sc-ui-readonly-rutaaudio css_rutaaudio_line" style="<?php echo $sStyleReadLab_rutaaudio; ?>"><a href="javascript:nm_mostra_doc('1', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_rutaaudio, 3)); ?>', 'form_alerta')"><?php echo $this->form_encode_input($this->rutaaudio); ?></a></span><span id="id_read_off_rutaaudio" style="white-space: nowrap;<?php echo $sStyleReadInp_rutaaudio; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-rutaaudio" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_rutaaudio_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="rutaaudio[]" id="id_sc_field_rutaaudio" ></span></span>
<span id="chk_ajax_img_rutaaudio"<?php if ($this->nmgp_opcao == "novo" || empty($rutaaudio)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="rutaaudio_limpa" value="<?php echo $rutaaudio_limpa . '" '; if ($rutaaudio_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="rutaaudio_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><span id="id_ajax_doc_rutaaudio"><a href="javascript:nm_mostra_doc('1', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_rutaaudio, 3)); ?>', 'form_alerta')"><?php echo $rutaaudio ?></a></span><div id="id_sc_dragdrop_rutaaudio" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragfile'] ?></div>
<div id="id_img_loader_rutaaudio" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_rutaaudio" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rutaaudio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rutaaudio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['rutaimagen']))
    {
        $this->nm_new_label['rutaimagen'] = "Rutaimagen";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $rutaimagen = $this->rutaimagen;
   $sStyleHidden_rutaimagen = '';
   if (isset($this->nmgp_cmp_hidden['rutaimagen']) && $this->nmgp_cmp_hidden['rutaimagen'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['rutaimagen']);
       $sStyleHidden_rutaimagen = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_rutaimagen = 'display: none;';
   $sStyleReadInp_rutaimagen = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['rutaimagen']) && $this->nmgp_cmp_readonly['rutaimagen'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['rutaimagen']);
       $sStyleReadLab_rutaimagen = '';
       $sStyleReadInp_rutaimagen = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['rutaimagen']) && $this->nmgp_cmp_hidden['rutaimagen'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="rutaimagen" value="<?php echo $this->form_encode_input($rutaimagen) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_rutaimagen_line" id="hidden_field_data_rutaimagen" style="<?php echo $sStyleHidden_rutaimagen; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_rutaimagen_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_rutaimagen_label"><span id="id_label_rutaimagen"><?php echo $this->nm_new_label['rutaimagen']; ?></span></span><br>
 <script>var var_ajax_img_rutaimagen = '<?php echo $out1_rutaimagen; ?>';</script><?php if (!empty($out_rutaimagen)){ echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_rutaimagen, '" . $this->nmgp_return_img['rutaimagen'][0] . "', '" . $this->nmgp_return_img['rutaimagen'][1] . "')\"><img id=\"id_ajax_img_rutaimagen\" border=\"0\" src=\"$out_rutaimagen\"></a> &nbsp;" . "<span id=\"txt_ajax_img_rutaimagen\" style=\"display: none\">" . $rutaimagen . "</span>"; if (!empty($rutaimagen)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_rutaimagen\" border=\"0\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_rutaimagen\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["rutaimagen"]) &&  $this->nmgp_cmp_readonly["rutaimagen"] == "on") { 

 ?>
<img id=\"rutaimagen_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="rutaimagen" value="<?php echo $this->form_encode_input($rutaimagen) . "\">" . $rutaimagen . ""; ?>
<?php } else { ?>
<span id="id_read_off_rutaimagen" style="white-space: nowrap;<?php echo $sStyleReadInp_rutaimagen; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-rutaimagen" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_rutaimagen_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="rutaimagen[]" id="id_sc_field_rutaimagen" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_rutaimagen"<?php if ($this->nmgp_opcao == "novo" || empty($rutaimagen)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="rutaimagen_limpa" value="<?php echo $rutaimagen_limpa . '" '; if ($rutaimagen_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="rutaimagen_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_rutaimagen" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_rutaimagen" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_rutaimagen" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_rutaimagen_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_rutaimagen_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
<?php
  }
?>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage('', "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", false, 0, false, "Ok", 0, 0, 0, 0, "", "", "", true, false);
</script> 
<?php
      }
?>
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['masterValue']);
?>
}
<?php
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_alerta_mob");
 parent.scAjaxDetailHeight("form_alerta_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_alerta_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_alerta_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<iframe id="sc-id-download-iframe" name="sc_name_download_iframe" style="display: none"></iframe>
</body> 
</html> 
