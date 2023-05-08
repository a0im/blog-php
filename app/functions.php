<?php
  function isSqlServer() {
    $servername = "localhost";
    $user = "root";
    $password = "root";
    $databasename = "a02_blog_db";
    $connect = mysqli_connect($servername, $user, $password, $databasename);

    if (!$connect) {
      echo "<script>console.log('서버와의 연결 실패')</script>";
    }
    else {
      echo "<script>console.log('서버와의 연결중')</script>";
      return $connect;
    }
  }

function view ($name) {
  require("../view/$name.view.php");
}

function redirect ($url) {
  header("Location:$url");
}

function authenticated_user($id , $pw){
  if($id === USER_ID && $pw === USER_PW){
    return true;
  }
}

function is_authenticated_user(){
  return isset($_SESSION['id']);
}

function ensure_user_is_authenticated(){
  if (!is_authenticated_user()) {
    redirect('app/login.php');
    die();
  }
}



