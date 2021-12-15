<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>print</title>
    <link rel="stylesheet" href="CSS/print.css">
    <link rel="stylesheet" href="CSS/nav-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <body>
    <!--navigationbar-->
    <div id="navigatie">
      <div class="navigatie-objects">
        <div class="navigatie-link">
          /<a href="http://localhost/website/reserveringen.php">reserveringen</a>
        </div>
        <div class="navigatie-link">
          /<a href="http://localhost/website/contact.php">contact</a>
        </div>
        <div class="navigatie-link">
          /<a href="http://localhost/website/cars.php">cars</a>
        </div>
        <div class="navigatie-link">
          <a href="http://localhost/website/">home</a>
        </div>
      </div>
    </div>

    <div id="divToPrint" style="display:none;">
      <div style="width:200px;height:300px;background-color:teal;">
      </div>
    </div>

    <br>
    <div id="main-page">
      <div class="contact-data">
        <center>
          <p>
            Bedankt voor je reservering.<br><br><br>
            Wil je de factuur nog uitprinten?
          </p>
          <iframe src="data.php" style="display:none;" name="frame"></iframe>
          <button type="button" onclick="frames['frame'].print()" value="printletter">
          <img src="CSS/img/print-icon.jpg" width="40" height="40"></img></div>

        </center>
      </div>
    </div>
    <br>

    <div class="footer">
      <p class="footer-text">© Copyright 2021 FastDevelopment bv</p>
    </div>
  </body>
</html>
