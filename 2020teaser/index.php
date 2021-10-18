<!DOCTYPE html>
<html>
<head>
  <title>Nydalenrevyen</title>
  <meta name="author" content="Magnus Byrkjeland">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link href="<?php echo $site['res']; ?>/style.css" rel="stylesheet" />
  <link href="<?php echo $site['res']; ?>/responsivestyle.css" rel="stylesheet" />
  <link href="<?php echo $site['res']; ?>/imgs/favicon.png" rel="shortcut icon" type="image/png" />
</head>

<body>
<img src="<?php echo $site['res']; ?>/imgs/favicon.png" style="display: none;">
<div id="top">
  <div class="img-wrap">
    <img src="<?php echo $site['res']; ?>/imgs/nydalenrevyen_compactv2_rings.png" class="img-rings" />
    <img src="<?php echo $site['res']; ?>/imgs/nydalenrevyen_compactv2_text.png" class="img-text" />
  </div>
  <h2>KONSEPTSLIPP 2020</h2>
</div>
<div id="countdown">
  <div class="timer"><span id="days">-</span><span id="hours">-</span><span id="minutes">-</span><span id="seconds">-</span></div>
  <div class="fields"><span>DAGER</span><span>TIMER</span><span>MIN</span><span>SEK</span></div>
</div>
<div id="social-media">
  <a href="https://www.facebook.com/Nydalenrevyen2020/" class="fa fa-facebook" target="_blank"></a>
  <a href="https://www.instagram.com/nydalenrevyen/?hl=nb" class="fa fa-instagram"  target="_blank"></a>
  <a href="https://www.youtube.com/channel/UCUuFXAdy9Bh6XMtWRIsDBNA" class="fa fa-youtube" target="_blank"></a>
</div>

<script>
var end = new Date('<?php echo $site['countdown']; ?>');

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
    var now = new Date();
    var distance = end - now;
    if (distance < 0) {
        clearInterval(timer);
        setTimeout(reloadPage, 3000);
        return;
    }
    var days = Math.floor(distance / _day);
    var hours = Math.floor((distance % _day) / _hour);
    var minutes = Math.floor((distance % _hour) / _minute);
    var seconds = Math.floor((distance % _minute) / _second);

    document.getElementById('days').innerHTML = days;
    document.getElementById('hours').innerHTML = hours;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;
}

function reloadPage(){
   window.location.href = window.location.href;
}

timer = setInterval(showRemaining, 1000);
</script>

</body>
</html>