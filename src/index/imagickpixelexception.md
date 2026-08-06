# ImagickPixelException
``ImagickPixelException`` is an exception class that is used to handle exceptions related to problems with ``ImagickPixel`` objects.

``ImagickPixelException`` happens when using invalid color specification.

``ImagickPixelException`` is related to the ``Imagick`` extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/imagickpixelexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/imagickpixelexception.html","name":"ImagickPixelException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``ImagickPixelException`` is an exception class that is used to handle exceptions related to problems with ``ImagickPixel`` objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ImagickPixelException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    try {
        // valid creation
        new ImagickPixel("LightCoral");
        
        // invalid creation
        new ImagickPixel("LightCorral");
    } catch (ImagickPixelException $e) {
        log("Error while creating a pixel");
    }

?>
```

**[Documentation](https://www.php.net/manual/en/imagickpixel.construct.php)**
## Related

+ [Exception](exception.ini.html)
+ [imagick](imagick.ini.html)
+ [ImagickException](imagickexception.ini.html)
