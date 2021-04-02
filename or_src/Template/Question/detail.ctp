<main>

    <div class="contents">

        <div class="main-area">

            <p class="mgnB20px pgnB10px bdr_b"><a href="/"><span class="material-icons">keyboard_backspace</span> 前のページに戻る</a></p>

            <div class="item00">
                <article class="item-cld-01">
                    <dl>
                        <dt>
                            <p><img src="/images/hito-icon.svg"></p>
                        </dt>
                        <dd>
                            <section class="name-data">
                                <p class="name">
                                    <?php if ($question->is_anonymous == 0) { ?>
                                        匿 名
                                    <?php } else { ?>
                                        <a href="/u/<?php echo $user->nickname; ?>"><?php echo $user->nickname; ?></a>
                                    <?php } ?>
                                </p>
                                <p class="data"><?php echo (new DateTime($question->created_at))->format('Y/m/d'); ?></p>
                            </section>
                            <section class="desc">
                                <p><?php echo htmlspecialchars($question->question) ?></p>
                            </section>
                            <section class="btn-area">
                                <p>&nbsp;</p>
                                <p class="icon">
                                    <a href="#" class="js-modal-open" data-target="bookmark-touroku"><span class="material-icons">favorite</span></a>
                                    <a href=""><span class="ans-qua">回答 : <?php echo $question->getAnswerCount(); ?></span></a>
                                </p>
                            </section>
                        </dd>
                    </dl>
                </article>
            </div>

            <?php if ($this->Identity->isLoggedIn()) { ?>
                <article class="item-cld-05">
                    <form method="post" action="/q/<?php echo $question->hash; ?>/answer">
                        <input type="hidden" name="_csrfToken" value="<?php echo $this->request->param('_csrfToken'); ?>" />
                        <textarea class="" id="answer-area" name="message" placeholder="質問に対しての回答を入力してください。"></textarea>
                        <p class="btn">
                            <button class="back" name="hoge" type="button" onClick="$('#answer-area').val('');">クリア</button>
                            <button class="go" type="submit">確認する</button>
                        </p>
                    </form>
                </article>
            <?php } ?>

            <hr class="mgnB30px">
            <p class="mgnB30px fz-lg txAlC">他者の回答</p>

            <?php foreach ($answers as $answer) { ?>
                <article class="item-cld-06">
                    <dl>
                        <dt class="jnbn2">
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



        <div class="sub-area">

            <p class="bnr">
                <img src="/images/bnr.jpg">
            </p>
            <p class="ttl-11">注目ランキング</p>
            <section class="ranking">
                <ul>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank"><img src="/images/no1.svg">No.1</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank"><img src="/images/no2.svg">No.2</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank"><img src="/images/no3.svg">No.3</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank">No.4</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank">No.5</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank">No.6</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank">No.7</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank">No.8</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank">No.9</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="/images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank">No.10</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</main>
