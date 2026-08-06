# Closure Binding
A closure acquires values from its context of creation. When the closure is created in a different context than wished, one may rebind the closure to another context.

This is done with the two methods ``Closure::bind()`` and ``Closure::bindTo()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/closure-binding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/closure-binding.html","name":"Closure Binding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:23:40 +0000","dateModified":"Mon, 20 Jul 2026 08:23:40 +0000","description":"A closure acquires values from its context of creation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Closure Binding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class A {
        private static function foo() { return 1;}
    }
    
    $closure = function() {
        // Self is undefined here, since it is not inside a class
        return self::foo();
    };
    
    // Self now defined, and set to A
    $bcl1 = Closure::bind($closure, null, 'A');

?>
```

**[Documentation](https://www.php.net/manual/en/closure.bind.php)**
## See Also

+ [PHP and Closures: Anonymous Functions and Variable Scoping](https://reintech.io/blog/php-and-closures-anonymous-functions-and-variable-scoping)

## Related

+ [Closure](closure.ini.html)
+ [Lexical Variable](lexical.ini.html)
