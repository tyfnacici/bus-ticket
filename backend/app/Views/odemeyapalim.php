<!DOCTYPE html>
<html>
<head>
  <title>Anasayfa | Savaş Dersim Çelik Eğitim Videoları</title>
</head>
<body>
  <style>
    body { text-align: center; padding: 150px; }
    h1 { font-size: 50px; }
    body { font: 20px Helvetica, sans-serif; color: #333; }
    article { display: block; text-align: left; width: 650px; margin: 0 auto; }
    a { color: #dc8100; text-decoration: none; }
    a:hover { color: #333; text-decoration: none; }
  </style>

  <article>
    <h1>Ödeme Sayfası</h1>
    <div>
        
       <?php echo $paymentContent ;?>
       <?php echo $paymentStatus ;?>
     

        <div id="iyzipay-checkout-form" class="responsive"></div>
    </div>
  </article>
</body>
</html>