
        <main>
            <div class="contents">
                
                <div class="main-area">

                    <p class="ttl-00">応募完了</p>
                    
                    <div class="item00">
                        <article class="entry">
                            <section>
                                <p class="ttl">システムエンジニア募集</p>
                                <p class="company">株式会社 ダミーシステムオフィス</p>
                            </section>
                            <p class="lead">上記の募集への送信が完了いたしました。</p>
                            <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                        </article>
                    </div>
                    
                </div>


                <div class="sub-area">
                <?php foreach ($prsinfo as $rowCount => $rowData) : ?>
                    <p class="bnr">
                        <img src="../<?=$rowData["img"] ?>">
                    </p>
                    <?php endforeach; ?>
                    
                    <?php foreach ($bannerinfo as $rowCount => $rowData) : ?>
                    <p class="ranking-ttl">公式パートナー企業</p>
                    <p class="kigyou-bnr"> <a href="<?= $rowData["url"] ?>"><img src="../<?=$rowData["img"] ?>"></a></p>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </main>        
        
        
    
    


