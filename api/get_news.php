<?php
include_once "db.php";

$news = $News->find($_GET['id']);
echo nl2br($news['news']); // nl2br() 會把新的一行 /n 轉換成 <br>
