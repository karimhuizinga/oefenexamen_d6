<?php
  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $databaseName = "d6_oefenexamen";

  $conn = new mysqli($serverName, $userName, $password, $databaseName);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if (isset($_POST['submit'])) {
    var_dump($_POST);
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $postcode = $_POST['postcode'];
    $tijdslot = $_POST['tijdslot'];
    $autonaam = $_POST['autonaam'];
    $prijs = $_POST['prijs'];
    $btw = $_POST['btw'];
    $totaalprijs = $_POST['totaalprijs'];

    $sql = "INSERT INTO factuur (naam, achternaam, telefoonnummer, email, postcode, tijdslot, autonaam, prijs, btw, totaalprijs)
    VALUES ('$voornaam', '$achternaam', '$telefoonnummer', '$email', '$postcode', '$tijdslot', '$autonaam', '$prijs', '$btw', '$totaalprijs') ";

    if ($conn->query($sql) === TRUE) {
      //header("Location:print.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    $conn->close();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cars</title>
    <link rel="stylesheet" href="CSS/cars.css">
    <link rel="stylesheet" href="CSS/nav-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  </head>
  <body>

    <!-- <php require> -->

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


      <div id="main-page">
        <div class="grid">
          <div class="grid-container">
            <div class="grid-item1"><img src="CSS/img/BMW 323 (benzine).jpg" width="200" height="200"></img></div>
            <div class="grid-item">
              <p>car info</p>
              <button id="0" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" name="testen">huren</button>
            </div>
          </div>
          <div class="grid-container">
            <div class="grid-item2"><img src="CSS/img/BMW 525 (turbo diesel) Stationwagen.jpg" width="200" height="200"></div>
            <div class="grid-item"><p>car info</p>
              <button id="1" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">huren</button>
            </div>
          </div>
          <div class="grid-container">
            <div class="grid-item3"><img src="CSS/img/BMW 525 (turbo diesel).jpg" width="200" height="200"></img></div>
            <div class="grid-item"><p>car info</p>
              <button id="2" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">huren</button>
            </div>
          </div>
          <div class="grid-container">
            <div class="grid-item4"><img src="CSS/img/BMW 730 (diesel v12).jpg" width="200" height="200"></img></div>
            <div class="grid-item">
              <p> car info</p>
              <button id="3" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">huren</button>
          </div>
          </div>
          <div class="grid-container">
            <div class="grid-item5"><img src="CSS/img/BMW323 (benzine) Sportwagen.jpg" width="200" height="200"></img></div>
            <div class="grid-item"><p>car info</p>
              <button id="4" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">huren</button>
            </div>
          </div>
          <div class="grid-container">
            <div class="grid-item6"><img src="CSS/img/BMW 525 (turbo diesel) Stationwagen.jpg" width="200" height="200"></img></div>
            <div class="grid-item"><p>car info</p>
              <button id="5" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">huren</button>
            </div>
          </div>
          <div class="grid-container">
            <div class="grid-item7"><img src="CSS/img/Mercedes Pullman Standaard.jpg" width="200" height="200"></img></div>
            <div class="grid-item"><p>car info</p>
              <button id="6" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">huren</button>
            </div>
          </div>
          <div class="grid-container">
            <div class="grid-item8"><img src="CSS/img/MercedesCLK(benzine)Cabriolet.jpg" width="200" height="200"></img></div>
            <div class="grid-item"><p>car info</p>
              <button id="7" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">huren</button>
            </div>
          </div>
          <div class="grid-container">
            <div class="grid-item9"><img src="CSS/img/Porsche 911s Cabriolet.jpg" width="200" height="200"></img></div>
            <div class="grid-item"><p>car info</p>
              <button id="8" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">huren</button>
            </div>
          </div>
          <div class="grid-container">
            <div class="grid-item10"><img src="CSS/img/Rolls-Royce Silver shadow Standaard.jpg" width="200" height="200"></img></div>
            <div class="grid-item"><p>car info</p>
              <button id="9" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">huren</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <?php
        if (isset($_GET["id"])) {
          $id = $_GET["id"];

      ?>
      <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> -->
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">formulier</h5>
              <button type="button" class="btn-close" data-toggle="staticBackdrop" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <form class="" action="" method="post">
                <label>voornaam:</label></br><input type="text" name="voornaam"></br>
                <label>achternaam:</label></br><input type="text" name="achternaam"></br>
                <label>telefoonnummer:</label></br><input type="text" name="telefoonnummer"></br>
                <label>email:</label></br><input type="text" name="email"></br>
                <label>postcode:</label></br><input type="text" name="postcode"></br>
                <label>tijdslot:</label></br>
                <select name="tijdslot" id="tijdslot">
                  <option>1 uur</option>
                  <option>4 uur</option>
                  <option>8 uur</option>
                  <option>12 uur</option>
                  <option>24 uur</option>
                </select></br>
                <label>autonaam:</label></br><input type="text" name="autonaam" value="place holder"></input></br>
                <label>prijs:</label></br><input type="text" name="prijs"></input></br>
                <label>btw:</label></br><input type="text" name="btw" value="21%" readonly="readonly"></input></br>
                <label>totaalprijs:</label></br><input type="text" name="totaalprijs" readonly="readonly"></input></br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="submit">submit</button>
                </div>
              </form>
            </div>
          </div>
        <!-- </div> -->
        <?php
          }
        ?>

          <div class="footer">
            <p class="footer-text">© Copyright 2021 FastDevelopment bv</p>
          </div>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script>
          const cars = [
            "BMW 323 (benzine)",
            "BMW 525 (turbo diesel) Stationwagen",
            "BMW 525 (turbo diesel)",
            "BMW 730 (diesel v12)",
            "BMW323 (benzine) Sportwagen",
            "Mercedes Pullman Standaard",
            "MercedesCLK(benzine)Cabriolet",
            "Porsche 911s Cabriolet",
            "Rolls-Royce Silver shadow Standaard"
          ];
          const prijs = [200, 300, 1,2,3,4,5,6,7,8];

          $(document).ready(function(){
            $(".btn").on( "click", function(event){
              var id = this.id;
              // console.log("button click"+id+" "+cars[id]);
              // $("input[name=autonaam]").val(cars[id]);
              // $("input[name=prijs]").val(prijs[id]);
              // $("input[name=totaalprijs]").val(prijs[id] + prijs[id] * 0.21);
              window.location.replace("cars.php?id="+id);
            });
          });
        </script>
      </body>
</html>
