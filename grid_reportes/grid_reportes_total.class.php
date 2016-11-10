<?php

class grid_reportes_total
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;

   var $nm_data;

   //----- 
   function grid_reportes_total($sc_page)
   {
      $this->sc_page = $sc_page;
      $this->nm_data = new nm_data("es");
      if (isset($_SESSION['sc_session'][$this->sc_page]['grid_reportes']['campos_busca']) && !empty($_SESSION['sc_session'][$this->sc_page]['grid_reportes']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->subcategoria = $Busca_temp['subcategoria']; 
          $tmp_pos = strpos($this->subcategoria, "##@@");
          if ($tmp_pos !== false)
          {
              $this->subcategoria = substr($this->subcategoria, 0, $tmp_pos);
          }
          $this->categoria = $Busca_temp['categoria']; 
          $tmp_pos = strpos($this->categoria, "##@@");
          if ($tmp_pos !== false)
          {
              $this->categoria = substr($this->categoria, 0, $tmp_pos);
          }
          $this->fecha = $Busca_temp['fecha']; 
          $tmp_pos = strpos($this->fecha, "##@@");
          if ($tmp_pos !== false)
          {
              $this->fecha = substr($this->fecha, 0, $tmp_pos);
          }
          $fecha_2 = $Busca_temp['fecha_input_2']; 
          $this->fecha_2 = $Busca_temp['fecha_input_2']; 
          $this->escalar = $Busca_temp['escalar']; 
          $tmp_pos = strpos($this->escalar, "##@@");
          if ($tmp_pos !== false)
          {
              $this->escalar = substr($this->escalar, 0, $tmp_pos);
          }
          $this->terminado = $Busca_temp['terminado']; 
          $tmp_pos = strpos($this->terminado, "##@@");
          if ($tmp_pos !== false)
          {
              $this->terminado = substr($this->terminado, 0, $tmp_pos);
          }
          $terminado_2 = $Busca_temp['terminado_input_2']; 
          $this->terminado_2 = $Busca_temp['terminado_input_2']; 
          $this->municipio = $Busca_temp['municipio']; 
          $tmp_pos = strpos($this->municipio, "##@@");
          if ($tmp_pos !== false)
          {
              $this->municipio = substr($this->municipio, 0, $tmp_pos);
          }
          $this->lugar = $Busca_temp['lugar']; 
          $tmp_pos = strpos($this->lugar, "##@@");
          if ($tmp_pos !== false)
          {
              $this->lugar = substr($this->lugar, 0, $tmp_pos);
          }
      } 
   }

   //---- 
   function quebra_geral()
   {
      global $nada, $nm_lang ;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['contr_total_geral'] == "OK") 
      { 
          return; 
      } 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['tot_geral'] = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['where_pesq']; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['tot_geral'][0] = "" . $this->Ini->Nm_lang['lang_msgs_totl'] . ""; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['tot_geral'][1] = $rt->fields[0] ; 
      $rt->Close(); 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['contr_total_geral'] = "OK";
   } 

   //-----  subcategoria
   function quebra_subcategoria_sc_free_group_by($subcategoria, $Where_qb) 
   {
      global $tot_subcategoria ;  
      $tot_subcategoria = array() ;  
      $tot_subcategoria[0] = $subcategoria ; 
   }
   //-----  categoria
   function quebra_categoria_sc_free_group_by($categoria, $Where_qb) 
   {
      global $tot_categoria ;  
      $tot_categoria = array() ;  
      $tot_categoria[0] = $categoria ; 
   }
   //-----  municipio
   function quebra_municipio_sc_free_group_by($municipio, $Where_qb) 
   {
      global $tot_municipio ;  
      $tot_municipio = array() ;  
      $tot_municipio[0] = $municipio ; 
   }
   //-----  lugar
   function quebra_lugar_sc_free_group_by($lugar, $Where_qb) 
   {
      global $tot_lugar ;  
      $tot_lugar = array() ;  
      $tot_lugar[0] = $lugar ; 
   }
   //-----  fecha
   function quebra_fecha_sc_free_group_by($fecha, $Where_qb) 
   {
      global $tot_fecha , $Sc_groupby_fecha;  
      $tot_fecha = array() ;  
      $tot_fecha[0] = $fecha ; 
   }
   //-----  escalar
   function quebra_escalar_sc_free_group_by($escalar, $Where_qb) 
   {
      global $tot_escalar , $Sc_groupby_fecha;  
      $tot_escalar = array() ;  
      $tot_escalar[0] = $escalar ; 
   }
   //-----  terminado
   function quebra_terminado_sc_free_group_by($terminado, $Where_qb) 
   {
      global $tot_terminado , $Sc_groupby_fecha;  
      $tot_terminado = array() ;  
      $tot_terminado[0] = $terminado ; 
   }

   //----- 
   function resumo_sc_free_group_by($destino_resumo, &$array_total_subcategoria, &$array_total_categoria, &$array_total_municipio, &$array_total_lugar, &$array_total_fecha, &$array_total_escalar, &$array_total_terminado)
   {
      global $nada, $nm_lang;
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['campos_busca']))
   { 
      $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['campos_busca'];
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
       $this->subcategoria = $Busca_temp['subcategoria']; 
       $tmp_pos = strpos($this->subcategoria, "##@@");
       if ($tmp_pos !== false)
       {
           $this->subcategoria = substr($this->subcategoria, 0, $tmp_pos);
       }
       $this->categoria = $Busca_temp['categoria']; 
       $tmp_pos = strpos($this->categoria, "##@@");
       if ($tmp_pos !== false)
       {
           $this->categoria = substr($this->categoria, 0, $tmp_pos);
       }
       $this->fecha = $Busca_temp['fecha']; 
       $tmp_pos = strpos($this->fecha, "##@@");
       if ($tmp_pos !== false)
       {
           $this->fecha = substr($this->fecha, 0, $tmp_pos);
       }
       $this->fecha_2 = $Busca_temp['fecha_input_2']; 
       $this->escalar = $Busca_temp['escalar']; 
       $tmp_pos = strpos($this->escalar, "##@@");
       if ($tmp_pos !== false)
       {
           $this->escalar = substr($this->escalar, 0, $tmp_pos);
       }
       $this->terminado = $Busca_temp['terminado']; 
       $tmp_pos = strpos($this->terminado, "##@@");
       if ($tmp_pos !== false)
       {
           $this->terminado = substr($this->terminado, 0, $tmp_pos);
       }
       $this->terminado_2 = $Busca_temp['terminado_input_2']; 
       $this->municipio = $Busca_temp['municipio']; 
       $tmp_pos = strpos($this->municipio, "##@@");
       if ($tmp_pos !== false)
       {
           $this->municipio = substr($this->municipio, 0, $tmp_pos);
       }
       $this->lugar = $Busca_temp['lugar']; 
       $tmp_pos = strpos($this->lugar, "##@@");
       if ($tmp_pos !== false)
       {
           $this->lugar = substr($this->lugar, 0, $tmp_pos);
       }
   } 
   $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['where_orig'];
   $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['where_pesq'];
   $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['where_pesq_filtro'];
   $temp = "";
   foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['SC_Gb_Free_sql'] as $cmp_gb => $ord)
   {
       $temp .= (empty($temp)) ? $cmp_gb . " " . $ord : ", " . $cmp_gb . " " . $ord;
   }
   $nmgp_order_by = (!empty($temp)) ? " order by " . $temp : "";
   $free_group_by = "";
   $all_sql_free  = array();
   $all_sql_free[] = "subcategoria";
   $all_sql_free[] = "categoria";
   $all_sql_free[] = "municipio";
   $all_sql_free[] = "lugar";
   $all_sql_free[] = "fecha";
   $all_sql_free[] = "escalar";
   $all_sql_free[] = "terminado";
   foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['SC_Gb_Free_sql'] as $cmp_gb => $ord)
   {
       $free_group_by .= (empty($free_group_by)) ? $cmp_gb : ", " . $cmp_gb;
   }
   foreach ($all_sql_free as $cmp_gb)
   {
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['SC_Gb_Free_sql'][$cmp_gb]))
       {
           $free_group_by .= (empty($free_group_by)) ? $cmp_gb : ", " . $cmp_gb;
       }
   }
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
         $comando  = "select count(*), subcategoria, categoria, municipio, lugar, str_replace (convert(char(10),fecha,102), '.', '-') + ' ' + convert(char(8),fecha,20), escalar, terminado from " . $this->Ini->nm_tabela . " " .  $this->sc_where_atual . " group by " . $free_group_by . "  " . $nmgp_order_by;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $comando  = "select count(*), subcategoria, categoria, municipio, lugar, convert(char(23),fecha,121), escalar, terminado from " . $this->Ini->nm_tabela . " " .  $this->sc_where_atual . " group by " . $free_group_by . "  " . $nmgp_order_by;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
         $comando  = "select count(*), subcategoria, categoria, municipio, lugar, fecha, escalar, terminado from " . $this->Ini->nm_tabela . " " . $this->sc_where_atual . " group by " . $free_group_by . "  " . $nmgp_order_by;
      } 
      else 
      { 
         $comando  = "select count(*), subcategoria, categoria, municipio, lugar, fecha, escalar, terminado from " . $this->Ini->nm_tabela . " " . $this->sc_where_atual . " group by " . $free_group_by . "  " . $nmgp_order_by;
      } 
      if ($destino_resumo != "gra") 
      {
          $comando = str_replace("avg(", "sum(", $comando); 
      }
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($comando))
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit;
      }
      $array_db_total = $this->get_array($rt);
      $rt->Close();
      foreach ($array_db_total as $registro)
      {
         $subcategoria      = $registro[1];
         $subcategoria_orig = $registro[1];
         $conteudo = $registro[1];
         $subcategoria = $conteudo;
         if (null === $subcategoria)
         {
             $subcategoria = '';
         }
         if (null === $subcategoria_orig)
         {
             $subcategoria_orig = '';
         }
         $val_grafico_subcategoria = $subcategoria;
         $categoria      = $registro[2];
         $categoria_orig = $registro[2];
         $conteudo = $registro[2];
         $categoria = $conteudo;
         if (null === $categoria)
         {
             $categoria = '';
         }
         if (null === $categoria_orig)
         {
             $categoria_orig = '';
         }
         $val_grafico_categoria = $categoria;
         $municipio      = $registro[3];
         $municipio_orig = $registro[3];
         $conteudo = $registro[3];
         $municipio = $conteudo;
         if (null === $municipio)
         {
             $municipio = '';
         }
         if (null === $municipio_orig)
         {
             $municipio_orig = '';
         }
         $val_grafico_municipio = $municipio;
         $lugar      = $registro[4];
         $lugar_orig = $registro[4];
         $conteudo = $registro[4];
         $lugar = $conteudo;
         if (null === $lugar)
         {
             $lugar = '';
         }
         if (null === $lugar_orig)
         {
             $lugar_orig = '';
         }
         $val_grafico_lugar = $lugar;
         $registro[5] = substr($registro[5], 0, 10);
         $fecha      = $registro[5];
         $fecha_orig = $registro[5];
         $conteudo = $registro[5];
        $conteudo_x =  $conteudo;
        nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
        if (is_numeric($conteudo_x) && $conteudo_x > 0) 
        { 
            $this->nm_data->SetaData($conteudo, "YYYY-MM-DD");
            $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
        } 
         $fecha = $conteudo;
         if (null === $fecha)
         {
             $fecha = '';
         }
         if (null === $fecha_orig)
         {
             $fecha_orig = '';
         }
         $val_grafico_fecha = $fecha;
         $escalar      = $registro[6];
         $escalar_orig = $registro[6];
         $conteudo = $registro[6];
         $escalar = $conteudo;
         if (null === $escalar)
         {
             $escalar = '';
         }
         if (null === $escalar_orig)
         {
             $escalar_orig = '';
         }
         $val_grafico_escalar = $escalar;
         $terminado      = $registro[7];
         $terminado_orig = $registro[7];
         $conteudo = $registro[7];
        nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $terminado = $conteudo;
         if (null === $terminado)
         {
             $terminado = '';
         }
         if (null === $terminado_orig)
         {
             $terminado_orig = '';
         }
         $val_grafico_terminado = $terminado;
         $fecha_orig        = NM_encode_input(sc_strip_script($fecha_orig));
         $val_grafico_fecha = NM_encode_input(sc_strip_script($val_grafico_fecha));
         $terminado_orig        = NM_encode_input(sc_strip_script($terminado_orig));
         $val_grafico_terminado = NM_encode_input(sc_strip_script($val_grafico_terminado));
         $contr_arr = "";
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_reportes']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
         {
             $temp       = $cmp_gb . "_orig";
             $contr_arr .= "[\"" . str_replace('"', '\"', $$temp) . "\"]";
             $arr_name   = "array_total_" . $cmp_gb . $contr_arr;
            eval ('
             if (!isset($' . $arr_name . '))
             {
                 $' . $arr_name . '[0] = ' . $registro[0] . ';
                 $' . $arr_name . '[1] = $val_grafico_' . $cmp_gb . ';
                 $' . $arr_name . '[2] = "' . str_replace('"', '\"', $$temp) . '";
             }
             else
             {
                 $' . $arr_name . '[0] += ' . $registro[0] . ';
             }
            ');
         }
      }
   }
   //-----
   function get_array($rs)
   {
       if ('ado_mssql' != $this->Ini->nm_tpbanco)
       {
           return $rs->GetArray();
       }

       $array_db_total = array();
       while (!$rs->EOF)
       {
           $arr_row = array();
           foreach ($rs->fields as $k => $v)
           {
               $arr_row[$k] = $v . '';
           }
           $array_db_total[] = $arr_row;
           $rs->MoveNext();
       }
       return $array_db_total;
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
