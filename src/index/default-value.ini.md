# Default Value
Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided. 

Arguments and properties may have a default value. That way, arguments may be skipped when the method is being called, and the properties do not have to be initialized before usage.

Variable have a default value of ``null``. Their initial assignment is considered a default value, as it replaces the ``null`` one.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/default-value.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/default-value.ini.html","name":"Default Value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Default Value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Parameter](parameter.ini.html)
+ [Properties](property.ini.html)
+ [Default](default.ini.html)
+ [Null](null.ini.html)
+ [Null Pattern](nullpattern.ini.html)
+ [Autovivification](autovivification.ini.html)
+ [Fallback](fallback.ini.html)
+ [Optional Parameter](optional-parameter.ini.html)
