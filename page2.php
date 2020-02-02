<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>

<body>
    <?php require "includes/header.inc.php"; ?>

    <p class=<?php if (isset($_GET['text'])) if ($_GET['text'] == "big") echo "text"; ?>>Here is where you see the changes happening when you enter variables from page 1 in the url of this page. You can go back to page 1 by clicking <a href="page1.php">here.</a></p>

    <h3>Here is the song you're selected (hint: all these songs are from one game):</h3>

    <?php

    if (isset($_GET['songs'])) {
        if ($_GET['songs'] == 1) {
            $songs = $_GET['songs'];
            echo "<p>Layer Cake</p>";
        } elseif ($_GET['songs'] == 2) {
            $songs = $_GET['songs'];
            echo "<p>Butterfly Kiss</p>";
        } elseif ($_GET['songs'] == 3) {
            $songs = $_GET['songs'];
            echo "<p>Last Surprise</p>";
        } elseif ($_GET['songs'] == 4) {
            $songs = $_GET['songs'];
            echo "<p>Rivers in the Desert</p>";
        }
    }
    ?>

    <p class=<?php if (isset($_GET['pink'])) if ($_GET['pink'] == strtolower("yes")) echo "pink"; ?>>Not interesting enough? Watch carefully as something interesting happens as you're about to see. Something interesting might happen. Pay close attention here.</p>

    <?php
    if (isset($_GET['anime'])) {
        if ($_GET['anime'] == 'pics') {
            echo "<img src=\"images/anime-girl.jpg\" alt=\"A girl having trouble cooking\">";
        }
    }

    if (isset($_GET['appear'])) {
        if ($_GET['appear'] == 'ok') {
            echo "<p>I would like to take the time and say thank you for reading this paragraph. I can only hope that it meets the requirements for this assignment. We shall see how far this can go before it gets too boring.</p>";
        }
    }

    if (isset($_GET['cake'])) {
        if ($_GET['cake'] == 'eat') {
            echo "<p>This cake <b>isn't</b> a lie, it's real.</p>";
            echo "<img src=\"images/home_made_cake.jpg\" alt=\"Home made cake with fondent.\">";
        }
    }

    ?>

    <p>Even in the darkest of times, one must not forget that there is still hope. Mistakes can happen to the best of us even in our best of time, but we must remember that we are only human, we make mistakes. It is up to us to choose to either learn from it or not. Let <?php if (isset($_GET['quote'])) if ($_GET['quote'] == 'inspire') echo "<b>never stop improving</b>."; ?></p>

    <?php require "includes/footer.inc.php"; ?>


    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>