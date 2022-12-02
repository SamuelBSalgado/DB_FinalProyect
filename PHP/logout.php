<?php
session_start();
session_unset();
session_destroy();
header("Location: /ProyectoBD/index.php");
