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
                    
                    /** Sí se pulsa el btnGuardar entonces ... */
                    if(isset($_POST['btnGuardar'])){
                        /** Se crea la clase Coche */
                        class Coche
                        {
                            /** Atributos de clase */
                            public $ruedas = 0;
                            public $color = "";
                            public $motor = 0;
                
                            /** Constructor de clase vacío para utilizar setters */
                            function __constructVoid(){}
                                   
                            /** Constructor de clase con todos los atributos */
                            function __construct(int $ruedas, string $color, int $motor)
                            {
                                $this-> ruedas = $ruedas;
                                $this-> color =  $color;
                                $this-> motor = $motor;
                            }
                
                            /** Getters y Setters de clase */
                            function setRuedas(int $ruedas){
                                $this->ruedas = $ruedas;
                            }

                            function setColor(string $color){
                                $this->color = $color;
                            }

                            function setMotor(string $motor){
                                $this->motor = $motor;
                            }

                            function getRuedas(){
                                return $this->ruedas;
                            }

                            function getColor(){
                                return $this->color;
                            }

                            function getMotor(){
                                return $this->motor;
                            }

                            /** Funciones de clase */
                            function arrancar(){
                                echo "Arranque completado con éxito.<br>";
                            }
                
                            function girar(){
                                echo "Estoy girando<br>";
                            }
                
                            function frenar(){
                                echo "Frenada realizada<br>";
                            }

                            function mostrarDatos(){
                                echo "<br><span class='spantitulo'>Información obtenida mediante función</span><br>";
                                echo "<span class='spantxt'>Número de ruedas: $this->ruedas</span><br>";
                                echo "<span class='spantxt'>Color del vehículo: $this->color</span><br>";
                                echo "<span class='spantxt'>Cilindrada del motor: $this->motor</span>";
                            }

                            function __toString()
                            {
                                return  "<br><br><span class='spantitulo'>Información generada mediante __toString</span>".
                                        "<br><span class='spantxt'>Número de ruedas: ".$this->ruedas. "</span><br>".
                                        "<span class='spantxt'>Color del vehículo: ".$this->color. "</span><br>".
                                        "<span class='spantxt'>Cilindrada del motor: ".$this->motor. ".</span>";
                            }
                        }
                        
                        /** Instancia de la clase Coche */
                        $coche1 = new Coche($infoRuedas = $_POST['ruedas'], $infoColor = $_POST['color'], $infoMotor = $_POST['motor']);
                        /** Mostramos los datos */
                        $coche1->mostrarDatos();
                        echo $coche1;
                        /** Lenamos la clase mediante el constructor vacío y setters */
                        $coche1->setRuedas(4);
                        $coche1->setColor('Amarillo');
                        $coche1->setMotor(1200);
                        echo $coche1;
                        echo "<br><span class='aviso'>Vehículo sobreescrito mediante setters</span>";
                    }
                ?>
       

            </div>
        </div>

    </body>
    </html>
    
    
       

