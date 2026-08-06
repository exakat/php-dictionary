# PHP Predefined Exception
The predefined exceptions are the exceptions that are built-in the PHP engine. They are always available, and change from version to version.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/predefined-exception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/predefined-exception.html","name":"PHP Predefined Exception","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The predefined exceptions are the exceptions that are built-in the PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Predefined Exception.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    try {
        throw new RuntimeException('one error!');
    } catch (Exception $e) {
        print "Caught an exception of type ".get_class($e);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.exceptions.php)**
## Related

+ [throw](throw.ini.html)
+ [Try-catch](try-catch.ini.html)
+ [Exception](exception.ini.html)
+ [Native](built-in.ini.html)
