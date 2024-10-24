<?php 
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass  = $_POST['password'];

        if($email == 'admin@admin.com' AND $pass == 'admin'){
            header("location:dashboard.php");
        }
        else{
            echo "Email atau Password Salah";
        }
    }
?>