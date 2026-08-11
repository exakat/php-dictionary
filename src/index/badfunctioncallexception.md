# BadFunctioncallException
The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing.

``BadFunctioncallException`` are defined by the SPL extension. It is not natively used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/badfunctioncallexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/badfunctioncallexception.html","name":"BadFunctioncallException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/BadFunctioncallException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"badfunctioncallexception"}]}]}</script>
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

+ [Exception](exception.html)
+ [LogicException](logicexception.html)
