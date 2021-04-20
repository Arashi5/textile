<?php
$today = date("d.m.Y H:i:s");
?>
        <div class="container-fluid footer-container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <span class="font-weight">Разработка - Russian Crab Studio </span>
                    <img width='50' height='50' src='assets/images/crab.png'>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <address>
                        <span class="sub-text">г. Иваново, ул. Ермака, 49, 153025</span>
                    </address>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <img width="25" height="25" src='assets/images/ball2.png'>
                    <span class = "font-weight"><?php echo $today?></span>
                    <img width="25" height="25" src='assets/images/ball2.png'>
                </div>
            </div>
        </div>
    </body>
</html>