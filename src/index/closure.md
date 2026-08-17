# Closure
Closures are anonymous functions: functions without a name. They are also supported by the eponymous ``Closure`` class.

They are close to the arrow-functions. They are also created with the ``...`` operator, also known as the first class callable.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html","name":"Closure","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Closures are anonymous functions: functions without a name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Closure.html"]}],"alternateName":["lambda-functions"],"keywords":["function","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/first-class-callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sort.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-callback.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bind.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inherited-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/currying.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/homoiconicity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/meta-object-protocol.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.anonymous.php"},{"@type":"CreativeWork","name":"Closure Optimisation (8.6)","url":"https:\/\/wiki.php.net\/rfc\/closure-optimizations"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"closure"}]}]}</script>
```php
<?php

    $closure = function ($a) use ($b) {
        return $a + $b + 1;
    };
    print get_class($closure); // Closure

    $closure2 = strtolower(...);
    print get_class($closure2); // Closure

    $closure3 = fn($a, $b) => $a + $b;
    print get_class($closure3); // Closure

?>
```

**[Documentation](https://www.php.net/manual/en/functions.anonymous.php)**
## See Also

+ [Closure Optimisation (8.6)](https://wiki.php.net/rfc/closure-optimizations)

## Related

+ [static](static.html)
+ [Arrow Functions](arrow-function.html)
+ [Anonymous Function](anonymous-function.html)
+ [First Class Callable](first-class-callable.html)
+ [Callables](callable.html)
+ [Callbacks](callback.html)
+ [Anonymous Class](anonymous-class.html)
+ [Closure Binding](closure-binding.html)
+ [Functions](function.html)
+ [Return](return.html)
+ [Sort](sort.html)
+ [Use](use.html)
+ [Callable Arrays](array-callable.html)
+ [Array Callback](array-callback.html)
+ [Bind](bind.html)
+ [Inherited Variable](inherited-variable.html)
+ [Closure Class](closure-class.html)
+ [Custom Function](custom-function.html)
+ [Lexical Variable](lexical.html)
+ [Currying](currying.html)
+ [Homoiconicity](homoiconicity.html)
+ [Meta-object Protocol (MOP)](meta-object-protocol.html)
+ [Recursion](recursion.html)
