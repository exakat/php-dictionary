# Reserved Names
PHP shares several namespaces with the custom code, and has reserved some names for its own usage. 

+ Namespaces: the global namespace, also known as ``\`` is reserved for PHP.
+ Keywords: ``fn``, ``finally``, ``insteadof``, ``null``, ``void``, ``match``, ...
+ Some classes, constants, functions, interfaces: ``die``, ``exit``, 
+ Variables: ``$GLOBALS``, ``$_GET``,...
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reserved-name.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reserved-name.ini.html","name":"Reserved Names","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:34:14 +0000","dateModified":"Fri, 10 Jul 2026 09:34:14 +0000","description":"PHP shares several namespaces with the custom code, and has reserved some names for its own usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Reserved Names.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // function void() would not compile
    function theVoid() : bool { }

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.php)**
## See Also

+ [Predefined Variables](https://www.php.net/manual/en/language.variables.predefined.php)

## Related

+ [Name](name.ini.html)
+ [Keyword](keyword.ini.html)
+ [Name Conventions](name-convention.ini.html)
