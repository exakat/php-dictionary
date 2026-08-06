# Recursion
Recursion is a method or a function which calls itself. 

While the method calls itself, it also must have branch where it doesnot call itself: otherwise, the call will never end and result in infinite recursion.

Functions, methods, closures and arrowfunctions may be recursive.

Recursion is an abstract notion. It is also used in the PHP name itself: ``PHP: Hypertext Preprocessor``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursion.html","name":"Recursion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:04:15 +0000","dateModified":"Sat, 11 Jul 2026 09:04:15 +0000","description":"Recursion is a method or a function which calls itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Recursion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function factorial(int $number) { 
        if ($number < 2) { 
            return 1; 
        }
    
        return ($number * factorial($number - 1)); 
    }
    
    // recursive closure
    $factorial = function( $n ) use ( &$factorial ) {
        if( $n == 1 ) return 1;
        return $factorial( $n - 1 ) * $n;
    };

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Recursion)**
## See Also

+ [All the recursive Functions in PHP](https://www.exakat.io/all-the-recursive-functions-in-php/)

## Related

+ [Functions](function.ini.html)
+ [DirectoryIterator](directoryiterator.ini.html)
+ [Recursive Array](recursive-array.ini.html)
+ [RecursiveArrayIterator](recursivearrayiterator.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [Method](method.ini.html)
+ [Closure](closure.ini.html)
+ [Infinite](infinite.ini.html)
