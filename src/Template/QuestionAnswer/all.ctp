<main>

    <div class="contents">

        <section class="cete-list-22">
            <p class="ttl">カテゴリー 一覧</p>
            <form method="get" action="">
                <ul>
                    <li>
                        <label>
                            <select class="parent" id="" name="main_category_id" required onchange="loadSubCategories(this.value)">
                                <option value="" class="">大カテゴリー</option>
                                <?php foreach($main_categories as $category) { ?>
                                    <option value="<?php echo $category->id; ?>" <?php if ($main_category_id == $category->id) { ?>selected="selected"<?php } ?>><?php echo $category->name; ?></option>
                                <?php } ?>
                            </select>
                        </label>
                    </li>
                    <li>
                        <label>
                            <select class="children" id="sub-categories" name="sub_category_id" required>
                                <option value="" class="">中カテゴリー</option>
                                <?php foreach($sub_categories as $category) { ?>
                                    <option value="<?php echo $category->id; ?>" <?php if ($sub_category_id == $category->id) { ?>selected="selected"<?php } ?>><?php echo $category->name; ?></option>
                                <?php } ?>
                            </select>
                        </label>
                    </li>
                    <li>
                        <input type="text" name="keyword" placeholder="フリーワード">
                    </li>
                    <li>
                        <button type="submit">検　索</button>
                    </li>
                </ul>
            </form>
            <p class="kekka-arrow"><span class="material-icons">arrow_drop_down</span></p>
        </section>

        <div class="main-area">

            <p class="ttl-00">Q&amp;A</p>

            <section class="sort-tab">
                <ul>
                    <li><a href="/qanda-uketsukechu">回答受付中</a></li>
                    <li><a href="/qanda-sumi">解決済</a></li>
                    <li class="current"><a href="/qanda-subete">すべて</a></li>
                </ul>
            </section>


            <?php foreach ($questions as $question) { ?>
                <div class="item00">
                    <article class="item-cld-01">
                    <div style="position: absolute; padding: 5px; left: 15px; color: #aaa;">#<?php echo $question->id; ?></div>
                        <dl>
                            <dt>
                                <p><img src="images/hito-icon.svg"></p>
                            </dt>
                            <dd>
                                <section class="name-data">
                                    <p class="name">
                                    <?php if ($question->is_anonymous == 1) { ?>
                                            匿 名
                                        <?php } else { ?>
                                            <p class="name"> <?php echo $question->user->nickname; ?></p>
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


                    <?php include('sidebar.ctp'); ?>
    </div>
</main>

<script type="text/javascript">
    function loadSubCategories(parentId, selectedChildId) {
        $('#sub-categories').html('<option>Loading...</option>');
        fetch('/sub-categories?parent_id=' + parentId)
            .then(function (response) {return response.json()})
            .then(function (data) {
                $('#sub-categories').html('<option value="">中カテゴリー</option>');
                data.categories.forEach(function (item) {
                    if (selectedChildId == item.id) {
                        $('#sub-categories').append(`<option value="${item.id}" selected="selected">${item.name}</option>`);
                    } else {
                        $('#sub-categories').append(`<option value="${item.id}">${item.name}</option>`);
                    }
                })
            });
    }
</script>
