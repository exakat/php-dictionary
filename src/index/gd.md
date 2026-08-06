# Graphic Draw (GD)
``GD`` is the name of a PHP extension that can manipulate several image formats, such as GIF, PNG, JPEG, WBMP, and XPM, and draw graphics.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gd.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gd.html","name":"Graphic Draw (GD)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:24:37 +0000","dateModified":"Thu, 09 Jul 2026 07:24:37 +0000","description":"``GD`` is the name of a PHP extension that can manipulate several image formats, such as GIF, PNG, JPEG, WBMP, and XPM, and draw graphics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Graphic Draw (GD).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.image.php)**
## See Also

+ [GD Graphics (Draw) Library](https://github.com/libgd/libgd)

## Related

+ [GIF](gif.ini.html)
+ [imagick](imagick.ini.html)
+ [JPEG](jpg.ini.html)
+ [PNG](png.ini.html)
