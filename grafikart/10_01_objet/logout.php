<?php
session_start();
unset($_SESSION['connecte']);
header('Location: /PHP/grafikart/10_01/login.php');
exit;
