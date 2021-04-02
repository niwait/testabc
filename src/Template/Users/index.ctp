<div class="container">
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
                <div class="kaiin-touroku">
                    <p class="ttl">新 規 会 員 登 録</p>
                    <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                    <?php
 
                echo $this->Form->create(
                         $usersTable,
                     [
                         'type' => 'post',
                          'url' => '#'
                    ]
                     );
                    ?>
                    <section class="input-area">
                        <ul>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>名　前</p>
                                    </dt>
                                    <dd>
                                    <?php echo $this->Form->control('users.name', [
                                        'label' => 'お名前',
                                        'placeholder'=>"田中　太郎"
                                        
                                        ]); ?>                                    
                                    </dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>カナ</p>
                                    </dt>
                                    <dd>
                                    <?php 
                                    echo $this->Form->control('users.kana', [
                                        'label' => 'カナ',
                                        'placeholder'=>"タナカ　タロウ"
                                        ]);
                                     ?>
                                    
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>ニックネーム</p>
                                    </dt>
                                    <dd>
                                    <?php echo $this->Form->control('users.nickname', [
                                        'label' => 'ニックネーム',
                                        'placeholder'=>"タロー"
                                        
                                        ]); ?>
                                    </dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="any">任意</span>会社名</p>
                                    </dt>
                                    <dd><?php 
                                    echo $this->Form->control('users.company', [
                                        'label' => '会社名',
                                        'placeholder'=>"株式会社〇〇"
                                        ]);
                                     ?></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>メールアドレス</p>
                                    </dt>
                                    <dd>
                                    <?php 
                                    echo $this->Form->control('users.mail', [
                                        'label' => 'メールアドレス',
                                        'placeholder'=>"hogehoge@gmail.com"
                                        ]);
                                     ?>        
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>メールアドレス ※確認のためもう一度</p>
                                    </dt>
                                    <dd>
                                    <?php 
                                    echo $this->Form->control('users.conf', [
                                        'label' => '確認',
                                        'placeholder'=>"hogehoge@gmail.com"
                                        ]);
                                     ?>
                                        
                                        
                                        </dd>
                                </dl>
                            </li>
                           
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>住所 都道府県</p>
                                    </dt>
                                    <dd>
                                    
                                        <p class="selectbox">
                                        
                                         <?php                                     
                                                 echo $this->Form->select(
                                             'users.address',
                                          ["都道府県", 
                                          "北海道"=>"北海道", 
                                          "青森県"=>"青森県", 
                                          "岩手県"=>"岩手県", 
                                          "宮城県"=>"宮城県",
                                          "秋田県"=>"秋田県",
                                          "山形県"=>"山形県",
                                          "福島県"=>"福島県",
                                          "茨城県"=>"茨城県",
                                          "栃木県"=>"栃木県",
                                          "群馬県"=>"群馬県",
                                          "埼玉県"=>"埼玉県",
                                          "千葉県"=>"千葉県",
                                          "東京都"=>"東京都",
                                          "神奈川"=>"神奈川",
                                          "新潟県"=>"新潟県",
                                          "富山県"=>"富山県",
                                          "石川県"=>"石川県",
                                          "福井県"=>"福井県",
                                          "山梨県"=>"山梨県",
                                          "長野県"=>"長野県",
                                          "岐阜県"=>"岐阜県",
                                          "静岡県"=>"静岡県",
                                          "愛知県"=>"愛知県",
                                          "三重県"=>"三重県",
                                          "滋賀県"=>"滋賀県",
                                          "京都府"=>"京都府",
                                          "大阪府"=>"大阪府",
                                          "兵庫県"=>"兵庫県",
                                          "奈良県"=>"奈良県",
                                          "和歌山県"=>"和歌山県",
                                          "鳥取県"=>"鳥取県",
                                          "島根県"=>"島根県",
                                          "岡山県"=>"岡山県",
                                          "広島県"=>"広島県",
                                          "山口県"=>"山口県",
                                          "徳島県"=>"徳島県",
                                          "香川県"=>"香川県",
                                          "愛媛県"=>"愛媛県",
                                          "高知県"=>"高知県",
                                          "福岡県"=>"福岡県",
                                          "佐賀県"=>"佐賀県",
                                          "長崎県"=>"長崎県",
                                          "熊本県"=>"熊本県",
                                          "大分県"=>"大分県",
                                          "宮崎県"=>"宮崎県",
                                          "鹿児島県"=>"鹿児島県",
                                          "沖縄県"=>"沖縄県"
                                          ]
                                        
                                                );?>
                                        </p>
                                       
                                    </dd>
                                    
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>生年</p>
                                    </dt>
                                    <dd>
                                        <p class="selectbox">
                                        <?php                                     
                                        
                                        $yearslist=[];
                                        for($year=2020;$year>= 1950; $year--){
                                           
                                            $yearslist[$year]=$year;
                                        } 

                                    
                                      echo $this->Form->select(
                                        'users.barth', 
                                       $yearslist
                                          /*                              
                                      ["生年", 
                                          "2020"=>"2020", 
                                          "2019"=>"2019", 
                                          "2018"=>"2018", 
                                          "2017"=>"2017",
                                          "2016"=>"2016",
                                          "2015"=>"2015",
                                          "2014"=>"2014",
                                          "2013"=>"2013",
                                          "2012"=>"2012",
                                          "2011"=>"2011",
                                          "2010"=>"2010",
                                          "2009"=>"2009",
                                          "2008"=>"2008",
                                          "2007"=>"2007",
                                          "2006"=>"2006",
                                          "2005"=>"2005",
                                          "2004"=>"2004",
                                          "2003"=>"2003",
                                          "2002"=>"2002",
                                          "2001"=>"2001",
                                          "2000"=>"2000",
                                          "1999"=>"1999",
                                          "1998"=>"1998",
                                          "1997"=>"1997",
                                          "1996"=>"1996",
                                          "1995"=>"1995",
                                          "1994"=>"1994",
                                          "1993"=>"1993",
                                          "1992"=>"1992",
                                          "1991"=>"1991",
                                          "1990"=>"1990",
                                          "1989"=>"1989",
                                          "1988"=>"1988",
                                          "1987"=>"1987",
                                          "1986"=>"1986",
                                          "1985"=>"1985",
                                          "1984"=>"1984",
                                          "1983"=>"1983",
                                          "1982"=>"1982",
                                          "1981"=>"1981",
                                          "1980"=>"1980",
                                          "1979"=>"1979",
                                          "1978"=>"1978",
                                          "1977"=>"1977",
                                          "1976"=>"1976",
                                          "1975"=>"1975",
                                          "1974"=>"1974",
                                          "1973"=>"1973",
                                          "1972"=>"1972",
                                          "1971"=>"1971",
                                          "1970"=>"1970"
                                          ]*/
                                        );   
                                                
                                                ?>
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>ポジション</p>
                                    </dt>
                                    <dd>
                                        <p class="selectbox">
                                    
                                        <?php                                     
                                     echo $this->Form->select(
                                        'users.position',
                                     [
                                    "質問者"=>"質問者", 
                                    "回答者"=>"回答者", 
                                    "専門家"=>"専門家",     
                                    "応募、広告"=>"応募、広告"
                                     ]   
                                     );
                                                
                                                ?>
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>ログイン パスワード</p>
                                    </dt>
                                    <dd>
                                    <?php 
                                    echo $this->Form->control('users.password', [
                                        'label' => 'パスワード',
                                        'placeholder'=>"「8文字以上の半角英数字」で設定してください"
                                        ]);
                                     ?>
                                    
                                    </dd>
                                </dl>
                            </li>
                        
                        </ul>

                    </section>
                    <p class="btn22">
                        <button class="back" type="submit" onClick="history.go(-1);">キャンセル</button>
                        <button class="go" type="submit">確認する</button>
                    </p>
                    <?php echo $this->Form->end(); ?>
                    
                </div>
            </div>            
        </main>        
        
        <footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    $(function() {
        $("header .logo-area").load("freelance/common.html .logo-btn-00");
        $("header nav .menu").load("freelance/common.html .menu-list-home");
        $("footer").load("freelance/common.html.footer-00");
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
    var time = new Date();
    var year = time.getFullYear();
    for (var i = year; i >= 1950; i--) {
        $('#year').append('<option value="' + i + '">' + i + '</option>');
    }
</script>
    </footer>
        
   
