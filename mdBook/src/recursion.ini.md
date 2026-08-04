# Recursion
Recursion is a method or a function which calls itself. 

While the method calls itself, it also must have branch where it doesnot call itself: otherwise, the call will never end and result in infinite recursion.

Functions, methods, closures and arrowfunctions may be recursive.

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

## See Also

+ [All the recursive Functions in PHP](https://www.exakat.io/all-the-recursive-functions-in-php/)

Related : [Functions](Functions), [DirectoryIterator](DirectoryIterator), [Recursive Array](Recursive Array), [RecursiveArrayIterator](RecursiveArrayIterator), [Arrow Functions](Arrow Functions), [Method](Method), [Closure](Closure), [Infinite](Infinite)
