# Absolute Name
An absolute name is a name that is independent from the current namespace. It is usually identified by the leading ``\`` sign. 

An absolute name does not require a ``use`` expression, and is faster to process, as there is no resolution involved. It may also be less readable, as it makes names longer. 

The opposite of relative name is relative name.

Absolute names are similar to absolute path, in a file system, though applied to functions, constants and classes names.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-name.html","name":"Absolute Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:54:49 +0000","dateModified":"Fri, 07 Aug 2026 09:54:49 +0000","description":"An absolute name is a name that is independent from the current namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Absolute Name.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"absolute-name"}]}]}</script>
```php
<?php

    namespace A {
        function B() {}
        
        class C {}
    
    }
    
    namespace B {
        //absolute name to call a function
        \A\B();
        
        //absolute name to create an object
        new \A\C();

        //absolute name from the global space: no need to import it
        strtolower(...) instanceof \Closure;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.basics.php)**
## See Also

+ [A Complete Guide to PHP Namespaces](https://www.thoughtfulcode.com/a-complete-guide-to-php-namespaces/)

## Related

+ [Namespaces](namespace.html)
+ [Path](path.html)
+ [Import](import.html)
+ [Use Alias](use-alias.html)
+ [Readability](readability.html)
+ [Relative Name](relative-name.html)
+ [Namespaced Name](namespaced-name.html)
