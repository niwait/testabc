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

            <p class="my-ttl">回　答</p>

            <?php foreach ($questions as $question) { ?>
                <div class="item00">
                    <article class="item-cld-01">
                        <dl>
                            <dt>
                                <p><img src="/images/hito-icon.svg"></p>
                            </dt>
                            <dd>
                                <section class="name-data">
                                    <p class="name"><a href="/u/<?php echo $question->user->nickname ?>"><?php echo $question->user->nickname; ?></a></p>
                                    <p class="data">2020/07/25</p>
                                </section>
                                <section class="desc">
                                    <p><?php echo $question->question; ?></p>
                                </section>
                                <section class="btn-area">
                                    <p>
                                        <a href="/q/<?php echo $question->hash ?>">この質問に回答する</a>
                                    </p>
                                    <p class="icon">
                                        <a href=""><span class="ans-0">回答 : <?php echo $question->getAnswerCount(); ?></span></a>
                                        <?php if ($question->is_solved) { ?>
                                            <span class="ans-sumi">解決済</span>
                                        <?php } ?>
                                    </p>
                                </section>
                            </dd>
                        </dl>
                    </article>
                    <?php foreach ($question->getAnswers($this->Identity->get('id')) as $answer) { ?>
                        <article class="item-cld-02">
                        <div style="position: absolute; padding: 5px; left: 30px; color: #aaa;">#<?php echo $answer->id; ?></div>
                            <dl>
                                <dt class="jnbn2">
                                    <?php if ($answer->is_correct_answer == 1) { ?>
                                        <p class="goodanswer">GOOD ANSWER</p>
                                    <?php } ?>
                                    <section class="name-data">
                                        <p class="name"><a href="/u/<?php echo $answer->user->nickname; ?>"><?php echo $answer->user->nickname; ?></a></p>
                                        <p class="data"><?php echo (new DateTime($answer->created_at))->format('Y/m/d'); ?></p>
                                    </section>
                                    <section class="desc">
                                        <p><?php echo $answer->message; ?></p>
                                    </section>
                                </dt>
                                <dd class="jnbn1">
                                    <p><img src="/images/hito-icon.svg"></p>
                                </dd>
                            </dl>
                        </article>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

    </div>

</main>
