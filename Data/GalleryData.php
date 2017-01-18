<?php

/**
 * Description of GalleryData
 */
include_once 'Data.php';
include '../Domain/Image.php';

class GalleryData extends Data {

    public function getAllImage() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call get_all_image");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Image($row['id_image'], $row['path'], $row['description'], $row['id_organization']);
            array_push($array, $currentData);
        }

        mysqli_close($conn);
        return $array;
    }
  public function delete($id, $db, $user) {
        error_reporting(0);
        $conn = new mysqli($this->server, $user, $this->password, $db);
        $conn->set_charset('utf8');
        if ($conn->connect_errno) {
            echo "Falló la conexion a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
            exit;
        }
        $query = "call deleteimage(" . $id .  ",@result)";
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

    public function insert($image, $user, $db) {
        error_reporting(0);
//        echo '-'.$user.'-';
//        echo '-'.$db.'-';
//        exit;
        $conn = new mysqli($this->server, $user, $this->password, $db);

//        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);

        $conn->set_charset('utf8');
        if ($conn->connect_errno) {
            echo "Falló la conexion a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
            exit;
        }
        $query = "call insertimage('" . $image->path . "','" . $image->description . "')";
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

    //imagenes de inicio    
    public function getAllImageHome() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call get_all_image_home");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Image($row['id_image'], $row['path'], $row['description'], $row['id_organization']);
            array_push($array, $currentData);
        }
        mysqli_close($conn);
        return $array;
    }

     
    //imagenes de galeria
    public function getImagesGallery() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getImagesGallery()");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Image($row['id_image'], $row['path'], $row['description'], $row['id_organization']);
            array_push($array, $currentData);
        }
        mysqli_close($conn);
        return $array;
    }
    
    //imagenes de galeria
    public function getImagesGalleryEn() {
        $conn = mysqli_connect($this->server, "en16_aproasur", $this->password, "aproasur_db_en");
        $conn->set_charset('utf8');
        $result = mysqli_query($conn, "call getImagesGallery()");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentData = new Image($row['id_image'], $row['path'], $row['description'], $row['id_organization']);
            array_push($array, $currentData);
        }
        mysqli_close($conn);
        return $array;
    }

   
    /*****************************************************/
     public function insertGalleryDB($image, $bd, $user){
        error_reporting(0);
        $conn = new mysqli($this->server, $user, $this->password, $bd);
        $conn->set_charset('utf8');
        if ($conn->connect_errno) {
            echo "Falló la conexion a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
            exit;
        }
        $query = "call insertGalleryImage ('" . $image->path . "','" . $image->description . "'" . ",@result)";
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
        $conn->close($conn); $ret = $result->fetch_assoc();
        return $ret['outSP'];
    }
    
    public function updateGallery($db,$user,$descripcion, $id) {
        $conn = mysqli_connect($this->server, $user, $this->password, $db);
        $conn->set_charset('utf8');
        mysqli_query($conn, "call updateGallery('" .$descripcion."',".$id.");");
        mysqli_close($conn);
        return 1;
        //echo $descripcion . " - " . $id;
    }

    public function deleteGallery($db,$user, $id) {
        $conn = mysqli_connect($this->server, $user, $this->password, $db);
        $conn->set_charset('utf8');
        mysqli_query($conn, "call deleteGallery(" .$id.");");
        mysqli_close($conn);
        return 1;
    }

}
