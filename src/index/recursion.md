# Recursion
Recursion is a method or a function which calls itself. 

While the method calls itself, it also must have a branch where it does not call itself: otherwise, the call will never end and result in infinite recursion.

Functions, methods, closures and arrow functions may be recursive.

Recursion is an abstract notion. It is also used in the PHP name itself: ``PHP: Hypertext Preprocessor``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html","name":"Recursion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:34 +0000","dateModified":"Sat, 08 Aug 2026 14:32:34 +0000","description":"Recursion is a method or a function which calls itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Recursion.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"recursion"}]}]}</script>
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

+ [Functions](function.html)
+ [DirectoryIterator](directoryiterator.html)
+ [Recursive Array](recursive-array.html)
+ [RecursiveArrayIterator](recursivearrayiterator.html)
+ [Arrow Functions](arrow-function.html)
+ [Method](method.html)
+ [Closure](closure.html)
+ [Infinite](infinite.html)
