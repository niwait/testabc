 
    <div class="container">

<header>
    <div class="logo-area">
    </div>
    <nav>
        <div class="drawer">
            <div id="logo" class="sp">
                <a href="home.html">フリーランス支援サイト「フリーダ」</a>
            </div>
            <div class="Toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="menu">
        </div>
    </nav>
</header>


<main>

    <div class="contents">
        <div class="kaiin-touroku">
            <p class="ttl">新規会員登録が完了いたしました。</p>
            <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
            
            <p class="btn11">

            <button class="go">
                <a href="<?php echo $this->Url->build(['controller'=>'Users', 'action'=>'login']); ?>" class="something">
                 ログイン
                </a>
            </button>

            </p>
        </div>
    </div>            
</main>        

<footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
$(function() {
$("header .logo-area").load("freelance/common.html .logo-btn-00");
$("header nav .menu").load("freelance/common.html .menu-list-home");
$("footer").load("freelance/common.html .footer-00");
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
var time = new Date();
var year = time.getFullYear();
for (var i = year; i >= 1950; i--) {
$('#year').append('<option value="' + i + '">' + i + '</option>');
}
</script>
</footer>

</div>
