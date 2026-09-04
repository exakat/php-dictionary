# ImagickPixelException
``ImagickPixelException`` is an exception class that is used to handle exceptions related to problems with ``ImagickPixel`` objects.

``ImagickPixelException`` happens when using invalid color specification.

``ImagickPixelException`` is related to the ``Imagick`` extension.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickpixelexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickpixelexception.html","name":"ImagickPixelException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:06 +0000","dateModified":"Sun, 16 Aug 2026 07:46:06 +0000","description":"ImagickPixelException is an exception class that is used to handle exceptions related to problems with ImagickPixel objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickpixelexception.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagick.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickexception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/imagickpixel.construct.php"},{"@type":"CreativeWork","name":"ImagickException","url":"https:\/\/www.php.net\/manual\/en\/class.imagickexception.php"},{"@type":"CreativeWork","name":"Exception handling (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Exception_handling"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"imagickpixelexception"}]}]}</script>
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
## See Also

+ [ImagickException](https://www.php.net/manual/en/class.imagickexception.php)
+ [Exception handling (Wikipedia)](https://en.wikipedia.org/wiki/Exception_handling)

## Related

+ [Exception](exception.html)
+ [imagick](imagick.html)
+ [ImagickException](imagickexception.html)
