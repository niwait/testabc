<main>

    <div class="contents">

        <div class="my-nav-area">
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
            <p class="btn txAlC fz-sm"><a href="/u/<?php echo $user->nickname; ?>/send-message">こちらのユーザーにメッセージを送る</a></p>
        </div>

        <div class="my-main-area">
            <p class="my-ttl">プロフィール</p>
            <div class="my-plofile">
                <ul>
                    <li>
                        <dl>
                            <dt>種　別</dt>
                            <dd>
                                <?php if ($user->position === 'Questioner') { ?>
                                    <p>質問者</p>
                                <?php } elseif ($user->position === 'Respondent') { ?>
                                    <p>回答者</p>
                                <?php } elseif ($user->position === 'Expert') { ?>
                                    <p>専門家</p>
                                <?php } elseif ($user->position === 'Recruitment') { ?>
                                    <p>募　集</p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>名　前</dt>
                            <dd><?php echo $user->kana; ?>　　<?php echo $user->name; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>会 社 名</dt>
                            <dd><?php echo $user->company ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>住　所</dt>
                            <dd><?php echo $user->getAddress();?></dd>
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
                            <dt>T E L</dt>
                            <dd><?php echo $user->phone_number ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>自己紹介</dt>
                            <dd><?php echo nl2br($user->introduction); ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>SNS情報</dt>
                            <dd>
                                <?php foreach ($user_links as $user_link) { ?>
                                <p><a href="<?php echo $user_link->url; ?>" target="_blank">
                                        <?php if ($user_link->type === 'line') { ?>
                                            <img src="/images/sns-line.svg">
                                        <?php } elseif ($user_link->type === 'twitter') { ?>
                                            <img src="/images/sns-twitter.svg">
                                        <?php } elseif ($user_link->type === 'facebook') { ?>
                                            <img src="/images/sns-facebook.svg">
                                        <?php } elseif ($user_link->type === 'instagram') { ?>
                                            <img src="/images/sns-instagram.svg">
                                        <?php } ?>
                                        <?php echo $user_link->url; ?>
                                    </a></p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>得意な分野</dt>
                            <dd><?php echo $user->area_of_speciality; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>専門分野</dt>
                            <dd><?php echo $user->specialized_field; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>職　歴</dt>
                            <dd>
                                <?php foreach ($work_histories as $work_history) { ?>
                                    <p>
                                        <?php echo $work_history->start_month . ' ' . $work_history->start_year; ?> ~ <?php echo $work_history->end_month . ' ' . $work_history->end_year; ?><br>
                                        <?php echo $work_history->title; ?><br>
                                        <?php echo $work_history->company; ?>
                                    </p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>学　歴</dt>
                            <dd>
                                <?php foreach ($education_histories as $education_history) { ?>
                                    <p>
                                        <?php echo $education_history->start_month . ' ' . $education_history->start_year; ?> ~ <?php echo $education_history->end_month . ' ' . $education_history->end_year; ?><br>
                                        <?php echo $education_history->description; ?>
                                    </p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</main>
