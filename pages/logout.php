<?php

  foreach ($_COOKIE as $cookieName => $cookieValue) {
    setcookie($cookieName, '', time() - 3600, '/');
  }

  header('Location: login.php');

?>