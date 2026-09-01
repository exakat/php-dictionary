# Partial Application
Partial application is the technique of fixing a subset of a function's arguments in advance, producing a new function of smaller arity that still expects the remaining arguments. It is the operation itself, distinct from its result, which is called a ``partial function``.

Partial application differs from currying: currying always transforms a function into a chain of one-argument functions, while partial application may fix any number of arguments at once and leaves the rest to be supplied together, in a single further call.

PHP has no dedicated syntax for partial application. It is emulated by wrapping the original call inside a closure or an arrow function that captures the already-known arguments, or with ``Closure::fromCallable()`` combined with a manual wrapper. First-class callable syntax makes referencing the underlying function easier, but does not perform the application itself.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-application.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-application.html","name":"Partial Application","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Aug 2026 07:18:08 +0000","dateModified":"Fri, 21 Aug 2026 07:18:08 +0000","description":"Partial application is the technique of fixing a subset of a function's arguments in advance, producing a new function of smaller arity that still expects the remaining arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-application.html"]}],"keywords":["concept","functional programming"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/partial-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/currying.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/functional-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/first-class-callable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Partial_application"},{"@type":"CreativeWork","name":"Curry or Partial Application?","url":"https:\/\/medium.com\/javascript-scene\/curry-or-partial-application-8150044c78b8"},{"@type":"CreativeWork","name":"Currying vs partial function application","url":"https:\/\/codeblog.jonskeet.uk\/2012\/01\/30\/currying-vs-partial-function-application\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"partial-application"}]}]}</script>
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
## See Also

+ [Curry or Partial Application?](https://medium.com/javascript-scene/curry-or-partial-application-8150044c78b8)
+ [Currying vs partial function application](https://codeblog.jonskeet.uk/2012/01/30/currying-vs-partial-function-application/)

## Related

+ [Partial Function](partial-function.html)
+ [Currying](currying.html)
+ [Closure](closure.html)
+ [Arrow Functions](arrow-function.html)
+ [Functional Programming](functional-programming.html)
+ [First Class Callable](first-class-callable.html)
