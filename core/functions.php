<?php

//common start
function alert($data, $color="danger"){
    return "<p class='alert alert-$color p-2'>$data</p>";
};
function runQuery($sql){
    if(mysqli_query(conn(), $sql)){
        return true;
    }else{
       return die("Query Failed :".mysqli_error(conn()));
    }
};
function redirect($lc){
    header("location:$lc");
}

//common end

//auth start
function register(){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cfPassword = $_POST['cfPassword'];


    if($password == $cfPassword){
        $securePassword = password_hash("$password", PASSWORD_DEFAULT);
        $sqlInsert = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$securePassword')";
        if(runQuery($sqlInsert)){
            redirect("login.php");
        }
    }else{
        return alert("Must be same password & confirm password");
    }

};

function signIn(){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sqlShow = "SELECT * FROM `users` WHERE email='$email'";
    $query = mysqli_query(conn(), $sqlShow);
    $row = mysqli_fetch_assoc($query);
    if(!$row){
        return alert("Email or Password don't match.");
    }else{
        if(!password_verify($password, $row['password'])){
            return alert("Email or Password don't match.");
        }else{
            session_start();
            $_SESSION['user'] = $row;
            header("location:dashboard.php");

        }
    }



}

//auth end


ini_set('display_errors', "1");
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);