<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row">
                <div class="col-md-6 mt-5" >
                    <div class="card">
                        <div class="card-header bg-dark">
                           <div class="card-tittle text-white"> | Alquiler de Automóviles |</div> 
                        </div>                               
                        <div class="card-body">
                            <form action="/laboratorio-5/problema3/resultado3.php" method="post">
                               <div class="form-group">
                                  <label>Cantidad:</label>
                                  <input type="number" name="dias" class="form-control" placeholder="Ingrese la cantidad de días para el alquiler" required>
                               </div> 
                               <div class="form-group mt-3">
                                  <label>DATO: 1 día => S/. 120.00</label>
                               </div>
                               <div class="form-group mt-3">
                                  <button type="submit" class="btn btn-dark">Calcular</button>
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