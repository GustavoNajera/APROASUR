<?php

error_reporting(1);
include_once 'Data.php';
include '../Domain/Product.php';

class ProductData extends Data {
    /* metodo obtiene todos los productos de la BD */

    public function getAllProducts() {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = "call sp_getAllProducts()";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentProduct = new Product($row['id_product'], $row['name'], $row['description'], $row['path_image'], $row['id_organization']);
            array_push($array, $currentProduct);
        }
        return $array;
    }

    public function getAll($db, $user) {
        $conn = new mysqli($this->server, $user, $this->password, $db);
        $conn->set_charset('utf8');
        $query = "call sp_getAllProducts()";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentProduct = new Product($row['id_product'], $row['name'], $row['description'], $row['path_image'], $row['id_organization']);
            array_push($array, $currentProduct);
        }
        return $array;
    }
    
    public function getProduct($id,$db, $user) {
        $conn = new mysqli($this->server, $user, $this->password, $db);
        $conn->set_charset('utf8');
        $query = "call getProduct(".$id.")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
            $row = mysqli_fetch_array($result);
            $currentProduct = new Product($row['id_product'], $row['name'], $row['description'], $row['path_image'], $row['id_organization']);
            return  $currentProduct ;
    }

    public function insert($Product, $db, $user) {
        error_reporting(0);
        $conn = new mysqli($this->server, $user, $this->password, $db);
        $conn->set_charset('utf8');
        if ($conn->connect_errno) {
            echo "Falló la conexion a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
            exit;
        }
        $query = "call insertproduct('" . $Product->name . "','" . $Product->description . "','" . $Product->pathImage . "'" . ",@result)";
        if (!$conn->query("SET @result = 0") || !$conn->query($query)) {
            $conn->close();
            echo "Falló la llamada al procedimiento: (" . $conn->errno . ") " . $conn->error;
            exit;
        }
        if (!($result = $conn->query("SELECT @result as outSP"))) {
            $conn->close();
            echo "Falló la obtención: (" . $conn->errno . ") " . $conn->error;
            exit;
        }
        $conn->close($conn);
        $ret = $result->fetch_assoc();
        return $ret['outSP'];
    }
public function delete($id, $db, $user) {
        error_reporting(0);
        $conn = new mysqli($this->server, $user, $this->password, $db);
        $conn->set_charset('utf8');
        if ($conn->connect_errno) {
            echo "Falló la conexion a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
            exit;
        }
        $query = "call deleteproduct(" . $id .  ",@result)";
        if (!$conn->query("SET @result = 0") || !$conn->query($query)) {
            $conn->close();
            echo "Falló la llamada al procedimiento: (" . $conn->errno . ") " . $conn->error;
            exit;
        }
        if (!($result = $conn->query("SELECT @result as outSP"))) {
            $conn->close();
            echo "Falló la obtención: (" . $conn->errno . ") " . $conn->error;
            exit;
        }
        $conn->close($conn);
        $ret = $result->fetch_assoc();
        return $ret['outSP'];
    }
    
       public function update($Product, $db, $user) {
        error_reporting(0);
        $conn = new mysqli($this->server, $user, $this->password, $db);
        $conn->set_charset('utf8');
        if ($conn->connect_errno) {
            echo "Falló la conexion a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
            exit;
        }
        $query = "call updateProduct(" . $Product->idProduct . ",'" . $Product->name . "','" . $Product->description . "','" . $Product->pathImage. "',@result)";
        
        if (!$conn->query("SET @result = 0") || !$conn->query($query)) {
            $conn->close();
            echo "Falló la llamada al procedimiento: (" . $conn->errno . ") " . $conn->error;
//            echo $query;
            exit;
        }
        if (!($result = $conn->query("SELECT @result as outSP"))) {
            $conn->close();
            echo "Falló la obtención: (" . $conn->errno . ") " . $conn->error;
            exit;
        }
        $conn->close($conn);
        $ret = $result->fetch_assoc();
        return $ret['outSP'];
    }
}
