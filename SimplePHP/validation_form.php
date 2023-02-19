<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Form</title>
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
<body>
    <?php
    $errorName = $errorGmail = $errorPhone = $errorAddress = "";
    $name = $gmail = $phone = $address = "";
    if (isset($_POST['btnSave'])){
        if($_POST['name'] == null || $_POST['name'] == "" || empty($_POST['name'])){
            $errorName = "Please Fill out name field";
        }else{
            $name = $_POST['name'];
        }
        if($_POST['gmail'] == null || $_POST['gmail'] == "" || empty($_POST['gmail'])){
            $errorGmail = "Please Fill out gmail field";
        }else{
            $gmail = $_POST['gmail'];
        }
        if($_POST['phone'] == null || $_POST['phone'] == "" || empty($_POST['phone'])){
            $errorPhone = "Please Fill out phone field";
        }else{
            $phone = $_POST['phone'];
        }
        if($_POST['address'] == null || $_POST['address'] == "" || empty($_POST['address'])){
            $errorAddress = "Please Fill out address field";
        }else{
            $address = $_POST['address'];
        }

        if ( $name != "" && $gmail != "" && $phone != "" && $address != "" ){
            echo $name . "<br>";
            echo $gmail . "<br>";
            echo $phone . "<br>";
            echo $address . "<br>";
        }
    }
    ?>
    <div class="container">
        <div class="row">
            <div class=" col-6 offset-3 shadow ">
                <form method="POST">
                <div class=" my-3 mx-3 ">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                    <small class="text-danger"><?php echo   $errorName; ?></small>
                </div>
                <div class=" my-3 mx-3">
                    <label for="gmail">Gmail</label>
                    <input type="gmail" name="gmail" class="form-control">
                    <small class="text-danger"><?php echo $errorGmail; ?></small>
                </div>
                <div class=" my-3 mx-3">
                    <label for="phone">Phone</label>
                    <input type="phone" name="phone" class="form-control">
                    <small class="text-danger"><?php echo $errorPhone; ?></small>
                </div>
                <div class=" my-3 mx-3">
                    <label for="address">Address</label>
                    <textarea type="text" name="address" class="form-control"></textarea>
                    <small class="text-danger"><?php echo $errorAddress; ?></small>
                </div>
                <div class=" my-3 mx-3 float-end">
                    <button type="submit" name="btnSave" class="form-control btn btn-warning shadow  text-dark">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>