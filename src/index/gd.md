# Graphic Draw (GD)
``GD`` is the name of a PHP extension that can manipulate several image formats, such as GIF, PNG, JPEG, WBMP, and XPM, and draw graphics.

The GD extension is a binding to the libgd graphics library. It provides functions to create images from scratch, or to load them from an existing file or a binary string, then draw shapes, lines, text, and apply filters, before outputting the result directly to the browser or saving it to disk. Typical uses include generating thumbnails, watermarking uploaded pictures, building CAPTCHAs, drawing charts, or producing dynamically generated images such as Open Graph previews.

GD ships as a bundled extension with PHP, but it must still be enabled, either at compile time with ``--with-gd``, or by loading the ``gd.so`` / ``php_gd.dll`` shared extension in ``php.ini``. Depending on how the underlying libgd was built, support for specific formats such as JPEG, WebP, or FreeType-based text rendering may or may not be available, which can be checked with ``gd_info()``.

GD is not the only image library available for PHP: the Imagick extension, a binding to ImageMagick, offers a richer feature set and support for more formats, at the cost of a heavier dependency. Because GD functions accept resource-like ``GdImage`` objects and can decode attacker-supplied files, careless use, for instance passing unchecked, remotely-provided data to ``imagecreatefromstring()``, has historically been a source of security vulnerabilities.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gd.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gd.html","name":"Graphic Draw (GD)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:21:27 +0000","dateModified":"Fri, 14 Aug 2026 08:21:27 +0000","description":"GD is the name of a PHP extension that can manipulate several image formats, such as GIF, PNG, JPEG, WBMP, and XPM, and draw graphics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gd.html"]}],"keywords":["acronym","extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gif.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagick.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jpg.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/png.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.image.php"},{"@type":"CreativeWork","name":"GD Graphics (Draw) Library","url":"https:\/\/github.com\/libgd\/libgd"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"gd"}]}]}</script>
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
