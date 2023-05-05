<?php 
     $cantidad = $_POST['cantidad'];
     
      // Precio de cono CD / 100 unidades : s/. 82.00
     // Calculando el importe de compra

     $importe_compra = $cantidad * 82;

     // Calculando el primer descuento de 5% al importe de compra

     $primer_descuento = $importe_compra * 0.05;

     // Calculando el segundo descuento, resta de importe de compra menos el primer importe

     $segundo_descuento = 0.05 * $importe_compra - $primer_descuento;

     // Calculando total de descuento 

     $descuento_total = $primer_descuento + $segundo_descuento;

     // Calculando el importe total a pagar

     $importe_total_pagar = $importe_compra - $descuento_total;
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row">
                <div class="col-md-6 mt-5" >
                    <div class="card">
                        <div class="card-header bg-success">
                           <div class="card-tittle text-white text-center">Determinando total a pagar por oferta</div> 
                        </div>                               
                        <div class="card-body">
                            <form>
                               <div class="form-group">
                                  <label>Importe de compra:</label>
                                  <p><strong><?php echo $importe_compra?></strong></p>
                               </div>
                               <div class="form-group">
                                  <label>Importe de descuento total:</label>
                                  <p><strong><?php echo $descuento_total?></strong> </p>
                               </div>  
                               <div class="form-group">
                                  <label>Importe a pagar:</label>
                                  <p><strong><?php echo $importe_total_pagar?></strong></p>
                               </div> 
                             <div class="form-group mt-3">
                                <?php echo "<a href='desarrollo4.php' class='btn btn-success'>Regresar</a>" ?>
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