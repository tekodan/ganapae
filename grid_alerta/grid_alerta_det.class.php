<?php
//--- 
class grid_alerta_det
{
   var $Ini;
   var $Erro;
   var $Db;
   var $nm_data;
   var $NM_raiz_img; 
   var $nmgp_botoes; 
   var $nm_location;
   var $idalerta;
   var $alerta;
   var $rutaimagen;
   var $fecha;
   var $municipio;
   var $latitud;
   var $longitud;
   var $estado;
   var $geo;
   var $correo;
   var $nombre;
   var $celular;
   var $direccion;
   var $rutavideo;
   var $rutaaudio;
   var $canal;
   var $radicado;
   var $origenalerta;
   var $departamento;
   var $lugar;
   var $escalar;
   var $fechaenatencion;
   var $fechafinalizada;
 function monta_det()
 {
    global 
           $nm_saida, $nm_lang, $nmgp_cor_print, $nmgp_tipo_pdf;
    $this->nmgp_botoes['det_pdf'] = "on";
    $this->nmgp_botoes['det_print'] = "on";
    $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
    if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_alerta']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_alerta']['btn_display']))
    {
        foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_alerta']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
        {
            $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
        }
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['campos_busca']))
    { 
        $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['campos_busca'];
        if ($_SESSION['scriptcase']['charset'] != "UTF-8")
        {
            $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
        }
        $this->escalar = $Busca_temp['escalar']; 
        $tmp_pos = strpos($this->escalar, "##@@");
        if ($tmp_pos !== false)
        {
            $this->escalar = substr($this->escalar, 0, $tmp_pos);
        }
    } 
    $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['where_orig'];
    $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['where_pesq'];
    $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['where_pesq_filtro'];
    $this->nm_field_dinamico = array();
    $this->nm_order_dinamico = array();
    $this->nm_data = new nm_data("en_us");
    $this->nm_where_dinamico = "";
    $_SESSION['scriptcase']['grid_alerta']['contr_erro'] = 'on';
if (!isset($_SESSION['seconds'])) {$_SESSION['seconds'] = "";}
if (!isset($this->sc_temp_seconds)) {$this->sc_temp_seconds = (isset($_SESSION['seconds'])) ? $_SESSION['seconds'] : "";}
if (!isset($_SESSION['minutes'])) {$_SESSION['minutes'] = "";}
if (!isset($this->sc_temp_minutes)) {$this->sc_temp_minutes = (isset($_SESSION['minutes'])) ? $_SESSION['minutes'] : "";}
if (!isset($_SESSION['hours'])) {$_SESSION['hours'] = "";}
if (!isset($this->sc_temp_hours)) {$this->sc_temp_hours = (isset($_SESSION['hours'])) ? $_SESSION['hours'] : "";}
if (!isset($_SESSION['mday'])) {$_SESSION['mday'] = "";}
if (!isset($this->sc_temp_mday)) {$this->sc_temp_mday = (isset($_SESSION['mday'])) ? $_SESSION['mday'] : "";}
if (!isset($_SESSION['mon'])) {$_SESSION['mon'] = "";}
if (!isset($this->sc_temp_mon)) {$this->sc_temp_mon = (isset($_SESSION['mon'])) ? $_SESSION['mon'] : "";}
if (!isset($_SESSION['year'])) {$_SESSION['year'] = "";}
if (!isset($this->sc_temp_year)) {$this->sc_temp_year = (isset($_SESSION['year'])) ? $_SESSION['year'] : "";}
 include "/var/www/html/pae/ojolib.php";


$cons1="SELECT filename,message_text, message_date, message_sender, message_subject,latitude,longitude,b.message_id,municipio,lugar,sender_email,content_type  FROM attachment as a,message as b where b.enviado!='1' and  a.message_id=b.message_id and content_type='2' order by a.message_id desc ";

 
      $nm_select = "$cons1"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->meus_dados = $this->Ini->nm_db_conn_mysql_ojo->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->meus_dados = false;
          $this->meus_dados_erro = $this->Ini->nm_db_conn_mysql_ojo->ErrorMsg();
      } 
;

if ($this->meus_dados  === false)
{
echo "Erro de acesso ";
}
else
{
while (!$this->meus_dados->EOF){

echo $cons2="SELECT filename,message_text, message_date, message_sender, message_subject,latitude,longitude,b.message_id  FROM attachment as a,message as b where b.enviado!='1' and  a.message_id=b.message_id and content_type='1' and b.message_id='".$this->meus_dados->fields[7]."' order by a.message_id desc ";

 
      $nm_select = "$cons2"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->meus_dados2 = $this->Ini->nm_db_conn_mysql_ojo->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->meus_dados2 = false;
          $this->meus_dados2_erro = $this->Ini->nm_db_conn_mysql_ojo->ErrorMsg();
      } 
;

if ($this->meus_dados2  === false)
{
echo "Error de acesso ";
}
else
{
while (!$this->meus_dados2->EOF){
$ruta=$this->meus_dados2->fields[0];
$ruta2=$_SERVER['DOCUMENT_ROOT'];
$nombre=array_pop(explode('/',$ruta));
echo "http://stiga.narino.gov.co/pae/channels/$ruta"."$ruta2/pae/_lib/file/img/$nombre";
!@copy("http://stiga.narino.gov.co/pae/channels/$ruta","$ruta2/pae/_lib/file/img/$nombre");   
	
$this->meus_dados2->MoveNext();	
}
$this->meus_dados2->Close();
}

	
	
$ruta=$this->meus_dados->fields[0];
$ruta2=$_SERVER['DOCUMENT_ROOT'];
$nombre2=array_pop(explode('/',$ruta));
 echo "http://stiga.narino.gov.co/pae/channels/$ruta"."$ruta2/pae/_lib/file/doc/$nombre2";
		  !@copy("http://stiga.narino.gov.co/pae/channels/$ruta","$ruta2/pae/_lib/file/doc/$nombre2");   

	echo $check_sql = "SELECT longitud,latitud"
   . " FROM colegios"
   . " WHERE MUNICIPIO = '".$this->meus_dados->fields[8]."'"
	."and NOMBRE_SEDE_EDUCATIVA='".$this->meus_dados->fields[9]."'";
 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
 
if($this->rs[0][0]==''){
$this->rs[0][0]='0';
}	

	
if($this->rs[0][1]==''){
$this->rs[0][1]='0';
}	
	
$fechaactual = getdate();

$fecha= "$fechaactual$this->sc_temp_year-$fechaactual$this->sc_temp_mon-$fechaactual$this->sc_temp_mday $fechaactual$this->sc_temp_hours:$fechaactual$this->sc_temp_minutes:$fechaactual$this->sc_temp_seconds";

echo $cons="INSERT INTO alerta(nombre,fecha,alerta,celular,origenalerta,rutaimagen,latitud,longitud,rutaaudio,municipio,lugar,correo,escalar) VALUES('".$this->meus_dados->fields[1]."','".$fecha."','".$this->meus_dados->fields[1]."','".$this->meus_dados->fields[4]."','OjoVoz','".$nombre."','".$this->rs[0][0]."','".$this->rs[0][1]."','$nombre2', '".$this->meus_dados->fields[8]."','".$this->meus_dados->fields[9]."','".$this->meus_dados->fields[10]."','Sin Atender')";

     $nm_select = $cons; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      ;	
$cons2="update message set enviado='1' where message_id='".$this->meus_dados->fields[7]."'";

     $nm_select = $cons2; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Ini->nm_db_conn_mysql_ojo->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Ini->nm_db_conn_mysql_ojo->ErrorMsg());
             exit;
         }
         $rf->Close();
      ;
	
	
	
$this->meus_dados->MoveNext();
}
$this->meus_dados->Close();
}
?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php
if (isset($this->sc_temp_year)) {$_SESSION['year'] = $this->sc_temp_year;}
if (isset($this->sc_temp_mon)) {$_SESSION['mon'] = $this->sc_temp_mon;}
if (isset($this->sc_temp_mday)) {$_SESSION['mday'] = $this->sc_temp_mday;}
if (isset($this->sc_temp_hours)) {$_SESSION['hours'] = $this->sc_temp_hours;}
if (isset($this->sc_temp_minutes)) {$_SESSION['minutes'] = $this->sc_temp_minutes;}
if (isset($this->sc_temp_seconds)) {$_SESSION['seconds'] = $this->sc_temp_seconds;}
$_SESSION['scriptcase']['grid_alerta']['contr_erro'] = 'off'; 
    if  (!empty($this->nm_where_dinamico)) 
    {   
        $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['where_pesq'] .= $this->nm_where_dinamico;
    }   
    $this->NM_raiz_img  = ""; 
    $this->sc_proc_grid = false; 
    include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
    $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['seq_dir'] = 0; 
    $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['sub_dir'] = array(); 
   $Str_date = strtolower($_SESSION['scriptcase']['reg_conf']['date_format']);
   $Lim   = strlen($Str_date);
   $Ult   = "";
   $Arr_D = array();
   for ($I = 0; $I < $Lim; $I++)
   {
       $Char = substr($Str_date, $I, 1);
       if ($Char != $Ult)
       {
           $Arr_D[] = $Char;
       }
       $Ult = $Char;
   }
   $Prim = true;
   $Str  = "";
   foreach ($Arr_D as $Cada_d)
   {
       $Str .= (!$Prim) ? $_SESSION['scriptcase']['reg_conf']['date_sep'] : "";
       $Str .= $Cada_d;
       $Prim = false;
   }
   $Str = str_replace("a", "Y", $Str);
   $Str = str_replace("y", "Y", $Str);
   $nm_data_fixa = date($Str); 
   $this->nm_data->SetaData(date("Y/m/d H:i:s"), "YYYY/MM/DD HH:II:SS"); 
   $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_edit.php", "F", "nmgp_Form_Num_Val") ; 
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
   { 
       $nmgp_select = "SELECT latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela; 
   } 
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
   { 
       $nmgp_select = "SELECT latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela; 
   } 
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle)) 
   { 
       $nmgp_select = "SELECT latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, TO_DATE(TO_CHAR(fecha, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), escalar, TO_DATE(TO_CHAR(fechaenatencion, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), TO_DATE(TO_CHAR(fechafinalizada, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss') from " . $this->Ini->nm_tabela; 
   } 
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
   { 
       $nmgp_select = "SELECT latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela; 
   } 
   else 
   { 
       $nmgp_select = "SELECT latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela; 
   } 
   $parms_det = explode("*PDet*", $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['chave_det']) ; 
   foreach ($parms_det as $key => $cada_par)
   {
       $parms_det[$key] = $this->Db->qstr($parms_det[$key]);
       $parms_det[$key] = substr($parms_det[$key], 1, strlen($parms_det[$key]) - 2);
   } 
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
   {
       $nmgp_select .= " where  idalerta = $parms_det[0]" ;  
   } 
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
   {
       $nmgp_select .= " where  idalerta = $parms_det[0]" ;  
   } 
   else 
   { 
       $nmgp_select .= " where  idalerta = $parms_det[0]" ;  
   } 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
   $rs = $this->Db->Execute($nmgp_select) ; 
   if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
   { 
       $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit ; 
   }  
   $this->latitud = $rs->fields[0] ;  
   $this->longitud = $rs->fields[1] ;  
   $this->estado = $rs->fields[2] ;  
   $this->idalerta = $rs->fields[3] ;  
   $this->idalerta = (string)$this->idalerta;
   $this->geo = $rs->fields[4] ;  
   $this->correo = $rs->fields[5] ;  
   $this->nombre = $rs->fields[6] ;  
   $this->celular = $rs->fields[7] ;  
   $this->direccion = $rs->fields[8] ;  
   $this->alerta = $rs->fields[9] ;  
   $this->rutavideo = $rs->fields[10] ;  
   $this->rutaaudio = $rs->fields[11] ;  
   $this->rutaimagen = $rs->fields[12] ;  
   $this->canal = $rs->fields[13] ;  
   $this->radicado = $rs->fields[14] ;  
   $this->origenalerta = $rs->fields[15] ;  
   $this->departamento = $rs->fields[16] ;  
   $this->municipio = $rs->fields[17] ;  
   $this->lugar = $rs->fields[18] ;  
   $this->fecha = $rs->fields[19] ;  
   $this->escalar = $rs->fields[20] ;  
   $this->fechaenatencion = $rs->fields[21] ;  
   $this->fechafinalizada = $rs->fields[22] ;  
   $_SESSION['scriptcase']['grid_alerta']['contr_erro'] = 'on';
 $opcion=$this->escalar ;
switch ($opcion) {
    case 'Sin Atender':
       $this->state ="<button  class='btn btn-danger'>No Atendida</button>";
        break;
    case 'Rechazada':
      $this->state ="<button  class='btn btn-default' style='background:grey'>Rechazada</button>";
        break;
    case 'En Atencion':
    $this->state ="<button class='btn btn-info'>En Atencion</button>";
					$fechaenatencion=$this->fechaenatencion ;
					 $fechafinalizada=$this->fechafinalizada ;	

					if(strtotime($this->fechafinalizada)>strtotime(@$this->fechaenatencion)){
					$segundos=strtotime(@$this->fechaenatencion) - strtotime(@$this->fechafinalizada);
					}

					else{
					$segundos=strtotime(@$this->fechaenatencion) - strtotime('now');
					}

					$diferencia_dias=(intval($segundos/60/60/24))*-1;
					if($diferencia_dias==1 || $diferencia_dias==0 ){
						$this->semaforo ="<button  class='btn btn-sucess'>$diferencia_dias</button>";
					}
					else{
					if($diferencia_dias==2 ){
						$this->semaforo ="<button  class='btn btn-warning'>$diferencia_dias</button>";
					}
					if($diferencia_dias>=3 ){
						$this->semaforo ="<button  class='btn btn-danger'>$diferencia_dias</button>";
					}
						}

        break;
	case 'Finalizada':
        $this->state ="<button class='btn btn-default'>Finalizada</button>";
	
        break;
}


$this->audio ="<div><audio controls class='audiomp3'>
<source src='http://stiga.narino.gov.co/pae/_lib/file/doc/".$this->rutaaudio ."' type='audio/mpeg' />
</audio></div>";






$_SESSION['scriptcase']['grid_alerta']['contr_erro'] = 'off'; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['cmp_acum']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['cmp_acum']))
   {
       $parms_acum = explode(";", $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['cmp_acum']);
       foreach ($parms_acum as $cada_par)
       {
          $cada_val = explode("=", $cada_par);
          $this->$cada_val[0] = $cada_val[1];
       }
   }
//--- 
   $nm_saida->saida("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"\r\n");
   $nm_saida->saida("            \"http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd\">\r\n");
   $nm_saida->saida("<html" . $_SESSION['scriptcase']['reg_conf']['html_dir'] . ">\r\n");
   $nm_saida->saida("<HEAD>\r\n");
   $nm_saida->saida("   <TITLE>" . $this->Ini->Nm_lang['lang_othr_detl_titl'] . " - alerta</TITLE>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Content-Type\" content=\"text/html; charset=" . $_SESSION['scriptcase']['charset_html'] . "\" />\r\n");
   $nm_saida->saida(" <META http-equiv=\"Expires\" content=\"Fri, Jan 01 1900 00:00:00 GMT\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Last-Modified\" content=\"" . gmdate("D, d M Y H:i:s") . " GMT\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Cache-Control\" content=\"no-store, no-cache, must-revalidate\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Cache-Control\" content=\"post-check=0, pre-check=0\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Pragma\" content=\"no-cache\"/>\r\n");
   if ($_SESSION['scriptcase']['proc_mobile'])
   {
       $nm_saida->saida(" <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\" />\r\n");
   }

   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery/js/jquery.js\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/malsup-blockui/jquery.blockUI.js\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\">var sc_pathToTB = '" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/';</script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox-compressed.js\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/gmap3/gmap3.min.js\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=" . $_SESSION['scriptcase']['googlemaps_api_key'] . "\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/jquery.scInput.js\"></script>\r\n");
           $nm_saida->saida("   <script type=\"text/javascript\">\r\n");
           $nm_saida->saida("    function scShowGmapTbox(sPar) {\r\n");
           $nm_saida->saida("      tb_show('', sPar, '');\r\n");
           $nm_saida->saida("    }\r\n");
           $nm_saida->saida("    var aGmapQueue = new Array();\r\n");
           $nm_saida->saida("    function procGmapQueue() {\r\n");
           $nm_saida->saida("      if (aGmapQueue.length > 0) {\r\n");
           $nm_saida->saida("        var aGmapInfo = aGmapQueue.shift().split('#_SC_#');\r\n");
           $nm_saida->saida("        $('#' + aGmapInfo[0]).attr('src', aGmapInfo[1]);\r\n");
           $nm_saida->saida("      }\r\n");
           $nm_saida->saida("      setTimeout('procGmapQueue()', 500);\r\n");
           $nm_saida->saida("    }\r\n");
           $nm_saida->saida("    procGmapQueue();\r\n");
           $nm_saida->saida("   </script>\r\n");
   $nm_saida->saida(" <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox.css\" type=\"text/css\" media=\"screen\" />\r\n");
   if (($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['det_print'] == "print" && strtoupper($nmgp_cor_print) == "PB") || $nmgp_tipo_pdf == "pb")
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid_bw.css\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid_bw" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" /> \r\n");
   }
   else
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid.css\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" /> \r\n");
   }
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "grid_alerta/grid_alerta_det_" . strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) . ".css\" />\r\n");
   if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['pdf_det'] && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['det_print'] != "print")
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/buttons/" . $this->Ini->Str_btn_css . "\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" href=\"../_lib/css/" . $_SESSION['scriptcase']['erro']['str_schema'] . "\" type=\"text/css\" media=\"screen\" />\r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" href=\"../_lib/css/" . $_SESSION['scriptcase']['erro']['str_schema_dir'] . "\" type=\"text/css\" media=\"screen\" />\r\n");
   }
   $nm_saida->saida("</HEAD>\r\n");
   $nm_saida->saida("  <body class=\"scGridPage\">\r\n");
   $nm_saida->saida("  " . $this->Ini->Ajax_result_set . "\r\n");
   $nm_saida->saida("<table border=0 align=\"center\" valign=\"top\" ><tr><td style=\"padding: 0px\"><div class=\"scGridBorder\"><table width='100%' cellspacing=0 cellpadding=0><tr><td>\r\n");
   $nm_saida->saida("<tr><td class=\"scGridTabelaTd\">\r\n");
   $nm_saida->saida("<style>\r\n");
   $nm_saida->saida("#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 \r\n");
   $nm_saida->saida("#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}\r\n");
   $nm_saida->saida("</style>\r\n");
   $nm_saida->saida("<div style=\"width: 100%\">\r\n");
   $nm_saida->saida(" <div class=\"scGridHeader\" style=\"height:11px; display: block; border-width:0px; \"></div>\r\n");
   $nm_saida->saida(" <div style=\"height:37px; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block\">\r\n");
   $nm_saida->saida(" 	<table style=\"width:100%; border-collapse:collapse; padding:0;\">\r\n");
   $nm_saida->saida("    	<tr>\r\n");
   $nm_saida->saida("        	<td id=\"lin1_col1\" class=\"scGridHeaderFont\"><span>" . $this->Ini->Nm_lang['lang_othr_detl_titl'] . " - alerta</span></td>\r\n");
   $nm_saida->saida("            <td id=\"lin1_col2\" class=\"scGridHeaderFont\"><span></span></td>\r\n");
   $nm_saida->saida("        </tr>\r\n");
   $nm_saida->saida("    </table>		 \r\n");
   $nm_saida->saida(" </div>\r\n");
   $nm_saida->saida("</div>\r\n");
   $nm_saida->saida("  </TD>\r\n");
   $nm_saida->saida(" </TR>\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['det_print'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['pdf_det']) 
   { 
       $nm_saida->saida("   <tr><td class=\"scGridTabelaTd\">\r\n");
       $nm_saida->saida("    <table width=\"100%\"><tr>\r\n");
       $nm_saida->saida("     <td class=\"scGridToolbar\">\r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"center\" width=\"33%\"> \r\n");
       if ($this->nmgp_botoes['det_pdf'] == "on")
       {
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bpdf", "", "", "Dpdf_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->path_link . "grid_alerta/grid_alerta_config_pdf.php?nm_opc=pdf_det&nm_target=0&nm_cor=cor&papel=1&orientacao=1&largura=1200&conf_larg=S&conf_fonte=10&language=es&conf_socor=S&KeepThis=false&TB_iframe=true&modal=true", "", "only_text", "text_right", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
       }
       if ($this->nmgp_botoes['det_print'] == "on")
       {
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bprint", "", "", "Dprint_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->path_link . "grid_alerta/grid_alerta_config_print.php?nm_opc=detalhe&nm_cor=AM&language=es&KeepThis=true&TB_iframe=true&modal=true", "", "only_text", "text_right", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
       }
       $Cod_Btn = nmButtonOutput($this->arr_buttons, "bvoltar", "document.F3.submit()", "document.F3.submit()", "sc_b_sai_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
       $nm_saida->saida("           $Cod_Btn \r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"right\" width=\"33%\"> \r\n");
       $nm_saida->saida("     </td>\r\n");
       $nm_saida->saida("    </tr></table>\r\n");
       $nm_saida->saida("   </td></tr>\r\n");
   } 
   $nm_saida->saida("<tr><td class=\"scGridTabelaTd\">\r\n");
   $nm_saida->saida("<TABLE style=\"padding: 0px; spacing: 0px; border-width: 0px;\"  align=\"center\" valign=\"top\" width=\"100%\">\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['latitud'])) ? $this->New_label['latitud'] : "Latitud"; 
          $conteudo = trim(sc_strip_script($this->latitud)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_latitud_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_latitud_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['longitud'])) ? $this->New_label['longitud'] : "Longitud"; 
          $conteudo = trim(sc_strip_script($this->longitud)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_longitud_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_longitud_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['estado'])) ? $this->New_label['estado'] : "Estado"; 
          $conteudo = trim(sc_strip_script($this->estado)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_estado_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_estado_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['idalerta'])) ? $this->New_label['idalerta'] : "Id"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->idalerta))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_idalerta_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_idalerta_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['geo'])) ? $this->New_label['geo'] : "Localizacion"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->geo))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
             $gmap_latitud = $this->latitud;
             $gmap_longitud = $this->longitud;
             $aGmapsData = array(
                 'type' => 'latlng',
                 'latitude' => $gmap_latitud,
                 'longitude' => $gmap_longitud,
                 'depth' => '14',
             );
             $conteudo = $this->scGooglemapsThickbox($aGmapsData, "__SC_BTN__", $this->Ini->cor_link_dados, 600, 300);
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_geo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_geo_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['correo'])) ? $this->New_label['correo'] : "Correo"; 
          $conteudo = trim(sc_strip_script($this->correo)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_correo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_correo_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['nombre'])) ? $this->New_label['nombre'] : "Nombre"; 
          $conteudo = trim(sc_strip_script($this->nombre)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_nombre_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_nombre_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['celular'])) ? $this->New_label['celular'] : "Celular"; 
          $conteudo = trim(sc_strip_script($this->celular)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_celular_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_celular_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['direccion'])) ? $this->New_label['direccion'] : "Direccion"; 
          $conteudo = trim(sc_strip_script($this->direccion)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_direccion_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_direccion_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['alerta'])) ? $this->New_label['alerta'] : "Alerta"; 
          $conteudo = trim(sc_strip_script($this->alerta)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else   
          { 
              $conteudo = nl2br($conteudo) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_alerta_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_alerta_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['rutavideo'])) ? $this->New_label['rutavideo'] : "Rutavideo"; 
          $conteudo = trim(sc_strip_script($this->rutavideo)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_rutavideo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_rutavideo_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['rutaaudio'])) ? $this->New_label['rutaaudio'] : "Audio"; 
          $conteudo = $this->rutaaudio; 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['opcao'] != "pdf" && $conteudo != "&nbsp;") 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['sub_dir'][$_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['seq_dir']]  = "";
              $nm_img_icone = "";
              $name_protect = base64_encode($this->rutaaudio);
              $conteudo = "$nm_img_icone<a href=\"javascript:nm_mostra_doc('" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['seq_dir'] . "', '" . str_replace("'", "\'", $name_protect) . "', 'grid_alerta')\" target=\"_self\" class=\"" . scGridFieldEvenLink . "\">$conteudo</a>";  
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['seq_dir']++; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_rutaaudio_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_rutaaudio_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['rutaimagen'])) ? $this->New_label['rutaimagen'] : "Imagen"; 
          $conteudo = $this->rutaimagen; 
          if (empty($this->rutaimagen) || $this->rutaimagen == "none") 
          { 
              $conteudo = "&nbsp;" ; 
              $out_rutaimagen = "" ; 
          } 
          elseif ($this->Ini->Gd_missing)
          { 
              $conteudo = "<span class=\"scErrorLine\">" . $this->Ini->Nm_lang['lang_errm_gd'] . "</span>";
              $out_rutaimagen = "" ; 
          } 
          else 
          { 
              $nm_local_img = $this->Ini->path_imagens . "" . "/"; 
              $md5_rutaimagen  = md5("" . $conteudo);
              $in_rutaimagen = $this->Ini->root . $nm_local_img . $conteudo;
              $nm_tmp_ver_bk = strpos($conteudo, " "); 
              if ($nm_tmp_ver_bk === false)
              {
                  if (is_file($in_rutaimagen))  
                  { 
                     $NM_ler_img = true;
                     $out_rutaimagen = $this->Ini->path_imag_temp . "/sc_rutaimagen_" . $md5_rutaimagen . ".jpg" ;  
                     if (is_file($this->Ini->root . $out_rutaimagen))  
                     { 
                         $NM_img_time = filemtime($this->Ini->root . $out_rutaimagen) + 0; 
                         if ($this->Ini->nm_timestamp < $NM_img_time)  
                         { 
                             $NM_ler_img = false;
                             $in_rutaimagen = $this->Ini->root . $out_rutaimagen;
                         } 
                     } 
                     if ($NM_ler_img) 
                     { 
                         $tmp_rutaimagen = fopen($in_rutaimagen, "r") ; 
                         $reg_rutaimagen = fread($tmp_rutaimagen, filesize($in_rutaimagen)) ; 
                         fclose($tmp_rutaimagen) ;  
                         $arq_rutaimagen = fopen($this->Ini->root . $out_rutaimagen, "w") ;  
                         fwrite($arq_rutaimagen, $reg_rutaimagen); 
                         fclose($arq_rutaimagen) ;  
                         $in_rutaimagen = $this->Ini->root . $out_rutaimagen;
                     } 
                     $nm_local_img = ""; 
                     $conteudo     = $out_rutaimagen; 
                  } 
              }
              if (is_file($in_rutaimagen))  
              { 
                  $nm_return_img = array(); 
                  $sc_obj_img = new nm_trata_img($this->Ini->root . $nm_local_img . $conteudo);
                  $nm_image_largura = $sc_obj_img->getWidth();
                  $nm_image_altura = $sc_obj_img->getHeight();
              } 
              $NM_redim_img = true;
              $out_rutaimagen = $this->Ini->path_imag_temp . "/sc_rutaimagen_10050" . $md5_rutaimagen . ".gif" ;  
              if (is_file($this->Ini->root . $out_rutaimagen))  
              { 
                  $NM_img_time = filemtime($this->Ini->root . $out_rutaimagen) + 0; 
                  if ($this->Ini->nm_timestamp < $NM_img_time)  
                  { 
                      $NM_redim_img = false;
                  } 
              } 
              if ($NM_redim_img && is_file($in_rutaimagen)) 
              { 
                  $sc_obj_img = new nm_trata_img($in_rutaimagen);
                  $sc_obj_img->setWidth(100);
                  $sc_obj_img->setHeight(50);
                  $sc_obj_img->setManterAspecto(true);
                  $sc_obj_img->createImg($this->Ini->root . $out_rutaimagen);
              } 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['opcao'] != "pdf") 
              { 
                  $conteudo = "<a href=\"javascript:nm_mostra_img('" . $nm_local_img . $conteudo . "', $nm_image_altura, $nm_image_largura)\"><img border=\"0\" src=\"" . $out_rutaimagen . "\"/></a>" ; 
              }  
              else 
              { 
                  $conteudo = "<img border=\"0\" src=\"" . $this->NM_raiz_img . $out_rutaimagen . "\"/>" ; 
              }  
          }  
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_rutaimagen_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_rutaimagen_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['canal'])) ? $this->New_label['canal'] : "Canal"; 
          $conteudo = trim(sc_strip_script($this->canal)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_canal_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_canal_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['radicado'])) ? $this->New_label['radicado'] : "Radicado"; 
          $conteudo = trim(sc_strip_script($this->radicado)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_radicado_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_radicado_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['origenalerta'])) ? $this->New_label['origenalerta'] : "Origen"; 
          $conteudo = trim(sc_strip_script($this->origenalerta)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_origenalerta_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_origenalerta_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['departamento'])) ? $this->New_label['departamento'] : "Departamento"; 
          $conteudo = trim(sc_strip_script($this->departamento)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_departamento_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_departamento_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['municipio'])) ? $this->New_label['municipio'] : "Municipio"; 
          $conteudo = trim(sc_strip_script($this->municipio)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_municipio_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_municipio_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['lugar'])) ? $this->New_label['lugar'] : "Lugar"; 
          $conteudo = trim(sc_strip_script($this->lugar)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_lugar_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_lugar_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['fecha'])) ? $this->New_label['fecha'] : "Fecha"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->fecha))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_fecha_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_fecha_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['escalar'])) ? $this->New_label['escalar'] : "Escalar"; 
          $conteudo = trim(sc_strip_script($this->escalar)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_escalar_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_escalar_det_line\"   ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['fechaenatencion'])) ? $this->New_label['fechaenatencion'] : ""; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->fechaenatencion))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_fechaenatencion_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_fechaenatencion_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
          $SC_Label = (isset($this->New_label['fechafinalizada'])) ? $this->New_label['fechafinalizada'] : "Fechafinalizada"; 
          $conteudo = trim(NM_encode_input(sc_strip_script($this->fechafinalizada))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               if (substr($conteudo, 10, 1) == "-") 
               { 
                  $conteudo = substr($conteudo, 0, 10) . " " . substr($conteudo, 11);
               } 
               if (substr($conteudo, 13, 1) == ".") 
               { 
                  $conteudo = substr($conteudo, 0, 13) . ":" . substr($conteudo, 14, 2) . ":" . substr($conteudo, 17);
               } 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD HH:II:SS");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_fechafinalizada_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_fechafinalizada_det_line\"  NOWRAP ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("</TABLE>\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['det_print'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['pdf_det']) 
   { 
       $nm_saida->saida("   <tr><td class=\"scGridTabelaTd\">\r\n");
       $nm_saida->saida("    <table width=\"100%\"><tr>\r\n");
       $nm_saida->saida("     <td class=\"scGridToolbar\">\r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"center\" width=\"33%\"> \r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"right\" width=\"33%\"> \r\n");
       $nm_saida->saida("     </td>\r\n");
       $nm_saida->saida("    </tr></table>\r\n");
       $nm_saida->saida("   </td></tr>\r\n");
   } 
   $rs->Close(); 
   $nm_saida->saida("  </td>\r\n");
   $nm_saida->saida(" </tr>\r\n");
   $nm_saida->saida(" </table>\r\n");
   $nm_saida->saida(" </div>\r\n");
   $nm_saida->saida("  </td>\r\n");
   $nm_saida->saida(" </tr>\r\n");
   $nm_saida->saida(" </table>\r\n");
   $nm_saida->saida("  </td>\r\n");
   $nm_saida->saida(" </tr>\r\n");
   $nm_saida->saida(" </table>\r\n");
   $nm_saida->saida(" </div>\r\n");
   $nm_saida->saida("  </td>\r\n");
   $nm_saida->saida(" </tr>\r\n");
   $nm_saida->saida(" </table>\r\n");
//--- 
//--- 
   $nm_saida->saida("<form name=\"F3\" method=post\r\n");
   $nm_saida->saida("                  target=\"_self\"\r\n");
   $nm_saida->saida("                  action=\"./\">\r\n");
   $nm_saida->saida("<input type=hidden name=\"nmgp_opcao\" value=\"igual\"/>\r\n");
   $nm_saida->saida("<input type=hidden name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/>\r\n");
   $nm_saida->saida("<input type=hidden name=\"script_case_session\" value=\"" . NM_encode_input(session_id()) . "\"/>\r\n");
   $nm_saida->saida("</form>\r\n");
   $nm_saida->saida("<script language=JavaScript>\r\n");
   $nm_saida->saida("   function nm_mostra_doc(campo1, campo2, campo3)\r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("       NovaJanela = window.open (\"grid_alerta_doc.php?script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&script_case_session=" . session_id() . "&nm_cod_doc=\" + campo1 + \"&nm_nome_doc=\" + campo2 + \"&nm_cod_apl=\" + campo3, \"ScriptCase\", \"resizable\");\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("   function nm_gp_move(x, y, z, p, g) \r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("      window.location = \"" . $this->Ini->path_link . "grid_alerta/index.php?nmgp_opcao=pdf_det&nmgp_tipo_pdf=\" + z + \"&nmgp_parms_pdf=\" + p +  \"&nmgp_graf_pdf=\" + g + \"&script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&script_case_session=" . session_id() . "\";\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("   function nm_gp_print_conf(tp, cor)\r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("       window.open('" . $this->Ini->path_link . "grid_alerta/grid_alerta_iframe_prt.php?path_botoes=" . $this->Ini->path_botoes . "&script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&script_case_session=" . session_id() . "&opcao=det_print&cor_print=' + cor,'','location=no,menubar,resizable,scrollbars,status=no,toolbar');\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("   function nm_mostra_img(imagem, altura, largura)\r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("       tb_show(\"\", imagem, \"\");\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("</script>\r\n");
   $nm_saida->saida("</body>\r\n");
   $nm_saida->saida("</html>\r\n");
 }
// 
 function gera_icone($doc) 
 {
    $cam_icone = "";
    $path =  $this->Ini->root . $this->Ini->path_icones . "/";
    if (is_dir($path))
    {
        $nm_icones = nm_list_icon($path); 
        $nm_tipo = strtolower(substr($doc, strrpos($doc, ".") + 1));
        if ($nm_tipo == "xlsx")
        {
            $nm_tipo = "xls";
        }
        if (isset($nm_icones[$nm_tipo]) && !empty($nm_icones[$nm_tipo]))
        {
            $cam_icone = $this->Ini->path_icones . "/" . $nm_icones[$nm_tipo];
        }
        else
        {
            $cam_icone = $this->Ini->path_icones . "/" . $nm_icones["default"];
        }
    }
    return $cam_icone;
 } 
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont2 >= $tam_campo)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
    function scGooglemapsContainer($aData, $iWidth = 0, $iHeight = 0) {
        if (0 == $iWidth) {
            $iWidth = 425;
        }
        if (0 == $iHeight) {
            $iHeight = 350;
        }

        $sRandomKey = 'key_gmap_' . md5(mt_rand(1, 1000) . microtime());

        $_SESSION['sc_session'][$this->Ini->sc_page]['googlemaps_info'][$sRandomKey] = $this->scGooglemapsContainer2($aData, $iWidth, $iHeight);

        return '<iframe src="NM_Blank_Page.htm" style="width: ' . $iWidth . 'px; height: ' . $iHeight . 'px; margin: 0; border-width: 0" id="' . $sRandomKey . '"></iframe><script type="text/javascript">aGmapQueue.push("' . $sRandomKey . '#_SC_#grid_alerta_gmaps.php?gmaps_key=' . $sRandomKey . '&script_case_init=' . $this->Ini->sc_page . '&script_case_session=' . session_id() . '");</script>';
    } // scGooglemapsContainer

    function scGooglemapsContainer2($aData, $iWidth = 0, $iHeight = 0) {
        if (0 == $iWidth) {
            $iWidth = 425;
        }
        if (0 == $iHeight) {
            $iHeight = 350;
        }

        if ('url' == $aData['type']) {
            return '<iframe width="' . $iWidth . '" height="' . $iHeight . '" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="' . $this->scGooglemapsUrl($aData['data'], 'modal') . '"></iframe>';
        }

        $sRandomId  = 'id_gmap_' . md5(mt_rand(1, 1000) . microtime());

        $str_return  ="<div id=\"". $sRandomId ."\" style=\"width: ". $iWidth ."px; height: ". $iHeight ."px\"></div>";
        $str_return .="<script type=\"text/javascript\">";
        $str_return .="  $(window).load(function() {";
        $str_return .="        $(\"#" . $sRandomId . "\").gmap3({";
        $str_return .="          marker:{";
        if ('geocode' == $aData['type'] && is_array($aData['data']))
        {
            $str_return .="              address: \"" . implode(' ', $aData['data']) . "\",";
        }
        elseif ('latlng' == $aData['type'])
        {
            $str_return .="              latLng: [" . $aData['latitude'] . "," . $aData['longitude'] . "],";
        }
        $str_return .="          },";
        $str_return .="          map:{";
        $str_return .="            options:{";
        if (isset($aData['depth']))
        {
            $str_return .="                zoom: " . $aData['depth'] . "";
        }
        $str_return .="            }";
        $str_return .="          }";
        $str_return .="        });";
        $str_return .="  });";
        $str_return .="</script>";
        return $str_return;
    } // scGooglemapsContainer2

    function scGooglemapsLink($aData, $sLabel, $sClass = '') {
        $sClass = ('' == trim($sClass)) ? '' : ' class="' . $sClass . '"';

        if ('' == trim($sLabel))
        {
            if ('latlng' == $aData['type'])
            {
                $sLabel = $aData['latitude'] . ' - ' . $aData['longitude'];
            }
            elseif ('geocode' == $aData['type'])
            {
                $sLabel = implode(' ', $aData['data']);
            }
            else
            {
                $sLabel = $aData['data'];
            }
        }

        if ('url' == $aData['type']) {
            if ('__SC_BTN__' == $sLabel) {
                return nmButtonOutput($this->arr_buttons, "bgooglemaps", "javascript: window.open('" . $this->scGooglemapsUrl($aData['data']) . "')", "javascript: window.open('" . $this->scGooglemapsUrl($aData['data']) . "')", "bgooglemaps", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
            }
            else {
                return '<a href="' . $this->scGooglemapsUrl($aData['data']) . '" target="_blank"' . $sClass . '>' . $sLabel . '</a>';
            }
        }

        $sRandomKey = 'key_gmap_' . md5(mt_rand(1, 1000) . microtime());

        $_SESSION['sc_session'][$this->Ini->sc_page]['googlemaps_info'][$sRandomKey] = $this->scGooglemapsContainer2($aData);

        if ('__SC_BTN__' == $sLabel) {
            return nmButtonOutput($this->arr_buttons, "bgooglemaps", "javascript: window.open('grid_alerta_gmaps.php?gmaps_key=" . $sRandomKey . "&script_case_init=" . $this->Ini->sc_page . "&script_case_session=" . session_id() . "')", "javascript: window.open('grid_alerta_gmaps.php?gmaps_key=" . $sRandomKey . "&script_case_init=" . $this->Ini->sc_page . "&script_case_session=" . session_id() . "')", "bgooglemaps", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
        }
        else {
            return '<a href="grid_alerta_gmaps.php?gmaps_key=' . $sRandomKey . '&script_case_init=' . $this->Ini->sc_page . '&script_case_session=' . session_id() . '" target="_blank"' . $sClass . '>' . $sLabel . '</a>';
        }
    } // scGooglemapsLink

    function scGooglemapsThickbox($aData, $sLabel, $sClass = '', $iWidth = 0, $iHeight = 0) {
        $sClass = ('' == trim($sClass)) ? '' : ' ' . $sClass;

        if (0 == $iWidth) {
            $iWidth = 425;
        }
        if (0 == $iHeight) {
            $iHeight = 350;
        }

        if ('' == trim($sLabel))
        {
            if ('latlng' == $aData['type'])
            {
                $sLabel = $aData['latitude'] . ' - ' . $aData['longitude'];
            }
            elseif ('geocode' == $aData['type'])
            {
                $sLabel = implode(' ', $aData['data']);
            }
            else
            {
                $sLabel = $aData['data'];
            }
        }

        if ('url' == $aData['type']) {
            if ('__SC_BTN__' == $sLabel) {
                return nmButtonOutput($this->arr_buttons, "bgooglemaps", "scShowGmapTbox('" . $this->scGooglemapsUrl($aData['data'], 'modal') . "&TB_iframe=true&height=" . $iHeight . "&width=" . $iWidth . "')", "scShowGmapTbox('" . $this->scGooglemapsUrl($aData['data'], 'modal') . "&TB_iframe=true&height=" . $iHeight . "&width=" . $iWidth . "')", "bgooglemaps", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
            }
            else {
                return '<a href="' . $this->scGooglemapsUrl($aData['data'], 'modal') . '&TB_iframe=true&height=' . $iHeight . '&width=' . $iWidth . '" class="thickbox">' . $sLabel . '</a>';
            }
        }

        $sRandomKey = 'key_gmap_' . md5(mt_rand(1, 1000) . microtime());

        $_SESSION['sc_session'][$this->Ini->sc_page]['googlemaps_info'][$sRandomKey] = $this->scGooglemapsContainer2($aData, $iWidth, $iHeight);

        if ('__SC_BTN__' == $sLabel) {
            return nmButtonOutput($this->arr_buttons, "bgooglemaps", "scShowGmapTbox('grid_alerta_gmaps.php?gmaps_key=" . $sRandomKey . "&script_case_init=" . $this->Ini->sc_page . "&script_case_session=" . session_id() . "&TB_iframe=true&height=" . $iHeight . "&width=" . $iWidth . "')", "scShowGmapTbox('grid_alerta_gmaps.php?gmaps_key=" . $sRandomKey . "&script_case_init=" . $this->Ini->sc_page . "&script_case_session=" . session_id() . "&TB_iframe=true&height=" . $iHeight . "&width=" . $iWidth . "')", "bgooglemaps", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
        }
        else {
            return '<a href="grid_alerta_gmaps.php?gmaps_key=' . $sRandomKey . '&script_case_init=' . $this->Ini->sc_page . '&script_case_session=' . session_id() . '&TB_iframe=true&height=' . $iHeight . '&width=' . $iWidth . '" class="thickbox' . $sClass . '">' . $sLabel . '</a>';
        }
    } // scGooglemapsThickbox

    function scGooglemapsUrl($sData, $sMode = 'normal') {
        $sData = trim($sData);
        $sGmap = 'http://maps.google.com/';

        if ('' == $sData) {
            return '';
        }

        if (strpos($sData, 'maps.google.com')) {
            $sGmap = "";
        }
        elseif ('http://maps.google.com' == substr($sData, 0, 22)) {
            $sData = substr($sData, 22);
        }
        elseif ('maps.google.com' == substr($sData, 0, 15)) {
            $sData = substr($sData, 15);
        }

        if ('/?' == substr($sData, 0, 2)) {
            $sData = substr($sData, 1);
        }

        $iLength = strlen($sData) - 13;

        if ('&output=embed' == substr($sData, $iLength)) {
            $sData = substr($sData, 0, $iLength);
        }
        elseif ('&source=embed' == substr($sData, $iLength)) {
            $sData = substr($sData, 0, $iLength);
        }

        if ('modal' == $sMode) {
            return $sGmap . $sData . '&output=embed';
        }

        return $sGmap . $sData . '&source=embed';
    } // scGooglemapsUrl
}
