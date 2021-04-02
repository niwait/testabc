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
            <p class="my-ttl">メッセージ</p>
            <div class="my-message-chat">
                <form method="post" action="">
                    <input type="hidden" name="_csrfToken" value="<?php echo $this->request->param('_csrfToken'); ?>" />
                    <section class="msg-inputArea">
                        <p class="kakunin-msg">誤入力内容に間違いはないですか？よろしければ「送信」してください。</p>
                        <ul>
                            <li>
                                <dl>
                                    <dt>To.</dt>
                                    <dd>
                                        <?php echo $thread->receiver_user_kana; ?>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>内　容</dt>
                                    <dd>
                                        <?php echo $data->message; ?>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>&nbsp;</dt>
                                    <dd>
                                        <p class="btn22">
                                            <button class="back" type="button" onClick="location.href='/my-page/messages/<?php echo $thread->id; ?>'">戻　る</button>
                                            <button class="go" type="submit">確　認</button>
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </section>
                </form>
            </div>
        </div>

    </div>

</main>
