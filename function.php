<?php
function do_login($username, $password){

  //cek kondisi jika username dan password salah
  if($username !="admin" || $password != "admin"){
    header("location:index.php?error=wrong");
  }
  //cek kondisi jika username dan password benar
  if($username == "admin" && $_POST["password"] == "admin"){
    $_SESSION["user"] = $username;
    $_SESSION["pass"] = $username;

    header("location:beranda.php");
  }
}

function check_login(){
  //cek ondisi login session
  if(isset($SESSION["user"])){
    header("location:index.php");
  }
}
?>
