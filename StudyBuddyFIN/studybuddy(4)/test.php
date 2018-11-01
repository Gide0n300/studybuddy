              <?php
              //  include 'dbh-back-end.php';
                header("Content-type:application/json");
                $conn = mysqli_connect("localhost", "root", "", "loginsystem");
                if(!$conn)
                {
                  die('Could not connect'.mysqli_error());
                }
                $result = mysqli_query($conn, "SELECT * FROM users");
                while($row = mysqli_fetch_assoc($result))
                {
                  $output[] = $row;
                }
                print(json_encode($output, JSON_PRETTY_PRINT));
                mysqli_close($conn);
              ?>
