<!-- 新規登録画面へ遷移するリンクを設置 -->
<div>
  <a href="/seed_blog/blogs/add/">新規ブログ投稿</a>
</div>


<?php foreach ($this->viewOptions as $viewOption): ?>
  <!-- htmlと絡めて取得データの出力をする -->
  <a href="/seed_blog/blogs/show/<?php echo $viewOption['nick_name'] ?>">
    <?php echo $viewOption['comment']; ?>
  </a>
<?php endforeach; ?>