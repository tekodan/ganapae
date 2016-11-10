<?php

class grid_alerta_rtf
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Texto_tag;
   var $Arquivo;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function grid_alerta_rtf()
   {
      $this->nm_data   = new nm_data("es");
      $this->Texto_tag = "";
   }

   //---- 
   function monta_rtf()
   {
      $this->inicializa_vars();
      $this->gera_texto_tag();
      $this->grava_arquivo_rtf();
      $this->monta_html();
   }

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_grid_alerta";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_alerta.rtf";
   }

   //----- 
   function gera_texto_tag()
   {
     global $nm_lang;
      global
             $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_alerta']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_alerta']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_alerta']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
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
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['where_pesq_filtro'];
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['rtf_name']);
      }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT idalerta, alerta, rutaimagen, fecha, municipio, latitud, longitud, estado, geo, correo, rutaaudio, escalar, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT idalerta, alerta, rutaimagen, fecha, municipio, latitud, longitud, estado, geo, correo, rutaaudio, escalar, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT idalerta, alerta, rutaimagen, fecha, municipio, latitud, longitud, estado, geo, correo, rutaaudio, escalar, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT idalerta, alerta, rutaimagen, TO_DATE(TO_CHAR(fecha, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), municipio, latitud, longitud, estado, geo, correo, rutaaudio, escalar, TO_DATE(TO_CHAR(fechaenatencion, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), TO_DATE(TO_CHAR(fechafinalizada, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss') from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT idalerta, alerta, rutaimagen, fecha, municipio, latitud, longitud, estado, geo, correo, rutaaudio, escalar, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT idalerta, alerta, rutaimagen, fecha, municipio, latitud, longitud, estado, geo, correo, rutaaudio, escalar, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['idalerta'])) ? $this->New_label['idalerta'] : "Id"; 
          if ($Cada_col == "idalerta" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['semaforo'])) ? $this->New_label['semaforo'] : "+"; 
          if ($Cada_col == "semaforo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['alerta'])) ? $this->New_label['alerta'] : "Alerta"; 
          if ($Cada_col == "alerta" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['rutaimagen'])) ? $this->New_label['rutaimagen'] : "Imagen"; 
          if ($Cada_col == "rutaimagen" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['fecha'])) ? $this->New_label['fecha'] : "Fecha"; 
          if ($Cada_col == "fecha" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['municipio'])) ? $this->New_label['municipio'] : "Municipio"; 
          if ($Cada_col == "municipio" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['alert'])) ? $this->New_label['alert'] : "Alerta"; 
          if ($Cada_col == "alert" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['state'])) ? $this->New_label['state'] : "Estado"; 
          if ($Cada_col == "state" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['audio'])) ? $this->New_label['audio'] : "audio"; 
          if ($Cada_col == "audio" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['latitud'])) ? $this->New_label['latitud'] : "Latitud"; 
          if ($Cada_col == "latitud" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['longitud'])) ? $this->New_label['longitud'] : "Longitud"; 
          if ($Cada_col == "longitud" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['estado'])) ? $this->New_label['estado'] : "Estado"; 
          if ($Cada_col == "estado" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['geo'])) ? $this->New_label['geo'] : "Localizacion"; 
          if ($Cada_col == "geo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['correo'])) ? $this->New_label['correo'] : "Correo"; 
          if ($Cada_col == "correo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
      } 
      $this->Texto_tag .= "</tr>\r\n";
      while (!$rs->EOF)
      {
         $this->Texto_tag .= "<tr>\r\n";
         $this->idalerta = $rs->fields[0] ;  
         $this->idalerta = (string)$this->idalerta;
         $this->alerta = $rs->fields[1] ;  
         $this->rutaimagen = $rs->fields[2] ;  
         $this->fecha = $rs->fields[3] ;  
         $this->municipio = $rs->fields[4] ;  
         $this->latitud = $rs->fields[5] ;  
         $this->longitud = $rs->fields[6] ;  
         $this->estado = $rs->fields[7] ;  
         $this->geo = $rs->fields[8] ;  
         $this->correo = $rs->fields[9] ;  
         $this->rutaaudio = $rs->fields[10] ;  
         $this->escalar = $rs->fields[11] ;  
         $this->fechaenatencion = $rs->fields[12] ;  
         $this->fechafinalizada = $rs->fields[13] ;  
         $this->sc_proc_grid = true; 
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
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->Texto_tag .= "</tr>\r\n";
         $rs->MoveNext();
      }
      $this->Texto_tag .= "</table>\r\n";

      $rs->Close();
   }
   //----- idalerta
   function NM_export_idalerta()
   {
         nmgp_Form_Num_Val($this->idalerta, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->idalerta))
         {
             $this->idalerta = sc_convert_encoding($this->idalerta, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->idalerta = str_replace('<', '&lt;', $this->idalerta);
         $this->idalerta = str_replace('>', '&gt;', $this->idalerta);
         $this->Texto_tag .= "<td>" . $this->idalerta . "</td>\r\n";
   }
   //----- semaforo
   function NM_export_semaforo()
   {
         $this->semaforo = html_entity_decode($this->semaforo, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->semaforo = strip_tags($this->semaforo);
         if (!NM_is_utf8($this->semaforo))
         {
             $this->semaforo = sc_convert_encoding($this->semaforo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->semaforo = str_replace('<', '&lt;', $this->semaforo);
         $this->semaforo = str_replace('>', '&gt;', $this->semaforo);
         $this->Texto_tag .= "<td>" . $this->semaforo . "</td>\r\n";
   }
   //----- alerta
   function NM_export_alerta()
   {
         $this->alerta = html_entity_decode($this->alerta, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->alerta = strip_tags($this->alerta);
         if (!NM_is_utf8($this->alerta))
         {
             $this->alerta = sc_convert_encoding($this->alerta, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->alerta = str_replace('<', '&lt;', $this->alerta);
         $this->alerta = str_replace('>', '&gt;', $this->alerta);
         $this->Texto_tag .= "<td>" . $this->alerta . "</td>\r\n";
   }
   //----- rutaimagen
   function NM_export_rutaimagen()
   {
         if (!NM_is_utf8($this->rutaimagen))
         {
             $this->rutaimagen = sc_convert_encoding($this->rutaimagen, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->rutaimagen = str_replace('<', '&lt;', $this->rutaimagen);
         $this->rutaimagen = str_replace('>', '&gt;', $this->rutaimagen);
         $this->Texto_tag .= "<td>" . $this->rutaimagen . "</td>\r\n";
   }
   //----- fecha
   function NM_export_fecha()
   {
         $conteudo_x =  $this->fecha;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
         if (is_numeric($conteudo_x) && $conteudo_x > 0) 
         { 
             $this->nm_data->SetaData($this->fecha, "YYYY-MM-DD");
             $this->fecha = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
         } 
         if (!NM_is_utf8($this->fecha))
         {
             $this->fecha = sc_convert_encoding($this->fecha, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->fecha = str_replace('<', '&lt;', $this->fecha);
         $this->fecha = str_replace('>', '&gt;', $this->fecha);
         $this->Texto_tag .= "<td>" . $this->fecha . "</td>\r\n";
   }
   //----- municipio
   function NM_export_municipio()
   {
         $this->municipio = html_entity_decode($this->municipio, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->municipio = strip_tags($this->municipio);
         if (!NM_is_utf8($this->municipio))
         {
             $this->municipio = sc_convert_encoding($this->municipio, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->municipio = str_replace('<', '&lt;', $this->municipio);
         $this->municipio = str_replace('>', '&gt;', $this->municipio);
         $this->Texto_tag .= "<td>" . $this->municipio . "</td>\r\n";
   }
   //----- alert
   function NM_export_alert()
   {
         if (!NM_is_utf8($this->alert))
         {
             $this->alert = sc_convert_encoding($this->alert, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->alert = str_replace('<', '&lt;', $this->alert);
         $this->alert = str_replace('>', '&gt;', $this->alert);
         $this->Texto_tag .= "<td>" . $this->alert . "</td>\r\n";
   }
   //----- state
   function NM_export_state()
   {
         $this->state = html_entity_decode($this->state, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->state = strip_tags($this->state);
         if (!NM_is_utf8($this->state))
         {
             $this->state = sc_convert_encoding($this->state, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->state = str_replace('<', '&lt;', $this->state);
         $this->state = str_replace('>', '&gt;', $this->state);
         $this->Texto_tag .= "<td>" . $this->state . "</td>\r\n";
   }
   //----- audio
   function NM_export_audio()
   {
         $this->audio = html_entity_decode($this->audio, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->audio = strip_tags($this->audio);
         if (!NM_is_utf8($this->audio))
         {
             $this->audio = sc_convert_encoding($this->audio, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->audio = str_replace('<', '&lt;', $this->audio);
         $this->audio = str_replace('>', '&gt;', $this->audio);
         $this->Texto_tag .= "<td>" . $this->audio . "</td>\r\n";
   }
   //----- latitud
   function NM_export_latitud()
   {
         $this->latitud = html_entity_decode($this->latitud, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->latitud = strip_tags($this->latitud);
         if (!NM_is_utf8($this->latitud))
         {
             $this->latitud = sc_convert_encoding($this->latitud, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->latitud = str_replace('<', '&lt;', $this->latitud);
         $this->latitud = str_replace('>', '&gt;', $this->latitud);
         $this->Texto_tag .= "<td>" . $this->latitud . "</td>\r\n";
   }
   //----- longitud
   function NM_export_longitud()
   {
         $this->longitud = html_entity_decode($this->longitud, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->longitud = strip_tags($this->longitud);
         if (!NM_is_utf8($this->longitud))
         {
             $this->longitud = sc_convert_encoding($this->longitud, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->longitud = str_replace('<', '&lt;', $this->longitud);
         $this->longitud = str_replace('>', '&gt;', $this->longitud);
         $this->Texto_tag .= "<td>" . $this->longitud . "</td>\r\n";
   }
   //----- estado
   function NM_export_estado()
   {
         $this->estado = html_entity_decode($this->estado, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->estado = strip_tags($this->estado);
         if (!NM_is_utf8($this->estado))
         {
             $this->estado = sc_convert_encoding($this->estado, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->estado = str_replace('<', '&lt;', $this->estado);
         $this->estado = str_replace('>', '&gt;', $this->estado);
         $this->Texto_tag .= "<td>" . $this->estado . "</td>\r\n";
   }
   //----- geo
   function NM_export_geo()
   {
         if (!NM_is_utf8($this->geo))
         {
             $this->geo = sc_convert_encoding($this->geo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->geo = str_replace('<', '&lt;', $this->geo);
         $this->geo = str_replace('>', '&gt;', $this->geo);
         $this->Texto_tag .= "<td>" . $this->geo . "</td>\r\n";
   }
   //----- correo
   function NM_export_correo()
   {
         $this->correo = html_entity_decode($this->correo, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->correo = strip_tags($this->correo);
         if (!NM_is_utf8($this->correo))
         {
             $this->correo = sc_convert_encoding($this->correo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->correo = str_replace('<', '&lt;', $this->correo);
         $this->correo = str_replace('>', '&gt;', $this->correo);
         $this->Texto_tag .= "<td>" . $this->correo . "</td>\r\n";
   }

   //----- 
   function grava_arquivo_rtf()
   {
      global $nm_lang, $doc_wrap;
      $rtf_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      require_once($this->Ini->path_third      . "/rtf_new/document_generator/cl_xml2driver.php"); 
      $text_ok  =  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n"; 
      $text_ok .=  "<DOC config_file=\"" . $this->Ini->path_third . "/rtf_new/doc_config.inc\" >\r\n"; 
      $text_ok .=  $this->Texto_tag; 
      $text_ok .=  "</DOC>\r\n"; 
      $xml = new nDOCGEN($text_ok,"RTF"); 
      fwrite($rtf_f, $xml->get_result_file());
      fclose($rtf_f);
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
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - alerta :: RTF</TITLE>
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
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">RTF</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_alerta_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_alerta"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="volta_grid"> 
</FORM> 
</BODY>
</HTML>
<?php
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
}

?>
