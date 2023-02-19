<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class="bg-success" style="--mdb-bg-opacity: 0.5;">
      <div class="header text-danger text-center mb-4">
              <h2>Register</h2>
          </div>
      <div class="container bg-dark p-3 rounded">
    <form method="POST">
        <div class="row">
          <div class="input mt-3">
            <div class="mb-4 text-danger" >
            <label for="name" class="me-5 ms-3 ">Your Name</label>
            <input type="text" name="name" placeholder="Type your name">
            </div>
            <div class="mb-4 text-danger ">
            <label for="gmail" class="me-5 ms-3">Your Gmail</label>
            <input type="gmail" name="gmail" placeholder="Type your gmail">
            </div>
            <div class="mb-4 text-danger">
            <label for="password" class="me-5 ms-4 ">Password </label>
            <input type="password" name="password" placeholder="Type your password">
            </div>
            <div class="mb-4 text-danger">
            <label for="password" class="me-3 ">Confirm Password </label>
            <input type="password" name="confirmpassword" placeholder="Type your password">
            </div>
            <div>
            <button type="submit" class="btn btn-danger w-75" name="register">Register</button>
          </div>
          <a href="log_in.php">
          <button type="button" class="btn btn-danger m-3">Log In</button></a>
          <a href="log_out.php">
          <button type="button" class="btn btn-danger m-3">Log Out</button></a>
          <a href="register.php">
          <button type="button" class="btn btn-danger m-3">Register</button></a>
          </div>
        </div>
    </form>
      </div>

      <?php
      session_start();
      function checkStrongPassword($password){
          $uppercase = false;
          $lowercase = false;
          $number = false;
          $special = false;

          if(preg_match('/[A-Z]/',$password)){
              $uppercase = true;
          }
          if(preg_match('/[a-z]/',$password)){
            $lowercase = true;
        }
        if(preg_match('/[0-9]/',$password)){
            $number = true;
        }
        if(preg_match('/[@!#$*&]/',$password)){
            $special = true;
        }
        if($uppercase && $lowercase && $number && $special){
              return true;
        }else{
              return false;
        }
          
      }
      
      if(isset($_POST['register'])){
          $name = $_POST['name'];
          $gmail = $_POST['gmail'];
          $password = $_POST['password'];
          $confirmpassword = $_POST['confirmpassword'];

        if($name != "" &&$gmail != "" && $password != "" &&$confirmpassword != "" ){

          if(strlen($password) >= 6 && strlen($confirmpassword) >= 6){
             if($password==$confirmpassword){
                      $status = checkStrongPassword($password);
                      if($status){
                        $_SESSION['gmail'] = $gmail;
                        $_SESSION['name'] = $name;
                        $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
  
                        echo "Registeration Success!!!";
                      }else{
                          echo "You need to fill strong password!!!";
                      }
                      
             }else{
                echo "Passwords must be same";
             }
          }else{
              echo "Password must be greater than 6";
          }
        }else{
            echo "You Need to Fill Out";
        }
      }
      ?>
</body>

</html>
