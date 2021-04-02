
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
                  <?php
          echo $this->Form->create(
            $jobsinfo,
            [
              'url' => '#'
            ]
          );
          ?>
                <section class="cete-list-11">
                  
                
                <p class="ttl">カテゴリー 一覧</p>
                    <ul>
                        <li>
                            <label>
                            <select class="parent form-control form-wide" id="" name="jobs[major]" disabled　required>
                                    <option value="" class="cate-select11" disabled selected>大カテゴリー</option>
                                    <option value="飲食">飲食</option>
                                    <option value="理美容">理美容</option>
                                    <option value="医療・介護・保育">医療・介護・保育</option>
                                    <option value="運送">運送</option>
                                    <option value="製造">製造</option>
                                </select>
                            </label>
                        </li>
                        <li>
                            <label>
                            <select class="children form-control form-wide" id="" name="jobs[middle]" disabled required>
                                    <option value="" class="cate-select11" disabled selected>中カテゴリー</option>
                                    <option value="占い師" data-val="飲食">占い師</option>
                                    <option value="調理師" data-val="飲食">調理師</option>
                                    <option value="配膳スタッフ" data-val="飲食">配膳スタッフ</option>
                                    <option value="ヘアメイク" data-val="理美容">ヘアメイク</option>
                                    <option value="ヘルパー" data-val="医療・介護・保育">ヘルパー</option>
                                    <option value="ベビーシッター" data-val="医療・介護・保育">ベビーシッター</option>
                                    <option value="歯科衛生士" data-val="医療・介護・保育">歯科衛生士</option>
                                    <option value="軽ドライバー" data-val="運送">軽ドライバー</option>
                                    <option value="テイクアウト配達" data-val="運送">テイクアウト配達</option>
                                    <option value="PCキッティング" data-val="製造">PCキッティング</option>
                                </select>
                            </label>
                        </li>
                        <li>
                            <label>
                                <select class="" name="" id="" required>
                                    <option value="" class="" disabled　selected>職種</option>
                                    <option value="・・・">・・・</option>
                                    <option value="・・・">・・・</option>
                                    <option value="・・・">・・・</option>
                                </select>
                            </label>
                        </li>
                        <li>
                            <label>
                                <select class="" id="" name="jobs[prefecture]"  required>
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
                        <button type="submit" formmethod="get" name="jobs[action]" value="get" class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
                        </li>
                    </ul>
                    <p class="kekka-arrow"><span class="material-icons">arrow_drop_down</span></p>
                  <?php echo $this->Form->end(); ?>                    
                </section>
                
                <div class="main-area">

                    <p class="ttl-00">お仕事を探す</p>
                    <?php foreach ($jobsinfo as $rowCount => $rowData) : ?>
                    <div class="item00">
                        <article class="item-cld-01">
                            <dl>
                                <dt>
                                 <!--<p><img src="images/hito-icon.svg"></p>-->
                                    <p class="icon">
                                        <a href="my-message-chat.html" target="_blank"><span class="material-icons">mail</span></a>
                                        <a href="#" class="js-modal-open" data-target="bookmark-touroku"><span class="material-icons">favorite</span></a>
                                    </p>
                                </dt>
                                <dd>
                                    <section class="name-data">
                                        <p class="name"><?= $rowData["title"] ?></p>
                                        <p class="data"><?= date( "Y/m/d" ,  strtotime($rowData["today"]))  ?></p>
                                    </section>
                                    <p class="anything">会社名</p>
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
                                <li>地区</li>
                                <li><?= $rowData["place"] ?></li>
                                <li>稼働日時</li>
                                <li><?= $rowData["operation"] ?></li>
                                <li>仕事内容</li>
                                <li><?= $rowData["contents"] ?></li>
                                <li>報酬</li>
                                <li><?= $rowData["reword"] ?></li>
                                <li>募集期間</li>
                                <li><?= $rowData["recruitment"] ?></li>
                            </ul>
                            
                            <ul class="btn">
                                <li><p class="view-details"><a href="<?= $rowData["url"] ?>" target="_blank">詳細を見る</a></p></li>
                                <li><p class="Apply">
                                <a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'worksentry']); ?>" class="something">応募する</a>
                                
                                
                            </ul>
                        </article>
                    </div>
                    <?php endforeach; ?>

                    <p class="pagination">
                        <a href=""><span class="material-icons">first_page</span></a>
                        <a href=""><span class="material-icons">chevron_left</span></a>
                        <a href=""><span class="current">1</span></a>
                        <a href=""><span>2</span></a>
                        <a href=""><span>3</span></a>
                        <a href="" class="pc"><span>4</span></a>
                        <a href="" class="pc"><span>5</span></a>
                        <a href=""><span class="material-icons">more_horiz</span></a>
                        <a href="" class="pc"><span>28</span></a>
                        <a href="" class="pc"><span>29</span></a>
                        <a href="" class="pc"><span>30</span></a>
                        <a href=""><span class="material-icons">chevron_right</span></a>
                        <a href=""><span class="material-icons">last_page</span></a>
                    </p>

                </div>



                <div class="sub-area">
                <?php foreach ($prinfo as $rowCount => $rowData) : ?>
                    <p class="bnr">
                        <img src="../<?=$rowData["img"] ?>">
                    </p>
                    <?php endforeach; ?>
                    
                  
                    <p class="ranking-ttl">公式パートナー企業</p>
                    <?php foreach ($bannerinfo as $rowCount => $rowData) : ?>
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

    
    
>
