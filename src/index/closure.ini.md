# Closure
Closures are anonymous functions: functions without a name. They are also supported by the eponymous ``Closure`` class.

They are close to the arrow-functions. They are also created with the ``...`` operator, also known as the first class callable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/closure.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/closure.ini.html","name":"Closure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:13:51 +0000","dateModified":"Sat, 04 Jul 2026 08:13:51 +0000","description":"Closures are anonymous functions: functions without a name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Closure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [static](static.ini.html)
+ [Arrow Functions](arrow-function.ini.html)
+ [Anonymous Function](anonymous-function.ini.html)
+ [First Class Callable](first-class-callable.ini.html)
+ [Callables](callable.ini.html)
+ [Callbacks](callback.ini.html)
+ [Anonymous Class](anonymous-class.ini.html)
+ [Closure Binding](closure-binding.ini.html)
+ [Functions](function.ini.html)
+ [Return](return.ini.html)
+ [Sort](sort.ini.html)
+ [Use](use.ini.html)
+ [Callable Arrays](array-callable.ini.html)
+ [Array Callback](array-callback.ini.html)
+ [Bind](bind.ini.html)
+ [Inherited Variable](inherited-variable.ini.html)
+ [Closure Class](closure-class.ini.html)
+ [Custom Function](custom-function.ini.html)
+ [Lexical Variable](lexical.ini.html)
+ [Currying](currying.ini.html)
+ [Homoiconicity](homoiconicity.ini.html)
+ [Meta-object Protocol (MOP)](meta-object-protocol.ini.html)
+ [Recursion](recursion.ini.html)
