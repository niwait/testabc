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
                                <dt>
                                    <p><span class="Required">必須</span>名　前</p>
                                </dt>
                                <dd><?php echo $data->nickname; ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>NAME</p>
                                </dt>
                                <dd><?php echo $data->kana; ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>English NAME</p>
                                </dt>
                                <dd><?php echo $data->name; ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>Position</p>
                                </dt>
                                <dd>
                                    <?php if ($data->position === 'Questioner') { ?>
                                        質問者
                                    <?php } elseif ($data->position === 'Respondent') { ?>
                                        回答者
                                    <?php } elseif ($data->position === 'Expert') { ?>
                                        専門家
                                    <?php } elseif ($data->position === 'Recruitment') { ?>
                                        募　集
                                    <?php } ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="any">任意</span>会社名</p>
                                </dt>
                                <dd><?php echo $data->company_name; ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>メールアドレス</p>
                                </dt>
                                <dd><?php echo $data->email; ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>住所 都道府県</p>
                                </dt>
                                <dd><?php echo $data->address; ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>生年</p>
                                </dt>
                                <dd><?php echo $data->birth; ?></dd>
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
                <p class="btn22">
                    <button class="back" type="button" onClick="location.href='/register'">キャンセル</button>
                    <button class="go" type="submit">登録する</button>
                </p>
            </div>
        </form>
    </div>
</main>
