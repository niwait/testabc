    
    
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
            $productinfo,
            [
              'url' => '#'
            ]
          );
          ?>
                
                <section class="cete-list-22">
                    <p class="ttl">カテゴリー 一覧</p>
                    <ul>
                        <li>
                            <label>
                                <select class="parent" id="" name="product[major]" disabled　required>
                                    <option value="" class="cate-select11" disabled selected>大カテゴリー</option>
                                    <option value="開発">開発</option>
                                    <option value="デザイン">デザイン</option>
                                    <option value="情報共有">情報共有</option>
                                    <option value="マーケティング">マーケティング</option>
                                    <option value="セールス">セールス</option>
                                    <option value="会計・財務">会計・財務</option>
                                    <option value="人事・労務">人事・労務</option>
                                    <option value="セキュリティ">セキュリティ</option>
                                    <option value="ITインフラ">ITインフラ</option>
                                    <option value="データ分析">データ分析</option>
                                    <option value="システム運用">システム運用</option>
                                </select>
                            </label>
                        </li>
                        <li>
                            <label>
                                <select class="children" id="" name="product[middle]"disabled required>
                                    <option value="" class="cate-select11" disabled selected>中カテゴリー</option>
                                    <option value="ソースコード管理" data-val="開発">ソースコード管理</option>
                                    <option value="IDE(総合開発環境)" data-val="開発">IDE(総合開発環境)</option>
                                    <option value="WEBデータベース" data-val="開発">WEBデータベース</option>
                                    <option value="共同開発ツール" data-val="開発">共同開発ツール</option>
                                    <option value="グラフィックデザイン" data-val="デザイン">グラフィックデザイン</option>
                                    <option value="ダイアグラム" data-val="デザイン">ダイアグラム</option>
                                    <option value="ビジネスチャット" data-val="情報共有">ビジネスチャット</option>
                                    <option value="グループウェア" data-val="情報共有">グループウェア</option>
                                    <option value="WEB会議" data-val="情報共有">WEB会議</option>
                                    <option value="チームビルディング" data-val="情報共有">チームビルディング</option>
                                    <option value="オンラインストレージ" data-val="情報共有">オンラインストレージ</option>
                                    <option value="タスク管理" data-val="情報共有">タスク管理</option>
                                    <option value="コンテンツ管理 " data-val="情報共有">コンテンツ管理</option>
                                    <option value="受付システム" data-val="情報共有">受付システム</option>
                                    <option value="文書管理" data-val="情報共有">文書管理</option>
                                    <option value="メール" data-val="マーケティング">メール</option>
                                    <option value="WEBサイト構築" data-val="マーケティング">WEBサイト構築</option>
                                    <option value="WEB接客" data-val="マーケティング">WEB接客</option>
                                    <option value="WEBチャット" data-val="マーケティング">WEBチャット</option>
                                    <option value="MA" data-val="マーケティング">MA</option>
                                    <option value="CMS" data-val="マーケティング">CMS</option>
                                    <option value="SEO" data-val="マーケティング">SEO</option>
                                    <option value="SNS" data-val="マーケティング">SNS</option>
                                    <option value="顧客管理" data-val="セールス">中カテゴリーC-c</option>
                                    <option value="営業支援" data-val="セールス">営業支援</option>
                                    <option value="カスタマーサポート" data-val="セールス">カスタマーサポート</option>
                                    <option value="勤怠管理" data-val="人事・労務">勤怠管理</option>
                                    <option value="勤務管理" data-val="人事・労務">勤務管理</option>
                                    <option value="採用管理" data-val="人事・労務">採用管理</option>
                                    <option value="人事評価" data-val="人事・労務">人事評価</option>
                                    <option value="タレントマネジメント" data-val="人事・労務">タレントマネジメント</option>
                                    <option value="電子契約・署名" data-val="セキュリティー">電子契約・署名</option>
                                    <option value="バックアップ" data-val="セキュリティー">バックアップ</option>
                                    <option value="アンチウィルス" data-val="セキュリティー">アンチウィルス</option>
                                    <option value="ファイアウォール" data-val="セキュリティー">ファイアウォール</option>
                                    <option value="VPN" data-val="セキュリティー">VPN</option>
                                    <option value="WEBフィルタリング" data-val="セキュリティ">WEBフィルタリング</option>
                                    <option value="リモートアクセス" data-val="ITインフラ">リモートアクセス</option>
                                    <option value="IaaS" data-val="ITインフラ">IaaS</option>
                                    <option value="OS" data-val="ITインフラ">OS</option>
                                    <option value="ホスティング" data-val="ITインフラ">ホスティング</option>
                                    <option value="BI（ビジネスインテリジェンス）" data-val="データ分析">BI（ビジネスインテリジェンス）</option>
                                    <option value="機械学習" data-val="データ分析">機械学習</option>
                                    <option value="IT資産管理" data-val="システム運用">IT資産管理</option>
                                    <option value="RPA" data-val="システム運用">RPA</option>
                                </select>
                            </label>
                        </li>
                        <li>
                            <input type="text" name="product[text]" placeholder="フリーワード">
                        </li>
                        <li>
                        <button type="submit" formmethod="get" name="product[action]" value="get" class="btn btn-info pull-right"><i class="fas fa-search"></i>検索する</button>
                        </li>
                    </ul>
                    <p class="kekka-arrow"><span class="material-icons">arrow_drop_down</span></p>
                </section>
                <?php echo $this->Form->end(); ?> 
                <div class="main-area">

                    <p class="ttl-00">製品・サービス</p>
                    


                    <?php foreach ($productinfo as $rowCount => $rowData) : ?>
                    <div class="item00">
                        <article class="item-cld-01">
                            <dl>
                                <dt>
                                    <p><img src="images/hito-icon.svg"></p>
                                    <p class="view-details"><a href="<?= $rowData["url"] ?>" target="_blank">詳細を見る</a></p>
                                    <p class="icon">
                                        <a href="my-message-chat.html" target="_blank"><span class="material-icons">mail</span></a>
                                        <a href="#" class="js-modal-open" data-target="bookmark-touroku"><span class="material-icons">favorite</span></a>
                                    </p>
                                </dt>
                                <dd>
                                
                                    <section class="name-data">
                                        <p class="name"> <?= $rowData["product"] ?></p>
                                        <p class="data"><?= date( "Y/m/d" ,  strtotime($rowData["today"]))  ?></p>
                                    </section>
                                    <p class="anything"><?= $rowData["company"] ?></p>
                                    <section class="desc none-border">
                                        <p><?= $rowData["text"] ?></p>
                                    </section>
                                </dd>
                            </dl>
                        </article>
                        <article class="item-cld-03 js-scrollable">
                            <table>
                                <tr>
                                    <th>利用料金</th>
                                    <th>初期費用</th>
                                    <th>無料プラン</th>
                                    <th>無料トライアル</th>
                                </tr>
                                <tr>
                                    <td><?= $rowData["mony"] ?></td>
                                    <td><?= $rowData["initial"] ?></td>
                                    <td><?= $rowData["flee"] ?></td>
                                    <td><?= $rowData["trial"] ?></td>
                                </tr>
                            </table>                            
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

                    <p class="bnr">
                        <img src="images/bnr.jpg">
                    </p>
                    
                    <p class="ranking-ttl">注目ランキング</p>
                    <section class="ranking">
                        <ul>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank"><img src="images/no1.svg">No.1</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank"><img src="images/no2.svg">No.2</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank"><img src="images/no3.svg">No.3</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank">No.4</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank">No.5</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank">No.6</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank">No.7</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank">No.8</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank">No.9</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <dl>
                                        <dt>
                                            <img src="images/rank.png">
                                        </dt>
                                        <dd>
                                            <p class="rank">No.10</p>
                                            <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                        </dd>
                                    </dl>
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </main>        
        
        <footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    $(function() {
        $("header .logo-area").load("common.html .logo-btn-00");
        $("header nav .menu").load("common.html .menu-list-seihin-service");
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
        
        

    
    
   

