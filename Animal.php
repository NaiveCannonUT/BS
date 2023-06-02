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
    <form action="insert/agregar_animal.php" method="post">
            <div class="mb-3">
                <label class="form-label">Ingresa un animal</label>
                <input name="nombre_animal" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Añade una descripcion</label>
                <input name="descripcion_animal" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Clasificacion</label>
                <select name="id_clasificacion" class="form-select" aria-label="Default select example">
                    <?php
                    include('connection/connection.php');

                    $consulta = "SELECT*FROM clasificacion";
                    $query = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $fila['id_clasificacion']; ?>"><?php echo $fila['nombre_clasificacion']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alimentacion</label>
                <select name="id_alimentacion" class="form-select" aria-label="Default select example">
                    <?php
                    include('connection/connection.php');

                    $consulta = "SELECT*FROM alimentacion";
                    $query = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $fila['id_alimentacion']; ?>"><?php echo $fila['tipo_alimento']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Habitat</label>
                <select name="id_habitat" class="form-select" aria-label="Default select example">
                    <?php
                    include('connection/connection.php');

                    $consulta = "SELECT*FROM habitat";
                    $query = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $fila['id_habitat']; ?>"><?php echo $fila['nombre_habitat']; ?></option>
                    <?php } ?>
                </select>
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
                <th scope="col">Animal</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Clasificacion</th>
                <th scope="col">Alimentacion</th>
                <th scope="col">Habitat</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
    <tbody>
        <?php
        include('connection/connection.php');
        $c = 1;
        $consulta ="";
        $query = mysqli_query($conn, $consulta);
        while($fila = mysqli_fetch_array($query)){ 
             ?>
             <tr>
                <th scope="row">
                    <?php echo $c; ?>
                </th>
                <td>
                    <?php echo $fila['animal']; ?>
                </td>
                <td>
                    <?php echo $fila['descripcion_animal']; ?>
                </td>
                <td>
                    <?php echo $fila['clasificacion']; ?>
                </td>
                <td>
                    <?php echo $fila['alimentacion']; ?>
                </td>
                <td>
                    <?php echo $fila['habitat']; ?>
                </td>
                <td>
                            <a href="Delete/eliminar_animal.php?id_animal=<?php echo $fila['id_animal']; ?>">
                                <i class="bi bi-trash2-fill text-danger" style="font-size: 1.5rem;"></i>
                            </a>
                        </td>
             </tr>
        <?php $c++; } ?>
       

    </tbody>
</body>
</html>