# Arrow Functions
Arrow functions are a type of closure with a specific syntax. It only accepts one expression, and automatically imports all the variables from the local context of definition. 

Arrow functions may also be marked as ``static``, to prevent this import.
```php
<?php

    class X {
        private int $p = 2;
        
        function foo() {
           $b = 10;
           $fn = fn($a) => $a + $b + 2;
           
           $fn = static fn($a) => $a + $b + $this->p;

           // $this is not allowed in static arrow function
           $fn = static fn($a) => $a + $b + $this->p;
        }
    }

?>
```

## See Also

+ [Arrow functions in PHP](https://drops-of-php.hi-folks.dev/functions/arrow/#_top)
+ [PHP Arrow Functions – Simple, Short, and Effective](https://dev.to/eddiegoldman/php-arrow-functions-simple-short-and-effective-3lb5)
+ [Variable Scope in PHP: Global, Static, and Closures](https://oatllo.com/course/php/function/php-variable-scope-guide)

Related : [static](static), [$this]($this), [Functions](Functions), [Closure](Closure), [Anonymous Function](Anonymous Function), [First Class Callable](First Class Callable), [Callables](Callables), [Callbacks](Callbacks), [Callable Arrays](Callable Arrays), [Custom Function](Custom Function), [Double Arrow](Double Arrow), [Streamlining](Streamlining)
