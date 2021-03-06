<!DOCTYPE html>
<html lang="ja">
<head>
<!--//定数、/var/www/html/../view/templates/head_materialize.phpというドキュメントルートを通り、head_materialize.phpデータを読み取る-->
  <?php include VIEW_PATH . 'templates/head_materialize.php'; ?>
  <title>トップページ</title>
  <!--//定数、/assets/css/cart.cssというドキュメントルートを通り、portfolios.cssを読み込む-->
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'portfolios.css'); ?>">
   <!--//定数、/assets/css/materialize.cssというドキュメントルートを通り、materialize.cssを読み込む-->
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'materialize.css'); ?>">
</head>
<style type="text/css">@charset "UTF-8";
body{background-size: cover;
background-image: url("/assets/images/キングダムハーツ　背景画像.jpg");
background-repeat: no-repeat;
background-attachment: fixed;}
.profile{background-size: cover;
background-image: url("/assets/images/黒模様.jpg");
background-repeat: no-repeat;
background-attachment: fixed;
}
.material-icons{font-size:2em;transition: all 200ms ease-out 0s;}
.material-icons:hover {transform: rotate(30deg); }
.btn-large:hover {}
h1{font-size:3em;}
</style>

<script>(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space
</script>



</head>
<body>
  <nav  class="transparent" role="navigation">
    <div class="nav-wrapper container">
      <h3 id="logo-container" class="brand-logo red-text text-darken-4">beatのポートフォリオまとめ</h3>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner" >
    <div class="container">
<br><br>
      <h1 class="header center black-text">プログラミング奮闘記</h1>
      <div class="row center">
        <h5 class="header col s12  black-text light">
          今まで練習のために作ってきたポートフォリオは
          <br />
          このサイトにまとめておいてあります。
          <br />
        </h5>
      </div>
    </div>
  </div>


<div class="profile">
  <div class="container">
    <div class="section">
      <h5>簡単な自己紹介・学習の目的</h5>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center">
              <i class="material-icons">
                <div>accessibility</div>
              </i>
            </h2>
            <p class="center">
            　<p>
                元々小説作家志望の専門学校卒。出版社に創作物を投稿して大賞を取ることを夢見つつ、流石に仕事もしなければいかんなと地方の町工場でひっそり作業員として働く。
              </p>
              <p>
               ある日頭上から雷が落ちたことをきっかけに自身に小説家の才能がないことに気がつく(遅い)。改めて人生について考えた結果、１からプログラミングを勉強してエンジニアへ転職することを決意した26歳。
              </P>
              <p>
                仕事をしつつプログラミングの勉強を進めPHPの基礎を身につけたが、転職にはまだ足りないと感じたのでエンジニアとしての自分探し兼練習のためにポートフォリオを作ることにしました。作った物は随時更新してここに置いていく予定です。
              </P>
            </p>

          </div>
        </div>


    </div>
  </div>
</div>


<div style="background:#F5F5DC;">
  <div class="container">
    <div class="section">
    <h5>ポートフォリオ一覧</h5>
      <!--   Icon Section   -->
      <div class="row" style="display: flex;">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center pink-text">
              <i class="material-icons">
                <a href="login.php">shopping_cart</a>
              </i>
            </h2>
            <h5 class="center">ECサイト</h5>
            <p class="light">
              　プログラミングの基礎勉強をしながらつくった初めてのポートフォリオ、比較的スタンダードなECサイト。
            <br />
            　phpの基礎的な技術を取り入れて構成されています。
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center">
              <i class="material-icons">
                <?php if ($_SERVER['SERVER_ADDR']==='160.251.11.253'){ ?>
                  <a href="http://160.251.11.253:8080/top.php">create</a>
                <?php } else { ?>
                  <a href="talker.php">create</a>
                <?php } ?>
              </i>
            </h2>
            <h5 class="center">記事投稿サイト(マンガトーカー)</h5>
            <p class="light">
              　自分で１から考えて作ったポートフォリオ。何か人の役に立つものをと考え、とりあえず自分の需要が満たせるものを作るに至った。
              <br />
              　具体的には漫画というジャンルに特化した記事投稿サイト。記事の投稿、閲覧だけでなくコメントもできて同じ趣味の人間とコミュニケーションが取れる。
              <br />
              　コンセプトから考えて自分で一から作ったサイト。laravelの勉強しつつ随時更新してクオリティをあげていきます！

            </p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>
</div>

 <footer class="page-footer grey darken-2">
    <div class="container">
      <div class="row">
        <div class="col m4 s12">
          <h5 class="white-text">製作者 beat</h5>
          <p class="grey-text text-lighten-4">
            <br />
            奈良県出身
            <br />
          </p>
        </div>

        <div class="col m4 s12">
          <h5 class="white-text">ポートフォリオ</h5>
          <p class="grey-text text-lighten-4">
            <br />
            ・ECサイト
            <br />
            ・記事投稿サイト(マンガトーカー)
            <br />
          </p>
        </div>

      </div>
    </div>
     <div class="footer-copyright">
      <div class="container">

      </div>
    </div>
  </footer>
</body>
</html>
