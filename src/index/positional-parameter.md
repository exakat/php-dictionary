# Positional Parameters
Way of calling a function or method, where argument which are identified by their position in the signature or the call. This is the traditional way of sending arguments to a method. 

The alternative way is to use named parameters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/positional-parameter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/positional-parameter.html","name":"Positional Parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Way of calling a function or method, where argument which are identified by their position in the signature or the call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Positional Parameters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo($a, $b) {
    return $a - $b;
}

echo foo(2, 3);  // return -1
echo foo(3, 2);  // return 1

echo foo(a: 2, b: 3);  // return -1
echo foo(b: 2, a: 3);  // return 1

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php)**
## Related

+ [Named Parameters](named-parameter.ini.html)
