
        

        <main>

            <div class="contents">
                                
                <div class="main-area">

                    <p class="ttl-00">応募する</p>
                    
                    <div class="item00">
                        <article class="entry">
                   
                            <p>必要事項をご入力ください。</p>
                           <?php
                                echo $this->Form->create(
                                $subscTable,
                                [
                                    'type' => 'post',
                                    'url' => '#'
                                ]);
                            ?>
                         
                             <?php echo $this->Form->hidden('subscribe.userId', [
                          "value" => $this->request->getSession()->read('Auth.id')
                        ]); ?>
                         <?php echo $this->Form->hidden('subscribe.seminarId', [
                          "value" => $this->request->getQuery("seminar.id")
                        ]); ?>
                            <ul>
                                <li><span>必須</span> お名前</li>
                                <li>
                                    <?php echo $this->Form->control('subscribe.name', [
                                        'label' => '',
                                        'placeholder'=>"田中　太郎"    
                                        ]); ?> 
                                        </li>
                                <li><span>必須</span> フリガナ</li>
                                <li>
                                <?php echo $this->Form->control('subscribe.kana', [
                                        'label' => '',
                                        'placeholder'=>"タナカタロウ"
                                        ]); ?>
                                </li>
                                <li><span>必須</span> 郵便番号</li>
                                <li>
                                <?php
                                 echo $this->Form->control('subscribe.postcode', [
                                        'label' => '',
                                        'placeholder'=>"1650011"
                                        ]);
                                         ?>
                               </li>
                                <li><span>必須</span> 住 所</li>
                                <li>
                                <?php echo $this->Form->control('subscribe.address_a', [
                                        'label' => '',
                                        'placeholder'=>"住 所"
                                        ]); ?>
                                </li>
                                <li><span>必須</span> 上記以下の住所</li>
                                <li>
                                <?php echo $this->Form->control('subscribe.address_b', [
                                        'label' => '',
                                        'placeholder'=>"住 所"
                                        ]); ?>
                                </li>
                                <li><span>必須</span> マンション名・建物名</li>
                                <li>
                                <?php echo $this->Form->control('subscribe.address_c', [
                                        'label' => '',
                                        'placeholder'=>"住 所"
                                        ]); ?>
                                </li>
                                <li><span>必須</span> メールアドレス</li>
                                <li>
                                <?php echo $this->Form->control('subscribe.mail', [
                                        'label' => '',
                                        'placeholder'=>"メール"
                                        ]); ?>
                                
                                </li>
                                <li><span>必須</span> 電話番号</li>
                                <li>
                                <?php echo $this->Form->control('subscribe.tel', [
                                        'label' => '',
                                        'placeholder'=>"電話番号"
                                        ]); ?>
                                </li>
                                <li><span>必須</span> 学歴・職歴</li>
                                <li>
                                <?php echo $this->Form->textarea('subscribe.educat', [
                                        "cols" => 40,
                                        "rows" => 4, 
                                        'label' => '',
                                        'placeholder'=>"学歴・職歴"
                                        ]); ?>
                                </li>
                                <li><span>必須</span> 保有資格・スキル</li>
                                <li>
                                <?php echo $this->Form->textarea('subscribe.skill', [
                                        "cols" => 40,
                                        "rows" => 4, 
                                        'label' => '',
                                        'placeholder'=>"保有資格・スキル"
                                        ]); ?>
                            </li>
                                <li><span>必須</span> 自己PR</li>
                                <li>
                                <?php echo $this->Form->textarea('subscribe.pr', [
                                        "cols" => 40,
                                        "rows" => 4, 
                                        'label' => '',
                                        'placeholder'=>"保有資格・スキル"
                                        ]); ?>
                                 </li>
                            </ul>
                            <p class="btn22">
                                <button class="back" type="submit"><a href="/oshigoto">キャンセル</a></button>
                                <button class="go" type="submit" name="subscribe[action]" value="send" class="something"><a id="wh">応募する</a></button> 
                                
                            </p>
                            <?php echo $this->Form->end(); ?>
                        </article>
                    </div>

                </div>



                <div class="sub-area">
                <?php foreach ($prinfo as $rowCount => $rowData) : ?>
                    <p class="bnr">
                    <a href="<?= $rowData["url"] ?>"><img src="../<?=$rowData["img"] ?>"></a></p>
                    </p>
                    <?php endforeach; ?>
                    
                  
                    <p class="ranking-ttl">公式パートナー企業</p>
                    <?php foreach ($bannerinfo as $rowCount => $rowData) : ?>
                    <p class="kigyou-bnr"> <a href="<?= $rowData["url"] ?>"><img src="../<?=$rowData["img"] ?>"></a></p>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </main>        
        
        <footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    
<script type="text/javascript">
    $(function() {
        $("header .logo-area").load("common.html .logo-btn-00");
        $("header nav .menu").load("common.html .menu-list-oshigoto");
        $("footer").load("common.html .footer-00");
    });
</script>

<script type="text/javascript">
    $(function() {
        $('.Toggle').click(function() {
            $(this).toggleClass('active');
            $('header nav .menu').toggleClass('open');
        });
    });
</script>

<script type="text/javascript">
$(function() {
  var $children = $('.children');
  var original = $children.html();
  $('.parent').change(function() {
    var val1 = $(this).val();
    $children.html(original).find('option').each(function() {
      var val2 = $(this).data('val');
      if (val1 != val2) {
        $(this).not('optgroup,.cate-select11').remove();
      }
    });
    if ($(this).val() === '') {
      $children.attr('disabled', 'disabled');
    } else {
      $children.removeAttr('disabled');
    }
  });
});
</script>
    
<script type="text/javascript">
$('.js-modal-open').on('click', function(){
  var target = $(this).data('target');
  var modal = document.getElementById(target);
  scrollPosition = $(window).scrollTop();
  $('body').addClass('fixed').css({'top': -scrollPosition});
  $(modal).fadeIn();
  return false;
});
$('.js-modal-close').on('click', function(){
  $('body').removeClass('fixed');
  window.scrollTo( 0 , scrollPosition );
  $('.js-modal').fadeOut();
  return false;
});
</script>    
    

        </footer>
        
        
    </div>

    
    
