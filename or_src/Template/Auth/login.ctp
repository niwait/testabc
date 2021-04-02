<main>
    <div class="contents">
        <form method="post" action="">
            <input type="hidden" name="_csrfToken" value="<?php echo $this->request->param('_csrfToken'); ?>" />
            <div class="kaiin-touroku">
                <p class="ttl">ログイン</p>
                <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                <section class="input-area">
                    <ul>
                        <li>
                            <dl>
                                <dt>ログインID（メールアドレス）</dt>
                                <dd><input type="email" id="" name="email" class="" placeholder="hoge@example.com"></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>ログイン パスワード</dt>
                                <dd><input type="password" id="" name="password" class="" placeholder="パスワード"></dd>
                            </dl>
                        </li>
                    </ul>
                </section>
                <p class="btn22">
                    <button class="back" type="button" onClick="history.go(-1);">キャンセル</button>
                    <button class="go" type="submit">ログイン</button>
                </p>
            </div>
        </form>
    </div>
</main>
