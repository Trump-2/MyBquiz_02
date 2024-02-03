<?php include_once "db.php";

$_POST['opt'];
$opt = $Que->find($_POST['opt']);

$opt['vote'] += 1;
$Que->save($opt);

$sub = $Que->find($opt['subject_id']);
$sub['vote'] += 1;
$Que->save($sub);


to("../index.php?do=result&id={$sub['id']}");
