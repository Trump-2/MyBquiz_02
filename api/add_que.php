<?php
include_once "db.php";

if (isset($_POST['subject'])) {
  // 問卷主題
  $Que->save(['text' => $_POST['subject'], 'subject_id' => 0, 'vote' => 0]);
  // 取得問卷主題的 id 欄位
  $subject_id = $Que->find(['text' => $_POST['subject']])['id'];
}

if (isset($_POST['option'])) {
  // 問卷主題的選項
  foreach ($_POST['option'] as $option) {
    // 選項的 subject_id 欄位是主題的 id 欄位
    $Que->save(['text' => $option, 'subject_id' => $subject_id, 'vote' => 0]);
  }
}

to("../back.php?do=que");
