# LengthException
The LengthException exception is thrown if a length is invalid.

``LengthException`` is one of the exception classes provided by the Standard PHP Library, called SPL, available since PHP 5.1. It extends ``LogicException``, which itself extends the base ``Exception`` class, placing it in the family of exceptions that represent errors in the program's logic, as opposed to runtime conditions that could not have been foreseen. Its intended use is to signal that a given length, whether of a string, an array, or any other measurable collection, does not meet the constraints expected by the code, for example a fixed-size buffer receiving too much data, or an argument that must contain a minimum number of characters.

Despite being part of the SPL, ``LengthException`` is not thrown by any native PHP function or class: PHP's own standard library and internal functions instead raise ``ValueError`` or ``TypeError`` for equivalent situations since PHP 8. ``LengthException`` is therefore mostly a userland convention, adopted by libraries and frameworks that follow the SPL exception hierarchy to give callers a precise, catchable exception type when validating lengths themselves, rather than relying only on a generic ``Exception`` or ``InvalidArgumentException``.

Because it is a subclass of ``LogicException``, catching ``LogicException`` also catches ``LengthException``, which lets calling code choose the granularity of the ``catch`` block depending on whether it needs to react specifically to length problems, or to logic errors in general.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lengthexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lengthexception.html","name":"LengthException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:26:19 +0000","dateModified":"Sat, 15 Aug 2026 08:26:19 +0000","description":"The LengthException exception is thrown if a length is invalid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lengthexception.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logicexception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.lengthexception.php"},{"@type":"CreativeWork","name":"LogicException","url":"https:\/\/www.php.net\/manual\/en\/class.logicexception.php"},{"@type":"CreativeWork","name":"PHP: SPL Exceptions","url":"https:\/\/www.php.net\/manual\/en\/spl.exceptions.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lengthexception"}]}]}</script>
```php
<?php

    function foo(string $s) {
        if (empty($s)) {
           throw new \UnexpectedValueException('Foo() expects a non-empty string');
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.lengthexception.php)**
## See Also

+ [LogicException](https://www.php.net/manual/en/class.logicexception.php)
+ [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related

+ [Exception](exception.html)
+ [LogicException](logicexception.html)
