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
                <th scope="col">Contador</th>
                <th scope="col">Borrar</th>
                <th scope="col">Actualizar</th>
            </tr>
        </thead>
    <tbody>
        <?php
        include('connection/connection.php');
        $c = 1;
        $consulta ="call arcasm32.verHabitat()";
        $consulta = "call arcasm32.contadorHabitat()";
        $query = mysqli_query($conn, $consulta);
        while($fila = mysqli_fetch_array($query)){ 
             ?>
             <tr>
                <th scope="row">
                    <?php echo $c; ?>
                </th>
                <td>
                    <?php echo $fila['habitat']; ?>
                </td>
                <td>
                    <?php echo $fila['contador']; ?>
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
        <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.js"></script>

<script src="javascript/java.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    </tbody>
</body>
</html>