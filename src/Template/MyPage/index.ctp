<main>

    <div class="contents">

    <div class="my-nav-area">
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
            <div class="my-btn">
                <ul>
                    <li>
                        <a href="/my-page/profile"><img src="/images/icon-plofile.svg"></a>
                    </li>
                    <li>
                        <a href="/my-page/questions"><img src="/images/icon-q.svg"></a>
                    </li>
                    <li>
                        <a href="/my-page/answers"><img src="/images/icon-a.svg"></a>
                    </li>
                  
                    <!-- <li>
                     <a href="/my-page/recruitment"><img src="/images/icon-boshu.svg"></a>
                    </li>-->
                   <!--
                    <li>
                     <a href="/my-page/messages"><img src="/images/icon-messa.svg"></a>
                    </li>
                    -->
                    <li>
                        <a href="/my-page/bookmarks"><img src="/images/icon-bookmark.svg"></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</main>

