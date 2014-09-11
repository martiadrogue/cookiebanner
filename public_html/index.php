<?php

$cookies_alert = '';
if (isset($_GET['accept-cookies'])) {
  setcookie('accept-cookies', 'true', time() + 31556925);
  header('Location: ./');
}

$html = file_get_contents('index.html');
echo $html;
