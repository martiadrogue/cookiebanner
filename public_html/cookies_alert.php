<?php
$html = '';
if (!isset($_COOKIE['accept-cookies'])) {
  $html = file_get_contents('cookies_alert.html');
}

echo $html;

?>
