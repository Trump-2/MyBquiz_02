<?php
include_once "db.php";

$result = $User->count(['acc' => $_POST['acc']]);

if ($result > 0) {
  echo 1; // 這裡定義 1 代表重複
} else {
  echo 0;
}
