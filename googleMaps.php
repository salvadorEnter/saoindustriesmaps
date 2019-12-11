<?php
$gps_latitud = $_REQUEST['gps_latitud'];
$gps_longitud = $_REQUEST['gps_longitud'];
echo $gps_latitud;
echo '<br>';
echo $gps_longitud;
echo '<script type="text/javascript">
 window.location = "https://www.google.com/maps/embed/v1/place?key=AIzaSyCVh5NcPi98UVoKI6wTVpiVBDZOht4rltc&q='. $gps_latitud .','. $gps_longitud .'";
</script>';
      ?>

