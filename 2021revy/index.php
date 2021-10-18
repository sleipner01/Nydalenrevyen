<!DOCTYPE html>
<html>
<head>
    <title>TAKK FOR DET | Nydalenrevyen 2021</title>
    <?php include "head.php"; ?>
</head>

<body>
    <?php include "nav.php"; ?>

    <div id="top">
        <div class="fullscreen-bg">
            <!-- Inni <video /> // poster="<?php echo $site['res']; ?>/res/imgs/konsept/Nydalenrevyen_Clean.png" //-->
            <video loop muted autoplay height="100vh" class="fullscreen-bg__video">
			    <source src="<?php echo $site['res']; ?>/res/videos/teaser-short.mp4" type="video/mp4">
			</video>
        </div>
        <div class="content">
            <b class="title fs50">NYDALENREVYEN 2021<br>PRESENTERER:</b>
           <img class="logo" src="<?php echo $site['res']; ?>/res/imgs/konsept/Nydalenrevyen_konsept.png" /> 
            <!-- <b class="title fs40">PREMIERE DD. MÅNED 2021</b> -->
            <!--<div class="countdown" style="overflow-x:hidden;">
                <span class="days"><span class="num">&nbsp;</span><span class="text">DAGER</span></span><span class="hours"><span class="num">&nbsp;</span><span class="text">TIMER</span></span><span class="minutes"><span class="num">&nbsp;</span><span class="text">MINUTTER</span></span><span class="seconds"><span class="num">&nbsp;</span><span class="text">SEKUNDER</span></span>
            </div>-->
        </div>
    </div>

    <div id="content" class="main">
        <div class="fragment social">
            <div><a href="https://www.youtube.com/channel/UCUuFXAdy9Bh6XMtWRIsDBNA" target="_blank"><i class="fa fa-youtube-play yt"></i></a></div>
            <div><a href="https://www.facebook.com/Nydalenrevyen2020/" target="_blank"><i class="fa fa-facebook-official fb"></i></a></div>
            <div><a href="https://www.instagram.com/nydalenrevyen/" target="_blank"><i class="fa fa-instagram ig"></i></a></div>
        </div>
        
        <div class="fragment teaser">
            <div class="wrap">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/KMZmjHjvHDo" frameborder="0" allow="encrypted-media, autoplay" allowfullscreen></iframe>
           </div>
        </div>	
    </div>

    <?php include "footer.php" ?>

    <script src="<?php echo $site['res']; ?>/res/scripts/countdown.js"></script>
    <script>
        startCountdown(document.querySelector("#top .content .countdown"), new Date('02/27/2020 19:00:00'));
    </script>
</body>

</html>