# GIF
GIF, for Graphics Interchange Format, is a bitmap image format developed by CompuServe in 1987. It supports up to 256 colors per frame and uses lossless compression based on the LZW algorithm.

GIF is widely known for supporting animation through multiple frames stored in a single file.

The GD extension can create and manipulate GIF images using functions such as ``imagecreatefromgif()``, ``imagegif()``, and ``imagecreatetruecolor()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gif.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gif.html","name":"GIF","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:27 +0000","dateModified":"Wed, 05 Aug 2026 08:17:27 +0000","description":"GIF, for Graphics Interchange Format, is a bitmap image format developed by CompuServe in 1987","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/GIF.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"gif"}]}]}</script>
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

+ [JPEG](jpg.html)
+ [PNG](png.html)
+ [Image](image.html)
+ [Graphic Draw (GD)](gd.html)
