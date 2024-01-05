<?php
include_once "db.php";

if (isset($_POST['subject'])) {
  // 問卷主題
  $Que->save(['text' => $_POST['subject'], 'subject_id' => 0, 'vote' => 0]);
  $subject_id = $Que->find(['text' => $_POST['subject']])['id'];
}

if (isset($_POST['option'])) {
  // 問卷主題的選項
  foreach ($_POST['option'] as $option) {
    $Que->save(['text' => $option, 'subject_id' => $subject_id, 'vote' => 0]);
  }
}

to("../back.php?do=que");
