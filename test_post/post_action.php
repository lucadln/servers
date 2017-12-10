<html>
  <body>

    <?php
      // Get form data
      $name = $_POST["name"];
      $id = $_POST["id"];

      // Connect to db
      $servername = "localhost";
      $username = "root";
      $password = "1234";
      $conn = mysqli_connect($servername, $username, $password);

      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      // Select database to use
      $sql = "USE demo";

      // Check if db was selected successfully
      if (mysqli_query($conn, $sql)) {
        echo "Using demo db!";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      // Insert data into db
      $sql = "INSERT INTO demo VALUES ('$id', '$name')";

      // Check if data was registered successfully
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      // Close db connection
      mysqli_close($conn);
    ?>

  </body>
</html>
