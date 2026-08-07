# Passing By Value
When calling a method, or returning from it, data may be passed by value or by reference. 

By value, a copy of the data is passed: any modification on that value inside the method will not be reflected in the original value. 

This is the default way of passing data to methods: the alternative way is to use by reference. 

Passing by value may be memory-intensive when passing a large array. This is not the case for objects, which are always passed by reference.

Returned value are passed back to the calling context with the same rule than for parameters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-value.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/by-value.html","name":"Passing By Value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"When calling a method, or returning from it, data may be passed by value or by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Passing By Value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Passing By Value"}]}]}</script>
```php
<?php

$a = 0;
foo($a);  // displays 1
print $a; // displays 0

function foo($a) {
    ++$a;
    echo $a;
}

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php)**
## Related

+ [Passing By Reference](by-reference.html)
