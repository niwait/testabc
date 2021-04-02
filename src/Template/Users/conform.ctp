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
                    <section class="input-area">
                        <ul>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>名　前</p>
                                    </dt>
                                    <dd><?php echo $this->request->session()->read("users.name")?></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>カナ</p>
                                    </dt>
                                    <dd><?php echo $this->request->session()->read("users.kana")?></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>ニックネーム</p>
                                    </dt>
                                    <dd><?php echo $this->request->session()->read("users.nickname")?></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="any">任意</span>会社名</p>
                                    </dt>
                                    <dd><?php echo $this->request->session()->read("users.company")?></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>メールアドレス</p>
                                    </dt>
                                    <dd><?php echo $this->request->session()->read("users.mail")?></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>確認</p>
                                    </dt>
                                    <dd><?php echo $this->request->session()->read("users.conf")?></dd>
                                </dl>
                            </li>
                            
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>住所 都道府県</p>
                                    </dt>
                                    <dd><?php echo $this->request->session()->read("users.address")?></dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>生年</p>
                                    </dt>
                                    <dd><?php echo $this->request->session()->read("users.barth")?> </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>ポジション</p>
                                    </dt>
                                    <dd><?php echo $this->request->session()->read("users.position")?> </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <p><span class="Required">必須</span>ログイン パスワード</p>
                                    </dt>
                                    <dd>・・・・・・・・・・・・</dd>
                                </dl>
                            </li>
                        </ul>
                    </section>
                    <form method="post" action="#">
                    <input type="hidden" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>">
                    <p class="btn22">
                        <button class="back" type="submit" onClick="history.go(-1);">キャンセル</button>
                        <button class="go" name="users[conformsubmit]" value="conformsubmit">登録する</button>
                    </p>
                    </form>
                </div>
            </div>            
        </main>        
        
        <footer>
               
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    $(function() {
        $("header .logo-area").load("freelance/common.html .logo-btn-00");
        $("header nav .menu").load("freelance/common.html .menu-list-home");
        $("footer").load("freelance/common.html .footer-00");
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
        
    </div>
