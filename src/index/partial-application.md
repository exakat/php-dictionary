# Partial Application
Partial application is the technique of fixing a subset of a function's arguments in advance, producing a new function of smaller arity that still expects the remaining arguments. It is the operation itself, distinct from its result, which is called a ``partial function``.

Partial application differs from currying: currying always transforms a function into a chain of one-argument functions, while partial application may fix any number of arguments at once and leaves the rest to be supplied together, in a single further call.

PHP has no dedicated syntax for partial application. It is emulated by wrapping the original call inside a closure or an arrow function that captures the already-known arguments, or with ``Closure::fromCallable()`` combined with a manual wrapper. First-class callable syntax makes referencing the underlying function easier, but does not perform the application itself.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/partial-application.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/partial-application.html","name":"Partial Application","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:15 +0000","dateModified":"Thu, 06 Aug 2026 05:50:15 +0000","description":"Partial application is the technique of fixing a subset of a function's arguments in advance, producing a new function of smaller arity that still expects the remaining arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Partial Application.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function request(string $method, string $url, array $options = []) {
        // ...
    }

    // fixing the first argument ahead of time
    $get = fn(string $url, array $options = []) => request('GET', $url, $options);

    $get('https://example.com'); // only the remaining arguments are needed

    // fixing two arguments at once, unlike currying which would take them one by one
    $getExample = fn(array $options = []) => request('GET', 'https://example.com', $options);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Partial_application)**
## Related

+ [Partial Function](partial-function.ini.html)
+ [Currying](currying.ini.html)
+ [Closure](closure.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [Functional Programming](functional-programming.ini.html)
+ [First Class Callable](first-class-callable.ini.html)
