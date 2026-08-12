# Graphic Draw (GD)
``GD`` is the name of a PHP extension that can manipulate several image formats, such as GIF, PNG, JPEG, WBMP, and XPM, and draw graphics.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gd.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gd.html","name":"Graphic Draw (GD)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:24:37 +0000","dateModified":"Thu, 09 Jul 2026 07:24:37 +0000","description":"GD is the name of a PHP extension that can manipulate several image formats, such as GIF, PNG, JPEG, WBMP, and XPM, and draw graphics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Graphic Draw (GD).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"gd"}]}]}</script>
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

+ [GIF](gif.html)
+ [imagick](imagick.html)
+ [JPEG](jpg.html)
+ [PNG](png.html)
