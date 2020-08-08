<?php

include_once 'mainService.php';

  class studentService extends mainService{
    private $entityName = "PERSONA";
    private $cedRepresentantivet='';
    function findAll(){
      return $this->conex->query("  ");
    }
    function insertPeopleRepresentative($cedRepresentantive,$snRrepresentative,$nameRepresenative,
    $addressRepresentative,$telfRepresentative,$dateBrhRepresentative,$genderR,$pemailRepresentative){
    $cedRepresentantivet=$cedRepresentantive;
    $sql="INSERT INTO PERSONA(CEDULA, APELLIDO, NOMBRE, DIRECCION, TELEFONO, FECHA_NACIMIENTO, GENERO, CORREO_PERSONAL) VALUES (?,?,?,?,?,?,?,?)";
    $result = $this->conex->query("SELECT * FROM PERSONA WHERE CEDULA = '$cedRepresentantive' ");
    if($result->num_rows == 0){

      if( $stmt = $this->conex->prepare($sql)){
        $stmt->bind_param('ssssssss',$cedRepresentantive,$snRrepresentative,$nameRepresenative,
        $addressRepresentative,$telfRepresentative,$dateBrhRepresentative,$genderR,$pemailRepresentative);
        $stmt->execute();
        $stmt->close();
       }else {
         //var_dump($this->conex->error);
       }
       $sql1=" CALL typePeopeRepresentative(?) ";
       if($stmt1 = $this->conex->prepare($sql1)){
          $stmt1->bind_param('s',$cedRepresentantive);
          $stmt1->execute();
          $stmt1->close();
       }else {
        echo "<script>alert('Representante  insertado exitosamente');</script>";
        var_dump($this->conex->error);
        }
    }else{
      echo "<script>alert('Error, el numero de cédula ya existe..);</script>";

    }
     
    
    
    $this->conex->close();
  }

  function insertPeopleAlumn($cedAlumn,$snameAlumn,$nameAlumn,$addreAlunn,$telefAlumno,
  $dateBirthAlumn,$genderA,$emailpAlumno){
    echo "<script>alert('datos recividos..);</script>";

  $sql="INSERT INTO PERSONA(COD_PERSONA_REPRESENTANTE,CEDULA, APELLIDO, NOMBRE, DIRECCION, TELEFONO, FECHA_NACIMIENTO, GENERO, CORREO_PERSONAL) VALUES (?,?,?,?,?,?,?,?,?) ";
  $result = $this->conex->query("SELECT * FROM PERSONA WHERE CEDULA = '$cedAlumn'  ");

  if($result->num_rows == 0){

    if( $stmt = $this->conex->prepare($sql)){
      $stmt->bind_param('sssssssss',$cedRepresentantivet,$cedAlumn,$snameAlumn,$nameAlumn,$addreAlunn,$telefAlumno,
      $dateBirthAlumn,$genderA,$emailpAlumno);
      $stmt->execute();
      $stmt->close();
     }else {
       var_dump($this->conex->error);
       $erromsg=$this->conex->error;
       echo "<script>alert('$erromsg' );</script>";
     }
     $sql1=" CALL typePeopleStudent(?) ";
     if($stmt1 = $this->conex->prepare($sql1)){
        $stmt1->bind_param('s',$cedAlumn);
        $stmt1->execute();
        $stmt1->close();
     }else {
      echo "<script>alert('Alumno  insertado exitosamente');</script>";
      var_dump($this->conex->error);
      }
      


  }else{
    echo "<script>alert('Error, el numero de cédula ya existe..');</script>";
  }
  
    $this->conex->close();

  }







}



?>