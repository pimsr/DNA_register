<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <script src="assets/js/bootstrap.min.js"></script>

    <style>
        .content{
            width: 100%;
            top: 50%;
            left: 50%;

        }
        .box{
            padding: 30px;
            background-color: #efefef;
            margin-bottom: 30px;
        }
        .box h3{
            font-size: 26px;
        }
        .box p{
            font-size: 22px;
        }
        .btn{
            background-color: #0B1423;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
            color: #F2A921;
            border-radius: 6px;
            width: 200px;
            letter-spacing: 0px;
        }
        .btn:hover,
        .btn:focus{
            color: #F2A921;
        }
    </style>
  </head>
  <body>

   <div class="content">
    <div class="container">
        
        <div class="row text-center py-5">
            <div class="col-md-12">
            <h3 class="text-center">SCAN QR CODE</h3></div>
            <div class="col-md-6">
                <div class="box">
                    <h3>สำหรับ IOS</h3>
                    <a class="btn" href="qrafter://scan/?ret=https://usabuy.idealedev.com/register/qrcodereader.php?code={CODE}">IOS</a>
                    <p class="mt-4">
                        ก่อนใช้งานต้องทำการ DOWNLOAD APP <br> "<a href="https://itunes.apple.com/us/app/qrafter-qr-code-barcode-reader/id416098700?mt=8&ign-mpt=uo%3D4">Qrafter - QR Code</a>" 
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h3>สำหรับ ANDROID</h3>
                    <a class="btn" href="http://zxing.appspot.com/scan?ret=https://usabuy.idealedev.com/register/qrcodereader.php?code={CODE}">ANDROID</a>
                    <p class="mt-4">
                        ก่อนใช้งานต้องทำการ DOWNLOAD APP <br> "<a href="https://play.google.com/store/apps/details?id=com.google.zxing.client.android">	Barcode Scanner</a>" 
                    </p>
                </div>
            </div>
        </div>
    </div>
   </div>




    <?php
        if ($_GET["code"]) {
        ?>
        <h1>CODE: <?= $_GET["code"]; ?></h1>
        <?php
        }
    ?>
  </body>
</html>