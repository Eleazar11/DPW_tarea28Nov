<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex flex-column aling-items-center justify-content-center min-vh-100"
    style="background-color: rgb(130, 130, 130); background-image: radial-gradient(circle, #f9f9f9, #bababa); background-size: cover;">

    <?php
    include "DB/conexion.php";
    include "Componentes/navBar.php";
    ?>
    <div id="content" class="flex-grow-1 d-flex align-items-center justify-content-center flex-column">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $file = "Paginas/" . $page . ".php";
            if (file_exists($file)) {
                include $file;
            } else {
                echo "<h1 class='text-center py-3'>Página no encontrada</h1>";
            }
        } else {
            echo "<h1 class='text-center py-3'>Cunoc</h1>";
        }
        ?>
    </div>
    <?php
    include "Componentes/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e7588c0a12.js" crossorigin="anonymous"></script>


</body>

</html>