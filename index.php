<?php
$insert = false;
if(isset($_POST['name']))
{
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con){
        die("connection to database is failed due to". mysqli_connect_error());

    }
    //echo "Connected to the database successfully";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    
    $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;

    if ($con->query($sql)==true){
        //echo "successfully";
        $insert = true;
    }
    //echo "error $sql <br> $con->error";

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpeg" alt="Travel image">
    <div class="container">
        <h1>Welcome to the trip to the US </h1>
        <?php
        if ($insert == true){
        echo"<h1>THANKS FOR SUBMITING YOUR RESPONSE</h1>";
        }
        ?>
        <p>Fill the following details for confirming the trip to US</p>   

        <form action="index.php" method="post">
            <input type="text" name="name" id="name"placeholder="Enter your name: ">
            <input type="text" name="age" id="age"placeholder="Enter your age: ">
            <input type="text" name="gender" id="gender"placeholder="Enter your Gender: ">
            <input type="email" name="email" id="email"placeholder="Enter your email address: ">
            <input type="phone" name="phone" id="phone"placeholder="Enter your Phone number: ">
            <textarea name="desc" id="desc" placeholder="Enter other details here"></textarea>

            <button class="btn">Submit</button>
            <button class="btn">Reset</button>


        </form>

    </div>
   
    <script src="index.js"></script>
</body>
</html>