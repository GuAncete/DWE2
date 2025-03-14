<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>CONTADOR</h1>
        <hr>
        <div class="row">
            <div class="col-6">
                <form action="destino.php" method="POST">
                    <div class="row ">
                        <div class="mb-3">
                            <label for="inicio" class="col-sm-2 col-form-label">Inicio:</label>
                            <div class="col-sm-10">
                                <input type="number" name="inicio" class="form-control" id="inicio">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="final" class="col-sm-2 col-form-label">Final:</label>
                            <div class="col-sm-10">
                                <input type="number" name="final" class="form-control" id="final">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="i" class="col-sm-2 col-form-label">Incremento:</label>
                            <div class="col-sm-10">
                                <input type="number" name="i" class="form-control" id="i">
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="cancel" class="btn btn-primary">Limpar</button>
                </form>
            </div>
        </div>
        <br>

      
    </div>



</body>

</html>