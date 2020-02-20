<?php

    session_start();
   $nutri1 = $_SESSION['reponse-nutri1'];
   $nutri2 = $_SESSION['reponse-nutri2'];
   $sport1 = $_SESSION['reponse-sport1'];
   $sport2 = $_SESSION['reponse-sport2'];
//    echo "<p>".$_SESSION['reponse-nutri1']."</p>";
//    echo "<p>".$_SESSION['reponse-nutri2']."</p>";
   

    if($nutri1 == "2" && $nutri2 == "2" && $sport1 == "2")  {


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
    <title>BNP</title>
</head>

<body>
    <div class="container-fluid" style="background-image: url(images/bg-result.png);height: 800px;background-size: 100%;background-repeat: no-repeat;">
        <header>
            <h1 class="title">BNPREV</h1>
            <p>Result</p>
            <div class="">
                <img src="images/oiseaux.png" alt="" class="oiseaux">
            </div>
        </header>
        <div class="corps text-center" style="padding-top: 50%">
            <div>
                <!-- <h3 class="description">TIME TO RELAX/ HAVE FUN / WHATEVER</h3> -->
                <!-- <p>All the informations are private</p> -->
                <a href="version.html" class="btn btn-light btn-prev" style="font-size:30px;border-radius: 68px;padding: 18px;">In view of your responses : Alert ! I think you gonna 
explode soon !</a>
                <div>
                    <img src="images/panda-right.png" alt="" class="panda-right">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php


    } else if($nutri1 == "1" && $nutri2 == "1" && $sport1 == "1") {


    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
    <title>BNP</title>
</head>

<body>
    <div class="container-fluid" style="background-image: url(images/bg-result.png);height: 800px;background-size: 100%;background-repeat: no-repeat;">
        <header>
            <h1 class="title">BNPREV</h1>

            <div class="">
                <img src="images/oiseaux.png" alt="" class="oiseaux">
            </div>
        </header>
        <div class="corps text-center" style="padding-top: 50%">
            <div>
                <h3 class="description">Result</h3>
                <!-- <p>All the informations are private</p> -->
                <a href="version.html" class="btn btn-light btn-prev" style="font-size:30px;border-radius: 68px;padding: 18px;">In view of your responses: <br>Congratulations on your honesty, 
but you're going to have 
to rethink some 
of your habits..</a>
                <div>
                    <img src="images/panda-right.png" alt="" class="panda-right">
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php

    }

?>