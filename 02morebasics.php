<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning more basics of the php</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: lightblue;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Learn about the loops in the php</h1>
        <p>Your age status is here</p>
        <?php
            $age = 34;
            if($age>18){
                echo "You are an adult <br>";
            }
            else
            echo "You are a kid <br>";

            $languages = array("Python","C++","HTML","JavaScript");
            echo "<br>";
            echo count($languages);
            echo "<br>";
            for ($i=0; $i<4;$i++){
                echo $languages[$i];
                echo"<br>";
            }

            foreach ($languages as $value) {
               echo "<br>The values of the languages by foreach loop are ";
               echo $value;
            }
        ?>
    </div>
    
</body>
</html>