<?php
    require_once('config1.php');
class conexion{
    private $_objconectar;
    
    function __construct()
    {
        $this ->_objconectar = new mysqli(SERVIDOR, NAME, AUTOR, EDITORIAL, EDICION, BASE_DATOS);
        
        if($this->_objconectar->connect_errno){
            printf("Falló la conexión: %s/n", $mysqli->connect_error);
            exit();
        }
    }
        
    public function ejecutarconsulta($consulta)
    {
        $resultado = $this->_objconectar->query($consulta);
        return $resultado;
    }
    
    public function cerrarconexion()
    {
        $this->_objconectar->close();
    }
    
    
}





?>