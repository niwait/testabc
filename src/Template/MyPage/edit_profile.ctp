<main>

    <div class="contents">
        <div class="my-nav-area pc">
            <p class="photo"><img src="/images/hito-icon.svg"></p>
            <p class="name"><?php echo $user->name; ?></p>
            <p class="name-eng"><?php echo $user->kana; ?></p>
            <ul class="position">
                <?php if ($user->position === 'Questioner') { ?>
                    <li><p>一般ユーザ</p></li>
                <?php } elseif ($user->position === 'Expert') { ?>
                    <li><p>専門家</p></li>
                <?php } ?>
            </ul>
            <p class="btn"><a href="/shitsumon-input">質問する</a></p>
            <ul class="menu">
                <li><p><a href="/my-page">マイページ</a></p></li>
                <li><p><a href="/my-page/profile">プロフィール</a></p></li>
                <li><p><a href="/my-page/questions">質　問</a></p></li>
                <li><p><a href="/my-page/answers">回　答</a></p></li>
                <li><p><a href="/my-page/resume">履歴書</a></p></li>
            <!--<li><p><a href="/my-page/messages">メッセージ</a></p></li>-->
                <li><p><a href="/my-page/bookmarks">ブックマーク</a></p></li>
            </ul>
            <button class="logout" onclick="location.href = '/logout'">ログアウト</button>
        </div>

        <div class="my-main-area">
            <p class="my-ttl">プロフィール 編集</p>
            <?php echo $this->Form->create($form); ?>
                <div class="my-plofile">
                    <?php echo $this->Flash->render() ?>
                    <ul>
                        <li>
                            <dl>
                                <dt>種　別</dt>
                                <dd>
                                    <p>
                                        <label class="chackBtn mgnB00px">
                                            <input type="radio" id="" name="position" <?php if ($user->position === 'Questioner') { ?>checked="checked"<?php } ?> value="Questioner" class=""  onchange="onPositionChanged(this.value);">
                                            <span class="chackMark"></span> 一般ユーザ
                                        </label>
                                        <label class="chackBtn mgnB00px">
                                            <input type="radio" id="" name="position" <?php if ($user->position === 'Expert') { ?>checked="checked"<?php } ?> value="Expert" class="" onchange="onPositionChanged(this.value);">
                                            <span class="chackMark"></span> 専門家
                                        </label>
                                    </p>
                                </dd>
                            </dl>
                        </li>
                        <li id="position_area_container" <?php if ($user->position === 'Questioner') { ?>style="display: none;"<?php } ?>>
                            <dl>
                                <dt>業種</dt>
                                <dd>
                                    <?php echo $this->Form->input('position_area', ['placeholder' => '', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>名　前</dt>
                                <dd>
                                    <p><?php echo $this->Form->input('name', ['placeholder' => '', 'label' => false]); ?></p>
                                    <p><?php echo $this->Form->input('kana', ['placeholder' => '', 'label' => false]); ?></p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>ニックネーム</dt>
                                <dd>
                                    <?php echo $this->Form->input('nickname', ['placeholder' => '', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>職　種</dt>
                                <dd>
                                    <?php echo $this->Form->input('occupation', ['placeholder' => 'ダミー DAMMY', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>資　格</dt>
                                <dd>
                                    <?php echo $this->Form->input('qualification', ['placeholder' => 'ダミー DAMMY', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>会 社 名</dt>
                                <dd>
                                    <?php echo $this->Form->input('company_name', ['placeholder' => 'ダミー DAMMY', 'label' => false]); ?>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>住　所</dt>
                                <dd>
                                    <p>
                                        <?php echo $this->Form->input('postal_code', ['placeholder' => '152-0003', 'label' => false]); ?>
                                    </p>
                                    <p class="selectbox">
                                        <select name="address_region" class="selectbox">
                                            <option value="">都道府県</option>
                                            <option value="北海道" <?php if ($user->address_region === '北海道') { ?>selected="selected"<?php } ?>>北海道</option>
                                            <option value="青森県" <?php if ($user->address_region === '青森県') { ?>selected="selected"<?php } ?>>青森県</option>
                                            <option value="岩手県" <?php if ($user->address_region === '岩手県') { ?>selected="selected"<?php } ?>>岩手県</option>
                                            <option value="宮城県" <?php if ($user->address_region === '宮城県') { ?>selected="selected"<?php } ?>>宮城県</option>
                                            <option value="秋田県" <?php if ($user->address_region === '秋田県') { ?>selected="selected"<?php } ?>>秋田県</option>
                                            <option value="山形県" <?php if ($user->address_region === '山形県') { ?>selected="selected"<?php } ?>>山形県</option>
                                            <option value="福島県" <?php if ($user->address_region === '福島県') { ?>selected="selected"<?php } ?>>福島県</option>
                                            <option value="茨城県" <?php if ($user->address_region === '茨城県') { ?>selected="selected"<?php } ?>>茨城県</option>
                                            <option value="栃木県" <?php if ($user->address_region === '栃木県') { ?>selected="selected"<?php } ?>>栃木県</option>
                                            <option value="群馬県" <?php if ($user->address_region === '群馬県') { ?>selected="selected"<?php } ?>>群馬県</option>
                                            <option value="埼玉県" <?php if ($user->address_region === '埼玉県') { ?>selected="selected"<?php } ?>>埼玉県</option>
                                            <option value="千葉県" <?php if ($user->address_region === '千葉県') { ?>selected="selected"<?php } ?>>千葉県</option>
                                            <option value="東京都" <?php if ($user->address_region === '東京都') { ?>selected="selected"<?php } ?>>東京都</option>
                                            <option value="神奈川県" <?php if ($user->address_region === '神奈川県') { ?>selected="selected"<?php } ?>>神奈川県</option>
                                            <option value="新潟県" <?php if ($user->address_region === '新潟県') { ?>selected="selected"<?php } ?>>新潟県</option>
                                            <option value="富山県" <?php if ($user->address_region === '富山県') { ?>selected="selected"<?php } ?>>富山県</option>
                                            <option value="石川県" <?php if ($user->address_region === '石川県') { ?>selected="selected"<?php } ?>>石川県</option>
                                            <option value="福井県" <?php if ($user->address_region === '福井県') { ?>selected="selected"<?php } ?>>福井県</option>
                                            <option value="山梨県" <?php if ($user->address_region === '山梨県') { ?>selected="selected"<?php } ?>>山梨県</option>
                                            <option value="長野県" <?php if ($user->address_region === '長野県') { ?>selected="selected"<?php } ?>>長野県</option>
                                            <option value="岐阜県" <?php if ($user->address_region === '岐阜県') { ?>selected="selected"<?php } ?>>岐阜県</option>
                                            <option value="静岡県" <?php if ($user->address_region === '静岡県') { ?>selected="selected"<?php } ?>>静岡県</option>
                                            <option value="愛知県" <?php if ($user->address_region === '愛知県') { ?>selected="selected"<?php } ?>>愛知県</option>
                                            <option value="三重県" <?php if ($user->address_region === '三重県') { ?>selected="selected"<?php } ?>>三重県</option>
                                            <option value="滋賀県" <?php if ($user->address_region === '滋賀県') { ?>selected="selected"<?php } ?>>滋賀県</option>
                                            <option value="京都府" <?php if ($user->address_region === '京都府') { ?>selected="selected"<?php } ?>>京都府</option>
                                            <option value="大阪府" <?php if ($user->address_region === '大阪府') { ?>selected="selected"<?php } ?>>大阪府</option>
                                            <option value="兵庫県" <?php if ($user->address_region === '兵庫県') { ?>selected="selected"<?php } ?>>兵庫県</option>
                                            <option value="奈良県" <?php if ($user->address_region === '奈良県') { ?>selected="selected"<?php } ?>>奈良県</option>
                                            <option value="和歌山県" <?php if ($user->address_region === '和歌山県') { ?>selected="selected"<?php } ?>>和歌山県</option>
                                            <option value="鳥取県" <?php if ($user->address_region === '鳥取県') { ?>selected="selected"<?php } ?>>鳥取県</option>
                                            <option value="島根県" <?php if ($user->address_region === '島根県') { ?>selected="selected"<?php } ?>>島根県</option>
                                            <option value="岡山県" <?php if ($user->address_region === '岡山県') { ?>selected="selected"<?php } ?>>岡山県</option>
                                            <option value="広島県" <?php if ($user->address_region === '広島県') { ?>selected="selected"<?php } ?>>広島県</option>
                                            <option value="山口県" <?php if ($user->address_region === '山口県') { ?>selected="selected"<?php } ?>>山口県</option>
                                            <option value="徳島県" <?php if ($user->address_region === '徳島県') { ?>selected="selected"<?php } ?>>徳島県</option>
                                            <option value="香川県" <?php if ($user->address_region === '香川県') { ?>selected="selected"<?php } ?>>香川県</option>
                                            <option value="愛媛県" <?php if ($user->address_region === '愛媛県') { ?>selected="selected"<?php } ?>>愛媛県</option>
                                            <option value="高知県" <?php if ($user->address_region === '高知県') { ?>selected="selected"<?php } ?>>高知県</option>
                                            <option value="福岡県" <?php if ($user->address_region === '福岡県') { ?>selected="selected"<?php } ?>>福岡県</option>
                                            <option value="佐賀県" <?php if ($user->address_region === '佐賀県') { ?>selected="selected"<?php } ?>>佐賀県</option>
                                            <option value="長崎県" <?php if ($user->address_region === '長崎県') { ?>selected="selected"<?php } ?>>長崎県</option>
                                            <option value="熊本県" <?php if ($user->address_region === '熊本県') { ?>selected="selected"<?php } ?>>熊本県</option>
                                            <option value="大分県" <?php if ($user->address_region === '大分県') { ?>selected="selected"<?php } ?>>大分県</option>
                                            <option value="宮崎県" <?php if ($user->address_region === '宮崎県') { ?>selected="selected"<?php } ?>>宮崎県</option>
                                            <option value="鹿児島県" <?php if ($user->address_region === '鹿児島県') { ?>selected="selected"<?php } ?>>鹿児島県</option>
                                            <option value="沖縄県" <?php if ($user->address_region === '沖縄県') { ?>selected="selected"<?php } ?>>沖縄県</option>
                                        </select>
                                    </p>
                                    <p><?php echo $this->Form->input('address_1', ['placeholder' => '目黒区', 'label' => false]); ?></p>
                                    <p><?php echo $this->Form->input('address_2', ['placeholder' => '目黒２−２−２', 'label' => false]); ?></p>
                                    <p><?php echo $this->Form->input('address_3', ['placeholder' => 'マンション301', 'label' => false]); ?></p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>メールアドレス</dt>
                                <dd><?php echo $this->Form->input('email', ['placeholder' => 'hoge@example.com', 'label' => false]); ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>T E L</dt>
                                <dd><?php echo $this->Form->input('phone_number', ['placeholder' => '09012345678', 'label' => false]); ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>自己紹介</dt>
                                <dd><?php echo $this->Form->textarea('introduction', ['placeholder' => '自己紹介', 'label' => false]); ?></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>SNS情報</dt>
                                <dd>
                                    <section class="sns">
                                        <ul>
                                            <li>
                                                <p class="selectbox">
                                                    <select id="sns_type" class="selectbox" onchange="snsChanged()">
                                                        <option value="">SNS</option>
                                                        <option value="LINE">LINE</option>
                                                        <option value="twitter">twitter</option>
                                                        <option value="facebook">facebook</option>
                                                        <option value="instagram">instagram</option>
                                                        <option value="その他">その他</option>
                                                    </select>
                                                </p>
                                            </li>
                                            <li>
                                                <p><input type="text" id="sns_url" disabled="disabled" class="" placeholder="アドレス"></p>
                                            </li>
                                        </ul>
                                        <input type="button" value="＋" class="add pluralBtn" onclick="addNewSNS();">
                                        <div id="sns-list">
                                            <?php foreach ($user_links as $index => $link) { ?>
                                                <p>
                                                    <input type="hidden" name="link[<?php echo $index; ?>][type]" value="<?php echo $link->type; ?>" />
                                                    <input type="hidden" name="link[<?php echo $index; ?>][url]" value="<?php echo $link->url; ?>" />
                                                    <a href="javascript:;" onclick="$(this).parents('p').remove()"><span class="material-icons">delete</span></a>
                                                    <a href="<?php echo $link->url; ?>" target="_blank"><?php echo $link->url; ?></a>
                                                </p>
                                            <?php } ?>
                                        </div>
                                    </section>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>得意な分野</dt>
                                <dd>
                                    <p>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="area_of_speciality_items[]" value="設計" class="" <?php if (strpos($user->area_of_speciality, '設計') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> 設計
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="area_of_speciality_items[]" value="デザイン" class="" <?php if (strpos($user->area_of_speciality, 'デザイン') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> デザイン
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="area_of_speciality_items[]" value="ダミー" class="" <?php if (strpos($user->area_of_speciality, 'ダミー') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> ダミー
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="area_of_speciality_items[]" value="ダミー" class="" <?php if (strpos($user->area_of_speciality,'ダミー') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> ダミー
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="area_of_speciality_items[]" value="ダミー" class="" <?php if (strpos($user->area_of_speciality,'ダミー') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> ダミー
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="area_of_speciality_items[]" value="ダミー" class="" <?php if (strpos($user->area_of_speciality,'ダミー') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> ダミー
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="area_of_speciality_items[]" value="その他" class="" <?php if (strpos($user->area_of_speciality,'その他') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> その他
                                        </label>
                                    </p>
                                    <p>その他は入力してください。複数の場合は「,」コンマ区切り</p>
                                    <p><?php echo $this->Form->input('area_of_speciality', ['placeholder' => 'ダミー,ダミー,ダミー', 'label' => false]); ?></p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>専門分野</dt>
                                <dd>
                                    <p>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="specialized_field_items[]" value="設計" class="" <?php if (strpos($user->specialized_field, '設計') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> 設計
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="specialized_field_items[]" value="デザイン" class="" <?php if (strpos($user->specialized_field, 'デザイン') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> デザイン
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="specialized_field_items[]" value="ダミー" class="" <?php if (strpos($user->specialized_field, 'ダミー') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> ダミー
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="specialized_field_items[]" value="ダミー" class="" <?php if (strpos($user->specialized_field, 'ダミー') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> ダミー
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="specialized_field_items[]" value="ダミー" class="" <?php if (strpos($user->specialized_field, 'ダミー') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> ダミー
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="specialized_field_items[]" value="ダミー" class="" <?php if (strpos($user->specialized_field, 'ダミー') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> ダミー
                                        </label>
                                        <label class="chackBtn">
                                            <input type="checkbox" id="" name="specialized_field_items[]" value="その他" class="" <?php if (strpos($user->specialized_field, 'その他') > -1) { ?>checked="checked"<?php } ?>>
                                            <span class="chackMark"></span> その他
                                        </label>
                                    </p>
                                    <p>その他は入力してください。複数の場合は「,」コンマ区切り</p>
                                    <p><?php echo $this->Form->input('specialized_field', ['placeholder' => 'ダミー,ダミー,ダミー', 'label' => false]); ?></p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>職　歴</dt>
                                <dd>
                                    <div id="work_histories">
                                        <?php foreach ($work_histories as $index => $work_history) { ?>
                                            <section class="kikan">
                                                <ul>
                                                    <li>
                                                        <p class="selectbox">
                                                            <select name="work_history[<?php echo $index; ?>][start_year]" id="wh-year-start-01">
                                                                <?php foreach (range(1950, 2020) as $year) { ?>
                                                                    <option value="<?php echo $year ?>" <?php if ($work_history->start_year == $year) { ?>selected="selected"<?php } ?>><?php echo $year; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="selectbox">
                                                            <select name="work_history[<?php echo $index; ?>][start_month]" id="wh-month-start-01">
                                                                <option value="1" <?php if ($work_history->start_month == 1) { ?>selected="selected"<?php } ?>>1月</option>
                                                                <option value="2" <?php if ($work_history->start_month == 2) { ?>selected="selected"<?php } ?>>2月</option>
                                                                <option value="3" <?php if ($work_history->start_month == 3) { ?>selected="selected"<?php } ?>>3月</option>
                                                                <option value="4" <?php if ($work_history->start_month == 4) { ?>selected="selected"<?php } ?>>4月</option>
                                                                <option value="5" <?php if ($work_history->start_month == 5) { ?>selected="selected"<?php } ?>>5月</option>
                                                                <option value="6" <?php if ($work_history->start_month == 6) { ?>selected="selected"<?php } ?>>6月</option>
                                                                <option value="7" <?php if ($work_history->start_month == 7) { ?>selected="selected"<?php } ?>>7月</option>
                                                                <option value="8" <?php if ($work_history->start_month == 8) { ?>selected="selected"<?php } ?>>8月</option>
                                                                <option value="9" <?php if ($work_history->start_month == 9) { ?>selected="selected"<?php } ?>>9月</option>
                                                                <option value="10" <?php if ($work_history->start_month == 10) { ?>selected="selected"<?php } ?>>10月</option>
                                                                <option value="11" <?php if ($work_history->start_month == 11) { ?>selected="selected"<?php } ?>>11月</option>
                                                                <option value="12" <?php if ($work_history->start_month == 12) { ?>selected="selected"<?php } ?>>12月</option>
                                                            </select>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>〜</p>
                                                    </li>
                                                    <li>
                                                        <p class="selectbox">
                                                            <select name="work_history[<?php echo $index; ?>][end_year]" id="wh-year-end-01">
                                                                <option value=""></option>
                                                                <?php foreach (range(1950, 2020) as $year) { ?>
                                                                    <option value="<?php echo $year ?>" <?php if ($work_history->end_year == $year) { ?>selected="selected"<?php } ?>><?php echo $year; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="selectbox">
                                                            <select name="work_history[<?php echo $index; ?>][end_month]" id="wh-month-end-01">
                                                                <option value="0"></option>
                                                                <option value="1" <?php if ($work_history->end_month == 1) { ?>selected="selected"<?php } ?>>1月</option>
                                                                <option value="2" <?php if ($work_history->end_month == 2) { ?>selected="selected"<?php } ?>>2月</option>
                                                                <option value="3" <?php if ($work_history->end_month == 3) { ?>selected="selected"<?php } ?>>3月</option>
                                                                <option value="4" <?php if ($work_history->end_month == 4) { ?>selected="selected"<?php } ?>>4月</option>
                                                                <option value="5" <?php if ($work_history->end_month == 5) { ?>selected="selected"<?php } ?>>5月</option>
                                                                <option value="6" <?php if ($work_history->end_month == 6) { ?>selected="selected"<?php } ?>>6月</option>
                                                                <option value="7" <?php if ($work_history->end_month == 7) { ?>selected="selected"<?php } ?>>7月</option>
                                                                <option value="8" <?php if ($work_history->end_month == 8) { ?>selected="selected"<?php } ?>>8月</option>
                                                                <option value="9" <?php if ($work_history->end_month == 9) { ?>selected="selected"<?php } ?>>9月</option>
                                                                <option value="10" <?php if ($work_history->end_month == 10) { ?>selected="selected"<?php } ?>>10月</option>
                                                                <option value="11" <?php if ($work_history->end_month == 11) { ?>selected="selected"<?php } ?>>11月</option>
                                                                <option value="12" <?php if ($work_history->end_month == 12) { ?>selected="selected"<?php } ?>>12月</option>
                                                            </select>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </section>
                                            <p><input type="text" id="" name="work_history[<?php echo $index; ?>][company_name]" class="" placeholder="株式会社 TOKYO DESIGN OFFICE" value="<?php echo $work_history->company_name ?>"></p>
                                            <p><input type="text" id="" name="work_history[<?php echo $index; ?>][title]" class="" placeholder="役　職" value="<?php echo $work_history->title; ?>"></p>
                                            <hr class="mgnT20px mgnB20px">
                                        <?php } ?>
                                    </div>
                                    <a href="javascript:;" onclick="addNewWorkHistory()"><span class="material-icons">add</span></a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>学　歴</dt>
                                <dd>
                                    <div id="education_histories">
                                        <?php foreach ($education_histories as $index => $education_history) { ?>
                                            <section class="kikan">
                                                <ul>
                                                    <li>
                                                        <p class="selectbox">
                                                            <select name="education_history[<?php echo $index; ?>][start_year]" id="ah-year-start-01">
                                                                <?php foreach (range(1950, 2020) as $year) { ?>
                                                                    <option value="<?php echo $year ?>" <?php if ($education_history->start_year == $year) { ?>selected="selected"<?php } ?>><?php echo $year; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="selectbox">
                                                            <select name="education_history[<?php echo $index; ?>][start_month]" id="an-month-start-01">
                                                                <option value="1" <?php if ($education_history->start_month == 1) { ?>selected="selected"<?php } ?>>1月</option>
                                                                <option value="2" <?php if ($education_history->start_month == 2) { ?>selected="selected"<?php } ?>>2月</option>
                                                                <option value="3" <?php if ($education_history->start_month == 3) { ?>selected="selected"<?php } ?>>3月</option>
                                                                <option value="4" <?php if ($education_history->start_month == 4) { ?>selected="selected"<?php } ?>>4月</option>
                                                                <option value="5" <?php if ($education_history->start_month == 5) { ?>selected="selected"<?php } ?>>5月</option>
                                                                <option value="6" <?php if ($education_history->start_month == 6) { ?>selected="selected"<?php } ?>>6月</option>
                                                                <option value="7" <?php if ($education_history->start_month == 7) { ?>selected="selected"<?php } ?>>7月</option>
                                                                <option value="8" <?php if ($education_history->start_month == 8) { ?>selected="selected"<?php } ?>>8月</option>
                                                                <option value="9" <?php if ($education_history->start_month == 9) { ?>selected="selected"<?php } ?>>9月</option>
                                                                <option value="10" <?php if ($education_history->start_month == 10) { ?>selected="selected"<?php } ?>>10月</option>
                                                                <option value="11" <?php if ($education_history->start_month == 11) { ?>selected="selected"<?php } ?>>11月</option>
                                                                <option value="12" <?php if ($education_history->start_month == 12) { ?>selected="selected"<?php } ?>>12月</option>
                                                            </select>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>〜</p>
                                                    </li>
                                                    <li>
                                                        <p class="selectbox">
                                                            <select name="education_history[<?php echo $index; ?>][end_year]" id="ah-year-end-01">
                                                                <option value=""></option>
                                                                <?php foreach (range(1950, 2020) as $year) { ?>
                                                                    <option value="<?php echo $year ?>" <?php if ($education_history->end_year == $year) { ?>selected="selected"<?php } ?>><?php echo $year; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="selectbox">
                                                            <select name="education_history[<?php echo $index; ?>][end_month]" id="ah-month-end-01">
                                                                <option value="0"></option>
                                                                <option value="1" <?php if ($education_history->end_month == 1) { ?>selected="selected"<?php } ?>>1月</option>
                                                                <option value="2" <?php if ($education_history->end_month == 2) { ?>selected="selected"<?php } ?>>2月</option>
                                                                <option value="3" <?php if ($education_history->end_month == 3) { ?>selected="selected"<?php } ?>>3月</option>
                                                                <option value="4" <?php if ($education_history->end_month == 4) { ?>selected="selected"<?php } ?>>4月</option>
                                                                <option value="5" <?php if ($education_history->end_month == 5) { ?>selected="selected"<?php } ?>>5月</option>
                                                                <option value="6" <?php if ($education_history->end_month == 6) { ?>selected="selected"<?php } ?>>6月</option>
                                                                <option value="7" <?php if ($education_history->end_month == 7) { ?>selected="selected"<?php } ?>>7月</option>
                                                                <option value="8" <?php if ($education_history->end_month == 8) { ?>selected="selected"<?php } ?>>8月</option>
                                                                <option value="9" <?php if ($education_history->end_month == 9) { ?>selected="selected"<?php } ?>>9月</option>
                                                                <option value="10" <?php if ($education_history->end_month == 10) { ?>selected="selected"<?php } ?>>10月</option>
                                                                <option value="11" <?php if ($education_history->end_month == 11) { ?>selected="selected"<?php } ?>>11月</option>
                                                                <option value="12" <?php if ($education_history->end_month == 12) { ?>selected="selected"<?php } ?>>12月</option>
                                                            </select>
                                                        </p>
                                                    </li>
                                                </ul>
                                                <p><input type="text" id="" name="education_history[<?php echo $index; ?>][description]" class="" placeholder="株式会社 TOKYO DESIGN OFFICE" value="<?php echo $education_history->description ?>"></p>
                                                <hr class="mgnT20px mgnB20px">
                                            </section>
                                        <?php } ?>
                                    </div>
                                    <a href="javascript:;" onclick="addNewEducationHistory()"><span class="material-icons">add</span></a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <p class="mgnT20px">入力内容にお間違えはないですか？　よろしければ「変更する」クリック、タップしてください。マイページの「<a href="/my-page/profile">プロフィール</a>」に反映
                                    されます。</p>
                                <p class="btn22 mgnT20px mgnB20px">
                                    <button class="back" type="button" onClick="location.href='/my-page/profile'">戻　る</button>
                                    <button class="go" type="submit">変更する</button>
                                </p>
                            </dl>
                        </li>
                    </ul>
                </div>
            <?php echo $this->Form->end(); ?>
        </div>

    </div>

</main>

<script type="text/javascript">
    function snsChanged() {
        if ($('#sns_type').val() === '') {
            $('#sns_url').attr('disabled', 'disabled');
        } else {
            $('#sns_url').removeAttr('disabled');
        }
    }

    function onPositionChanged(value) {
        if (value === 'Expert') {
            $('#position_area_container').show();
        } else {
            $('#position_area_container').hide();
        }
    }

    function addNewSNS() {
        if ($('#sns_type').val() === '') {
            return;
        }
        var index = $('#sns-list p').length + 1;
        var type = $('#sns_type').val();
        var url = $('#sns_url').val();
        $('#sns-list').append(`
            <p>
                <input type="hidden" name="link[${index}][type]" value="${type}" />
                <input type="hidden" name="link[${index}][url]" value="${url}" />
                <a href="javascript:;" onclick="$(this).parents('p').remove()"><span class="material-icons">delete</span></a>
                <a href="${url}" target="_blank">${url}</a>
            </p>
        `);
        $('#sns_url').val('');
    }

    function addNewWorkHistory() {
        var index = $('#work_histories section').length + 1;
        $('#work_histories').append(`
            <section class="kikan">
                <ul>
                    <li>
                        <p class="selectbox">
                            <select name="work_history[${index}][start_year]" id="wh-year-start-01">
                                <?php foreach (range(1950, 2020) as $year) { ?>
                                    <option value="<?php echo $year ?>"><?php echo $year; ?></option>
                                <?php } ?>
                            </select>
                        </p>
                    </li>
                    <li>
                        <p class="selectbox">
                            <select name="work_history[${index}][start_month]" id="wh-month-start-01">
                                <option value="1">1月</option>
                                <option value="2">2月</option>
                                <option value="3">3月</option>
                                <option value="4">4月</option>
                                <option value="5">5月</option>
                                <option value="6">6月</option>
                                <option value="7">7月</option>
                                <option value="8">8月</option>
                                <option value="9">9月</option>
                                <option value="10">10月</option>
                                <option value="11">11月</option>
                                <option value="12">12月</option>
                            </select>
                        </p>
                    </li>
                    <li>
                        <p>〜</p>
                    </li>
                    <li>
                        <p class="selectbox">
                            <select name="work_history[${index}][end_year]" id="wh-year-end-01">
                                <option value=""></option>
                                <?php foreach (range(1950, 2020) as $year) { ?>
                                    <option value="<?php echo $year ?>"><?php echo $year; ?></option>
                                <?php } ?>
                            </select>
                        </p>
                    </li>
                    <li>
                        <p class="selectbox">
                            <select name="work_history[${index}][end_month]" id="wh-month-end-01">
                                <option value="0"></option>
                                <option value="1">1月</option>
                                <option value="2">2月</option>
                                <option value="3">3月</option>
                                <option value="4">4月</option>
                                <option value="5">5月</option>
                                <option value="6">6月</option>
                                <option value="7">7月</option>
                                <option value="8">8月</option>
                                <option value="9">9月</option>
                                <option value="10">10月</option>
                                <option value="11">11月</option>
                                <option value="12">12月</option>
                            </select>
                        </p>
                    </li>
                </ul>
                <p><input type="text" id="" name="work_history[${index}][company_name]" class="" placeholder="株式会社 TOKYO DESIGN OFFICE"></p>
                <p><input type="text" id="" name="work_history[${index}][title]" class="" placeholder="役　職"></p>
                <a href="javascript:;" onclick="$(this).parents('section').remove()"><span class="material-icons">delete</span></a>
                <hr class="mgnT20px mgnB20px">
            </section>
        `);
    }

    function addNewEducationHistory() {
        var index = $('#education_histories section').length + 1;
        $('#education_histories').append(`
            <section class="kikan">
                <ul>
                    <li>
                        <p class="selectbox">
                            <select name="education_history[${index}][start_year]" id="ah-year-start-01">
                                <?php foreach (range(1950, 2020) as $year) { ?>
                                    <option value="<?php echo $year ?>"><?php echo $year; ?></option>
                                <?php } ?>
                            </select>
                        </p>
                    </li>
                    <li>
                        <p class="selectbox">
                            <select name="education_history[${index}][start_month]" id="an-month-start-01">
                                <option value="1">1月</option>
                                <option value="2">2月</option>
                                <option value="3">3月</option>
                                <option value="4">4月</option>
                                <option value="5">5月</option>
                                <option value="6">6月</option>
                                <option value="7">7月</option>
                                <option value="8">8月</option>
                                <option value="9">9月</option>
                                <option value="10">10月</option>
                                <option value="11">11月</option>
                                <option value="12">12月</option>
                            </select>
                        </p>
                    </li>
                    <li>
                        <p>〜</p>
                    </li>
                    <li>
                        <p class="selectbox">
                            <select name="education_history[${index}][end_year]" id="ah-year-end-01">
                                <option value=""></option>
                                <?php foreach (range(1950, 2020) as $year) { ?>
                                    <option value="<?php echo $year ?>"><?php echo $year; ?></option>
                                <?php } ?>
                            </select>
                        </p>
                    </li>
                    <li>
                        <p class="selectbox">
                            <select name="education_history[${index}][end_month]" id="ah-month-end-01">
                                <option value="0"></option>
                                <option value="1">1月</option>
                                <option value="2">2月</option>
                                <option value="3">3月</option>
                                <option value="4">4月</option>
                                <option value="5">5月</option>
                                <option value="6">6月</option>
                                <option value="7">7月</option>
                                <option value="8">8月</option>
                                <option value="9">9月</option>
                                <option value="10">10月</option>
                                <option value="11">11月</option>
                                <option value="12">12月</option>
                            </select>
                        </p>
                    </li>
                </ul>
                <p><input type="text" id="" name="education_history[${index}][description]" class="" placeholder="株式会社 TOKYO DESIGN OFFICE"></p>
                <hr class="mgnT20px mgnB20px">
            </section>
        `);
    }
</script>
