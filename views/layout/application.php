<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>フレームワークブロク</title>
  <link rel="stylesheet" type="text/css" href="/seed_blog/webroot/assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/seed_blog/webroot/assets/font-awesome/css/font-awesome.css">
</head>
<body>
  <div class="container">
  <div class="row">
  	<div class="col-md-4 col-md-offset-4" style="margin-top: 80px;">
  
  <!-- 各ページに必要なコードをURLを元にrequire (処理自体はcontrollerで) -->
  <?php
      include('views/blogs/' . $this->action . '.php');
  ?>
  </div>
  </div>
  </div>
</body>
</html>