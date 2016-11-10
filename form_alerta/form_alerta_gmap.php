<?php

session_start();

?>
<html>
<head>
 <SCRIPT type="text/javascript" src="<?php echo $_SESSION['sc_session'][ $_GET['script_case_init'] ]['googlemaps_info']['jquery_path']; ?>"></SCRIPT>
 <SCRIPT type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=<?php echo $_SESSION['scriptcase']['googlemaps_api_key']; ?>"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $_SESSION['sc_session'][ $_GET['script_case_init'] ]['googlemaps_info']['googlemaps_path']; ?>"></SCRIPT>
</head>
<body>
<?php

$sRandomId = 'id_gmap_' . md5(mt_rand(1, 1000) . microtime());
?>
<div id="<?php echo $sRandomId; ?>" style="width: <?php echo $_GET['width']; ?>px; height: <?php echo $_GET['height']; ?>px"></div>
<script type="text/javascript">
  $(document).ready(function() {
        $("#<?php echo $sRandomId; ?>").gmap3({
          marker:{
         <?php
         if ('geocode' == $_GET['type'] && is_array($_GET['data']))
         {
         ?>
              address: "<?php echo implode(' ', $_GET['data']); ?>",
         <?php
         }
         elseif ('latlng' == $_GET['type'])
         {
         ?>
              latLng: [<?php echo $_GET['latitude']; ?>,<?php echo $_GET['longitude']; ?>],
         <?php
         }
         ?>
          },
          map:{
            options:{
            <?php
            if (isset($_GET['depth']))
            {
                ?>
                zoom: <?php echo $_GET['depth']; ?>
                <?php
            }
            ?>
            }
          }
        });
  });
</script>
</body>
</html>
