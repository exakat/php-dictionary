# Arrow Functions
Arrow functions are a type of closure with a specific syntax. It only accepts one expression, and automatically imports all the variables from the local context of definition. 

Arrow functions may also be marked as ``static``, to prevent this import.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/arrow-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/arrow-function.html","name":"Arrow Functions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Arrow functions are a type of closure with a specific syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Arrow Functions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/functions.arrow.php)**
## See Also

+ [Arrow functions in PHP](https://drops-of-php.hi-folks.dev/functions/arrow/#_top)
+ [PHP Arrow Functions – Simple, Short, and Effective](https://dev.to/eddiegoldman/php-arrow-functions-simple-short-and-effective-3lb5)
+ [Variable Scope in PHP: Global, Static, and Closures](https://oatllo.com/course/php/function/php-variable-scope-guide)

## Related

+ [static](static.ini.html)
+ [$this]($this.ini.html)
+ [Functions](function.ini.html)
+ [Closure](closure.ini.html)
+ [Anonymous Function](anonymous-function.ini.html)
+ [First Class Callable](first-class-callable.ini.html)
+ [Callables](callable.ini.html)
+ [Callbacks](callback.ini.html)
+ [Callable Arrays](array-callable.ini.html)
+ [Custom Function](custom-function.ini.html)
+ [Double Arrow](double-arrow.ini.html)
+ [Streamlining](streamlining.ini.html)
