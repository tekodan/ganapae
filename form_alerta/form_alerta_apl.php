<?php
//
class form_alerta_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'         => '',
                                'param'          => array(),
                                'autoComp'       => '',
                                'rsSize'         => '',
                                'msgDisplay'     => '',
                                'errList'        => array(),
                                'fldList'        => array(),
                                'focus'          => '',
                                'navStatus'      => array(),
                                'navSummary'     => array(),
                                'navPage'        => array(),
                                'redir'          => array(),
                                'blockDisplay'   => array(),
                                'fieldDisplay'   => array(),
                                'fieldLabel'     => array(),
                                'readOnly'       => array(),
                                'btnVars'        => array(),
                                'ajaxAlert'      => '',
                                'ajaxMessage'    => '',
                                'ajaxJavascript' => array(),
                                'buttonDisplay'  => array(),
                                'calendarReload' => false,
                                'quickSearchRes' => false,
                                'displayMsg'     => false,
                                'displayMsgTxt'  => '',
                                'dyn_search'     => array(),
                                'empty_filter'   => '',
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $subcategoria;
   var $subcategoria_1;
   var $categoria;
   var $categoria_1;
   var $latitud;
   var $longitud;
   var $estado;
   var $estado_1;
   var $idalerta;
   var $geo;
   var $correo;
   var $nombre;
   var $celular;
   var $direccion;
   var $alerta;
   var $rutavideo;
   var $rutavideo_scfile_name;
   var $rutavideo_ul_name;
   var $rutavideo_ul_type;
   var $rutavideo_limpa;
   var $rutavideo_salva;
   var $rutaaudio;
   var $rutaaudio_scfile_name;
   var $rutaaudio_ul_name;
   var $rutaaudio_ul_type;
   var $rutaaudio_limpa;
   var $rutaaudio_salva;
   var $rutaimagen;
   var $rutaimagen_scfile_name;
   var $rutaimagen_ul_name;
   var $rutaimagen_scfile_type;
   var $rutaimagen_ul_type;
   var $rutaimagen_limpa;
   var $rutaimagen_salva;
   var $out_rutaimagen;
   var $out1_rutaimagen;
   var $canal;
   var $radicado;
   var $origenalerta;
   var $origenalerta_1;
   var $departamento;
   var $municipio;
   var $municipio_1;
   var $lugar;
   var $lugar_1;
   var $fecha;
   var $escalar;
   var $escalar_1;
   var $motivo;
   var $terminado;
   var $terminado_1;
   var $fecharechazada;
   var $fecharechazada_hora;
   var $fechaenatencion;
   var $fechaenatencion_hora;
   var $fechafinalizada;
   var $fechafinalizada_hora;
   var $aprobada;
   var $audio;
   var $geocode;
   var $noaprobada;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['alerta']))
          {
              $this->alerta = $this->NM_ajax_info['param']['alerta'];
          }
          if (isset($this->NM_ajax_info['param']['aprobada']))
          {
              $this->aprobada = $this->NM_ajax_info['param']['aprobada'];
          }
          if (isset($this->NM_ajax_info['param']['audio']))
          {
              $this->audio = $this->NM_ajax_info['param']['audio'];
          }
          if (isset($this->NM_ajax_info['param']['canal']))
          {
              $this->canal = $this->NM_ajax_info['param']['canal'];
          }
          if (isset($this->NM_ajax_info['param']['categoria']))
          {
              $this->categoria = $this->NM_ajax_info['param']['categoria'];
          }
          if (isset($this->NM_ajax_info['param']['celular']))
          {
              $this->celular = $this->NM_ajax_info['param']['celular'];
          }
          if (isset($this->NM_ajax_info['param']['correo']))
          {
              $this->correo = $this->NM_ajax_info['param']['correo'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['departamento']))
          {
              $this->departamento = $this->NM_ajax_info['param']['departamento'];
          }
          if (isset($this->NM_ajax_info['param']['direccion']))
          {
              $this->direccion = $this->NM_ajax_info['param']['direccion'];
          }
          if (isset($this->NM_ajax_info['param']['escalar']))
          {
              $this->escalar = $this->NM_ajax_info['param']['escalar'];
          }
          if (isset($this->NM_ajax_info['param']['estado']))
          {
              $this->estado = $this->NM_ajax_info['param']['estado'];
          }
          if (isset($this->NM_ajax_info['param']['fecha']))
          {
              $this->fecha = $this->NM_ajax_info['param']['fecha'];
          }
          if (isset($this->NM_ajax_info['param']['fechaenatencion']))
          {
              $this->fechaenatencion = $this->NM_ajax_info['param']['fechaenatencion'];
          }
          if (isset($this->NM_ajax_info['param']['fechafinalizada']))
          {
              $this->fechafinalizada = $this->NM_ajax_info['param']['fechafinalizada'];
          }
          if (isset($this->NM_ajax_info['param']['fecharechazada']))
          {
              $this->fecharechazada = $this->NM_ajax_info['param']['fecharechazada'];
          }
          if (isset($this->NM_ajax_info['param']['geo']))
          {
              $this->geo = $this->NM_ajax_info['param']['geo'];
          }
          if (isset($this->NM_ajax_info['param']['geocode']))
          {
              $this->geocode = $this->NM_ajax_info['param']['geocode'];
          }
          if (isset($this->NM_ajax_info['param']['idalerta']))
          {
              $this->idalerta = $this->NM_ajax_info['param']['idalerta'];
          }
          if (isset($this->NM_ajax_info['param']['latitud']))
          {
              $this->latitud = $this->NM_ajax_info['param']['latitud'];
          }
          if (isset($this->NM_ajax_info['param']['longitud']))
          {
              $this->longitud = $this->NM_ajax_info['param']['longitud'];
          }
          if (isset($this->NM_ajax_info['param']['lugar']))
          {
              $this->lugar = $this->NM_ajax_info['param']['lugar'];
          }
          if (isset($this->NM_ajax_info['param']['motivo']))
          {
              $this->motivo = $this->NM_ajax_info['param']['motivo'];
          }
          if (isset($this->NM_ajax_info['param']['municipio']))
          {
              $this->municipio = $this->NM_ajax_info['param']['municipio'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_fields']))
          {
              $this->nmgp_refresh_fields = $this->NM_ajax_info['param']['nmgp_refresh_fields'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['noaprobada']))
          {
              $this->noaprobada = $this->NM_ajax_info['param']['noaprobada'];
          }
          if (isset($this->NM_ajax_info['param']['nombre']))
          {
              $this->nombre = $this->NM_ajax_info['param']['nombre'];
          }
          if (isset($this->NM_ajax_info['param']['origenalerta']))
          {
              $this->origenalerta = $this->NM_ajax_info['param']['origenalerta'];
          }
          if (isset($this->NM_ajax_info['param']['radicado']))
          {
              $this->radicado = $this->NM_ajax_info['param']['radicado'];
          }
          if (isset($this->NM_ajax_info['param']['rutaaudio']))
          {
              $this->rutaaudio = $this->NM_ajax_info['param']['rutaaudio'];
          }
          if (isset($this->NM_ajax_info['param']['rutaaudio_limpa']))
          {
              $this->rutaaudio_limpa = $this->NM_ajax_info['param']['rutaaudio_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['rutaaudio_salva']))
          {
              $this->rutaaudio_salva = $this->NM_ajax_info['param']['rutaaudio_salva'];
          }
          if (isset($this->NM_ajax_info['param']['rutaaudio_ul_name']))
          {
              $this->rutaaudio_ul_name = $this->NM_ajax_info['param']['rutaaudio_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['rutaaudio_ul_type']))
          {
              $this->rutaaudio_ul_type = $this->NM_ajax_info['param']['rutaaudio_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['rutaimagen']))
          {
              $this->rutaimagen = $this->NM_ajax_info['param']['rutaimagen'];
          }
          if (isset($this->NM_ajax_info['param']['rutaimagen_limpa']))
          {
              $this->rutaimagen_limpa = $this->NM_ajax_info['param']['rutaimagen_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['rutaimagen_salva']))
          {
              $this->rutaimagen_salva = $this->NM_ajax_info['param']['rutaimagen_salva'];
          }
          if (isset($this->NM_ajax_info['param']['rutaimagen_ul_name']))
          {
              $this->rutaimagen_ul_name = $this->NM_ajax_info['param']['rutaimagen_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['rutaimagen_ul_type']))
          {
              $this->rutaimagen_ul_type = $this->NM_ajax_info['param']['rutaimagen_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['rutavideo']))
          {
              $this->rutavideo = $this->NM_ajax_info['param']['rutavideo'];
          }
          if (isset($this->NM_ajax_info['param']['rutavideo_limpa']))
          {
              $this->rutavideo_limpa = $this->NM_ajax_info['param']['rutavideo_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['rutavideo_salva']))
          {
              $this->rutavideo_salva = $this->NM_ajax_info['param']['rutavideo_salva'];
          }
          if (isset($this->NM_ajax_info['param']['rutavideo_ul_name']))
          {
              $this->rutavideo_ul_name = $this->NM_ajax_info['param']['rutavideo_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['rutavideo_ul_type']))
          {
              $this->rutavideo_ul_type = $this->NM_ajax_info['param']['rutavideo_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['subcategoria']))
          {
              $this->subcategoria = $this->NM_ajax_info['param']['subcategoria'];
          }
          if (isset($this->NM_ajax_info['param']['terminado']))
          {
              $this->terminado = $this->NM_ajax_info['param']['terminado'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_alerta']['nm_run_menu'] = 1;
      } 
      if (isset($_SESSION['sc_session'][$script_case_init]['form_alerta']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_alerta']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_alerta']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_alerta($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $this->$cadapar[0] = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_alerta']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_alerta']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_alerta']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_alerta']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_alerta']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_alerta']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $this->$cadapar[0] = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->fecharechazada);
          $this->fecharechazada      = $aDtParts[0];
          $this->fecharechazada_hora = $aDtParts[1];
      }
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->fechaenatencion);
          $this->fechaenatencion      = $aDtParts[0];
          $this->fechaenatencion_hora = $aDtParts[1];
      }
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->fechafinalizada);
          $this->fechafinalizada      = $aDtParts[0];
          $this->fechafinalizada_hora = $aDtParts[1];
      }
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_alerta']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_alerta']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_alerta']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_alerta']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_alerta']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_alerta']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_alerta']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_alerta_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_alerta']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_alerta']['upload_field_info']['rutavideo'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_alerta',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_file_height' => '',
          'upload_file_width'  => '',
          'upload_file_aspect' => '',
          'upload_file_type'   => 'N0',
      );

      $_SESSION['sc_session'][$script_case_init]['form_alerta']['upload_field_info']['rutaaudio'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_alerta',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_file_height' => '',
          'upload_file_width'  => '',
          'upload_file_aspect' => '',
          'upload_file_type'   => 'N1',
      );

      $_SESSION['sc_session'][$script_case_init]['form_alerta']['upload_field_info']['rutaimagen'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_alerta',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_file_height' => '200',
          'upload_file_width'  => '200',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_alerta']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_alerta'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_alerta']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_alerta']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_alerta') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_alerta']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - alerta";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_alerta")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);


      $this->arr_buttons['responsables']['hint']             = "";
      $this->arr_buttons['responsables']['type']             = "button";
      $this->arr_buttons['responsables']['value']            = "responsables";
      $this->arr_buttons['responsables']['display']          = "only_text";
      $this->arr_buttons['responsables']['display_position'] = "text_right";
      $this->arr_buttons['responsables']['style']            = "default";
      $this->arr_buttons['responsables']['image']            = "";


      $_SESSION['scriptcase']['error_icon']['form_alerta']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_alerta'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['rutavideo_ul_name']) && '' != $this->NM_ajax_info['param']['rutavideo_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutavideo_ul_name]))
          {
              $this->NM_ajax_info['param']['rutavideo_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutavideo_ul_name];
          }
          $this->rutavideo = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['rutavideo_ul_name'];
          $this->rutavideo_scfile_name = substr($this->NM_ajax_info['param']['rutavideo_ul_name'], 12);
          $this->rutavideo_scfile_type = $this->NM_ajax_info['param']['rutavideo_ul_type'];
          $this->rutavideo_ul_name = $this->NM_ajax_info['param']['rutavideo_ul_name'];
          $this->rutavideo_ul_type = $this->NM_ajax_info['param']['rutavideo_ul_type'];
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->rutavideo             = sc_convert_encoding($this->rutavideo,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutavideo_scfile_name = sc_convert_encoding($this->rutavideo_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutavideo_ul_name     = sc_convert_encoding($this->rutavideo_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }
      elseif (isset($this->rutavideo_ul_name) && '' != $this->rutavideo_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutavideo_ul_name]))
          {
              $this->rutavideo_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutavideo_ul_name];
          }
          $this->rutavideo = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->rutavideo_ul_name;
          $this->rutavideo_scfile_name = substr($this->rutavideo_ul_name, 12);
          $this->rutavideo_scfile_type = $this->rutavideo_ul_type;
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->rutavideo             = sc_convert_encoding($this->rutavideo,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutavideo_scfile_name = sc_convert_encoding($this->rutavideo_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutavideo_ul_name     = sc_convert_encoding($this->rutavideo_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }
      if (isset($this->NM_ajax_info['param']['rutaaudio_ul_name']) && '' != $this->NM_ajax_info['param']['rutaaudio_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutaaudio_ul_name]))
          {
              $this->NM_ajax_info['param']['rutaaudio_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutaaudio_ul_name];
          }
          $this->rutaaudio = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['rutaaudio_ul_name'];
          $this->rutaaudio_scfile_name = substr($this->NM_ajax_info['param']['rutaaudio_ul_name'], 12);
          $this->rutaaudio_scfile_type = $this->NM_ajax_info['param']['rutaaudio_ul_type'];
          $this->rutaaudio_ul_name = $this->NM_ajax_info['param']['rutaaudio_ul_name'];
          $this->rutaaudio_ul_type = $this->NM_ajax_info['param']['rutaaudio_ul_type'];
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->rutaaudio             = sc_convert_encoding($this->rutaaudio,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutaaudio_scfile_name = sc_convert_encoding($this->rutaaudio_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutaaudio_ul_name     = sc_convert_encoding($this->rutaaudio_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }
      elseif (isset($this->rutaaudio_ul_name) && '' != $this->rutaaudio_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutaaudio_ul_name]))
          {
              $this->rutaaudio_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutaaudio_ul_name];
          }
          $this->rutaaudio = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->rutaaudio_ul_name;
          $this->rutaaudio_scfile_name = substr($this->rutaaudio_ul_name, 12);
          $this->rutaaudio_scfile_type = $this->rutaaudio_ul_type;
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->rutaaudio             = sc_convert_encoding($this->rutaaudio,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutaaudio_scfile_name = sc_convert_encoding($this->rutaaudio_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutaaudio_ul_name     = sc_convert_encoding($this->rutaaudio_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }
      if (isset($this->NM_ajax_info['param']['rutaimagen_ul_name']) && '' != $this->NM_ajax_info['param']['rutaimagen_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutaimagen_ul_name]))
          {
              $this->NM_ajax_info['param']['rutaimagen_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutaimagen_ul_name];
          }
          $this->rutaimagen = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['rutaimagen_ul_name'];
          $this->rutaimagen_scfile_name = substr($this->NM_ajax_info['param']['rutaimagen_ul_name'], 12);
          $this->rutaimagen_scfile_type = $this->NM_ajax_info['param']['rutaimagen_ul_type'];
          $this->rutaimagen_ul_name = $this->NM_ajax_info['param']['rutaimagen_ul_name'];
          $this->rutaimagen_ul_type = $this->NM_ajax_info['param']['rutaimagen_ul_type'];
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->rutaimagen             = sc_convert_encoding($this->rutaimagen,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutaimagen_scfile_name = sc_convert_encoding($this->rutaimagen_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutaimagen_ul_name     = sc_convert_encoding($this->rutaimagen_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }
      elseif (isset($this->rutaimagen_ul_name) && '' != $this->rutaimagen_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutaimagen_ul_name]))
          {
              $this->rutaimagen_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_field_ul_name'][$this->rutaimagen_ul_name];
          }
          $this->rutaimagen = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->rutaimagen_ul_name;
          $this->rutaimagen_scfile_name = substr($this->rutaimagen_ul_name, 12);
          $this->rutaimagen_scfile_type = $this->rutaimagen_ul_type;
          if ('UTF-8' != $_SESSION['scriptcase']['charset'])
          {
              $this->rutaimagen             = sc_convert_encoding($this->rutaimagen,             $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutaimagen_scfile_name = sc_convert_encoding($this->rutaimagen_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
              $this->rutaimagen_ul_name     = sc_convert_encoding($this->rutaimagen_ul_name,     $_SESSION['scriptcase']['charset'], 'UTF-8');
          }
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "on";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['responsables'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_alerta']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_form'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_alerta", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_alerta/form_alerta_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_alerta_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_alerta_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_alerta_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_alerta/form_alerta_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_alerta_erro.class.php"); 
      }
      $this->Erro      = new form_alerta_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao']))
         { 
             if ($this->idalerta != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_alerta']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['responsables'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['responsables'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['botoes']['responsables'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
      if (isset($this->subcategoria)) { $this->nm_limpa_alfa($this->subcategoria); }
      if (isset($this->categoria)) { $this->nm_limpa_alfa($this->categoria); }
      if (isset($this->latitud)) { $this->nm_limpa_alfa($this->latitud); }
      if (isset($this->longitud)) { $this->nm_limpa_alfa($this->longitud); }
      if (isset($this->estado)) { $this->nm_limpa_alfa($this->estado); }
      if (isset($this->idalerta)) { $this->nm_limpa_alfa($this->idalerta); }
      if (isset($this->geo)) { $this->nm_limpa_alfa($this->geo); }
      if (isset($this->correo)) { $this->nm_limpa_alfa($this->correo); }
      if (isset($this->nombre)) { $this->nm_limpa_alfa($this->nombre); }
      if (isset($this->celular)) { $this->nm_limpa_alfa($this->celular); }
      if (isset($this->direccion)) { $this->nm_limpa_alfa($this->direccion); }
      if (isset($this->alerta)) { $this->nm_limpa_alfa($this->alerta); }
      if (isset($this->canal)) { $this->nm_limpa_alfa($this->canal); }
      if (isset($this->radicado)) { $this->nm_limpa_alfa($this->radicado); }
      if (isset($this->origenalerta)) { $this->nm_limpa_alfa($this->origenalerta); }
      if (isset($this->departamento)) { $this->nm_limpa_alfa($this->departamento); }
      if (isset($this->municipio)) { $this->nm_limpa_alfa($this->municipio); }
      if (isset($this->lugar)) { $this->nm_limpa_alfa($this->lugar); }
      if (isset($this->escalar)) { $this->nm_limpa_alfa($this->escalar); }
      if (isset($this->motivo)) { $this->nm_limpa_alfa($this->motivo); }
      if (isset($this->terminado)) { $this->nm_limpa_alfa($this->terminado); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fecharechazada
      $this->field_config['fecharechazada']                 = array();
      $this->field_config['fecharechazada']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['fecharechazada']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecharechazada']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['fecharechazada']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'fecharechazada');
      //-- fechaenatencion
      $this->field_config['fechaenatencion']                 = array();
      $this->field_config['fechaenatencion']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['fechaenatencion']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fechaenatencion']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['fechaenatencion']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'fechaenatencion');
      //-- fechafinalizada
      $this->field_config['fechafinalizada']                 = array();
      $this->field_config['fechafinalizada']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['fechafinalizada']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fechafinalizada']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['fechafinalizada']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'fechafinalizada');
      //-- fecha
      $this->field_config['fecha']                 = array();
      $this->field_config['fecha']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha');
      //-- idalerta
      $this->field_config['idalerta']               = array();
      $this->field_config['idalerta']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idalerta']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idalerta']['symbol_dec'] = '';
      $this->field_config['idalerta']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idalerta']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
         $this->audio = "";
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_aprobada' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'aprobada');
          }
          if ('validate_noaprobada' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'noaprobada');
          }
          if ('validate_escalar' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'escalar');
          }
          if ('validate_geocode' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'geocode');
          }
          if ('validate_motivo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'motivo');
          }
          if ('validate_terminado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'terminado');
          }
          if ('validate_categoria' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'categoria');
          }
          if ('validate_subcategoria' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'subcategoria');
          }
          if ('validate_fecharechazada' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fecharechazada');
          }
          if ('validate_fechaenatencion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fechaenatencion');
          }
          if ('validate_fechafinalizada' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fechafinalizada');
          }
          if ('validate_fecha' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fecha');
          }
          if ('validate_geo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'geo');
          }
          if ('validate_correo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'correo');
          }
          if ('validate_nombre' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombre');
          }
          if ('validate_celular' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'celular');
          }
          if ('validate_direccion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'direccion');
          }
          if ('validate_idalerta' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idalerta');
          }
          if ('validate_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estado');
          }
          if ('validate_latitud' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'latitud');
          }
          if ('validate_longitud' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'longitud');
          }
          if ('validate_departamento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'departamento');
          }
          if ('validate_municipio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'municipio');
          }
          if ('validate_lugar' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'lugar');
          }
          if ('validate_canal' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'canal');
          }
          if ('validate_origenalerta' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'origenalerta');
          }
          if ('validate_radicado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'radicado');
          }
          if ('validate_alerta' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'alerta');
          }
          if ('validate_rutavideo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rutavideo');
          }
          if ('validate_rutaaudio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rutaaudio');
          }
          if ('validate_rutaimagen' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'rutaimagen');
          }
          form_alerta_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_escalar_onclick' == $this->NM_ajax_opcao)
          {
              $this->escalar_onClick();
          }
          if ('event_lugar_onchange' == $this->NM_ajax_opcao)
          {
              $this->lugar_onChange();
          }
          form_alerta_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('autocomp_motivo' == $this->NM_ajax_opcao)
          {
              $this->motivo = ($_SESSION['scriptcase']['charset'] != "UTF-8") ? NM_utf8_decode(sc_convert_encoding($_GET['term'], $_SESSION['scriptcase']['charset'], 'UTF-8')) : $_GET['term'];
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo'] = array(); 
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
       $nm_comando = "SELECT respuesta, pregunta + respuesta FROM baseconocimiento WHERE pregunta + respuesta LIKE '%" . substr($this->Db->qstr($this->motivo), 1, -1) . "%' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
   {
       $nm_comando = "SELECT respuesta, concat(pregunta, respuesta) FROM baseconocimiento WHERE concat(pregunta, respuesta) LIKE '%" . substr($this->Db->qstr($this->motivo), 1, -1) . "%' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
   {
       $nm_comando = "SELECT respuesta, pregunta&respuesta FROM baseconocimiento WHERE pregunta&respuesta LIKE '%" . substr($this->Db->qstr($this->motivo), 1, -1) . "%' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
   {
       $nm_comando = "SELECT respuesta, pregunta||respuesta FROM baseconocimiento WHERE pregunta||respuesta LIKE '%" . substr($this->Db->qstr($this->motivo), 1, -1) . "%' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
   {
       $nm_comando = "SELECT respuesta, pregunta + respuesta FROM baseconocimiento WHERE pregunta + respuesta LIKE '%" . substr($this->Db->qstr($this->motivo), 1, -1) . "%' ORDER BY pregunta, respuesta";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
   {
       $nm_comando = "SELECT respuesta, pregunta||respuesta FROM baseconocimiento WHERE pregunta||respuesta LIKE '%" . substr($this->Db->qstr($this->motivo), 1, -1) . "%' ORDER BY pregunta, respuesta";
   }
   else
   {
       $nm_comando = "SELECT respuesta, pregunta||respuesta FROM baseconocimiento WHERE pregunta||respuesta LIKE '%" . substr($this->Db->qstr($this->motivo), 1, -1) . "%' ORDER BY pregunta, respuesta";
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
              $aLookup[] = array(form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . "" . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo'][] = $rs->fields[0];
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
              $AjaxLim = 0;
              $aResponse = array();
              foreach ($aLookup as $sLkpIndex => $aLkpList)
              {
                  $AjaxLim++;
                  if ($AjaxLim > 10)
                  {
                      break;
                  }
                  foreach ($aLkpList as $sLkpIndex => $sLkpValue)
                  {
                      $sLkpIndex = str_replace(array("\r", "\n"), array('', '<br />'), $sLkpIndex);
                      $sLkpValue = str_replace(array("\r", "\n"), array('', '<br />'), $sLkpValue);
                      $aResponse[] = array('label' => $sLkpValue, 'value' => $sLkpIndex);
                  }
              }
              $oJson = new Services_JSON();
              echo $oJson->encode($aResponse);
              exit;
          }
          form_alerta_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->terminado))
          {
              $x = 0; 
              $this->terminado_1 = $this->terminado;
              $this->terminado = ""; 
              if ($this->terminado_1 != "") 
              { 
                  foreach ($this->terminado_1 as $dados_terminado_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->terminado .= ";";
                      } 
                      $this->terminado .= $dados_terminado_1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_select']['origenalerta']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->origenalerta = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_select']['origenalerta'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_alerta_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_alerta_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && $this->nmgp_opcao != "menu_link")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_alerta_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_alerta_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'aprobada':
               return "Aprobada Para Seguimiento";
               break;
           case 'noaprobada':
               return "Todavia No Aprobada";
               break;
           case 'escalar':
               return "Escalar";
               break;
           case 'geocode':
               return "Localizacion";
               break;
           case 'audio':
               return "Audio";
               break;
           case 'motivo':
               return "Motivo";
               break;
           case 'terminado':
               return "Terminado";
               break;
           case 'categoria':
               return "Categoria";
               break;
           case 'subcategoria':
               return "Subcategoria";
               break;
           case 'fecharechazada':
               return "Fecharechazada";
               break;
           case 'fechaenatencion':
               return "Fechaenatencion";
               break;
           case 'fechafinalizada':
               return "Fechafinalizada";
               break;
           case 'fecha':
               return "Fecha";
               break;
           case 'geo':
               return "Geo";
               break;
           case 'correo':
               return "Correo";
               break;
           case 'nombre':
               return "Nombre";
               break;
           case 'celular':
               return "Celular";
               break;
           case 'direccion':
               return "Direccion";
               break;
           case 'idalerta':
               return "Idalerta";
               break;
           case 'estado':
               return "Estado";
               break;
           case 'latitud':
               return "Latitud";
               break;
           case 'longitud':
               return "Longitud";
               break;
           case 'departamento':
               return "Departamento";
               break;
           case 'municipio':
               return "Municipio";
               break;
           case 'lugar':
               return "Lugar";
               break;
           case 'canal':
               return "Canal";
               break;
           case 'origenalerta':
               return "Origenalerta";
               break;
           case 'radicado':
               return "Radicado";
               break;
           case 'alerta':
               return "Alerta";
               break;
           case 'rutavideo':
               return "Rutavideo";
               break;
           case 'rutaaudio':
               return "Rutaaudio";
               break;
           case 'rutaimagen':
               return "Rutaimagen";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_alerta']) || !is_array($this->NM_ajax_info['errList']['geral_form_alerta']))
              {
                  $this->NM_ajax_info['errList']['geral_form_alerta'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_alerta'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'aprobada' == $filtro)
        $this->ValidateField_aprobada($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'noaprobada' == $filtro)
        $this->ValidateField_noaprobada($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'escalar' == $filtro)
        $this->ValidateField_escalar($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'geocode' == $filtro)
        $this->ValidateField_geocode($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'motivo' == $filtro)
        $this->ValidateField_motivo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'terminado' == $filtro)
        $this->ValidateField_terminado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'categoria' == $filtro)
        $this->ValidateField_categoria($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'subcategoria' == $filtro)
        $this->ValidateField_subcategoria($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fecharechazada' == $filtro)
        $this->ValidateField_fecharechazada($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fechaenatencion' == $filtro)
        $this->ValidateField_fechaenatencion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fechafinalizada' == $filtro)
        $this->ValidateField_fechafinalizada($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fecha' == $filtro)
        $this->ValidateField_fecha($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'geo' == $filtro)
        $this->ValidateField_geo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correo' == $filtro)
        $this->ValidateField_correo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombre' == $filtro)
        $this->ValidateField_nombre($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'celular' == $filtro)
        $this->ValidateField_celular($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'direccion' == $filtro)
        $this->ValidateField_direccion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'idalerta' == $filtro)
        $this->ValidateField_idalerta($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estado' == $filtro)
        $this->ValidateField_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'latitud' == $filtro)
        $this->ValidateField_latitud($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'longitud' == $filtro)
        $this->ValidateField_longitud($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'departamento' == $filtro)
        $this->ValidateField_departamento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'municipio' == $filtro)
        $this->ValidateField_municipio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'lugar' == $filtro)
        $this->ValidateField_lugar($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'canal' == $filtro)
        $this->ValidateField_canal($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'origenalerta' == $filtro)
        $this->ValidateField_origenalerta($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'radicado' == $filtro)
        $this->ValidateField_radicado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'alerta' == $filtro)
        $this->ValidateField_alerta($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rutavideo' == $filtro)
        $this->ValidateField_rutavideo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rutaaudio' == $filtro)
        $this->ValidateField_rutaaudio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'rutaimagen' == $filtro)
        $this->ValidateField_rutaimagen($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
//-- converter datas   
      $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_aprobada(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->aprobada) != "")  
          { 
          } 
      } 
    } // ValidateField_aprobada

    function ValidateField_noaprobada(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->noaprobada) != "")  
          { 
          } 
      } 
    } // ValidateField_noaprobada

    function ValidateField_escalar(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->escalar == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
    } // ValidateField_escalar

    function ValidateField_geocode(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->geocode) != "")  
          { 
          } 
      } 
    } // ValidateField_geocode

    function ValidateField_motivo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->motivo) > 1000) 
          { 
              $Campos_Crit .= "Motivo " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1000 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['motivo']))
              {
                  $Campos_Erros['motivo'] = array();
              }
              $Campos_Erros['motivo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1000 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['motivo']) || !is_array($this->NM_ajax_info['errList']['motivo']))
              {
                  $this->NM_ajax_info['errList']['motivo'] = array();
              }
              $this->NM_ajax_info['errList']['motivo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1000 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->motivo ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->motivo, $_SESSION['scriptcase']['charset']); $x++) 
          { 
               for ($y = 0; $y < mb_strlen($Teste_trab, $_SESSION['scriptcase']['charset']); $y++) 
               { 
                    if (sc_substr($Teste_compara, $x, 1) == sc_substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (sc_substr($Teste_compara, $x, 1) != sc_substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $Campos_Crit .= "Motivo " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['motivo']))
              {
                  $Campos_Erros['motivo'] = array();
              }
              $Campos_Erros['motivo'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['motivo']) || !is_array($this->NM_ajax_info['errList']['motivo']))
              {
                  $this->NM_ajax_info['errList']['motivo'] = array();
              }
              $this->NM_ajax_info['errList']['motivo'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_motivo

    function ValidateField_terminado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->terminado == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->terminado = "0";
      } 
      else 
      { 
          if (is_array($this->terminado))
          {
              $x = 0; 
              $this->terminado_1 = array(); 
              foreach ($this->terminado as $ind => $dados_terminado_1 ) 
              {
                  if ($dados_terminado_1 !== "") 
                  {
                      $this->terminado_1[] = $dados_terminado_1;
                  } 
              } 
              $this->terminado = ""; 
              foreach ($this->terminado_1 as $dados_terminado_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->terminado .= ";";
                   } 
                   $this->terminado .= $dados_terminado_1;
                   $x++ ; 
              } 
          } 
      } 
      if ($this->terminado == "")  
      { 
          $this->terminado = 0;
          $this->sc_force_zero[] = 'terminado';
      } 
    } // ValidateField_terminado

    function ValidateField_categoria(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->categoria) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_categoria']) && !in_array($this->categoria, $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_categoria']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['categoria']))
                   {
                       $Campos_Erros['categoria'] = array();
                   }
                   $Campos_Erros['categoria'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['categoria']) || !is_array($this->NM_ajax_info['errList']['categoria']))
                   {
                       $this->NM_ajax_info['errList']['categoria'] = array();
                   }
                   $this->NM_ajax_info['errList']['categoria'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_categoria

    function ValidateField_subcategoria(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->subcategoria) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_subcategoria']) && !in_array($this->subcategoria, $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_subcategoria']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['subcategoria']))
                   {
                       $Campos_Erros['subcategoria'] = array();
                   }
                   $Campos_Erros['subcategoria'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['subcategoria']) || !is_array($this->NM_ajax_info['errList']['subcategoria']))
                   {
                       $this->NM_ajax_info['errList']['subcategoria'] = array();
                   }
                   $this->NM_ajax_info['errList']['subcategoria'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_subcategoria

    function ValidateField_fecharechazada(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->fecharechazada, $this->field_config['fecharechazada']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fecharechazada']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fecharechazada']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fecharechazada']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fecharechazada']['date_sep']) ; 
          if (trim($this->fecharechazada) != "")  
          { 
              if ($teste_validade->Data($this->fecharechazada, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Fecharechazada; " ; 
                  if (!isset($Campos_Erros['fecharechazada']))
                  {
                      $Campos_Erros['fecharechazada'] = array();
                  }
                  $Campos_Erros['fecharechazada'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecharechazada']) || !is_array($this->NM_ajax_info['errList']['fecharechazada']))
                  {
                      $this->NM_ajax_info['errList']['fecharechazada'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecharechazada'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fecharechazada']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->fecharechazada_hora, $this->field_config['fecharechazada_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['fecharechazada_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['fecharechazada_hora']['time_sep']) ; 
          if (trim($this->fecharechazada_hora) != "")  
          { 
              if ($teste_validade->Hora($this->fecharechazada_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Fecharechazada; " ; 
                  if (!isset($Campos_Erros['fecharechazada_hora']))
                  {
                      $Campos_Erros['fecharechazada_hora'] = array();
                  }
                  $Campos_Erros['fecharechazada_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecharechazada']) || !is_array($this->NM_ajax_info['errList']['fecharechazada']))
                  {
                      $this->NM_ajax_info['errList']['fecharechazada'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecharechazada'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if (isset($Campos_Erros['fecharechazada']) && isset($Campos_Erros['fecharechazada_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['fecharechazada'], $Campos_Erros['fecharechazada_hora']);
          if (empty($Campos_Erros['fecharechazada_hora']))
          {
              unset($Campos_Erros['fecharechazada_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['fecharechazada']))
          {
              $this->NM_ajax_info['errList']['fecharechazada'] = array_unique($this->NM_ajax_info['errList']['fecharechazada']);
          }
      }
    } // ValidateField_fecharechazada_hora

    function ValidateField_fechaenatencion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->fechaenatencion, $this->field_config['fechaenatencion']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fechaenatencion']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fechaenatencion']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fechaenatencion']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fechaenatencion']['date_sep']) ; 
          if (trim($this->fechaenatencion) != "")  
          { 
              if ($teste_validade->Data($this->fechaenatencion, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Fechaenatencion; " ; 
                  if (!isset($Campos_Erros['fechaenatencion']))
                  {
                      $Campos_Erros['fechaenatencion'] = array();
                  }
                  $Campos_Erros['fechaenatencion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fechaenatencion']) || !is_array($this->NM_ajax_info['errList']['fechaenatencion']))
                  {
                      $this->NM_ajax_info['errList']['fechaenatencion'] = array();
                  }
                  $this->NM_ajax_info['errList']['fechaenatencion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fechaenatencion']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->fechaenatencion_hora, $this->field_config['fechaenatencion_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['fechaenatencion_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['fechaenatencion_hora']['time_sep']) ; 
          if (trim($this->fechaenatencion_hora) != "")  
          { 
              if ($teste_validade->Hora($this->fechaenatencion_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Fechaenatencion; " ; 
                  if (!isset($Campos_Erros['fechaenatencion_hora']))
                  {
                      $Campos_Erros['fechaenatencion_hora'] = array();
                  }
                  $Campos_Erros['fechaenatencion_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fechaenatencion']) || !is_array($this->NM_ajax_info['errList']['fechaenatencion']))
                  {
                      $this->NM_ajax_info['errList']['fechaenatencion'] = array();
                  }
                  $this->NM_ajax_info['errList']['fechaenatencion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if (isset($Campos_Erros['fechaenatencion']) && isset($Campos_Erros['fechaenatencion_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['fechaenatencion'], $Campos_Erros['fechaenatencion_hora']);
          if (empty($Campos_Erros['fechaenatencion_hora']))
          {
              unset($Campos_Erros['fechaenatencion_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['fechaenatencion']))
          {
              $this->NM_ajax_info['errList']['fechaenatencion'] = array_unique($this->NM_ajax_info['errList']['fechaenatencion']);
          }
      }
    } // ValidateField_fechaenatencion_hora

    function ValidateField_fechafinalizada(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->fechafinalizada, $this->field_config['fechafinalizada']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fechafinalizada']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fechafinalizada']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fechafinalizada']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fechafinalizada']['date_sep']) ; 
          if (trim($this->fechafinalizada) != "")  
          { 
              if ($teste_validade->Data($this->fechafinalizada, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Fechafinalizada; " ; 
                  if (!isset($Campos_Erros['fechafinalizada']))
                  {
                      $Campos_Erros['fechafinalizada'] = array();
                  }
                  $Campos_Erros['fechafinalizada'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fechafinalizada']) || !is_array($this->NM_ajax_info['errList']['fechafinalizada']))
                  {
                      $this->NM_ajax_info['errList']['fechafinalizada'] = array();
                  }
                  $this->NM_ajax_info['errList']['fechafinalizada'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fechafinalizada']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->fechafinalizada_hora, $this->field_config['fechafinalizada_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['fechafinalizada_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['fechafinalizada_hora']['time_sep']) ; 
          if (trim($this->fechafinalizada_hora) != "")  
          { 
              if ($teste_validade->Hora($this->fechafinalizada_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "Fechafinalizada; " ; 
                  if (!isset($Campos_Erros['fechafinalizada_hora']))
                  {
                      $Campos_Erros['fechafinalizada_hora'] = array();
                  }
                  $Campos_Erros['fechafinalizada_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fechafinalizada']) || !is_array($this->NM_ajax_info['errList']['fechafinalizada']))
                  {
                      $this->NM_ajax_info['errList']['fechafinalizada'] = array();
                  }
                  $this->NM_ajax_info['errList']['fechafinalizada'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if (isset($Campos_Erros['fechafinalizada']) && isset($Campos_Erros['fechafinalizada_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['fechafinalizada'], $Campos_Erros['fechafinalizada_hora']);
          if (empty($Campos_Erros['fechafinalizada_hora']))
          {
              unset($Campos_Erros['fechafinalizada_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['fechafinalizada']))
          {
              $this->NM_ajax_info['errList']['fechafinalizada'] = array_unique($this->NM_ajax_info['errList']['fechafinalizada']);
          }
      }
    } // ValidateField_fechafinalizada_hora

    function ValidateField_fecha(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->fecha, $this->field_config['fecha']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fecha']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fecha']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fecha']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fecha']['date_sep']) ; 
          if (trim($this->fecha) != "")  
          { 
              if ($teste_validade->Data($this->fecha, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Fecha; " ; 
                  if (!isset($Campos_Erros['fecha']))
                  {
                      $Campos_Erros['fecha'] = array();
                  }
                  $Campos_Erros['fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecha']) || !is_array($this->NM_ajax_info['errList']['fecha']))
                  {
                      $this->NM_ajax_info['errList']['fecha'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fecha']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_fecha

    function ValidateField_geo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->geo) > 45) 
          { 
              $Campos_Crit .= "Geo " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['geo']))
              {
                  $Campos_Erros['geo'] = array();
              }
              $Campos_Erros['geo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['geo']) || !is_array($this->NM_ajax_info['errList']['geo']))
              {
                  $this->NM_ajax_info['errList']['geo'] = array();
              }
              $this->NM_ajax_info['errList']['geo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_geo

    function ValidateField_correo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->correo) != "")  
          { 
              if ($teste_validade->Email($this->correo) == false)  
              { 
                      $Campos_Crit .= "Correo; " ; 
                  if (!isset($Campos_Erros['correo']))
                  {
                      $Campos_Erros['correo'] = array();
                  }
                  $Campos_Erros['correo'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['correo']) || !is_array($this->NM_ajax_info['errList']['correo']))
                      {
                          $this->NM_ajax_info['errList']['correo'] = array();
                      }
                      $this->NM_ajax_info['errList']['correo'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_correo

    function ValidateField_nombre(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nombre) > 45) 
          { 
              $Campos_Crit .= "Nombre " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nombre']))
              {
                  $Campos_Erros['nombre'] = array();
              }
              $Campos_Erros['nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nombre']) || !is_array($this->NM_ajax_info['errList']['nombre']))
              {
                  $this->NM_ajax_info['errList']['nombre'] = array();
              }
              $this->NM_ajax_info['errList']['nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nombre

    function ValidateField_celular(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->celular) > 45) 
          { 
              $Campos_Crit .= "Celular " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['celular']))
              {
                  $Campos_Erros['celular'] = array();
              }
              $Campos_Erros['celular'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['celular']) || !is_array($this->NM_ajax_info['errList']['celular']))
              {
                  $this->NM_ajax_info['errList']['celular'] = array();
              }
              $this->NM_ajax_info['errList']['celular'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_celular

    function ValidateField_direccion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->direccion) > 45) 
          { 
              $Campos_Crit .= "Direccion " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['direccion']))
              {
                  $Campos_Erros['direccion'] = array();
              }
              $Campos_Erros['direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['direccion']) || !is_array($this->NM_ajax_info['errList']['direccion']))
              {
                  $this->NM_ajax_info['errList']['direccion'] = array();
              }
              $this->NM_ajax_info['errList']['direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_direccion

    function ValidateField_idalerta(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->idalerta == "")  
      { 
          $this->idalerta = 0;
      } 
      nm_limpa_numero($this->idalerta, $this->field_config['idalerta']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->idalerta != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->idalerta) > $iTestSize)  
              { 
                  $Campos_Crit .= "Idalerta: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['idalerta']))
                  {
                      $Campos_Erros['idalerta'] = array();
                  }
                  $Campos_Erros['idalerta'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['idalerta']) || !is_array($this->NM_ajax_info['errList']['idalerta']))
                  {
                      $this->NM_ajax_info['errList']['idalerta'] = array();
                  }
                  $this->NM_ajax_info['errList']['idalerta'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->idalerta, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Idalerta; " ; 
                  if (!isset($Campos_Erros['idalerta']))
                  {
                      $Campos_Erros['idalerta'] = array();
                  }
                  $Campos_Erros['idalerta'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['idalerta']) || !is_array($this->NM_ajax_info['errList']['idalerta']))
                  {
                      $this->NM_ajax_info['errList']['idalerta'] = array();
                  }
                  $this->NM_ajax_info['errList']['idalerta'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_idalerta

    function ValidateField_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->estado) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_estado']) && !in_array($this->estado, $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_estado']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['estado']))
                   {
                       $Campos_Erros['estado'] = array();
                   }
                   $Campos_Erros['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['estado']) || !is_array($this->NM_ajax_info['errList']['estado']))
                   {
                       $this->NM_ajax_info['errList']['estado'] = array();
                   }
                   $this->NM_ajax_info['errList']['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_estado

    function ValidateField_latitud(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->latitud) > 50) 
          { 
              $Campos_Crit .= "Latitud " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['latitud']))
              {
                  $Campos_Erros['latitud'] = array();
              }
              $Campos_Erros['latitud'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['latitud']) || !is_array($this->NM_ajax_info['errList']['latitud']))
              {
                  $this->NM_ajax_info['errList']['latitud'] = array();
              }
              $this->NM_ajax_info['errList']['latitud'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_latitud

    function ValidateField_longitud(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->longitud) > 50) 
          { 
              $Campos_Crit .= "Longitud " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['longitud']))
              {
                  $Campos_Erros['longitud'] = array();
              }
              $Campos_Erros['longitud'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['longitud']) || !is_array($this->NM_ajax_info['errList']['longitud']))
              {
                  $this->NM_ajax_info['errList']['longitud'] = array();
              }
              $this->NM_ajax_info['errList']['longitud'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_longitud

    function ValidateField_departamento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->departamento) > 45) 
          { 
              $Campos_Crit .= "Departamento " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['departamento']))
              {
                  $Campos_Erros['departamento'] = array();
              }
              $Campos_Erros['departamento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['departamento']) || !is_array($this->NM_ajax_info['errList']['departamento']))
              {
                  $this->NM_ajax_info['errList']['departamento'] = array();
              }
              $this->NM_ajax_info['errList']['departamento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_departamento

    function ValidateField_municipio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->municipio) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_municipio']) && !in_array($this->municipio, $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_municipio']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['municipio']))
                   {
                       $Campos_Erros['municipio'] = array();
                   }
                   $Campos_Erros['municipio'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['municipio']) || !is_array($this->NM_ajax_info['errList']['municipio']))
                   {
                       $this->NM_ajax_info['errList']['municipio'] = array();
                   }
                   $this->NM_ajax_info['errList']['municipio'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_municipio

    function ValidateField_lugar(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->lugar) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_lugar']) && !in_array($this->lugar, $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_lugar']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['lugar']))
                   {
                       $Campos_Erros['lugar'] = array();
                   }
                   $Campos_Erros['lugar'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['lugar']) || !is_array($this->NM_ajax_info['errList']['lugar']))
                   {
                       $this->NM_ajax_info['errList']['lugar'] = array();
                   }
                   $this->NM_ajax_info['errList']['lugar'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_lugar

    function ValidateField_canal(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->canal) > 45) 
          { 
              $Campos_Crit .= "Canal " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['canal']))
              {
                  $Campos_Erros['canal'] = array();
              }
              $Campos_Erros['canal'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['canal']) || !is_array($this->NM_ajax_info['errList']['canal']))
              {
                  $this->NM_ajax_info['errList']['canal'] = array();
              }
              $this->NM_ajax_info['errList']['canal'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_canal

    function ValidateField_origenalerta(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->origenalerta == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
    } // ValidateField_origenalerta

    function ValidateField_radicado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->radicado) > 45) 
          { 
              $Campos_Crit .= "Radicado " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['radicado']))
              {
                  $Campos_Erros['radicado'] = array();
              }
              $Campos_Erros['radicado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['radicado']) || !is_array($this->NM_ajax_info['errList']['radicado']))
              {
                  $this->NM_ajax_info['errList']['radicado'] = array();
              }
              $this->NM_ajax_info['errList']['radicado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_radicado

    function ValidateField_alerta(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->alerta) > 3000) 
          { 
              $Campos_Crit .= "Alerta " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 3000 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['alerta']))
              {
                  $Campos_Erros['alerta'] = array();
              }
              $Campos_Erros['alerta'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 3000 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['alerta']) || !is_array($this->NM_ajax_info['errList']['alerta']))
              {
                  $this->NM_ajax_info['errList']['alerta'] = array();
              }
              $this->NM_ajax_info['errList']['alerta'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 3000 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_alerta

    function ValidateField_rutavideo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->rutavideo;
            if (!function_exists('sc_upload_unprotect_chars'))
            {
                include_once 'form_alerta_doc_name.php';
            }
            $this->rutavideo = sc_upload_unprotect_chars($this->rutavideo);
            $this->rutavideo_scfile_name = sc_upload_unprotect_chars($this->rutavideo_scfile_name);
            if ("" != $this->rutavideo && "S" != $this->rutavideo_limpa && !$teste_validade->ArqExtensao($this->rutavideo, array()))
            {
                $Campos_Crit .= "Rutavideo: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['rutavideo']))
                {
                    $Campos_Erros['rutavideo'] = array();
                }
                $Campos_Erros['rutavideo'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['rutavideo']) || !is_array($this->NM_ajax_info['errList']['rutavideo']))
                {
                    $this->NM_ajax_info['errList']['rutavideo'] = array();
                }
                $this->NM_ajax_info['errList']['rutavideo'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_rutavideo

    function ValidateField_rutaaudio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->rutaaudio;
            if (!function_exists('sc_upload_unprotect_chars'))
            {
                include_once 'form_alerta_doc_name.php';
            }
            $this->rutaaudio = sc_upload_unprotect_chars($this->rutaaudio);
            $this->rutaaudio_scfile_name = sc_upload_unprotect_chars($this->rutaaudio_scfile_name);
            if ("" != $this->rutaaudio && "S" != $this->rutaaudio_limpa && !$teste_validade->ArqExtensao($this->rutaaudio, array()))
            {
                $Campos_Crit .= "Rutaaudio: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['rutaaudio']))
                {
                    $Campos_Erros['rutaaudio'] = array();
                }
                $Campos_Erros['rutaaudio'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['rutaaudio']) || !is_array($this->NM_ajax_info['errList']['rutaaudio']))
                {
                    $this->NM_ajax_info['errList']['rutaaudio'] = array();
                }
                $this->NM_ajax_info['errList']['rutaaudio'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_rutaaudio

    function ValidateField_rutaimagen(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->rutaimagen;
            if ("" != $this->rutaimagen && "S" != $this->rutaimagen_limpa && !$teste_validade->ArqExtensao($this->rutaimagen, array()))
            {
                $Campos_Crit .= "Rutaimagen: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['rutaimagen']))
                {
                    $Campos_Erros['rutaimagen'] = array();
                }
                $Campos_Erros['rutaimagen'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['rutaimagen']) || !is_array($this->NM_ajax_info['errList']['rutaimagen']))
                {
                    $this->NM_ajax_info['errList']['rutaimagen'] = array();
                }
                $this->NM_ajax_info['errList']['rutaimagen'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_rutaimagen
//
//--------------------------------------------------------------------------------------
   function upload_img_doc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros) 
   {
     global $nm_browser;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->rutavideo == "none") 
          { 
              $this->rutavideo = ""; 
          } 
          if ($this->rutavideo != "") 
          { 
              if (is_file($this->rutavideo))  
              { 
                  if ($this->nmgp_opcao == "incluir")
                  { 
                      $this->SC_DOC_rutavideo = $this->rutavideo;
                  } 
                  else 
                  { 
                      $arq_rutavideo = fopen($this->rutavideo, "r") ; 
                      $reg_rutavideo = fread($arq_rutavideo, filesize($this->rutavideo)) ; 
                      fclose($arq_rutavideo) ;  
                  } 
                  $this->rutavideo =  trim($this->rutavideo_scfile_name) ;  
                  $dir_doc = $this->Ini->path_doc . "" . "/"; 
                 if ($this->nmgp_opcao != "incluir")
                 { 
                  if (is_dir($dir_doc))  
                  { 
                      $_test_file = $this->fetchUniqueUploadName($this->rutavideo_scfile_name, $dir_doc, "rutavideo");
                      if (trim($this->rutavideo_scfile_name) != $_test_file)
                      {
                          $this->rutavideo_scfile_name = $_test_file;
                          $this->rutavideo = $_test_file;
                      }
                      $arq_rutavideo = fopen($dir_doc . trim($this->rutavideo_scfile_name), "w") ; 
                      fwrite($arq_rutavideo, $reg_rutavideo) ;  
                      fclose($arq_rutavideo) ;  
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Rutavideo: " . $this->Ini->Nm_lang['lang_errm_nfdr']; 
                      if (!isset($Campos_Erros['rutavideo']))
                      {
                          $Campos_Erros['rutavideo'] = array();
                      }
                      $Campos_Erros['rutavideo'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                      if (!isset($this->NM_ajax_info['errList']['rutavideo']) || !is_array($this->NM_ajax_info['errList']['rutavideo']))
                      {
                          $this->NM_ajax_info['errList']['rutavideo'] = array();
                      }
                      $this->NM_ajax_info['errList']['rutavideo'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                  } 
                 } 
              } 
              else 
              { 
                  $Campos_Crit .= "Rutavideo " . $this->Ini->Nm_lang['lang_errm_upld']; 
                  $this->rutavideo = "";
                  if (!isset($Campos_Erros['rutavideo']))
                  {
                      $Campos_Erros['rutavideo'] = array();
                  }
                  $Campos_Erros['rutavideo'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  if (!isset($this->NM_ajax_info['errList']['rutavideo']) || !is_array($this->NM_ajax_info['errList']['rutavideo']))
                  {
                      $this->NM_ajax_info['errList']['rutavideo'] = array();
                  }
                  $this->NM_ajax_info['errList']['rutavideo'][] = $this->Ini->Nm_lang['lang_errm_upld'];
              } 
          } 
          elseif (!empty($this->rutavideo_salva) && $this->rutavideo_limpa != "S")
          {
              $this->rutavideo = $this->rutavideo_salva;
          }
      } 
      elseif (!empty($this->rutavideo_salva) && $this->rutavideo_limpa != "S")
      {
          $this->rutavideo = $this->rutavideo_salva;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->rutaaudio == "none") 
          { 
              $this->rutaaudio = ""; 
          } 
          if ($this->rutaaudio != "") 
          { 
              if (is_file($this->rutaaudio))  
              { 
                  if ($this->nmgp_opcao == "incluir")
                  { 
                      $this->SC_DOC_rutaaudio = $this->rutaaudio;
                  } 
                  else 
                  { 
                      $arq_rutaaudio = fopen($this->rutaaudio, "r") ; 
                      $reg_rutaaudio = fread($arq_rutaaudio, filesize($this->rutaaudio)) ; 
                      fclose($arq_rutaaudio) ;  
                  } 
                  $this->rutaaudio =  trim($this->rutaaudio_scfile_name) ;  
                  $dir_doc = $this->Ini->path_doc . "" . "/"; 
                 if ($this->nmgp_opcao != "incluir")
                 { 
                  if (is_dir($dir_doc))  
                  { 
                      $_test_file = $this->fetchUniqueUploadName($this->rutaaudio_scfile_name, $dir_doc, "rutaaudio");
                      if (trim($this->rutaaudio_scfile_name) != $_test_file)
                      {
                          $this->rutaaudio_scfile_name = $_test_file;
                          $this->rutaaudio = $_test_file;
                      }
                      $arq_rutaaudio = fopen($dir_doc . trim($this->rutaaudio_scfile_name), "w") ; 
                      fwrite($arq_rutaaudio, $reg_rutaaudio) ;  
                      fclose($arq_rutaaudio) ;  
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Rutaaudio: " . $this->Ini->Nm_lang['lang_errm_nfdr']; 
                      if (!isset($Campos_Erros['rutaaudio']))
                      {
                          $Campos_Erros['rutaaudio'] = array();
                      }
                      $Campos_Erros['rutaaudio'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                      if (!isset($this->NM_ajax_info['errList']['rutaaudio']) || !is_array($this->NM_ajax_info['errList']['rutaaudio']))
                      {
                          $this->NM_ajax_info['errList']['rutaaudio'] = array();
                      }
                      $this->NM_ajax_info['errList']['rutaaudio'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                  } 
                 } 
              } 
              else 
              { 
                  $Campos_Crit .= "Rutaaudio " . $this->Ini->Nm_lang['lang_errm_upld']; 
                  $this->rutaaudio = "";
                  if (!isset($Campos_Erros['rutaaudio']))
                  {
                      $Campos_Erros['rutaaudio'] = array();
                  }
                  $Campos_Erros['rutaaudio'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  if (!isset($this->NM_ajax_info['errList']['rutaaudio']) || !is_array($this->NM_ajax_info['errList']['rutaaudio']))
                  {
                      $this->NM_ajax_info['errList']['rutaaudio'] = array();
                  }
                  $this->NM_ajax_info['errList']['rutaaudio'][] = $this->Ini->Nm_lang['lang_errm_upld'];
              } 
          } 
          elseif (!empty($this->rutaaudio_salva) && $this->rutaaudio_limpa != "S")
          {
              $this->rutaaudio = $this->rutaaudio_salva;
          }
      } 
      elseif (!empty($this->rutaaudio_salva) && $this->rutaaudio_limpa != "S")
      {
          $this->rutaaudio = $this->rutaaudio_salva;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->rutaimagen == "none") 
          { 
              $this->rutaimagen = ""; 
          } 
          if ($this->rutaimagen != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_alerta_doc_name.php';
              }
              $this->rutaimagen = sc_upload_unprotect_chars($this->rutaimagen);
              $this->rutaimagen_scfile_name = sc_upload_unprotect_chars($this->rutaimagen_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->rutaimagen_scfile_type = substr($this->rutaimagen_scfile_type, 0, strpos($this->rutaimagen_scfile_type, ";")) ; 
              } 
              if ($this->rutaimagen_scfile_type == "image/pjpeg" || $this->rutaimagen_scfile_type == "image/jpeg" || $this->rutaimagen_scfile_type == "image/gif" ||  
                  $this->rutaimagen_scfile_type == "image/png" || $this->rutaimagen_scfile_type == "image/x-png" || $this->rutaimagen_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->rutaimagen))  
                  { 
                      if ($this->nmgp_opcao == "incluir")
                      { 
                          $this->SC_IMG_rutaimagen = $this->rutaimagen;
                      } 
                      else 
                      { 
                          $arq_rutaimagen = fopen($this->rutaimagen, "r") ; 
                          $reg_rutaimagen = fread($arq_rutaimagen, filesize($this->rutaimagen)) ; 
                          fclose($arq_rutaimagen) ;  
                      } 
                      $this->rutaimagen =  trim($this->rutaimagen_scfile_name) ;  
                      $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
                     if ($this->nmgp_opcao != "incluir")
                     { 
                      if (is_dir($dir_img))  
                      { 
                          $_test_file = $this->fetchUniqueUploadName($this->rutaimagen_scfile_name, $dir_img, "rutaimagen");
                          if (trim($this->rutaimagen_scfile_name) != $_test_file)
                          {
                              $this->rutaimagen_scfile_name = $_test_file;
                              $this->rutaimagen = $_test_file;
                          }
                          $arq_rutaimagen = fopen($dir_img . trim($this->rutaimagen_scfile_name), "w") ; 
                          fwrite($arq_rutaimagen, $reg_rutaimagen) ;  
                          fclose($arq_rutaimagen) ;  
                      } 
                      else 
                      { 
                          $Campos_Crit .= "Rutaimagen: " . $this->Ini->Nm_lang['lang_errm_nfdr']; 
                          $this->rutaimagen = "";
                          if (!isset($Campos_Erros['rutaimagen']))
                          {
                              $Campos_Erros['rutaimagen'] = array();
                          }
                          $Campos_Erros['rutaimagen'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                          if (!isset($this->NM_ajax_info['errList']['rutaimagen']) || !is_array($this->NM_ajax_info['errList']['rutaimagen']))
                          {
                              $this->NM_ajax_info['errList']['rutaimagen'] = array();
                          }
                          $this->NM_ajax_info['errList']['rutaimagen'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                      } 
                     } 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Rutaimagen " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->rutaimagen = "";
                      if (!isset($Campos_Erros['rutaimagen']))
                      {
                          $Campos_Erros['rutaimagen'] = array();
                      }
                      $Campos_Erros['rutaimagen'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['rutaimagen']) || !is_array($this->NM_ajax_info['errList']['rutaimagen']))
                      {
                          $this->NM_ajax_info['errList']['rutaimagen'] = array();
                      }
                      $this->NM_ajax_info['errList']['rutaimagen'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->rutaimagen = "" ; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Rutaimagen " . $this->Ini->Nm_lang['lang_errm_ivtp']; 
                      if (!isset($Campos_Erros['rutaimagen']))
                      {
                          $Campos_Erros['rutaimagen'] = array();
                      }
                      $Campos_Erros['rutaimagen'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                      if (!isset($this->NM_ajax_info['errList']['rutaimagen']) || !is_array($this->NM_ajax_info['errList']['rutaimagen']))
                      {
                          $this->NM_ajax_info['errList']['rutaimagen'] = array();
                      }
                      $this->NM_ajax_info['errList']['rutaimagen'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                  } 
              } 
          } 
          elseif (!empty($this->rutaimagen_salva) && $this->rutaimagen_limpa != "S")
          {
              $this->rutaimagen = $this->rutaimagen_salva;
          }
      } 
      elseif (!empty($this->rutaimagen_salva) && $this->rutaimagen_limpa != "S")
      {
          $this->rutaimagen = $this->rutaimagen_salva;
      }
   }

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['aprobada'] = $this->aprobada;
    $this->nmgp_dados_form['noaprobada'] = $this->noaprobada;
    $this->nmgp_dados_form['escalar'] = $this->escalar;
    $this->nmgp_dados_form['geocode'] = $this->geocode;
    $this->nmgp_dados_form['audio'] = $this->audio;
    $this->nmgp_dados_form['motivo'] = $this->motivo;
    $this->nmgp_dados_form['terminado'] = $this->terminado;
    $this->nmgp_dados_form['categoria'] = $this->categoria;
    $this->nmgp_dados_form['subcategoria'] = $this->subcategoria;
    $this->nmgp_dados_form['fecharechazada'] = $this->fecharechazada;
    $this->nmgp_dados_form['fechaenatencion'] = $this->fechaenatencion;
    $this->nmgp_dados_form['fechafinalizada'] = $this->fechafinalizada;
    $this->nmgp_dados_form['fecha'] = $this->fecha;
    $this->nmgp_dados_form['geo'] = $this->geo;
    $this->nmgp_dados_form['correo'] = $this->correo;
    $this->nmgp_dados_form['nombre'] = $this->nombre;
    $this->nmgp_dados_form['celular'] = $this->celular;
    $this->nmgp_dados_form['direccion'] = $this->direccion;
    $this->nmgp_dados_form['idalerta'] = $this->idalerta;
    $this->nmgp_dados_form['estado'] = $this->estado;
    $this->nmgp_dados_form['latitud'] = $this->latitud;
    $this->nmgp_dados_form['longitud'] = $this->longitud;
    $this->nmgp_dados_form['departamento'] = $this->departamento;
    $this->nmgp_dados_form['municipio'] = $this->municipio;
    $this->nmgp_dados_form['lugar'] = $this->lugar;
    $this->nmgp_dados_form['canal'] = $this->canal;
    $this->nmgp_dados_form['origenalerta'] = $this->origenalerta;
    $this->nmgp_dados_form['radicado'] = $this->radicado;
    $this->nmgp_dados_form['alerta'] = $this->alerta;
    if (empty($this->rutavideo))
    {
        $this->rutavideo = $this->nmgp_dados_form['rutavideo'];
    }
    $this->nmgp_dados_form['rutavideo'] = $this->rutavideo;
    $this->nmgp_dados_form['rutavideo_limpa'] = $this->rutavideo_limpa;
    if (empty($this->rutaaudio))
    {
        $this->rutaaudio = $this->nmgp_dados_form['rutaaudio'];
    }
    $this->nmgp_dados_form['rutaaudio'] = $this->rutaaudio;
    $this->nmgp_dados_form['rutaaudio_limpa'] = $this->rutaaudio_limpa;
    if (empty($this->rutaimagen))
    {
        $this->rutaimagen = $this->nmgp_dados_form['rutaimagen'];
    }
    $this->nmgp_dados_form['rutaimagen'] = $this->rutaimagen;
    $this->nmgp_dados_form['rutaimagen_limpa'] = $this->rutaimagen_limpa;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_data($this->fecharechazada, $this->field_config['fecharechazada']['date_sep']) ; 
      nm_limpa_hora($this->fecharechazada_hora, $this->field_config['fecharechazada']['time_sep']) ; 
      nm_limpa_data($this->fechaenatencion, $this->field_config['fechaenatencion']['date_sep']) ; 
      nm_limpa_hora($this->fechaenatencion_hora, $this->field_config['fechaenatencion']['time_sep']) ; 
      nm_limpa_data($this->fechafinalizada, $this->field_config['fechafinalizada']['date_sep']) ; 
      nm_limpa_hora($this->fechafinalizada_hora, $this->field_config['fechafinalizada']['time_sep']) ; 
      nm_limpa_data($this->fecha, $this->field_config['fecha']['date_sep']) ; 
      nm_limpa_numero($this->idalerta, $this->field_config['idalerta']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~ei', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "idalerta")
      {
          nm_limpa_numero($this->idalerta, $this->field_config['idalerta']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ((!empty($this->fecharechazada) && 'null' != $this->fecharechazada) || (!empty($format_fields) && isset($format_fields['fecharechazada'])))
      {
          $nm_separa_data = strpos($this->field_config['fecharechazada']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['fecharechazada']['date_format'];
          $this->field_config['fecharechazada']['date_format'] = substr($this->field_config['fecharechazada']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->fecharechazada, " ") ; 
          $this->fecharechazada_hora = substr($this->fecharechazada, $separador + 1) ; 
          $this->fecharechazada = substr($this->fecharechazada, 0, $separador) ; 
          nm_volta_data($this->fecharechazada, $this->field_config['fecharechazada']['date_format']) ; 
          nmgp_Form_Datas($this->fecharechazada, $this->field_config['fecharechazada']['date_format'], $this->field_config['fecharechazada']['date_sep']) ;  
          $this->field_config['fecharechazada']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->fecharechazada_hora, $this->field_config['fecharechazada']['date_format']) ; 
          nmgp_Form_Hora($this->fecharechazada_hora, $this->field_config['fecharechazada']['date_format'], $this->field_config['fecharechazada']['time_sep']) ;  
          $this->field_config['fecharechazada']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->fecharechazada || '' == $this->fecharechazada)
      {
          $this->fecharechazada_hora = '';
          $this->fecharechazada = '';
      }
      if ((!empty($this->fechaenatencion) && 'null' != $this->fechaenatencion) || (!empty($format_fields) && isset($format_fields['fechaenatencion'])))
      {
          $nm_separa_data = strpos($this->field_config['fechaenatencion']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['fechaenatencion']['date_format'];
          $this->field_config['fechaenatencion']['date_format'] = substr($this->field_config['fechaenatencion']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->fechaenatencion, " ") ; 
          $this->fechaenatencion_hora = substr($this->fechaenatencion, $separador + 1) ; 
          $this->fechaenatencion = substr($this->fechaenatencion, 0, $separador) ; 
          nm_volta_data($this->fechaenatencion, $this->field_config['fechaenatencion']['date_format']) ; 
          nmgp_Form_Datas($this->fechaenatencion, $this->field_config['fechaenatencion']['date_format'], $this->field_config['fechaenatencion']['date_sep']) ;  
          $this->field_config['fechaenatencion']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->fechaenatencion_hora, $this->field_config['fechaenatencion']['date_format']) ; 
          nmgp_Form_Hora($this->fechaenatencion_hora, $this->field_config['fechaenatencion']['date_format'], $this->field_config['fechaenatencion']['time_sep']) ;  
          $this->field_config['fechaenatencion']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->fechaenatencion || '' == $this->fechaenatencion)
      {
          $this->fechaenatencion_hora = '';
          $this->fechaenatencion = '';
      }
      if ((!empty($this->fechafinalizada) && 'null' != $this->fechafinalizada) || (!empty($format_fields) && isset($format_fields['fechafinalizada'])))
      {
          $nm_separa_data = strpos($this->field_config['fechafinalizada']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['fechafinalizada']['date_format'];
          $this->field_config['fechafinalizada']['date_format'] = substr($this->field_config['fechafinalizada']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->fechafinalizada, " ") ; 
          $this->fechafinalizada_hora = substr($this->fechafinalizada, $separador + 1) ; 
          $this->fechafinalizada = substr($this->fechafinalizada, 0, $separador) ; 
          nm_volta_data($this->fechafinalizada, $this->field_config['fechafinalizada']['date_format']) ; 
          nmgp_Form_Datas($this->fechafinalizada, $this->field_config['fechafinalizada']['date_format'], $this->field_config['fechafinalizada']['date_sep']) ;  
          $this->field_config['fechafinalizada']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->fechafinalizada_hora, $this->field_config['fechafinalizada']['date_format']) ; 
          nmgp_Form_Hora($this->fechafinalizada_hora, $this->field_config['fechafinalizada']['date_format'], $this->field_config['fechafinalizada']['time_sep']) ;  
          $this->field_config['fechafinalizada']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->fechafinalizada || '' == $this->fechafinalizada)
      {
          $this->fechafinalizada_hora = '';
          $this->fechafinalizada = '';
      }
      if ((!empty($this->fecha) && 'null' != $this->fecha) || (!empty($format_fields) && isset($format_fields['fecha'])))
      {
          nm_volta_data($this->fecha, $this->field_config['fecha']['date_format']) ; 
          nmgp_Form_Datas($this->fecha, $this->field_config['fecha']['date_format'], $this->field_config['fecha']['date_sep']) ;  
      }
      elseif ('null' == $this->fecha || '' == $this->fecha)
      {
          $this->fecha = '';
      }
      if (!empty($this->idalerta) || (!empty($format_fields) && isset($format_fields['idalerta'])))
      {
          nmgp_Form_Num_Val($this->idalerta, $this->field_config['idalerta']['symbol_grp'], $this->field_config['idalerta']['symbol_dec'], "0", "S", "", "", "", "-", $this->field_config['idalerta']['symbol_fmt']) ; 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

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
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
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
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

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
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['fecharechazada']['date_format'];
      if ($this->fecharechazada != "")  
      { 
          $nm_separa_data = strpos($this->field_config['fecharechazada']['date_format'], ";") ;
          $this->field_config['fecharechazada']['date_format'] = substr($this->field_config['fecharechazada']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->fecharechazada, $this->field_config['fecharechazada']['date_format']) ; 
          if ('pdo_sqlsrv' == strtolower($this->Ini->nm_tpbanco))
          {
              $this->fecharechazada = str_replace('-', '', $this->fecharechazada);
          }
          $this->field_config['fecharechazada']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->fecharechazada_hora, $this->field_config['fecharechazada']['date_format']) ; 
          if ($this->fecharechazada_hora == "" )  
          { 
              $this->fecharechazada_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fecharechazada_hora = substr($this->fecharechazada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fecharechazada_hora = substr($this->fecharechazada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fecharechazada_hora = substr($this->fecharechazada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fecharechazada_hora = substr($this->fecharechazada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fecharechazada_hora = substr($this->fecharechazada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $this->fecharechazada_hora = substr($this->fecharechazada_hora, 0, -4);
          }
          if ($this->fecharechazada != "")  
          { 
              $this->fecharechazada .= " " . $this->fecharechazada_hora ; 
          }
      } 
      if ($this->fecharechazada == "" && $use_null)  
      { 
          $this->fecharechazada = "null" ; 
      } 
      $this->field_config['fecharechazada']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['fechaenatencion']['date_format'];
      if ($this->fechaenatencion != "")  
      { 
          $nm_separa_data = strpos($this->field_config['fechaenatencion']['date_format'], ";") ;
          $this->field_config['fechaenatencion']['date_format'] = substr($this->field_config['fechaenatencion']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->fechaenatencion, $this->field_config['fechaenatencion']['date_format']) ; 
          if ('pdo_sqlsrv' == strtolower($this->Ini->nm_tpbanco))
          {
              $this->fechaenatencion = str_replace('-', '', $this->fechaenatencion);
          }
          $this->field_config['fechaenatencion']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->fechaenatencion_hora, $this->field_config['fechaenatencion']['date_format']) ; 
          if ($this->fechaenatencion_hora == "" )  
          { 
              $this->fechaenatencion_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fechaenatencion_hora = substr($this->fechaenatencion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fechaenatencion_hora = substr($this->fechaenatencion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fechaenatencion_hora = substr($this->fechaenatencion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fechaenatencion_hora = substr($this->fechaenatencion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fechaenatencion_hora = substr($this->fechaenatencion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $this->fechaenatencion_hora = substr($this->fechaenatencion_hora, 0, -4);
          }
          if ($this->fechaenatencion != "")  
          { 
              $this->fechaenatencion .= " " . $this->fechaenatencion_hora ; 
          }
      } 
      if ($this->fechaenatencion == "" && $use_null)  
      { 
          $this->fechaenatencion = "null" ; 
      } 
      $this->field_config['fechaenatencion']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['fechafinalizada']['date_format'];
      if ($this->fechafinalizada != "")  
      { 
          $nm_separa_data = strpos($this->field_config['fechafinalizada']['date_format'], ";") ;
          $this->field_config['fechafinalizada']['date_format'] = substr($this->field_config['fechafinalizada']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->fechafinalizada, $this->field_config['fechafinalizada']['date_format']) ; 
          if ('pdo_sqlsrv' == strtolower($this->Ini->nm_tpbanco))
          {
              $this->fechafinalizada = str_replace('-', '', $this->fechafinalizada);
          }
          $this->field_config['fechafinalizada']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->fechafinalizada_hora, $this->field_config['fechafinalizada']['date_format']) ; 
          if ($this->fechafinalizada_hora == "" )  
          { 
              $this->fechafinalizada_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fechafinalizada_hora = substr($this->fechafinalizada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fechafinalizada_hora = substr($this->fechafinalizada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fechafinalizada_hora = substr($this->fechafinalizada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fechafinalizada_hora = substr($this->fechafinalizada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fechafinalizada_hora = substr($this->fechafinalizada_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $this->fechafinalizada_hora = substr($this->fechafinalizada_hora, 0, -4);
          }
          if ($this->fechafinalizada != "")  
          { 
              $this->fechafinalizada .= " " . $this->fechafinalizada_hora ; 
          }
      } 
      if ($this->fechafinalizada == "" && $use_null)  
      { 
          $this->fechafinalizada = "null" ; 
      } 
      $this->field_config['fechafinalizada']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['fecha']['date_format'];
      if ($this->fecha != "")  
      { 
          nm_conv_data($this->fecha, $this->field_config['fecha']['date_format']) ; 
          $this->fecha_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fecha_hora = substr($this->fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fecha_hora = substr($this->fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fecha_hora = substr($this->fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fecha_hora = substr($this->fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fecha_hora = substr($this->fecha_hora, 0, -4);
          }
          $this->fecha .= " " . $this->fecha_hora ; 
      } 
      if ($this->fecha == "" && $use_null)  
      { 
          $this->fecha = "null" ; 
      } 
      $this->field_config['fecha']['date_format'] = $guarda_format_hora;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
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
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_aprobada();
          $this->ajax_return_values_noaprobada();
          $this->ajax_return_values_escalar();
          $this->ajax_return_values_geocode();
          $this->ajax_return_values_audio();
          $this->ajax_return_values_motivo();
          $this->ajax_return_values_terminado();
          $this->ajax_return_values_categoria();
          $this->ajax_return_values_subcategoria();
          $this->ajax_return_values_fecharechazada();
          $this->ajax_return_values_fechaenatencion();
          $this->ajax_return_values_fechafinalizada();
          $this->ajax_return_values_fecha();
          $this->ajax_return_values_geo();
          $this->ajax_return_values_correo();
          $this->ajax_return_values_nombre();
          $this->ajax_return_values_celular();
          $this->ajax_return_values_direccion();
          $this->ajax_return_values_idalerta();
          $this->ajax_return_values_estado();
          $this->ajax_return_values_latitud();
          $this->ajax_return_values_longitud();
          $this->ajax_return_values_departamento();
          $this->ajax_return_values_municipio();
          $this->ajax_return_values_lugar();
          $this->ajax_return_values_canal();
          $this->ajax_return_values_origenalerta();
          $this->ajax_return_values_radicado();
          $this->ajax_return_values_alerta();
          $this->ajax_return_values_rutavideo();
          $this->ajax_return_values_rutaaudio();
          $this->ajax_return_values_rutaimagen();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['idalerta']['keyVal'] = form_alerta_pack_protect_string($this->nmgp_dados_form['idalerta']);
          }
   } // ajax_return_values

          //----- aprobada
   function ajax_return_values_aprobada($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("aprobada", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->aprobada);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['aprobada'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- noaprobada
   function ajax_return_values_noaprobada($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("noaprobada", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->noaprobada);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['noaprobada'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- escalar
   function ajax_return_values_escalar($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("escalar", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->escalar);
              $aLookup = array();
              $this->_tmp_lookup_escalar = $this->escalar;

$aLookup[] = array(form_alerta_pack_protect_string('Sin Atender') => form_alerta_pack_protect_string("Sin Atender"));
$aLookup[] = array(form_alerta_pack_protect_string('En Atencion') => form_alerta_pack_protect_string("En Atencion"));
$aLookup[] = array(form_alerta_pack_protect_string('Rechazada') => form_alerta_pack_protect_string("Rechazada"));
$aLookup[] = array(form_alerta_pack_protect_string('Finalizada') => form_alerta_pack_protect_string("Finalizada"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_escalar'][] = 'Sin Atender';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_escalar'][] = 'En Atencion';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_escalar'][] = 'Rechazada';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_escalar'][] = 'Finalizada';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"escalar\"";
          if (isset($this->NM_ajax_info['select_html']['escalar']) && !empty($this->NM_ajax_info['select_html']['escalar']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['escalar'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->escalar == $sValue)
                  {
                      $this->_tmp_lookup_escalar = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['escalar'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['escalar']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['escalar']['valList'][$i] = form_alerta_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['escalar']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['escalar']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['escalar']['labList'] = $aLabel;
          }
   }

          //----- geocode
   function ajax_return_values_geocode($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("geocode", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->geocode);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['geocode'] = array(
                       'row'    => '',
               'type'    => 'googlemaps',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- audio
   function ajax_return_values_audio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("audio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->audio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['audio'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- motivo
   function ajax_return_values_motivo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("motivo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->motivo);
              $aLookup = array();
              $this->_tmp_lookup_motivo = $this->motivo;

   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo'] = array(); 
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
              $aLookup[] = array(form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[0] . "" . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_motivo'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['motivo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['motivo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['motivo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['motivo']['labList'] = $aLabel;
          $val_output = isset($aLookup[0][form_alerta_pack_protect_string(NM_charset_to_utf8($this->motivo))]) ? $aLookup[0][form_alerta_pack_protect_string(NM_charset_to_utf8($this->motivo))] : "";
          $this->NM_ajax_info['fldList']['motivo_autocomp'] = array(
               'type'    => 'text',
               'valList' => array($val_output),
              );
          }
   }

          //----- terminado
   function ajax_return_values_terminado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("terminado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->terminado);
              $aLookup = array();
              $this->_tmp_lookup_terminado = $this->terminado;

$aLookup[] = array(form_alerta_pack_protect_string('1') => form_alerta_pack_protect_string("Ok"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_terminado'][] = '1';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['terminado']) && !empty($this->NM_ajax_info['select_html']['terminado']))
          {
              $sOptComp = $this->NM_ajax_info['select_html']['terminado'];
          }
          $this->NM_ajax_info['fldList']['terminado'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-terminado',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['terminado']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['terminado']['valList'][$i] = form_alerta_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['terminado']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['terminado']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['terminado']['labList'] = $aLabel;
          }
   }

          //----- categoria
   function ajax_return_values_categoria($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("categoria", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->categoria);
              $aLookup = array();
              $this->_tmp_lookup_categoria = $this->categoria;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_categoria']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_categoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_categoria']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_categoria'] = array(); 
}
$aLookup[] = array(form_alerta_pack_protect_string('Categoria') => form_alerta_pack_protect_string('Categoria'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_categoria'][] = 'Categoria';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_categoria'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"categoria\"";
          if (isset($this->NM_ajax_info['select_html']['categoria']) && !empty($this->NM_ajax_info['select_html']['categoria']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['categoria'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->categoria == $sValue)
                  {
                      $this->_tmp_lookup_categoria = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['categoria'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['categoria']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['categoria']['valList'][$i] = form_alerta_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['categoria']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['categoria']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['categoria']['labList'] = $aLabel;
          }
   }

          //----- subcategoria
   function ajax_return_values_subcategoria($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("subcategoria", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->subcategoria);
              $aLookup = array();
              $this->_tmp_lookup_subcategoria = $this->subcategoria;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_subcategoria']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_subcategoria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_subcategoria']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_subcategoria'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_subcategoria'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"subcategoria\"";
          if (isset($this->NM_ajax_info['select_html']['subcategoria']) && !empty($this->NM_ajax_info['select_html']['subcategoria']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['subcategoria'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->subcategoria == $sValue)
                  {
                      $this->_tmp_lookup_subcategoria = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['subcategoria'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['subcategoria']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['subcategoria']['valList'][$i] = form_alerta_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['subcategoria']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['subcategoria']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['subcategoria']['labList'] = $aLabel;
          }
   }

          //----- fecharechazada
   function ajax_return_values_fecharechazada($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fecharechazada", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fecharechazada);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fecharechazada'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->fecharechazada . ' ' . $this->fecharechazada_hora),
              );
          }
   }

          //----- fechaenatencion
   function ajax_return_values_fechaenatencion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fechaenatencion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fechaenatencion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fechaenatencion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->fechaenatencion . ' ' . $this->fechaenatencion_hora),
              );
          }
   }

          //----- fechafinalizada
   function ajax_return_values_fechafinalizada($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fechafinalizada", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fechafinalizada);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fechafinalizada'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->fechafinalizada . ' ' . $this->fechafinalizada_hora),
              );
          }
   }

          //----- fecha
   function ajax_return_values_fecha($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fecha", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fecha);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fecha'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- geo
   function ajax_return_values_geo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("geo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->geo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['geo'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- correo
   function ajax_return_values_correo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("correo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->correo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['correo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nombre
   function ajax_return_values_nombre($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombre", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombre);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombre'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- celular
   function ajax_return_values_celular($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("celular", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->celular);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['celular'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- direccion
   function ajax_return_values_direccion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("direccion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->direccion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['direccion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- idalerta
   function ajax_return_values_idalerta($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idalerta", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idalerta);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['idalerta'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- estado
   function ajax_return_values_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estado);
              $aLookup = array();
              $this->_tmp_lookup_estado = $this->estado;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[0])));
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_estado'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"estado\"";
          if (isset($this->NM_ajax_info['select_html']['estado']) && !empty($this->NM_ajax_info['select_html']['estado']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['estado'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->estado == $sValue)
                  {
                      $this->_tmp_lookup_estado = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['estado'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['estado']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['estado']['valList'][$i] = form_alerta_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estado']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estado']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estado']['labList'] = $aLabel;
          }
   }

          //----- latitud
   function ajax_return_values_latitud($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("latitud", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->latitud);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['latitud'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- longitud
   function ajax_return_values_longitud($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("longitud", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->longitud);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['longitud'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- departamento
   function ajax_return_values_departamento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("departamento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->departamento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['departamento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- municipio
   function ajax_return_values_municipio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("municipio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->municipio);
              $aLookup = array();
              $this->_tmp_lookup_municipio = $this->municipio;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_municipio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_municipio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_municipio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_municipio'] = array(); 
}
$aLookup[] = array(form_alerta_pack_protect_string('Municipio') => form_alerta_pack_protect_string('Municipio'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_municipio'][] = 'Municipio';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[0])));
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_municipio'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"municipio\"";
          if (isset($this->NM_ajax_info['select_html']['municipio']) && !empty($this->NM_ajax_info['select_html']['municipio']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['municipio'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->municipio == $sValue)
                  {
                      $this->_tmp_lookup_municipio = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['municipio'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['municipio']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['municipio']['valList'][$i] = form_alerta_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['municipio']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['municipio']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['municipio']['labList'] = $aLabel;
          }
   }

          //----- lugar
   function ajax_return_values_lugar($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("lugar", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->lugar);
              $aLookup = array();
              $this->_tmp_lookup_lugar = $this->lugar;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_lugar']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_lugar'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_lugar']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_lugar'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => form_alerta_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_lugar'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"lugar\"";
          if (isset($this->NM_ajax_info['select_html']['lugar']) && !empty($this->NM_ajax_info['select_html']['lugar']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['lugar'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->lugar == $sValue)
                  {
                      $this->_tmp_lookup_lugar = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['lugar'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['lugar']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['lugar']['valList'][$i] = form_alerta_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['lugar']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['lugar']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['lugar']['labList'] = $aLabel;
          }
   }

          //----- canal
   function ajax_return_values_canal($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("canal", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->canal);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['canal'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- origenalerta
   function ajax_return_values_origenalerta($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("origenalerta", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->origenalerta);
              $aLookup = array();
              $this->_tmp_lookup_origenalerta = $this->origenalerta;

$aLookup[] = array(form_alerta_pack_protect_string('Soma') => form_alerta_pack_protect_string("Soma"));
$aLookup[] = array(form_alerta_pack_protect_string('WhatsApp') => form_alerta_pack_protect_string("WhatsApp"));
$aLookup[] = array(form_alerta_pack_protect_string('OjoVoz') => form_alerta_pack_protect_string("OjoVoz"));
$aLookup[] = array(form_alerta_pack_protect_string('Verbal') => form_alerta_pack_protect_string("Verbal"));
$aLookup[] = array(form_alerta_pack_protect_string('Escrita') => form_alerta_pack_protect_string("Escrita"));
$aLookup[] = array(form_alerta_pack_protect_string('Correo') => form_alerta_pack_protect_string("Correo"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_origenalerta'][] = 'Soma';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_origenalerta'][] = 'WhatsApp';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_origenalerta'][] = 'OjoVoz';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_origenalerta'][] = 'Verbal';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_origenalerta'][] = 'Escrita';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['Lookup_origenalerta'][] = 'Correo';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"origenalerta\"";
          if (isset($this->NM_ajax_info['select_html']['origenalerta']) && !empty($this->NM_ajax_info['select_html']['origenalerta']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['origenalerta'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->origenalerta == $sValue)
                  {
                      $this->_tmp_lookup_origenalerta = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['origenalerta'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['origenalerta']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['origenalerta']['valList'][$i] = form_alerta_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['origenalerta']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['origenalerta']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['origenalerta']['labList'] = $aLabel;
          }
   }

          //----- radicado
   function ajax_return_values_radicado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("radicado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->radicado);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['radicado'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- alerta
   function ajax_return_values_alerta($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("alerta", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->alerta);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['alerta'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- rutavideo
   function ajax_return_values_rutavideo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rutavideo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rutavideo);
              $aLookup = array();
              $sTmpExtension = pathinfo($this->rutavideo, PATHINFO_EXTENSION);
              $sTmpExtension = null == $sTmpExtension ? '' : '.' . $sTmpExtension;
              $sTmpFile      = 'sc_rutavideo_' . md5(mt_rand(1, 1000) . microtime() . session_id()) . $sTmpExtension;
              if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames'] = array();
              }
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames'][$sTmpFile] = $this->rutavideo;
              $tmp_file_rutavideo = trim(NM_charset_to_utf8($this->rutavideo));
              $tmp_icon_rutavideo = '';
              if ('' != $tmp_file_rutavideo)
              {
                  $tmp_icon_rutavideo = $this->gera_icone($tmp_file_rutavideo);
              }
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['rutavideo'] = array(
                       'row'    => '',
               'type'    => 'documento',
               'valList' => array($sTmpValue),
               'docLink' => "<a href=\"javascript:nm_mostra_doc('0', '" . $sTmpFile . "', 'form_alerta')\">" . $tmp_file_rutavideo . "</a>",
               'docIcon' => $tmp_icon_rutavideo,
              );
              if ('navigate_form' == $this->NM_ajax_opcao)
              {
                  $this->NM_ajax_info['fldList']['rutavideo_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          }
   }

          //----- rutaaudio
   function ajax_return_values_rutaaudio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rutaaudio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rutaaudio);
              $aLookup = array();
              $sTmpExtension = pathinfo($this->rutaaudio, PATHINFO_EXTENSION);
              $sTmpExtension = null == $sTmpExtension ? '' : '.' . $sTmpExtension;
              $sTmpFile      = 'sc_rutaaudio_' . md5(mt_rand(1, 1000) . microtime() . session_id()) . $sTmpExtension;
              if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames'] = array();
              }
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames'][$sTmpFile] = $this->rutaaudio;
              $tmp_file_rutaaudio = trim(NM_charset_to_utf8($this->rutaaudio));
              $tmp_icon_rutaaudio = '';
              if ('' != $tmp_file_rutaaudio)
              {
                  $tmp_icon_rutaaudio = $this->gera_icone($tmp_file_rutaaudio);
              }
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['rutaaudio'] = array(
                       'row'    => '',
               'type'    => 'documento',
               'valList' => array($sTmpValue),
               'docLink' => "<a href=\"javascript:nm_mostra_doc('1', '" . $sTmpFile . "', 'form_alerta')\">" . $tmp_file_rutaaudio . "</a>",
               'docIcon' => $tmp_icon_rutaaudio,
              );
              if ('navigate_form' == $this->NM_ajax_opcao)
              {
                  $this->NM_ajax_info['fldList']['rutaaudio_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          }
   }

          //----- rutaimagen
   function ajax_return_values_rutaimagen($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("rutaimagen", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->rutaimagen);
              $aLookup = array();
   $out_rutaimagen = '';
   $out1_rutaimagen = '';
   if ($this->rutaimagen != "" && $this->rutaimagen != "none")   
   { 
       $path_rutaimagen = $this->Ini->root . $this->Ini->path_imagens . "" . "/" . $this->rutaimagen;
       $md5_rutaimagen  = md5("" . $this->rutaimagen);
       if (is_file($path_rutaimagen))  
       { 
           $NM_ler_img = true;
           $out_rutaimagen = $this->Ini->path_imag_temp . "/sc_rutaimagen_" . $md5_rutaimagen . ".gif" ;  
           $out1_rutaimagen = $out_rutaimagen; 
           if (is_file($this->Ini->root . $out_rutaimagen))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_rutaimagen) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_rutaimagen = fopen($path_rutaimagen, "r") ; 
               $reg_rutaimagen = fread($tmp_rutaimagen, filesize($path_rutaimagen)) ; 
               fclose($tmp_rutaimagen) ;  
               $arq_rutaimagen = fopen($this->Ini->root . $out_rutaimagen, "w") ;  
               fwrite($arq_rutaimagen, $reg_rutaimagen) ;  
               fclose($arq_rutaimagen) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_rutaimagen);
           $this->nmgp_return_img['rutaimagen'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['rutaimagen'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $md5_rutaimagen  = md5("" . $this->rutaimagen);
           $out_rutaimagen = $this->Ini->path_imag_temp . "/sc_rutaimagen_200200" . $md5_rutaimagen . ".gif" ;  
           if (is_file($this->Ini->root . $out_rutaimagen))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_rutaimagen) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_rutaimagen);
                   $sc_obj_img->setWidth(200);
                   $sc_obj_img->setHeight(200);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_rutaimagen);
               } 
               else 
               { 
                   $out_rutaimagen = $out1_rutaimagen;
               } 
           } 
       } 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['rutaimagen'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($sTmpValue),
               'imgFile' => $out_rutaimagen,
               'imgOrig' => $out1_rutaimagen,
               'keepImg' => $sKeepImage,
               'hideName' => 'S',
              );
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
       $this->NM_ajax_info['btnVars']['var_btn_responsables_id'] = $this->nmgp_dados_form['id'];
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      if ($this->sc_evento == "novo" || $this->sc_evento == "incluir" || ($this->nmgp_opcao == "nada" && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opc_ant']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opc_ant'] == "novo") || (isset($GLOBALS['erro_incl']) && 1 == $GLOBALS['erro_incl']))
      {
          if (!isset($this->nmgp_cmp_hidden["idalerta"]))
          {
              $this->nmgp_cmp_hidden["idalerta"] = "off"; $this->NM_ajax_info['fieldDisplay']['idalerta'] = 'off';
          }
          if (!isset($this->nmgp_cmp_hidden["escalar"]))
          {
              $this->nmgp_cmp_hidden["escalar"] = "off"; $this->NM_ajax_info['fieldDisplay']['escalar'] = 'off';
          }
          if (!isset($this->nmgp_cmp_hidden["aprobada"]))
          {
              $this->nmgp_cmp_hidden["aprobada"] = "off"; $this->NM_ajax_info['fieldDisplay']['aprobada'] = 'off';
          }
          if (!isset($this->nmgp_cmp_hidden["noaprobada"]))
          {
              $this->nmgp_cmp_hidden["noaprobada"] = "off"; $this->NM_ajax_info['fieldDisplay']['noaprobada'] = 'off';
          }
      }
      else
      {
      }
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_audio = $this->audio;
    $original_escalar = $this->escalar;
    $original_noaprobada = $this->noaprobada;
    $original_rutaaudio = $this->rutaaudio;
}
       

if ($this->escalar  == 'En Atencion')     
{
	$this->nmgp_cmp_hidden["aprobada"] = "on"; $this->NM_ajax_info['fieldDisplay']['aprobada'] = 'on';
	$this->nmgp_cmp_hidden["noaprobada"] = "off"; $this->NM_ajax_info['fieldDisplay']['noaprobada'] = 'off';
}
else      
{
	$this->nmgp_cmp_hidden["aprobada"] = "off"; $this->NM_ajax_info['fieldDisplay']['aprobada'] = 'off';
	$this->nmgp_cmp_hidden["noaprobada"] = "on"; $this->NM_ajax_info['fieldDisplay']['noaprobada'] = 'on';
}

$this->audio ="<div><audio controls class='audiomp3'>
<source src='http://stiga.narino.gov.co/pae/_lib/file/doc/".$this->rutaaudio ."' type='audio/mpeg' />
</audio></div>";
?>	
   

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap2/bootstrap-switch.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.js"></script>
<script>

</script>


<?php
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_audio != $this->audio || (isset($bFlagRead_audio) && $bFlagRead_audio)))
    {
        $this->ajax_return_values_audio(true);
    }
    if (($original_escalar != $this->escalar || (isset($bFlagRead_escalar) && $bFlagRead_escalar)))
    {
        $this->ajax_return_values_escalar(true);
    }
    if (($original_noaprobada != $this->noaprobada || (isset($bFlagRead_noaprobada) && $bFlagRead_noaprobada)))
    {
        $this->ajax_return_values_noaprobada(true);
    }
    if (($original_rutaaudio != $this->rutaaudio || (isset($bFlagRead_rutaaudio) && $bFlagRead_rutaaudio)))
    {
        $this->ajax_return_values_rutaaudio(true);
    }
}
$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'off'; 
      }
      if (empty($this->fecharechazada))
      {
          $this->fecharechazada_hora = $this->fecharechazada;
      }
      if (empty($this->fechaenatencion))
      {
          $this->fechaenatencion_hora = $this->fechaenatencion;
      }
      if (empty($this->fechafinalizada))
      {
          $this->fechafinalizada_hora = $this->fechafinalizada;
      }
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros

   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
    if ("incluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'on';
       

$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'off'; 
    }
    if ("alterar" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_alerta = $this->alerta;
    $original_correo = $this->correo;
    $original_escalar = $this->escalar;
    $original_fechaenatencion = $this->fechaenatencion;
    $original_fechafinalizada = $this->fechafinalizada;
    $original_fecharechazada = $this->fecharechazada;
    $original_idalerta = $this->idalerta;
    $original_lugar = $this->lugar;
    $original_municipio = $this->municipio;
    $original_rutaaudio = $this->rutaaudio;
    $original_rutaimagen = $this->rutaimagen;
}
       $fechaactual = getdate();

$fecha1= $fechaactual['year']."-".$fechaactual['mon']."-".$fechaactual['mday']." ".$fechaactual['hours'].":".$fechaactual['minutes'].":".$fechaactual['seconds'];
$escalar=$this->escalar ;
switch ($this->escalar) {
    case 'Rechazada':
      $update_fields="fecharechazada='$fecha1'" ;
	$this->fecharechazada =$fecha1;
$mail_smtp_server    = 'smtp.gmail.com';        
$mail_smtp_user      = 'danielalvarez@narino.gov.co';                   
$mail_smtp_pass      = 'aldebaran123';                
$mail_from           = 'ganapae@narino.gov.co';          



$municipio=$this->municipio ;
	$lugar=$this->lugar ;
		$alerta=$this->alerta ;
		$rutaaudio=$this->rutaaudio ;
		$rutaimagen=$this->rutaimagen ;
	
	
$mail_to             = $this->correo ;         
$mail_subject        = 'ALERTA RECHAZADA ';            
$mail_message        = "<p>Cordial Saludo </p> </br><p>Se informa que su alerta generada no fue escalada por los siguiente motivos</p></br>
<p>Municipio:$municipio</p></br><p>Lugar:$lugar</p></br><p>Observaciones:$alerta</br></p></br><p>Gracias por su atención y estaremos en continuo contacto con ud.</p>"; 
$mail_format         = 'H';                       
$mail_copies         = '';                        
$mail_tp_copies      = '';                        
$mail_port           = '465';                     
$mail_tp_connection  = 'S';                       
$adjunto="http://stiga.narino.gov.co/pae/_lib/file/doc/$this->rutaaudio;http://stiga.narino.gov.co/pae/_lib/file/img/$rutaimagen";
    include_once($this->Ini->path_third . "/swift/swift_required.php");
    $sc_mail_port     = "$mail_port";
    $sc_mail_tp_port  = "$mail_tp_connection";
    $sc_mail_tp_mens  = "$mail_format";
    $sc_mail_tp_copy  = "$mail_tp_copies";
    $this->sc_mail_count = 0;
    $this->sc_mail_erro  = "";
    $this->sc_mail_ok    = true;
    if ($sc_mail_tp_port == "S" || $sc_mail_tp_port == "Y")
    {
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 465;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'ssl');
    }
    elseif ($sc_mail_tp_port == "T")
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 587;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'tls');
    }
    else
    {
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 25;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port);
    }
    $Con_Mail->setUsername($mail_smtp_user);
    $Con_Mail->setpassword($mail_smtp_pass);
    $Send_Mail = Swift_Mailer::newInstance($Con_Mail);
    if ($sc_mail_tp_mens == "H")
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject);
        $Mens_Mail->setBody(SC_Mail_Image($mail_message, $Mens_Mail))->setContentType("text/html");
    }
    else
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject)->setBody($mail_message);
    }
    if (!empty($_SESSION['scriptcase']['charset']))
    {
        $Mens_Mail->setCharset($_SESSION['scriptcase']['charset']);
    }
    $Temp_mail = $adjunto;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $adjunto);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Mens_Mail->attach(Swift_Attachment::fromPath($NM_dest));
        }
    }
    $Temp_mail = $mail_to;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_to);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            $Mens_Mail->addTo($Arr_addr[0], $Arr_addr[1]);
        }
    }
    $Temp_mail = $mail_copies;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_copies);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            if (strtoupper(substr($sc_mail_tp_copy, 0, 2)) == "CC")
            {
                $Mens_Mail->addCc($Arr_addr[0], $Arr_addr[1]);
            }
            else
            {
                $Mens_Mail->addBcc($Arr_addr[0], $Arr_addr[1]);
            }
        }
    }
    $Arr_addr = SC_Mail_Address($mail_from);
    $this->sc_mail_count = $Send_Mail->send($Mens_Mail->setFrom($Arr_addr[0], $Arr_addr[1]), $Err_mail);
    if (!empty($Err_mail))
    {
        $this->sc_mail_erro = $Err_mail;
        $this->sc_mail_ok   = false;
    }
;


if ($this->sc_mail_ok )
{
echo "Enviados $mail_message e-mail com sucesso !!";
}
else
{

 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $this->sc_mail_erro ;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_alerta' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $this->sc_mail_erro ;
 }
;
}

	
	
        break;
    case 'En Atencion':
         $update_fields="fechaenatencion='$fecha1'" ;
	$this->fechaenatencion =$fecha1;
        break;
    case 'Finalizada':
        $update_fields="fechafinalizada='$fecha1'" ;
$this->reporte($this->idalerta );
	$this->fechafinalizada =$fecha1;
		break;
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_alerta != $this->alerta || (isset($bFlagRead_alerta) && $bFlagRead_alerta)))
    {
        $this->ajax_return_values_alerta(true);
    }
    if (($original_correo != $this->correo || (isset($bFlagRead_correo) && $bFlagRead_correo)))
    {
        $this->ajax_return_values_correo(true);
    }
    if (($original_escalar != $this->escalar || (isset($bFlagRead_escalar) && $bFlagRead_escalar)))
    {
        $this->ajax_return_values_escalar(true);
    }
    if (($original_fechaenatencion != $this->fechaenatencion || (isset($bFlagRead_fechaenatencion) && $bFlagRead_fechaenatencion)))
    {
        $this->ajax_return_values_fechaenatencion(true);
    }
    if (($original_fechafinalizada != $this->fechafinalizada || (isset($bFlagRead_fechafinalizada) && $bFlagRead_fechafinalizada)))
    {
        $this->ajax_return_values_fechafinalizada(true);
    }
    if (($original_fecharechazada != $this->fecharechazada || (isset($bFlagRead_fecharechazada) && $bFlagRead_fecharechazada)))
    {
        $this->ajax_return_values_fecharechazada(true);
    }
    if (($original_idalerta != $this->idalerta || (isset($bFlagRead_idalerta) && $bFlagRead_idalerta)))
    {
        $this->ajax_return_values_idalerta(true);
    }
    if (($original_lugar != $this->lugar || (isset($bFlagRead_lugar) && $bFlagRead_lugar)))
    {
        $this->ajax_return_values_lugar(true);
    }
    if (($original_municipio != $this->municipio || (isset($bFlagRead_municipio) && $bFlagRead_municipio)))
    {
        $this->ajax_return_values_municipio(true);
    }
    if (($original_rutaaudio != $this->rutaaudio || (isset($bFlagRead_rutaaudio) && $bFlagRead_rutaaudio)))
    {
        $this->ajax_return_values_rutaaudio(true);
    }
    if (($original_rutaimagen != $this->rutaimagen || (isset($bFlagRead_rutaimagen) && $bFlagRead_rutaimagen)))
    {
        $this->ajax_return_values_rutaimagen(true);
    }
}
$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $this->nmgp_opcao ; 
          if ($this->nmgp_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          else
          { 
              $this->sc_evento = ""; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->NM_rollback_db(); 
          $this->Campos_Mens_erro = ""; 
      }
      $SC_tem_cmp_update = true; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Db->BeginTrans(); 
          $this->Ini->sc_tem_trans_banco = true; 
      } 
      if (('alterar' == $this->nmgp_opcao || 'igual' == $this->nmgp_opcao) && empty($this->idalerta)){$this->idalerta = "" . $_SESSION['idalerta'] . ""; $this->sc_force_zero[] = "idalerta";}  
      $NM_val_form['aprobada'] = $this->aprobada;
      $NM_val_form['noaprobada'] = $this->noaprobada;
      $NM_val_form['escalar'] = $this->escalar;
      $NM_val_form['geocode'] = $this->geocode;
      $NM_val_form['audio'] = $this->audio;
      $NM_val_form['motivo'] = $this->motivo;
      $NM_val_form['terminado'] = $this->terminado;
      $NM_val_form['categoria'] = $this->categoria;
      $NM_val_form['subcategoria'] = $this->subcategoria;
      $NM_val_form['fecharechazada'] = $this->fecharechazada;
      $NM_val_form['fechaenatencion'] = $this->fechaenatencion;
      $NM_val_form['fechafinalizada'] = $this->fechafinalizada;
      $NM_val_form['fecha'] = $this->fecha;
      $NM_val_form['geo'] = $this->geo;
      $NM_val_form['correo'] = $this->correo;
      $NM_val_form['nombre'] = $this->nombre;
      $NM_val_form['celular'] = $this->celular;
      $NM_val_form['direccion'] = $this->direccion;
      $NM_val_form['idalerta'] = $this->idalerta;
      $NM_val_form['estado'] = $this->estado;
      $NM_val_form['latitud'] = $this->latitud;
      $NM_val_form['longitud'] = $this->longitud;
      $NM_val_form['departamento'] = $this->departamento;
      $NM_val_form['municipio'] = $this->municipio;
      $NM_val_form['lugar'] = $this->lugar;
      $NM_val_form['canal'] = $this->canal;
      $NM_val_form['origenalerta'] = $this->origenalerta;
      $NM_val_form['radicado'] = $this->radicado;
      $NM_val_form['alerta'] = $this->alerta;
      $NM_val_form['rutavideo'] = $this->rutavideo;
      $NM_val_form['rutaaudio'] = $this->rutaaudio;
      $NM_val_form['rutaimagen'] = $this->rutaimagen;
      if ($this->idalerta == "")  
      { 
          $this->idalerta = 0;
      } 
      if ($this->terminado == "")  
      { 
          $this->terminado = 0;
          $this->sc_force_zero[] = 'terminado';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->subcategoria_before_qstr = $this->subcategoria;
          $this->subcategoria = substr($this->Db->qstr($this->subcategoria), 1, -1); 
          if ($this->subcategoria == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->subcategoria = "null"; 
              $NM_val_null[] = "subcategoria";
          } 
          $this->categoria_before_qstr = $this->categoria;
          $this->categoria = substr($this->Db->qstr($this->categoria), 1, -1); 
          if ($this->categoria == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->categoria = "null"; 
              $NM_val_null[] = "categoria";
          } 
          $this->latitud_before_qstr = $this->latitud;
          $this->latitud = substr($this->Db->qstr($this->latitud), 1, -1); 
          if ($this->latitud == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->latitud = "null"; 
              $NM_val_null[] = "latitud";
          } 
          $this->longitud_before_qstr = $this->longitud;
          $this->longitud = substr($this->Db->qstr($this->longitud), 1, -1); 
          if ($this->longitud == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->longitud = "null"; 
              $NM_val_null[] = "longitud";
          } 
          $this->estado_before_qstr = $this->estado;
          $this->estado = substr($this->Db->qstr($this->estado), 1, -1); 
          if ($this->estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estado = "null"; 
              $NM_val_null[] = "estado";
          } 
          $this->geo_before_qstr = $this->geo;
          $this->geo = substr($this->Db->qstr($this->geo), 1, -1); 
          if ($this->geo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->geo = "null"; 
              $NM_val_null[] = "geo";
          } 
          $this->correo_before_qstr = $this->correo;
          $this->correo = substr($this->Db->qstr($this->correo), 1, -1); 
          if ($this->correo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->correo = "null"; 
              $NM_val_null[] = "correo";
          } 
          $this->nombre_before_qstr = $this->nombre;
          $this->nombre = substr($this->Db->qstr($this->nombre), 1, -1); 
          if ($this->nombre == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nombre = "null"; 
              $NM_val_null[] = "nombre";
          } 
          $this->celular_before_qstr = $this->celular;
          $this->celular = substr($this->Db->qstr($this->celular), 1, -1); 
          if ($this->celular == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->celular = "null"; 
              $NM_val_null[] = "celular";
          } 
          $this->direccion_before_qstr = $this->direccion;
          $this->direccion = substr($this->Db->qstr($this->direccion), 1, -1); 
          if ($this->direccion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->direccion = "null"; 
              $NM_val_null[] = "direccion";
          } 
          $this->alerta_before_qstr = $this->alerta;
          $this->alerta = substr($this->Db->qstr($this->alerta), 1, -1); 
          if ($this->alerta == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->alerta = "null"; 
              $NM_val_null[] = "alerta";
          } 
          $this->rutavideo_original_filename = $this->rutavideo; 
          $this->rutavideo_before_qstr = $this->rutavideo;
          $this->rutavideo = substr($this->Db->qstr($this->rutavideo), 1, -1); 
          if ($this->rutavideo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rutavideo = "null"; 
              $NM_val_null[] = "rutavideo";
          } 
          $this->rutaaudio_original_filename = $this->rutaaudio; 
          $this->rutaaudio_before_qstr = $this->rutaaudio;
          $this->rutaaudio = substr($this->Db->qstr($this->rutaaudio), 1, -1); 
          if ($this->rutaaudio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rutaaudio = "null"; 
              $NM_val_null[] = "rutaaudio";
          } 
          $this->rutaimagen_before_qstr = $this->rutaimagen;
          $this->rutaimagen = substr($this->Db->qstr($this->rutaimagen), 1, -1); 
          if ($this->rutaimagen == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->rutaimagen = "null"; 
              $NM_val_null[] = "rutaimagen";
          } 
          $this->canal_before_qstr = $this->canal;
          $this->canal = substr($this->Db->qstr($this->canal), 1, -1); 
          if ($this->canal == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->canal = "null"; 
              $NM_val_null[] = "canal";
          } 
          $this->radicado_before_qstr = $this->radicado;
          $this->radicado = substr($this->Db->qstr($this->radicado), 1, -1); 
          if ($this->radicado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->radicado = "null"; 
              $NM_val_null[] = "radicado";
          } 
          $this->origenalerta_before_qstr = $this->origenalerta;
          $this->origenalerta = substr($this->Db->qstr($this->origenalerta), 1, -1); 
          if ($this->origenalerta == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->origenalerta = "null"; 
              $NM_val_null[] = "origenalerta";
          } 
          $this->departamento_before_qstr = $this->departamento;
          $this->departamento = substr($this->Db->qstr($this->departamento), 1, -1); 
          if ($this->departamento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->departamento = "null"; 
              $NM_val_null[] = "departamento";
          } 
          $this->municipio_before_qstr = $this->municipio;
          $this->municipio = substr($this->Db->qstr($this->municipio), 1, -1); 
          if ($this->municipio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->municipio = "null"; 
              $NM_val_null[] = "municipio";
          } 
          $this->lugar_before_qstr = $this->lugar;
          $this->lugar = substr($this->Db->qstr($this->lugar), 1, -1); 
          if ($this->lugar == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->lugar = "null"; 
              $NM_val_null[] = "lugar";
          } 
          if ($this->fecha == "")  
          { 
              $this->fecha = "null"; 
              $NM_val_null[] = "fecha";
          } 
          $this->escalar_before_qstr = $this->escalar;
          $this->escalar = substr($this->Db->qstr($this->escalar), 1, -1); 
          if ($this->escalar == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->escalar = "null"; 
              $NM_val_null[] = "escalar";
          } 
          $this->motivo_before_qstr = $this->motivo;
          $this->motivo = substr($this->Db->qstr($this->motivo), 1, -1); 
          if ($this->motivo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->motivo = "null"; 
              $NM_val_null[] = "motivo";
          } 
          if ($this->fecharechazada == "")  
          { 
              $this->fecharechazada = "null"; 
              $NM_val_null[] = "fecharechazada";
          } 
          if ($this->fechaenatencion == "")  
          { 
              $this->fechaenatencion = "null"; 
              $NM_val_null[] = "fechaenatencion";
          } 
          if ($this->fechafinalizada == "")  
          { 
              $this->fechafinalizada = "null"; 
              $NM_val_null[] = "fechafinalizada";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_alerta_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET subcategoria = '$this->subcategoria', categoria = '$this->categoria', latitud = '$this->latitud', longitud = '$this->longitud', estado = '$this->estado', geo = '$this->geo', correo = '$this->correo', nombre = '$this->nombre', celular = '$this->celular', direccion = '$this->direccion', alerta = '$this->alerta', canal = '$this->canal', radicado = '$this->radicado', origenalerta = '$this->origenalerta', departamento = '$this->departamento', municipio = '$this->municipio', lugar = '$this->lugar', fecha = '$this->fecha', escalar = '$this->escalar', motivo = '$this->motivo', terminado = $this->terminado, fecharechazada = '$this->fecharechazada', fechaenatencion = '$this->fechaenatencion', fechafinalizada = '$this->fechafinalizada'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET subcategoria = '$this->subcategoria', categoria = '$this->categoria', latitud = '$this->latitud', longitud = '$this->longitud', estado = '$this->estado', geo = '$this->geo', correo = '$this->correo', nombre = '$this->nombre', celular = '$this->celular', direccion = '$this->direccion', alerta = '$this->alerta', canal = '$this->canal', radicado = '$this->radicado', origenalerta = '$this->origenalerta', departamento = '$this->departamento', municipio = '$this->municipio', lugar = '$this->lugar', fecha = '$this->fecha', escalar = '$this->escalar', motivo = '$this->motivo', terminado = $this->terminado, fecharechazada = '$this->fecharechazada', fechaenatencion = '$this->fechaenatencion', fechafinalizada = '$this->fechafinalizada'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET subcategoria = '$this->subcategoria', categoria = '$this->categoria', latitud = '$this->latitud', longitud = '$this->longitud', estado = '$this->estado', geo = '$this->geo', correo = '$this->correo', nombre = '$this->nombre', celular = '$this->celular', direccion = '$this->direccion', alerta = '$this->alerta', canal = '$this->canal', radicado = '$this->radicado', origenalerta = '$this->origenalerta', departamento = '$this->departamento', municipio = '$this->municipio', lugar = '$this->lugar', fecha = TO_DATE('$this->fecha', 'yyyy-mm-dd hh24:mi:ss'), escalar = '$this->escalar', motivo = '$this->motivo', terminado = $this->terminado, fecharechazada = TO_DATE('$this->fecharechazada', 'yyyy-mm-dd hh24:mi:ss'), fechaenatencion = TO_DATE('$this->fechaenatencion', 'yyyy-mm-dd hh24:mi:ss'), fechafinalizada = TO_DATE('$this->fechafinalizada', 'yyyy-mm-dd hh24:mi:ss')";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET subcategoria = '$this->subcategoria', categoria = '$this->categoria', latitud = '$this->latitud', longitud = '$this->longitud', estado = '$this->estado', geo = '$this->geo', correo = '$this->correo', nombre = '$this->nombre', celular = '$this->celular', direccion = '$this->direccion', alerta = '$this->alerta', canal = '$this->canal', radicado = '$this->radicado', origenalerta = '$this->origenalerta', departamento = '$this->departamento', municipio = '$this->municipio', lugar = '$this->lugar', fecha = '$this->fecha', escalar = '$this->escalar', motivo = '$this->motivo', terminado = $this->terminado, fecharechazada = '$this->fecharechazada', fechaenatencion = '$this->fechaenatencion', fechafinalizada = '$this->fechafinalizada'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET subcategoria = '$this->subcategoria', categoria = '$this->categoria', latitud = '$this->latitud', longitud = '$this->longitud', estado = '$this->estado', geo = '$this->geo', correo = '$this->correo', nombre = '$this->nombre', celular = '$this->celular', direccion = '$this->direccion', alerta = '$this->alerta', canal = '$this->canal', radicado = '$this->radicado', origenalerta = '$this->origenalerta', departamento = '$this->departamento', municipio = '$this->municipio', lugar = '$this->lugar', fecha = '$this->fecha', escalar = '$this->escalar', motivo = '$this->motivo', terminado = $this->terminado, fecharechazada = '$this->fecharechazada', fechaenatencion = '$this->fechaenatencion', fechafinalizada = '$this->fechafinalizada'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET subcategoria = '$this->subcategoria', categoria = '$this->categoria', latitud = '$this->latitud', longitud = '$this->longitud', estado = '$this->estado', geo = '$this->geo', correo = '$this->correo', nombre = '$this->nombre', celular = '$this->celular', direccion = '$this->direccion', alerta = '$this->alerta', canal = '$this->canal', radicado = '$this->radicado', origenalerta = '$this->origenalerta', departamento = '$this->departamento', municipio = '$this->municipio', lugar = '$this->lugar', fecha = '$this->fecha', escalar = '$this->escalar', motivo = '$this->motivo', terminado = $this->terminado, fecharechazada = '$this->fecharechazada', fechaenatencion = '$this->fechaenatencion', fechafinalizada = '$this->fechafinalizada'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET subcategoria = '$this->subcategoria', categoria = '$this->categoria', latitud = '$this->latitud', longitud = '$this->longitud', estado = '$this->estado', geo = '$this->geo', correo = '$this->correo', nombre = '$this->nombre', celular = '$this->celular', direccion = '$this->direccion', alerta = '$this->alerta', canal = '$this->canal', radicado = '$this->radicado', origenalerta = '$this->origenalerta', departamento = '$this->departamento', municipio = '$this->municipio', lugar = '$this->lugar', fecha = '$this->fecha', escalar = '$this->escalar', motivo = '$this->motivo', terminado = $this->terminado, fecharechazada = '$this->fecharechazada', fechaenatencion = '$this->fechaenatencion', fechafinalizada = '$this->fechafinalizada'";  
              } 
              $aDoNotUpdate = array();
              $temp_cmd_sql = "";
              if ($this->rutavideo_limpa == "S") 
              { 
                  if ($this->rutavideo != "null") 
                  { 
                      $this->rutavideo = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", rutavideo = '" . $this->rutavideo . "'"; 
                      $comando_oracle .= ", rutavideo = '" . $this->rutavideo . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " rutavideo = '" . $this->rutavideo . "'"; 
                     $comando_oracle .= " rutavideo = '" . $this->rutavideo . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->rutavideo = "";
              } 
              else 
              { 
                  if ($this->rutavideo != "none" && $this->rutavideo != "") 
                  { 
                      $NM_conteudo =  $this->rutavideo;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", rutavideo = '$NM_conteudo'" ; 
                          $comando_oracle .= ", rutavideo = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " rutavideo = '$NM_conteudo'" ; 
                          $comando_oracle .= " rutavideo = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "rutavideo";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              $temp_cmd_sql = "";
              if ($this->rutaaudio_limpa == "S") 
              { 
                  if ($this->rutaaudio != "null") 
                  { 
                      $this->rutaaudio = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", rutaaudio = '" . $this->rutaaudio . "'"; 
                      $comando_oracle .= ", rutaaudio = '" . $this->rutaaudio . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " rutaaudio = '" . $this->rutaaudio . "'"; 
                     $comando_oracle .= " rutaaudio = '" . $this->rutaaudio . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->rutaaudio = "";
              } 
              else 
              { 
                  if ($this->rutaaudio != "none" && $this->rutaaudio != "") 
                  { 
                      $NM_conteudo =  $this->rutaaudio;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", rutaaudio = '$NM_conteudo'" ; 
                          $comando_oracle .= ", rutaaudio = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " rutaaudio = '$NM_conteudo'" ; 
                          $comando_oracle .= " rutaaudio = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "rutaaudio";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              $temp_cmd_sql = "";
              if ($this->rutaimagen_limpa == "S") 
              { 
                  if ($this->rutaimagen != "null") 
                  { 
                      $this->rutaimagen = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", rutaimagen = '" . $this->rutaimagen . "'"; 
                      $comando_oracle .= ", rutaimagen = '" . $this->rutaimagen . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " rutaimagen = '" . $this->rutaimagen . "'"; 
                     $comando_oracle .= " rutaimagen = '" . $this->rutaimagen . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->rutaimagen = "";
              } 
              else 
              { 
                  if ($this->rutaimagen != "none" && $this->rutaimagen != "") 
                  { 
                      $NM_conteudo =  $this->rutaimagen;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", rutaimagen = '$NM_conteudo'" ; 
                          $comando_oracle .= ", rutaimagen = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " rutaimagen = '$NM_conteudo'" ; 
                          $comando_oracle .= " rutaimagen = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "rutaimagen";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE idalerta = $this->idalerta ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE idalerta = $this->idalerta ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE idalerta = $this->idalerta ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE idalerta = $this->idalerta ";  
              }  
              else  
              {
                  $comando .= " WHERE idalerta = $this->idalerta ";  
              }  
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              if ($SC_ex_update || $SC_tem_cmp_update)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg(), true); 
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $this->Db->ErrorMsg();  
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_alerta_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              if ($this->rutavideo_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['rutavideo_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->rutaaudio_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['rutaaudio_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->rutaimagen_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['rutaimagen_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          $this->subcategoria = $this->subcategoria_before_qstr;
          $this->categoria = $this->categoria_before_qstr;
          $this->latitud = $this->latitud_before_qstr;
          $this->longitud = $this->longitud_before_qstr;
          $this->estado = $this->estado_before_qstr;
          $this->geo = $this->geo_before_qstr;
          $this->correo = $this->correo_before_qstr;
          $this->nombre = $this->nombre_before_qstr;
          $this->celular = $this->celular_before_qstr;
          $this->direccion = $this->direccion_before_qstr;
          $this->alerta = $this->alerta_before_qstr;
          $this->rutavideo = $this->rutavideo_before_qstr;
          $this->rutaaudio = $this->rutaaudio_before_qstr;
          $this->rutaimagen = $this->rutaimagen_before_qstr;
          $this->canal = $this->canal_before_qstr;
          $this->radicado = $this->radicado_before_qstr;
          $this->origenalerta = $this->origenalerta_before_qstr;
          $this->departamento = $this->departamento_before_qstr;
          $this->municipio = $this->municipio_before_qstr;
          $this->lugar = $this->lugar_before_qstr;
          $this->escalar = $this->escalar_before_qstr;
          $this->motivo = $this->motivo_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['subcategoria'])) { $this->subcategoria = $NM_val_form['subcategoria']; }
              elseif (isset($this->subcategoria)) { $this->nm_limpa_alfa($this->subcategoria); }
              if     (isset($NM_val_form) && isset($NM_val_form['categoria'])) { $this->categoria = $NM_val_form['categoria']; }
              elseif (isset($this->categoria)) { $this->nm_limpa_alfa($this->categoria); }
              if     (isset($NM_val_form) && isset($NM_val_form['latitud'])) { $this->latitud = $NM_val_form['latitud']; }
              elseif (isset($this->latitud)) { $this->nm_limpa_alfa($this->latitud); }
              if     (isset($NM_val_form) && isset($NM_val_form['longitud'])) { $this->longitud = $NM_val_form['longitud']; }
              elseif (isset($this->longitud)) { $this->nm_limpa_alfa($this->longitud); }
              if     (isset($NM_val_form) && isset($NM_val_form['estado'])) { $this->estado = $NM_val_form['estado']; }
              elseif (isset($this->estado)) { $this->nm_limpa_alfa($this->estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['idalerta'])) { $this->idalerta = $NM_val_form['idalerta']; }
              elseif (isset($this->idalerta)) { $this->nm_limpa_alfa($this->idalerta); }
              if     (isset($NM_val_form) && isset($NM_val_form['geo'])) { $this->geo = $NM_val_form['geo']; }
              elseif (isset($this->geo)) { $this->nm_limpa_alfa($this->geo); }
              if     (isset($NM_val_form) && isset($NM_val_form['correo'])) { $this->correo = $NM_val_form['correo']; }
              elseif (isset($this->correo)) { $this->nm_limpa_alfa($this->correo); }
              if     (isset($NM_val_form) && isset($NM_val_form['nombre'])) { $this->nombre = $NM_val_form['nombre']; }
              elseif (isset($this->nombre)) { $this->nm_limpa_alfa($this->nombre); }
              if     (isset($NM_val_form) && isset($NM_val_form['celular'])) { $this->celular = $NM_val_form['celular']; }
              elseif (isset($this->celular)) { $this->nm_limpa_alfa($this->celular); }
              if     (isset($NM_val_form) && isset($NM_val_form['direccion'])) { $this->direccion = $NM_val_form['direccion']; }
              elseif (isset($this->direccion)) { $this->nm_limpa_alfa($this->direccion); }
              if     (isset($NM_val_form) && isset($NM_val_form['alerta'])) { $this->alerta = $NM_val_form['alerta']; }
              elseif (isset($this->alerta)) { $this->nm_limpa_alfa($this->alerta); }
              if     (isset($NM_val_form) && isset($NM_val_form['canal'])) { $this->canal = $NM_val_form['canal']; }
              elseif (isset($this->canal)) { $this->nm_limpa_alfa($this->canal); }
              if     (isset($NM_val_form) && isset($NM_val_form['radicado'])) { $this->radicado = $NM_val_form['radicado']; }
              elseif (isset($this->radicado)) { $this->nm_limpa_alfa($this->radicado); }
              if     (isset($NM_val_form) && isset($NM_val_form['origenalerta'])) { $this->origenalerta = $NM_val_form['origenalerta']; }
              elseif (isset($this->origenalerta)) { $this->nm_limpa_alfa($this->origenalerta); }
              if     (isset($NM_val_form) && isset($NM_val_form['departamento'])) { $this->departamento = $NM_val_form['departamento']; }
              elseif (isset($this->departamento)) { $this->nm_limpa_alfa($this->departamento); }
              if     (isset($NM_val_form) && isset($NM_val_form['municipio'])) { $this->municipio = $NM_val_form['municipio']; }
              elseif (isset($this->municipio)) { $this->nm_limpa_alfa($this->municipio); }
              if     (isset($NM_val_form) && isset($NM_val_form['lugar'])) { $this->lugar = $NM_val_form['lugar']; }
              elseif (isset($this->lugar)) { $this->nm_limpa_alfa($this->lugar); }
              if     (isset($NM_val_form) && isset($NM_val_form['escalar'])) { $this->escalar = $NM_val_form['escalar']; }
              elseif (isset($this->escalar)) { $this->nm_limpa_alfa($this->escalar); }
              if     (isset($NM_val_form) && isset($NM_val_form['motivo'])) { $this->motivo = $NM_val_form['motivo']; }
              elseif (isset($this->motivo)) { $this->nm_limpa_alfa($this->motivo); }
              if     (isset($NM_val_form) && isset($NM_val_form['terminado'])) { $this->terminado = $NM_val_form['terminado']; }
              elseif (isset($this->terminado)) { $this->nm_limpa_alfa($this->terminado); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $bChange_rutavideo = false;
              if (isset($this->rutavideo_original_filename) && '' != $this->rutavideo_original_filename && $this->rutavideo_original_filename != $this->rutavideo)
              {
                  $sTmpOrig_rutavideo = $this->rutavideo;
                  $this->rutavideo    = $this->rutavideo_original_filename;
                  $bChange_rutavideo  = true;
              }

              $bChange_rutaaudio = false;
              if (isset($this->rutaaudio_original_filename) && '' != $this->rutaaudio_original_filename && $this->rutaaudio_original_filename != $this->rutaaudio)
              {
                  $sTmpOrig_rutaaudio = $this->rutaaudio;
                  $this->rutaaudio    = $this->rutaaudio_original_filename;
                  $bChange_rutaaudio  = true;
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('aprobada', 'noaprobada', 'escalar', 'geocode', 'audio', 'motivo', 'terminado', 'categoria', 'subcategoria', 'fecharechazada', 'fechaenatencion', 'fechafinalizada', 'fecha', 'geo', 'correo', 'nombre', 'celular', 'direccion', 'idalerta', 'estado', 'latitud', 'longitud', 'departamento', 'municipio', 'lugar', 'canal', 'origenalerta', 'radicado', 'alerta', 'rutavideo', 'rutaaudio'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if ($bChange_rutavideo)
              {
                  $this->rutavideo                   = $sTmpOrig_rutavideo;
                  $this->rutavideo_original_filename = '';
              }

              if ($bChange_rutaaudio)
              {
                  $this->rutaaudio                   = $sTmpOrig_rutaaudio;
                  $this->rutaaudio_original_filename = '';
              }

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela; 
          $comando = "select max(idalerta) from " . $this->Ini->nm_tabela; 
          $rs = $this->Db->Execute($comando); 
          if ($rs === false && !$rs->EOF)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
              $this->NM_rollback_db(); 
              if ($this->NM_ajax_flag)
              {
                  form_alerta_pack_ajax_response();
              }
              exit; 
          }  
          $this->idalerta = $rs->fields[0] + 1;
          $rs->Close(); 
              $this->fecha =  date('Y') . "-" . date('m')  . "-" . date('d') . " " . date('H') . ":" . date('i') . ":" . date('s');
              $this->fecha_hora =  date('Y') . "-" . date('m')  . "-" . date('d') . " " . date('H') . ":" . date('i') . ":" . date('s');
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_pkey']); 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_alerta_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $dir_file = $this->Ini->path_doc . "" . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->rutavideo_scfile_name, $dir_file, "rutavideo");
              if (trim($this->rutavideo_scfile_name) != $_test_file)
              {
                  $this->rutavideo_scfile_name = $_test_file;
                  $this->rutavideo = $_test_file;
              }
              $dir_file = $this->Ini->path_doc . "" . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->rutaaudio_scfile_name, $dir_file, "rutaaudio");
              if (trim($this->rutaaudio_scfile_name) != $_test_file)
              {
                  $this->rutaaudio_scfile_name = $_test_file;
                  $this->rutaaudio = $_test_file;
              }
              $dir_file = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->rutaimagen_scfile_name, $dir_file, "rutaimagen");
              if (trim($this->rutaimagen_scfile_name) != $_test_file)
              {
                  $this->rutaimagen_scfile_name = $_test_file;
                  $this->rutaimagen = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada) VALUES ('$this->subcategoria', '$this->categoria', '$this->latitud', '$this->longitud', '$this->estado', $this->idalerta, '$this->geo', '$this->correo', '$this->nombre', '$this->celular', '$this->direccion', '$this->alerta', '$this->rutavideo', '$this->rutaaudio', '$this->rutaimagen', '$this->canal', '$this->radicado', '$this->origenalerta', '$this->departamento', '$this->municipio', '$this->lugar', '$this->fecha', '$this->escalar', '$this->motivo', $this->terminado, '$this->fecharechazada', '$this->fechaenatencion', '$this->fechafinalizada')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada) VALUES (" . $NM_seq_auto . "'$this->subcategoria', '$this->categoria', '$this->latitud', '$this->longitud', '$this->estado', $this->idalerta, '$this->geo', '$this->correo', '$this->nombre', '$this->celular', '$this->direccion', '$this->alerta', '$this->rutavideo', '$this->rutaaudio', '$this->rutaimagen', '$this->canal', '$this->radicado', '$this->origenalerta', '$this->departamento', '$this->municipio', '$this->lugar', '$this->fecha', '$this->escalar', '$this->motivo', $this->terminado, '$this->fecharechazada', '$this->fechaenatencion', '$this->fechafinalizada')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada) VALUES (" . $NM_seq_auto . "'$this->subcategoria', '$this->categoria', '$this->latitud', '$this->longitud', '$this->estado', $this->idalerta, '$this->geo', '$this->correo', '$this->nombre', '$this->celular', '$this->direccion', '$this->alerta', '$this->rutavideo', '$this->rutaaudio', '$this->rutaimagen', '$this->canal', '$this->radicado', '$this->origenalerta', '$this->departamento', '$this->municipio', '$this->lugar', TO_DATE('$this->fecha', 'yyyy-mm-dd hh24:mi:ss'), '$this->escalar', '$this->motivo', $this->terminado, TO_DATE('$this->fecharechazada', 'yyyy-mm-dd hh24:mi:ss'), TO_DATE('$this->fechaenatencion', 'yyyy-mm-dd hh24:mi:ss'), TO_DATE('$this->fechafinalizada', 'yyyy-mm-dd hh24:mi:ss'))"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada) VALUES (" . $NM_seq_auto . "'$this->subcategoria', '$this->categoria', '$this->latitud', '$this->longitud', '$this->estado', $this->idalerta, '$this->geo', '$this->correo', '$this->nombre', '$this->celular', '$this->direccion', '$this->alerta', '$this->rutavideo', '$this->rutaaudio', '$this->rutaimagen', '$this->canal', '$this->radicado', '$this->origenalerta', '$this->departamento', '$this->municipio', '$this->lugar', '$this->fecha', '$this->escalar', '$this->motivo', $this->terminado, '$this->fecharechazada', '$this->fechaenatencion', '$this->fechafinalizada')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada) VALUES (" . $NM_seq_auto . "'$this->subcategoria', '$this->categoria', '$this->latitud', '$this->longitud', '$this->estado', $this->idalerta, '$this->geo', '$this->correo', '$this->nombre', '$this->celular', '$this->direccion', '$this->alerta', '$this->rutavideo', '$this->rutaaudio', '$this->rutaimagen', '$this->canal', '$this->radicado', '$this->origenalerta', '$this->departamento', '$this->municipio', '$this->lugar', '$this->fecha', '$this->escalar', '$this->motivo', $this->terminado, '$this->fecharechazada', '$this->fechaenatencion', '$this->fechafinalizada')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada) VALUES (" . $NM_seq_auto . "'$this->subcategoria', '$this->categoria', '$this->latitud', '$this->longitud', '$this->estado', $this->idalerta, '$this->geo', '$this->correo', '$this->nombre', '$this->celular', '$this->direccion', '$this->alerta', '$this->rutavideo', '$this->rutaaudio', '$this->rutaimagen', '$this->canal', '$this->radicado', '$this->origenalerta', '$this->departamento', '$this->municipio', '$this->lugar', '$this->fecha', '$this->escalar', '$this->motivo', $this->terminado, '$this->fecharechazada', '$this->fechaenatencion', '$this->fechafinalizada')"; 
              }
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg(), true); 
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                      { 
                          $this->sc_erro_insert = $this->Db->ErrorMsg();  
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_alerta_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total']);
              }

              $dir_doc = $this->Ini->path_doc . "" . "/"; 
              $arq_rutavideo = fopen($this->SC_DOC_rutavideo, "r") ; 
              $reg_rutavideo = fread($arq_rutavideo, filesize($this->SC_DOC_rutavideo)) ; 
              fclose($arq_rutavideo) ;  
              $arq_rutavideo = fopen($dir_doc . trim($this->rutavideo_scfile_name), "w") ; 
              fwrite($arq_rutavideo, $reg_rutavideo) ;  
              fclose($arq_rutavideo) ;  
              $dir_doc = $this->Ini->path_doc . "" . "/"; 
              $arq_rutaaudio = fopen($this->SC_DOC_rutaaudio, "r") ; 
              $reg_rutaaudio = fread($arq_rutaaudio, filesize($this->SC_DOC_rutaaudio)) ; 
              fclose($arq_rutaaudio) ;  
              $arq_rutaaudio = fopen($dir_doc . trim($this->rutaaudio_scfile_name), "w") ; 
              fwrite($arq_rutaaudio, $reg_rutaaudio) ;  
              fclose($arq_rutaaudio) ;  
              $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
              $arq_rutaimagen = fopen($this->SC_IMG_rutaimagen, "r") ; 
              $reg_rutaimagen = fread($arq_rutaimagen, filesize($this->SC_IMG_rutaimagen)) ; 
              fclose($arq_rutaimagen) ;  
              $arq_rutaimagen = fopen($dir_img . trim($this->rutaimagen_scfile_name), "w") ; 
              fwrite($arq_rutaimagen, $reg_rutaimagen) ;  
              fclose($arq_rutaimagen) ;  
              $this->sc_evento = "insert"; 
              $this->sc_insert_on = true; 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->idalerta = substr($this->Db->qstr($this->idalerta), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idalerta = $this->idalerta "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_alerta_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
    if ("update" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        $_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_escalar = $this->escalar;
    $original_idalerta = $this->idalerta;
}
       

$check_sql = "SELECT count(idalerta) FROM responsablexalerta where idalerta=".$this->idalerta .";";
 
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

if (isset($this->rs[0][0]))     
{
  if( $this->rs[0][0]==0){
     if($this->escalar =='En Atencion'){
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($this->Ini->path_link . "" . SC_dir_app_name('form_responsablexalertaline') . "/", $this->nm_location, "idalerta?#?" . $this->idalerta  . "?@?", "_self", "ret_self", 440, 630);
 };
  }
	
  
}
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_escalar != $this->escalar || (isset($bFlagRead_escalar) && $bFlagRead_escalar)))
    {
        $this->ajax_return_values_escalar(true);
    }
    if (($original_idalerta != $this->idalerta || (isset($bFlagRead_idalerta) && $bFlagRead_idalerta)))
    {
        $this->ajax_return_values_idalerta(true);
    }
}
$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $salva_opcao ; 
          if ($salva_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->sc_evento = ""; 
          $this->NM_rollback_db(); 
          return; 
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['parms'] = "idalerta?#?$this->idalerta?@?"; 
      }
      $this->nmgp_dados_form['rutavideo'] = ""; 
      $this->rutavideo_limpa = ""; 
      $this->rutavideo_salva = ""; 
      $this->nmgp_dados_form['rutaaudio'] = ""; 
      $this->rutaaudio_limpa = ""; 
      $this->rutaaudio_salva = ""; 
      $this->nmgp_dados_form['rutaimagen'] = ""; 
      $this->rutaimagen_limpa = ""; 
      $this->rutaimagen_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->idalerta = substr($this->Db->qstr($this->idalerta), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "R")
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->idalerta)) 
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
          else 
          { 
              $this->nmgp_opcao = "igual"; 
          } 
      } 
      if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->nmgp_opcao != "nada" && (trim($this->idalerta) === "")) 
      { 
          if ($this->nmgp_opcao == "avanca")  
          { 
              $this->nmgp_opcao = "final"; 
          } 
          elseif ($this->nmgp_opcao != "novo")
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("");
      if (substr(strtolower($sc_where), 0, 5) == "where")
      {
          $sc_where  = substr($sc_where , 5);
      }
      if (!empty($sc_where))
      {
          $sc_where = " where " . $sc_where . " ";
      }
      if ('' != $sc_where_filter)
      {
          $sc_where = ('' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total']))
      { 
          $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_alerta = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total'] = $qt_geral_reg_form_alerta;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->idalerta))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "idalerta < $this->idalerta "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "idalerta < $this->idalerta "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "idalerta < $this->idalerta "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "idalerta < $this->idalerta "; 
              }
              else  
              {
                  $Key_Where = "idalerta < $this->idalerta "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_alerta = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] > $qt_geral_reg_form_alerta)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] = $qt_geral_reg_form_alerta; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] = $qt_geral_reg_form_alerta; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_alerta) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total'] + 1; 
      $this->NM_gera_nav_page(); 
      $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, TO_DATE(TO_CHAR(fecha, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), escalar, motivo, terminado, TO_DATE(TO_CHAR(fecharechazada, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), TO_DATE(TO_CHAR(fechaenatencion, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), TO_DATE(TO_CHAR(fechafinalizada, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss') from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT subcategoria, categoria, latitud, longitud, estado, idalerta, geo, correo, nombre, celular, direccion, alerta, rutavideo, rutaaudio, rutaimagen, canal, radicado, origenalerta, departamento, municipio, lugar, fecha, escalar, motivo, terminado, fecharechazada, fechaenatencion, fechafinalizada from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "idalerta = $this->idalerta"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "idalerta = $this->idalerta"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "idalerta = $this->idalerta"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "idalerta = $this->idalerta"; 
              }  
              else  
              {
                  $aWhere[] = "idalerta = $this->idalerta"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "idalerta";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start']) ;  
              } 
          } 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['responsables'] = $this->nmgp_botoes['responsables'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              $this->NM_ajax_info['buttonDisplay']['responsables'] = $this->nmgp_botoes['responsables'] = "off";
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->subcategoria = $rs->fields[0] ; 
              $this->nmgp_dados_select['subcategoria'] = $this->subcategoria;
              $this->categoria = $rs->fields[1] ; 
              $this->nmgp_dados_select['categoria'] = $this->categoria;
              $this->latitud = $rs->fields[2] ; 
              $this->nmgp_dados_select['latitud'] = $this->latitud;
              $this->longitud = $rs->fields[3] ; 
              $this->nmgp_dados_select['longitud'] = $this->longitud;
              $this->estado = $rs->fields[4] ; 
              $this->nmgp_dados_select['estado'] = $this->estado;
              $this->idalerta = $rs->fields[5] ; 
              $this->nmgp_dados_select['idalerta'] = $this->idalerta;
              $this->geo = $rs->fields[6] ; 
              $this->nmgp_dados_select['geo'] = $this->geo;
              $this->correo = $rs->fields[7] ; 
              $this->nmgp_dados_select['correo'] = $this->correo;
              $this->nombre = $rs->fields[8] ; 
              $this->nmgp_dados_select['nombre'] = $this->nombre;
              $this->celular = $rs->fields[9] ; 
              $this->nmgp_dados_select['celular'] = $this->celular;
              $this->direccion = $rs->fields[10] ; 
              $this->nmgp_dados_select['direccion'] = $this->direccion;
              $this->alerta = $rs->fields[11] ; 
              $this->nmgp_dados_select['alerta'] = $this->alerta;
              $this->rutavideo = $rs->fields[12] ; 
              $this->nmgp_dados_select['rutavideo'] = $this->rutavideo;
              $this->rutaaudio = $rs->fields[13] ; 
              $this->nmgp_dados_select['rutaaudio'] = $this->rutaaudio;
              $this->rutaimagen = $rs->fields[14] ; 
              $this->nmgp_dados_select['rutaimagen'] = $this->rutaimagen;
              $this->canal = $rs->fields[15] ; 
              $this->nmgp_dados_select['canal'] = $this->canal;
              $this->radicado = $rs->fields[16] ; 
              $this->nmgp_dados_select['radicado'] = $this->radicado;
              $this->origenalerta = $rs->fields[17] ; 
              $this->nmgp_dados_select['origenalerta'] = $this->origenalerta;
              $this->departamento = $rs->fields[18] ; 
              $this->nmgp_dados_select['departamento'] = $this->departamento;
              $this->municipio = $rs->fields[19] ; 
              $this->nmgp_dados_select['municipio'] = $this->municipio;
              $this->lugar = $rs->fields[20] ; 
              $this->nmgp_dados_select['lugar'] = $this->lugar;
              $this->fecha = $rs->fields[21] ; 
              if (substr($this->fecha, 10, 1) == "-") 
              { 
                 $this->fecha = substr($this->fecha, 0, 10) . " " . substr($this->fecha, 11);
              } 
              if (substr($this->fecha, 13, 1) == ".") 
              { 
                 $this->fecha = substr($this->fecha, 0, 13) . ":" . substr($this->fecha, 14, 2) . ":" . substr($this->fecha, 17);
              } 
              $this->nmgp_dados_select['fecha'] = $this->fecha;
              $this->escalar = $rs->fields[22] ; 
              $this->nmgp_dados_select['escalar'] = $this->escalar;
              $this->motivo = $rs->fields[23] ; 
              $this->nmgp_dados_select['motivo'] = $this->motivo;
              $this->terminado = $rs->fields[24] ; 
              $this->nmgp_dados_select['terminado'] = $this->terminado;
              $this->fecharechazada = $rs->fields[25] ; 
              if (substr($this->fecharechazada, 10, 1) == "-") 
              { 
                 $this->fecharechazada = substr($this->fecharechazada, 0, 10) . " " . substr($this->fecharechazada, 11);
              } 
              if (substr($this->fecharechazada, 13, 1) == ".") 
              { 
                 $this->fecharechazada = substr($this->fecharechazada, 0, 13) . ":" . substr($this->fecharechazada, 14, 2) . ":" . substr($this->fecharechazada, 17);
              } 
              $this->nmgp_dados_select['fecharechazada'] = $this->fecharechazada;
              $this->fechaenatencion = $rs->fields[26] ; 
              if (substr($this->fechaenatencion, 10, 1) == "-") 
              { 
                 $this->fechaenatencion = substr($this->fechaenatencion, 0, 10) . " " . substr($this->fechaenatencion, 11);
              } 
              if (substr($this->fechaenatencion, 13, 1) == ".") 
              { 
                 $this->fechaenatencion = substr($this->fechaenatencion, 0, 13) . ":" . substr($this->fechaenatencion, 14, 2) . ":" . substr($this->fechaenatencion, 17);
              } 
              $this->nmgp_dados_select['fechaenatencion'] = $this->fechaenatencion;
              $this->fechafinalizada = $rs->fields[27] ; 
              if (substr($this->fechafinalizada, 10, 1) == "-") 
              { 
                 $this->fechafinalizada = substr($this->fechafinalizada, 0, 10) . " " . substr($this->fechafinalizada, 11);
              } 
              if (substr($this->fechafinalizada, 13, 1) == ".") 
              { 
                 $this->fechafinalizada = substr($this->fechafinalizada, 0, 13) . ":" . substr($this->fechafinalizada, 14, 2) . ":" . substr($this->fechafinalizada, 17);
              } 
              $this->nmgp_dados_select['fechafinalizada'] = $this->fechafinalizada;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->idalerta = (string)$this->idalerta; 
              $this->terminado = (string)$this->terminado; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['parms'] = "idalerta?#?$this->idalerta?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sub_dir'][0]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sub_dir'][1]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sub_dir'][2]  = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] < $qt_geral_reg_form_alerta;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao']   = '';
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->subcategoria = "" ;  
              $this->categoria = "" ;  
              $this->latitud = "" ;  
              $this->longitud = "" ;  
              $this->estado = "" ;  
              $this->idalerta = "" ;  
              $this->geo = "" ;  
              $this->correo = "" ;  
              $this->nombre = "" ;  
              $this->celular = "" ;  
              $this->direccion = "" ;  
              $this->alerta = "" ;  
              $this->rutavideo = "" ;  
              $this->rutavideo_ul_name = "" ;  
              $this->rutavideo_ul_type = "" ;  
              $this->rutaaudio = "" ;  
              $this->rutaaudio_ul_name = "" ;  
              $this->rutaaudio_ul_type = "" ;  
              $this->rutaimagen = "" ;  
              $this->rutaimagen_ul_name = "" ;  
              $this->rutaimagen_ul_type = "" ;  
              $this->canal = "" ;  
              $this->radicado = "" ;  
              $this->origenalerta = "" ;  
              $this->departamento = "" ;  
              $this->municipio = "" ;  
              $this->lugar = "" ;  
              $this->fecha = "" ;  
              $this->fecha_hora = "" ;  
              $this->escalar = "" ;  
              $this->motivo = "" ;  
              $this->terminado = "" ;  
              $this->fecharechazada = "" ;  
              $this->fecharechazada_hora = "" ;  
              $this->fechaenatencion = "" ;  
              $this->fechaenatencion_hora = "" ;  
              $this->fechafinalizada = "" ;  
              $this->fechafinalizada_hora = "" ;  
              $this->aprobada = "" ;  
              $this->geocode = "" ;  
              $this->noaprobada = "" ;  
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      $this->nm_proc_onload();
  }
// 
//-- 
   function nm_db_retorna($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " where idalerta < $this->idalerta" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->idalerta = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "inicio";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_avanca($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " where idalerta > $this->idalerta" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->idalerta = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     else 
     { 
        $this->nmgp_opcao = "final";  
        $rs->Close();  
        return ; 
     } 
   } 
// 
//-- 
   function nm_db_inicio($str_where_param = '') 
   {   
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela; 
     $rs = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela);
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if ($rs->fields[0] == 0) 
     { 
         $this->nmgp_opcao = "novo"; 
         $this->nm_flag_saida_novo = "S"; 
         $rs->Close(); 
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return;
     }
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->idalerta = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_final($str_where_param = '') 
   { 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(idalerta) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->idalerta = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Arr_result        = array();
       $Ind_result        = 0;
       $Reg_Page   = 1;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['reg_start'] + 1;
       $rec_fim    = ($rec_fim > $rec_tot) ? $rec_tot : $rec_fim;
       if ($rec_tot == 0)
       {
           return;
       }
       $Qtd_Pages  = ceil($rec_tot / $Reg_Page);
       $Page_Atu   = ceil($rec_fim / $Reg_Page);
       $Link_ini   = 1;
       if ($Page_Atu > $Max_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       elseif ($Page_Atu > $Mid_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       if (($Qtd_Pages - $Link_ini) < $Max_link)
       {
           $Link_ini = ($Qtd_Pages - $Max_link) + 1;
       }
       if ($Link_ini < 1)
       {
           $Link_ini = 1;
       }
       for ($x = 0; $x < $Max_link && $Link_ini <= $Qtd_Pages; $x++)
       {
           $rec = (($Link_ini - 1) * $Reg_Page) + 1;
           if ($Link_ini == $Page_Atu)
           {
               $Arr_result[$Ind_result] = '<span class="scFormToolbarNavOpen" style="vertical-align: middle;">' . $Link_ini . '</span>';
           }
           else
           {
               $Arr_result[$Ind_result] = '<a class="scFormToolbarNav" style="vertical-align: middle;" href="javascript: nm_navpage(' . $rec . ')">' . $Link_ini . '</a>';
           }
           $Link_ini++;
           $Ind_result++;
           if (($x + 1) < $Max_link && $Link_ini <= $Qtd_Pages && '' != $this->Ini->Str_toolbarnav_separator && @is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator))
           {
               $Arr_result[$Ind_result] = '<img src="' . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator . '" align="absmiddle" style="vertical-align: middle;">';
               $Ind_result++;
           }
       }
       if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
       {
           krsort($Arr_result);
       }
       foreach ($Arr_result as $Ind_result => $Lin_result)
       {
           $this->SC_nav_page .= $Lin_result;
       }
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
//
function escalar_onClick()
{
$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'on';
       








$this->nm_formatar_campos();
form_alerta_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'off';
}
function lugar_onChange()
{
$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'on';
       
$original_municipio = $this->municipio;
$original_lugar = $this->lugar;
$original_longitud = $this->longitud;
$original_latitud = $this->latitud;

$check_sql = "SELECT longitud,latitud"
   . " FROM colegios"
   . " WHERE MUNICIPIO = '".$this->municipio . "'"
	."and NOMBRE_SEDE_EDUCATIVA='".$this->lugar ."'";
 
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

if (isset($this->rs[0][0]))     
{
    $this->longitud  = $this->rs[0][0];
    $this->latitud  = $this->rs[0][1];
}


$modificado_municipio = $this->municipio;
$modificado_lugar = $this->lugar;
$modificado_longitud = $this->longitud;
$modificado_latitud = $this->latitud;
$this->nm_formatar_campos('municipio', 'lugar', 'longitud', 'latitud');
if ($original_municipio !== $modificado_municipio || (isset($bFlagRead_municipio) && $bFlagRead_municipio))
{
    $this->ajax_return_values_municipio(true);
}
if ($original_lugar !== $modificado_lugar || (isset($bFlagRead_lugar) && $bFlagRead_lugar))
{
    $this->ajax_return_values_lugar(true);
}
if ($original_longitud !== $modificado_longitud || (isset($bFlagRead_longitud) && $bFlagRead_longitud))
{
    $this->ajax_return_values_longitud(true);
}
if ($original_latitud !== $modificado_latitud || (isset($bFlagRead_latitud) && $bFlagRead_latitud))
{
    $this->ajax_return_values_latitud(true);
}
form_alerta_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'off';
}
function reporte($idalerta)
{
$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'on';
       
$mail_smtp_server    = 'smtp.gmail.com';        
$mail_smtp_user      = 'danielalvarez@narino.gov.co';                   
$mail_smtp_pass      = 'aldebaran123';                
$mail_from           = 'ganapae@narino.gov.co';          



$check_sql = "SELECT municipio,lugar,alerta,rutaaudio,rutaimagen,correo"
   . " FROM alerta"
   . " WHERE idalerta = '" . $this->idalerta . "'";
 
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

if (isset($this->rs[0][0]))     
{
	
		$municipio=$this->rs[0][0];
		$lugar=$this->rs[0][1];
		$alerta=$this->rs[0][2];
		$rutaaudio=$this->rs[0][3];
		$rutaimagen=$this->rs[0][4];
		$mail_to= $this->rs[0][5];         
	
    
}




echo $check_sql = 'SELECT cedula'
   . ' FROM responsablexalerta'
   . " WHERE idalerta = '" . $this->idalerta . "'";

 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;

$field_total  = 0;
if (false == $this->rs )     
{
    
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= 'Error while accessing database.';
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_alerta' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = 'Error while accessing database.';
 }
;
}
else
{
			   while(!$this->rs->EOF)
				{
	echo 				$check_sql = "SELECT email,idresponsablealerta"
			   . " FROM sec_users"
			   . " WHERE cedula = '" . $this->rs->fields[0]. "'";
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs2 = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->rs2[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs2 = false;
          $this->rs2_erro = $this->Db->ErrorMsg();
      } 
;


			if (isset($this->rs2[0][0]))     
			{
			
				$mail_to=$mail_to.";".$this->rs2[0][0];
				
				
				

							$check_sql = 'SELECT descripcionadjunto,adjunto,accion,fecha '
							   . ' FROM accionxalertxresponsable'
							   . " WHERE idresponsablealerta = '" . $this->rs2[0][1] . "'";

							 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs3 = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs3 = false;
          $this->rs3_erro = $this->Db->ErrorMsg();
      } 
;

							$field_total  = 0;
							if (false == $this->rs3 )     
							{
								
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= 'Error while accessing database.';
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_alerta' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = 'Error while accessing database.';
 }
;
							}
							else
							{
							   while(!$this->rs3->EOF)
								{
									
								   
								   $acciones=$acciones." ".$this->rs3->fields[0]." ".$this->rs3->fields[1]." ".$this->rs3->fields[2]." ".$this->rs3->fields[3];
									
								   
								   
								   $this->rs3->MoveNext();
								}
								$this->rs3->Close();
							}
				
				
				
				

			}  

					$this->rs->MoveNext();
    }
    $this->rs->Close();
}








$mail_subject        = 'ALERTA FINALIZADA';            
$mail_message        = "<p>Cordial Saludo </p> </br><p>Se informa que su alerta a sido dada por finalizada por </p></br>
<p>Municipio:$municipio</p></br><p>Lugar:$lugar</p></br><p>Observaciones:$alerta</br></p></br><p>Gracias por su atención y estaremos en continuo contacto con ud.</p>
$acciones"; 
$mail_format         = 'H';                       
$mail_copies         = '';                        
$mail_tp_copies      = '';                        
$mail_port           = '465';                     
$mail_tp_connection  = 'S';                       
$adjunto="http://stiga.narino.gov.co/pae/_lib/file/doc/$this->rutaaudio;http://stiga.narino.gov.co/pae/_lib/file/img/$rutaimagen";
    include_once($this->Ini->path_third . "/swift/swift_required.php");
    $sc_mail_port     = "$mail_port";
    $sc_mail_tp_port  = "$mail_tp_connection";
    $sc_mail_tp_mens  = "$mail_format";
    $sc_mail_tp_copy  = "$mail_tp_copies";
    $this->sc_mail_count = 0;
    $this->sc_mail_erro  = "";
    $this->sc_mail_ok    = true;
    if ($sc_mail_tp_port == "S" || $sc_mail_tp_port == "Y")
    {
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 465;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'ssl');
    }
    elseif ($sc_mail_tp_port == "T")
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 587;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'tls');
    }
    else
    {
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 25;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port);
    }
    $Con_Mail->setUsername($mail_smtp_user);
    $Con_Mail->setpassword($mail_smtp_pass);
    $Send_Mail = Swift_Mailer::newInstance($Con_Mail);
    if ($sc_mail_tp_mens == "H")
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject);
        $Mens_Mail->setBody(SC_Mail_Image($mail_message, $Mens_Mail))->setContentType("text/html");
    }
    else
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject)->setBody($mail_message);
    }
    if (!empty($_SESSION['scriptcase']['charset']))
    {
        $Mens_Mail->setCharset($_SESSION['scriptcase']['charset']);
    }
    $Temp_mail = $adjunto;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $adjunto);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Mens_Mail->attach(Swift_Attachment::fromPath($NM_dest));
        }
    }
    $Temp_mail = $mail_to;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_to);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            $Mens_Mail->addTo($Arr_addr[0], $Arr_addr[1]);
        }
    }
    $Temp_mail = $mail_copies;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_copies);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            if (strtoupper(substr($sc_mail_tp_copy, 0, 2)) == "CC")
            {
                $Mens_Mail->addCc($Arr_addr[0], $Arr_addr[1]);
            }
            else
            {
                $Mens_Mail->addBcc($Arr_addr[0], $Arr_addr[1]);
            }
        }
    }
    $Arr_addr = SC_Mail_Address($mail_from);
    $this->sc_mail_count = $Send_Mail->send($Mens_Mail->setFrom($Arr_addr[0], $Arr_addr[1]), $Err_mail);
    if (!empty($Err_mail))
    {
        $this->sc_mail_erro = $Err_mail;
        $this->sc_mail_ok   = false;
    }
;


if ($this->sc_mail_ok )
{
echo "Enviados $mail_message e-mail com sucesso !!";
}
else
{

 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $this->sc_mail_erro ;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_alerta' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $this->sc_mail_erro ;
 }
;
}
$_SESSION['scriptcase']['form_alerta']['contr_erro'] = 'off';
}
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_alerta_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
//-- 
   if ($this->rutavideo != "" && $this->rutavideo != "none")   
   { 
       $sTmpExtension = pathinfo($this->rutavideo, PATHINFO_EXTENSION);
       $sTmpExtension = null == $sTmpExtension ? '' : '.' . $sTmpExtension;
       $sTmpFile_rutavideo = 'sc_rutavideo_' . md5(mt_rand(1, 1000) . microtime() . session_id()) . $sTmpExtension;
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames'] = array();
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames'][$sTmpFile_rutavideo] = $this->rutavideo;
   } 
   if ($this->rutaaudio != "" && $this->rutaaudio != "none")   
   { 
       $sTmpExtension = pathinfo($this->rutaaudio, PATHINFO_EXTENSION);
       $sTmpExtension = null == $sTmpExtension ? '' : '.' . $sTmpExtension;
       $sTmpFile_rutaaudio = 'sc_rutaaudio_' . md5(mt_rand(1, 1000) . microtime() . session_id()) . $sTmpExtension;
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames'] = array();
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['download_filenames'][$sTmpFile_rutaaudio] = $this->rutaaudio;
   } 
   if ($this->nmgp_opcao == "novo")
   { 
       $out_rutaimagen = "";  
   } 
   else 
   { 
       $out_rutaimagen = $this->rutaimagen;  
   } 
   if ($this->rutaimagen != "" && $this->rutaimagen != "none")   
   { 
       $path_rutaimagen = $this->Ini->root . $this->Ini->path_imagens . "" . "/" . $this->rutaimagen;
       $md5_rutaimagen  = md5("" . $this->rutaimagen);
       if (is_file($path_rutaimagen))  
       { 
           $NM_ler_img = true;
           $out_rutaimagen = $this->Ini->path_imag_temp . "/sc_rutaimagen_" . $md5_rutaimagen . ".gif" ;  
           if (is_file($this->Ini->root . $out_rutaimagen))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_rutaimagen) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_rutaimagen = fopen($path_rutaimagen, "r") ; 
               $reg_rutaimagen = fread($tmp_rutaimagen, filesize($path_rutaimagen)) ; 
               fclose($tmp_rutaimagen) ;  
               $arq_rutaimagen = fopen($this->Ini->root . $out_rutaimagen, "w") ;  
               fwrite($arq_rutaimagen, $reg_rutaimagen) ;  
               fclose($arq_rutaimagen) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_rutaimagen);
           $this->nmgp_return_img['rutaimagen'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['rutaimagen'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $out1_rutaimagen = $out_rutaimagen; 
           $md5_rutaimagen  = md5("" . $this->rutaimagen);
           $out_rutaimagen = $this->Ini->path_imag_temp . "/sc_rutaimagen_200200" . $md5_rutaimagen . ".gif" ;  
           if (is_file($this->Ini->root . $out_rutaimagen))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_rutaimagen) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_rutaimagen);
                   $sc_obj_img->setWidth(200);
                   $sc_obj_img->setHeight(200);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_rutaimagen);
               } 
               else 
               { 
                   $out_rutaimagen = $out1_rutaimagen;
               } 
           } 
       } 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_rutaimagen;
       if (isset($temp_out_rutaimagen))
       {
           $out_rutaimagen = $temp_out_rutaimagen;
       }
       global $temp_out1_rutaimagen;
       if (isset($temp_out1_rutaimagen))
       {
           $out1_rutaimagen = $temp_out1_rutaimagen;
       }
   }
    include_once("form_alerta_form0.php");
 }

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format .= $time_sep;
         }
         else
         {
             $new_date_format .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format;
     if ('DH' == $type)
     {
         $new_date_format                                      = explode(';', $new_date_format);
         $this->field_config[$field]['date_format_js']        = $new_date_format[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_alerta_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "geo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "correo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nombre", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "celular", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "direccion", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "alerta", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rutavideo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rutaaudio", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rutaimagen", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "canal", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "radicado", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_origenalerta($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "origenalerta", $arg_search, $data_lookup);
          }
      }
      {
          $this->SC_monta_condicao($comando, "fecha", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_escalar($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "escalar", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_motivo($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "motivo", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_terminado($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "terminado", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_categoria($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "categoria", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_subcategoria($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "subcategoria", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "geo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "correo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nombre", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "celular", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "direccion", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "idalerta", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estado($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estado", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "latitud", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "longitud", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "departamento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_municipio($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "municipio", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_lugar($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "lugar", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "canal", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_origenalerta($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "origenalerta", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "radicado", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "alerta", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rutavideo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rutaaudio", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "rutaimagen", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      $sc_where = " where " . $comando;
      $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_alerta = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['total'] = $qt_geral_reg_form_alerta;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_alerta_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_alerta_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "idalerta";$nm_numeric[] = "terminado";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas['fecha'] = "timestamp";$Nm_datas['fecharechazada'] = "timestamp";$Nm_datas['fechaenatencion'] = "timestamp";$Nm_datas['fechafinalizada'] = "timestamp";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif (substr($Nm_datas[$campo_join], 0, 4) == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          {
              $nome = "str_replace (convert(char(10)," . $nome . ",102), '.', '-') + ' ' + convert(char(8)," . $nome . ",20)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_aspas . $Cmp . $nm_aspas1;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         switch (strtoupper($condicao))
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " like '" . $campo . "%'";
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." like '%" . $campo . "%'";
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." not like '%" . $campo . "%'";
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GT":     // 
               $comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GE":     // 
               $comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LT":     // 
               $comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LE":     // 
               $comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas1;
            break;
         }
   }
   function SC_lookup_origenalerta($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['Soma'] = "Soma";
       $data_look['WhatsApp'] = "WhatsApp";
       $data_look['OjoVoz'] = "OjoVoz";
       $data_look['Verbal'] = "Verbal";
       $data_look['Escrita'] = "Escrita";
       $data_look['Correo'] = "Correo";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_alerta_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_alerta_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = '_self';
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_alerta_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['masterValue']))
{
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['masterValue'] as $cmp_master => $val_master)
{
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
}
unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['masterValue']);
?>
}
<?php
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $opc="", $alt_modal=430, $larg_modal=630)
{
   if (isset($this->NM_is_redirected) && $this->NM_is_redirected)
   {
       return;
   }
   if (is_array($nm_apl_parms))
   {
       $tmp_parms = "";
       foreach ($nm_apl_parms as $par => $val)
       {
           $par = trim($par);
           $val = trim($val);
           $tmp_parms .= str_replace(".", "_", $par) . "?#?";
           if (substr($val, 0, 1) == "$")
           {
               $tmp_parms .= $$val;
           }
           elseif (substr($val, 0, 1) == "{")
           {
               $val        = substr($val, 1, -1);
               $tmp_parms .= $this->$val;
           }
           elseif (substr($val, 0, 1) == "[")
           {
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta'][substr($val, 1, -1)];
           }
           else
           {
               $tmp_parms .= $val;
           }
           $tmp_parms .= "?@?";
       }
       $nm_apl_parms = $tmp_parms;
   }
   if (empty($opc))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_alerta']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_alerta_pack_ajax_response();
           exit;
       }
       echo "<SCRIPT language=\"javascript\">";
       if (strtolower($nm_target) == "_blank")
       {
           echo "window.open ('" . $nm_apl_dest . "');";
           echo "</SCRIPT>";
           return;
       }
       else
       {
           echo "window.location='" . $nm_apl_dest . "';";
           echo "</SCRIPT>";
           $this->NM_close_db();
           exit;
       }
   }
   $dir = explode("/", $nm_apl_dest);
   if (count($dir) == 1)
   {
       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
       $nm_apl_dest = $this->Ini->path_link . SC_dir_app_name($nm_apl_dest) . "/" . $nm_apl_dest . ".php";
   }
   if ($this->NM_ajax_flag)
   {
       $nm_apl_parms = str_replace("?#?", "*scin", NM_charset_to_utf8($nm_apl_parms));
       $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
       $this->NM_ajax_info['redir']['metodo']     = 'post';
       $this->NM_ajax_info['redir']['action']     = $nm_apl_dest;
       $this->NM_ajax_info['redir']['nmgp_parms'] = $nm_apl_parms;
       $this->NM_ajax_info['redir']['target']     = $nm_target_form;
       $this->NM_ajax_info['redir']['h_modal']    = $alt_modal;
       $this->NM_ajax_info['redir']['w_modal']    = $larg_modal;
       if ($nm_target_form == "_blank")
       {
           $this->NM_ajax_info['redir']['nmgp_outra_jan'] = 'true';
       }
       else
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida']      = $nm_apl_retorno;
           $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
           $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       }
       form_alerta_pack_ajax_response();
       exit;
   }
   if ($nm_target == "modal")
   {
       if (!empty($nm_apl_parms))
       {
           $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
           $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
           $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
       }
       $par_modal = "?script_case_init=" . $this->Ini->sc_page . "&script_case_session=" . session_id() . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
       $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
       $this->NM_is_redirected = true;
       return;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
   </HEAD>
   <BODY>
<form name="Fredir" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
<?php
   if ($nm_target_form == "_blank")
   {
?>
  <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
  <input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nm_apl_retorno) ?>">
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
<?php
   }
?>
</form> 
   <SCRIPT type="text/javascript">
<?php
   if ($nm_target_form == "modal")
   {
?>
       $(document).ready(function(){
           tb_show('', '<?php echo $nm_apl_dest ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&script_case_session=<?php echo session_id() ?> &nmgp_url_saida=modal&nmgp_parms=<?php echo $this->form_encode_input($nm_apl_parms); ?>&nmgp_outra_jan=true&TB_iframe=true&height=<?php echo $alt_modal; ?>&width=<?php echo $larg_modal; ?>&modal=true', '');
       });
<?php
   }
   else
   {
?>
       document.Fredir.target = "<?php echo $nm_target_form ?>"; 
       document.Fredir.action = "<?php echo $nm_apl_dest ?>";
       document.Fredir.submit();
<?php
   }
?>
   </SCRIPT>
   </BODY>
   </HTML>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
       $this->NM_close_db();
       exit;
   }
}
}
?>
