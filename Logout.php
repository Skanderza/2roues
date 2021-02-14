<?php
session_start();
session_destroy();
echo'destry ok';
header('Location: http://localhost:8888/2roues/index.php');
exit;
?>