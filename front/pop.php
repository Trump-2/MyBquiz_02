<fieldset>
  <legend>目前位置:首頁 > 人氣文章區</legend>
  <table style="width:95%; margin:auto">
    <tr>
      <th width="30%">標期</th>
      <th width="50%">內容</th>
      <th width="">人氣</th>
    </tr>
    <?php
    $total = $News->count();
    $div = 5;
    $now = $_GET['p'] ?? 1;
    $pages = ceil($total / $div);
    $start = ($now - 1) * $div;

    $rows = $News->all(['sh' => 1], " order by `good` desc limit $start,$div"); //  由按讚數排序，由大到小排序；和 limit 搭配使用時，要先排序再使用 limit
    foreach ($rows as $row) {

    ?>
      <tr>
        <td>
          <div class="title" data-id="<?= $row['id'] ?>"><?= $row['title'] ?></div>
        </td>
        <td>
          <div><?= mb_substr($row['news'], 0, 25) ?> ...</div>
          <div id="p<?= $row['id'] ?>" class="pop">
            <h3 style="color:skyblue"><?= $row['title'] ?></h3>
            <pre><?= $row['news'] ?></pre>
          </div>
        </td>
        <td></td>
      </tr>

    <?php

    }
    ?>
  </table>

  <div>
    <?php


    if ($now - 1 > 0) {
      $prev = $now - 1;
      echo "<a href='?do=pop&p=$prev'> < </a>";
    }

    for ($i = 1; $i <= $pages; $i++) {
      $fontsize = ($i == $now) ? '24px' : '16px';
      echo "<a href='?do=pop&p=$i' style='font-size:$fontsize'> $i </a>";
    }

    if ($now + 1 <= $pages) {
      $next = $now + 1;
      echo "<a href='?do=pop&p=$next'> > </a>";
    }


    ?>
  </div>


</fieldset>
<script>
  $(".title").hover(
    function() {
      // 先全部隱藏
      $(".pop").hide();
      let id = $(this).data('id');

      // 顯示出對應的彈出視窗文章內容
      $(`#p${id}`).show();
    }


  )
</script>