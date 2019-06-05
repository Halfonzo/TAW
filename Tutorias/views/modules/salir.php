<?php

session_start();
setcookie("nivel", "", time()-3600);
unset($_COOKIE["nivel"]);
session_destroy();

echo '<script type="text/javascript">
                    window.location.replace("../Practica7/index.php");
                  </script>';

?>