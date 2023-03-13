<?php
    class ConexionMYSQL{
        public $host;
        public $user;
        public $clave;
        public $bd;
        public $conectar;
        public $query;
        public $table;

        public function __construct($host,$user,$clave,$bd,$table)
        {
            $this->host = $host;
            $this->user = $user;
            $this->clave = $clave;
            $this->bd = $bd;
            $this->table=$table;
        }

        public function conectarBD()
        {
            $this->conectar = mysqli_connect($this->host,$this->user,$this->clave,$this->bd);
        }

        public function readBD(){
            $consultar  = "SELECT * FROM "."$this->table";
            $this->query = mysqli_query($this->conectar, $consultar);
            $array = mysqli_fetch_array($this->query);
            return $this->query;
        }

        public function writeBD($arra){
            $i = 0;
            $insertar = "INSERT INTO $this->table VALUES (";
            while($i!==count($arra)){
                $insertar=$insertar."'$arra[$i]',";
                $i++;
            }
            //SUBSTR ELIMINA UN RANGO ESTABLECIDO
            $cadena = substr($insertar, 0, -1);
            $insertar=$cadena.");";
            $this->query = mysqli_query($this->conectar, $insertar);
        }

        public function deleteBD($campo,$value){
            $eliminar = "DELETE FROM $this->table WHERE $campo=$value";
            $this->query = mysqli_query($this->conectar, $eliminar);
        }

        public function updateBD($valorClave,$nuevoValue,$campoNuevo,$campoClave){
            $sql = "UPDATE $this->table set $campoNuevo='$nuevoValue' where $campoClave='$valorClave'";
            $this->query = mysqli_query($this->conectar, $sql);
        }
    }
?>
