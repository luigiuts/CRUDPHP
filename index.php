<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0f718f9550.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3"> Empleados Delthac 1 </h1>
    <div class="container-fluid row">
        <form class="col-4 p-3">
            <h3 class="text-center text-secondary">Registro de personas</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la Persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido de la Persona</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI de la Persona</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
    <div class="col-8 p-4">
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">DNI</th>
                    <th scope="col">FECHA DE NAC</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">CORREO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>LUIGI</td>
                    <td>ESTEVEZ</td>
                    <td>146510560</td>
                    <td>17-07-2001</td>
                    <td>luigi@stig.com</td>
                    <td>
                        <a href="editar" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="eliminar" class="btn btn-small btn-danger">
                            <i class="fa-regular fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>