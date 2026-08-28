# Closure Binding
A closure acquires values from its context of creation. When the closure is created in a different context than wished, one may rebind the closure to another context.

This is done with the two methods ``Closure::bind()`` and ``Closure::bindTo()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure-binding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure-binding.html","name":"Closure Binding","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A closure acquires values from its context of creation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure-binding.html"]}],"keywords":["closure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/closure.bind.php"},{"@type":"CreativeWork","name":"PHP and Closures: Anonymous Functions and Variable Scoping","url":"https:\/\/reintech.io\/blog\/php-and-closures-anonymous-functions-and-variable-scoping"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"closure-binding"}]}]}</script>
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

+ [Closure](closure.html)
+ [Lexical Variable](lexical.html)
