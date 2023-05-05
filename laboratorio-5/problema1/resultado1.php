<?php 
     $hijos = $_POST['hijos'];
     $importe = $_POST['importe'];
      
     // Calculando el bono por hijos

     $bonificacion = 50 * $hijos;

     // comisión de 7.5% del importe total vendido del mes + bonificación

     $comision = (0.075 * $importe) + $bonificacion;

     // Calculando el sueldo bruto

     $sueldobruto = (600 + $comision);

     // descuento 11% del sueldo bruto
     
     $descuento = ($sueldobruto * 0.11);

     // Sueldo neto

     $sueldoneto = $sueldobruto - $descuento;
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row">
                <div class="col-md-6 mt-5" >
                    <div class="card">
                        <div class="card-header bg-primary">
                           <div class="card-tittle text-white">Determinando los resultados de la operación</div> 
                        </div>                               
                        <div class="card-body">
                            <form>
                               <div class="form-group">
                                  <label>Comisión:</label>
                                  <p><strong><?php echo $comision?></strong></p>
                               </div>
                               <div class="form-group">
                                  <label>Bonificación:</label>
                                  <p><strong><?php echo $bonificacion?></strong> </p>
                               </div>  
                               <div class="form-group">
                                  <label>Sueldo bruto:</label>
                                  <p><strong><?php echo $sueldobruto?></strong></p>
                               </div>
                               <div class="form-group">
                                  <label>Descuento:</label>
                                  <p><strong><?php echo $descuento?></strong></p>
                               </div>
                               <div class="form-group">
                                  <label>Sueldo Neto:</label>
                                  <p><strong><?php echo $sueldoneto?></strong></p>
                               </div>   
                             <div class="form-group mt-3">
                                <?php echo "<a href='problema1.php' class='btn btn-primary'>Regresar</a>" ?>
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