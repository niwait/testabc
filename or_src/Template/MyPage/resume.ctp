<main>

    <div class="contents">

        <div class="my-nav-area pc">
            <p class="photo"><img src="/images/hito-icon.svg"></p>
            <p class="name"><?php echo $user->kana; ?></p>
            <p class="name-eng"><?php echo $user->name; ?></p>
            <ul class="position">
                <?php if ($user->position === 'Questioner') { ?>
                    <li><p>質問者</p></li>
                <?php } elseif ($user->position === 'Respondent') { ?>
                    <li><p>回答者</p></li>
                <?php } elseif ($user->position === 'Expert') { ?>
                    <li><p>専門家</p></li>
                <?php } elseif ($user->position === 'Recruitment') { ?>
                    <li><p>募　集</p></li>
                <?php } ?>
            </ul>
            <p class="btn"><a href="/shitsumon-input">質問する</a></p>
            <ul class="menu">
                <li><p><a href="/my-page">マイページ</a></p></li>
                <li><p><a href="/my-page/profile">プロフィール</a></p></li>
                <li><p><a href="/my-page/questions">質　問</a></p></li>
                <li><p><a href="/my-page/answers">回　答</a></p></li>
                <li><p><a href="/my-page/resume">履歴書</a></p></li>
                <li><p><a href="/my-page/messages">メッセージ</a></p></li>
                <li><p><a href="/my-page/bookmarks">ブックマーク</a></p></li>
            </ul>
            <button class="logout" onclick="location.href = '/logout'">ログアウト</button>
        </div>

        <div class="my-main-area">
            <p class="my-ttl">履 歴 書</p>
            <div class="my-plofile">
                <p class="henshu"><a href="/my-page/profile/edit">編 集</a></p>
                <ul>
                    <li>
                        <dl>
                            <dt>名　前</dt>
                            <dd><?php echo $user->name; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>フリガナ</dt>
                            <dd><?php echo $user->kana ?>></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>郵便番号</dt>
                            <dd><?php echo $user->postal_code; ?>, <?php echo $user->address_region ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>住　所</dt>
                            <dd><?php echo $user->address_1; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>上記以下の住所</dt>
                            <dd><?php echo $user->address_2; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>マンション名・建物名</dt>
                            <dd><?php echo $user->address_3; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>メールアドレス</dt>
                            <dd><?php echo $user->email; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>電話番号</dt>
                            <dd><?php echo $user->phone_number ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>学歴・職歴</dt>
                            <dd>
                                <?php foreach ($education_histories as $education_history) { ?>
                                    <p><?php echo $education_history->start_month . ' ' . $education_history->start_year; ?> ~ <?php echo $education_history->end_month . ' ' . $education_history->end_year; ?><br><?php echo $education_history->description; ?></p>
                                <?php } ?>
                                <hr />
                                <?php foreach ($work_histories as $work_history) { ?>
                                    <p>
                                        <?php echo $work_history->start_month . ' ' . $work_history->start_year; ?> ~ <?php echo $work_history->end_month . ' ' . $work_history->end_year; ?><br>
                                        <?php echo $work_history->title; ?><br>
                                        <?php echo $work_history->company_name; ?>
                                    </p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>保有資格・スキル</dt>
                            <dd><?php echo $user->qualification; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>自己PR</dt>
                            <dd><?php echo $user->introduction; ?></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</main>
