<main>

    <div class="contents">
        <form method="post" action="">
            <input type="hidden" name="_csrfToken" value="<?php echo $this->request->param('_csrfToken'); ?>" />
            <div class="kaiin-touroku">
                <p class="ttl">新 規 会 員 登 録</p>
                <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                <section class="input-area">
                    <ul>
                        <li>
                            <dl>
                                <dt>メールアドレス</dt>
                                <dd><?php echo $data->email; ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>メールアドレス ※確認のためもう一度</dt>
                                <dd><?php echo $data->email; ?></dd>
                            </dl>
                        </li>
                    </ul>
                </section>
                <p class="btn22">
                    <button class="back" type="button" onClick="location.href='/register/verification'">キャンセル</button>
                    <button class="go" type="submit">送信する</button>
                </p>
            </div>
        </form>
    </div>
</main>
