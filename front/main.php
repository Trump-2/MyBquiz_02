<style>
  .tag {
    width: 100px;
    padding: 5px 10px;
    border: 1px solid black;
    /* 讓兩條線重疊在一起 */
    margin-left: -1px;
    background-color: green;
    border-radius: 5px 5px 0 0;
    text-align: center;
  }

  .tags {
    display: flex;
    /* 把頁籤那排拉回來跟內容區對齊 */
    margin-left: 1px;
    background-color: yellow;

  }

  article section {
    border: 1px solid black;
    min-height: 480px;
    /* 讓兩條線重疊在一起 */
    margin-top: -1px;

    display: none;
  }

  .active {
    /* 蓋過內容區的 border */
    border-bottom: 1px solid white;
  }
</style>
<div class="tags">
  <div id="sec01" class="tag active">健康新知</div>
  <div id="sec02" class="tag">菸害防治</div>
  <div id="sec03" class="tag">癌症防治</div>
  <div id="sec04" class="tag">慢性病防治</div>
</div>
<article>
  <section id="section01" style="display:block"> <!-- 讓這個 section 一開始就出現 -->
    <h2>健康新知</h2>
  </section>
  <section id="section02">
    <h2>菸害防治</h2>
  </section>
  <section id="section03">
    <h2>癌症防治</h2>
  </section>
  <section id="section04">
    <h2>慢性病防治</h2>
  </section>
</article>

<script>
  $(function() {
    $(".tag").on('click', function() {
      $(".tag").removeClass("active");
      // $(this) 代表被點擊的那個頁籤
      $(this).addClass("active");
      let id = $(this).attr('id');
      // 下面這段是點下各頁籤顯示對應的內容區
      let newID = id.replace('sec', 'section');
      console.log(newID);
      $("section").hide();
      $(`#${newID}`).show();
    })
  })
</script>