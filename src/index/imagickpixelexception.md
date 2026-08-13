# ImagickPixelException
``ImagickPixelException`` is an exception class that is used to handle exceptions related to problems with ``ImagickPixel`` objects.

``ImagickPixelException`` happens when using invalid color specification.

``ImagickPixelException`` is related to the ``Imagick`` extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickpixelexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickpixelexception.html","name":"ImagickPixelException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"ImagickPixelException is an exception class that is used to handle exceptions related to problems with ImagickPixel objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ImagickPixelException.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"imagickpixelexception"}]}]}</script>
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

+ [Exception](exception.html)
+ [imagick](imagick.html)
+ [ImagickException](imagickexception.html)
