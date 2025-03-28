<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio</title>
    <!-- BootstrapのCSS読み込み-->
    <link href="style.css" rel="stylesheet" /> 
    <!-- BootstrapのCDNでのCSS読み込み -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <div class="container">
        <h1 class="h1 py-3">Portfolio</h1>
      </div>
    </header>
    <!-- グローバルナビ -->
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container">
        <a class="navbar-brand text-white" href="#">Home</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">WordPress</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">HTML</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">CSS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">PHP</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="bg-light">
      <div class="container">
        <!-- ピックアップ記事 -->
         <div class="row py-3">
          <div class="col-md-4 col-12">
            <div class="bg-white py-3">
              <!-- サムネイル -->
               <div class="pb-3">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img1.png" alt="">
               </div>
              <!-- 記事 -->
               <h2 class="h4 px-3 pd-3">テキストテキストテキストテキストテキストテキスト</h2>
              <!-- ボタン -->
               <div class="text-center">
                <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                  READ MORE
                </div>
                </a>
               </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="bg-white py-3">
              <!-- サムネイル -->
               <div class="pb-3">
                <img class="img-fluid" src="img/img2.png" alt="">
               </div>
              <!-- 記事 -->
               <h2 class="h4 px-3 pd-3">テキストテキストテキストテキストテキストテキスト</h2>
              <!-- ボタン -->
               <div class="text-center">
                <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                  READ MORE
                </div>
                </a>
               </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <div class="bg-white py-3">
              <!-- サムネイル -->
               <div class="pb-3">
                <img class="img-fluid" src="img/img3.png" alt="">
               </div>
              <!-- 記事 -->
               <h2 class="h4 px-3 pd-3">テキストテキストテキストテキストテキストテキスト</h2>
              <!-- ボタン -->
               <div class="text-center">
                <a href="">
                  <div class="d-inline-block border p-3 text-secondary">
                  READ MORE
                </div>
                </a>
               </div>
            </div>
          </div>
         </div>
         <div class="row py-3">
            <!-- メインコンテンツ -->
            <div class="col-md-8 col-12">
              <div class="bg-white py-3 text-center">
                <!-- 日付 -->
                <p>2019/12/14</p>
                <!-- 記事タイトル -->
                <h2 class="h4 px-3 pd-3 font-weight-bolder">テキストテキストテキストテキストテキストテキスト</h2>
                <!-- カテゴリー -->
                <p><a href="">WoredPress</a></p>
                <!-- サムネイル -->
                <div class="pb-3">
                  <img class="img-fluid" src="img/img4.png" alt="">
                </div>
                <!-- ディスクリプション -->
                <p class="text-secondary">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <!-- ボタン -->
                <div class="text-center">
                  <a href="">
                    <div class="d-inline-block border p-3 text-secondary">
                    READ MORE
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <!-- サイドバー -->
            <div class="col-md-4 col-12">
              <!-- プロフィール -->
              <div class="container bg-white mb-5 py-5">
                <div class="mx-5">
                  <img class="img-fluid rounded-circle" src="img/img6.png" alt="">
                </div>
                <div class="text-center">
                  <h4 class="d-inline-block py-3 border-bottom border-info">よしや　まき</h4>
                </div>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
              <!-- 検索窓 -->
              <div class="container bg-white mb-5 py-5">
                <form>
                    <input type="text" class="form-control"  placeholder="Serch for">
                </form>
              </div>
              <!-- 読んで欲しい記事 -->
              <div class="container bg-white mb-5 py-5">
                <div class="text-center pb-5">
                  <h4 class="d-inline-block py-3 border-bottom border-info">読んで欲しい記事</h4>
                </div>
                <div class="pb-5">
                  <!-- サムネイル -->
                   <div class="pb-3">
                    <img class="img-fluid" src="img/img7.png" alt="">
                   </div>
                  <!-- 記事 -->
                   <h5 class="h5">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</h2>
                </div>
                <div class="pb-5">
                  <!-- サムネイル -->
                   <div class="pb-3">
                    <img class="img-fluid" src="img/img8.png" alt="">
                   </div>
                  <!-- 記事 -->
                   <h5 class="h5">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</h2>
                </div>
                <div class="pb-5">
                  <!-- サムネイル -->
                   <div class="pb-3">
                    <img class="img-fluid" src="img/img9.png" alt="">
                   </div>
                  <!-- 記事 -->
                   <h5 class="h5">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</h2>
                </div>
              </div>
            </div>
         </div>
      </div>
      <footer class="bg-white">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-12">
              <div class=" pb-5">
                <h4 class="d-inline-block py-3 border-bottom border-info">About</h4>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class=" pb-5">
                <h4 class="d-inline-block py-3 border-bottom border-info">Portfolio</h4>
              </div>
              <div class="p-3 border-top border-bottom border-secondary">
                <a class="text-secondary" href="">
                  ポートフォリオサイト
                </a>
              </div>
              <div class="p-3 border-top border-bottom border-secondary">
                <a class="text-secondary" href="">
                  ポートフォリオサイト
                </a>
              </div>
            </div>
            <div class="col-md-4 col-12">
              <div class=" pb-5">
                <h4 class="d-inline-block py-3 border-bottom border-info">X</h4>
              </div>
              <a href="https://twitter.com/intent/tweet?screen_name=x&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-size="large" data-text="こんにちは" data-related="1973_maki" data-lang="ja" data-show-count="false">Tweet to @x</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
        </div>
        <div class="bg-dark text-white text-center p-3">
          &copy;maki yoshiya, 2024 All Rights Reserved.
        </div>
      </footer>
    </main>
    <!-- Bootstrapのjs読み込み
    <script src="js/bootstrap.min.js"></script> -->
    <!-- BootstrapのCDNでのjs読み込み -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
