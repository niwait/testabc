<main>

    <div class="contents">
        <?php echo $this->Form->create($form); ?>
            <div class="kaiin-touroku">
                <p class="ttl">新 規 会 員 登 録</p>
                <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                <section class="input-area">
                    <ul>
                        <li>
                            <dl>
                                <dt>メールアドレス</dt>
                                <dd><?php echo $this->Form->input('email', ['placeholder' => 'hoge@example.com', 'label' => false]); ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>メールアドレス ※確認のためもう一度</dt>
                                <dd><?php echo $this->Form->input('email_repeat', ['placeholder' => 'hoge@example.com', 'label' => false]); ?></dd>
                            </dl>
                        </li>
                    </ul>
                </section>
                <p class="btn22">
                    <button class="back" type="button" onclick="document.location='/'">キャンセル</button>
                    <button class="go" type="submit">確認する</button>
                </p>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</main>
