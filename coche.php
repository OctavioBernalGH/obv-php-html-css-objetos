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