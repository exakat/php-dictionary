---
type: "concept"
title: "Recursion"
description: "Recursion is a method or a function which calls itself."
resource: "https://en.wikipedia.org/wiki/Recursion"
tags: ["self-reference", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Recursion

Recursion is a method or a function which calls itself. 

While the method calls itself, it also must have a branch where it does not call itself: otherwise, the call will never end and result in infinite recursion.

Functions, methods, closures and arrow functions may be recursive.

Recursion is an abstract notion. It is also used in the PHP name itself: ``PHP: Hypertext Preprocessor``.

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

## Documentation
- [https://en.wikipedia.org/wiki/Recursion](https://en.wikipedia.org/wiki/Recursion)

## See Also
- [All the recursive Functions in PHP](https://www.exakat.io/all-the-recursive-functions-in-php/)

## Related
- [Functions](/features/function.md)
- [DirectoryIterator](/features/directoryiterator.md)
- [Recursive Array](/features/recursive-array.md)
- [RecursiveArrayIterator](/features/recursivearrayiterator.md)
- [Arrow Functions](/features/arrow-function.md)
- [Method](/features/method.md)
- [Closure](/features/closure.md)
- [Infinite](/features/infinite.md)

