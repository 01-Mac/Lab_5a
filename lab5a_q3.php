<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 10;
        $width = 5;
        $area = calculateArea($length, $width);

        echo "<h1>Area of the Rectangle</h1>";
        echo "<p>Length: $length</p>";
        echo "<p>Width: $width</p>";
        echo "<p>Area: $area</p>";
    ?>
</body>
</html>
