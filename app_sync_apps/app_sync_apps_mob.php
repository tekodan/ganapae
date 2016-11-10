<?php
//
   if (!session_id())
   {
   include_once('app_sync_apps_mob_session.php');
   @session_start() ;
       if (!function_exists("sc_check_mobile"))
       {
           include_once("../_lib/lib/php/nm_check_mobile.php");
       }
       $_SESSION['scriptcase']['device_mobile'] = sc_check_mobile();
       if ($_SESSION['scriptcase']['device_mobile'])
       {
           if (!isset($_SESSION['scriptcase']['display_mobile']))
           {
               $_SESSION['scriptcase']['display_mobile'] = true;
           }
           if ($_SESSION['scriptcase']['display_mobile'] && isset($_POST['_sc_force_mobile']) && 'out' == $_POST['_sc_force_mobile'])
           {
               $_SESSION['scriptcase']['display_mobile'] = false;
           }
           elseif (!$_SESSION['scriptcase']['display_mobile'] && isset($_POST['_sc_force_mobile']) && 'in' == $_POST['_sc_force_mobile'])
           {
               $_SESSION['scriptcase']['display_mobile'] = true;
           }
       }
       else
       {
           $_SESSION['scriptcase']['display_mobile'] = false;
       }
       if (!$_SESSION['scriptcase']['display_mobile'])
       {
          include_once('app_sync_apps.php');
          exit;
       }
   }
   $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_perfil']          = "conn_mysql";
   $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_prod']       = "";
   $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_imagens']    = "";
   $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_imag_temp']  = "";
   $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_doc']        = "";
//
class app_sync_apps_mob_ini
{
   var $nm_cod_apl;
   var $nm_nome_apl;
   var $nm_seguranca;
   var $nm_grupo;
   var $nm_grupo_versao;
   var $nm_autor;
   var $nm_versao_sc;
   var $nm_tp_lic_sc;
   var $nm_dt_criacao;
   var $nm_hr_criacao;
   var $nm_autor_alt;
   var $nm_dt_ult_alt;
   var $nm_hr_ult_alt;
   var $nm_timestamp;
   var $cor_bg_table;
   var $border_grid;
   var $cor_bg_grid;
   var $cor_cab_grid;
   var $cor_borda;
   var $cor_txt_cab_grid;
   var $cab_fonte_tipo;
   var $cab_fonte_tamanho;
   var $rod_fonte_tipo;
   var $rod_fonte_tamanho;
   var $cor_rod_grid;
   var $cor_txt_rod_grid;
   var $cor_barra_nav;
   var $cor_titulo;
   var $cor_txt_titulo;
   var $titulo_fonte_tipo;
   var $titulo_fonte_tamanho;
   var $cor_grid_impar;
   var $cor_grid_par;
   var $cor_txt_grid;
   var $texto_fonte_tipo;
   var $texto_fonte_tamanho;
   var $cor_lin_grupo;
   var $cor_txt_grupo;
   var $grupo_fonte_tipo;
   var $grupo_fonte_tamanho;
   var $cor_lin_sub_tot;
   var $cor_txt_sub_tot;
   var $sub_tot_fonte_tipo;
   var $sub_tot_fonte_tamanho;
   var $cor_lin_tot;
   var $cor_txt_tot;
   var $tot_fonte_tipo;
   var $tot_fonte_tamanho;
   var $cor_link_cab;
   var $cor_link_dados;
   var $img_fun_pag;
   var $img_fun_cab;
   var $img_fun_rod;
   var $img_fun_tit;
   var $img_fun_gru;
   var $img_fun_tot;
   var $img_fun_sub;
   var $img_fun_imp;
   var $img_fun_par;
   var $root;
   var $server;
   var $sc_protocolo;
   var $path_prod;
   var $path_link;
   var $path_aplicacao;
   var $path_embutida;
   var $path_botoes;
   var $path_img_global;
   var $path_img_modelo;
   var $path_icones;
   var $path_imagens;
   var $path_imag_cab;
   var $path_imag_temp;
   var $path_libs;
   var $path_doc;
   var $str_lang;
   var $str_schema_all;
   var $str_conf_reg;
   var $path_cep;
   var $path_secure;
   var $path_js;
   var $path_adodb;
   var $path_grafico;
   var $path_atual;
   var $Gd_missing;
   var $sc_site_ssl;
   var $nm_cont_lin;
   var $nm_limite_lin;
   var $nm_limite_lin_prt;
   var $nm_falta_var;
   var $nm_falta_var_db;
   var $nm_tpbanco;
   var $nm_servidor;
   var $nm_usuario;
   var $nm_senha;
   var $nm_database_encoding;
   var $nm_con_db2 = array();
   var $nm_con_persistente;
   var $nm_con_use_schema;
   var $nm_tabela;
   var $nm_col_dinamica   = array();
   var $nm_order_dinamico = array();
   var $nm_hidden_blocos  = array();
   var $sc_tem_trans_banco;
   var $nm_bases_all;
   var $nm_bases_access;
   var $nm_bases_db2;
   var $nm_bases_ibase;
   var $nm_bases_informix;
   var $nm_bases_mssql;
   var $nm_bases_mysql;
   var $nm_bases_postgres;
   var $nm_bases_oracle;
   var $nm_bases_sqlite;
   var $nm_bases_sybase;
   var $nm_bases_vfp;
   var $nm_bases_odbc;
   var $sc_page;
   var $sc_lig_md5 = array();
//
   function init()
   {
       global
             $nm_url_saida, $nm_apl_dependente, $script_case_init;

      @ini_set('magic_quotes_runtime', 0);
      $this->sc_page = $script_case_init;
      $_SESSION['scriptcase']['sc_num_page'] = $script_case_init;
      $_SESSION['scriptcase']['sc_ctl_ajax'] = 'part';
      $_SESSION['scriptcase']['sc_cnt_sql']  = 0;
      $this->sc_charset['UTF-8'] = 'utf-8';
      $this->sc_charset['ISO-2022-JP'] = 'iso-2022-jp';
      $this->sc_charset['ISO-2022-KR'] = 'iso-2022-kr';
      $this->sc_charset['ISO-8859-1'] = 'iso-8859-1';
      $this->sc_charset['ISO-8859-2'] = 'iso-8859-2';
      $this->sc_charset['ISO-8859-3'] = 'iso-8859-3';
      $this->sc_charset['ISO-8859-4'] = 'iso-8859-4';
      $this->sc_charset['ISO-8859-5'] = 'iso-8859-5';
      $this->sc_charset['ISO-8859-6'] = 'iso-8859-6';
      $this->sc_charset['ISO-8859-7'] = 'iso-8859-7';
      $this->sc_charset['ISO-8859-8'] = 'iso-8859-8';
      $this->sc_charset['ISO-8859-8-I'] = 'iso-8859-8-i';
      $this->sc_charset['ISO-8859-9'] = 'iso-8859-9';
      $this->sc_charset['ISO-8859-10'] = 'iso-8859-10';
      $this->sc_charset['ISO-8859-13'] = 'iso-8859-13';
      $this->sc_charset['ISO-8859-14'] = 'iso-8859-14';
      $this->sc_charset['ISO-8859-15'] = 'iso-8859-15';
      $this->sc_charset['WINDOWS-1250'] = 'windows-1250';
      $this->sc_charset['WINDOWS-1251'] = 'windows-1251';
      $this->sc_charset['WINDOWS-1252'] = 'windows-1252';
      $this->sc_charset['WINDOWS-1253'] = 'windows-1253';
      $this->sc_charset['WINDOWS-1254'] = 'windows-1254';
      $this->sc_charset['WINDOWS-1255'] = 'windows-1255';
      $this->sc_charset['WINDOWS-1256'] = 'windows-1256';
      $this->sc_charset['WINDOWS-1257'] = 'windows-1257';
      $this->sc_charset['KOI8-R'] = 'koi8-r';
      $this->sc_charset['BIG-5'] = 'big5';
      $this->sc_charset['EUC-CN'] = 'EUC-CN';
      $this->sc_charset['GB18030'] = 'GB18030';
      $this->sc_charset['GB2312'] = 'gb2312';
      $this->sc_charset['EUC-JP'] = 'euc-jp';
      $this->sc_charset['SJIS'] = 'shift-jis';
      $this->sc_charset['EUC-KR'] = 'euc-kr';
      $_SESSION['scriptcase']['charset_entities']['UTF-8'] = 'UTF-8';
      $_SESSION['scriptcase']['charset_entities']['ISO-8859-1'] = 'ISO-8859-1';
      $_SESSION['scriptcase']['charset_entities']['ISO-8859-5'] = 'ISO-8859-5';
      $_SESSION['scriptcase']['charset_entities']['ISO-8859-15'] = 'ISO-8859-15';
      $_SESSION['scriptcase']['charset_entities']['WINDOWS-1251'] = 'cp1251';
      $_SESSION['scriptcase']['charset_entities']['WINDOWS-1252'] = 'cp1252';
      $_SESSION['scriptcase']['charset_entities']['BIG-5'] = 'BIG5';
      $_SESSION['scriptcase']['charset_entities']['EUC-CN'] = 'GB2312';
      $_SESSION['scriptcase']['charset_entities']['GB2312'] = 'GB2312';
      $_SESSION['scriptcase']['charset_entities']['SJIS'] = 'Shift_JIS';
      $_SESSION['scriptcase']['charset_entities']['EUC-JP'] = 'EUC-JP';
      $_SESSION['scriptcase']['charset_entities']['KOI8-R'] = 'KOI8-R';
      $_SESSION['scriptcase']['trial_version'] = 'N';
      $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['decimal_db'] = "."; 

      $this->nm_cod_apl      = "app_sync_apps"; 
      $this->nm_nome_apl     = "Resync Applications"; 
      $this->nm_seguranca    = ""; 
      $this->nm_grupo        = "alert"; 
      $this->nm_grupo_versao = "1"; 
      $this->nm_autor        = "admin"; 
      $this->nm_versao_sc    = "v8"; 
      $this->nm_tp_lic_sc    = "ep_bronze"; 
      $this->nm_dt_criacao   = "20160527"; 
      $this->nm_hr_criacao   = "154911"; 
      $this->nm_autor_alt    = "tekodan"; 
      $this->nm_dt_ult_alt   = "20160928"; 
      $this->nm_hr_ult_alt   = "164949"; 
      list($NM_usec, $NM_sec) = explode(" ", microtime()); 
      $this->nm_timestamp    = (float) $NM_sec; 
      $this->nm_app_version  = "1.0.0"; 
// 
      $this->border_grid           = ""; 
      $this->cor_bg_grid           = ""; 
      $this->cor_bg_table          = ""; 
      $this->cor_borda             = ""; 
      $this->cor_cab_grid          = ""; 
      $this->cor_txt_pag           = ""; 
      $this->cor_link_pag          = ""; 
      $this->pag_fonte_tipo        = ""; 
      $this->pag_fonte_tamanho     = ""; 
      $this->cor_txt_cab_grid      = ""; 
      $this->cab_fonte_tipo        = ""; 
      $this->cab_fonte_tamanho     = ""; 
      $this->rod_fonte_tipo        = ""; 
      $this->rod_fonte_tamanho     = ""; 
      $this->cor_rod_grid          = ""; 
      $this->cor_txt_rod_grid      = ""; 
      $this->cor_barra_nav         = ""; 
      $this->cor_titulo            = ""; 
      $this->cor_txt_titulo        = ""; 
      $this->titulo_fonte_tipo     = ""; 
      $this->titulo_fonte_tamanho  = ""; 
      $this->cor_grid_impar        = ""; 
      $this->cor_grid_par          = ""; 
      $this->cor_txt_grid          = ""; 
      $this->texto_fonte_tipo      = ""; 
      $this->texto_fonte_tamanho   = ""; 
      $this->cor_lin_grupo         = ""; 
      $this->cor_txt_grupo         = ""; 
      $this->grupo_fonte_tipo      = ""; 
      $this->grupo_fonte_tamanho   = ""; 
      $this->cor_lin_sub_tot       = ""; 
      $this->cor_txt_sub_tot       = ""; 
      $this->sub_tot_fonte_tipo    = ""; 
      $this->sub_tot_fonte_tamanho = ""; 
      $this->cor_lin_tot           = ""; 
      $this->cor_txt_tot           = ""; 
      $this->tot_fonte_tipo        = ""; 
      $this->tot_fonte_tamanho     = ""; 
      $this->cor_link_cab          = ""; 
      $this->cor_link_dados        = ""; 
      $this->img_fun_pag           = ""; 
      $this->img_fun_cab           = ""; 
      $this->img_fun_rod           = ""; 
      $this->img_fun_tit           = ""; 
      $this->img_fun_gru           = ""; 
      $this->img_fun_tot           = ""; 
      $this->img_fun_sub           = ""; 
      $this->img_fun_imp           = ""; 
      $this->img_fun_par           = ""; 
// 
      $NM_dir_atual = getcwd();
      if (empty($NM_dir_atual))
      {
          $str_path_sys          = (isset($_SERVER['SCRIPT_FILENAME'])) ? $_SERVER['SCRIPT_FILENAME'] : $_SERVER['ORIG_PATH_TRANSLATED'];
          $str_path_sys          = str_replace("\\", '/', $str_path_sys);
      }
      else
      {
          $sc_nm_arquivo         = explode("/", $_SERVER['PHP_SELF']);
          $str_path_sys          = str_replace("\\", "/", getcwd()) . "/" . $sc_nm_arquivo[count($sc_nm_arquivo)-1];
      }
      //check publication with the prod
      $str_path_apl_url = $_SERVER['PHP_SELF'];
      $str_path_apl_url = str_replace("\\", '/', $str_path_apl_url);
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/"));
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/")+1);
      $str_path_apl_dir = substr($str_path_sys, 0, strrpos($str_path_sys, "/"));
      $str_path_apl_dir = substr($str_path_apl_dir, 0, strrpos($str_path_apl_dir, "/")+1);
      //check prod
      if(empty($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_prod']))
      {
              /*check prod*/$_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_prod'] = $str_path_apl_url . "_lib/prod";
      }
      //check img
      if(empty($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_imagens']))
      {
              /*check img*/$_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_imagens'] = $str_path_apl_url . "_lib/file/img";
      }
      //check tmp
      if(empty($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_imag_temp']))
      {
              /*check tmp*/$_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_imag_temp'] = $str_path_apl_url . "_lib/tmp";
      }
      //check doc
      if(empty($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_doc']))
      {
              /*check doc*/$_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_doc'] = $str_path_apl_dir . "_lib/file/doc";
      }
      //end check publication with the prod
// 
      $this->sc_site_ssl     = (isset($_SERVER['HTTP_REFERER']) && strtolower(substr($_SERVER['HTTP_REFERER'], 0, 5)) == 'https') ? true : false;
      $this->sc_protocolo    = ($this->sc_site_ssl) ? 'https://' : 'http://';
      $this->path_prod       = $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_prod'];
      $this->path_imagens    = $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_imagens'];
      $this->path_imag_temp  = $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_imag_temp'];
      $this->path_doc        = $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_path_doc'];
      if (!isset($_SESSION['scriptcase']['str_lang']) || empty($_SESSION['scriptcase']['str_lang']))
      {
          $_SESSION['scriptcase']['str_lang'] = "es";
      }
      if (!isset($_SESSION['scriptcase']['str_conf_reg']) || empty($_SESSION['scriptcase']['str_conf_reg']))
      {
          $_SESSION['scriptcase']['str_conf_reg'] = "es_es";
      }
      $this->str_lang        = $_SESSION['scriptcase']['str_lang'];
      $this->str_conf_reg    = $_SESSION['scriptcase']['str_conf_reg'];
      $this->str_schema_all  = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "bluedaniel/bluedaniel";
      $this->server          = (isset($_SERVER['SERVER_NAME'])) ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST'];
      if (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != 80 && !$this->sc_site_ssl )
      {
          $this->server         .= ":" . $_SERVER['SERVER_PORT'];
      }
      $this->server_pdf      = $this->sc_protocolo . $this->server;
      $this->server          = "";
      $this->sc_protocolo    = "";
      $str_path_web          = $_SERVER['PHP_SELF'];
      $str_path_web          = str_replace("\\", '/', $str_path_web);
      $str_path_web          = str_replace('//', '/', $str_path_web);
      $this->root            = substr($str_path_sys, 0, -1 * strlen($str_path_web));
      $this->path_aplicacao  = substr($str_path_sys, 0, strrpos($str_path_sys, '/'));
      $this->path_aplicacao  = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/')) . '/app_sync_apps';
      $this->path_embutida   = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/') + 1);
      $this->path_aplicacao .= '/';
      $this->path_link       = substr($str_path_web, 0, strrpos($str_path_web, '/'));
      $this->path_link       = substr($this->path_link, 0, strrpos($this->path_link, '/')) . '/';
      $this->path_help       = $this->path_link . "_lib/webhelp/";
      $this->path_lang       = "../_lib/lang/";
      $this->path_lang_js    = "../_lib/js/";
      $this->path_botoes     = $this->path_link . "_lib/img";
      $this->path_img_global = $this->path_link . "_lib/img";
      $this->path_img_modelo = $this->path_link . "_lib/img";
      $this->path_icones     = $this->path_link . "_lib/img";
      $this->path_imag_cab   = $this->path_link . "_lib/img";
      $this->path_btn        = $this->root . $this->path_link . "_lib/buttons/";
      $this->path_css        = $this->root . $this->path_link . "_lib/css/";
      $this->path_lib_php    = $this->root . $this->path_link . "_lib/lib/php/";
      $this->url_lib_js      = $this->path_link . "_lib/lib/js/";
      $this->url_lib         = $this->path_link . '/_lib/';
      $this->url_third       = $this->path_prod . '/third/';
      $this->path_cep        = $this->path_prod . "/cep";
      $this->path_cor        = $this->path_prod . "/cor";
      $this->path_js         = $this->path_prod . "/lib/js";
      $this->path_libs       = $this->root . $this->path_prod . "/lib/php";
      $this->path_third      = $this->root . $this->path_prod . "/third";
      $this->path_secure     = $this->root . $this->path_prod . "/secure";
      $this->path_adodb      = $this->root . $this->path_prod . "/third/adodb";

      global $inicial_app_sync_apps_mob;
      if (isset($_SESSION['scriptcase']['user_logout']))
      {
          foreach ($_SESSION['scriptcase']['user_logout'] as $ind => $parms)
          {
              if (isset($_SESSION[$parms['V']]) && $_SESSION[$parms['V']] == $parms['U'])
              {
                  $nm_apl_dest = $parms['R'];
                  $dir = explode("/", $nm_apl_dest);
                  if (count($dir) == 1)
                  {
                      $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
                      $nm_apl_dest = $this->path_link . SC_dir_app_name($nm_apl_dest) . "/";
                  }
                  unset($_SESSION['scriptcase']['user_logout'][$ind]);
                  if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_flag) && $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_flag)
                  {
                      $inicial_app_sync_apps_mob->contr_->NM_ajax_info['redir']['action']  = $nm_apl_dest;
                      $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redir']['target']  = $parms['T'];
                      $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redir']['metodo']  = "post";
                      $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redir']['script_case_init']  = $this->sc_page;
                      $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redir']['script_case_session']  = session_id();
                      app_sync_apps_mob_pack_ajax_response();
                      exit;
                  }
?>
                  <html>
                  <body>
                  <form name="FRedirect" method="POST" action="<?php echo $nm_apl_dest; ?>" target="<?php echo $parms['T']; ?>">
                  </form>
                  <script>
                   document.FRedirect.submit();
                  </script>
                  </body>
                  </html>
<?php
                  exit;
              }
          }
      }
      $str_path = substr($this->path_prod, 0, strrpos($this->path_prod, '/') + 1); 
      if (!is_file($this->root . $str_path . 'devel/class/xmlparser/nmXmlparserIniSys.class.php'))
      {
          unset($_SESSION['scriptcase']['nm_sc_retorno']);
          unset($_SESSION['scriptcase']['app_sync_apps']['glo_nm_conexao']);
      }
      include($this->path_lang . $this->str_lang . ".lang.php");
      include($this->path_lang . "config_region.php");
      include($this->path_lang . "lang_config_region.php");
      $_SESSION['scriptcase']['charset'] = (isset($this->Nm_lang['Nm_charset']) && !empty($this->Nm_lang['Nm_charset'])) ? $this->Nm_lang['Nm_charset'] : "UTF-8";
      ini_set('default_charset', $_SESSION['scriptcase']['charset']);
      $_SESSION['scriptcase']['charset_html']  = (isset($this->sc_charset[$_SESSION['scriptcase']['charset']])) ? $this->sc_charset[$_SESSION['scriptcase']['charset']] : $_SESSION['scriptcase']['charset'];

      asort($this->Nm_lang_conf_region);
      foreach ($this->Nm_lang_conf_region as $ind => $dados)
      {
         if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
         {
             $this->Nm_lang_conf_region[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
         }
      }
      if (isset($this->Nm_lang['lang_errm_dbcn_conn']))
      {
          $_SESSION['scriptcase']['db_conn_error'] = $this->Nm_lang['lang_errm_dbcn_conn'];
      }
      if (!function_exists("mb_convert_encoding"))
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_xtmb'] . "</font></div>";exit;
      } 
      elseif (!function_exists("sc_convert_encoding"))
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_xtsc'] . "</font></div>";exit;
      } 
      foreach ($this->Nm_conf_reg[$this->str_conf_reg] as $ind => $dados)
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
          {
              $this->Nm_conf_reg[$this->str_conf_reg][$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
      }
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
      if (isset($_SESSION['sc_session']['SC_parm_violation']))
      {
          unset($_SESSION['sc_session']['SC_parm_violation']);
          echo "<html>";
          echo "<body>";
          echo "<table align=\"center\" width=\"50%\" border=1 height=\"50px\">";
          echo "<tr>";
          echo "   <td align=\"center\">";
          echo "       <b><font size=4>" . $this->Nm_lang['lang_errm_ajax_data'] . "</font>";
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          echo "</body>";
          echo "</html>";
          exit;
      }
      $PHP_ver = str_replace(".", "", phpversion()); 
      if (substr($PHP_ver, 0, 3) < 434)
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_phpv'] . "</font></div>";exit;
      }
      if (file_exists($this->path_libs . "/ver.dat"))
      {
          $SC_ver = file($this->path_libs . "/ver.dat"); 
          $SC_ver = str_replace(".", "", $SC_ver[0]); 
          if (substr($SC_ver, 0, 5) < 40015)
          {
              echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_incp'] . "</font></div>";exit;
          } 
      } 
      if (-1 != version_compare(phpversion(), '5.0.0'))
      {
         $this->path_grafico    = $this->root . $this->path_prod . "/third/jpgraph5/src";
      }
      else
      {
          $this->path_grafico    = $this->root . $this->path_prod . "/third/jpgraph4/src";
      }
      $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['path_doc'] = $this->path_doc; 
      $_SESSION['scriptcase']['nm_path_prod'] = $this->root . $this->path_prod . "/"; 
      $_SESSION['scriptcase']['nm_root_cep']  = $this->root; 
      $_SESSION['scriptcase']['nm_path_cep']  = $this->path_cep; 
      if (empty($this->path_imag_cab))
      {
          $this->path_imag_cab = $this->path_img_global;
      }
      if (!is_dir($this->root . $this->path_prod))
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #11a6d7; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_disabled { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #7d7d7d; font-weight: normal; background-color: #e6e6e6; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmousedown { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #5D6D7E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmouseover { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #5D6D7E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_small { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #34495E; border-style: solid; border-width: 1px; padding: 3px 13px;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:hover { text-decoration: none; font-size: 12px; color: #0000AA;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_cmlb_nfnd'] . "</font>";
          echo "  " . $this->root . $this->path_prod;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan']) || $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan'] != 'app_sync_apps_mob')) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_back'] ?>" title="<?php echo $this->Nm_lang['lang_btns_back_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
              else 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_exit'] ?>" title="<?php echo $this->Nm_lang['lang_btns_exit_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
          } 
          exit ;
      }

      $this->path_atual  = getcwd();
      $opsys = strtolower(php_uname());

      $this->nm_cont_lin       = 0;
      $this->nm_limite_lin     = 0;
      $this->nm_limite_lin_prt = 0;
// 
      include_once($this->path_adodb . "/adodb.inc.php"); 
      $this->sc_Include($this->path_libs . "/nm_sec_prod.php", "F", "nm_reg_prod") ; 
      $this->sc_Include($this->path_libs . "/nm_ini_perfil.php", "F", "perfil_lib") ; 
      if(function_exists('set_php_timezone'))  set_php_timezone('app_sync_apps_mob'); 
      $this->sc_Include($this->path_lib_php . "/nm_data.class.php", "C", "nm_data") ; 
      $this->sc_Include($this->path_lib_php . "/nm_edit.php", "F", "nmgp_Form_Num_Val") ; 
      $this->sc_Include($this->path_lib_php . "/nm_conv_dados.php", "F", "nm_conv_limpa_dado") ; 
      $this->sc_Include($this->path_lib_php . "/nm_functions.php", "", "") ; 
      $this->nm_data = new nm_data("es");
      global $inicial_app_sync_apps_mob, $NM_run_iframe;
      if ((isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_flag) && $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_flag) || (isset($_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['embutida_call']) && $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['embutida_call']) || $NM_run_iframe == 1)
      {
           $_SESSION['scriptcase']['sc_ctl_ajax'] = 'part';
      }
      perfil_lib($this->path_libs);
      if (!isset($_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil']))
      {
          if(function_exists("nm_check_perfil_exists")) nm_check_perfil_exists($this->path_libs, $this->path_prod);
          $_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil'] = true;
      }
      if (function_exists("nm_check_pdf_server")) $this->server_pdf = nm_check_pdf_server($this->path_libs, $this->server_pdf);
      if (!isset($_SESSION['scriptcase']['sc_num_img']) || empty($_SESSION['scriptcase']['sc_num_img']))
      { 
          $_SESSION['scriptcase']['sc_num_img'] = 1; 
      } 
      $this->regionalDefault();
      $this->sc_tem_trans_banco = false;
      $this->nm_bases_access     = array("access", "ado_access");
      $this->nm_bases_db2        = array("db2", "db2_odbc", "odbc_db2", "odbc_db2v6");
      $this->nm_bases_ibase      = array("ibase", "firebird", "borland_ibase");
      $this->nm_bases_informix   = array("informix", "informix72", "pdo_informix");
      $this->nm_bases_mssql      = array("mssql", "ado_mssql", "odbc_mssql", "mssqlnative", "pdo_sqlsrv");
      $this->nm_bases_mysql      = array("mysql", "mysqlt", "maxsql", "pdo_mysql");
      $this->nm_bases_postgres   = array("postgres", "postgres64", "postgres7", "pdo_pgsql");
      $this->nm_bases_oracle     = array("oci8", "oci805", "oci8po", "odbc_oracle", "oracle");
      $this->nm_bases_sqlite     = array("sqlite", "sqlite3", "pdosqlite");
      $this->nm_bases_sybase     = array("sybase");
      $this->nm_bases_vfp        = array("vfp");
      $this->nm_bases_odbc       = array("odbc");
      $this->nm_bases_all        = array_merge($this->nm_bases_access, $this->nm_bases_db2, $this->nm_bases_ibase, $this->nm_bases_informix, $this->nm_bases_mssql, $this->nm_bases_mysql, $this->nm_bases_postgres, $this->nm_bases_oracle, $this->nm_bases_sqlite, $this->nm_bases_sybase, $this->nm_bases_vfp, $this->nm_bases_odbc);
      $_SESSION['scriptcase']['nm_bases_security']  = "enc_nm_enc_v1HQJKH9FUDSN7V5BqDMNOVIBOHEF/DoNUHQBsH9BODSrYHQBOHgveDkXKDWF/ZuBOD9XsH9BiHAveD5NUHgNKDkBOV5FYHMBiHQNmZkFGZ1vOZMJwHgNKHErCH5F/HIFGDcBiDQFaZ1vCD5F7DMzGZSJqH5XCHMB/HQBqZkFGDSvmV5X7HgNOZSJ3HEFaHMFaHQXsH9FUDSzGD5F7DMvOZSNiDuX7HMF7HQXGH9BqD1vsD5rqDEBOHEFiHEFqDoF7DcJUZSBiZ1zGVWFaHgvOVcFeDWF/HIraHQJmVIJsD1NaV5X7DMvCHErCDuFaHIJwHQNmDuBqHIvsD5F7DMzGZSJqH5XKVENUHQXOH9BqD1vsV5X7HgNKDkB/DuFaHINUHQJKZSBiHAvCV5FGHuNOVcFKHEFYVoBqDcBwH9BqZ1vOZMJwHgvsHArsHEFqHIraHQBiH9BiDSvCD5F7DMvmZSJqH5XKVEraHQJmZkFGHAzGV5X7HgvsHENiH5FYHMBqHQNwZ9XGD1vOD5F7DMzGVIB/HEF/HMBOHQJmVINUD1zGD5rqDEBOHEFiHEFqDoF7DcJUZ9rqDSvCD5FaDMNaZSrCDWXCHMBqDcJUVIraHArKV5X7DEvsHEXeDuFYZuFaD9JKDQFGHAveD5rqHgrKV9FiDWXCHMBqHQBsZ1rqD1NaD5raDMBYHEJGDWr/VoB/DcJUDQJwD1BeD5BOHuNODkFCDuX7DoJsHQFYZ1FUHArKZMJeDEBOZSJGH5FGDoNUDcJeZSX7HArYD5NUHgNKVcrsDWFYVoFGDcJUZkFUHArKV5FaDEBeHEJGH5F/VoJeDcBwDQFGHAvmV5BiHuNODkBODWBmVoFaD9BiZ1F7HIveV5FaDEBOHAFKDWF/VoBOD9XsZSFGHAvmV5BiHuNOVcFKHEFYVoBqDcJUZ1B/Z1NOD5JeDEBeHEXeV5XCVoBqHQXGZ9JeD1BeD5rqHuvmVcBOH5B7VoBqHQXOZkBiDSNOHuFUDMvCHENiHEXCHIJwDcBiDuBOZ1BYHQBODMBOVcXKHEFYHMBODcFYZ1FUZ1rYHuFaHgBeZSJ3DWr/HIXGHQXOZ9rqZ1BYV5FaDMvsVcXKHEF/HMFGHQXOVIJwD1rwV5FGDEBeHEXeH5X/DoF7HQNwDuBqDSN7HuF7DMNOV9FeDWF/VoBiDcNmZ1FUZ1rYHuFaDMvCHArsDWFqHINUHQXsDuBOZ1BYHQXGDMvOVIBsHEF/HINUDcFYZkFUZ1rYHQBiDMvCHArCDWX7HIraDcXGDQBOD1BeD5rqHuvmVcBOH5B7VoBqHQXOZkBiDSNOHQFUDMveHErsDWXCHIrqHQNmZ9JeZ1BYV5FaDMzGVIBsDuFqHIBiHQNmVIJwZ1rYHQFGHgNOHErCHEXCHMJeHQNwZ9rqZ1BYHQXGDMNODkB/DWXCHINUHQXOVIJwD1rwV5FGDEBeHEXeH5X/DoF7HQNwDuBqDSvCVWJwDMzGDkB/DWJeHMJsHQBqZkFUZ1rYHuXGHgNODkXKHEFqHMX7DcXGDuBOZ1BYHuB/DMBYVIB/H5FqHIBiHQXGVIJwZ1rYHQFUDMvCZSJqDWBmDoXGHQJKZ9rqD1BeD5rqHuvmVcBOH5B7VoBqHQXOZkBiDSNOHQraHgveVkJ3DuFYHIX7DcBiZ9JeZ1BYHQJeDMNOZSJqDurGVEraHQXOVIraZ1vOZMFaHgBOHENiHEFqHMBiHQJeDQBOZ1BYHQF7DMrYDkBsV5FYHIraHQXGZkFUD1rwV5FGDEBeHEXeH5X/DoF7HQNwDuBqDSvCV5BqHgrwV9FeV5FYHIFUHQXGVIraZ1rYHQNUHgveVkJqH5FYHIX7HQFYDuBOZ1zGVWBqDMBYVcFeV5F/VoBiHQXGVIraZ1rYHQFGHgBeHArsDurmDoJeHQXsZ9rqD1BeD5rqHuvmVcBOH5B7VoBqHQXOZkBiDSNOHuBOHgBeVkJ3H5FYHMJsHQXsDuBOZ1zGV5BqDMrYDkB/H5FqHIFUHQNwZkFUZ1rYHQXGHgNOHENiH5F/HIJeHQXOZ9rqZ1BYV5FaHgvOVcFeV5X/VErqDcFYVIJwD1rwV5FGDEBeHEXeH5X/DoF7HQNmDQBqDSvCV5BqDMBOVcXKDWFYHMJsHQJmZkFUZ1rYHQJeDMvCVkJqHEB7ZuXGHQNwZ9rqZ1BYHuFUHgvOVcFeHEBmVErqHQJmVIJwZ1vOZMB/DMvCHErCDWB3ZuJeDcBiDQBOD1BeD5rqHuvmVcBOH5B7VoBqD9XOH9B/D1rwD5BiDErKHEFiDWX7ZuFaD9JKDQB/Z1NaV5JwHuvmVcFKV5X7DoXGDcJUZkFUZ1BeD5NUDEBOHEBUDWXCDoraD9NwZSX7DSBYV5BqDMvOZSrCV5X7VorqD9BiZ1B/HAN7V5FGDEBeHEXeH5FYDoFUD9JKDQJwD1veD5F7HuNOVcFiV5X7VoFGDcBqH9FaHAN7V5JeDErKHEBUH5F/DoF7DcJeDQFGD1BeD5JwDMrwZSJ3H5FqDoJeD9JmZ1B/D1NaD5rqDErKZSXeH5FYDoFUD9JKDQJsZ1rwV5BqHuBYVcXKV5X7DoF7D9BsZ1F7HABYZMFaDMBYZSXeHEFqVoFaD9JKDQFGHABYD5F7DMrwVIBODur/VoraD9BsVIJwZ1NOD5JeDEvsHErCDWF/VoBiDcJUZSX7Z1BYHuFaHuNOVIFCH5FqVENUHQBsZ1FGD1rKD5NUHgvsZSJ3DWX7HIFGD9NmDuBqHANOHuBiDMNOVIBsDWXCDoJsDcBwH9B/Z1rYHQJwHgvCZSXeDWX7DoBOD9NwDQB/Z1rwV5BqHuBOVcBOV5F/VoBqDcNwH9B/HABYD5BqDErKHEBUH5FYDoFUD9XsDQX7Z1rwV5X7DMrwVIFCDWXCDoX7D9XOZ1FGHArKV5FUDMrYZSXeV5FqHIJsHQJKDQJsZ1vCV5FGHuNOV9FeDWXCVoFGD9BiH9BOHArYD5JeDMveHEBUH5F/ZuBOHQBiDQX7HIrKHuBqDMrYVIBsH5XCDoraHQJmZ1F7Z1vmD5rqDEBOHArCDWF/VoB/D9NwDQB/Z1rwV5X7HuzGVIBOV5X7DoJsD9XGZSB/HArYHQJwDEBODkFeH5FYVoFGHQJKDQBqHAvmV5JeDMvOV9BUDWBmVoF7HQNmZkBiHAzGD5BqHgBeHEFiV5B3DoF7D9XsDuFaHAveV5FUDMzGZSNiDuX7HMB/HQXOZSBqHANOHuB/DENOHEFiDWXCDoJsHQJeDQFaD1vOVWJsDMvsVcFCDur/HMBiD9BsVIraD1rwV5X7HgBeHEFiV5FqDoraD9NwH9X7DSBYV5JwHgNKVcFKV5FYVEraD9BiZ1F7DSrYD5JeDMrYHErsDWFGZuJeHQXGZ9XGHAvOVWBqDMvsV9FeDWXCDoJsDcBwH9B/Z1rYHQJwHgBYHEFKV5B3DoBO";
      $this->prep_conect();
      $this->conectDB();
      if (!in_array(strtolower($this->nm_tpbanco), $this->nm_bases_all))
      {
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nspt'] . "</font>";
          echo "  " . $perfil_trab;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan']) || $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan'] != 'app_sync_apps_mob')) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
                  echo "<a href='" . $_SESSION['scriptcase']['nm_sc_retorno'] . "' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_Blue_Daniel_bvoltar.gif' title='" . $this->Nm_lang['lang_btns_rtrn_scrp_hint'] . "' align=absmiddle></a> \n" ; 
              } 
              else 
              { 
                  echo "<a href='$nm_url_saida' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_Blue_Daniel_bsair.gif' title='" . $this->Nm_lang['lang_btns_exit_appl_hint'] . "' align=absmiddle></a> \n" ; 
              } 
          } 
          exit ;
      } 
   }
   function prep_conect()
   {
      $con_devel             =  (isset($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao'])) ? $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao'] : ""; 
      $perfil_trab           = ""; 
      $this->nm_falta_var    = ""; 
      $this->nm_falta_var_db = ""; 
      $nm_crit_perfil        = false;
      if (isset($_SESSION['scriptcase']['sc_connection']) && !empty($_SESSION['scriptcase']['sc_connection']))
      {
          foreach ($_SESSION['scriptcase']['sc_connection'] as $NM_con_orig => $NM_con_dest)
          {
              if (isset($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao']) && $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_perfil']) && $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_perfil'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_perfil'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['app_sync_apps_mob']['glo_con_' . $NM_con_orig]))
              {
                  $_SESSION['scriptcase']['app_sync_apps_mob']['glo_con_' . $NM_con_orig] = $NM_con_dest;
              }
          }
      }
      if (isset($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao']))
      {
          db_conect_devel($con_devel, $this->root . $this->path_prod, 'alert', 2); 
          if (empty($_SESSION['scriptcase']['glo_tpbanco']) && empty($_SESSION['scriptcase']['glo_banco']))
          {
              $nm_crit_perfil = true;
          }
      }
      if (isset($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_perfil']) && !empty($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_perfil'];
      }
      elseif (isset($_SESSION['scriptcase']['glo_perfil']) && !empty($_SESSION['scriptcase']['glo_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['glo_perfil'];
      }
      if (!empty($perfil_trab))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = "";
          carrega_perfil($perfil_trab, $this->path_libs, "S");
          if (empty($_SESSION['scriptcase']['glo_senha_protect']))
          {
              $nm_crit_perfil = true;
          }
      }
      else
      {
          $perfil_trab = $con_devel;
      }
// 
      if (!isset($_SESSION['scriptcase']['glo_tpbanco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_tpbanco; ";
          }
      }
      else
      {
          $this->nm_tpbanco = $_SESSION['scriptcase']['glo_tpbanco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_servidor']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_servidor; ";
          }
      }
      else
      {
          $this->nm_servidor = $_SESSION['scriptcase']['glo_servidor']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_banco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_banco; ";
          }
      }
      else
      {
          $this->nm_banco = $_SESSION['scriptcase']['glo_banco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_usuario']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_usuario; ";
          }
      }
      else
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_usuario']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_senha']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_senha; ";
          }
      }
      else
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_senha']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_autocommit']))
      {
          $this->nm_con_db2['db2_autocommit'] = $_SESSION['scriptcase']['glo_db2_autocommit']; 
      }
      if (isset($_SESSION['scriptcase']['glo_database_encoding']))
      {
          $this->nm_database_encoding = $_SESSION['scriptcase']['glo_database_encoding']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_lib']))
      {
          $this->nm_con_db2['db2_i5_lib'] = $_SESSION['scriptcase']['glo_db2_i5_lib']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_naming']))
      {
          $this->nm_con_db2['db2_i5_naming'] = $_SESSION['scriptcase']['glo_db2_i5_naming']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_commit']))
      {
          $this->nm_con_db2['db2_i5_commit'] = $_SESSION['scriptcase']['glo_db2_i5_commit']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_query_optimize']))
      {
          $this->nm_con_db2['db2_i5_query_optimize'] = $_SESSION['scriptcase']['glo_db2_i5_query_optimize']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_persistent']))
      {
          $this->nm_con_persistente = $_SESSION['scriptcase']['glo_use_persistent']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_schema']))
      {
          $this->nm_con_use_schema = $_SESSION['scriptcase']['glo_use_schema']; 
      }
      $this->date_delim  = "'";
      $this->date_delim1 = "'";
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_access))
      {
          $this->date_delim  = "#";
          $this->date_delim1 = "#";
      }
      if (isset($_SESSION['scriptcase']['glo_decimal_db']) && !empty($_SESSION['scriptcase']['glo_decimal_db']))
      {
         $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['decimal_db'] = $_SESSION['scriptcase']['glo_decimal_db']; 
      }
      if (isset($_SESSION['scriptcase']['glo_date_separator']) && !empty($_SESSION['scriptcase']['glo_date_separator']))
      {
          $SC_temp = trim($_SESSION['scriptcase']['glo_date_separator']);
          if (strlen($SC_temp) == 2)
          {
              $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['SC_sep_date']  = substr($SC_temp, 0, 1); 
              $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['SC_sep_date1'] = substr($SC_temp, 1, 1); 
          }
          else
          {
              $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['SC_sep_date']  = $SC_temp; 
              $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['SC_sep_date1'] = $SC_temp; 
          }
          $this->date_delim  = $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['SC_sep_date'];
          $this->date_delim1 = $_SESSION['sc_session'][$this->sc_page]['app_sync_apps']['SC_sep_date1'];
      }
      if (empty($this->nm_tabela))
      {
          $this->nm_tabela = ""; 
      }
// 
      if (!empty($this->nm_falta_var) || !empty($this->nm_falta_var_db) || $nm_crit_perfil)
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #11a6d7; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_disabled { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #7d7d7d; font-weight: normal; background-color: #e6e6e6; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmousedown { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #5D6D7E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmouseover { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #5D6D7E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_small { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #34495E; border-style: solid; border-width: 1px; padding: 3px 13px;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:hover { text-decoration: none; font-size: 12px; color: #0000AA;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          if (empty($this->nm_falta_var_db))
          {
              if (!empty($this->nm_falta_var))
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_glob'] . "</font>";
                  echo "  " . $this->nm_falta_var;
                  echo "   </b></td>";
                  echo " </tr>";
              }
              if ($nm_crit_perfil)
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nfnd'] . "</font>";
                  echo "  " . $perfil_trab;
                  echo "   </b></td>";
                  echo " </tr>";
              }
          }
          else
          {
              echo "<tr>";
              echo "   <td bgcolor=\"\">";
              echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_data'] . "</font></b>";
              echo "   </td>";
              echo " </tr>";
          }
          echo "</table>";
          if (!$_SESSION['sc_session'][$this->sc_page]['app_sync_apps_mob']['iframe_menu'] && (!isset($_SESSION['sc_session'][$this->sc_page]['app_sync_apps_mob']['sc_outra_jan']) || $_SESSION['sc_session'][$this->sc_page]['app_sync_apps_mob']['sc_outra_jan'] != 'app_sync_apps_mob')) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_back'] ?>" title="<?php echo $this->Nm_lang['lang_btns_back_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
              else 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_exit'] ?>" title="<?php echo $this->Nm_lang['lang_btns_exit_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
          } 
          exit ;
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_usr']) && !empty($_SESSION['scriptcase']['glo_db_master_usr']))
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_db_master_usr']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_pass']) && !empty($_SESSION['scriptcase']['glo_db_master_pass']))
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_db_master_pass']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_cript']) && !empty($_SESSION['scriptcase']['glo_db_master_cript']))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = $_SESSION['scriptcase']['glo_db_master_cript']; 
      }
  } 
// 
  function conectDB()
  {
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && isset($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao']))
      { 
          $this->Db = db_conect_devel($_SESSION['scriptcase']['app_sync_apps_mob']['glo_nm_conexao'], $this->root . $this->path_prod, 'alert'); 
      } 
      else 
      { 
         if (!isset($this->nm_con_persistente))
         {
            $this->nm_con_persistente = 'N';
         }
         if (!isset($this->nm_con_db2))
         {
            $this->nm_con_db2 = '';
         }
         if (!isset($this->nm_database_encoding))
         {
            $this->nm_database_encoding = '';
         }
         $this->Db = db_conect($this->nm_tpbanco, $this->nm_servidor, $this->nm_usuario, $this->nm_senha, $this->nm_banco, $glo_senha_protect, "S", $this->nm_con_persistente, $this->nm_con_db2, $this->nm_database_encoding); 
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_ibase))
      {
          if (function_exists('ibase_timefmt'))
          {
              ibase_timefmt('%Y-%m-%d %H:%M:%S');
          } 
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_sybase))
      {
          $this->Db->fetchMode = ADODB_FETCH_BOTH;
          $this->Db->Execute("set dateformat ymd");
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_mssql))
      {
          $this->Db->Execute("set dateformat ymd");
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_oracle))
      {
          $this->Db->Execute("alter session set nls_date_format = 'yyyy-mm-dd hh24:mi:ss'");
          $this->Db->Execute("alter session set nls_numeric_characters = '.,'");
          $_SESSION['sc_session'][$this->sc_page]['app_sync_apps_mob']['decimal_db'] = "."; 
      } 
  }
// 

   function regionalDefault($sConfReg = '')
   {
      if ('' == $sConfReg)
      {
         $sConfReg = $this->str_conf_reg;
      }

      $_SESSION['scriptcase']['reg_conf']['date_format']           = (isset($this->Nm_conf_reg[$sConfReg]['data_format']))              ?  $this->Nm_conf_reg[$sConfReg]['data_format']                  : "ddmmyyyy";
      $_SESSION['scriptcase']['reg_conf']['date_sep']              = (isset($this->Nm_conf_reg[$sConfReg]['data_sep']))                 ?  $this->Nm_conf_reg[$sConfReg]['data_sep']                     : "/";
      $_SESSION['scriptcase']['reg_conf']['date_week_ini']         = (isset($this->Nm_conf_reg[$sConfReg]['prim_dia_sema']))            ?  $this->Nm_conf_reg[$sConfReg]['prim_dia_sema']                : "SU";
      $_SESSION['scriptcase']['reg_conf']['time_format']           = (isset($this->Nm_conf_reg[$sConfReg]['hora_format']))              ?  $this->Nm_conf_reg[$sConfReg]['hora_format']                  : "hhiiss";
      $_SESSION['scriptcase']['reg_conf']['time_sep']              = (isset($this->Nm_conf_reg[$sConfReg]['hora_sep']))                 ?  $this->Nm_conf_reg[$sConfReg]['hora_sep']                     : ":";
      $_SESSION['scriptcase']['reg_conf']['time_pos_ampm']         = (isset($this->Nm_conf_reg[$sConfReg]['hora_pos_ampm']))            ?  $this->Nm_conf_reg[$sConfReg]['hora_pos_ampm']                : "right_without_space";
      $_SESSION['scriptcase']['reg_conf']['time_simb_am']          = (isset($this->Nm_conf_reg[$sConfReg]['hora_simbolo_am']))          ?  $this->Nm_conf_reg[$sConfReg]['hora_simbolo_am']              : "am";
      $_SESSION['scriptcase']['reg_conf']['time_simb_pm']          = (isset($this->Nm_conf_reg[$sConfReg]['hora_simbolo_pm']))          ?  $this->Nm_conf_reg[$sConfReg]['hora_simbolo_pm']              : "pm";
      $_SESSION['scriptcase']['reg_conf']['simb_neg']              = (isset($this->Nm_conf_reg[$sConfReg]['num_sinal_neg']))            ?  $this->Nm_conf_reg[$sConfReg]['num_sinal_neg']                : "-";
      $_SESSION['scriptcase']['reg_conf']['grup_num']              = (isset($this->Nm_conf_reg[$sConfReg]['num_sep_agr']))              ?  $this->Nm_conf_reg[$sConfReg]['num_sep_agr']                  : ".";
      $_SESSION['scriptcase']['reg_conf']['dec_num']               = (isset($this->Nm_conf_reg[$sConfReg]['num_sep_dec']))              ?  $this->Nm_conf_reg[$sConfReg]['num_sep_dec']                  : ",";
      $_SESSION['scriptcase']['reg_conf']['neg_num']               = (isset($this->Nm_conf_reg[$sConfReg]['num_format_num_neg']))       ?  $this->Nm_conf_reg[$sConfReg]['num_format_num_neg']           : 2;
      $_SESSION['scriptcase']['reg_conf']['monet_simb']            = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_simbolo']))        ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_simbolo']            : "$";
      $_SESSION['scriptcase']['reg_conf']['monet_f_pos']           = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_pos'])) ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_pos']     : 3;
      $_SESSION['scriptcase']['reg_conf']['monet_f_neg']           = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_neg'])) ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_neg']     : 13;
      $_SESSION['scriptcase']['reg_conf']['grup_val']              = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_sep_agr']))        ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_sep_agr']            : ".";
      $_SESSION['scriptcase']['reg_conf']['dec_val']               = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_sep_dec']))        ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_sep_dec']            : ",";
      $_SESSION['scriptcase']['reg_conf']['num_group_digit']       = (isset($this->Nm_conf_reg[$sConfReg]['num_group_digit']))          ?  $this->Nm_conf_reg[$sConfReg]['num_group_digit']              : "1";
      $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_group_digit']))    ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_group_digit']        : "1";
      $_SESSION['scriptcase']['reg_conf']['html_dir']              = (isset($this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl']))              ?  " DIR='" . $this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl'] . "'" : "";
      $_SESSION['scriptcase']['reg_conf']['css_dir']               = (isset($this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl']))              ?  $this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl'] : "LTR";
      if ('' == $_SESSION['scriptcase']['reg_conf']['num_group_digit'])
      {
          $_SESSION['scriptcase']['reg_conf']['num_group_digit'] = '1';
      }
      if ('' == $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'])
      {
          $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = '1';
      }
   }
   function sc_Include($path, $tp, $name)
   {
       if ((empty($tp) && empty($name)) || ($tp == "F" && !function_exists($name)) || ($tp == "C" && !class_exists($name)))
       {
           include_once($path);
       }
   } // sc_Include
   function sc_Sql_Protect($var, $tp, $conex="")
   {
       if (empty($conex) || $conex == "conn_mysql")
       {
           $TP_banco = $_SESSION['scriptcase']['glo_tpbanco'];
       }
       else
       {
           eval ("\$TP_banco = \$this->nm_con_" . $conex . "['tpbanco'];");
       }
       if ($tp == "date")
       {
           $delim  = "'";
           $delim1 = "'";
           if (in_array(strtolower($TP_banco), $this->nm_bases_access))
           {
               $delim  = "#";
               $delim1 = "#";
           }
           elseif ($TP_banco == 'pdo_sqlsrv')
           {
               $delim  = "";
               $delim1 = "";
           }
           if (isset($_SESSION['sc_session'][$this->sc_page]['app_sync_apps_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->sc_page]['app_sync_apps_mob']['SC_sep_date']))
           {
               $delim  = $_SESSION['sc_session'][$this->sc_page]['app_sync_apps_mob']['SC_sep_date'];
               $delim1 = $_SESSION['sc_session'][$this->sc_page]['app_sync_apps_mob']['SC_sep_date1'];
           }
           return $delim . $var . $delim1;
       }
       else
       {
           return $var;
       }
   } // sc_Sql_Protect
}
//===============================================================================
class app_sync_apps_mob_edit
{
    var $contr_app_sync_apps_mob;
    function inicializa()
    {
        global $nm_opc_lookup, $nm_opc_php, $script_case_init;
        require_once("app_sync_apps_mob_apl.php");
        $this->contr_app_sync_apps_mob = new app_sync_apps_mob_apl();
    }
}
if (!function_exists("NM_is_utf8"))
{
    include_once("../_lib/lib/php/nm_utf8.php");
}
ob_start();
//
//----------------  
//
    $_SESSION['scriptcase']['app_sync_apps_mob']['contr_erro'] = 'off';
    if (!function_exists("NM_is_utf8"))
    {
        include_once("../_lib/lib/php/nm_utf8.php");
    }
    if (!function_exists("SC_dir_app_ini"))
    {
        include_once("../_lib/lib/php/nm_ctrl_app_name.php");
    }
    SC_dir_app_ini('alert');
    $sc_conv_var = array();
    if (!empty($_FILES))
    {
        foreach ($_FILES as $nmgp_campo => $nmgp_valores)
        {
             if (isset($sc_conv_var[$nmgp_campo]))
             {
                 $nmgp_campo = $sc_conv_var[$nmgp_campo];
             }
             elseif (isset($sc_conv_var[strtolower($nmgp_campo)]))
             {
                 $nmgp_campo = $sc_conv_var[strtolower($nmgp_campo)];
             }
             $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
             $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
             $$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
             $$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
             $$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
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
             if (isset($sc_conv_var[$nmgp_var]))
             {
                 $nmgp_var = $sc_conv_var[$nmgp_var];
             }
             elseif (isset($sc_conv_var[strtolower($nmgp_var)]))
             {
                 $nmgp_var = $sc_conv_var[strtolower($nmgp_var)];
             }
             nm_limpa_str_app_sync_apps_mob($nmgp_val);
             $$nmgp_var = $nmgp_val;
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
             if (isset($sc_conv_var[$nmgp_var]))
             {
                 $nmgp_var = $sc_conv_var[$nmgp_var];
             }
             elseif (isset($sc_conv_var[strtolower($nmgp_var)]))
             {
                 $nmgp_var = $sc_conv_var[strtolower($nmgp_var)];
             }
             nm_limpa_str_app_sync_apps_mob($nmgp_val);
             $$nmgp_var = $nmgp_val;
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
    if (isset($SC_where_pdf) && !empty($SC_where_pdf))
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['where_filter'] = $SC_where_pdf;
    }

    if (isset($_POST['rs']) && !is_array($_POST['rs']) && 'ajax_' == substr($_POST['rs'], 0, 5) && isset($_POST['rsargs']) && !empty($_POST['rsargs']))
    {
        if ('ajax_app_sync_apps_mob_validate_sync' == $_POST['rs'])
        {
            $sync = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_app_sync_apps_mob_submit_form' == $_POST['rs'])
        {
            $sync = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][1]);
            $nmgp_url_saida = NM_utf8_urldecode($_POST['rsargs'][2]);
            $nmgp_opcao = NM_utf8_urldecode($_POST['rsargs'][3]);
            $nmgp_ancora = NM_utf8_urldecode($_POST['rsargs'][4]);
            $nmgp_num_form = NM_utf8_urldecode($_POST['rsargs'][5]);
            $nmgp_parms = NM_utf8_urldecode($_POST['rsargs'][6]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][7]);
            $csrf_token = NM_utf8_urldecode($_POST['rsargs'][8]);
        }
        if ('ajax_app_sync_apps_mob_navigate_form' == $_POST['rs'])
        {
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_opcao = NM_utf8_urldecode($_POST['rsargs'][1]);
            $nmgp_ordem = NM_utf8_urldecode($_POST['rsargs'][2]);
            $nmgp_arg_dyn_search = NM_utf8_urldecode($_POST['rsargs'][3]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][4]);
        }
    }

    if (!empty($glo_perfil))  
    { 
        $_SESSION['scriptcase']['glo_perfil'] = $glo_perfil;
    }   
    if (isset($glo_servidor)) 
    {
        $_SESSION['scriptcase']['glo_servidor'] = $glo_servidor;
    }
    if (isset($glo_banco)) 
    {
        $_SESSION['scriptcase']['glo_banco'] = $glo_banco;
    }
    if (isset($glo_tpbanco)) 
    {
        $_SESSION['scriptcase']['glo_tpbanco'] = $glo_tpbanco;
    }
    if (isset($glo_usuario)) 
    {
        $_SESSION['scriptcase']['glo_usuario'] = $glo_usuario;
    }
    if (isset($glo_senha)) 
    {
        $_SESSION['scriptcase']['glo_senha'] = $glo_senha;
    }
    if (isset($glo_senha_protect)) 
    {
        $_SESSION['scriptcase']['glo_senha_protect'] = $glo_senha_protect;
    }
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['lig_edit_lookup']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['lig_edit_lookup']     = false;
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['lig_edit_lookup_cb']  = '';
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['lig_edit_lookup_row'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_call']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_call'] = false;
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_proc']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_proc'] = false;
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_form_insert']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_form_insert'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_form_update']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_form_update'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_form_delete']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_form_delete'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_form_btn_nav']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_form_btn_nav'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_grid_edit']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_grid_edit'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_grid_edit_link']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_grid_edit_link'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_qtd_reg']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_qtd_reg'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_tp_pag']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_liga_tp_pag'] = '';
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_modal']))
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_modal'] = isset($_GET['nmgp_url_saida']) && 'modal' == $_GET['nmgp_url_saida'];
    } 
    if (isset($script_case_init) && !is_array($script_case_init) && $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_proc'])
    {
        return;
    }
    if (isset($script_case_init) && !is_array($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_parms']))
    { 
        $tmp_nmgp_parms = '';
        if (isset($nmgp_parms) && '' != $nmgp_parms)
        {
            $tmp_nmgp_parms = $nmgp_parms . '?@?';
        }
        $nmgp_parms = $tmp_nmgp_parms . $_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_parms'];
        unset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_parms']);
    } 
    if (isset($nmgp_parms) && !empty($nmgp_parms) && !is_array($nmgp_parms)) 
    { 
        if (isset($_SESSION['nm_aba_bg_color'])) 
        { 
            unset($_SESSION['nm_aba_bg_color']);
        }   
        $nmgp_parms = NM_decode_input($nmgp_parms);
        $nmgp_parms = str_replace("@aspass@", "'", $nmgp_parms);
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
               nm_limpa_str_app_sync_apps_mob($cadapar[1]);
               if (isset($sc_conv_var[$cadapar[0]]))
               {
                   $cadapar[0] = $sc_conv_var[$cadapar[0]];
               }
               elseif (isset($sc_conv_var[strtolower($cadapar[0])]))
               {
                   $cadapar[0] = $sc_conv_var[strtolower($cadapar[0])];
               }
               if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
               $$cadapar[0] = $cadapar[1];
           }
           $ix++;
        }
    } 
    elseif (isset($script_case_init) && !empty($script_case_init) && !is_array($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['parms']))
    {
        if (!isset($nmgp_opcao) || ($nmgp_opcao != "incluir" && $nmgp_opcao != "novo" && $nmgp_opcao != "recarga" && $nmgp_opcao != "muda_form"))
        {
            $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['parms']);
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
               $$cadapar[0] = $cadapar[1];
               $ix++;
            }
        }
    } 
    if (isset($script_case_init) && $script_case_init != preg_replace('/[^0-9.]/', '', $script_case_init))
    {
        unset($script_case_init);
    }
    if (!isset($script_case_init) || empty($script_case_init) || is_array($script_case_init))
    {
        $script_case_init = rand(2, 10000);
    }
    $salva_run = "N";
    $salva_iframe = false;
    if (isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['iframe_menu']))
    {
        $salva_iframe = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['iframe_menu'];
        unset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['iframe_menu']);
    }
    if (isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe']))
    {
        $salva_run = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'];
        unset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe']);
    }
    if (isset($nm_run_menu) && $nm_run_menu == 1)
    {
        if (isset($_SESSION['scriptcase']['sc_aba_iframe']) && isset($_SESSION['scriptcase']['sc_apl_menu_atual']))
        {
            foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
            {
                if ($aba == $_SESSION['scriptcase']['sc_apl_menu_atual'])
                {
                    unset($_SESSION['scriptcase']['sc_aba_iframe'][$aba]);
                    break;
                }
            }
        }
        $_SESSION['scriptcase']['sc_apl_menu_atual'] = "app_sync_apps_mob";
        $achou = false;
        if (isset($_SESSION['sc_session'][$script_case_init]))
        {
            foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
            {
                if ($nome_apl == 'app_sync_apps_mob' || $achou)
                {
                    unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                    if (!empty($_SESSION['sc_session'][$script_case_init][$nome_apl]))
                    {
                        $achou = true;
                    }
                }
            }
            if (!$achou && isset($nm_apl_menu))
            {
                foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
                {
                    if ($nome_apl == $nm_apl_menu || $achou)
                    {
                        $achou = true;
                        if ($nome_apl != $nm_apl_menu)
                        {
                            unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                        }
                    }
                }
            }
        }
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['iframe_menu']  = true;
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['mostra_cab']   = "S";
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe']   = "N";
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['retorno_edit'] = "";
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe']  = $salva_run;
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['iframe_menu'] = $salva_iframe;
    }

    if (!isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['db_changed']))
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['db_changed'] = false;
    }
    if (isset($_GET['nmgp_outra_jan']) && 'true' == $_GET['nmgp_outra_jan'] && isset($_GET['nmgp_url_saida']) && 'modal' == $_GET['nmgp_url_saida'])
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['db_changed'] = false;
    }

    if (isset($_SESSION['scriptcase']['sc_outra_jan']) && $_SESSION['scriptcase']['sc_outra_jan'] == 'app_sync_apps_mob')
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan'] = true;
         unset($_SESSION['scriptcase']['sc_outra_jan']);
    }
    if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
    {
        if (isset($nmgp_url_saida) && $nmgp_url_saida == "modal")
        {
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_modal'] = true;
            $nm_url_saida = "app_sync_apps_mob_fim.php"; 
        }
        $nm_apl_dependente = 0;
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan'] = true;
    }
    $STR_lang    = (isset($_SESSION['scriptcase']['str_lang']) && !empty($_SESSION['scriptcase']['str_lang'])) ? $_SESSION['scriptcase']['str_lang'] : "es";
    $NM_arq_lang = "../_lib/lang/" . $STR_lang . ".lang.php";
    $Nm_lang = array();
    if (is_file($NM_arq_lang))
    {
        $Lixo = file($NM_arq_lang);
        foreach ($Lixo as $Cada_lin) 
        {
            if (strpos($Cada_lin, "array()") === false && (trim($Cada_lin) != "<?php")  && (trim($Cada_lin) != "?" . ">"))
            {
                eval (str_replace("\$this->", "\$", $Cada_lin));
            }
        }
    }
    $_SESSION['scriptcase']['charset'] = (isset($Nm_lang['Nm_charset']) && !empty($Nm_lang['Nm_charset'])) ? $Nm_lang['Nm_charset'] : "UTF-8";
    ini_set('default_charset', $_SESSION['scriptcase']['charset']);
    foreach ($Nm_lang as $ind => $dados)
    {
       if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
       {
           $Nm_lang[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
       }
    }

    if (!isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['initialize']))
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['initialize'] = true;
    }
    elseif (!isset($_SERVER['HTTP_REFERER']))
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['initialize'] = false;
    }
    elseif (false === strpos($_SERVER['HTTP_REFERER'], '/app_sync_apps/'))
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['initialize'] = true;
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['initialize'] = false;
    }

    if (isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['first_time']))
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['first_time'] = false;
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['first_time'] = true;
    }

    $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['menu_desenv'] = false;   
    if (!defined("SC_ERROR_HANDLER"))
    {
        define("SC_ERROR_HANDLER", 1);
    }
    include_once(dirname(__FILE__) . "/app_sync_apps_mob_erro.php");
    $nm_browser = strpos($_SERVER['HTTP_USER_AGENT'], "Konqueror") ;
    if (is_int($nm_browser))   
    {
        $nm_browser = "Konqueror"; 
    } 
    else  
    {
        $nm_browser = strpos($_SERVER['HTTP_USER_AGENT'], "Opera") ;
        if (is_int($nm_browser))   
        {
            $nm_browser = "Opera"; 
        }
    } 
    $_SESSION['scriptcase']['change_regional_old'] = '';
    $_SESSION['scriptcase']['change_regional_new'] = '';
    if (!empty($nmgp_opcao) && ($nmgp_opcao == "change_lang_t" || $nmgp_opcao == "change_lang_b" || $nmgp_opcao == "change_lang_f" || $nmgp_opcao == "force_lang"))  
    {
        $Temp_lang = $nmgp_opcao == "force_lang" ? explode(";" , $nmgp_idioma) : explode(";" , $nmgp_idioma_novo);  
        if (isset($Temp_lang[0]) && !empty($Temp_lang[0]))  
        { 
            $_SESSION['scriptcase']['str_lang'] = $Temp_lang[0];
        } 
        if (isset($Temp_lang[1]) && !empty($Temp_lang[1])) 
        { 
            $_SESSION['scriptcase']['change_regional_old'] = (isset($_SESSION['scriptcase']['str_conf_reg']) && !empty($_SESSION['scriptcase']['str_conf_reg'])) ? $_SESSION['scriptcase']['str_conf_reg'] : "es_es";
            $_SESSION['scriptcase']['str_conf_reg']        = $Temp_lang[1];
            $_SESSION['scriptcase']['change_regional_new'] = $_SESSION['scriptcase']['str_conf_reg'];
        } 
        $nmgp_opcao = $nmgp_opcao == "force_lang" ? "inicio" : "recarga";
    } 
    if (!empty($nmgp_opcao) && ($nmgp_opcao == "change_schema_t" || $nmgp_opcao == "change_schema_b" || $nmgp_opcao == "change_schema_f"))  
    {
        if ($nmgp_opcao == "change_schema_t")  
        {
            $nmgp_schema = $nmgp_schema_t . "/" . $nmgp_schema_t;  
        } 
        elseif ($nmgp_opcao == "change_schema_b")  
        {
            $nmgp_schema = $nmgp_schema_b . "/" . $nmgp_schema_b;  
        } 
        else 
        {
            $nmgp_schema = $nmgp_schema_f . "/" . $nmgp_schema_f;  
        } 
        $_SESSION['scriptcase']['str_schema_all'] = $nmgp_schema;
        $nmgp_opcao = "recarga";  
    } 
    if (!empty($nmgp_opcao) && $nmgp_opcao == "lookup")  
    {
        $nm_opc_lookup = $nmgp_opcao;
    }
    elseif (!empty($nmgp_opcao) && $nmgp_opcao == "formphp")  
    {
        $nm_opc_form_php = $nmgp_opcao;
    }
    else
    {
        if (!empty($nmgp_opcao))  
        {
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['opcao'] = $nmgp_opcao ; 
        }
        if (!empty($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_redirect_apl']))
        {
            $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_redirect_apl']; 
            $nm_apl_dependente = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_redirect_tp']; 
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_redirect_apl'] = "";
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_redirect_tp'] = "";
            $nm_url_saida = "app_sync_apps_mob_fim.php"; 
        }
        elseif (isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan'] == 'true')
        {
               $nm_url_saida = "app_sync_apps_mob_fim.php"; 
        }
        elseif ($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "R")
        {
           $nm_url_saida = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ""; 
           $nm_url_saida = str_replace("_fim.php", ".php", $nm_url_saida); 
            $nm_saida_global = $nm_url_saida;
            if (!empty($nmgp_url_saida) && empty($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['retorno_edit'])) 
            {
                $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['retorno_edit'] = $nmgp_url_saida ; 
            } 
            if (!empty($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['retorno_edit'])) 
            {
                $nm_url_saida = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['retorno_edit'] . "?script_case_init=" . $script_case_init . "&script_case_session=" . session_id();  
                $nm_apl_dependente = 1 ; 
                $nm_saida_global = $nm_url_saida;
            } 
            if ($nm_apl_dependente != 1) 
            { 
                $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] = "N"; 
            } 
            if ($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "R" && (!isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_call']) || !$_SESSION['sc_session'][$script_case_init]['app_sync_apps']['embutida_call']))
            { 
                $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $nm_url_saida; 
                $nm_url_saida = "app_sync_apps_mob_fim.php"; 
                $_SESSION['scriptcase']['sc_tp_saida'] = "P"; 
                if ($nm_apl_dependente == 1) 
                { 
                    $_SESSION['scriptcase']['sc_tp_saida'] = "D"; 
                } 
                if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1) 
                { 
                    $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['scriptcase']['nm_sc_retorno']; 
                } 
            } 
        }
        if (empty($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_tp']) && $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "R")
        {
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_php'] = $nm_url_saida;
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_apl'] = $nm_saida_global;
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_ss']  = (isset($_SESSION['scriptcase']['sc_url_saida'][$script_case_init])) ? $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] : "";
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_dep'] = $nm_apl_dependente;
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_tp']  = (isset($_SESSION['scriptcase']['sc_tp_saida'])) ? $_SESSION['scriptcase']['sc_tp_saida'] : "";
        }
        $nm_url_saida = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_php'];
        $nm_saida_global = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_php'];
        $nm_apl_dependente = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_dep'];
        if ($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "R" && !empty($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_ss'])) 
        { 
            $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_ss'];
            $_SESSION['scriptcase']['sc_tp_saida']  = $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['volta_tp'];
        } 
        if ($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] == "R") 
        { 
            if (!empty($nmgp_url_saida) && empty($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['retorno_edit'])) 
            {
                $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['retorno_edit'] = $nmgp_url_saida . "?script_case_init=" . $script_case_init . "&script_case_session=" . session_id(); 
            } 
        } 
        if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['run_iframe'] != "R") 
        { 
            $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['menu_desenv'] = true;   
        } 
    }
    if (isset($nmgp_redir)) 
    { 
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['redir'] = $nmgp_redir;   
    } 
    if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
    {
        $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan'] = true;
         if ($nmgp_url_saida == "modal")
         {
             $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_modal'] = true;
             $nm_url_saida = "app_sync_apps_mob_fim.php"; 
         }
    }
    if (isset($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['sc_outra_jan'])
    {
        $nm_apl_dependente = 0;
    }
    $GLOBALS["NM_ERRO_IBASE"] = 0;  
    if (isset($_SESSION['nm_session']['user']['sec']['flag']) && $_SESSION['nm_session']['user']['sec']['flag'] == "N") 
    { 
        $_SESSION['scriptcase']['sc_apl_seg']['app_sync_apps'] = "on";
    } 
    if (!isset($_SESSION['scriptcase']['sc_apl_seg']['app_sync_apps']) || $_SESSION['scriptcase']['sc_apl_seg']['app_sync_apps'] != "on")
    { 
        $NM_Mens_Erro = $Nm_lang['lang_errm_unth_user'];
        $nm_botao_ok = ($_SESSION['sc_session'][$script_case_init]['app_sync_apps_mob']['iframe_menu']) ? false : true;
        if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
        {
            foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
            {
                if (in_array("app_sync_apps_mob", $apls_aba))
                {
                    $nm_botao_ok = false;
                     break;
                }
            }
        }
      $str_schema_app = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "bluedaniel/bluedaniel";
       $str_button_app = trim($str_button);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

        <HTML>
         <HEAD>
          <TITLE></TITLE>
          <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

        if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
        {
?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
        }

?>
          <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>          <META http-equiv="Pragma" content="no-cache"/>
          <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $str_schema_app ?>_form.css" />
          <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $str_schema_app ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
          <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $str_button_app . '/' . $str_button_app ?>.css" />
         </HEAD>
         <body class="scFormPage">
          <div class="scFormBorder">
          <table align="center" style="width: 100%" class="scFormTable"><tr><td class="scFormDataOdd" style="padding: 15px 30px; text-align: center">
           <?php echo $NM_Mens_Erro; ?>
<?php
        if ($nm_botao_ok)
        {
            $trab_path             = explode("/", $_SERVER['PHP_SELF']);
            $trab_count_path       = count($trab_path);
            $path_retorno_aplicacao  = "";
            for ($ix = 0; $ix + 2 < $trab_count_path; $ix++)
            {
                 $path_retorno_aplicacao .=  $trab_path[$ix] . "/";
            }
            $path_retorno_aplicacao .=  "" . SC_dir_app_name('app_Login') . "/";
            $nm_redirect = $path_retorno_aplicacao;
?>
          <br />
          <form name="Fseg" method="post" 
                              action="<?php echo $nm_redirect; ?>" 
                              target="_self"> 
           <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($script_case_init); ?>"/> 
           <input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"/> 
           <input type="submit" name="sc_sai_seg" value="OK" class="" > 
          </form> 
          <script type="text/javascript">
            function nm_move()
            { }
            function nm_atualiza()
            { }
          </script> 
<?php
        }
?>
          </td></tr></table>
          </div>
<?php
       if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']))
       {
?>
<br /><br /><br />
<div class="scFormBorder">
 <table align="center" style="width: 450px" class="scFormTable">
  <tr>
   <td class="scFormDataOdd" style="padding: 15px 30px">
    <?php echo $Nm_lang['lang_errm_unth_hwto']; ?>
   </td>
  </tr>
 </table>
</div>
<?php
       }
?>
         </body>
        </HTML>
<?php
        exit;
    } 
    $inicial_app_sync_apps_mob = new app_sync_apps_mob_edit();
    $inicial_app_sync_apps_mob->inicializa();

    if (!defined('SC_SAJAX_LOADED'))
    {
        include_once(dirname(__FILE__) . '/app_sync_apps_mob_sajax.php');
        define('SC_SAJAX_LOADED', 'YES');
    }
    if (!class_exists('Services_JSON'))
    {
        include_once(dirname(__FILE__) . '/app_sync_apps_mob_json.php');
    }
    $sajax_request_type = "POST";
    sajax_init();
    //$sajax_debug_mode = 1;
    sajax_export("ajax_app_sync_apps_mob_validate_sync");
    sajax_export("ajax_app_sync_apps_mob_submit_form");
    sajax_export("ajax_app_sync_apps_mob_navigate_form");
    sajax_handle_client_request();

    $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->controle();
//
    function nm_limpa_str_app_sync_apps_mob(&$str)
    {
        if (get_magic_quotes_gpc())
        {
            if (is_array($str))
            {
                foreach ($str as $x => $cada_str)
                {
                    $str[$x] = str_replace("@aspasd@", '"', $str[$x]);
                    $str[$x] = stripslashes($str[$x]);
                }
            }
            else
            {
                $str = str_replace("@aspasd@", '"', $str);
                $str = stripslashes($str);
            }
        }
    }

    function ajax_app_sync_apps_mob_validate_sync($sync, $script_case_init)
    {
        global $inicial_app_sync_apps_mob;
        //register_shutdown_function("app_sync_apps_mob_pack_ajax_response");
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_flag          = true;
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_opcao         = 'validate_sync';
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param'] = array(
                  'sync' => NM_utf8_urldecode($sync),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->controle();
        exit;
    } // ajax_validate_sync

    function ajax_app_sync_apps_mob_submit_form($sync, $nm_form_submit, $nmgp_url_saida, $nmgp_opcao, $nmgp_ancora, $nmgp_num_form, $nmgp_parms, $script_case_init, $csrf_token)
    {
        global $inicial_app_sync_apps_mob;
        //register_shutdown_function("app_sync_apps_mob_pack_ajax_response");
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_flag          = true;
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_opcao         = 'submit_form';
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param'] = array(
                  'sync' => NM_utf8_urldecode($sync),
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'nmgp_url_saida' => NM_utf8_urldecode($nmgp_url_saida),
                  'nmgp_opcao' => NM_utf8_urldecode($nmgp_opcao),
                  'nmgp_ancora' => NM_utf8_urldecode($nmgp_ancora),
                  'nmgp_num_form' => NM_utf8_urldecode($nmgp_num_form),
                  'nmgp_parms' => NM_utf8_urldecode($nmgp_parms),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'csrf_token' => NM_utf8_urldecode($csrf_token),
                  'buffer_output' => true,
                 );
        if ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->controle();
        exit;
    } // ajax_submit_form

    function ajax_app_sync_apps_mob_navigate_form($nm_form_submit, $nmgp_opcao, $nmgp_ordem, $nmgp_arg_dyn_search, $script_case_init)
    {
        global $inicial_app_sync_apps_mob;
        //register_shutdown_function("app_sync_apps_mob_pack_ajax_response");
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_flag          = true;
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_opcao         = 'navigate_form';
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param'] = array(
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'nmgp_opcao' => NM_utf8_urldecode($nmgp_opcao),
                  'nmgp_ordem' => NM_utf8_urldecode($nmgp_ordem),
                  'nmgp_arg_dyn_search' => NM_utf8_urldecode($nmgp_arg_dyn_search),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->controle();
        exit;
    } // ajax_navigate_form


   function app_sync_apps_mob_pack_ajax_response()
   {
      global $inicial_app_sync_apps_mob;
      $aResp = array();

      if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['empty_filter']))
      {
          $aResp['empty_filter'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['empty_filter'];
      }
      if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['dyn_search']['NM_Dynamic_Search']))
      {
          $aResp['dyn_search']['NM_Dynamic_Search'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['dyn_search']['NM_Dynamic_Search'];
      }
      if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str']))
      {
          $aResp['dyn_search']['id_dyn_search_cmd_str'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'];
      }
      if ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['calendarReload'])
      {
         $aResp['result'] = 'CALENDARRELOAD';
      }
      elseif ('' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['autoComp'])
      {
         $aResp['result'] = 'AUTOCOMP';
      }
//mestre_detalhe
      elseif (!empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['newline']))
      {
         $aResp['result'] = 'NEWLINE';
         ob_end_clean();
      }
      elseif (!empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['tableRefresh']))
      {
         $aResp['result'] = 'TABLEREFRESH';
      }
//-----
      elseif (!empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['errList']))
      {
         $aResp['result'] = 'ERROR';
      }
      elseif (!empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['fldList']))
      {
         $aResp['result'] = 'SET';
      }
      else
      {
         $aResp['result'] = 'OK';
      }
      if ('AUTOCOMP' == $aResp['result'])
      {
         $aResp = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['autoComp'];
      }
//mestre_detalhe
      elseif ('NEWLINE' == $aResp['result'])
      {
         $aResp = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['newline'];
      }
      else
//-----
      {
         $aResp['ajaxRequest'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_opcao;
         if ('CALENDARRELOAD' == $aResp['result'])
         {
            app_sync_apps_mob_pack_calendar_reload($aResp);
         }
         elseif ('ERROR' == $aResp['result'])
         {
            app_sync_apps_mob_pack_ajax_errors($aResp);
         }
         elseif ('SET' == $aResp['result'])
         {
            app_sync_apps_mob_pack_ajax_set_fields($aResp);
         }
         elseif ('TABLEREFRESH' == $aResp['result'])
         {
            app_sync_apps_mob_pack_ajax_set_fields($aResp);
            $aResp['tableRefresh'] = app_sync_apps_mob_pack_protect_string($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['tableRefresh']);
         }
         if ('OK' == $aResp['result'] || 'SET' == $aResp['result'])
         {
            app_sync_apps_mob_pack_ajax_ok($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['focus']) && '' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['focus'])
         {
            $aResp['setFocus'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['focus'];
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['closeLine']) && '' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['closeLine'])
         {
            $aResp['closeLine'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['closeLine'];
         }
         else
         {
            $aResp['closeLine'] = 'N';
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['clearUpload']) && '' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['clearUpload'])
         {
            $aResp['clearUpload'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['clearUpload'];
         }
         else
         {
            $aResp['clearUpload'] = 'N';
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['masterValue']) && '' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['masterValue'])
         {
            app_sync_apps_mob_pack_master_value($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxAlert']) && '' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxAlert'])
         {
            app_sync_apps_mob_pack_ajax_alert($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']) && '' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage'])
         {
            app_sync_apps_mob_pack_ajax_message($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxJavascript']) && '' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxJavascript'])
         {
            app_sync_apps_mob_pack_ajax_javascript($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redir']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redir']))
         {
            app_sync_apps_mob_pack_ajax_redir($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redirExit']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redirExit']))
         {
            app_sync_apps_mob_pack_ajax_redir_exit($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['blockDisplay']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['blockDisplay']))
         {
            app_sync_apps_mob_pack_ajax_block_display($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['fieldDisplay']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['fieldDisplay']))
         {
            app_sync_apps_mob_pack_ajax_field_display($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['buttonDisplay']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['buttonDisplay']))
         {
            $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['buttonDisplay'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->nmgp_botoes;
            app_sync_apps_mob_pack_ajax_button_display($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['fieldLabel']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['fieldLabel']))
         {
            app_sync_apps_mob_pack_ajax_field_label($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['readOnly']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['readOnly']))
         {
            app_sync_apps_mob_pack_ajax_readonly($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navStatus']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navStatus']))
         {
            app_sync_apps_mob_pack_ajax_nav_status($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navSummary']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navSummary']))
         {
            app_sync_apps_mob_pack_ajax_nav_Summary($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navPage']))
         {
            app_sync_apps_mob_pack_ajax_navPage($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['btnVars']) && !empty($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['btnVars']))
         {
            app_sync_apps_mob_pack_ajax_btn_vars($aResp);
         }
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['quickSearchRes']) && $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['quickSearchRes'])
         {
            $aResp['quickSearchRes'] = 'Y';
         }
         else
         {
            $aResp['quickSearchRes'] = 'N';
         }
         $aResp['htmOutput'] = '';
                   ob_end_clean();
      }
      if (is_array($aResp))
      {
          $oJson = new Services_JSON();
          echo "var res = " . trim(sajax_get_js_repr($oJson->encode($aResp))) . "; res;";
      }
      else
      {
          echo "var res = " . trim(sajax_get_js_repr($aResp)) . "; res;";
      }
      exit;
   } // app_sync_apps_mob_pack_ajax_response

   function app_sync_apps_mob_pack_calendar_reload(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['calendarReload'] = 'OK';
   } // app_sync_apps_mob_pack_calendar_reload

   function app_sync_apps_mob_pack_ajax_errors(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['errList'] = array();
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['errList'] as $sField => $aMsg)
      {
         if ('geral_app_sync_apps_mob' == $sField)
         {
             $aMsg = app_sync_apps_mob_pack_ajax_remove_erros($aMsg);
         }
         foreach ($aMsg as $sMsg)
         {
            $iNumLinha = (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param']['nmgp_refresh_row']) && 'geral_app_sync_apps_mob' != $sField)
                       ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param']['nmgp_refresh_row'] : "";
            $aResp['errList'][] = array('fldName'  => $sField,
                                        'msgText'  => app_sync_apps_mob_pack_protect_string(NM_charset_to_utf8($sMsg)),
                                        'numLinha' => $iNumLinha);
         }
      }
   } // app_sync_apps_mob_pack_ajax_errors

   function app_sync_apps_mob_pack_ajax_remove_erros($aErrors)
   {
       $aNewErrors = array();
       if (!empty($aErrors))
       {
           $sErrorMsgs = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), implode('<br />', $aErrors));
           $aErrorMsgs = explode('<BR>', $sErrorMsgs);
           foreach ($aErrorMsgs as $sErrorMsg)
           {
               $sErrorMsg = trim($sErrorMsg);
               if ('' != $sErrorMsg && !in_array($sErrorMsg, $aNewErrors))
               {
                   $aNewErrors[] = $sErrorMsg;
               }
           }
       }
       return $aNewErrors;
   } // app_sync_apps_mob_pack_ajax_remove_erros

   function app_sync_apps_mob_pack_ajax_ok(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $iNumLinha = (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param']['nmgp_refresh_row']))
                 ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param']['nmgp_refresh_row'] : "";
      $aResp['msgDisplay'] = array('msgText'  => app_sync_apps_mob_pack_protect_string($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['msgDisplay']),
                                   'numLinha' => $iNumLinha);
   } // app_sync_apps_mob_pack_ajax_ok

   function app_sync_apps_mob_pack_ajax_set_fields(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $iNumLinha = (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param']['nmgp_refresh_row']))
                 ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['param']['nmgp_refresh_row'] : "";
      if ('' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['rsSize'])
      {
         $aResp['rsSize'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['rsSize'];
      }
      $aResp['fldList'] = array();
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['fldList'] as $sField => $aData)
      {
         $aField = array();
         if (isset($aData['colNum']))
         {
            $aField['colNum'] = $aData['colNum'];
         }
         if (isset($aData['row']))
         {
            $aField['row'] = $aData['row'];
         }
         if (isset($aData['imgFile']))
         {
            $aField['imgFile'] = app_sync_apps_mob_pack_protect_string($aData['imgFile']);
         }
         if (isset($aData['imgOrig']))
         {
            $aField['imgOrig'] = app_sync_apps_mob_pack_protect_string($aData['imgOrig']);
         }
         if (isset($aData['imgLink']))
         {
            $aField['imgLink'] = app_sync_apps_mob_pack_protect_string($aData['imgLink']);
         }
         if (isset($aData['keepImg']))
         {
            $aField['keepImg'] = $aData['keepImg'];
         }
         if (isset($aData['hideName']))
         {
            $aField['hideName'] = $aData['hideName'];
         }
         if (isset($aData['docLink']))
         {
            $aField['docLink'] = app_sync_apps_mob_pack_protect_string($aData['docLink']);
         }
         if (isset($aData['docIcon']))
         {
            $aField['docIcon'] = app_sync_apps_mob_pack_protect_string($aData['docIcon']);
         }
         if (isset($aData['keyVal']))
         {
            $aField['keyVal'] = $aData['keyVal'];
         }
         if (isset($aData['optComp']))
         {
            $aField['optComp'] = $aData['optComp'];
         }
         if (isset($aData['optClass']))
         {
            $aField['optClass'] = $aData['optClass'];
         }
         if (isset($aData['optMulti']))
         {
            $aField['optMulti'] = $aData['optMulti'];
         }
         if (isset($aData['lookupCons']))
         {
            $aField['lookupCons'] = $aData['lookupCons'];
         }
         if (isset($aData['imgHtml']))
         {
            $aField['imgHtml'] = app_sync_apps_mob_pack_protect_string($aData['imgHtml']);
         }
         if (isset($aData['mulHtml']))
         {
            $aField['mulHtml'] = app_sync_apps_mob_pack_protect_string($aData['mulHtml']);
         }
         if (isset($aData['updInnerHtml']))
         {
            $aField['updInnerHtml'] = $aData['updInnerHtml'];
         }
         if (isset($aData['htmComp']))
         {
            $aField['htmComp'] = str_replace("'", '__AS__', str_replace('"', '__AD__', $aData['htmComp']));
         }
         $aField['fldName']  = $sField;
         $aField['fldType']  = $aData['type'];
         $aField['numLinha'] = $iNumLinha;
         $aField['valList']  = array();
         foreach ($aData['valList'] as $iIndex => $sValue)
         {
            $aValue = array();
            if (isset($aData['labList'][$iIndex]))
            {
               $aValue['label'] = app_sync_apps_mob_pack_protect_string($aData['labList'][$iIndex]);
            }
            $aValue['value']     = ('_autocomp' != substr($sField, -9)) ? app_sync_apps_mob_pack_protect_string($sValue) : $sValue;
            $aField['valList'][] = $aValue;
         }
         foreach ($aField['valList'] as $iIndex => $aFieldData)
         {
             if ("null" == $aFieldData['value'])
             {
                 $aField['valList'][$iIndex]['value'] = '';
             }
         }
         if (isset($aData['optList']) && false !== $aData['optList'])
         {
            if (is_array($aData['optList']))
            {
               $aField['optList'] = array();
               foreach ($aData['optList'] as $aOptList)
               {
                  foreach ($aOptList as $sValue => $sLabel)
                  {
                     $sOpt = ($sValue !== $sLabel) ? $sValue : $sLabel;
                     $aField['optList'][] = array('value' => app_sync_apps_mob_pack_protect_string($sOpt),
                                                  'label' => app_sync_apps_mob_pack_protect_string($sLabel));
                  }
               }
            }
            else
            {
               $aField['optList'] = $aData['optList'];
            }
         }
         $aResp['fldList'][] = $aField;
      }
   } // app_sync_apps_mob_pack_ajax_set_fields

   function app_sync_apps_mob_pack_ajax_redir(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aInfo              = array('metodo', 'action', 'target', 'nmgp_parms', 'nmgp_outra_jan', 'nmgp_url_saida', 'script_case_init', 'script_case_session', 'h_modal', 'w_modal');
      $aResp['redirInfo'] = array();
      foreach ($aInfo as $sTag)
      {
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redir'][$sTag]))
         {
            $aResp['redirInfo'][$sTag] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redir'][$sTag];
         }
      }
   } // app_sync_apps_mob_pack_ajax_redir

   function app_sync_apps_mob_pack_ajax_redir_exit(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aInfo                  = array('metodo', 'action', 'target', 'nmgp_parms', 'nmgp_outra_jan', 'nmgp_url_saida', 'script_case_init', 'script_case_session');
      $aResp['redirExitInfo'] = array();
      foreach ($aInfo as $sTag)
      {
         if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redirExit'][$sTag]))
         {
            $aResp['redirExitInfo'][$sTag] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['redirExit'][$sTag];
         }
      }
   } // app_sync_apps_mob_pack_ajax_redir_exit

   function app_sync_apps_mob_pack_master_value(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['masterValue'] as $sIndex => $sValue)
      {
         $aResp['masterValue'][] = array('index' => $sIndex,
                                         'value' => $sValue);
      }
   } // app_sync_apps_mob_pack_master_value

   function app_sync_apps_mob_pack_ajax_alert(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['ajaxAlert'] = array('message' => $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxAlert']['message']);
   } // app_sync_apps_mob_pack_ajax_alert

   function app_sync_apps_mob_pack_ajax_message(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['ajaxMessage'] = array('message'      => app_sync_apps_mob_pack_protect_string($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['message']),
                                    'title'        => app_sync_apps_mob_pack_protect_string($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['title']),
                                    'modal'        => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['modal'])        ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['modal']        : 'N',
                                    'timeout'      => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['timeout'])      ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['timeout']      : '',
                                    'button'       => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['button'])       ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['button']       : '',
                                    'button_label' => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['button_label']) ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['button_label'] : 'Ok',
                                    'top'          => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['top'])          ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['top']          : '',
                                    'left'         => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['left'])         ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['left']         : '',
                                    'width'        => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['width'])        ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['width']        : '',
                                    'height'       => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['height'])       ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['height']       : '',
                                    'redir'        => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['redir'])        ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['redir']        : '',
                                    'show_close'   => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['show_close'])   ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['show_close']   : 'Y',
                                    'body_icon'    => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['body_icon'])    ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['body_icon']    : 'Y',
                                    'redir_target' => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['redir_target']) ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['redir_target'] : '',
                                    'redir_par'    => isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['redir_par'])    ? $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxMessage']['redir_par']    : '');
   } // app_sync_apps_mob_pack_ajax_message

   function app_sync_apps_mob_pack_ajax_javascript(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['ajaxJavascript'] as $aJsFunc)
      {
         $aResp['ajaxJavascript'][] = $aJsFunc;
      }
   } // app_sync_apps_mob_pack_ajax_javascript

   function app_sync_apps_mob_pack_ajax_block_display(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['blockDisplay'] = array();
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['blockDisplay'] as $sBlockName => $sBlockStatus)
      {
        $aResp['blockDisplay'][] = array($sBlockName, $sBlockStatus);
      }
   } // app_sync_apps_mob_pack_ajax_block_display

   function app_sync_apps_mob_pack_ajax_field_display(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['fieldDisplay'] = array();
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['fieldDisplay'] as $sFieldName => $sFieldStatus)
      {
        $aResp['fieldDisplay'][] = array($sFieldName, $sFieldStatus);
      }
   } // app_sync_apps_mob_pack_ajax_field_display

   function app_sync_apps_mob_pack_ajax_button_display(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['buttonDisplay'] = array();
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['buttonDisplay'] as $sButtonName => $sButtonStatus)
      {
        $aResp['buttonDisplay'][] = array($sButtonName, $sButtonStatus);
      }
   } // app_sync_apps_mob_pack_ajax_button_display

   function app_sync_apps_mob_pack_ajax_field_label(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['fieldLabel'] = array();
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['fieldLabel'] as $sFieldName => $sFieldLabel)
      {
        $aResp['fieldLabel'][] = array($sFieldName, app_sync_apps_mob_pack_protect_string($sFieldLabel));
      }
   } // app_sync_apps_mob_pack_ajax_field_label

   function app_sync_apps_mob_pack_ajax_readonly(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['readOnly'] = array();
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['readOnly'] as $sFieldName => $sFieldStatus)
      {
        $aResp['readOnly'][] = array($sFieldName, $sFieldStatus);
      }
   } // app_sync_apps_mob_pack_ajax_readonly

   function app_sync_apps_mob_pack_ajax_nav_status(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['navStatus'] = array();
      if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navStatus']['ret']) && '' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navStatus']['ret'])
      {
         $aResp['navStatus']['ret'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navStatus']['ret'];
      }
      if (isset($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navStatus']['ava']) && '' != $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navStatus']['ava'])
      {
         $aResp['navStatus']['ava'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navStatus']['ava'];
      }
   } // app_sync_apps_mob_pack_ajax_nav_status

   function app_sync_apps_mob_pack_ajax_nav_Summary(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['navSummary'] = array();
      $aResp['navSummary']['reg_ini'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navSummary']['reg_ini'];
      $aResp['navSummary']['reg_qtd'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navSummary']['reg_qtd'];
      $aResp['navSummary']['reg_tot'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navSummary']['reg_tot'];
   } // app_sync_apps_mob_pack_ajax_nav_Summary

   function app_sync_apps_mob_pack_ajax_navPage(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['navPage'] = $inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['navPage'];
   } // app_sync_apps_mob_pack_ajax_navPage


   function app_sync_apps_mob_pack_ajax_btn_vars(&$aResp)
   {
      global $inicial_app_sync_apps_mob;
      $aResp['btnVars'] = array();
      foreach ($inicial_app_sync_apps_mob->contr_app_sync_apps_mob->NM_ajax_info['btnVars'] as $sBtnName => $sBtnValue)
      {
        $aResp['btnVars'][] = array($sBtnName, app_sync_apps_mob_pack_protect_string($sBtnValue));
      }
   } // app_sync_apps_mob_pack_ajax_btn_vars

   function app_sync_apps_mob_pack_protect_string($sString)
   {
      $sString = (string) $sString;

      if (!empty($sString))
      {
         if (function_exists('NM_is_utf8') && NM_is_utf8($sString))
         {
             return $sString;
         }
         else
         {
/*             return htmlentities($sString, ENT_COMPAT, $_SESSION['scriptcase']['charset']); */
             return sc_htmlentities($sString);
         }
      }
      elseif ('0' === $sString || 0 === $sString)
      {
         return '0';
      }
      else
      {
         return '';
      }
   } // app_sync_apps_mob_pack_protect_string
?>
