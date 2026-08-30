# ImagickException
The ``ImagickException`` exception is thrown when an error happens while processing an ``Imagick`` operation. Any of the Imagick functions may throw that exception.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickexception.html","name":"ImagickException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:34:20 +0000","dateModified":"Sat, 08 Aug 2026 14:34:20 +0000","description":"The ImagickException exception is thrown when an error happens while processing an Imagick operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickexception.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagick.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagickpixelexception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.imagick.php"},{"@type":"CreativeWork","name":"How to Fix 'ImagickException: not authorized'","url":"https:\/\/andy-carter.com\/blog\/how-to-fix-imagickexception-not-authorized"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"imagickexception"}]}]}</script>
```php
<?php

try {
    $imagick->gammaImage($correction, \Imagick::CHANNEL_ALL);
} catch (\ImagickException $e) {
    throw new RuntimeException('Failed to apply gamma correction to the image');
}

?>
```

**[Documentation](https://www.php.net/manual/en/book.imagick.php)**
## See Also

+ [How to Fix 'ImagickException: not authorized'](https://andy-carter.com/blog/how-to-fix-imagickexception-not-authorized)

## Related

+ [Exception](exception.html)
+ [imagick](imagick.html)
+ [ImagickPixelException](imagickpixelexception.html)
