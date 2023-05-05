<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
          <div class="row">
                <div class="col-md-6 mt-5" >
                    <div class="card">
                        <div class="card-header bg-success">
                           <div class="card-tittle text-white"> | OFERTA : Venta de conos CD / 100 unidades |</div> 
                        </div>                               
                        <div class="card-body">
                            <form action="/laboratorio-5/problema4/resultado4.php" method="post">
                               <div class="form-group">
                                  <label>Cantidad:</label>
                                  <input type="number" name="cantidad" class="form-control" placeholder="Ingrese la cantidad de conos que desea comprar" required>
                               </div> 
                               <div class="form-group mt-3">
                                  <label>PEN 1 cono CD : S/. 82.00</label>
                               </div>
                               <div class="form-group mt-3">
                                  <button type="submit" class="btn btn-success">Calcular</button>
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