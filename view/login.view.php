

<form action="login.php" method="POST" >
  <p>
    <label for="id">아이디</label>
    <input type="text" id="id" name="id">
  </p>
  <p>
    <label for="pw">비밀번호</label>
    <input type="password" id="pw" name="pw">
  </p>

  <input type="submit" value="로그인" name="login">
</form>

<p><span class="error"><?php isset($status) && print $status; ?></span></p>

