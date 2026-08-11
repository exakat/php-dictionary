# Unpacking
Unpacking has two meanings:

+ ``unpack()``, a PHP native function, which extracts data from a binary string. It has the ``pack()`` reverse function.
+ Unpacking arguments, with the ``...`` operator: turning an array into a list of arguments at call time. 


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unpacking.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unpacking.html","name":"Unpacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 16:53:50 +0000","dateModified":"Mon, 10 Aug 2026 16:53:50 +0000","description":"Unpacking has two meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Unpacking.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unpacking"}]}]}</script>
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
## See Also

+ [PHP RFC: Argument Unpacking](https://wiki.php.net/rfc/argument_unpacking)

## Related

+ [Variadic](variadic.html)
+ [Variadic](splat.html)
+ [Variadic](spread.html)
