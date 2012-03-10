< ?php 
class A{ 
public $mensaje; 

function __construct($msj){ 
$this->mensaje = $msj; 
} 

function hola(){ 
echo "Hola estoy en A "; 
echo $this->mensaje; 
} 
} 

class B extends A{ 
public $mensajeB; 

function __construct($msj,$Bmsj){ 
parent::__construct($msj); 
$this->mensajeB = $Bmsj; 
} 

function hola(){ 
echo "Hola estoy en B"; 
echo $this->mensaje; 
echo $this->mensajeB; 
} 
} 

$obj = new B("soy tito","soy pepe"); 
$obj->hola(); 
? >

