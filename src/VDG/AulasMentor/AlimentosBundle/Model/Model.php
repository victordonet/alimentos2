<?php

namespace VDG\AulasMentor\AlimentosBundle\Model;

class Model {

    protected $conexion;

    public function __construct($dbname, $dbuser, $dbpass, $dbhost) {
        $mvc_bd_conexion = mysqli_connect($dbhost, $dbuser, $dbpass);
        if (!$mvc_bd_conexion) {
            die('No ha sido posible realizar la conexión con la base de datos: '
                    . mysql_error());
        }
        mysqli_select_db($mvc_bd_conexion, $dbname);
        mysqli_set_charset($mvc_bd_conexion,'utf8');
        $this->conexion = $mvc_bd_conexion;
    }

    public function bd_conexion() {
        
    }

    public function dameAlimentos() {
        $sql = "select * from alimentos order by energia desc";
        $result = mysqli_query($this->conexion,$sql);
        $alimentos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
    }

    public function buscarPorNombre($nombre) {
        $nombre = htmlspecialchars($nombre);
        $sql = "select * from alimentos where nombre like '" . $nombre . "' order by energia desc";
        $result = mysqli_query($this->conexion, $sql);
        $alimentos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
    }

    public function buscarPorEnergia($energia) {
        $energia = htmlspecialchars($energia);
        $sql = "select * from alimentos where energia = '" . $energia . "' order by nombre desc";
        $result = mysqli_query($this->conexion, $sql);
        $alimentos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
    }
    
    public function buscarCombinada($param){
        $param['nombre'] = htmlspecialchars($param['nombre']);
        $param['energia'] = htmlspecialchars($param['energia']);
        $param['proteina'] = htmlspecialchars($param['proteina']);
        $param['hc'] = htmlspecialchars($param['hc']);
        $param['fibra'] = htmlspecialchars($param['fibra']);
        $param['grasa'] = htmlspecialchars($param['grasa']);
        $contenido = "%";
        $sql = "select * from alimentos where";
        if ($param['nombre'] !== ""){
            if ($contenido === ""){
                $sql = $sql . " AND nombre like '" . $param['nombre'] . "'";
            } else {
                $sql = $sql . " nombre like '" . $param['nombre'] . "'";
                $contenido = "";
            }
        }
        if ($param['energia'] !== ""){
            if ($contenido === ""){
                $sql = $sql . " AND energia = '" . $param['energia'] . "'";
            } else {
                $sql = $sql . " energia = '" . $param['energia'] . "'";
                $contenido = "";
            }
        }
        if ($param['proteina'] !== ""){
            if ($contenido === ""){
                $sql = $sql . " AND proteina = '" . $param['proteina'] . "'";
            } else {
                $sql = $sql . " proteina = '" . $param['proteina'] . "'";
                $contenido = "";
            }
        }
        if ($param['hc'] !== ""){
            if ($contenido === ""){
                $sql = $sql . " AND hidratocarbono = '" . $param['hc'] . "'";
            } else {
                $sql = $sql . " hidratocarbono = '" . $param['hc'] . "'";
                $contenido = "";
            }
        }
        if ($param['fibra'] !== ""){
            if ($contenido === ""){
                $sql = $sql . " AND fibra = '" . $param['fibra'] . "'";
            } else {
                $sql = $sql . " fibra = '" . $param['fibra'] . "'";
                $contenido = "";
            }
        }
        if ($param['grasa'] !== ""){
            if ($contenido === ""){
                $sql = $sql . " AND grasatotal = '" . $param['grasa'] . "'";
            } else {
                $sql = $sql . " grasatotal = '" . $param['grasa'] . "'";
                $contenido = "";
            }
        }

        if ($contenido === ""){
            $sql = $sql . " order by nombre desc";
        } else {
            $sql = $sql . " nombre like '%' order by nombre desc";
        }
        $result = mysqli_query($this->conexion, $sql);
        $alimentos = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $alimentos[] = $row;
        }
        return $alimentos;
    }

    public function dameAlimento($id) {
        $id = htmlspecialchars($id);
        $sql = "select * from alimentos where id=" . $id;
        $result = mysqli_query($this->conexion, $sql);

        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function insertarAlimento($n, $e, $p, $hc, $f, $g) {
        $n = htmlspecialchars($n);
        $e = htmlspecialchars($e);
        $p = htmlspecialchars($p);
        $hc = htmlspecialchars($hc);
        $f = htmlspecialchars($f);
        $g = htmlspecialchars($g);
        $sql = "insert into alimentos (nombre, energia, proteina, hidratocarbono,
fibra, grasatotal) values ('" .
                $n . "'," . $e . "," . $p . "," . $hc . "," . $f . "," . $g . ")";
        $result = mysql_query($sql, $this->conexion);
        return $result;
    }
}
