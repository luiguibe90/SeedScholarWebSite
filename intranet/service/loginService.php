<?php
include 'mainService.php';

class LoginService extends MainService {

    function login($userName, $password) {
        $result = $this->conex->query("SELECT * FROM USUARIO WHERE NOMBRE_USUARIO='$userName' ");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row['CLAVE'] == $password) {
                return $row;
            }
        }
        return null;
    }
}


?>