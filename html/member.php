<!DOCTYPE html>
<html lang="ja">

<!-- 共通<head>タグ -->
<?php include (dirname(__FILE__).'/parts/head_tag.html'); ?>


<head>
    <title>メンバー紹介 - 片山(徹)研究室 : 宮崎大学</title>
</head>


<body>

    <!-- ヘッダー -->
    <?php include (dirname(__FILE__).'/parts/header.html'); ?>

    <!-- メニュー -->
    <?php include (dirname(__FILE__).'/parts/menu.html'); ?>

    <!-- 本文ブロック -->
    <div class="container f-rounded" style="background:#;height:auto;">
        <h1 class="f-title">メンバー紹介</h1>
        <h2 class="f-h2">准教授 <small>Associate professor</small></h2>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-1">
                        Boss
                    </div>
                    <div class="col-xs-7 col-md-5">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            片山 徹郎
                        </div>
                        <div class="col-md-8 col-sm-7 col-xs-12">
                            Tetsuro KATAYAMA
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <a href="http://earth.cs.miyazaki-u.ac.jp/~kat/" target="_blank">Home page</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="f-h2">修士 <small>Master</small></h2>
        <?php include (dirname(__FILE__).'/parts/member_list/master.html'); ?>

        <!-- ヘッダー -->
        <h2 class="f-h2">学士 <small>Bachelor</small></h2>
        <?php include (dirname(__FILE__).'/parts/member_list/bachelor.html'); ?>
    </div>

    <!-- フッター -->
    <?php include (dirname(__FILE__).'/parts/footer.html'); ?>

    <!-- Javascriptの読み込み -->
    <?php include (dirname(__FILE__).'/parts/js_load.html'); ?>

</body>

</html>
