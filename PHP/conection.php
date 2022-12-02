<?php
$mysqli = new mysqli("localhost", 'usuario', '123');
$mysqli->select_db('ocio') or die('Error en la conexion');
