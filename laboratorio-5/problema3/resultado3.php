<?php 
     $dia = $_POST['dias'];
     
      // Precio de Alquiler por día PREDETERMINADO = s/. 120.00
     // Calculando el importe bruto

     $importe_bruto = 120 * $dia;

     // Calculando el importe de descuento al 15% del importe bruto

     $importe_descuento = $importe_bruto * 0.15;

     // Calculando el total a pagar

     $importe_neto = $importe_bruto - $importe_descuento;

     // Obsequio de 3 lapiceros por cada dia de alquiler

     $obsequios = (3 * $dia);
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row">
                <div class="col-md-6 mt-5" >
                    <div class="card">
                        <div class="card-header bg-dark">
                           <div class="card-tittle text-white text-center">Determinando los resultados para el alquiler</div> 
                        </div>                               
                        <div class="card-body">
                            <form>
                               <div class="form-group">
                                  <label>Importe bruto:</label>
                                  <p><strong><?php echo $importe_bruto?></strong></p>
                               </div>
                               <div class="form-group">
                                  <label>Importe de descuento:</label>
                                  <p><strong><?php echo $importe_descuento?></strong> </p>
                               </div>  
                               <div class="form-group">
                                  <label>Importe neto a pagar:</label>
                                  <p><strong><?php echo $importe_neto?></strong></p>
                               </div>
                               <div class="form-group">
                                  <label>Obsequio [cantidad de lapiceros]:</label>
                                  <p><strong><?php echo $obsequios?></strong></p>
                               </div>   
                             <div class="form-group mt-3">
                                <?php echo "<a href='desarrollo3.php' class='btn btn-dark'>Regresar</a>" ?>
                             </div>
                            </form>
                        </div>
                    </div>
                </div>
          </div>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>