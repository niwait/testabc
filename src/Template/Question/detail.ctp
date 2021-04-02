<main>

    <div class="contents">

        <div class="main-area">

            <p class="mgnB20px pgnB10px bdr_b"><a href="/"><span class="material-icons">keyboard_backspace</span> 前のページに戻る</a></p>

            <div class="item00">
                <article class="item-cld-01">
                <div style="position: absolute; padding: 5px; left: 15px; color: #aaa;">#<?php echo $question->id; ?></div>
                    <dl>
                        <dt>
                            <p><img src="/images/hito-icon.svg"></p>
                        </dt>
                        <dd>
                            <section class="name-data">
                                <p class="name">
                                <?php if ($question->is_anonymous == 1) { ?>
                                        匿 名
                                    <?php } else { ?>
                                        <p class="name"> <?php echo $user->nickname; ?></p>
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
                                <?php if ($this->Identity->isLoggedIn()) { ?>
                                        <?php if ($question->isLiked($this->Identity->getId())) { ?>
                                            <a href="javascript:;"><span class="material-icons">favorite</span></a>
                                        <?php } else { ?>
                                            <a href="javascript:;" onclick="like('<?php echo $question->hash; ?>'); $('span', this).text('favorite');"><span class="material-icons">favorite_border</span></a>
                                        <?php } ?>
                                    <?php } ?>
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
                        <textarea class="" id="answer-area" name="message" placeholder="質問に対しての回答を入力してください。" required></textarea>
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
                            <div style="position: absolute; padding: 0px; left: 0px; top: -15px; color: #aaa;">#<?php echo $answer->id; ?></div>
                                <p class="name"><?php echo $answer->user->nickname; ?></p>
                                <p class="data"><?php echo (new DateTime($answer->created_at))->format('Y/m/d'); ?></p>
                            </section>
                            <section class="desc">
                                <p><?php echo $answer->message; ?></p>
                            </section>
                            <section class="btn-area">
                                <p>&nbsp;</p>
                                <p class="icon">
                                    <?php if ($this->Identity->isLoggedIn()) { ?>
                                        <?php if ($answer->isLiked($this->Identity->getId())) { ?>
                                            <a href="javascript:;"><span class="material-icons">favorite</span></a>
                                        <?php } else { ?>
                                            <a href="javascript:;" onclick="answerLike(<?php echo $answer->id; ?>); $('span', this).text('favorite');"><span class="material-icons">favorite_border</span></a>
                                        <?php } ?>
                                    <?php } ?>
                                    <a href=""><span class="ans-qua">お気に入り : <?php echo $answer->getLikeCount(); ?></span></a>
                                </p>
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
        <?php foreach ($prinfo as $rowCount => $rowData) : ?>
                    <p class="bnr">
                    <a href="<?= $rowData["url"] ?>"><img src="../<?=$rowData["img"] ?>"></a></p>
                    </p>
                    <?php endforeach; ?>
            <p class="ranking-ttl">注目ランキング</p>
            <section class="ranking">
                <ul>
                <?php foreach ($ranksinfo as $rowCount => $rowData) : ?>
                    <li>
                        <a href="/q/<?= $rowData["hash"] ?>">
                            <dl>
                                <dd>
                                <?php 
                                    if($rowData['ranksNo']==1){
                                      echo "<p class='rank'><img src='images/no1.svg'>".$rowData['ranksNo']."</p>";
                                    }elseif($rowData['ranksNo']==2){
                                        echo "<p class='rank'><img src='images/no2.svg'>".$rowData['ranksNo']."</p>";   
                                    }elseif($rowData['ranksNo']==3){
                                        echo "<p class='rank'><img src='images/no3.svg'>".$rowData['ranksNo']."</p>";  
                                    }
                                  ?> 
                                    <p><?= $rowData["question"] ?></p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                   
                    <?php endforeach; ?>
                   
                </ul>
            </section>

        </div>
    </div>
</main>
