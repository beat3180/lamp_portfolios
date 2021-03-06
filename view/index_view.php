<!DOCTYPE html>
<html lang="ja">
<head>
<!--//定数、/var/www/html/../view/templates/head.phpというドキュメントルートを通り、head.phpデータを読み取る-->
  <?php include VIEW_PATH . 'templates/head.php'; ?>

  <title>商品一覧</title>
   <!--//定数、/assets/css/index.cssというドキュメントルートを通り、index.cssを読み込む-->
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'index.css'); ?>">
</head>
<body>
<!--//定数、/var/www/html/../view/templates/header_logined.phpというドキュメントルートを通り、header_logined.phpデータを読み取る-->
  <?php include VIEW_PATH . 'templates/header_logined.php'; ?>


  <div class="container">
    <h1>商品一覧</h1>
    <!--//定数、/var/www/html/../view/templates/messages.phpというドキュメントルートを通り、messages.phpデータを読み取る-->
    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    <div class="card-deck">
      <div class="row">
      <?php foreach($items as $item){ ?>
        <div class="col-6 item">
          <div class="card h-100 text-center">
            <div class="card-header">
              <?php print h(($item['name'])); ?>
            </div>
            <figure class="card-body">
              <img class="card-img" src="<?php print(IMAGE_PATH . $item['image']); ?>">
              <figcaption>
              <!--数値を3桁のカンマ区切りにする-->
                <?php print(number_format($item['price'])); ?>円
                <?php if($item['stock'] > 0){ ?>
                   <!--form内の情報をindex_add_cart.phpへ飛ばす-->
                  <form action="index_add_cart.php" method="post">
                    <input type="submit" value="カートに追加" class="btn btn-primary btn-block">
                    <input type="hidden" name="item_id" value="<?php print($item['item_id']); ?>">
                    <!--CSRF対策のセッションに登録されたトークンを送信する-->
                    <input type="hidden" name="csrf" value="<?php print($token); ?>">
                  </form>
                <?php } else { ?>
                  <p class="text-danger">現在売り切れです。</p>
                <?php } ?>
              </figcaption>
            </figure>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
  <!--$page_numで商品の全件を表示、$start+1で各ページの1件目の数値を表示し、$start + count($items)で最後のページの商品数を含めて表示する-->
  <p class="text-center"><?php echo $page_num; ?>件中 <?php echo $start + 1; ?> - <?php echo $start + count($items);?>件目の商品</p>

    <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center pagination-lg">
      <?php if ($page > 1){ //現在ページが1より大きい場合に表示?>
        <!--現在ページを-1する-->
        <li class="page-item"><a class="page-link" href="?page=<?php echo ($page - 1); ?>">Prev</a></li>
      <?php } ?>
      <?php for ($x=1; $x <= $pagination ; $x++) { //最大ページ数までforを回してリンクページを表示する?>
        <?php if ($x == $page) { // 現在表示中のページ数の場合はリンクを貼らない ?>
          <li class="page-item active">
            <span class="page-link">
              <!--現在ページのリンクを消す-->
              <?php echo $page. ''; ?><span class="sr-only">(current)</span>
            </span>
          </li>
        <?php } else { ?>
          <!--現在ページ数以外はリンクを張る-->
          <li class="page-item"><a class="page-link" href="?page=<?php echo $x; ?>"><?php echo $x; ?></a></li>
        <?php } } ?>
      <?php if ($page < $pagination) { //現在ページが最大ページ数未満の場合表示?>
      <!--現在ページを+1する-->
        <li class="page-item"><a class="page-link" href="?page=<?php echo ($page + 1); ?>">Next</a></li>
      <?php } ?>
    </ul>
    </nav>

</body>
</html>
