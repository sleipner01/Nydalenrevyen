<!DOCTYPE html>
<html>
<head>
    <title>Billetter | Nydalenrevyen 2021</title>
    <?php include "head.php"; ?>
</head>

<body>
    <?php include 'nav.php'; ?>

    <div id="content">
        <div style="width: fit-content; margin: 30px auto; color: white; text-align: center;">
            <h1 style="font-weight: normal;">Følg oss på sosiale medier</h1> <br>
            <h3 style="font-weight: normal;">så varsler vi når billettsalget er i gang!</h3>
        </div>
        <div class="fragment social">
            <div><a href="https://www.youtube.com/channel/UCUuFXAdy9Bh6XMtWRIsDBNA" target="_blank"><i class="fa fa-youtube-play yt"></i></a></div>
            <div><a href="https://www.facebook.com/Nydalenrevyen2020/" target="_blank"><i class="fa fa-facebook-official fb"></i></a></div>
            <div><a href="https://www.instagram.com/nydalenrevyen/" target="_blank"><i class="fa fa-instagram ig"></i></a></div>
        </div>
        <div style="margin: 30px auto; width: 50%"><img width="100%" src="<?php echo $site['res']; ?>/res/imgs/konsept/Nydalenrevyen_konsept.png" /></div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>