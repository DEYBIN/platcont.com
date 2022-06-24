<?php
// Desactivar toda notificación de error
error_reporting(0);

//Front Controller
require("helpers.php");
controller($_GET['url']);
