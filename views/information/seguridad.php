<?php
session_start();
if (empty($_SESSION['_webState']) || $_SESSION['_webState']==0) {
header("location:/login");
}else if (!empty($_SESSION['_webState']) && $_SESSION['_webState']==1) {
//header("location:/change");
}else{
header("location:/login");
}
?>