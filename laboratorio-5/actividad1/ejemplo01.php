<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01 -Operaciones con PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
    <form method="post" action="">
        Ingresar Valor 1: <br> <input type="text" name="valor1"><br>
        Ingresar Valor 2: <br> <input type="text" name="valor2"><br>
        Resultado : <br>
        <input type="submit" name="Suma" value="Suma" >
    </form>
    <?php
    // Declaración de los variables
        $numero1 = $_POST['valor1'];
        $numero2 = $_POST['valor2'];
            $suma = $numero1 + $numero2;
            echo "El resultado de la suma es: " .$suma;
    ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>