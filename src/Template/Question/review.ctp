<main>
    <div class="contents">
        <div class="shitumon">
            <form method="post" action="">
                <input type="hidden" name="_csrfToken" value="<?php echo $this->request->param('_csrfToken'); ?>" />
                <p class="ttl">質問内容の確認</p>
                <p class="mgnB30px txAlC">ご入力内容にお間違いがないければ「投稿する」をクリック、タップしてください。</p>

                <ul class="shitumon-kakunin">
                    <li>
                        <dl>
                            <dt>あなたの質問したいことは？</dt>
                            <dd><?php echo htmlspecialchars($data->question); ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>カテゴリを選ぼう！</dt>
                            <dd><?php echo $main_category->name; ?>, <?php echo $sub_category->name; ?></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>質問に＃タグを付けよう！</dt>
                            <dd>
                                <?php foreach ($tags as $tag) { ?>
                                    <p class="tag"><?php echo $tag->name; ?></p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>自由入力</dt>
                            <dd>
                                <?php foreach (explode(',', $data->keywords) as $keyword) { ?>
                                    <p class="tag"><?php echo htmlspecialchars(trim($keyword)); ?></p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                        <dt>画像URL</dt>
                            <dd>
                                <?php foreach ($data->image_urls as $url) { ?>
                                    <p><a href="<?php echo htmlspecialchars($url); ?>" target="_blank"><?php echo htmlspecialchars($url); ?></a></p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>名前表示方法</dt>
                            <dd>
                                <p>
                                    <?php if ($data->is_anonymous == 1) { ?>
                                        匿 名
                                    <?php } else { ?>
                                        ニックネーム
                                    <?php } ?>
                                </p>
                            </dd>
                        </dl>
                    </li>
                </ul>
                <p class="btn22">
                    <button class="back" type="button" onClick="history.go(-1);">キャンセル</button>
                    <button class="go" type="submit">投稿する</button>
                </p>
            </form>
        </div>
    </div>
</main>
