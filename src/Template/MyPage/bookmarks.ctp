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

            <p class="my-ttl">ブックマーク</p>

            <?php foreach ($questions as $question) { ?>
                <div class="item00">
                    <article class="item-cld-01">
                    <div style="position: absolute; padding: 5px; left: 15px; color: #aaa;">#<?php echo $question->id; ?></div>
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
                                        <a href="javascript:;"><span class="material-icons">favorite</span></a>
                                        <a href=""><span class="ans-0">回答 : <?php echo $question->getAnswerCount(); ?></span></a>
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




            <?php foreach ($product as $productitem) { ?>
                <div class="item00">
                        <article class="item-cld-01">
                            <dl>
                                <dt>
                                <p><img src="/images/hito-icon.svg"></p>
                                    <p class="view-details"><a href="<?= $productitem["url"] ?>" target="_blank">詳細を見る</a></p>
                                  
                                </dt>
                                <dd>
                                
                                    <section class="name-data">
                                        <p class="name"> <?= $productitem["product"] ?></p>
                                        <p class="data"><?= date( "Y/m/d" ,  strtotime($productitem["today"]))  ?></p>
                                    </section>
                                    <p class="anything"><?= $productitem["company"] ?></p>
                                    <section class="desc none-border">
                                        <p><?= $productitem["text"] ?></p>
                                    </section>
                                </dd>
                            </dl>
                        </article>
                        <article class="item-cld-03 js-scrollable">
                            <table>
                                <tr>
                                    <th>利用料金</th>
                                    <th>初期費用</th>
                                    <th>無料プラン</th>
                                    <th>無料トライアル</th>
                                </tr>
                                <tr>
                                    <td><?= $productitem["mony"] ?></td>
                                    <td><?= $productitem["initial"] ?></td>
                                    <td><?= $productitem["flee"] ?></td>
                                    <td><?= $productitem["trial"] ?></td>
                                </tr>
                            </table>                            
                        </article>
                    </div>
                      <?php } ?>


                      <?php foreach ($seminar as $seminaritem) { ?>
                                                    <div class="item00">
                                <article class="item-cld-01">
                                    <dl>
                                        <dt>
                                        <p><img src="/images/hito-icon.svg"></p>
                                        
                                        </dt>
                                        <dd>
                                            <section class="name-data">
                                                <p class="name"><a href=""><?= $seminaritem["title"] ?></a></p>
                                                <p class="data"><?= date( "Y/m/d" ,  strtotime($seminaritem["today"]))  ?></p>
                                            </section>
                                            <p class="anything"><?= $seminaritem["company"] ?></p>
                                            <section class="desc none-border">
                                                <p><?= $seminaritem["text"] ?></p>
                                            </section>
                                        </dd>
                                    </dl>
                                </article>
                                <article class="item-cld-04">
                                    <ul class="desc">
                                        <li>都道府県</li>
                                        <li><?= $seminaritem["prefecture"] ?></li>
                                        <li>場所</li>
                                        <li><?= $seminaritem["eria"] ?></li>
                                        <li>日時</li>
                                        <li><?= $seminaritem["date"] ?></li>
                                        <li>内容</li>
                                        <li><?= $seminaritem["contents"] ?></li>
                                        <li>費用</li>
                                        <li><?= $seminaritem["cost"] ?></li>
                                    </ul>
                                    <ul class="btn">
                                        <li><p class="view-details"><a href="<?= $seminaritem["url"] ?>" target="_blank">詳細を見る</a></p></li>
                                        <li>
                                        <p class="Apply">
                                        <a href="<?php echo sprintf("/SeminarLessons/seminarentry?seminar[id]=%s",$seminaritem["id"]);?>" class="something">応募する</a>
                                        </p>
                                        </li>
                                    </ul>
                                </article>
                            </div>
                      <?php } ?>

                      <?php foreach ($job as $jobitem) { ?>
                      <div class="item00">
                        <article class="item-cld-01">
                            <dl>
                                <dt>
                                 <p><img src="images/hito-icon.svg"></p>
                                    <p class="icon">
                                      
                                        <a href="#" class="js-modal-open" data-target="bookmark-touroku"><span class="material-icons">favorite</span></a>
                                    </p>
                                </dt>
                                <dd>
                                    <section class="name-data">
                                        <p class="name"><?= $jobitem["title"] ?></p>
                                        <p class="data"><?= date( "Y/m/d" ,  strtotime($jobitem["today"]))  ?><br>大分類：<?= $jobitem["major"] ?></p>
                                     
                                    </section>
                                    <p class="anything">会社名</p>
                                    <section class="desc none-border">
                                        <p><?= $jobitem["text"] ?></p>
                                    </section>
                                </dd>
                            </dl>
                        </article>
                        <article class="item-cld-04">
                            <ul class="desc">
                                <li>都道府県</li>
                                <li><?= $jobitem["prefecture"] ?></li>
                                <li>地区</li>
                                <li><?= $jobitem["place"] ?></li>
                                <li>稼働日時</li>
                                <li><?= $jobitem["operation"] ?></li>
                                <li>仕事内容</li>
                                <li><?= $jobitem["contents"] ?></li>
                                <li>報酬</li>
                                <li><?= $jobitem["reword"] ?></li>
                                <li>募集期間</li>
                                <li><?= $jobitem["recruitment"] ?></li>
                            </ul>
                            
                            <ul class="btn">
                                <li><p class="view-details"><a href="<?= $jobitem["url"] ?>" target="_blank">詳細を見る</a></p></li>
                                <li><p class="Apply">
                                <a href="<?php echo sprintf("/Jobs/worksentry?job[id]=%s",$jobitem["id"]);?>" class="something">応募する</a>
                               
                                </li>
                                
                            </ul>
                        </article>
                    </div>

                    <?php } ?>


                  


        </div>

    </div>

</main>
