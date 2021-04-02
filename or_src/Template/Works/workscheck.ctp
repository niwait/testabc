

    
<body>    
    
    <div class="container">
        
        <div id="bookmark-touroku" class="modal js-modal">
            <div class="modal-bg js-modal-close"></div>
            <div class="modal-content mc-pstn00">
                <section class="bm-touroku">
                    <p class="ttl">ブックマークに登録いたしました。</p>
                    <p class="lead">「マイページ」のブックマークよりご確認ください。</p>
                    <p class="btn22">
                        <button class="back js-modal-close" type="submit">閉じる</button>
                        <button class="go" onclick="location.href='my-bookmark.html'">ブックマークへ</button>
                    </p>
                </section>
            </div>
        </div>        
        
        <header>
            <div class="logo-area">
            </div>
            <nav>
                <div class="drawer">
                    <div id="logo" class="sp">
                        <a href="home.html">フリーランス支援サイト「フリーダ」</a>
                    </div>
                    <div class="Toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="menu">
                </div>
            </nav>
        </header>
        

        <main>

            <div class="contents">
                
                <div class="main-area">

                    <p class="ttl-00">入力内容確認</p>
                    
                    <div class="item00">
                        <article class="entry">
                            <section>
                                <p class="ttl">システムエンジニア募集</p>
                                <p class="company">株式会社 ダミーシステムオフィス</p>
                            </section>
                            <p>ご入力内容にお間違いはないですか？よろしければ「送信する」ボタンをクリック、タップしてください。</p>
                            <ul>
                                <li><span>必須</span> お名前</li>
                                <li><?php echo $this->request->session()->read("app.name")?></li>
                                <li><span>必須</span> フリガナ</li>
                                <li><?php echo $this->request->session()->read("app.kana")?></li>
                                <li><span>必須</span> 郵便番号</li>
                                <li><?php echo $this->request->session()->read("app.postcode")?></li>
                                <li><span>必須</span> 住 所</li>
                                <li><?php echo $this->request->session()->read("app.address_a")?></li>
                                <li><span>必須</span> 上記以下の住所</li>
                                <li><?php echo $this->request->session()->read("app.address_b")?></li>
                                <li><span class="gray">自由</span> マンション名・建物名</li>
                                <li><?php echo $this->request->session()->read("app.address_c")?></li>
                                <li><span>必須</span> メールアドレス</li>
                                <li><?php echo $this->request->session()->read("app.mail")?></li>
                                <li><span>必須</span> 電話番号</li>
                                <li><?php echo $this->request->session()->read("app.tel")?></li>
                                <li><span>必須</span> 学歴・職歴</li>
                                <li><?php echo $this->request->session()->read("app.educat")?></li>
                                <li><span>必須</span> 保有資格・スキル</li>
                                <li><?php echo $this->request->session()->read("app.skill")?></li>
                                <li><span>必須</span> 自己PR</li>
                                <li><?php echo $this->request->session()->read("app.pr")?></li>
                            </ul>
                            <form method="post" action="#">
                            <input type="hidden" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>">
                            <p class="btn22">
                            <button class="back"><a href="<?php echo $this->Url->build(['controller'=>'products', 'action'=>'worksentry']); ?>">戻 る</a></button>
                                <button class="go" name="app[appsubmit]" value="appasubmit" class="something">送信する</button>
                            </p>
                            </form>
                        </article>
                    </div>

                </div>


                <div class="sub-area">
                <?php foreach ($prsinfo as $rowCount => $rowData) : ?>
                    <p class="bnr">
                        <img src="../<?=$rowData["img"] ?>">
                    </p>
                    <?php endforeach; ?>
                    
                    <?php foreach ($bannerinfo as $rowCount => $rowData) : ?>
                    <p class="ranking-ttl">公式パートナー企業</p>
                    <p class="kigyou-bnr"> <a href="<?= $rowData["url"] ?>"><img src="../<?=$rowData["img"] ?>"></a></p>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </main>        
        
        <footer>
                
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    $(function() {
        $("header .logo-area").load("common.html .logo-btn-00");
        $("header nav .menu").load("common.html .menu-list-oshigoto");
        $("footer").load("common.html .footer-00");
    });
</script>

<script type="text/javascript">
    $(function() {
        $('.Toggle').click(function() {
            $(this).toggleClass('active');
            $('header nav .menu').toggleClass('open');
        });
    });
</script>

<script type="text/javascript">
$(function() {
  var $children = $('.children');
  var original = $children.html();
  $('.parent').change(function() {
    var val1 = $(this).val();
    $children.html(original).find('option').each(function() {
      var val2 = $(this).data('val');
      if (val1 != val2) {
        $(this).not('optgroup,.cate-select11').remove();
      }
    });
    if ($(this).val() === '') {
      $children.attr('disabled', 'disabled');
    } else {
      $children.removeAttr('disabled');
    }
  });
});
</script>
    
<script type="text/javascript">
$('.js-modal-open').on('click', function(){
  var target = $(this).data('target');
  var modal = document.getElementById(target);
  scrollPosition = $(window).scrollTop();
  $('body').addClass('fixed').css({'top': -scrollPosition});
  $(modal).fadeIn();
  return false;
});
$('.js-modal-close').on('click', function(){
  $('body').removeClass('fixed');
  window.scrollTo( 0 , scrollPosition );
  $('.js-modal').fadeOut();
  return false;
});
</script>    
        </footer>
        
        
    </div>

    

    

