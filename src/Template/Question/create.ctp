<main>
    <div class="contents">
            <div class="shitumon">
                <form method="post" action="">
                    <input type="hidden" name="_csrfToken" value="<?php echo $this->request->param('_csrfToken'); ?>" />
                    <p class="ttl">あなたの質問したいことは？</p>
                    <p class="naiyou">
                        <textarea name="question" placeholder="この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。"><?php echo htmlspecialchars($data->question); ?></textarea>
                    </p>

                    <p class="ttl">カテゴリを選ぼう！</p>
                    <ul class="cate">
                        <li>
                            <label>
                                <select class="parent" name="main_category_id" required onchange="loadSubCategories(this.value)">
                                    <option value="">大カテゴリー</option>
                                    <?php foreach ($main_categories as $category) { ?>
                                        <option value="<?php echo $category->id; ?>" <?php if ($data->main_category_id == $category->id) { ?>selected="selected"<?php } ?>><?php echo $category->name; ?></option>
                                    <?php } ?>
                                </select>
                            </label>
                        </li>
                        <li>
                            <label>
                                <select class="children" name="sub_category_id" required id="sub-categories">
                                    <option value="">中カテゴリー</option>
                                    <?php foreach ($sub_categories as $category) { ?>
                                        <option value="<?php echo $category->id; ?>" <?php if ($data->sub_category_id == $category->id) { ?>selected="selected"<?php } ?>><?php echo $category->name; ?></option>
                                    <?php } ?>
                                </select>
                            </label>
                        </li>
                    </ul>

                    <p class="ttl">質問に＃タグを付けよう！<small>下記から選ぶ。</small></p>
                    <ul class="tag">
                        <?php foreach($tags as $tag) { ?>
                            <li>
                                <input type="checkbox" class="check_box" id="tag-id-<?php echo $tag->id; ?>" name="tag_ids[]" value="<?php echo $tag->id; ?>" <?php if (in_array($tag->id, $data->tag_ids)) { ?>checked<?php } ?> />
                                <label for="tag-id-<?php echo $tag->id; ?>"><?php echo $tag->name; ?></label>
                            </li>
                        <?php } ?>
                    </ul>

                    <p class="ttl">自由入力する <small>＊複数の場合は「,」区切</small></p>
                    <p class="jiyu">
                        <input type="text" name="keywords" placeholder="エクセル,リモート" value="<?php echo htmlspecialchars($data->keywords); ?>">
                    </p>

                    <p class="ttl">画像URL <small>＊任意</small></p>
                    <p class="tenpu">
                        <input type="text" name="image_urls[]">
                    </p>

                    <p class="ttl">名前表示方法 <small>＊必須</small></p>
                    <p class="tokumei">
                        <label class="radioBtn mgnB00px">
                            <input type="radio" id="" name="is_anonymous" value="0" class="" <?php if ($data->is_anonymous == 0){ ?>checked<?php } ?>>
                            <span class="radioMark"></span> ニックネーム
                        </label>
                        <label class="radioBtn mgnB00px">
                            <input type="radio" id="" name="is_anonymous" value="1" class="" <?php if ($data->is_anonymous == 1){ ?>checked<?php } ?>>
                            <span class="radioMark"></span> 匿 名
                        </label>
                    </p>
                    <p class="btn22">
                        <button class="back" type="button" onClick="history.go(-1);">キャンセル</button>
                        <button class="go" type="submit">確認する</button>
                    </p>
                </form>
            </div>
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
