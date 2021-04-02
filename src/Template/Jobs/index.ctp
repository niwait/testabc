<main>

    <div class="contents">

        <section class="cete-list-11">
        <?php
          echo $this->Form->create(
            $jobinfo,
            [
              'url' => '#'
            ]
          );
          ?>
            <p class="ttl">カテゴリー 一覧</p>
            <ul>
                <li>
            
                <label>
                            <select class="parent form-control form-wide" id="" name="job[major]" disabled　required>
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
                            <select class="children form-control form-wide" id="" name="job[middle]" disabled required>
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
                                <select class="" name="job[occupation]" id="" required>
                                    <option value="" class="" disabled　selected>職種</option>
                                    <option value="営業">営業</option>
                                    <option value="事務・管理">事務・管理</option>
                                    <option value="企画・マーケティング">企画・マーケティング</option>
                                    <option value="サービス・販売・外食">サービス・販売・外食</option>
                                    <option value="Web・ゲーム">Web・ゲーム</option>
                                    <option value="クリエイティブ">クリエイティブ</option>
                                    <option value="専門職">専門職</option>
                                    <option value="ITエンジニア">ITエンジニア</option>
                                    <option value="エンジニア（機械・電子）">エンジニア（機械・電子）</option>
                                    <option value="素材・化学・食品">素材・化学・食品</option>
                                    <option value="建築・土木技術職">建築・土木技術職</option>
                                    <option value="交通・運輸">交通・運輸</option>
                                    <option value="医療・福祉・介護">医療・福祉・介護</option>
                                    <option value="教育・公務員・農林水産">教育・公務員・農林水産</option>
                                    <option value="その他">その他</option>
                                </select>
                            </label>
                </li>
                <li>
                    <label>
                        <select class="" name="job[prefecture]" id="" required>
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
                <button type="submit" formmethod="get" name="job[action]" value="get" class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
                </li>
            </ul>
            <p class="kekka-arrow"><span class="material-icons">arrow_drop_down</span></p>
            <?php echo $this->Form->end(); ?>    
        </section>

        <div class="main-area">

            <p class="ttl-00">お仕事を探す</p>
            <?php foreach ($jobinfo as $rowCount => $rowData) : ?>
                    <div class="item00">
                        <article class="item-cld-01">
                            <dl>
                                <dt>
                                 <p><img src="images/hito-icon.svg"></p>
                                 <p class="icon">
                                        
                                        <?php
                                    
                                        if(in_array($rowData['id'],$likes_info)){
                                            echo'<a><span class="material-icons">favorite</span></a>';
                                        
                                        }else{
                                    
                                        echo'<a href="#" class="js-modal-open"  onclick="jobLike('.$rowData['id'].')">
                                        <span class="material-icons">favorite_border</span></a>';
                                        }
                                        ?>
                                </p>
                                </dt>
                                <dd>
                                    <section class="name-data">
                                        <p class="name"><?= $rowData["title"] ?></p>
                                        <p class="data"><?= date( "Y/m/d" ,  strtotime($rowData["today"]))  ?><br>大分類：<?= $rowData["major"] ?></p>
                                     
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
                                <a href="<?php echo sprintf("/Jobs/worksentry?job[id]=%s",$rowData["id"]);?>" class="something">応募する</a>
                               
                                </li>
                                
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
                    <a href="<?= $rowData["url"] ?>"><img src="../<?=$rowData["img"] ?>"></a></p>
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
        $("header nav .menu").load("common.html .menu-list-manabu");
        $("footer").load("common.html .footer-00");
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