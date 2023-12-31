<style>
.type-item {
  display: block;
  margin: 3px 6px;
}

fieldset {
  display: inline-block;
  vertical-align: top;
}

.new-list {
  width: 600px;
}
</style>

<div class="nav">目前位置:首頁 > 分類網誌 > <span class="type">健康新知</span> </div>


<fieldset>
  <legend>分類網誌</legend>
  <a class="type-item" data-id="1">健康新知</a>
  <a class="type-item" data-id="2">菸害防治</a>
  <a class="type-item" data-id="3">癌症防治</a>
  <a class="type-item" data-id="4">慢性病防治</a>
</fieldset>

<fieldset class="new-list">
  <legend>文章列表</legend>
  <div class="list-items"></div>
  <div class="article" style="display:none"></div>
</fieldset>

<script>
getList(1)
$(".type-item").on('click', function() {
  $('.type').text($(this).text());
  let type = $(this).data('id');
  getList(type);

})

function getList(type) {
  $.get("./api/get_list.php", {
    type
  }, (list) => {
    $(".list-items").html(list);
    $(".article").hide()
    $(".list-items").show()

    // 跟上面一樣
    // $(".article,.list-items").toggle();
  })
}

function getNews(id) {
  $.get("./api/get_news.php", {
    id
  }, (news) => {
    $(".article").text(news)
    $(".list-items").hide()
    $(".article").show()

    // 跟上面一樣
    // $(".article,.list-items").toggle();
  })


}
</script>