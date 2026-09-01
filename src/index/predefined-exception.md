# PHP Predefined Exception
PHP predefined exceptions are the exception and error classes that ship built into the engine itself, available in every PHP installation without requiring any extension, autoloading, or namespace import. They form a class hierarchy rooted in the Throwable interface, which splits into two main branches: ``Exception``, meant for conditions an application can reasonably anticipate and recover from, and Error, meant for problems in the program itself, such as type mismatches or calls to undefined functions, that are usually not meant to be caught during normal operation. Beyond the base Exception and Error classes, PHP and its Standard PHP Library provide a family of more specific predefined exceptions such as RuntimeException, LogicException, InvalidArgumentException, OutOfRangeException, OutOfBoundsException, LengthException, DomainException, RangeException, UnexpectedValueException, TypeError, ValueError, ArgumentCountError, ArithmeticError, and DivisionByZeroError, each documenting a narrower category of failure so that calling code can catch precisely the situations it knows how to handle. These classes evolve slightly from one PHP version to the next as new, more precise exceptions are introduced to replace generic ones, so the exact catalogue and inheritance chain should always be checked against the manual for the target PHP version rather than assumed from memory.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-exception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-exception.html","name":"PHP Predefined Exception","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 08:22:09 +0000","dateModified":"Tue, 01 Sep 2026 08:22:09 +0000","description":"PHP predefined exceptions are the exception and error classes that ship built into the engine itself, available in every PHP installation without requiring any extension, autoloading, or namespace import","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-exception.html"]}],"keywords":["exception","php native"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.exceptions.php"},{"@type":"CreativeWork","name":"PHP: SPL Exceptions","url":"https:\/\/www.php.net\/manual\/en\/spl.exceptions.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"predefined-exception"}]}]}</script>
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
## See Also

+ [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related

+ [throw](throw.html)
+ [Try-catch](try-catch.html)
+ [Exception](exception.html)
+ [Native](native.html)
