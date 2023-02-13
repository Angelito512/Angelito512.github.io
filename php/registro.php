<?php
// conexion a base de datos
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "formulario";

    $conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conn)
    {
        die("NO HAY CONEXION: ".mysqli_connect_error());
    }
if(isset($_POST['nombre'])) {
    $data['success']=true;
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $escuela=$_POST['escuela'];
    $carrera=$_POST['carrera'];
    $horario=$_POST['horario'];
    
    $sql="insert into registro (nombre, correo, telefono, escuela, carrera, horario) value ('".$nombre."', '".$correo."', '".$telefono."', '".$escuela."','".$carrera."', '".$horario."')";
    if (mysqli_query($conn,$sql)) {
        $data['insertado']=true;
        
      
    } else{
        $data['insertado']=false;
        $data['mensaje']=$sql;
    }
    mysqli_close($conn);
    echo json_encode($data);
}


?>