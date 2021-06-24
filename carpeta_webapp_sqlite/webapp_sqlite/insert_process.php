<?php
    $nombre= $_POST['nombre'];
    $email= $_POST['correo'];
    $telefono=$_POST['telefono'];
    class MiBD extends SQLite3
    {
        function __construct()
        {
            $this->open('agenda.db');
        }
    }
    
    $conexion = new MiBD();
    $conexion->exec("INSERT INTO personas(nombre,email,telefono) VALUES 
    ('$nombre','$email','$telefono')");
    echo "<script>window.location.href='index.php';</script>";
?>
