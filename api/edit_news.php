<?php
include_once "db.php";

// 防護機制，防止沒有勾選任何顯示和刪除的欄位
// if (isset($_POST['sh']) && isset($_POST['del'])) {
// }

if (isset($_POST['id'])) {
  foreach ($_POST['id'] as $id) {
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
      $News->del($id);
    } else {
      $news = $News->find($id);
      $news['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
      $News->save($news);
    }
  }
}

to("../back.php?do=news");
