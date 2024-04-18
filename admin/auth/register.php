<?php
require("../config/config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    if($name !="" && $email !="" && $password !=""){
        $check="SELECT * FROM users WHERE email='$email' OR name='$name'";
        $result= mysqli_query($conn, $check);

        if($result->num_rows>0){
            echo "<div class='alert alert-danger' role='alert'>Email or Password already exists </div";
            header("Refresh:0; url=../register.php?msg=error");
        }
        else{
            $query = "INSERT INTO users(name, email, password) VALUES('$name', '$email','$password')";
            $result= mysqli_query($conn, $query);
            if($result){
               header("Refresh:0; url=../index.php?msg=register");
            }
            else{
                header("Refresh:0; url=../registration.php?msg=error");
            }
        }
    }
    else{
        echo "<div class='alert text-danger' role='alert'>All datas are required</div>";
        header("Refresh:2; url=registration.php");
    }
}
?>