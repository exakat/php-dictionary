# Unpacking
Unpacking has two meanings:

+ ``unpack()``, a PHP native function, which extracts data from a binary string. It has the ``pack()`` reverse function.
+ Unpacking arguments, with the ``...`` operator: turning an array into a list of arguments at call time. 


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unpacking.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unpacking.ini.html","name":"Unpacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:52 +0000","dateModified":"Fri, 19 Jun 2026 21:24:52 +0000","description":"Unpacking has two meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Unpacking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Unpacking arguments
    function foo($a, $b, $c) {
        return $a + $b * $c;
    }
    
    $arguments = ['a' => 1, 'b' => 2, 'c' => 3];
    echo foo(...$arguments);
    // display 7

?>
```

**[Documentation](https://www.php.net/manual/en/function.unpack.php)**
## Related

+ [Variadic](variadic.ini.html)
+ [Variadic](splat.ini.html)
+ [Variadic](spread.ini.html)
