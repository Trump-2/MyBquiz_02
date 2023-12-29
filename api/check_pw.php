<?php
include_once "db.php";

// $result = $User->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]); // 這裡是 $_POST 是因為前端頁面用了 jQuery 的 $.post()

// if ($result > 0) {
//   echo 1; // 這裡定義 1 代表重複
// } else {
//   echo 0;
// }

// 將上面縮寫成這樣
// echo $result;

// 又將上面縮寫成這樣

// echo $User->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]); 

// 又將上面縮寫成這樣
$res =  $User->count($_POST);
if ($res) {
  $_SESSION['user'] = $_POST['acc'];
}

echo $res;
