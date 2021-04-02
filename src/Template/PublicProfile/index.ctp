<main>

    <div class="contents">

        <div class="my-nav-area">
            <p class="photo"><img src="/images/hito-icon.svg"></p>
            <p class="name"><?php echo $user->kana; ?></p>
            <p class="name-eng"><?php echo $user->name; ?></p>
            <ul class="position">
                <?php if ($user->position === 'Questioner') { ?>
                    <li><p>一般ユーザ</p></li>
                <?php } elseif ($user->position === 'Expert') { ?>
                    <li><p>専門家</p></li>
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
                                    <p>一般ユーザ</p>
                                <?php } elseif ($user->position === 'Expert') { ?>
                                    <p>専門家</p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </li>
                    <?php if ($user->position === 'Expert') { ?>
                        <li>
                            <dl>
                                <dt>ニックネーム</dt>
                                <dd><?php echo $user->position_area; ?></dd>
                            </dl>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    </div>

</main>
