<!DOCTYPE html>
<html>

    <head>
        <title> Web Page </title>
        <link rel="stylesheet" href= "../PHPinVisualStudioCode/style.css" />
    </head>

<body>

    <h1>Welcome to my first PHP page</h1>

        <br><br><br><br><br><br><br>

        <div class= "name">
            <?php
            $txt = "Jericho Carl R. Lugtu"; 
            echo " Hello my name is $txt <br> ";
            ?>
        </div>

        <br> <br>

        <div class= "age">
            <?php
            $txt1 = "21 years old";
            echo " Im $txt1 <br> ";
            ?>
        </div>

        <br> <br>

        <div class= "school">
            <?php
            $txt2 = "De La Salle Araneta University";
            echo " From $txt2 <br>";
            ?>
        </div>

</body>
</html>