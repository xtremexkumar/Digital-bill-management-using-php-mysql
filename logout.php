

<?php

ob_start();
session_start();
unset($_SESSION['rainbow_username']);
unset($_SESSION['rainbow_uid']);

echo '<script type="text/javascript">window.location="login.php"; </script>';


?>