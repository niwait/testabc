<div class="sub-area">



<?php foreach ($prinfo as $rowCount => $rowData) : ?>
  <p class="bnr">
     <a href="<?= $rowData["url"] ?>"><img src="../<?=$rowData["img"] ?>"></a></p>
</p>
<?php endforeach; ?>


    
    <p class="ranking-ttl">月間ランキング</p>
    <section class="ranking">
        <ul>
            <?php foreach ($monthly_ranking as $index => $question) { ?>
                <li>
                    <a href="/q/<?php echo $question->hash; ?>">
                        <dl>
                            <dt>
                                <img src="/images/rank.png">
                            </dt>
                            <dd>
                                <p class="rank"><?php if ($index < 3) { ?><img src="/images/no<?php echo ($index + 1); ?>.svg"><?php } ?>No.<?php echo ($index + 1); ?></p>
                                <p><?php echo mb_substr($question->question, 0, 20); ?></p>
                            </dd>
                        </dl>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </section>

    <p class="ranking-ttl">週間ランキング</p>
    <section class="ranking">
        <ul>
            <?php foreach ($weekly_ranking as $index => $question) { ?>
                <li>
                    <a href="/q/<?php echo $question->hash; ?>">
                        <dl>
                            <dt>
                                <img src="/images/rank.png">
                            </dt>
                            <dd>
                                <p class="rank"><?php if ($index < 3) { ?><img src="/images/no<?php echo ($index + 1); ?>.svg"><?php } ?>No.<?php echo ($index + 1); ?></p>
                                <p><?php echo mb_substr($question->question, 0, 20); ?></p>
                            </dd>
                        </dl>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </section>

    <p class="ranking-ttl">回答ランキング</p>
    <section class="ranking">
        <ul>
            <?php foreach ($monthly_answer_ranking as $index => $question) { ?>
                <li <?php if ($index > 4) { ?>class="monthly_answer_ranking_more" style="display: none;" <?php } ?>>
                    <a href="/q/<?php echo $question->hash; ?>">
                        <dl>
                            <dt>
                                <img src="/images/rank.png">
                            </dt>
                            <dd>
                                <p class="rank"><?php if ($index < 3) { ?><img src="/images/no<?php echo ($index + 1); ?>.svg"><?php } ?>No.<?php echo ($index + 1); ?></p>
                                <p><?php echo mb_substr($question->question, 0, 20); ?></p>
                            </dd>
                        </dl>
                    </a>
                </li>
                <?php if (count($monthly_answer_ranking) > 5 && $index === 4) { ?>
                    <li style="text-align: center;"><a href="javascript:;" onclick="$(this).parent().remove(); $('.monthly_answer_ranking_more').show();">もっと表示</a></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </section>

    <p class="ranking-ttl">アンサーランキング</p>
    <section class="ranking">
        <ul>
            <?php foreach ($monthly_answer_like_ranking as $index => $question) { ?>
                <li <?php if ($index > 4) { ?>class="monthly_answer_like_ranking_more" style="display: none;" <?php } ?>>
                    <a href="/q/<?php echo $question->hash; ?>">
                        <dl>
                            <dt>
                                <img src="/images/rank.png">
                            </dt>
                            <dd>
                                <p class="rank"><?php if ($index < 3) { ?><img src="/images/no<?php echo ($index + 1); ?>.svg"><?php } ?>No.<?php echo ($index + 1); ?></p>
                                <p><?php echo mb_substr($question->question, 0, 20); ?></p>
                            </dd>
                        </dl>
                    </a>
                </li>
                <?php if (count($monthly_answer_like_ranking) > 5 && $index === 4) { ?>
                    <li style="text-align: center;"><a href="javascript:;" onclick="$(this).parent().remove(); $('.monthly_answer_like_ranking_more').show();">もっと表示</a></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </section>
</div>
