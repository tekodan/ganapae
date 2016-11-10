<?php
class form_accionxalertxresponsable_form extends form_accionxalertxresponsable_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - accionxalertxresponsable"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - accionxalertxresponsable"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
<?php
header("X-XSS-Protection: 0");
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
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_accionxalertxresponsable/form_accionxalertxresponsable_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_accionxalertxresponsable_sajax_js.php");
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
    nm_sumario = "[<?php echo $this->Ini->Nm_lang['lang_othr_smry_info']?>]";
    nm_sumario = nm_sumario.replace("?start?", reg_ini);
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_accionxalertxresponsable_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {


  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

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

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
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
 include_once("form_accionxalertxresponsable_js0.php");
?>
<script type="text/javascript"> 
  sc_quant_excl = <?php echo count($sc_check_excl); ?>; 
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
               action="./" 
               target="_self"> 
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="">
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
<input type="hidden" name="upload_file_row" value="">
<?php
$_SESSION['scriptcase']['error_span_title']['form_accionxalertxresponsable'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_accionxalertxresponsable'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><td class="scFormErrorMessage"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorMessageFont" style="padding: 0px; vertical-align: top; width: 100%"><span id="id_error_display_table_text"></span></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
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
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['mostra_cab'] != "N"))
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
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - accionxalertxresponsable"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - accionxalertxresponsable"; } ?></span></td>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['fast_search'][2] : "";
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
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($this->Embutida_form) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "do_ajax_form_accionxalertxresponsable_add_new_line(); return false;", "do_ajax_form_accionxalertxresponsable_add_new_line(); return false;", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo');", "nm_move ('novo');", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir');", "nm_atualiza ('incluir');", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "" . $this->NM_cancel_insert_new . " document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar');", "nm_atualiza ('alterar');", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['Finalizar'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "finalizar", "sc_btn_Finalizar()", "sc_btn_Finalizar()", "sc_Finalizar_top", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['Finalizar'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "finalizar", "sc_btn_Finalizar()", "sc_btn_Finalizar()", "sc_Finalizar_top", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R")
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
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['empty_filter'] = true;
       }
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
   if (!isset($this->nmgp_cmp_hidden['cedula_']))
   {
       $this->nmgp_cmp_hidden['cedula_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['verificacion_']))
   {
       $this->nmgp_cmp_hidden['verificacion_'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;">   <tr>
<?php
$orderColName = '';
$orderColOrient = '';
?>
    <script type="text/javascript">
     var orderImgAsc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc ?>";
     var orderImgDesc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc ?>";
     var orderImgNone = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort ?>";
     var orderColName = "";
     function scSetOrderColumn(clickedColumn) {
      $(".sc-ui-img-order-column").attr("src", orderImgNone);
      if (clickedColumn != orderColName) {
       orderColName = clickedColumn;
       orderColOrient = orderImgAsc;
      }
      else if ("" != orderColName) {
       orderColOrient = orderColOrient == orderImgAsc ? orderImgDesc : orderImgAsc;
      }
      else {
       orderColName = "";
       orderColOrient = "";
      }
      $("#sc-id-img-order-" + orderColName).attr("src", orderColOrient);
     }
    </script>
<?php
     $Col_span = "";


       if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") { $Col_span = " colspan=2"; }
    if (!$this->Embutida_form && $this->nmgp_opcao == "novo") { $Col_span = " colspan=2"; }
 ?>

    <TD class="scFormLabelOddMult" style="display: none;" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="scFormLabelOddMult"  width="10">  </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="scFormLabelOddMult"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if ((!isset($this->nmgp_cmp_hidden['id_']) || $this->nmgp_cmp_hidden['id_'] == 'on') && ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir"))) { 
      if (!isset($this->nm_new_label['id_'])) {
          $this->nm_new_label['id_'] = "Id"; } ?>

    <TD class="scFormLabelOddMult css_id__label" id="hidden_field_label_id_" style="<?php echo $sStyleHidden_id_; ?>" > <?php echo $this->nm_new_label['id_'] ?> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['idresponsablealerta_']) && $this->nmgp_cmp_hidden['idresponsablealerta_'] == 'off') { $sStyleHidden_idresponsablealerta_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['idresponsablealerta_']) || $this->nmgp_cmp_hidden['idresponsablealerta_'] == 'on') {
      if (!isset($this->nm_new_label['idresponsablealerta_'])) {
          $this->nm_new_label['idresponsablealerta_'] = "Id.Resp"; } ?>

    <TD class="scFormLabelOddMult css_idresponsablealerta__label" id="hidden_field_label_idresponsablealerta_" style="<?php echo $sStyleHidden_idresponsablealerta_; ?>" > <?php echo $this->nm_new_label['idresponsablealerta_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['fecha_']) && $this->nmgp_cmp_hidden['fecha_'] == 'off') { $sStyleHidden_fecha_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['fecha_']) || $this->nmgp_cmp_hidden['fecha_'] == 'on') {
      if (!isset($this->nm_new_label['fecha_'])) {
          $this->nm_new_label['fecha_'] = "Fecha"; } ?>

    <TD class="scFormLabelOddMult css_fecha__label" id="hidden_field_label_fecha_" style="<?php echo $sStyleHidden_fecha_; ?>" > <?php echo $this->nm_new_label['fecha_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['accion_']) && $this->nmgp_cmp_hidden['accion_'] == 'off') { $sStyleHidden_accion_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['accion_']) || $this->nmgp_cmp_hidden['accion_'] == 'on') {
      if (!isset($this->nm_new_label['accion_'])) {
          $this->nm_new_label['accion_'] = "Accion"; } ?>

    <TD class="scFormLabelOddMult css_accion__label" id="hidden_field_label_accion_" style="<?php echo $sStyleHidden_accion_; ?>" > <?php echo $this->nm_new_label['accion_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['cedula_']) && $this->nmgp_cmp_hidden['cedula_'] == 'off') { $sStyleHidden_cedula_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['cedula_']) || $this->nmgp_cmp_hidden['cedula_'] == 'on') {
      if (!isset($this->nm_new_label['cedula_'])) {
          $this->nm_new_label['cedula_'] = "Cedula"; } ?>

    <TD class="scFormLabelOddMult css_cedula__label" id="hidden_field_label_cedula_" style="<?php echo $sStyleHidden_cedula_; ?>" > <?php echo $this->nm_new_label['cedula_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['verificacion_']) && $this->nmgp_cmp_hidden['verificacion_'] == 'off') { $sStyleHidden_verificacion_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['verificacion_']) || $this->nmgp_cmp_hidden['verificacion_'] == 'on') {
      if (!isset($this->nm_new_label['verificacion_'])) {
          $this->nm_new_label['verificacion_'] = "Verificacion"; } ?>

    <TD class="scFormLabelOddMult css_verificacion__label" id="hidden_field_label_verificacion_" style="<?php echo $sStyleHidden_verificacion_; ?>" > <?php echo $this->nm_new_label['verificacion_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['adjunto_']) && $this->nmgp_cmp_hidden['adjunto_'] == 'off') { $sStyleHidden_adjunto_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['adjunto_']) || $this->nmgp_cmp_hidden['adjunto_'] == 'on') {
      if (!isset($this->nm_new_label['adjunto_'])) {
          $this->nm_new_label['adjunto_'] = "Adjunto"; } ?>

    <TD class="scFormLabelOddMult css_adjunto__label" id="hidden_field_label_adjunto_" style="<?php echo $sStyleHidden_adjunto_; ?>" > <?php echo $this->nm_new_label['adjunto_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['descripcionadjunto_']) && $this->nmgp_cmp_hidden['descripcionadjunto_'] == 'off') { $sStyleHidden_descripcionadjunto_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['descripcionadjunto_']) || $this->nmgp_cmp_hidden['descripcionadjunto_'] == 'on') {
      if (!isset($this->nm_new_label['descripcionadjunto_'])) {
          $this->nm_new_label['descripcionadjunto_'] = "Descripcion"; } ?>

    <TD class="scFormLabelOddMult css_descripcionadjunto__label" id="hidden_field_label_descripcionadjunto_" style="<?php echo $sStyleHidden_descripcionadjunto_; ?>" > <?php echo $this->nm_new_label['descripcionadjunto_'] ?> </TD>
   <?php } ?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert; 
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_form_accionxalertxresponsable);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_accionxalertxresponsable = $this->form_vert_form_accionxalertxresponsable;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_accionxalertxresponsable))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['id_']))
           {
               $this->nmgp_cmp_readonly['id_'] = 'on';
           }
   foreach ($this->form_vert_form_accionxalertxresponsable as $sc_seq_vert => $sc_lixo)
   {
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['id_'] = true;
           $this->nmgp_cmp_readonly['idresponsablealerta_'] = true;
           $this->nmgp_cmp_readonly['fecha_'] = true;
           $this->nmgp_cmp_readonly['accion_'] = true;
           $this->nmgp_cmp_readonly['cedula_'] = true;
           $this->nmgp_cmp_readonly['verificacion_'] = true;
           $this->nmgp_cmp_readonly['adjunto_'] = true;
           $this->nmgp_cmp_readonly['descripcionadjunto_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['id_']) || $this->nmgp_cmp_readonly['id_'] != "on") {$this->nmgp_cmp_readonly['id_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['idresponsablealerta_']) || $this->nmgp_cmp_readonly['idresponsablealerta_'] != "on") {$this->nmgp_cmp_readonly['idresponsablealerta_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['fecha_']) || $this->nmgp_cmp_readonly['fecha_'] != "on") {$this->nmgp_cmp_readonly['fecha_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['accion_']) || $this->nmgp_cmp_readonly['accion_'] != "on") {$this->nmgp_cmp_readonly['accion_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['cedula_']) || $this->nmgp_cmp_readonly['cedula_'] != "on") {$this->nmgp_cmp_readonly['cedula_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['verificacion_']) || $this->nmgp_cmp_readonly['verificacion_'] != "on") {$this->nmgp_cmp_readonly['verificacion_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['adjunto_']) || $this->nmgp_cmp_readonly['adjunto_'] != "on") {$this->nmgp_cmp_readonly['adjunto_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['descripcionadjunto_']) || $this->nmgp_cmp_readonly['descripcionadjunto_'] != "on") {$this->nmgp_cmp_readonly['descripcionadjunto_'] = false;}
       }
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
        $this->id_ = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['id_']; 
       $id_ = $this->id_; 
       $sStyleHidden_id_ = '';
       if (isset($sCheckRead_id_))
       {
           unset($sCheckRead_id_);
       }
       if (isset($this->nmgp_cmp_readonly['id_']))
       {
           $sCheckRead_id_ = $this->nmgp_cmp_readonly['id_'];
       }
       if (isset($this->nmgp_cmp_hidden['id_']) && $this->nmgp_cmp_hidden['id_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['id_']);
           $sStyleHidden_id_ = 'display: none;';
       }
       $bTestReadOnly_id_ = true;
       $sStyleReadLab_id_ = 'display: none;';
       $sStyleReadInp_id_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["id_"]) &&  $this->nmgp_cmp_readonly["id_"] == "on"))
       {
           $bTestReadOnly_id_ = false;
           unset($this->nmgp_cmp_readonly['id_']);
           $sStyleReadLab_id_ = '';
           $sStyleReadInp_id_ = 'display: none;';
       }
       $this->idresponsablealerta_ = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['idresponsablealerta_']; 
       $idresponsablealerta_ = $this->idresponsablealerta_; 
       $sStyleHidden_idresponsablealerta_ = '';
       if (isset($sCheckRead_idresponsablealerta_))
       {
           unset($sCheckRead_idresponsablealerta_);
       }
       if (isset($this->nmgp_cmp_readonly['idresponsablealerta_']))
       {
           $sCheckRead_idresponsablealerta_ = $this->nmgp_cmp_readonly['idresponsablealerta_'];
       }
       if (isset($this->nmgp_cmp_hidden['idresponsablealerta_']) && $this->nmgp_cmp_hidden['idresponsablealerta_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['idresponsablealerta_']);
           $sStyleHidden_idresponsablealerta_ = 'display: none;';
       }
       $bTestReadOnly_idresponsablealerta_ = true;
       $sStyleReadLab_idresponsablealerta_ = 'display: none;';
       $sStyleReadInp_idresponsablealerta_ = '';
       if (isset($this->nmgp_cmp_readonly['idresponsablealerta_']) && $this->nmgp_cmp_readonly['idresponsablealerta_'] == 'on')
       {
           $bTestReadOnly_idresponsablealerta_ = false;
           unset($this->nmgp_cmp_readonly['idresponsablealerta_']);
           $sStyleReadLab_idresponsablealerta_ = '';
           $sStyleReadInp_idresponsablealerta_ = 'display: none;';
       }
       $this->fecha_ = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['fecha_']; 
       $fecha_ = $this->fecha_; 
       $sStyleHidden_fecha_ = '';
       if (isset($sCheckRead_fecha_))
       {
           unset($sCheckRead_fecha_);
       }
       if (isset($this->nmgp_cmp_readonly['fecha_']))
       {
           $sCheckRead_fecha_ = $this->nmgp_cmp_readonly['fecha_'];
       }
       if (isset($this->nmgp_cmp_hidden['fecha_']) && $this->nmgp_cmp_hidden['fecha_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['fecha_']);
           $sStyleHidden_fecha_ = 'display: none;';
       }
       $bTestReadOnly_fecha_ = true;
       $sStyleReadLab_fecha_ = 'display: none;';
       $sStyleReadInp_fecha_ = '';
       if (isset($this->nmgp_cmp_readonly['fecha_']) && $this->nmgp_cmp_readonly['fecha_'] == 'on')
       {
           $bTestReadOnly_fecha_ = false;
           unset($this->nmgp_cmp_readonly['fecha_']);
           $sStyleReadLab_fecha_ = '';
           $sStyleReadInp_fecha_ = 'display: none;';
       }
       $this->accion_ = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['accion_']; 
       $accion_ = $this->accion_; 
       $accion__tmp = str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $accion_);
       $accion__val = nl2br($accion__tmp);
       $sStyleHidden_accion_ = '';
       if (isset($sCheckRead_accion_))
       {
           unset($sCheckRead_accion_);
       }
       if (isset($this->nmgp_cmp_readonly['accion_']))
       {
           $sCheckRead_accion_ = $this->nmgp_cmp_readonly['accion_'];
       }
       if (isset($this->nmgp_cmp_hidden['accion_']) && $this->nmgp_cmp_hidden['accion_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['accion_']);
           $sStyleHidden_accion_ = 'display: none;';
       }
       $bTestReadOnly_accion_ = true;
       $sStyleReadLab_accion_ = 'display: none;';
       $sStyleReadInp_accion_ = '';
       if (isset($this->nmgp_cmp_readonly['accion_']) && $this->nmgp_cmp_readonly['accion_'] == 'on')
       {
           $bTestReadOnly_accion_ = false;
           unset($this->nmgp_cmp_readonly['accion_']);
           $sStyleReadLab_accion_ = '';
           $sStyleReadInp_accion_ = 'display: none;';
       }
       $this->cedula_ = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['cedula_']; 
       $cedula_ = $this->cedula_; 
       if (!isset($this->nmgp_cmp_hidden['cedula_']))
       {
           $this->nmgp_cmp_hidden['cedula_'] = 'off';
       }
       $sStyleHidden_cedula_ = '';
       if (isset($sCheckRead_cedula_))
       {
           unset($sCheckRead_cedula_);
       }
       if (isset($this->nmgp_cmp_readonly['cedula_']))
       {
           $sCheckRead_cedula_ = $this->nmgp_cmp_readonly['cedula_'];
       }
       if (isset($this->nmgp_cmp_hidden['cedula_']) && $this->nmgp_cmp_hidden['cedula_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['cedula_']);
           $sStyleHidden_cedula_ = 'display: none;';
       }
       $bTestReadOnly_cedula_ = true;
       $sStyleReadLab_cedula_ = 'display: none;';
       $sStyleReadInp_cedula_ = '';
       if (isset($this->nmgp_cmp_readonly['cedula_']) && $this->nmgp_cmp_readonly['cedula_'] == 'on')
       {
           $bTestReadOnly_cedula_ = false;
           unset($this->nmgp_cmp_readonly['cedula_']);
           $sStyleReadLab_cedula_ = '';
           $sStyleReadInp_cedula_ = 'display: none;';
       }
       $this->verificacion_ = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['verificacion_']; 
       $verificacion_ = $this->verificacion_; 
       if (!isset($this->nmgp_cmp_hidden['verificacion_']))
       {
           $this->nmgp_cmp_hidden['verificacion_'] = 'off';
       }
       $sStyleHidden_verificacion_ = '';
       if (isset($sCheckRead_verificacion_))
       {
           unset($sCheckRead_verificacion_);
       }
       if (isset($this->nmgp_cmp_readonly['verificacion_']))
       {
           $sCheckRead_verificacion_ = $this->nmgp_cmp_readonly['verificacion_'];
       }
       if (isset($this->nmgp_cmp_hidden['verificacion_']) && $this->nmgp_cmp_hidden['verificacion_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['verificacion_']);
           $sStyleHidden_verificacion_ = 'display: none;';
       }
       $bTestReadOnly_verificacion_ = true;
       $sStyleReadLab_verificacion_ = 'display: none;';
       $sStyleReadInp_verificacion_ = '';
       if (isset($this->nmgp_cmp_readonly['verificacion_']) && $this->nmgp_cmp_readonly['verificacion_'] == 'on')
       {
           $bTestReadOnly_verificacion_ = false;
           unset($this->nmgp_cmp_readonly['verificacion_']);
           $sStyleReadLab_verificacion_ = '';
           $sStyleReadInp_verificacion_ = 'display: none;';
       }
       $this->adjunto_ = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['adjunto_']; 
       $adjunto_ = $this->adjunto_; 
       $this->adjunto__limpa = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['adjunto__limpa']; 
       $adjunto__limpa = $this->adjunto__limpa; 
       $sTmpFile_adjunto_ = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['adjunto__download_filename'];
       $sStyleHidden_adjunto_ = '';
       if (isset($sCheckRead_adjunto_))
       {
           unset($sCheckRead_adjunto_);
       }
       if (isset($this->nmgp_cmp_readonly['adjunto_']))
       {
           $sCheckRead_adjunto_ = $this->nmgp_cmp_readonly['adjunto_'];
       }
       if (isset($this->nmgp_cmp_hidden['adjunto_']) && $this->nmgp_cmp_hidden['adjunto_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['adjunto_']);
           $sStyleHidden_adjunto_ = 'display: none;';
       }
       $bTestReadOnly_adjunto_ = true;
       $sStyleReadLab_adjunto_ = 'display: none;';
       $sStyleReadInp_adjunto_ = '';
       if (isset($this->nmgp_cmp_readonly['adjunto_']) && $this->nmgp_cmp_readonly['adjunto_'] == 'on')
       {
           $bTestReadOnly_adjunto_ = false;
           unset($this->nmgp_cmp_readonly['adjunto_']);
           $sStyleReadLab_adjunto_ = '';
           $sStyleReadInp_adjunto_ = 'display: none;';
       }
       $this->descripcionadjunto_ = $this->form_vert_form_accionxalertxresponsable[$sc_seq_vert]['descripcionadjunto_']; 
       $descripcionadjunto_ = $this->descripcionadjunto_; 
       $descripcionadjunto__tmp = str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $descripcionadjunto_);
       $descripcionadjunto__val = nl2br($descripcionadjunto__tmp);
       $sStyleHidden_descripcionadjunto_ = '';
       if (isset($sCheckRead_descripcionadjunto_))
       {
           unset($sCheckRead_descripcionadjunto_);
       }
       if (isset($this->nmgp_cmp_readonly['descripcionadjunto_']))
       {
           $sCheckRead_descripcionadjunto_ = $this->nmgp_cmp_readonly['descripcionadjunto_'];
       }
       if (isset($this->nmgp_cmp_hidden['descripcionadjunto_']) && $this->nmgp_cmp_hidden['descripcionadjunto_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['descripcionadjunto_']);
           $sStyleHidden_descripcionadjunto_ = 'display: none;';
       }
       $bTestReadOnly_descripcionadjunto_ = true;
       $sStyleReadLab_descripcionadjunto_ = 'display: none;';
       $sStyleReadInp_descripcionadjunto_ = '';
       if (isset($this->nmgp_cmp_readonly['descripcionadjunto_']) && $this->nmgp_cmp_readonly['descripcionadjunto_'] == 'on')
       {
           $bTestReadOnly_descripcionadjunto_ = false;
           unset($this->nmgp_cmp_readonly['descripcionadjunto_']);
           $sStyleReadLab_descripcionadjunto_ = '';
           $sStyleReadInp_descripcionadjunto_ = 'display: none;';
       }

       $nm_cor_fun_vert = ($nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?>>
<input type="hidden" name="adjunto__ul_name<?php echo $sc_seq_vert; ?>" id="id_sc_field_adjunto__ul_name<?php echo $sc_seq_vert; ?>" value="<?php echo $this->form_encode_input($this->adjunto__ul_name);?>">
<input type="hidden" name="adjunto__ul_type<?php echo $sc_seq_vert; ?>" id="id_sc_field_adjunto__ul_type<?php echo $sc_seq_vert; ?>" value="<?php echo $this->form_encode_input($this->adjunto__ul_type);?>">


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>"  style="display: none;"> <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\""; if (in_array($sc_seq_vert, $sc_check_excl)) { echo " checked";} ?> onclick="if (this.checked) {sc_quant_excl++; } else {sc_quant_excl--; }" class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if (!$this->Embutida_form && $this->nmgp_opcao == "novo") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\"" ; if (in_array($sc_seq_vert, $sc_check_incl)) { echo " checked";} ?> class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_botoes['delete'] == "on" && $this->nmgp_opcao != "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_botoes['update'] == "on" && $this->nmgp_opcao != "novo") {
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_accionxalertxresponsable_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_accionxalertxresponsable_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_accionxalertxresponsable_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_accionxalertxresponsable_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_accionxalertxresponsable_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_accionxalertxresponsable_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['id_']) && $this->nmgp_cmp_hidden['id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOddMult css_id__line" id="hidden_field_data_id_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_id_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_id__line" style="vertical-align: top;padding: 0px"><span id="id_read_on_id_<?php echo $sc_seq_vert ?>" class="css_id__line" style="<?php echo $sStyleReadLab_id_; ?>"><?php echo $this->form_encode_input($this->id_); ?></span><span id="id_read_off_id_<?php echo $sc_seq_vert ?>" style="<?php echo $sStyleReadInp_id_; ?>"><input type="hidden" id="id_sc_field_id_<?php echo $sc_seq_vert ?>" name="id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($id_) . "\">"?><span id="id_ajax_label_id_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($id_); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_id_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_id_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['idresponsablealerta_']) && $this->nmgp_cmp_hidden['idresponsablealerta_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idresponsablealerta_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idresponsablealerta_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_idresponsablealerta__line" id="hidden_field_data_idresponsablealerta_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_idresponsablealerta_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_idresponsablealerta__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="idresponsablealerta_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idresponsablealerta_); ?>"><span id="id_ajax_label_idresponsablealerta_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($idresponsablealerta_); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idresponsablealerta_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idresponsablealerta_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['fecha_']) && $this->nmgp_cmp_hidden['fecha_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fecha_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($fecha_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_fecha__line" id="hidden_field_data_fecha_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_fecha_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_fecha__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="fecha_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($fecha_); ?>"><span id="id_ajax_label_fecha_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($fecha_); ?></span>
<?php
$tmp_form_data = $this->field_config['fecha_']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fecha_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fecha_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['accion_']) && $this->nmgp_cmp_hidden['accion_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="accion_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($accion_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_accion__line" id="hidden_field_data_accion_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_accion_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_accion__line" style="vertical-align: top;padding: 0px">
<?php
$accion__val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($accion_));

?>

<?php if ($bTestReadOnly_accion_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["accion_"]) &&  $this->nmgp_cmp_readonly["accion_"] == "on") { 

 ?>
<input type="hidden" name="accion_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($accion_) . "\">" . $accion__val . ""; ?>
<?php } else { ?>
<span id="id_read_on_accion_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-accion_<?php echo $sc_seq_vert ?> css_accion__line" style="<?php echo $sStyleReadLab_accion_; ?>"><?php echo $this->form_encode_input($accion__val); ?></span><span id="id_read_off_accion_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_accion_; ?>">
 <textarea  class="sc-js-input scFormObjectOddMult css_accion__obj" style="white-space: pre-wrap;" name="accion_<?php echo $sc_seq_vert ?>" id="id_sc_field_accion_<?php echo $sc_seq_vert ?>" rows="2" cols="30"
 alt="{datatype: 'text', maxLength: 1000, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $accion_; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_accion_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_accion_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['cedula_']) && $this->nmgp_cmp_hidden['cedula_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cedula_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($cedula_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_cedula__line" id="hidden_field_data_cedula_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_cedula_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_cedula__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_cedula_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cedula_"]) &&  $this->nmgp_cmp_readonly["cedula_"] == "on") { 

 ?>
<input type="hidden" name="cedula_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($cedula_) . "\">" . $cedula_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_cedula_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-cedula_<?php echo $sc_seq_vert ?> css_cedula__line" style="<?php echo $sStyleReadLab_cedula_; ?>"><?php echo $this->form_encode_input($this->cedula_); ?></span><span id="id_read_off_cedula_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cedula_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_cedula__obj" style="" id="id_sc_field_cedula_<?php echo $sc_seq_vert ?>" type=text name="cedula_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($cedula_) ?>"
 size=45 maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cedula_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cedula_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['verificacion_']) && $this->nmgp_cmp_hidden['verificacion_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="verificacion_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->verificacion_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->verificacion__1 = explode(";", trim($this->verificacion_));
  } 
  else
  {
      if (empty($this->verificacion_))
      {
          $this->verificacion__1= array(); 
          $this->verificacion_= "0";
      } 
      else
      {
          $this->verificacion__1= $this->verificacion_; 
          $this->verificacion_= ""; 
          foreach ($this->verificacion__1 as $cada_verificacion_)
          {
             if (!empty($verificacion_))
             {
                 $this->verificacion_.= ";"; 
             } 
             $this->verificacion_.= $cada_verificacion_; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOddMult css_verificacion__line" id="hidden_field_data_verificacion_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_verificacion_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_verificacion__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_verificacion_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["verificacion_"]) &&  $this->nmgp_cmp_readonly["verificacion_"] == "on") { 

$verificacion__look = "";
 if ($this->verificacion_ == "1") { $verificacion__look .= "Si" ;} 
 if (empty($verificacion__look)) { $verificacion__look = $this->verificacion_; }
?>
<input type="hidden" name="verificacion_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($verificacion_) . "\">" . $verificacion__look . ""; ?>
<?php } else { ?>

<?php

$verificacion__look = "";
 if ($this->verificacion_ == "1") { $verificacion__look .= "Si" ;} 
 if (empty($verificacion__look)) { $verificacion__look = $this->verificacion_; }
?>
<span id="id_read_on_verificacion_<?php echo $sc_seq_vert ; ?>" class="css_verificacion__line" style="<?php echo $sStyleReadLab_verificacion_; ?>"><?php echo $this->form_encode_input($verificacion__look); ?></span><span id="id_read_off_verificacion_<?php echo $sc_seq_vert ; ?>" style="<?php echo $sStyleReadInp_verificacion_; ?>"><?php echo "<div id=\"idAjaxCheckbox_verificacion_" . $sc_seq_vert . "\" style=\"display: inline-block\">\r\n"; ?><TABLE><TR>
  <TD class="scFormDataFontOddMult css_verificacion__line"> <input type=checkbox class="sc-ui-checkbox-verificacion_ sc-ui-checkbox-verificacion_<?php echo $sc_seq_vert ?>" name="verificacion_<?php echo $sc_seq_vert ?>[]" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['Lookup_verificacion_'][] = '1'; ?>
<?php  if (in_array("1", $this->verificacion__1))  { echo " checked" ;} ?> onClick="nm_check_insert(<?php echo $sc_seq_vert ?>);" >Si</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_verificacion_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_verificacion_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['adjunto_']) && $this->nmgp_cmp_hidden['adjunto_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="adjunto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($adjunto_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_adjunto__line" id="hidden_field_data_adjunto_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_adjunto_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_adjunto__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_adjunto_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["adjunto_"]) &&  $this->nmgp_cmp_readonly["adjunto_"] == "on") { 

 ?>
<input type="hidden" name="adjunto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($adjunto_) . "\"><img id=\"adjunto_<?php echo $sc_seq_vert ?><?php echo $sc_seq_vert; ?>_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><span id=\"id_ajax_doc_adjunto_<?php echo $sc_seq_vert; ?>\"><a href=\"javascript:nm_mostra_doc('0', '" . str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_adjunto_, 3)) . "', 'form_accionxalertxresponsable')\">" . $adjunto_ . "</a></span>"; ?>
<?php } else { ?>
<span id="id_read_on_adjunto_<?php echo $sc_seq_vert ?>" class="scFormLinkOddMult sc-ui-readonly-adjunto_<?php echo $sc_seq_vert ?> css_adjunto__line" style="<?php echo $sStyleReadLab_adjunto_; ?>"><a href="javascript:nm_mostra_doc('0', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_adjunto_, 3)); ?>', 'form_accionxalertxresponsable')"><?php echo $this->form_encode_input($this->adjunto_); ?></a></span><span id="id_read_off_adjunto_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_adjunto_; ?>">
 <input type="hidden" name="adjunto_<?php echo $sc_seq_vert ?>_salva" value="<?php echo $this->form_encode_input($this->adjunto_) ?>"><span style="display:inline-block"><span id="sc-id-upload-select-adjunto_<?php echo $sc_seq_vert ?><?php echo $sc_seq_vert ?>" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOddMult css_adjunto__obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="adjunto_<?php echo $sc_seq_vert ?>[]" id="id_sc_field_adjunto_<?php echo $sc_seq_vert ?>"  onchange="nm_check_insert(<?php echo $sc_seq_vert ?>);" ></span></span>
<span id="chk_ajax_img_adjunto_<?php echo $sc_seq_vert; ?>"<?php if ($this->nmgp_opcao == "novo" || empty($adjunto_)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="adjunto__limpa<?php echo $sc_seq_vert ?>" value="<?php echo $adjunto__limpa . '" '; if ($adjunto__limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="adjunto_<?php echo $sc_seq_vert ?><?php echo $sc_seq_vert; ?>_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><span id="id_ajax_doc_adjunto_<?php echo $sc_seq_vert; ?>"><a href="javascript:nm_mostra_doc('0', '<?php echo str_replace(array("'", '%'), array("\'", '**Perc**'), substr($sTmpFile_adjunto_, 3)); ?>', 'form_accionxalertxresponsable')"><?php echo $adjunto_ ?></a></span><div id="id_sc_dragdrop_adjunto_<?php echo $sc_seq_vert; ?>" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragfile'] ?></div>
<div id="id_img_loader_adjunto_<?php echo $sc_seq_vert; ?>" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_adjunto_<?php echo $sc_seq_vert; ?>" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_adjunto_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_adjunto_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['descripcionadjunto_']) && $this->nmgp_cmp_hidden['descripcionadjunto_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="descripcionadjunto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($descripcionadjunto_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_descripcionadjunto__line" id="hidden_field_data_descripcionadjunto_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_descripcionadjunto_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_descripcionadjunto__line" style="vertical-align: top;padding: 0px">
<?php
$descripcionadjunto__val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($descripcionadjunto_));

?>

<?php if ($bTestReadOnly_descripcionadjunto_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["descripcionadjunto_"]) &&  $this->nmgp_cmp_readonly["descripcionadjunto_"] == "on") { 

 ?>
<input type="hidden" name="descripcionadjunto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($descripcionadjunto_) . "\">" . $descripcionadjunto__val . ""; ?>
<?php } else { ?>
<span id="id_read_on_descripcionadjunto_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-descripcionadjunto_<?php echo $sc_seq_vert ?> css_descripcionadjunto__line" style="<?php echo $sStyleReadLab_descripcionadjunto_; ?>"><?php echo $this->form_encode_input($descripcionadjunto__val); ?></span><span id="id_read_off_descripcionadjunto_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_descripcionadjunto_; ?>">
 <textarea  class="sc-js-input scFormObjectOddMult css_descripcionadjunto__obj" style="white-space: pre-wrap;" name="descripcionadjunto_<?php echo $sc_seq_vert ?>" id="id_sc_field_descripcionadjunto_<?php echo $sc_seq_vert ?>" rows="2" cols="30"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo $descripcionadjunto_; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_descripcionadjunto_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_descripcionadjunto_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_id_))
       {
           $this->nmgp_cmp_readonly['id_'] = $sCheckRead_id_;
       }
       if ('display: none;' == $sStyleHidden_id_)
       {
           $this->nmgp_cmp_hidden['id_'] = 'off';
       }
       if (isset($sCheckRead_idresponsablealerta_))
       {
           $this->nmgp_cmp_readonly['idresponsablealerta_'] = $sCheckRead_idresponsablealerta_;
       }
       if ('display: none;' == $sStyleHidden_idresponsablealerta_)
       {
           $this->nmgp_cmp_hidden['idresponsablealerta_'] = 'off';
       }
       if (isset($sCheckRead_fecha_))
       {
           $this->nmgp_cmp_readonly['fecha_'] = $sCheckRead_fecha_;
       }
       if ('display: none;' == $sStyleHidden_fecha_)
       {
           $this->nmgp_cmp_hidden['fecha_'] = 'off';
       }
       if (isset($sCheckRead_accion_))
       {
           $this->nmgp_cmp_readonly['accion_'] = $sCheckRead_accion_;
       }
       if ('display: none;' == $sStyleHidden_accion_)
       {
           $this->nmgp_cmp_hidden['accion_'] = 'off';
       }
       if (isset($sCheckRead_cedula_))
       {
           $this->nmgp_cmp_readonly['cedula_'] = $sCheckRead_cedula_;
       }
       if ('display: none;' == $sStyleHidden_cedula_)
       {
           $this->nmgp_cmp_hidden['cedula_'] = 'off';
       }
       if (isset($sCheckRead_verificacion_))
       {
           $this->nmgp_cmp_readonly['verificacion_'] = $sCheckRead_verificacion_;
       }
       if ('display: none;' == $sStyleHidden_verificacion_)
       {
           $this->nmgp_cmp_hidden['verificacion_'] = 'off';
       }
       if (isset($sCheckRead_adjunto_))
       {
           $this->nmgp_cmp_readonly['adjunto_'] = $sCheckRead_adjunto_;
       }
       if ('display: none;' == $sStyleHidden_adjunto_)
       {
           $this->nmgp_cmp_hidden['adjunto_'] = 'off';
       }
       if (isset($sCheckRead_descripcionadjunto_))
       {
           $this->nmgp_cmp_readonly['descripcionadjunto_'] = $sCheckRead_descripcionadjunto_;
       }
       if ('display: none;' == $sStyleHidden_descripcionadjunto_)
       {
           $this->nmgp_cmp_hidden['descripcionadjunto_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_accionxalertxresponsable = $guarda_form_vert_form_accionxalertxresponsable;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div> 
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type="hidden" name="sc_contr_vert" value="<?php echo $this->form_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; text-align: center; font-weight: bold">
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", " nm_navpage(document.F1.nmgp_rec_b.value, 'P');document.F1.nmgp_rec_b.value = ''", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['qtline'] == "on")
      {
?> 
          <span class="<?php echo $this->css_css_toolbar_obj ?>" style="border: 0px;"><?php echo $this->Ini->Nm_lang['lang_btns_rows'] ?></span>
          <select class="scFormToolbarInput" name="nmgp_quant_linhas_b" onchange="document.F7.nmgp_max_line.value = this.value; document.F7.submit();"> 
<?php 
              $obj_sel = ($this->sc_max_reg == '10') ? " selected" : "";
?> 
           <option value="10" <?php echo $obj_sel ?>>10</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '20') ? " selected" : "";
?> 
           <option value="20" <?php echo $obj_sel ?>>20</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '50') ? " selected" : "";
?> 
           <option value="50" <?php echo $obj_sel ?>>50</option>
          </select>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "nm_move ('inicio');", "nm_move ('inicio');", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "nm_move ('retorna');", "nm_move ('retorna');", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "nm_move ('avanca');", "nm_move ('avanca');", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "nm_move ('final');", "nm_move ('final');", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
<script>
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
<?php
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['run_modal'])
{
?>
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
<?php
}
else
{
?>
 $(function() {
  setTimeout(function() { for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) { scJQElementsAdd(iLine); } }, 250);
 });
<?php
}
?>
</script>
<div id="new_line_dummy" style="display: none">
</div>

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
  $nm_sc_blocos_da_pag = array(0);

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
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['masterValue']);
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
 parent.scAjaxDetailStatus("form_accionxalertxresponsable");
 parent.scAjaxDetailHeight("form_accionxalertxresponsable", <?php echo $sTamanhoIframe; ?>);
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
   parent.scAjaxDetailHeight("form_accionxalertxresponsable", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_accionxalertxresponsable", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_accionxalertxresponsable']['sc_modal'])
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
<iframe id="sc-id-download-iframe" name="sc_name_download_iframe" style="display: none"></iframe>
</body> 
</html> 
<?php 
 } 
} 
?> 
