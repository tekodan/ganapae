<?php
   include_once('chart_alerta_session.php');
   session_start();
   if (!function_exists("NM_is_utf8"))
   {
       include_once("../_lib/lib/php/nm_utf8.php");
   }
   $Sel_Groupby = new chart_alerta_sel_Groupby(); 
   $Sel_Groupby->Sel_Groupby_init();
   
class chart_alerta_sel_Groupby
{
function Sel_Groupby_init()
{
   global $opc_ret, $sc_init, $path_img, $path_btn, $groupby_atual, $embbed, $tbar_pos, $_POST, $_GET;
   if (isset($_POST['script_case_init']))
   {
       $opc_ret  = $_POST['opc_ret'];
       $sc_init  = $_POST['script_case_init'];
       $path_img = $_POST['path_img'];
       $path_btn = $_POST['path_btn'];
       $embbed   = isset($_POST['embbed_groupby']) && 'Y' == $_POST['embbed_groupby'];
       $tbar_pos = isset($_POST['toolbar_pos']) ? $_POST['toolbar_pos'] : '';
   }
   elseif (isset($_GET['script_case_init']))
   {
       $opc_ret  = $_GET['opc_ret'];
       $sc_init  = $_GET['script_case_init'];
       $path_img = $_GET['path_img'];
       $path_btn = $_GET['path_btn'];
       $embbed   = isset($_GET['embbed_groupby']) && 'Y' == $_GET['embbed_groupby'];
       $tbar_pos = isset($_GET['toolbar_pos']) ? $_GET['toolbar_pos'] : '';
   }
   
   $groupby_atual = $_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Ind_Groupby'];
   if (isset($_POST['fsel_ok']) && $_POST['fsel_ok'] == "OK" && isset($_POST['sel_groupby']))
   {
       $this->campos_sel   = isset($_POST['campos_sel'])   ? $_POST['campos_sel']   : "";
       $this->xaxys_fields = isset($_POST['xaxys_fields']) ? $_POST['xaxys_fields'] : "";
       $this->summ_fields  = isset($_POST['summ_fields'])  ? $_POST['summ_fields']  : "";
       $this->Sel_processa_out($_POST['sel_groupby']);
   }
   else
   {
       if ($embbed)
       {
           ob_start();
           $this->Sel_processa_form();
           $Temp = ob_get_clean();
           echo NM_charset_to_utf8($Temp);
       }
       else
       {
           $this->Sel_processa_form();
       }
   }
   exit;
   
}
function Sel_processa_out($sel_groupby)
{
   global $sc_init, $groupby_atual, $opc_ret, $embbed;
   $Change_free_groupby = false;
   $campos_sel = explode("@?@", $this->campos_sel);
   if ($sel_groupby == "sc_free_group_by")
   {
       if (count($campos_sel) != count($_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Gb_Free_cmp']))
       {
           $Change_free_groupby = true;
       }
       else
       {
          $Arr_temp = array();
           foreach ($_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Gb_Free_cmp'] as $Cada_cmp => $Resto)
           {
               $Arr_temp[] = $Cada_cmp;
           }
           foreach ($campos_sel as $ind => $cada_cmp)
           {
               if ($Arr_temp[$ind] != $cada_cmp)
               {
                   $Change_free_groupby = true;
                   break;
               }
           }
       }
   }
   if ($sel_groupby == "sc_free_group_by" && $opc_ret == "resumo" && empty($this->campos_sel))
   { }
   elseif ($sel_groupby != $groupby_atual || $Change_free_groupby)
   {
       $_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Ind_Groupby']     = $sel_groupby;
       $_SESSION['sc_session'][$sc_init]['chart_alerta']['contr_array_resumo'] = "NAO";
       $_SESSION['sc_session'][$sc_init]['chart_alerta']['contr_total_geral']  = "NAO";
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['ordem_quebra']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['ordem_select']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['tot_geral']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_group_by']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_x_axys']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_y_axys']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_fill']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_order']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_order_col']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_order_level']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_order_sort']);
       unset($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_tabular']);
       if ($sel_groupby == "sc_free_group_by")
       {
           $tab_arr_groubby_cmp = array();
           $tab_arr_groubby_sql = array();
           $tab_arr_groubby_cmp['escalar'] = array('cmp' => "escalar", 'ind' => 0);
           $tab_arr_groubby_cmp['fecha'] = array('cmp' => "fecha", 'ind' => 1);
           $tab_arr_groubby_cmp['lugar'] = array('cmp' => "lugar", 'ind' => 2);
           $tab_arr_groubby_cmp['municipio'] = array('cmp' => "municipio", 'ind' => 3);
           $tab_arr_groubby_cmp['subcategoria'] = array('cmp' => "subcategoria", 'ind' => 4);
           $tab_arr_groubby_cmp['categoria'] = array('cmp' => "categoria", 'ind' => 5);
           $tab_arr_groubby_cmp['terminado'] = array('cmp' => "terminado", 'ind' => 6);
           $tab_arr_groubby_sql[0] = array('cmp' => "escalar", 'ord' => 'asc');
           $tab_arr_groubby_sql[1] = array('cmp' => "fecha", 'ord' => 'asc');
           $tab_arr_groubby_sql[2] = array('cmp' => "lugar", 'ord' => 'asc');
           $tab_arr_groubby_sql[3] = array('cmp' => "municipio", 'ord' => 'asc');
           $tab_arr_groubby_sql[4] = array('cmp' => "subcategoria", 'ord' => 'asc');
           $tab_arr_groubby_sql[5] = array('cmp' => "categoria", 'ord' => 'asc');
           $tab_arr_groubby_sql[6] = array('cmp' => "terminado", 'ord' => 'asc');
           $_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Gb_Free_cmp'] = array();
           $_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Gb_Free_sql'] = array();
           foreach ($campos_sel as $cada_cmp)
           {
               if (!empty($cada_cmp))
               {
                   $ind = $tab_arr_groubby_cmp[$cada_cmp]['ind'];
                   $_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Gb_Free_cmp'][$cada_cmp] = $tab_arr_groubby_cmp[$cada_cmp]['cmp'];
                   $_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Gb_Free_sql'][$tab_arr_groubby_sql[$ind]['cmp']] = $tab_arr_groubby_sql[$ind]['ord'];
               }
           }
       }
   }
   if ($sel_groupby == "sc_free_group_by")
   {
       $groupby_this  = 0;
       $groupby_count = sizeof($campos_sel);
       $xaxys_count   = '' == $this->xaxys_fields ? 0 : sizeof(explode("@?@", $this->xaxys_fields));
       $xaxys_list    = array();
       $yaxys_list    = array();
       for ($i = 0; $i < $groupby_count; $i++)
       {
           if (0 == $xaxys_count)
           {
               $yaxys_list[$groupby_this] = $groupby_this;
           }
           else
           {
               $xaxys_list[$groupby_this] = $groupby_this;
               $xaxys_count--;
           }
           $groupby_this++;
       }
       $_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_x_axys'] = $xaxys_list;
       $_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_y_axys'] = $yaxys_list;
   }
   if ($opc_ret == "resumo")
   {
       $summ_fields = explode("@?@", $this->summ_fields);
       foreach ($_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_display'] as $i_sum => $d_sum)
       {
           $_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_display'][$i_sum]['display'] = in_array($i_sum, $summ_fields);
       }
       $_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_order'] = $summ_fields;
   }
?>
    <script language="javascript"> 
<?php
   if (!$embbed)
   {
?>
      self.parent.tb_remove(); 
<?php
   }
?>
      nm_gp_move('<?php echo $opc_ret ?>', '0'); 
   </script>
<?php
}
   
function Sel_processa_form()
{
   global $sc_init, $path_img, $path_btn, $groupby_atual, $opc_ret, $embbed, $tbar_pos;
   $STR_lang    = (isset($_SESSION['scriptcase']['str_lang']) && !empty($_SESSION['scriptcase']['str_lang'])) ? $_SESSION['scriptcase']['str_lang'] : "es";
   $NM_arq_lang = "../_lib/lang/" . $STR_lang . ".lang.php";
   $this->Nm_lang = array();
   if (is_file($NM_arq_lang))
   {
       include_once($NM_arq_lang);
   }
   $_SESSION['scriptcase']['charset']  = (isset($this->Nm_lang['Nm_charset']) && !empty($this->Nm_lang['Nm_charset'])) ? $this->Nm_lang['Nm_charset'] : "UTF-8";
   foreach ($this->Nm_lang as $ind => $dados)
   {
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($ind))
      {
          $ind = sc_convert_encoding($ind, $_SESSION['scriptcase']['charset'], "UTF-8");
          $this->Nm_lang[$ind] = $dados;
      }
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
      {
          $this->Nm_lang[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
   }
   $display_free_gb  = false;
   $arr_campos_free  = array();
   $arr_campos_free['escalar']  = (isset($_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['escalar'])) ? $_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['escalar'] : "Escalar";
   $arr_campos_free['fecha']  = (isset($_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['fecha'])) ? $_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['fecha'] : "Fecha";
   $arr_campos_free['lugar']  = (isset($_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['lugar'])) ? $_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['lugar'] : "Lugar";
   $arr_campos_free['municipio']  = (isset($_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['municipio'])) ? $_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['municipio'] : "Municipio";
   $arr_campos_free['subcategoria']  = (isset($_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['subcategoria'])) ? $_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['subcategoria'] : "Subcategoria";
   $arr_campos_free['categoria']  = (isset($_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['categoria'])) ? $_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['categoria'] : "Categoria";
   $arr_campos_free['terminado']  = (isset($_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['terminado'])) ? $_SESSION['sc_session'][$sc_init]['chart_alerta']['labels']['terminado'] : "Terminado";
   $str_schema_all = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "bluedaniel/bluedaniel";
   include("../_lib/css/" . $str_schema_all . "_grid.php");
   $Str_btn_grid = trim($str_button) . "/" . trim($str_button) . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".php";
   include("../_lib/buttons/" . $Str_btn_grid);
   if (!function_exists("nmButtonOutput"))
   {
       include_once("../_lib/lib/php/nm_gp_config_btn.php");
   }
   $bStartFree   = true;
   $bSummaryPage = isset($_GET['opc_ret']) && 'resumo' == $_GET['opc_ret'];
   if (!$embbed)
   {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Nm_lang['lang_othr_chart_titl'] ?> - alerta</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
   <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup_dir'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup_tab'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup_tab_dir'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup_div'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $_SESSION['scriptcase']['css_popup_div_dir'] ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $_SESSION['scriptcase']['css_btn_popup'] ?>" /> 
 <script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/jquery/js/jquery.js"></script>
 <script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/jquery/js/jquery-ui.js"></script>
 <script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/jquery_plugin/touch_punch/jquery.ui.touch-punch.min.js"></script>
 <script language="javascript" type="text/javascript" src="<?php echo $_SESSION['sc_session']['path_third'] ?>/tigra_color_picker/picker.js"></script>
<?php
   }
?>
<?php
if ($embbed)
{
?>
 <script language="javascript" type="text/javascript">
  function scSubmitGroupBy(sPos) {
   $.ajax({
    type: "POST",
    url: "chart_alerta_sel_groupby.php",
    data: {
     script_case_init: $("#sc_id_gby_script_case_init").val(),
     script_case_session: $("#sc_id_gby_script_case_session").val(),
     path_img: $("#sc_id_gby_path_img").val(),
     path_btn: $("#sc_id_gby_path_btn").val(),
     opc_ret: $("#sc_id_gby_opc_ret").val(),
     campos_sel: $("#sc_id_gby_campos_sel").val(),
     xaxys_fields: $("#sc_id_gby_xaxys_fields").val(),
     summ_fields: $("#sc_id_gby_summ_fields").val(),
     fsel_ok: $("#sc_id_gby_fsel_ok").val(),
     sel_groupby: $(".sc_ui_gby_selected:checked").val(),
     embbed_groupby: 'Y'
    }
   }).success(function(data) {
    $("#sc_id_groupby_placeholder_" + sPos).find("td").html(data);
    scBtnGroupByHide(sPos);
   });
  }
  </script>
<?php
}
?>
 <script language="javascript" type="text/javascript">
<?php
if ($bSummaryPage)
{
    $aOptions = array();
    foreach ($_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_control'] as $l_field => $d_field)
    {
        $aOptions[] = "sc_id_item_summ_" . $l_field . ": \"" . str_replace('"', '\"', $d_field['select']) . "\"";
    }
?>
  var scTotalOptions = {<?php echo implode(', ', $aOptions); ?>};
<?php
}
?>
  $(function() {
   $(".scAppDivTabLine").find("li").mouseover(function() {
    $(this).css("cursor", "pointer");
   });
   $(".sc_ui_litem").mouseover(function() {
    $(this).css("cursor", "all-scroll");
   });
   $("#sc_id_available").sortable({
    connectWith: ".sc_ui_sort_groupby",
    placeholder: "scAppDivSelectFieldsPlaceholder"
   }).disableSelection();
   $("#sc_id_yaxys").sortable({
    connectWith: ".sc_ui_sort_groupby",
    placeholder: "scAppDivSelectFieldsPlaceholder",
    update: function(event, ui) {
     $("#sc_id_sel_groupby_sc_free_group_by").prop("checked", true);
    }
   }).disableSelection();
<?php
if ($bSummaryPage)
{
?>
   $("#sc_id_xaxys").sortable({
    connectWith: ".sc_ui_sort_groupby",
    placeholder: "scAppDivSelectFieldsPlaceholder",
    update: function(event, ui) {
     $("#sc_id_sel_groupby_sc_free_group_by").prop("checked", true);
    }
   }).disableSelection();
   $("#sc_id_summ_available").sortable({
    helper: "clone",
    connectWith: ".sc_ui_sort_summ",
    placeholder: "scAppDivSelectFieldsPlaceholder",
    remove: function(event, ui) {
     var idx, elm, eid, nid, fieldName, opName;
     fieldName = $(ui.item[0]).attr("id").substr(16);
     opName = scSummFirstAvailable(fieldName);
     if (false == opName) {
      $(this).sortable("cancel");
      return;
     }
     idx = $("#sc_id_summ_selected").children().index($(ui.item[0]));
     if (idx == -1) return;
     elm = $(ui.item[0]).clone(true).removeClass("box ui-draggable ui-draggable-dragging").addClass("box-clone");
     eid = elm.attr("id");
     nid = eid.substr(0, 16) + scSummItemCount.toString();
     scSummItemCount++;
     elm.attr("id", nid).find(".sc-ui-total-options").html(scTotalOptions[eid]);
     $("#sc_id_summ_selected").children(":eq(" + idx + ")").after(elm);
     $(this).sortable("cancel");
     scSummOptionsSetNew($("#sc_id_summ_selected").children(":eq(" + idx + ")").find("select"), fieldName, opName);
     scSummOptionsSet(fieldName, opName, false);
     ajusta_window();
    }
   }).disableSelection();
   $("#sc_id_summ_selected").sortable({
    connectWith: ".sc_ui_sort_summ",
    placeholder: "scAppDivSelectFieldsPlaceholder",
    remove: function(event, ui) {
     var fieldName, opName;
     fieldName = $(ui.item[0]).find("select").attr("class").substr(13);
     opName = $(ui.item[0]).find("select").find(":selected").attr("class").substr(20);
     $(this).sortable("cancel");
     $(ui.item[0]).remove();
     scSummOptionsSet(fieldName, opName, true);
     ajusta_window();
    }
   });
<?php
}
?>
   $("#sc_id_show_static").click(function() {
    scShowStatic();
   });
   $("#sc_id_show_free").click(function() {
    scShowFree();
   });
   $("#sc_id_show_total").click(function() {
    scShowTotal();
   });
   scUpdateListHeight();
  });
  function scUpdateListHeight() {
   $("#sc_id_available").css("min-height", "<?php echo sizeof($arr_campos_free) * 29 ?>px");
   $("#sc_id_yaxys").css("min-height", "<?php echo sizeof($arr_campos_free) * 29 ?>px");
   $("#sc_id_xaxys").css("min-height", "29px");
<?php
if ($bSummaryPage)
{
?>
   $("#sc_id_summ_available").css("min-height", "<?php echo sizeof($_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_display']) * 29 ?>px");
   $("#sc_id_summ_selected").css("min-height", "<?php echo sizeof($_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_display']) * 29 ?>px");
<?php
}
?>
  }
  function scPackGroupBy() {
   var fieldList, i, fieldName, selectedFields = new Array, xaxysFields = new Array, summFields = new Array;
<?php
if ($bSummaryPage)
{
?>
   fieldList = $("#sc_id_xaxys").sortable("toArray");
   for (i = 0; i < fieldList.length; i++) {
    fieldName = fieldList[i].substr(11);
    selectedFields.push(fieldName);
    xaxysFields.push(fieldName);
   }
   $("#sc_id_gby_xaxys_fields").val(xaxysFields.join("@?@"));
   fieldList = $("#sc_id_summ_selected").sortable("toArray");
   for (i = 0; i < fieldList.length; i++) {
    fieldName = $("#" + fieldList[i]).find("select").val();
    summFields.push(fieldName);
   }
   $("#sc_id_gby_summ_fields").val(summFields.join("@?@"));
<?php
}
?>
   fieldList = $("#sc_id_yaxys").sortable("toArray");
   for (i = 0; i < fieldList.length; i++) {
    fieldName = fieldList[i].substr(11);
    selectedFields.push(fieldName);
   }
   $("#sc_id_gby_campos_sel").val(selectedFields.join("@?@"));
  }
  function scShowStatic() {
    $("#sc_id_static_groupby").show();
    $("#sc_id_free_groupby").hide();
    $("#sc_id_summary").hide();
    $("#sc_id_show_static").addClass("scTabActive").removeClass("scTabInactive");
    $("#sc_id_show_free").addClass("scTabInactive").removeClass("scTabActive");
    $("#sc_id_show_total").addClass("scTabInactive").removeClass("scTabActive");
<?php
   if (!$embbed)
   {
?>
   ajusta_window();
<?php
   }
?>
  }
  function scShowFree() {
    $("#sc_id_static_groupby").hide();
    $("#sc_id_free_groupby").show();
    $("#sc_id_summary").hide();
    $("#sc_id_show_static").addClass("scTabInactive").removeClass("scTabActive");
    $("#sc_id_show_free").addClass("scTabActive").removeClass("scTabInactive");
    $("#sc_id_show_total").addClass("scTabInactive").removeClass("scTabActive");
<?php
   if (!$embbed)
   {
?>
   ajusta_window();
<?php
   }
?>
  }
  function scShowTotal() {
    $("#sc_id_static_groupby").hide();
    $("#sc_id_free_groupby").hide();
    $("#sc_id_summary").show();
    $("#sc_id_show_static").addClass("scTabInactive").removeClass("scTabActive");
    $("#sc_id_show_free").addClass("scTabInactive").removeClass("scTabActive");
    $("#sc_id_show_total").addClass("scTabActive").removeClass("scTabInactive");
<?php
   if (!$embbed)
   {
?>
   ajusta_window();
<?php
   }
?>
  }
  function scSummOptionsInit() {
   var fieldList, fieldObject, fieldName, fieldOption, i;
   fieldList = $("#sc_id_summ_selected").sortable("toArray");
   for (i = 0; i < fieldList.length; i++) {
    fieldObject = $("#" + fieldList[i]).find("select");
    fieldName = fieldObject.attr("class").substr(13);
    fieldOption = fieldObject.find(":selected").attr("class").substr(20);
    scSummStatus[fieldName][fieldOption] = false;
   }
   scSummOptionsDraw();
  }
  function scSummOptionsSet(fieldName, opName, opValue) {
   scSummStatus[fieldName][opName] = opValue;
   if (opValue) {
    $("#sc_id_item_summ_" + fieldName).find(".sc-ui-select-available-" + opName).removeClass("scAppDivSelectBoxDisabled");
    $(".sc-ui-select-" + fieldName).find(".sc-ui-select-option-" + opName).prop("disabled", false);
   }
   else {
    $("#sc_id_item_summ_" + fieldName).find(".sc-ui-select-available-" + opName).addClass("scAppDivSelectBoxDisabled");
    $(".sc-ui-select-" + fieldName).find(".sc-ui-select-option-" + opName).filter(":not(:selected)").prop("disabled", true);
   }
   scSummFieldStatus(fieldName);
  }
  function scSummOptionsSetNew(fieldObj, fieldName, opSelected) {
   fieldObj.find(".sc-ui-select-option-" + opSelected).prop("selected", true);
   for (opName in scSummStatus[fieldName]) {
    if (opName != opSelected && !scSummStatus[fieldName][opName]) {
     fieldObj.find(".sc-ui-select-option-" + opName).prop("disabled", true);
    }
   }
   scSummFieldStatus(fieldName);
  }
  function scSummChange(fieldObj) {
   var fieldName, opName, fieldList, i;
   fieldName = fieldObj.attr("class").substr(13);
   for (opName in scSummStatus[fieldName]) {
    scSummStatus[fieldName][opName] = true;
    $("#sc_id_item_summ_" + fieldName).find(".sc-ui-select-available-" + opName).removeClass("scAppDivSelectBoxDisabled");
    $(".sc-ui-select-" + fieldName).find(".sc-ui-select-option-" + opName).prop("disabled", false);
   }
   fieldList = $("." + fieldObj.attr("class"));
   for (i = 0; i < fieldList.length; i++) {
    opName = $(fieldList[i]).find(":selected").attr("class").substr(20);
    scSummStatus[fieldName][opName] = false;
    $("#sc_id_item_summ_" + fieldName).find(".sc-ui-select-available-" + opName).addClass("scAppDivSelectBoxDisabled");
    $(".sc-ui-select-" + fieldName).find(".sc-ui-select-option-" + opName).filter(":not(:selected)").prop("disabled", true);
   }
  }
  function scSummOptionsDraw() {
   var fieldName, opName;
   for (fieldName in scSummStatus) {
    for (opName in scSummStatus[fieldName]) {
     if (scSummStatus[fieldName][opName]) {
      $("#sc_id_item_summ_" + fieldName).find(".sc-ui-select-available-" + opName).removeClass("scAppDivSelectBoxDisabled");
      $(".sc-ui-select-" + fieldName).find(".sc-ui-select-option-" + opName).filter(":selected").prop("disabled", false);
     }
     else {
      $("#sc_id_item_summ_" + fieldName).find(".sc-ui-select-available-" + opName).addClass("scAppDivSelectBoxDisabled");
      $(".sc-ui-select-" + fieldName).find(".sc-ui-select-option-" + opName).filter(":not(:selected)").prop("disabled", true);
     }
    }
    scSummFieldStatus(fieldName);
   }
  }
  function scSummFieldStatus(fieldName) {
   if (false == scSummFirstAvailable(fieldName)) {
    $("#sc_id_item_summ_" + fieldName).addClass("scAppDivSelectFieldsDisabled");
   }
   else {
    $("#sc_id_item_summ_" + fieldName).removeClass("scAppDivSelectFieldsDisabled");
   }
  }
  function scSummFirstAvailable(fieldName) {
   for (opName in scSummStatus[fieldName]) {
    if (scSummStatus[fieldName][opName]) {
     return opName;
    }
   }
   return false;
  }
 </script>
 <style type="text/css">
  .sc_ui_sortable {
   list-style-type: none;
   margin: 0;
   min-width: 225px;
  }
  .sc_ui_sortable li {
   margin: 0 3px 3px 3px;
   padding: 3px 3px 3px 15px;
   height: 18px;
  }
  .sc_ui_sortable li span {
   position: absolute;
   margin-left: -1.3em;
  }
  .sc_ui_ulist {
   min-width: 225px;
  }
  .sc_ui_ulist_total {
   width: 250px;
  }
  .sc_ui_litem {
  }
  .sc_ui_litem_total {
   height: 25px !important;
  }
 </style>
<?php
   if (!$embbed)
   {
?>
</HEAD>
<BODY class="scGridPage" style="margin: 0px; overflow-x: hidden">
<?php
   }
?>
<FORM name="Fsel_quebras" method="POST">
  <INPUT type="hidden" name="script_case_init" id="sc_id_gby_script_case_init" value="<?php echo NM_encode_input($sc_init); ?>"> 
  <INPUT type="hidden" name="script_case_session" id="sc_id_gby_script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
  <INPUT type="hidden" name="path_img" id="sc_id_gby_path_img" value="<?php echo NM_encode_input($path_img); ?>"> 
  <INPUT type="hidden" name="path_btn" id="sc_id_gby_path_btn" value="<?php echo NM_encode_input($path_btn); ?>"> 
  <INPUT type="hidden" name="opc_ret" id="sc_id_gby_opc_ret" value="<?php echo NM_encode_input($opc_ret); ?>"> 
  <INPUT type="hidden" name="campos_sel" id="sc_id_gby_campos_sel" value="">
  <INPUT type="hidden" name="xaxys_fields" id="sc_id_gby_xaxys_fields" value="">
  <INPUT type="hidden" name="summ_fields" id="sc_id_gby_summ_fields" value="">
  <INPUT type="hidden" name="fsel_ok" id="sc_id_gby_fsel_ok" value="OK"> 
<?php
if ($embbed)
{
    echo "<div class='scAppDivMoldura'>";
    echo "<table id=\"main_table\" style=\"width: 100%\" cellspacing=0 cellpadding=0>";
}
elseif ($_SESSION['scriptcase']['reg_conf']['html_dir'] == " DIR='RTL'")
{
    echo "<table id=\"main_table\" style=\"position: relative; top: 20px; right: 20px; min-width: 500px\">";
}
else
{
    echo "<table id=\"main_table\" style=\"position: relative; top: 20px; left: 20px; min-width: 500px\">";
}
?>
<?php
if (!$embbed)
{
?>
<tr>
<td>
<div class="scGridBorder">
<table width='100%' cellspacing=0 cellpadding=0>
<?php
}
?>
 <tr>
  <td class="<?php echo ($embbed)? 'scAppDivHeader scAppDivHeaderText':'scGridLabelVert'; ?>">
   <?php echo $this->Nm_lang['lang_btns_grpby_hint']; ?>
  </td>
 </tr>
 <tr>
  <td class="<?php echo ($embbed)? 'scAppDivContent css_scAppDivContentText':'scGridTabelaTd'; ?>">
   <table class="<?php echo ($embbed)? '':'scGridTabela'; ?>" style="border-width: 0; border-collapse: collapse; width:100%;" cellspacing=0 cellpadding=0>
    <tr class="<?php echo ($embbed)? '':'scGridFieldOddVert'; ?>">
     <td style="vertical-align: top">
      <table cellspacing=0 cellpadding=0 style="width: 100%">
<?php
    $has_group_by_static  = false;
    $has_group_by_dynamic = true;
    $has_total_dynamic    = true && $opc_ret == "resumo";
    $iTabCount            = 1;
    if ($opc_ret == "resumo")
    {
        $has_total_dynamic = true;
        $iTabCount++;
    }
    if (1 < $iTabCount)
    {
?>
 <tr>
  <td>
   <ul class="scAppDivTabLine">
<?php
        if ($has_group_by_static)
        {
            $sTabClass = ('sc_free_group_by' == $groupby_atual) ? 'scTabInactive' : 'scTabActive';
?>
    <li id="sc_id_show_static" class="<?php echo $sTabClass; ?>"><a><?php echo $this->Nm_lang['lang_othr_groupby_static']; ?></a></li>
<?php
        }
        if ($has_group_by_dynamic)
        {
            $sTabClass = ('sc_free_group_by' == $groupby_atual) ? 'scTabActive' : 'scTabInactive';
?>
    <li id="sc_id_show_free" class="<?php echo $sTabClass; ?>"><a><?php echo $this->Nm_lang['lang_othr_groupby_dynamic']; ?></a></li>
<?php
        }
        if ($has_total_dynamic)
        {
?>
    <li id="sc_id_show_total" class="scTabInactive"><a><?php echo $this->Nm_lang['lang_othr_totals']; ?></a></li>
<?php
        }
?>
   </ul>
  </td>
 </tr>
<?php
    }
?>
 <tr id="sc_id_free_groupby">
  <td>
<?php
     if (!in_array("sc_free_group_by", $_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Groupby_hide']))
     {
        $check = ($groupby_atual == "sc_free_group_by") ? " checked" : "";
?>
      <span>
       <input type="radio" class="scAppDivToolbarInput sc_ui_gby_selected" name="sel_groupby" value="sc_free_group_by" id="sc_id_sel_groupby_sc_free_group_by"<?php echo $check ?> /><label for="sc_id_sel_groupby_sc_free_group_by" style="font-weight: bold"><?php echo $this->Nm_lang['lang_othr_groupby_free']; ?></label>
       <br /><br />
      </span>
<?php
        if ($bSummaryPage)
        {
?>
      <?php echo $this->Nm_lang['lang_othr_groupby_required']; ?><br />
<?php
        }
?>
      <table>
<?php
        $aYAxysFields = array();
        $aXAxysFields = array();
        $sYAxysLabel  = $this->Nm_lang['lang_othr_groupby_selected_fld'];
        foreach ($_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Gb_Free_cmp'] as $NM_cada_field => $resto)
        {
            $aYAxysFields[$NM_cada_field] = $resto;
        }
        if ($bSummaryPage)
        {
            $aTmpGroupBy = $aYAxysFields;
            foreach ($_SESSION['sc_session'][$sc_init]['chart_alerta']['pivot_x_axys'] as $temp)
            {
                reset($aTmpGroupBy);
                $temp_key                 = key($aTmpGroupBy);
                $aXAxysFields[$temp_key] = $aTmpGroupBy[$temp_key];
                unset($aYAxysFields[$temp_key]);
                unset($aTmpGroupBy[$temp_key]);
            }
            $sYAxysLabel = $this->Nm_lang['lang_othr_groupby_axis_y'];
?>
       <tr>
        <td colspan="2" style="height: 35px">&nbsp;</td>
        <td rowspan="2" style="vertical-align: top">
         <?php echo $this->Nm_lang['lang_othr_groupby_axis_x']; ?>
         <ul class="sc_ui_sort_groupby sc_ui_sortable sc_ui_ulist scAppDivSelectFields" id="sc_id_xaxys">
<?php
            foreach ($aXAxysFields as $NM_cada_field => $resto)
            {
?>
          <li class="sc_ui_litem scAppDivSelectFieldsEnabled" id="sc_id_item_<?php echo NM_encode_input($NM_cada_field); ?>"><?php echo $arr_campos_free[$NM_cada_field]; ?></li>
<?php
            }
?>
         </ul>
        </td>
       </tr>
<?php
        }
?>
       <tr>
        <td style="vertical-align: top">
         <?php echo $this->Nm_lang['lang_othr_groupby_available_fld']; ?>
         <ul class="sc_ui_sort_groupby sc_ui_sortable sc_ui_ulist scAppDivSelectFields" id="sc_id_available">
<?php
        foreach ($arr_campos_free as $NM_cada_field => $NM_cada_label)
        {
           if (!isset($_SESSION['sc_session'][$sc_init]['chart_alerta']['SC_Gb_Free_cmp'][$NM_cada_field]))
           {
?>
          <li class="sc_ui_litem scAppDivSelectFieldsEnabled" id="sc_id_item_<?php echo NM_encode_input($NM_cada_field); ?>"><?php echo $NM_cada_label; ?></li>
<?php
           }
        }
?>
         </ul>
        </td>
        <td style="vertical-align: top">
         <?php echo $sYAxysLabel; ?>
         <ul class="sc_ui_sort_groupby sc_ui_sortable sc_ui_ulist scAppDivSelectFields" id="sc_id_yaxys">
<?php
        foreach ($aYAxysFields as $NM_cada_field => $resto)
        {
?>
          <li class="sc_ui_litem scAppDivSelectFieldsEnabled" id="sc_id_item_<?php echo NM_encode_input($NM_cada_field); ?>"><?php echo $arr_campos_free[$NM_cada_field]; ?></li>
<?php
        }
?>
         </ul>
        </td>
<?php
        if (isset($_GET['opc_ret']) && 'resumo' == $_GET['opc_ret'])
        {
?>
        <td>&nbsp;</td>
       </tr>
<?php
        }
?>
       </tr>
      </table>
<?php
     }
?>
  </td>
 </tr>
<?php
   $iItemCount = 0;
   if ($bSummaryPage)
   {
       $aSummStatus = array();
?>
 <tr id="sc_id_summary">
  <td>
      <table>
       <tr>
        <td style="vertical-align: top">
         <?php echo $this->Nm_lang['lang_othr_groupby_totals_fld']; ?>
         <ul class="sc_ui_sort_summ sc_ui_sortable sc_ui_ulist sc_ui_ulist_total scAppDivSelectFields" id="sc_id_summ_available">
<?php
        foreach ($_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_control'] as $l_field => $d_field)
        {
            $aSummStatus[$l_field] = array();
            $sOpDisplay            = 'NM_Count' == $l_field ? '; display: none' : '';
            $sLabel                = isset($d_field['label_field']) ? $d_field['label_field'] : $d_field['label'];
?>
          <li class="sc_ui_litem sc_ui_litem_total scAppDivSelectFieldsEnabled" id="sc_id_item_summ_<?php echo NM_encode_input($l_field); ?>"><table style="width: 100%"><tr><td><?php echo NM_encode_input($sLabel); ?></td><td style="text-align: right" class="sc-ui-total-options"><?php
            foreach ($d_field['options'] as $d_sum)
            {
                $aSummStatus[$l_field][] = $d_sum['op'];
?>
&nbsp;<span style="position: relative; margin-left: 0<?php echo $sOpDisplay; ?>" class="scAppDivSelectBoxEnabled sc-ui-select-available-<?php echo NM_encode_input($d_sum['op']); ?>"><?php echo NM_encode_input($d_sum['abbrev']); ?></span><?php
            }
?>
</td></tr></table></li>
<?php
        }
?>
         </ul>
        </td>
        <td style="vertical-align: top">
         <?php echo $this->Nm_lang['lang_othr_groupby_selected_fld']; ?>
         <ul class="sc_ui_sort_summ sc_ui_sortable sc_ui_ulist sc_ui_ulist_total scAppDivSelectFields" id="sc_id_summ_selected">
<?php
        foreach ($_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_order'] as $i_sum)
        {
            if ('' != $i_sum && isset($_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_display'][$i_sum]))
            {
                $d_sum = $_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_display'][$i_sum];
                if ($d_sum['display'])
                {
                    $sLabel = $d_sum['label'];
                    $sId    = '';
                    $bFound = false;
                    foreach ($_SESSION['sc_session'][$sc_init]['chart_alerta']['summarizing_fields_control'] as $l_field => $d_field)
                    {
                        foreach ($d_field['options'] as $d_option)
                        {
                            if ($d_option['index'] == $i_sum)
                            {
                                $sLabel = isset($d_field['label_field']) ? $d_field['label_field'] : $d_field['label'];
                                $sId    = $l_field;
                                $bFound = true;
                            }
                        }
                        if ($bFound)
                        {
                            break;
                        }
                    }
                    $sSelDisplay = 'NM_Count' == $sId ? ' style="display: none"' : '';
?>
          <li class="sc_ui_litem sc_ui_litem_total scAppDivSelectFieldsEnabled" id="sc_id_item_summ_<?php echo NM_encode_input($iItemCount); ?>"><table style="width: 100%"><tr><td><?php echo NM_encode_input($sLabel); ?></td><td style="text-align: right" class="sc-ui-total-options"><select class="sc-ui-select-<?php echo $sId; ?>"<?php echo $sSelDisplay; ?> onChange="scSummChange($(this))"><?php
                    foreach ($d_field['options'] as $d_option)
                    {
                        $sSelected = $i_sum == $d_option['index'] ? ' selected' : '';
?>
<option value="<?php echo $d_option['index']; ?>" class="sc-ui-select-option-<?php echo $d_option['op']; ?>"<?php echo $sSelected; ?>><?php echo NM_encode_input($d_option['label']); ?></option><?php
                    }
?>
</select></td></tr></table></li>
<?php
                    $iItemCount++;
                }
           }
       }
?>
         </ul>
        </td>
       </tr>
      </table>
  </td>
 </tr>
<?php
   }
?>
      </table>
<script type="text/javascript">
 var scSummItemCount, scSummStatus;
 $(function() {
  scSummItemCount = <?php echo $iItemCount; ?>;
<?php
   if ($bSummaryPage)
   {
?>
  scSummStatus = {
<?php
       foreach ($aSummStatus as $sSummId => $aSummData)
       {
?>
   <?php echo $sSummId; ?>: {
<?php
           foreach ($aSummData as $sSummOp)
           {
?>
     <?php echo $sSummOp; ?>: true,
<?php
           }
?>
   },
<?php
       }
?>
  };
<?php
   }
?>
  scSummOptionsInit();
 });
</script>
   </td>
  </table>
  </td>
  </tr>
   <tr>
  <td class="<?php echo ($embbed)? 'scAppDivToolbar':'scGridToolbar'; ?>" colspan=2>
<?php
   if (!$embbed)
   {
?>
   <?php echo nmButtonOutput($this->arr_buttons, "bok", "scPackGroupBy();document.Fsel_quebras.submit()", "scPackGroupBy();document.Fsel_quebras.submit()", "f_sel_sub", "", "", "", "absmiddle", "", "0px", $path_btn, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
?>
<?php
   }
   else
   {
?>
   <?php echo nmButtonOutput($this->arr_buttons, "bapply", "scPackGroupBy();scSubmitGroupBy('" . $tbar_pos . "')", "scPackGroupBy();scSubmitGroupBy('" . $tbar_pos . "')", "f_sel_sub", "", "", "", "absmiddle", "", "0px", $path_btn, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
?>
<?php
   }
?>
  &nbsp;&nbsp;&nbsp;
<?php
   if (!$embbed)
   {
?>
   <?php echo nmButtonOutput($this->arr_buttons, "bsair", "self.parent.tb_remove()", "self.parent.tb_remove()", "Bsair", "", "", "", "absmiddle", "", "0px", $path_btn, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
?>
<?php
   }
   else
   {
?>
   <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnGroupByHide('" . $tbar_pos . "')", "scBtnGroupByHide('" . $tbar_pos . "')", "Bsair", "", "", "", "absmiddle", "", "0px", $path_btn, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
?>
<?php
   }
?>
   </td></tr>
<?php
if (!$embbed)
{
?>
  </table>
  </div>
  </td>
  </tr>
<?php
}
?>
  </table>
<?php
if ($embbed)
{
?>
    </div>
<?php
}
?>
</FORM>
<script language="javascript">
$(function() {
<?php
   if ($bStartFree)
   {
?>
       scShowFree();
<?php
   }
   else
   {
?>
       scShowStatic();
<?php
   }
?>
});
</script>
<?php
   if (!$embbed)
   {
?>
<script language="javascript"> 
var bFixed = false;
function ajusta_window()
{
  var mt = $(document.getElementById("main_table"));
  if (0 == mt.width() || 0 == mt.height())
  {
    setTimeout("ajusta_window()", 50);
    return;
  }
  else if(!bFixed)
  {
    var oOrig = $(document.Fsel_quebras.sel_groupby),
        mHeight = oOrig.height(),
        mWidth  = oOrig.width() + 5;
    oOrig.height(mHeight);
    oOrig.width(mWidth);
    bFixed = true;
    if (navigator.userAgent.indexOf("Chrome/") > 0)
    {
      strMaxHeight = Math.min(($(window.parent).height()-80), mt.height());
      self.parent.tb_resize(strMaxHeight + 40, mt.width() + 40);
      setTimeout("ajusta_window()", 50);
      return;
    }
  }
  strMaxHeight = Math.min(($(window.parent).height()-80), mt.height());
  self.parent.tb_resize(strMaxHeight + 40, mt.width() + 40);
}
$( document ).ready(function() {
  ajusta_window();
});
</script>
<script>
  ajusta_window();
</script>
</BODY>
</HTML>
<?php
   }
}
}
