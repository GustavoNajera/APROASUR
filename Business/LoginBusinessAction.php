<?php
include './LoginBusiness.php';
$email = $_POST['email'];
$password = $_POST['password'];


if (isset($_POST['email']) && isset($_POST['password'])) {
    if (strlen($email) > 0 && strlen($password) > 0) {

        $loginBusiness = new LoginBusiness();
        $result = $loginBusiness->isUser($email,$password);

        if ($result == 3) {
            session_start();
            $_SESSION['user'] = $email;
            $_SESSION['pass'] = $password ;
            header("location: ../presentation/CRUD_Producto.php");
        } else {
                header("location: ../presentation/LogIn.php?error=no_user");
        }
    } else {
        header("location: ../presentation/LogIn.php?error=empty_field");
    }
} else {
    header("location: ../presentation/LoGin.php?error=security_problem");
}
?>
