<main>
    <div class="contents">
        <?php echo $this->Form->create($form); ?>
            <div class="kaiin-touroku">
                <p class="ttl">新 規 会 員 登 録</p>
                <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                <section class="input-area">
                    <?php echo $this->Flash->render() ?>
                    <ul>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>名　前</p>
                                </dt>
                                <dd>
                                    <?php echo $this->Form->input('nickname', ['placeholder' => '田中　太郎', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>NAME</p>
                                </dt>
                                <dd>
                                    <?php echo $this->Form->input('kana', ['placeholder' => '', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>English NAME</p>
                                </dt>
                                <dd>
                                    <?php echo $this->Form->input('name', ['placeholder' => 'TANAKA TARO', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>Position</p>
                                </dt>
                                <dd>
                                    <p class="selectbox">
                                        <select name="position" class="selectbox">
                                            <option value="Questioner">質問者</option>
                                            <option value="Respondent">回答者</option>
                                            <option value="Expert">専門家</option>
                                            <option value="Recruitment">募　集</option>
                                        </select>
                                    </p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="any">任意</span>会社名</p>
                                </dt>
                                <dd>
                                    <?php echo $this->Form->input('company_name', ['placeholder' => '株）TOKYO DESIGN OFFICE', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>メールアドレス</p>
                                </dt>
                                <dd>
                                    <?php echo $this->Form->input('email', ['placeholder' => 'hoge@example.com', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>メールアドレス ※確認のためもう一度</p>
                                </dt>
                                <dd>
                                    <?php echo $this->Form->input('email_repeat', ['placeholder' => 'hoge@example.com', 'label' => false]); ?>
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
                                        <select name="address" class="selectbox">
                                            <option value="">都道府県</option>
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
                                        <select name="birth" id="year">
                                            <?php foreach (range(2020, 1950) as $year) { ?>
                                                <option value="<?php echo $year ?>"><?php echo $year; ?></option>
                                            <?php } ?>
                                        </select>
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
                                    <?php echo $this->Form->input('password', ['placeholder' => '「8文字以上の半角英数字」で設定してください ', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </section>
                <p class="btn22">
                    <button class="back" type="button" onclick="location.href='/register';">キャンセル</button>
                    <button class="go" type="submit">確認する</button>
                </p>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</main>
