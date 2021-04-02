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
                                   <?php echo $this->Form->input('name', ['placeholder' => '', 'label' => false]); ?>
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
                                <p><span class="Required">必須</span>ニックネーム（半角英数字)</p>
                                </dt>
                                <dd>
                                <?php echo $this->Form->input('nickname', ['placeholder' => '', 'label' => false]); ?>
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
                                    <select name="position" class="selectbox" onchange="onPositionChanged(this.value)">
                                            <option value="Questioner">一般ユーザ</option>
                                            <option value="Expert">専門家</option>
                                        </select>
                                    </p>
                                </dd>
                            </dl>
                        </li>
                        <li id="position_area_container" style="display: none;">
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>役職</p>
                                </dt>
                                <dd>
                                    <?php echo $this->Form->input('position_area', ['placeholder' => '', 'label' => false]); ?>
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
                                <?php echo $this->Form->input('email', ['placeholder' => 'hoge@example.com', 'label' => false, 'readonly' => 'readonly']); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>
                                    <p><span class="Required">必須</span>メールアドレス ※確認のためもう一度</p>
                                </dt>
                                <dd>
                                     <?php echo $this->Form->input('email_repeat', ['placeholder' => 'hoge@example.com', 'label' => false, 'readonly' => 'readonly']); ?>
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
                                        echo $this->Form->select('address',
                                        [
                                            '北海道'=>'北海道',
                                            '青森県'=>'青森県',
                                            '岩手県'=>'岩手県',
                                            '宮城県'=>'宮城県',
                                            '秋田県'=>'秋田県',
                                            '山形県'=>'山形県',
                                            '福島県'=>'福島県',
                                            '茨城県'=>'茨城県',
                                            '栃木県'=>'栃木県',
                                            '群馬県'=>'群馬県',
                                            '埼玉県'=>'埼玉県',
                                            '千葉県'=>'千葉県',
                                            '東京都'=>'東京都',
                                            '神奈川県'=>'神奈川県',
                                            '新潟県'=>'新潟県',
                                            '富山県'=>'富山県',
                                            '石川県'=>'石川県',
                                            '福井県'=>'福井県',
                                            '山梨県'=>'山梨県',
                                            '長野県'=>'長野県',
                                            '岐阜県'=>'岐阜県',
                                            '静岡県'=>'静岡県',
                                            '愛知県'=>'愛知県',
                                            '三重県'=>'三重県',
                                            '滋賀県'=>'滋賀県',
                                            '京都府'=>'京都府',
                                            '大阪府'=>'大阪府',
                                            '兵庫県'=>'兵庫県',
                                            '奈良県'=>'奈良県',
                                            '和歌山県'=>'和歌山県',
                                            '鳥取県'=>'鳥取県',
                                            '島根県'=>'島根県',
                                            '岡山県'=>'岡山県',
                                            '広島県'=>'広島県',
                                            '山口県'=>'山口県',
                                            '徳島県'=>'徳島県',
                                            '香川県'=>'香川県',
                                            '愛媛県'=>'愛媛県',
                                            '高知県'=>'高知県',
                                            '福岡県'=>'福岡県',
                                            '佐賀県'=>'佐賀県',
                                            '長崎県'=>'長崎県',
                                            '熊本県'=>'熊本県',
                                            '大分県'=>'大分県',
                                            '宮崎県'=>'宮崎県',
                                            '鹿児島県'=>'鹿児島県',
                                            '沖縄県'=>'沖縄県'

                                        ],
                                            [
                                        'class' => 'selectbox',
                                        ]);
                                        ?>
                                      
                                    </p>
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

<script type="text/javascript">
    function onPositionChanged(value) {
        if (value === 'Expert') {
            $('#position_area_container').show();
        } else {
            $('#position_area_container').hide();
        }
    }
</script>
