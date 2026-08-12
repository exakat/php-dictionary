# Default Value
Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided. 

Arguments and properties may have a default value. That way, arguments may be skipped when the method is being called, and the properties do not have to be initialized before usage.

Variable have a default value of ``null``. Their initial assignment is considered a default value, as it replaces the ``null`` one.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default-value.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default-value.html","name":"Default Value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Default Value.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"default-value"}]}]}</script>
```php
<?php

function foo($a = 1) {
    echo $a;
}

foo('one ');
foo();

// displays one 1

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php)**
## Related

+ [Parameter](parameter.html)
+ [Properties](property.html)
+ [Default](default.html)
+ [Null](null.html)
+ [Null Pattern](nullpattern.html)
+ [Autovivification](autovivification.html)
+ [Fallback](fallback.html)
+ [Optional Parameter](optional-parameter.html)
