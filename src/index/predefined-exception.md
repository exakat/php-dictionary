# PHP Predefined Exception
The predefined exceptions are the exceptions that are built-in the PHP engine. They are always available, and change from version to version.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-exception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-exception.html","name":"PHP Predefined Exception","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The predefined exceptions are the exceptions that are built-in the PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Predefined Exception.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"predefined-exception"}]}]}</script>
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

+ [throw](throw.html)
+ [Try-catch](try-catch.html)
+ [Exception](exception.html)
+ [Native](built-in.html)
