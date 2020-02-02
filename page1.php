<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>

<body>
    <?php require("includes/header.inc.php"); ?>
    <p>This page will serve as instructions for page 2. These instructions are what you can add to the url after the file name for page 2. Make sure you either start with '?' or '&' if you already have a '?' in the URL.</p>

    <p>You can use the following <a href="page2.php">link</a> to get to page 2 from here.</p>

    <p>First off, enter the word 'songs' follow by one of these values:</p>
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>
    <p>A song title will appear on the page.</p><br>

    <p>Not interesting enough? Enter 'pink' with a value of 'yes' to watch a paragraph have a pink background.</p><br>

    <p>Time for something different, enter 'anime' with a value of 'pics' to get a image.</p><br>

    <p>Try typing 'text' with a value of 'big' and see what happens.</p><br>

    <p>Type 'appear' with a value of 'ok'.</p><br>

    <p>This last one is pretty special to me, use 'quote' with a value of 'inspire'.</p><br>

    <?php require("includes/footer.inc.php"); ?>
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>