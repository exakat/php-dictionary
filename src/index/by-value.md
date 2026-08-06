# Passing By Value
When calling a method, or returning from it, data may be passed by value or by reference. 

By value, a copy of the data is passed: any modification on that value inside the method will not be reflected in the original value. 

This is the default way of passing data to methods: the alternative way is to use by reference. 

Passing by value may be memory-intensive when passing a large array. This is not the case for objects, which are always passed by reference.

Returned value are passed back to the calling context with the same rule than for parameters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/by-value.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/by-value.html","name":"Passing By Value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"When calling a method, or returning from it, data may be passed by value or by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Passing By Value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Passing By Reference](by-reference.ini.html)
