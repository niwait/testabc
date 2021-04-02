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
            <p class="my-ttl">メッセージ</p>
            <div class="my-message-chat">
                <?php echo $this->Form->create($form); ?>
                    <section class="msg-inputArea">
                        <ul>
                            <li>
                                <dl>
                                    <dt>To.</dt>
                                    <dd>
                                        <?php echo $user->kana; ?>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>件　名</dt>
                                    <dd>
                                        <?php echo $this->Form->input('subject', ['placeholder' => 'この文章はダミーです。', 'label' => false]); ?>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>内　容</dt>
                                    <dd>
                                        <?php echo $this->Form->textarea('message', ['placeholder' => '内容をご入力ください。', 'label' => false]); ?>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>&nbsp;</dt>
                                    <dd>
                                        <p class="btn22">
                                            <button class="back" type="button" onClick="history.go(-1);">戻　る</button>
                                            <button class="go" type="submit">確　認</button>
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </section>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>

    </div>

</main>
