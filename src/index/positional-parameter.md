# Positional Parameters
Way of calling a function or method, where argument which are identified by their position in the signature or the call. This is the traditional way of sending arguments to a method. 

The alternative way is to use named parameters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/positional-parameter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/positional-parameter.html","name":"Positional Parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Way of calling a function or method, where argument which are identified by their position in the signature or the call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Positional Parameters.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"positional-parameter"}]}]}</script>
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

+ [Named Parameters](named-parameter.html)
