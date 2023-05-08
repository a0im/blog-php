<?php
session_start();
include_once('functions.php');
include_once('config.php');
$connect = isSqlServer();

$status = '';
$name = 'login';

//로그인값 체크
if (isset($_POST['login'])) {
  $id = $_POST['id'];
  $pw = $_POST['pw'];

  $sql = "SELECT * FROM user_data WHERE id = '$id'";
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_array($result);

  echo "<script>console.log('$id','-','$pw','-','{$row['password']}')</script>";

  if ($row && $pw === $row['password']) {
    $_SESSION['id'] = $id;

    redirect('../index.php');
    mysqli_close($connect);
    die();
  }
  else {
    $status = '아이디 비밀번호가 일치하지 않습니다.';
  }
}

//view
include_once('header.php');
require_once('../view/login.view.php');
include_once('footer.php');
?>