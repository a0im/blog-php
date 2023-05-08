<?php
session_start();
include_once('./app/functions.php');

ensure_user_is_authenticated();

echo "hello index";



//페이지 구성. 
//1. 로그인 페이지 // 회원가입 페이지 
//2. 메인페이지
//3. 게시판
//4. 글 추가 삭제 제거 
//5. 세션 
//https://mattfarley.ca/
//router 
//https://wp.swing2app.co.kr/documentation/appmanage/board/design/




?>
