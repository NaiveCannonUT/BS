<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS v5.2.1 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
<body>
     <!-- ========== Start formulario ========== -->
     <form action="insert/agregar_habitat.php" method="post">
            <div class="mb-3">
                <label class="form-label">Ingresa un habitat</label>
                <input name="nombre_habitat" type="text" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <form action="" method="post">

        </form>

        <!-- ========== End formulario ========== -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Clasificacion</th>
                <th scope="col">Borrar</th>
                <th scope="col">Actualizar</th>
            </tr>
        </thead>
    <tbody>
        <?php
        include('connection/connection.php');
        $c = 1;
        $consulta ="SELECT*FROM habitat";
        $query = mysqli_query($conn, $consulta);
        while($fila = mysqli_fetch_array($query)){ 
             ?>
             <tr>
                <th scope="row">
                    <?php echo $c; ?>
                </th>
                <td>
                    <?php echo $fila['nombre_habitat']; ?>
                </td>
                <td>
                            <a href="Delete/eliminar_habitat.php?id_habitat=<?php echo $fila['id_habitat']; ?>">
                                <i class="bi bi-trash2-fill text-danger" style="font-size: 1.5rem;"></i>
                            </a>
                            </td>
                                <td>
                            <a href="update/habit.php?id_habitat=<?php echo $fila['id_habitat']; ?>">
                                <i class="bi bi-pencil-square text-warning" style="font-size: 1.5rem;"></i>
                            </a>
                        </td>
             </tr>
        <?php $c++; } ?>
       

    </tbody>
</body>
</html>