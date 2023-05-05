<?php 
     $precio = $_POST['precio'];
     $cantidad = $_POST['cantidad'];
      
     // Calculando el nuevo precio de la gaseosa de 3 litros en 5% de rebaja

     $rebaja = ($precio * 0.05);
     $nuevo_precio = $precio - $rebaja;

     // Calculando el importe de la compra

     $importe_compra = $cantidad * $nuevo_precio;

     // Realizando el descuento de 7% al importe de compra

     $importe_descuento = ($importe_compra * 0.07);

     // Calculando el importe total a pagar
     
     $importe_pagar = ($importe_compra - $importe_descuento);

     // Incentivo especial  2 caramelos por gaseosa

     $obsequio = (2 * $cantidad);
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row">
                <div class="col-md-6 mt-5" >
                    <div class="card">
                        <div class="card-header bg-dark">
                           <div class="card-tittle text-white">Determinando los resultados de la operación</div> 
                        </div>                               
                        <div class="card-body">
                            <form>
                               <div class="form-group">
                                  <label>Precio nuevo de gaseosa:</label>
                                  <p><strong><?php echo $nuevo_precio?></strong></p>
                               </div>
                               <div class="form-group">
                                  <label>Importe de compra:</label>
                                  <p><strong><?php echo $importe_compra?></strong> </p>
                               </div>  
                               <div class="form-group">
                                  <label>Importe de descuento:</label>
                                  <p><strong><?php echo $importe_descuento?></strong></p>
                               </div>
                               <div class="form-group">
                                  <label>Importe a pagar:</label>
                                  <p><strong><?php echo $importe_pagar?></strong></p>
                               </div>
                               <div class="form-group">
                                  <label>Obsequio [caramelos]:</label>
                                  <p><strong><?php echo $obsequio?></strong></p>
                               </div>   
                             <div class="form-group mt-3">
                                <?php echo "<a href='desarrollo2.php' class='btn btn-dark'>Regresar</a>" ?>
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