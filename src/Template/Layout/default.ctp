<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *aaaaaaaaaaaai
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フリーランス支援サイト</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style type="text/css">
        .jnbn2 .btn-area {
            border-top: solid 1px #CCCCCC !important;
            padding-top: 10px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div id="bookmark-touroku" class="modal js-modal">
        <div class="modal-bg js-modal-close"></div>
        <div class="modal-content mc-pstn00">
            <section class="bm-touroku">
                <p class="">Loading...</p>
            </section>
        </div>
    </div>
    <div class="container">
        <header>
            <div class="logo-area">
                <section class="logo-btn-00">
                    <h1><img src="/images/freeda-logo-white.png" id="test"></h1>
                    <p>
                        <?php if ($this->Identity->isLoggedIn()) { ?>
                            <a href="<?php if ($notification_count > 0) { ?>/my-page/questions/answered<?php } else { ?>/my-page<?php } ?>">
                                マイページ <?php if ($notification_count > 0) { ?>(<?php echo $notification_count; ?>)<?php } ?>
                            </a>
                            <a href="/logout">ログアウト</a>
                        <?php } else { ?>
                            <a href="/register/verification">新規会員登録</a>
                            <a href="/login">ログイン</a>
                        <?php } ?>
                    </p>
                </section>
            </div>
            <nav>
                <div class="drawer">
                    <div id="logo" class="sp">
                        <a href="/">フリーランス支援サイト「フリーダ」</a>
                    </div>
                    <div class="Toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="menu">
                    <ul class="menu-list-home">
                        <li <?php if ($this->request->here === '/') { ?>class="carrent"<?php } ?>><a href="/">ホーム</a></li>
                        <li <?php if ($this->request->here === '/qanda-uketsukechu') { ?>class="carrent"<?php } ?>><a href="/qanda-uketsukechu">Q&amp;A</a></li>
                        <li><a href="/senmonka">専門家</a></li>
                        <li><a href="/seihin-service">製品・サービス</a></li>
                        <li><a href="/oshigoto">お仕事</a></li>
                        <li><a href="/seminars-lessons">学ぶ</a></li>
                     
                    </ul>
                </div>
            </nav>
        </header>
        <?= $this->fetch('content') ?>
        <footer>
            <div class="footer-00">
                <ul>
                    <li>
                        <p class="logo11 fz-lg">
                        <img src="/images/freeda-logo-black.png" id="test">
                        </p>
                        <p>FreeDa!は横浜ビー・コルセアーズのオフィシャルパートナーです。</p>
                        <p class="sns-icon">
                         
                        </p>
                    </li>
                    <li> 
                        <p><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'terms']); ?>">freedaとは</a></p>

                        <p><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'terms']); ?>">freedaの使い方</a></p>


                        <p><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'questions']); ?>">変更</a></p>

                        <p><a>掲載希望の企業様へ</a></p>

                        <p><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'questions']); ?>">よくある質問</a></p>

                        <p><a>freedaの使い方</a></p>

                        <p><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'terms']); ?>">掲載希望の企業様へ</a></p>

                    </li>
                    <li>
                        <p><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'privacy']); ?>">利用規約</a></p>
                        <p><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'privacy']); ?>">プライバシーポリシー</a></p>
                        <p><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'terms']); ?>">ガイドライン</a></p>
                        <p><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'inquiry']); ?>">お問い合わせ</a></p>
                    </li>
                </ul>
                <p class="copy">&copy; Freeda All Rights Reserved</p>
            </div>
        </footer>
    </div>
    <script type="text/javascript">
        function like(hash) {
            var modal = document.getElementById('bookmark-touroku');
            scrollPosition = $(window).scrollTop();
            $('body').addClass('fixed').css({'top': -scrollPosition});
            $(modal).fadeIn();
            fetch('/q/' + hash + '/like')
                .then(function () {
                    $('.bm-touroku', modal).html(`
                        <p class="ttl">ブックマークに登録いたしました。</p>
                        <p class="lead">「マイページ」のブックマークよりご確認ください。</p>
                        <p class="btn22">
                        <button class="back js-modal-close" type="submit" onclick="closeModal()">閉じる</button>
                            <button class="go" onclick="location.href='/my-page/bookmarks'">ブックマークへ</button>
                        </p>
                    `);
                });
            return false;
        }
        function answerLike(id) {
            var modal = document.getElementById('bookmark-touroku');
            scrollPosition = $(window).scrollTop();
            $('body').addClass('fixed').css({'top': -scrollPosition});
            $(modal).fadeIn();
            fetch('/a/' + id + '/like')
                .then(function () {
                    $('.bm-touroku', modal).html(`
                        <p class="ttl">ブックマークに登録いたしました。</p>
                        <p class="lead">「マイページ」のブックマークよりご確認ください。</p>
                        <p class="btn22">
                            <button class="back js-modal-close" type="submit" onclick="closeModal()">閉じる</button>
                            <button class="go" onclick="location.href='/my-page/bookmarks'">ブックマークへ</button>
                        </p>
                    `);
                });
            return false;
        }

        function productLike(id) {
            var modal = document.getElementById('bookmark-touroku');
            scrollPosition = $(window).scrollTop();
            $('body').addClass('fixed').css({'top': -scrollPosition});
            $(modal).fadeIn();
            fetch('/p/' + id + '/like')
                .then(function () {
                    $('.bm-touroku', modal).html(`
                        <p class="ttl">ブックマークに登録いたしました。</p>
                        <p class="lead">「マイページ」のブックマークよりご確認ください。</p>
                        <p class="btn22">
                            <button class="back js-modal-close" type="submit" onclick="closeModal()">閉じる</button>
                            <button class="go" onclick="location.href='/my-page/bookmarks'">ブックマークへ</button>
                        </p>
                    `);
                });
              
            return false;

        }
        function seminarLike(id) {
            var modal = document.getElementById('bookmark-touroku');
            scrollPosition = $(window).scrollTop();
            $('body').addClass('fixed').css({'top': -scrollPosition});
            $(modal).fadeIn();
            fetch('/s/' + id + '/like')
                .then(function () {
                    $('.bm-touroku', modal).html(`
                        <p class="ttl">ブックマークに登録いたしました。</p>
                        <p class="lead">「マイページ」のブックマークよりご確認ください。</p>
                        <p class="btn22">
                            <button class="back js-modal-close" type="submit" onclick="closeModal()">閉じる</button>
                            <button class="go" onclick="location.href='/my-page/bookmarks'">ブックマークへ</button>
                        </p>
                    `);
                });
              
            return false;

        }




        function jobLike(id) {
            var modal = document.getElementById('bookmark-touroku');
            scrollPosition = $(window).scrollTop();
            $('body').addClass('fixed').css({'top': -scrollPosition});
            $(modal).fadeIn();
            fetch('/j/' + id + '/like')
                .then(function () {
                    $('.bm-touroku', modal).html(`
                        <p class="ttl">ブックマークに登録いたしました。</p>
                        <p class="lead">「マイページ」のブックマークよりご確認ください。</p>
                        <p class="btn22">
                            <button class="back js-modal-close" type="submit" onclick="closeModal()">閉じる</button>
                            <button class="go" onclick="location.href='/my-page/bookmarks'">ブックマークへ</button>
                        </p>
                    `);
                });
              
            return false;

        }



        $(function() {
    $('.Toggle').click(function() {
        $(this).toggleClass('active');
        $('header nav .menu').toggleClass('open');
    
    });
});





        function closeModal () {
            $('body').removeClass('fixed');
            window.scrollTo( 0 , scrollPosition );
            $('.js-modal').fadeOut();
            return false;
        }
        $('.js-modal-close').on('click', function(){
            closeModal();
        });
   


</script>
</body>
</html>




