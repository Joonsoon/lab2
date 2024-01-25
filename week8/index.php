<!DOCTYPE html>
<html>

<head>
    <title>PHP Page</title>
    <style>
        .container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid white;
            border-radius: 10px;
        }
    </style>
</head>

<body style="background-color: black; color: white; text-align: center; padding-top: 50px; font-family: Arial, sans-serif;">

    <div class="container">
        <?php
        // Assigning a string to a variable
        $enrollmentStatus = "Currently Enrolled In Asia Pacific College";

        // Displaying the variable in HTML
        echo "<h1>Janson Pagharion</h1>";
        echo "<p>BSCS-SF221</p>";
        echo "<p>$enrollmentStatus</p>";

        // Adding a random PHP loop to generate paragraphs
        $randomParagraphs = rand(1, 5);

        for ($i = 0; $i < $randomParagraphs; $i++) {
            echo "<p>This is a random paragraph #$i.</p>";
        }

        echo "<h1>Min Max Function</h1>";
        echo(min(0, 150, 30, 20, -8, 500) . "<br>");
        echo(max(0, 150, 30, 20, -8, -200));

        ?>
    </div>

</body>

</html>
