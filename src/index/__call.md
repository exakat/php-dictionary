# \_\_call() Method
``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it.

That way, it is possible to create dynamically methods, without hardcoding them. 

The ``__call()`` method receives the name of the target-method, and a list of argument, as an array. 

The ``__call()`` method has a related version for static methods, called ``__callStatic()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html","name":"__call() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"__call() Method"}]}]}</script>
```php
<?php

class x {
    private $values = ['a' => 1,
                       'b' => 2,
                       ];

    // Checks the dictionary, or return 0
    function __call($name, $args) {
        if (method_exists($this, $name)) {
            return $this->$name(...$args);
        }
        
        return 0;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [PHP _call (Lesson 3: PHP Magic Methods)](https://dev.to/cleancodestudio/php-call-lesson-3-php-magic-methods-5bi0)

## Related

+ [\_\_callStatic() Method](__callstatic.html)
+ [Magic Methods](magic-method.html)
+ [Method](method.html)
+ [Proxy](proxy.html)
+ [Meta-object Protocol (MOP)](meta-object-protocol.html)
+ [Metaclass](metaclass.html)
+ [Metaprogramming](metaprogramming.html)
+ [Open Class](open-class.html)
