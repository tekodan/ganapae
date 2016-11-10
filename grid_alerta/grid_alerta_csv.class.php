<?php

class grid_alerta_csv
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;

   var $Arquivo;
   var $Tit_doc;
   var $Delim_dados;
   var $Delim_line;
   var $Delim_col;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function grid_alerta_csv()
   {
      $this->nm_data   = new nm_data("es");
   }

   //---- 
   function monta_csv()
   {
      $this->inicializa_vars();
      $this->grava_arquivo();
      $this->monta_html();
   }

   //----- 
   function inicializa_vars()
   {
     global $nm_lang;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->Arquivo     = "sc_csv";
      $this->Arquivo    .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo    .= "_grid_alerta";
      $this->Arquivo    .= ".csv";
      $this->Tit_doc    = "grid_alerta.csv";
      $this->Delim_dados = "\"";
      $this->Delim_col   = ";";
      $this->Delim_line  = "\r\n";
   }

   //----- 
   function grava_arquivo()
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['csv_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['csv_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['csv_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['csv_name']);
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

      $csv_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      while (!$rs->EOF)
      {
         $this->csv_registro = "";
         $this->NM_prim_col  = 0;
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
         $this->csv_registro .= $this->Delim_line;
         fwrite($csv_f, $this->csv_registro);
         $rs->MoveNext();
      }
      fclose($csv_f);

      $rs->Close();
   }
   //----- idalerta
   function NM_export_idalerta()
   {
         nmgp_Form_Num_Val($this->idalerta, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->idalerta);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- semaforo
   function NM_export_semaforo()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->semaforo);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- alerta
   function NM_export_alerta()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->alerta);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- rutaimagen
   function NM_export_rutaimagen()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->rutaimagen);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
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
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->fecha);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- municipio
   function NM_export_municipio()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->municipio);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- alert
   function NM_export_alert()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->alert);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- state
   function NM_export_state()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->state);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- audio
   function NM_export_audio()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->audio);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- latitud
   function NM_export_latitud()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->latitud);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- longitud
   function NM_export_longitud()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->longitud);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- estado
   function NM_export_estado()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->estado);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- geo
   function NM_export_geo()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->geo);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
   }
   //----- correo
   function NM_export_correo()
   {
      $col_sep = ($this->NM_prim_col > 0) ? $this->Delim_col : "";
      $conteudo = str_replace($this->Delim_dados, $this->Delim_dados . $this->Delim_dados, $this->correo);
      $this->csv_registro .= $col_sep . $this->Delim_dados . $conteudo . $this->Delim_dados;
      $this->NM_prim_col++;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['csv_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta']['csv_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_alerta'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_titl'] ?> - alerta :: CSV</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?>" GMT">
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0">
 <META http-equiv="Pragma" content="no-cache">
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">CSV</td>
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
