# GIF
GIF, for Graphics Interchange Format, is a bitmap image format developed by CompuServe in 1987. It supports up to 256 colors per frame and uses lossless compression based on the LZW algorithm.

GIF is widely known for supporting animation through multiple frames stored in a single file.

The GD extension can create and manipulate GIF images using functions such as ``imagecreatefromgif()``, ``imagegif()``, and ``imagecreatetruecolor()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gif.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gif.ini.html","name":"GIF","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:27 +0000","dateModified":"Wed, 05 Aug 2026 08:17:27 +0000","description":"GIF, for Graphics Interchange Format, is a bitmap image format developed by CompuServe in 1987","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/GIF.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $image = imagecreatefromgif('input.gif');
    
    // Manipulate...
    
    imagegif($image, 'output.gif');
    imagedestroy($image);

?>
```

**[Documentation](https://www.php.net/manual/en/function.imagegif.php)**
## See Also

+ [An Introduction to the PHP GD Graphics Library](https://reintech.io/blog/introduction-php-gd-graphics-library)
+ [PHP and GD Library: Creating and Manipulating Images](https://reintech.io/blog/php-gd-library-creating-manipulating-images)

## Related

+ [JPEG](jpg.ini.html)
+ [PNG](png.ini.html)
+ [Image](image.ini.html)
+ [Graphic Draw (GD)](gd.ini.html)
