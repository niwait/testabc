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
                    <p class="ttl">ログイン</p>
                    <p class="lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
                   
                   
                    <?php
 
 echo $this->Form->create(
          $usersTable,
      [
          'type' => 'post',
           'url' => '#'
     ]
      );
     ?>            
                   
                    <section class="input-area">
                        <ul>
                            <li>
                                <dl>
                                    <dt>ログインID（メールアドレス）</dt>
                                    <dd>
                                    <?php 
                                    echo $this->Form->control('users.mail', [
                                        'label' => 'メールアドレス'
                                        ]);
                                     ?>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>ログイン パスワード</dt>
                                    <dd>
                                    
                                    <?php 
                                    echo $this->Form->control('users.password', [
                                        'label' => 'パスワード'
                                        ]);
                                     ?>
                                    
                                    
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </section>
                    <p class="btn22">
                        <button class="back" type="submit" onClick="history.go(-1);">キャンセル</button>
                        <button class="go" type="submit" >ログイン</button>
                    </p>
                    <?php echo $this->Form->end(); ?>
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

   
