<?php

session_start();

?>
<html>
<head>
 <SCRIPT type="text/javascript" src="<?php echo $_SESSION['sc_session'][ $_GET['script_case_init'] ]['googlemaps_info']['jquery_path']; ?>"></SCRIPT>
 <SCRIPT type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=<?php echo $_SESSION['scriptcase']['googlemaps_api_key']; ?>"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $_SESSION['sc_session'][ $_GET['script_case_init'] ]['googlemaps_info']['googlemaps_path']; ?>"></SCRIPT>
</head>
<body style="margin: 0">

<?php

echo $_SESSION['sc_session'][ $_GET['script_case_init'] ]['googlemaps_info'][ $_GET['gmaps_key'] ];

?>

</body>
</html>
