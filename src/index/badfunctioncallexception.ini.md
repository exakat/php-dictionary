# BadFunctioncallException
The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing.

``BadFunctioncallException`` are defined by the SPL extension. It is not natively used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/badfunctioncallexception.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/badfunctioncallexception.ini.html","name":"BadFunctioncallException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/BadFunctioncallException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
