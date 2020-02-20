<?php

    session_start();
    $_SESSION['reponse-nutri1'];
    $_SESSION['reponse-nutri2'];
    $_SESSION['reponse-sport1'] = "";

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
    <div class="container-fluid"
        style="background-image: url(images/bg-orange.png);height: 800px;background-size: 100%;background-repeat: no-repeat;">
        <header>
            <h1 class="title">BNPREV</h1>
            <div class="">
                <img src="images/oiseaux.png" alt="" class="oiseaux">
            </div>
        </header>
        <div class="corps text-center" style="padding-top: 50%">
            <div>
                <!-- <h3 class="description">TIME TO RELAX/ HAVE FUN / WHATEVER</h3> -->
                <!-- <p>All the informations are private</p> -->
                <p style="font-family: 'Lato', sans-serif; color:white;">HAVE YOU WALK TO WORK TODAY ?</p>
                <!-- <a href="nutrition1.html" class="btn btn-light btn-prev" style="font-size:30px;border-radius: 68px;padding: 18px;">Lorem Ipsum</a><br>
                <a href="proversion.html" class="btn btn-light btn-prev" style="font-size:30px;border-radius: 68px;padding: 18px;">Lorem Ipsum</a><br>
                <a href="proversion.html" class="btn btn-light btn-prev" style="font-size:30px;border-radius: 68px;padding: 18px;">Lorem Ipsum</a> -->
                <form action="sport.php" method="POST">
                    <div class="center-align" style="left: 69%;">

                        <input type="radio" name="choice" id="size_1" value="1" />
                        <label for="size_1">HAVE YOU WALK TO WORK TODAY ?</label>

                        <input type="radio" name="choice" id="size_2" value="2" />
                        <label for="size_2">No, I took my flying socoupe !</label>

                        <!-- <input type="radio" name="choice" id="size_3" value="3" />
                        <label for="size_3">Je ne suis pas concerné</label> -->
                        <div style="padding-top: 25%; padding-left: 47%;">
                        <input type="submit" value="Suivant">
                        </div>

                    </div>
                </form>

                <?php
                    if(isset($_POST["choice"])) {
                        $_SESSION['reponse-sport1'] = $_POST["choice"];
                        echo "<p>".$_SESSION['reponse-sport1']."</p>";
                        header('Location: sport2.php');

                    }
                ?>
                <!-- <div>
                    <img src="images/panda-right.png" alt="" class="panda-right">
                </div> -->
            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>

</html>