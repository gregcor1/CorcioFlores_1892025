<?php

require("classes/estudiantes.class.php");

$Estudiante = Estudiante();

$resultado = $resultado->obtenerEstudiante();

header("Content-Type: Applicaton/json");
echos(json_encode($resultado));

?>