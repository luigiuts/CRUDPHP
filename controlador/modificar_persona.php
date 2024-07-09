<?php
if(!empty($_POST["btnupdate"])){
    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        // Validar datos antes de ejecutar la consulta
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo '<div class="alert alert-warning">Correo inválido</div>';
        } elseif (!is_numeric($dni) || strlen($dni) != 8) {
            echo '<div class="alert alert-warning">DNI inválido</div>';
        } else {
            // Usar declaración preparada para evitar errores de sintaxis y mejorar la seguridad
            $stmt = $conexion->prepare("UPDATE persona SET nombre = ?, apellido = ?, dni = ?, fecha_nac = ?, correo = ? WHERE idpersona = ?");
            $stmt->bind_param("ssissi", $nombre, $apellido, $dni, $fecha, $correo, $id);
            
            if ($stmt->execute()) {
                echo '<div class="alert alert-success">Persona actualizada correctamente</div>';
                header("Location: index.php");
                exit();
            } else {
                echo '<div class="alert alert-danger">Error al actualizar persona</div>';
            }
            
            $stmt->close();
        }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}
?>
