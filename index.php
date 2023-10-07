<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba7</title>
    <?php include "C:\Users\lynny\Desktop\WebBushin\Laba6\Data.php"?>
    <?php include "C:\Users\lynny\Desktop\WebBushin\Laba6\Time.php"?>
    <?php include "C:\Users\lynny\Desktop\WebBushin\Laba7\Image.php"?>
</head>
<body>
<?php
    $center_png_path = 'C:\Users\lynny\Desktop\WebBushin\Laba7\Images\center.png';

    $left_png_path = 'C:\Users\lynny\Desktop\WebBushin\Laba7\Images\left.png';
    $right_png_path = 'C:\Users\lynny\Desktop\WebBushin\Laba7\Images\right.png';

    $moon_sm_png_path = 'C:\Users\lynny\Desktop\WebBushin\Laba7\Images\moon_sm.png';
    $sun_sm_png_path = 'C:\Users\lynny\Desktop\WebBushin\Laba7\Images\sun_sm.png';

    $url = 'https://ua.sinoptik.ua/погода-';

    $image = new Image();
    $image->create_image();
?>
</body>
</html>
