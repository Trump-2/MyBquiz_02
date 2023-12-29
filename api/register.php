<?php
include_once "db.php";

unset($_POST['pw2']);
// 正確的寫法應該要這樣寫 echo $User->save($_POST); 

$User->save($_POST); //這裡為了檢定的寫法