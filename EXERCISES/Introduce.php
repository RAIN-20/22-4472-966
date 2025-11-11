<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="design2.css">

    <title>Introduce Yourself</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h1>1. Introduce Yourself</h1>
        <?php
            $name = "Carl Rainier Ngaosi";
            $age = 21;
            $fav_color = "Green";
            echo "<p class='intro-text'>Hi, I’m <span class='highlight'>$name</span>, I am <span class='highlight'>$age</span> years old, and my favorite color is <span class='highlight'>$fav_color</span>.</p>";
        ?>
        <!-- <button class="btn" onclick="alert('Thank you for visiting!')">Say Hello!</button> -->
    </div>
</body>
</html>
