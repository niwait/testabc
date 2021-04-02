<main>

<div class="contents">
    
    <div class="my-nav-area pc">
        <p class="photo"><img src="images/hito-icon.svg"></p>
        <p class="name"><?php echo $user->name; ?></p>
        <p class="name-eng"><?php echo $user->kana; ?></p>
        <ul class="position">
        <?php if ($user->position === 'Questioner') { ?>
                    <li><p>一般ユーザ</p></li>
                <?php } elseif ($user->position === 'Expert') { ?>
                    <li><p>専門家</p></li>      
                <?php } ?>
        </ul>
        <p class="btn"><a href="shitsumon-input.html">質問する</a></p>
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
        
        <p class="my-ttl">募集・宣伝</p>
           <?php foreach ($jobsTable as $rowCount => $rowData) : ?>

        <div class="item00">
        <article class="item-cld-01">
                            <dl>
                                <dt>
                                 <p><img src="images/hito-icon.svg"></p>
                                    <p class="icon">
                                        <a href="my-message-chat.html" target="_blank"><span class="material-icons">mail</span></a>
                                        <a href="#" class="js-modal-open" data-target="bookmark-touroku"><span class="material-icons">favorite</span></a>
                                    </p>
                                </dt>
                                <dd>
                                    <section class="name-data">
                                        <p class="name"><?= $rowData["title"] ?></p>
                                        <p class="data"><?= date( "Y/m/d" ,  strtotime($rowData["today"]))  ?></p>
                                    </section>
                                    <p class="anything">会社名</p>
                                    <section class="desc none-border">
                                        <p><?= $rowData["text"] ?></p>
                                    </section>
                                </dd>
                            </dl>
                        </article>
                        <article class="item-cld-04">
                            <ul class="desc">
                                <li>都道府県</li>
                                <li><?= $rowData["prefecture"] ?></li>
                                <li>地区</li>
                                <li><?= $rowData["place"] ?></li>
                                <li>稼働日時</li>
                                <li><?= $rowData["operation"] ?></li>
                                <li>仕事内容</li>
                                <li><?= $rowData["contents"] ?></li>
                                <li>報酬</li>
                                <li><?= $rowData["reword"] ?></li>
                                <li>募集期間</li>
                                <li><?= $rowData["recruitment"] ?></li>
                            </ul>
                            
                            <ul class="btn">
                                <li><p class="view-details"><a href="<?= $rowData["url"] ?>" target="_blank">詳細を見る</a></p></li>
                                <li><p class="Apply">
                                <a href="<?php echo sprintf("/Jobs/worksentry?job[id]=%s",$rowData["id"]);?>" class="something">応募する</a>
                               
                                </li>
                                
                            </ul>
                        </article>
        </div>
<?php endforeach; ?>






      





        
    </div>
    
</div>

</main>        