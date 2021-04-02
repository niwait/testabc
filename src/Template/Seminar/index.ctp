<main>
<?php
          echo $this->Form->create(
            $seminarinfo,
            [
              'url' => '#'
            ]
          );
          ?>
    <div class="contents">

        <section class="cete-list-11">
            <p class="ttl">カテゴリー 一覧</p>
            <ul>
                <li>
                    <label>
                    <select class="parent" id="" name="seminar[major]" disabled　required>
                                    <option value="" class="" disabled selected>大カテゴリー</option>
                                    <option value="起業・副業">起業・副業</option>
                                    <option value="自己啓発">自己啓発</option>
                                    <option value="お金">お金</option>
                                </select>
                    </label>
                </li>
                <li>
                    <label>
                    <select class="children" id="" name="seminar[middle]" disabled required>
                                    <option value="" class="" disabled selected>中カテゴリー</option>
                                    <option value="個人事業" data-val="起業・副業">個人事業</option>
                                    <option value="会社設立" data-val="起業・副業">会社設立</option>
                                    <option value="フランチャイズ（FC）" data-val="起業・副業">フランチャイズ（FC）</option>
                                    <option value="会計・税務" data-val="起業・副業">会計・税務</option>
                                    <option value="融資・助成金・補助金" data-val="起業・副業">融資・助成金・補助金</option>
                                    <option value="資格取得" data-val="自己啓発">資格取得</option>
                                    <option value="ビジネススキル" data-val="自己啓発">ビジネススキル</option>
                                    <option value="IT全般" data-val="自己啓発">IT全般</option>
                                    <option value="プログラミング" data-val="自己啓発">プログラミング</option>
                                    <option value="WEBデザイン" data-val="自己啓発">WEBデザイン</option>
                                    <option value="ビジネスマナー" data-val="自己啓発">ビジネスマナー</option>
                                    <option value="語学" data-val="自己啓発">語学</option>
                                    <option value="マネジメント" data-val="自己啓発">マネジメント</option>
                                    <option value="融資・助成金・補助金" data-val="お金">融資・助成金・補助金</option>
                                    <option value="不動産" data-val="お金">不動産</option>
                                    <option value="保険" data-val="お金">保険</option>
                                    <option value="会計・税務" data-val="お金">会計・税務</option>
                                </select>
                    </label>
                </li>
                <li>
                    <label>
                        <select class="" name="seminar[prefecture]" id="" required>
                            <option value="" class="" disabled selected>都道府県</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                    </label>
                </li>
                <li>
                    <input type="text" name="seminar[text]" placeholder="フリーワード">
                </li>
                <li>
                <button type="submit" formmethod="get" name="seminar[action]" value="get" class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
                </li>
            </ul>
            <p class="kekka-arrow"><span class="material-icons">arrow_drop_down</span></p>
            <?php echo $this->Form->end(); ?>
        </section>

        <div class="main-area">

        <p class="ttl-00">セミナー・レッスン 一覧</p>


<?php foreach ($seminarinfo as $rowCount => $rowData) : ?>
<div class="item00">
    <article class="item-cld-01">
        <dl>
            <dt>
                <p><img src="images/hito-icon.svg"></p>
                <p class="icon">
                    <a href="my-message-chat.html" target="_blank"><span class="material-icons">mail</span></a>
                    <a href="#" class="js-modal-open" data-target="bookmark-touroku"><span class="material-icons">favorite</span></a>
                </p>
            </dt>
            <dd>
                <section class="name-data">
                    <p class="name"><a href=""><?= $rowData["title"] ?></a></p>
                    <p class="data"><?= date( "Y/m/d" ,  strtotime($rowData["today"]))  ?></p>
                </section>
                <p class="anything"><?= $rowData["company"] ?></p>
                <section class="desc none-border">
                    <p><?= $rowData["text"] ?></p>
                </section>
            </dd>
        </dl>
    </article>
    <article class="item-cld-04">
        <ul class="desc">
            <li>都道府県</li>
            <li><?= $rowData["prefecture"] ?></li>
            <li>場所</li>
            <li><?= $rowData["eria"] ?></li>
            <li>日時</li>
            <li><?= $rowData["date"] ?></li>
            <li>内容</li>
            <li><?= $rowData["contents"] ?></li>
            <li>費用</li>
            <li><?= $rowData["cost"] ?></li>
        </ul>
        <ul class="btn">
            <li><p class="view-details"><a href="<?= $rowData["url"] ?>" target="_blank">詳細を見る</a></p></li>
            <li><p class="Apply"><a href="<?php echo $this->Url->build(['action'=>'seminarentry']); ?>" class="something">応募する</a></p></li>
        </ul>
    </article>
</div>
<?php endforeach; ?>
<p class="pagination">
                <?php echo $this->Paginator->numbers([
                    'templates' => [
                        'prevActive' => '<a href="{{url}}"><span class="material-icons">chevron_left</span></a>',
                        'prevDisabled' => '<a href="javascript:;"><span class="material-icons">chevron_left</span></a>',
                        'nextActive' => '<a href="{{url}}"><span class="material-icons">chevron_right</span></a>',
                        'nextDisabled' => '<a href="javascript:;"><span class="material-icons">chevron_right</span></a>',
                        'first ' => '<a href="{{url}}"><span class="material-icons">first_page</span></a>',
                        'last ' => '<a href="{{url}}"><span class="material-icons">last_page</span></a>',
                        'number' => '<a href="{{url}}"><span class="current">{{text}}</span></a>',
                        'current' => '<a href="{{url}}"><span>{{text}}</span></a>',
                        'ellipsis' => '<a href=""><span class="material-icons">more_horiz</span></a>'
                    ]
                ]); ?>
            </p>

        </div>

        <div class="sub-area">
                <?php foreach ($prinfo as $rowCount => $rowData) : ?>
                    <p class="bnr">
                    <a href="<?= $rowData["url"] ?>"><img src="../<?=$rowData["img"] ?>"></a>
                    </p>
                    <?php endforeach; ?>
                    
                    
                    <p class="ranking-ttl">公式パートナー企業</p>
                    <?php foreach ($bannerinfo as $rowCount => $rowData) : ?>
                    <p class="kigyou-bnr">
                     <a href="<?= $rowData["url"] ?>"><img src="../<?=$rowData["img"] ?>"></a>
                     </p>
                    <?php endforeach; ?>
                    
                </div>

    </div>
</main>
<footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    $(function() {
        $("header .logo-area").load("common.html .logo-btn-00");
        $("header nav .menu").load("common.html .menu-list-manabu");
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