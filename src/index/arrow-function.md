# Arrow Functions
Arrow functions are a type of closure with a specific syntax. They only accept one expression, and automatically import all the variables from the local context of definition.

Arrow functions may also be marked as ``static``, to prevent this import.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html","name":"Arrow Functions","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:12:45 +0000","dateModified":"Tue, 25 Aug 2026 19:12:45 +0000","description":"Arrow functions are a type of closure with a specific syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"]}],"alternateName":["fn"],"keywords":["keyword","function","feature","closure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24this.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/first-class-callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-arrow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/streamlining.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/currying.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idiomatic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-application.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.arrow.php"},{"@type":"CreativeWork","name":"Arrow functions in PHP","url":"https:\/\/drops-of-php.hi-folks.dev\/functions\/arrow\/#_top"},{"@type":"CreativeWork","name":"PHP Arrow Functions \u2013 Simple, Short, and Effective","url":"https:\/\/dev.to\/eddiegoldman\/php-arrow-functions-simple-short-and-effective-3lb5"},{"@type":"CreativeWork","name":"Variable Scope in PHP: Global, Static, and Closures","url":"https:\/\/oatllo.com\/course\/php\/function\/php-variable-scope-guide"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"arrow-function"}]}]}</script>
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
