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
            <p class="my-ttl">メッセージ</p>
            <div class="my-message-chat">
                <?php echo $this->Form->create($form); ?>
                    <section class="msg-inputArea">
                        <ul>
                            <li>
                                <dl>
                                    <dt>To.</dt>
                                    <dd>
                                        <?php echo $thread->sender_user_kana; ?>
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
                                            <button class="back" type="button" onClick="location.href='/my-page/messages'">戻　る</button>
                                            <button class="go" type="submit">確　認</button>
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </section>
                <?php echo $this->Form->end(); ?>

                <p class="mgnB30px egrn txAlC">※ ↓ 初回は下記のやりとりは無し。 ↓ </p>
                <?php foreach ($messages as $message) { ?>
                    <?php if ($message->is_mine) { ?>
                        <section class="msg-histry-my">
                            <ul>
                                <li>
                                    <dl>
                                        <dt>
                                            <img src="/images/hito-icon.svg">
                                            <p class="name"><?php echo $message->user_kana; ?></p>
                                        </dt>
                                        <dd>
                                            <p class="ttl"><?php $thread->subject; ?></p>
                                            <p class="naiyou"><?php echo $message->message; ?></p>
                                            <p class="date"><?php echo (new DateTime($message->created_at))->format('Y/m/d'); ?></p>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </section>
                    <?php } else { ?>
                        <section class="msg-histry-aite">
                            <ul>
                                <li>
                                    <dl>
                                        <dd>
                                            <p class="ttl"><?php $thread->subject; ?></p>
                                            <p class="naiyou"><?php echo $message->message; ?></p>
                                            <p class="date"><?php echo (new DateTime($message->created_at))->format('Y/m/d'); ?></p>
                                        </dd>
                                        <dt>
                                            <img src="/images/hito-icon.svg">
                                            <p class="name"><?php echo $message->user_kana; ?></p>
                                        </dt>
                                    </dl>
                                </li>
                            </ul>
                        </section>
                    <?php } ?>
                <?php } ?>

            </div>
        </div>

    </div>

</main>
