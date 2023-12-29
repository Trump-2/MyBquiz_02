<?php
include_once "db.php";

$result = $User->count(['acc' => $_POST['acc']]); // 這裡是 $_POST 是因為前端頁面用了 jQuery 的 $.post()

if ($result > 0) {
  echo 1; // 這裡定義 1 代表重複
} else {
  echo 0;
}
