<form name="F2" method=post 
               action="./" 
               target="_self"> 
<input type="hidden" name="idalerta" value="<?php echo $this->form_encode_input($this->nmgp_dados_form['idalerta']); ?>">
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="master_nav" value="off">
<input type="hidden" name="sc_ifr_height" value="">
<input type="hidden" name="nmgp_parms" value=""/>
<input type="hidden" name="nmgp_ordem" value=""/>
<input type="hidden" name="nmgp_clone" value=""/>
<input type="hidden" name="nmgp_fast_search" value=""/>
<input type="hidden" name="nmgp_cond_fast_search" value=""/>
<input type="hidden" name="nmgp_arg_fast_search" value=""/>
<input type="hidden" name="nmgp_arg_dyn_search" value=""/>
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
</form> 
<form name="F3" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_chave" value=""/>
  <input type="hidden" name="nmgp_opcao" value=""/>
  <input type="hidden" name="nmgp_ordem" value=""/>
  <input type="hidden" name="nmgp_chave_det" value=""/>
  <input type="hidden" name="nmgp_quant_linhas" value=""/>
  <input type="hidden" name="nmgp_url_saida" value=""/>
  <input type="hidden" name="nmgp_parms" value=""/>
  <input type="hidden" name="nmgp_outra_jan" value=""/>
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
</form> 
<form name="F5" method="post" 
                  action="./" 
                  target="_self"> 
  <input type="hidden" name="nmgp_opcao" value="<?php if ($this->nm_Start_new) {echo "ini";} elseif ($this->sc_insert_on) {echo "final";} else {echo "igual";}?>"/>
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['parms']); ?>"/>
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
</form> 
<form name="F6" method="post" 
                  action="./" 
                  target="_self"> 
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
</form> 
<form name="FCAP" action="" method="post" target="_blank"> 
  <input type="hidden" name="SC_lig_apl_orig" value="form_alerta"/>
  <input type="hidden" name="nmgp_parms" value=""> 
  <input type="hidden" name="nmgp_outra_jan" value="true"> 
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
  <input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
</form> 
<div id="id_div_process" style="display: none; margin: 10px; whitespace: nowrap" class="scFormProcessFixed"><span class="scFormProcess"><img border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" />&nbsp;<?php echo $this->Ini->Nm_lang['lang_othr_prcs']; ?>...</span></div>
<div id="id_div_process_block" style="display: none; margin: 10px; whitespace: nowrap"><span class="scFormProcess"><img border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" />&nbsp;<?php echo $this->Ini->Nm_lang['lang_othr_prcs']; ?>...</span></div>
<div id="id_fatal_error" class="scFormLabelOdd" style="display: none; position: absolute"></div>
<script type="text/javascript"> 
<?php
  $JsonVarLiga = new Services_JSON();
?> 
var var_btn_responsables_id = <?php echo $JsonVarLiga->encode($this->nmgp_dados_form['id']); ?>;
function sc_btn_responsables()
{
    if (scEventControl_active("")) {
      setTimeout(function() { sc_btn_responsables(); }, 500);
      return;
    }
  tb_show('', '<?php echo $this->Ini->link_form_responsablexalerta_edit; ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&script_case_session=<?php echo session_id() ?>&nmgp_url_saida=modal&nmgp_parms=<?php echo "id*scin' + var_btn_responsables_id + '*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout"; ?>&nmgp_outra_jan=true&TB_iframe=true&height=440&width=630&modal=true', '');
}
 NM_tp_critica(1);
function nm_gp_submit(apl_lig, apl_saida, parms, opc, target, modal_h, modal_w, apl_name) 
{ 
   if (target == 'modal') 
   {
       par_modal = '?script_case_init=<?php echo $this->form_encode_input($this->Ini->sc_page) ?>&script_case_session=<?php echo $this->form_encode_input(session_id()) ?>&nmgp_outra_jan=true&nmgp_url_saida=modal';
       if (opc != null && opc != '') 
       {
           par_modal += '&nmgp_opcao=grid';
       }
       if (parms != null && parms != '') 
       {
           par_modal += '&nmgp_parms=' + parms;
       }
<?php
  if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_detal']))
  {
?>  
       parent.tb_show('', apl_lig + par_modal + '&TB_iframe=true&modal=true&height=' + modal_h + '&width=' + modal_w, '');
<?php
  }
  else
  {
?>  
       tb_show('', apl_lig + par_modal + '&TB_iframe=true&modal=true&height=' + modal_h + '&width=' + modal_w, '');
<?php
  }
?>  
       return;
   }
   document.F3.target               = "_self"; 
   document.F3.action               = apl_lig  ;
   if (opc != null && opc != "") 
   {
       document.F3.nmgp_opcao.value = "grid" ;
   }
   else
   {
       document.F3.nmgp_opcao.value = "" ;
   }
   if (target != null && target == '_blank') 
   {
       document.F3.nmgp_outra_jan.value = "true" ;
       document.F3.target           = target; 
   }
   document.F3.nmgp_url_saida.value = apl_saida ;
   document.F3.nmgp_parms.value     = parms ;
   document.F3.submit() ;
} 

function sc_inline_form(seqRow, keyParams, width, height)
{
  var callParams = "", i, listParams = keyParams.split(",");
  for (i = 0; i < listParams.length; i++)
  {
    callParams += listParams[i] + "*scin" + $("#id_sc_field_" + listParams[i] + seqRow).val() + "*scout";
  }
  nm_gp_submit('<?php echo $this->Ini->link_form_alerta_inline ?>', '<?php echo $this->nm_location ?>', 'NM_btn_insert*scinN*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinN*scoutNM_btn_navega*scinN*scoutNMSC_modal*scinok*scoutsc_redir_atualiz*scinok*scoutsc_inline_call*scinY*scoutsc_seq_row*scin' + seqRow + '*scout' + callParams, '', 'modal', height, width);
}

function scInlineFormReceive(oResponse, iLine)
{
  var i;
  oResp = oResponse;
  if (oResp["fldList"])
  {
    for (i = 0; i < oResp["fldList"].length; i++)
    {
      oResp["fldList"][i].fldName += iLine;
    }
  }
  scAjaxSetFields();
  scAjaxRedir();
}


function scInlineFormSend()
{
  return false;
}

function nm_navpage(x, op) 
{ 
    nm_move('navpage', x);
} 
function nm_move(x, y, z) 
{ 
    if (Nm_Proc_Atualiz)
    {
        return;
    }
    if (("inicio" == x || "retorna" == x) && "S" != Nav_permite_ret)
    {
        return;
    }
    if (("avanca" == x || "final" == x) && "S" != Nav_permite_ava)
    {
        return;
    }
    document.F2.nmgp_opcao.value = x; 
    document.F2.nmgp_ordem.value = y; 
    document.F2.nmgp_clone.value = "";
    if ("apl_detalhe" == x)
    {
        document.F2.nmgp_opcao.value = 'igual'; 
        document.F2.master_nav.value = 'on'; 
        if (z)
        {
            document.F2.sc_ifr_height.value = z;
        }
        document.F2.submit();
        return;
    }
    if ("clone" == x)
    {
        x = "novo";
        document.F2.nmgp_clone.value = "S";
        document.F2.nmgp_opcao.value = x; 
    }
    if ("fast_search" == x)
    {
        document.F2.nmgp_ordem.value = ''; 
        document.F2.nmgp_fast_search.value = scAjaxGetFieldSelect("nmgp_fast_search_" + y); 
        document.F2.nmgp_cond_fast_search.value = scAjaxGetFieldText("nmgp_cond_fast_search_" + y); 
        document.F2.nmgp_arg_fast_search.value = scAjaxGetFieldText("nmgp_arg_fast_search_" + y); 
    }
    if ("novo" == x || "edit_novo" == x)
    {
<?php
       $NM_parm_ifr = ($NM_run_iframe == 1) ? "NM_run_iframe?#?1?@?" : "";
?>
        document.F2.nmgp_parms.value = "<?php echo $NM_parm_ifr ?>";
        document.F2.submit();
    }
    else
    {
        do_ajax_form_alerta_navigate_form();
    }
} 
var sc_mupload_ok = true;
function nm_atualiza(x, y) 
{ 
<?php 
    if (isset($this->Refresh_aba_menu)) 
    {
?>
        parent.Tab_refresh['<?php echo $this->Refresh_aba_menu ?>'] = "S";
<?php 
    }
?>
    if (!sc_mupload_ok)
    {
        if (!confirm("<?php echo $this->Ini->Nm_lang['lang_errm_muok'] ?>"))
        {
            return;
        }
        sc_mupload_ok = true;
    }
    var Nm_submit_ok = true; 
    if (Nm_Proc_Atualiz)
    {
        return;
    }
    if (!scAjaxDetailProc())
    {
        return;
    }
<?php
    $NM_parm_ifr = ($NM_run_iframe == 1) ? "NM_run_iframe?#?1?@?" : "";
?>
    document.F1.nmgp_parms.value = "<?php echo $NM_parm_ifr ?>";
    document.F1.target = "_self";
    if (x == "muda_form") 
    { 
       document.F1.nmgp_num_form.value = y; 
    } 
    if (x == "excluir") 
    { 
       if (confirm ("<?php echo html_entity_decode($this->Ini->Nm_lang['lang_errm_remv'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"))  
       { 
           document.F1.nmgp_opcao.value = x; 
           document.F1.submit(); 
       } 
       else 
       { 
          return; 
       } 
    } 
    else 
    { 
       document.F1.nmgp_opcao.value = x; 
       if ("incluir" == x || "muda_form" == x || "recarga" == x || "recarga_mobile" == x)
       {
           Nm_Proc_Atualiz = true;
           document.F1.submit();
       }
       else
       {
           Nm_Proc_Atualiz = true;
           do_ajax_form_alerta_submit_form();
       }
    } 
    if (Nm_submit_ok)
    { 
        Nm_Proc_Atualiz = true;
    } 
} 
function nm_mostra_img(imagem, altura, largura)
{
    tb_show('', imagem, '');
}
function nm_recarga_form(nm_ult_ancora, nm_ult_page) 
{ 
    document.F1.target = "_self";
    document.F1.nmgp_parms.value = "";
    document.F1.nmgp_ancora.value= nm_ult_page; 
    document.F1.nmgp_ancora.value= nm_ult_page; 
    document.F1.nmgp_opcao.value= "recarga"; 
    document.F1.action += "#" +  nm_ult_ancora;
    document.F1.submit(); 
} 
function nm_link_url(Sc_url)
{
    if (Sc_url.substr(0, 7) != 'http://' && Sc_url.substr(0, 8) != 'https://')
    {
        Sc_url = 'http://' + Sc_url;
    }
    return Sc_url;
}
function nm_display_googlemaps(Sc_data, Sc_mode, Sc_width, Sc_height)
{
    if (null == Sc_width || 0 >= Sc_width)
    {
        Sc_width = 425;
    }
    if (null == Sc_height || 0 >= Sc_height)
    {
        Sc_height = 350;
    }
    if ('url' == Sc_data['type'])
    {
        nm_display_googlemaps_url(scAjaxGetFieldText(Sc_data['data']), Sc_mode, Sc_width, Sc_height);
    }
    else if ('latlng' == Sc_data['type'])
    {
        nm_display_googlemaps_latlng(Sc_data, Sc_mode, Sc_width, Sc_height);
    }
    else
    {
        nm_display_googlemaps_geocode(Sc_data, Sc_mode, Sc_width, Sc_height);
    }
}
function nm_display_googlemaps_url(Sc_url, Sc_mode, Sc_width, Sc_height)
{
    Sc_url  = sc_trim(Sc_url);
    Sc_gmap = 'http://maps.google.com/';
    if ('' == Sc_url)
    {
        return;
    }
    else if (Sc_url.indexOf("maps.google.com") > -1)
    {
        Sc_gmap = "";
    }
    else if ('http://maps.google.com' == Sc_url.substr(0, 22))
    {
        Sc_url = Sc_url.substr(22);
    }
    else if ('maps.google.com' == Sc_url.substr(0, 15))
    {
        Sc_url = Sc_url.substr(15);
    }
    Sc_url  = Sc_url.replace(/__NM_PLUS__/g, '+');
    if ('/?' == Sc_url.substr(0, 2))
    {
        Sc_url = Sc_url.substr(1);
    }
    var iLength = Sc_url.length - 13;
    if ('&output=embed' == Sc_url.substr(iLength))
    {
        Sc_url = Sc_url.substr(0, iLength);
    }
    else if ('&source=embed' == Sc_url.substr(iLength))
    {
        Sc_url = Sc_url.substr(0, iLength);
    }
    if (null != Sc_mode && 'modal' == Sc_mode)
    {
        tb_show('', Sc_gmap + Sc_url + '&output=embed&TB_iframe=true&height=' + Sc_height + '&width=' + Sc_width, '');
        return;
    }
    window.open(Sc_gmap + Sc_url + '&source=embed');
}
function nm_display_googlemaps_latlng(Sc_data, Sc_mode, Sc_width, Sc_height)
{
    var aPar = new Array(
        'type='  + Sc_data['type'],
        'depth=' + Sc_data['depth'],
        'latitude='   + scAjaxGetFieldText(Sc_data['latitude']),
        'longitude='   + scAjaxGetFieldText(Sc_data['longitude'])
    );
    var sUrl = 'form_alerta_gmap.php?script_case_init=<?php echo $this->Ini->sc_page; ?>&script_case_session=<?php echo session_id() ?>&' + aPar.join('&') + '&height=' + Sc_height + '&width=' + Sc_width;
    if (null != Sc_mode && 'modal' == Sc_mode)
    {
        tb_show('', sUrl + '&TB_iframe=true&height=' + (Sc_height + 10) + '&width=' + (Sc_width + 10), '');
        return;
    }
    window.open(sUrl);
}
function nm_display_googlemaps_geocode(Sc_data, Sc_mode, Sc_width, Sc_height)
{
    var aPar = new Array(
        'type='  + Sc_data['type'],
        'depth=' + Sc_data['depth']
    );
    for (i = 0; i < Sc_data['data'].length; i++)
    {
        aPar[ aPar.length ] = 'data[]=' + scAjaxGetFieldText(Sc_data['data'][i]);
    }
    var sUrl = 'form_alerta_gmap.php?script_case_init=<?php echo $this->Ini->sc_page; ?>&script_case_session=<?php echo session_id() ?>&' + aPar.join('&') + '&height=' + Sc_height + '&width=' + Sc_width;
    if (null != Sc_mode && 'modal' == Sc_mode)
    {
        tb_show('', sUrl + '&TB_iframe=true&height=' + (Sc_height + 10) + '&width=' + (Sc_width + 10), '');
        return;
    }
    window.open(sUrl);
}
function sc_trim(str, chars) {
        return sc_ltrim(sc_rtrim(str, chars), chars);
}
function sc_ltrim(str, chars) {
        chars = chars || "\\s";
        return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
}
function sc_rtrim(str, chars) {
        chars = chars || "\\s";
        return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
}
var scDlChk;
var scDlTOut;
function nm_mostra_doc(campo1, campo2, campo3)
{
    while (campo2.lastIndexOf("&") != -1)
    {
       campo2 = campo2.replace("&" , "**Ecom**");
    }
    while (campo2.lastIndexOf("#") != -1)
    {
       campo2 = campo2.replace("#" , "**Jvel**");
    }
    while (campo2.lastIndexOf("+") != -1)
    {
       campo2 = campo2.replace("+" , "**Plus**");
    }
    while (campo2.lastIndexOf("+") != -1)
    {
       campo2 = campo2.replace("%" , "**Perc**");
    }
    scDlChk = setTimeout(function() { sc_check_for_download(); }, 1000);
    scDlTOut = setTimeout(function() { clearTimeout(scDlChk); }, 10000);
    NovaJanela = window.open ("form_alerta_doc.php?script_case_init=<?php echo $this->form_encode_input($this->Ini->sc_page); ?>&script_case_session=<?php echo session_id() ?>&nm_cod_doc=" + campo1 + "&nm_nome_doc=" + encodeURIComponent(campo2) + "&nm_cod_apl=" + campo3, "sc_name_download_iframe", "resizable, scrollbars");
}
function sc_check_for_download()
{
    if (scDlChk) {
        clearTimeout(scDlChk);
    }
    var ifrContent = $("#sc-id-download-iframe").contents().find("body").html();
    if ("" == ifrContent) {
        scDlChk = setTimeout(function() { sc_check_for_download() }, 1000);
    }
    else {
        _scAjaxShowMessage("", ifrContent, false, null, true, "Ok", 0, 0, 0, 0, "", "", "", false, true);
        clearTimeout(scDlTOut);
    }
}
function sc_escalar_onchange()
{
   
}
var hasJsFormOnload = true;
function sc_form_onload()
{
   nm_field_disabled("origenalerta=disabled", "U");
   
}

function scCssFocus(oHtmlObj)
{
  if (navigator.userAgent && 0 < navigator.userAgent.indexOf("MSIE") && "select" == oHtmlObj.type.substr(0, 6))
    return;
  $(oHtmlObj).addClass('scFormObjectFocusOdd')
             .removeClass('scFormObjectOdd');
}

function scCssBlur(oHtmlObj)
{
  if (navigator.userAgent && 0 < navigator.userAgent.indexOf("MSIE") && "select" == oHtmlObj.type.substr(0, 6))
    return;
  $(oHtmlObj).addClass('scFormObjectOdd')
             .removeClass('scFormObjectFocusOdd');
}

 function nm_submit_cap(apl_dest, parms)
 {
    document.FCAP.action = apl_dest;
    document.FCAP.nmgp_parms.value = parms;
    window.open('','jan_cap','location=no,menubar=no,resizable,scrollbars,status=no,toolbar=no');
    document.FCAP.target = "jan_cap"; 
    document.FCAP.submit();
 }
</script> 
