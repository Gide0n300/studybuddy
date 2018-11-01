              <?php
                  $conn = mysqli_connect("localhost", "root", "", "loginsystem");
                  if(!$conn)
                  {
                    die('Could not connect '.$conn->connect_error);
                  }
                  $method = $_SERVER['REQUEST_METHOD'];
                  if($method == "GET")
                  {
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn,$sql);
                    $rows = array();
                    if(mysqli_num_rows($result)>0)
                    {
                      while ($r = mysqli_fetch_assoc($result))
                      {
                        array_push($rows,$r);
                      }
                      print json_encode($rows);
                    }
                    else
                    {
                      echo "No data";
                    }

                  }
                  elseif ($method =="POST")
                  {
                    $first = mysqli_real_escape_string($conn, $_POST['user_first']);/*Getting the actual data from the signup form.FIRST name in signup form*/
                    $last = mysqli_real_escape_string($conn,$_POST['user_last']);/*mysqli_real_escape_string prevents users from entring code as a security measure, it will only be read as a string*/
                    $email = mysqli_real_escape_string($conn,$_POST['user_email']);
                    $phone = mysqli_real_escape_string($conn,$_POST['user_phone']);
                    $uid = mysqli_real_escape_string($conn,$_POST['user_uid']);
                    $pwd = mysqli_real_escape_string($conn,$_POST['user_pwd']);
                    $confirmpwd = mysqli_real_escape_string($conn,$_POST['confirmpwd']);
                    $demi = $_POST['user_demi'];
                    //Email
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                      $error['failed'] = 'Invalid email';
                      echo json_encode($error);
                    }
                    else
                    {
                    $sql_insert = "INSERT INTO users (user_first, user_last, user_email, user_phone, user_uid, user_pwd, user_demi) VALUES ('$first','$last','$email','$phone','$uid','$pwd', '$demi')";
                    if(mysqli_query($conn,$sql_insert))
                    {
                      echo "User successfully added to the database";
                    }
                    else
                    {
                      echo "Error: $sql_insert did not run ".mysql_error($conn);
                    }
                  }
                }
                  mysqli_close($conn);
               ?>
