# Arrow Functions
Arrow functions are a type of closure with a specific syntax. It only accepts one expression, and automatically imports all the variables from the local context of definition. 

Arrow functions may also be marked as ``static``, to prevent this import.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html","name":"Arrow Functions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:34:31 +0000","dateModified":"Tue, 11 Aug 2026 14:34:31 +0000","description":"Arrow functions are a type of closure with a specific syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Arrow Functions.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"arrow-function"}]}]}</script>
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

+ [static](static.html)
+ [$this]($this.html)
+ [Functions](function.html)
+ [Closure](closure.html)
+ [Anonymous Function](anonymous-function.html)
+ [First Class Callable](first-class-callable.html)
+ [Callables](callable.html)
+ [Callbacks](callback.html)
+ [Callable Arrays](array-callable.html)
+ [Custom Function](custom-function.html)
+ [Double Arrow](double-arrow.html)
+ [Streamlining](streamlining.html)
+ [Currying](currying.html)
+ [Idiomatic](idiomatic.html)
+ [Partial Application](partial-application.html)
+ [Recursion](recursion.html)
