# php://
The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``. These are the incoming, outgoing and error streams of the executed PHP code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wrapper-php.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wrapper-php.ini.html","name":"php:\/\/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``php:\/\/`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php:\/\/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// display the raw incoming data
print_r(file_get_content('php://stdin'));

?>
```

**[Documentation](https://www.php.net/manual/en/class.streamwrapper.php)**
## Related

+ [Wrapper](wrapper.ini.html)
+ [PHP Wrappers](php-wrapper.ini.html)
+ [php://filter](php-filter.ini.html)
+ [Protocol](protocol.ini.html)
