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
  $sql = "SELECT * FROM factuur;";
  $result = $conn->query($sql);

  $conn->close();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rent-a-car</title>
    <link rel="stylesheet" href="CSS/reservering.css">
    <link rel="stylesheet" href="CSS/nav-footer.css">
  </head>
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
      <br>
      <table>
        <center>
          <br><h1>reserveringen</h1></br>
          <tr>
            <th>naam</th>
            <th>achternaam</th>
            <th>telefoonnummer</th>
            <th>email</th>
            <th>postcode</th>
            <th>tijdslot</th>
            <th>autonaam</th>
            <th>prijs</th>
            <th>btw</th>
            <th>Totaalprijs</th>
          </tr>
            <?php if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                  <td><?php echo $row['naam'] . "<br>"?></td>
                  <td><?php echo $row['achternaam'] . "<br>"?></td>
                  <td><?php echo $row['telefoonnummer'] . "<br>"?></td>
                  <td><?php echo $row['email'] . "<br>"?></td>
                  <td><?php echo $row['postcode'] . "<br>"?></td>
                  <td><?php echo $row['tijdslot'] . "<br>"?></td>
                  <td><?php echo $row['autonaam'] . "<br>"?></td>
                  <td><?php echo $row['prijs'] . "<br>"?></td>
                  <td><?php echo $row['btw'] . "<br>"?></td>
                  <td><?php echo $row['totaalprijs'] . "<br>"?></td>

                </tr>
            <?php
              }
            }
            ?>
      </center>
    </table>
  </br>

      <div class="footer">
        <p class="footer-text">© Copyright 2021 FastDevelopment bv</p>
      </div>
  </body>
</html>
