<?php

if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from persona where idpersona=$id");
    if($sql==1){
        echo'<div class="alert alert-success"> Persona elimanda correctamente </div>';
    }else{
        echo'<div class="alert alert-danger"> Error al eliminar Persona </div>';
    }
}
?>