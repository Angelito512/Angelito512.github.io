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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"></script>
    <link rel="stylesheet" href="css/formulario.css">
    <title>FORMULARIO
    </title>
</head>
<body>
<center><h1>AGENDA TU CITA</h1></center>
<form action="" id="registro">
           
            
               <p> INGRESA TU NOMBRE</p>
                <input type="check" placeholder="NOMBRE COMPLETO" required="" class="field" id="nombre"></input>
                
                
               <p> CORREO ELECTRONICO</p>
                <input type="check" required="" class="field" id="correo"></input>
                
            
                <p> TELEFONO </p>
                <input type="check" required="" class="field" id="telefono"></input>
                
                
                <p> ESCUELA DE PROCEDENCIA</p>
                <input type="check" required="" class="field"id="escuela"></input>
                
                
                <p> ¿QUÉ CARRERA QUIERES ELEGIR?</p>
                <input type="check" required="" class="field"id="carrera"></input>
                
                
               <p> HORARIO</p>
                <input type="check" required="" class="field"id="horario">
                
        
            <br>
            <p class="center-content"></p>
            <center><input type="submit" value="ENVIAR"><center>
            </br>
        </form>
        <script>
                $(document).ready(function(){
                    $("#registro").submit(function(){
                        alert("DATOS ENVIADOS");
                        var formData = {
                            nombre: $("#nombre").val(),
                            correo: $("#correo").val(),
                            telefono: $("#telefono").val(),
                            escuela: $("#escuela").val(),
                            carrera: $("#carrera").val(),
                            horario: $("#horario").val(),

                        } 
                        $.ajax({
                            type: "POST", 
                            url: "php/registro.php",
                            data: formData, 
                            dataType: "json",
                            encode: true,
                        }).done(function (data){
                            alert("Se enviaron tus datos" );
                            console.log(data);
                        });
                        event.preventDefault();
                        return false;
                    });
                });
        </script>
</body>
</html>