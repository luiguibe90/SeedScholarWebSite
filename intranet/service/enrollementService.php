<?php
include_once 'mainService.php';
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('America/Bogota');

class enrollementService extends mainService{


    function showShedule($modulo){
        $consult = $this->conex->query("
        SELECT
	    P.COD_PERSONA AS CODALUMN,
	    concat(P.APELLIDO,',',P.NOMBRE) AS NAMEPEOPLE,
	    N.COD_NIVEL_EDUCATIVO AS LEVEL
        FROM 
	    MATRICULA_PERIODO M,
	    PERSONA P,
	    NIVEL_EDUCATIVO N
        WHERE  
	    P.COD_PERSONA=M.COD_ALUMNO
	    AND N.COD_NIVEL_EDUCATIVO=M.COD_NIVEL_EDUCATIVO
	    AND M.COD_PERIODO_LECTIVO=$modulo
        ");
        while ($row = $consult->fetch_assoc()) {    
          $datos['data'][] = $row;
        }
        echo json_encode($datos);
     }
        










}
















?>