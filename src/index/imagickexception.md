# ImagickException
The ``ImagickException`` exception is thrown when an error happens while processing an ``Imagick`` operation. Any of the imagick functions may throw that exception.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/imagickexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/imagickexception.html","name":"ImagickException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``ImagickException`` exception is thrown when an error happens while processing an ``Imagick`` operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ImagickException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Exception](exception.ini.html)
+ [imagick](imagick.ini.html)
+ [ImagickPixelException](imagickpixelexception.ini.html)
