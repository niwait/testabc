<main class="home">
    <div class="shitsumon-in-home">
        <article>
            <section>
                <aside>
                    <p class="ttl">あなたの質問したいことは？</p>
                    <p class="shitsumon-btn"><a href="/shitsumon-input">こちらから質問を入力しましょう！</a></p>
                    <p class="tag">
                        注目の#タグ<br class="sp">
                        
                        <?php foreach ($popular_tags as $popular_tag) { ?>
                            <a href="/tag/<?php echo $popular_tag->id; ?>/<?php echo urlencode($popular_tag->name); ?>">#<?php echo $popular_tag->name ?></a>
                        <?php } ?>
                    </p>
                    <p class="toha"><a href="#" id="openModal">「フリーダ」とは？</a></p>
                </aside>
            </section>
        </article>
    </div>

    <div class="contents">

        <div class="main-area">

            <p class="ttl-00">新着のQ&amp;A</p>

            <?php foreach ($questions as $question) { ?>
                <div class="item00">
                    <article class="item-cld-01">
                        <dl>
                            <dt>
                                <p><img src="images/hito-icon.svg"></p>
                            </dt>
                            <dd>
                                <section class="name-data">
                                    <p class="name">
                                        <?php if ($question->is_anonymous == 0) { ?>
                                            匿 名
                                        <?php } else { ?>
                                            <a href="/u/<?php echo $question->user->nickname; ?>"><?php echo $question->user->nickname; ?></a>
                                        <?php } ?>
                                    </p>
                                    <p class="data"><?php echo (new DateTime($question->created_at))->format('Y/m/d'); ?></p>
                                </section>
                                <section class="desc">
                                    <p><?php echo $question->question; ?></p>
                                </section>
                                <section class="btn-area">
                                    <p>
                                        <a href="/q/<?php echo $question->hash; ?>">この質問に回答する</a>
                                    </p>
                                    <p class="icon">
                                        <?php if ($this->Identity->isLoggedIn()) { ?>
                                            <?php if ($question->isLiked($this->Identity->getId())) { ?>
                                                <a href="javascript:;"><span class="material-icons">favorite</span></a>
                                            <?php } else { ?>
                                                <a href="javascript:;" onclick="like('<?php echo $question->hash; ?>'); $('span', this).text('favorite');"><span class="material-icons">favorite_border</span></a>
                                            <?php } ?>
                                        <?php } ?>
                                        <a href="/q/<?php echo $question->hash; ?>"><span class="ans-qua">回答 : <?php echo $question->getAnswerCount(); ?></span></a>
                                        <?php if ($question->is_solved) { ?>
                                            <span class="ans-sumi">解決済</span>
                                        <?php } ?>
                                    </p>
                                </section>
                            </dd>
                        </dl>
                    </article>
                </div>
            <?php } ?>

            <p class="pagination">
                <?php echo $this->Paginator->numbers([
                    'templates' => [
                        'prevActive' => '<a href="{{url}}"><span class="material-icons">chevron_left</span></a>',
                        'prevDisabled' => '<a href="javascript:;"><span class="material-icons">chevron_left</span></a>',
                        'nextActive' => '<a href="{{url}}"><span class="material-icons">chevron_right</span></a>',
                        'nextDisabled' => '<a href="javascript:;"><span class="material-icons">chevron_right</span></a>',
                        'first ' => '<a href="{{url}}"><span class="material-icons">first_page</span></a>',
                        'last ' => '<a href="{{url}}"><span class="material-icons">last_page</span></a>',
                        'number' => '<a href="{{url}}"><span class="current">{{text}}</span></a>',
                        'current' => '<a href="{{url}}"><span>{{text}}</span></a>',
                        'ellipsis' => '<a href=""><span class="material-icons">more_horiz</span></a>'
                    ]
                ]); ?>
            </p>
        </div>



        <div class="sub-area">
            <p class="bnr">
                <img src="images/bnr.jpg">
            </p>
            <p class="ranking-ttl">注目ランキング</p>
            <section class="ranking">
                <ul>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank"><img src="images/no1.svg">No.1</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank"><img src="images/no2.svg">No.2</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank"><img src="images/no3.svg">No.3</p>
                                    <p>質問テキストが入ります。質問テキストが入ります。質問テキストが入りま・・・</p>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <dl>
                                <dt>
                                    <img src="images/rank.png">
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
                                    <img src="images/rank.png">
                                </dt>
                                <dd>
                                    <p class="rank">No.5</p>
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
