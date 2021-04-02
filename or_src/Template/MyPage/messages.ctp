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
            <div class="my-message">
                <ul>
                    <li>
                        <?php foreach ($threads as $thread) { ?>
                            <dl>
                                <dt>
                                    <?php if ($thread->is_read == 0) { ?>
                                        <p class="midoku"></p>
                                    <?php } else { ?>
                                        <p class="kidoku"></p>
                                    <?php } ?>
                                </dt>
                                <dd class="aite"><a href="/my-page/messages/<?php echo $thread->id  ?>"><?php echo $thread->user_kana; ?></a></dd>
                                <dd class="title"><?php echo $thread->subject; ?></dd>
                                <dd class="date"><?php echo (new DateTime($thread->updated_at))->format('Y/m/d M H:i') ?></dd>
                            </dl>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</main>
