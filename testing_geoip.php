<?php
  $ip = $_SERVER['HTTP_CLIENT_IP'];
  $country = geoip_country_code_by_name($ip);
  if ($country) {
    $country;
  }
?>
