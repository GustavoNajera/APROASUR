<?php

error_reporting(1);
include_once 'Data.php';

class LoginData extends Data {
 public function isUser($id, $pass) {
        error_reporting(0);
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        if ($conn->connect_errno) {
            echo "Falló la conexion a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
            exit;
        }

        $query = "call isUser('" . $id . "','" . $pass . "'" . ",@result)";
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
//        echo $ret['outSP'];
//        exit;
//        
        
        return $ret['outSP'];
    }

}
