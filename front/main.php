<style>
  .tag {
    width: 100px;
    padding: 5px 10px;
    border: 1px solid black;
    /* 讓兩條線重疊在一起 */
    margin-left: -1px;
    border-radius: 5px 5px 0 0;
    text-align: center;
  }

  .tags {
    display: flex;
    margin-left: 1px;

  }

  article section {
    border: 1px solid black;
    min-height: 400px;
    margin-top: -1px;
  }

  .active {
    border-bottom: 1px solid white;
  }
</style>
<div class="tags">
  <div class="tag active">健康新知</div>
  <div class="tag">菸害防治</div>
  <div class="tag">癌症防治</div>
  <div class="tag">慢性病防治</div>
</div>
<article>
  <section></section>
  <section></section>
  <section></section>
  <section></section>
</article>

<script>
  $(function() {
    $(".tag").on('click', function() {
      $(".tag").removeClass("active");
      $(this).addClass("active");
    })
  })
</script>