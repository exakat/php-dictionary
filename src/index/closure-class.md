# Closure Class
``Closure`` is a PHP native class that is the result of the closure syntax. It is also the result of an arrow function syntax, and a call to first class callable. 

The ``Closure`` class offers methods to call the closure, bind it to new objects, or create more, from a callable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure-class.html","name":"Closure Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:03:23 +0000","dateModified":"Sat, 08 Aug 2026 08:03:23 +0000","description":"``Closure`` is a PHP native class that is the result of the closure syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Closure Class.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"closure-class"}]}]}</script>
```php
<?php

$closure = function ($a) use ($b) {
    return $a + $b + 1;
};
var_dump($closure);

$arrowFunction = fn () => 1;
var_dump($arrowFunction);

$firstClassCallable = strtolower(...);
var_dump($firstClassCallable);

?>
```

**[Documentation](https://www.php.net/manual/en/class.closure.php)**
## See Also

+ [Closures in PHP](https://medium.com/@serhii.shkarupa/closures-in-php-54f18b2f9dc1)

## Related

+ [Closure](closure.html)
