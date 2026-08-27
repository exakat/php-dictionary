# Arity
Arity is the number of arguments, or operands, that a function, method, or operator accepts: a unary operator such as ``!`` has arity 1, a binary operator such as ``+`` has arity 2, and a function's arity is the count of its declared parameters. A function whose arity is fixed always expects exactly that many arguments; a function of variable arity, called variadic, accepts any number of arguments from a given point onward.

Arity matters for overload resolution in languages that dispatch on parameter count, for currying, where a function is considered fully applied only once it has received as many arguments as its arity, and for reflection, where a caller may need to discover how many arguments a callable expects before invoking it dynamically.

PHP supports both fixed and variable arity directly. A function's fixed arity is simply its parameter list; variable arity is declared with the ``...`` splat operator on the last parameter, and the actual number of arguments received by any call, fixed or variadic, can be inspected at runtime with ``func_num_args()``, or discovered ahead of a call through ``ReflectionFunction::getNumberOfParameters()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arity.html","name":"Arity","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:09:01 +0000","dateModified":"Wed, 08 Jul 2026 15:09:01 +0000","description":"Arity is the number of arguments, or operands, that a function, method, or operator accepts: a unary operator such as ! has arity 1, a binary operator such as + has arity 2, and a function's arity is the count of its declared parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arity.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variadic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/func_get_args.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/currying.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overloading.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Arity"},{"@type":"CreativeWork","name":"4.6 - Arity, partial application and currying","url":"https:\/\/learn-functional-programming.com\/chapters\/4.6-partial-application-and-currying\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"arity"}]}]}</script>
```php
<?php

    function sum(int ...$numbers): int {
        return array_sum($numbers);
    }
    
    sum(1, 2, 3); // called with arity 3, though sum() itself is variadic
    
    function greet(string $name) {
        echo func_num_args(); // 1: this call's actual arity
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Arity)**
## See Also

+ [4.6 - Arity, partial application and currying](https://learn-functional-programming.com/chapters/4.6-partial-application-and-currying/)

## Related

+ [Variadic](variadic.html)
+ [func\_get\_args()](func_get_args.html)
+ [Functions](function.html)
+ [Currying](currying.html)
+ [Overloading](overloading.html)
