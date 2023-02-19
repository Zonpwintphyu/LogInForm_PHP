<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login In Form</title>
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
<body class="bg-danger" style="--mdb-bg-opacity: 0.5;">
      <div class="header text-danger text-center mb-4">
              <h2>Log_In Form</h2>
          </div>
    
      <div class="container p-3 rounded bg-dark" >
        <div class="row ">
        <form method="POST">  
          <div class="input mt-3 ">
            <div class="mb-4 text-danger" >
            <label for="name" class="me-4" >Your Name</label>
            <input type="text" value="" name="name" placeholder="Type your name">
            </div>
            <div class="mb-4 text-danger ">
            <label for="gmail" class="me-4" >Your Gmail</label>
            <input type="gmail" value="" name="gmail" placeholder="Type your gmail">
            </div>
            <div class="mb-4 text-danger">
            <label for="password" class="me-4 ms-2" >Password </label>
            <input type="password" value="" name="password" placeholder="Type your password">
            </div>
            <div>
            <button type="submit" class="btn btn-danger w-75" name="login">Log In</button>
          </div>
          <a href="log_in.php">
          <button type="button" class="btn btn-danger m-3">Log In</button></a>
          <a href="log_out.php">
          <button type="button" class="btn btn-danger m-3">Log Out</button></a>
          <a href="register.php">
          <button type="button" class="btn btn-danger m-3">Register</button></a>
          </div>
        </form>
        </div>
      </div>
    
  <?php
  session_start();
  if(isset($_POST['login'])){
    $usergmail = $_POST['gmail'];
    $username = $_POST['name'];
    $userpassword = $_POST['password'];

    if($usergmail == $_SESSION['gmail'] && $username == $_SESSION['name'] && password_verify($userpassword,$_SESSION['password'])){
      echo "Login Success!!";
    }else{
      echo "Login Failed! Try Again!";
    }

  }

  ?>
</body>

</html>