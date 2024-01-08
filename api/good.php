<?php
include_once "db.php";


$news = $News->find($_POST['news']);

// 在 log 資料表中有指定紀錄，代表要收回讚；沒有指定紀錄，代表要按讚
if ($Log->count(['news_id' => $_POST['newsId'], 'acc' => $_SESSION['user']])) {
  //  收回讚
  $Log->del(['news_id' => $_POST['newsId'], 'acc' => $_SESSION['user']]);
  $news['good'] -= 1;
} else {

  // 按讚
  $news['good'] += 1;
  $Log->save(['news_id' => $_POST['newsId'], 'acc' => $_SESSION['user']]);
}

$News->save($news);
