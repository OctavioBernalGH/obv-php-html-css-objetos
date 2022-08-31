    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles/style.css">
        <title>Ejercicio Clases</title>
    </head>
    <body>
        
        <div class="container-fluid">
            <div class="formulary-container">
                <h1>Ejercicio Objetos y Clases</h1>
                <form action="index.php" method="POST">
                    <div>
                        <input type="number" min="2" max="4" step="2" name="ruedas" placeholder="número de ruedas" required>
                    </div>              
                    <div>
                        <input type="text" name="color" placeholder="color del vehículo" required>
                    </div>
                    <div>
                        <input type="number" min="1000" max="2200" step="200" name="motor" placeholder="cilindrada del motor" required>
                    </div>    
                    <button type="submit" name="btnGuardar" class="btn btn-warning">Guardar</button>
                </form>

            <?php

                include('coche.php');

            ?>
       

            </div>
        </div>

    </body>
    </html>
    
    
       

