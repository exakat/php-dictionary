# UnexpectedValueException
The ``UnexpectedValueException`` exception is thrown if a value does not match with a set of expected values.

This happens when the value is not in a list of expected values, or if it is outside an interval of validity.

This exception is mainly thrown by the Phar and SPL extensions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unexpectedvalueexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unexpectedvalueexception.html","name":"UnexpectedValueException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:24:55 +0000","dateModified":"Sat, 15 Aug 2026 08:24:55 +0000","description":"The UnexpectedValueException exception is thrown if a value does not match with a set of expected values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/UnexpectedValueException.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unexpectedvalueexception"}]}]}</script>
```php
<?php

    function foo(string $s) {
        if (empty($s)) {
           throw new UnexpectedValueException('Foo() expects a non-empty string');
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.unexpectedvalueexception.php)**
## See Also

+ [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related

+ [Exception](exception.html)
+ [Phar](phar.html)
+ [Standard PHP Library (SPL)](spl.html)
