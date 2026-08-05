# LengthException
The LengthException exception is thrown if a length is invalid.

LengthException are defined by the SPL extension. It is not natively used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lengthexception.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lengthexception.ini.html","name":"LengthException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The LengthException exception is thrown if a length is invalid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/LengthException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Exception](exception.ini.html)
+ [LogicException](logicexception.ini.html)
