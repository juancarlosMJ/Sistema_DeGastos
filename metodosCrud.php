<?php 
    class metodos{
        public function mostrarDatos($sql){
            $c= new Conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        public function insertarDatos($datos){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="INSERT into t_cantidad (cantidad,concepto)
                    values ('$datos[0]','$datos[1]')";
            return $result=mysqli_query($conexion,$sql);       
        }
        public function actualizarDatos($datos){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="UPDATE t_cantidad set cantidad='$datos[0]',
                                        concepto='$datos[1]'
                                    where id='$datos[2]'";
            return $result=mysqli_query($conexion,$sql);       
        }
        public function eliminarDatos($id){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="DELETE from t_cantidad where id='$id'";
            return $result=mysqli_query($conexion,$sql); 
    }
}