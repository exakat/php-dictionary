# Graphic Draw (GD)
``GD`` is the name of a PHP extension that can manipulate several image formats, such as GIF, PNG, JPEG, WBMP, and XPM, and draw graphics.
```php
<?php

    // Creating a PNG image with PHP 
    // Extract from the PHP documentation
    header("Content-type: image/png");
    $string = $_GET['text'];
    $im     = imagecreatefrompng(images/button1.png);
    $orange = imagecolorallocate($im, 220, 210, 60);
    $px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
    imagestring($im, 3, $px, 9, $string, $orange);
    imagepng($im);

?>
```

## See Also

+ [GD Graphics (Draw) Library](https://github.com/libgd/libgd)

Related : [GIF](GIF), [imagick](imagick), [JPEG](JPEG), [PNG](PNG)
