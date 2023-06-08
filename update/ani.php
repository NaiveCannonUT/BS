<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <?php
            $id_animal = $_GET['id_animal'];

            include('../connection/connection.php');

            $consulta = "SELECT*FROM Clasificacion";

            $query = mysqli_query($conn, $consulta);

            $conn -> close();
            include('../connection/connection.php');


            $consulta1 = "SELECT id_animal,nombre_animal, descripcion_animal,id_clasificacion_id, nombre_clasificacion
            AS clasificacion
            FROM animal
            INNER JOIN clasificacion
            ON animal.id_clasificacion_id = clasificacion.id_clasificacion WHERE id_animal = '$id_animal'";

            $query1 = mysqli_query($conn, $consulta1);
            
            $fila = mysqli_fetch_array($query1);
        
        
        ?>

<div>
            <div>
                <div>
                </div>
                <div class="card-body">
                    <!-- ========== Start formulario ========== -->
                    <form action="actualizar_animal.php" method="post">
                        <div class="mb-4">
                            <label class="form-label">Nombre del animnal</label>
                            <input name="nombre_animal" value="<?php echo $fila['nombre_animal'] ?>" type="text"
                                class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Descripcion del animal</label>
                            <input name="descripcion_animal" value="<?php echo $fila['descripcion_animal'] ?>" type="text"
                                class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Clasificacion</label>
                            <select name="id_clasificacion" class="form-select">
                                <option value="<?php echo $fila['id_clasificacion_id']; ?>" selected><?php echo $fila['clasificacion'] ?></option>
                            
                                <?php
                                while ($fila = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $fila['id_clasificacion']; ?>"><?php echo $fila['nombre_clasificacion']; ?>
                                    </option>
                                
                                <?php } ?>
                            </select>
                        </div>
                        <div>
                            <input name="id_animal" value="<?php echo $id_animalo; ?>" type="hidden">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    <!-- ========== End formulario ========== -->
                </div>
            </div>
        </div>




        <!-- ========== End formulario ========== -->
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>