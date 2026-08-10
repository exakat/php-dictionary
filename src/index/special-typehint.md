# Special Types
PHP defines some special types.

+ ``mixed``: any type
+ ``void``: no returned value
+ ``callable``: may be used as a callback
+ ``iterable``: may be used with ``foreach()``, including array
+ ``never``: never returns
+ ``object``: object of any class
+ ``parent``: any of the parent class of the current class, excluding it
+ ``self``: the current class
+ ``static``: the current called class

Other special types are the scalar types.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-typehint.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-typehint.html","name":"Special Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP defines some special types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Special Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Special Types"}]}]}</script>
```php
<?php

    function foo(iterable $i) : never {
        foreach ($i as $j) {
            echo $j;
        }
    
        die();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php)**
## See Also

+ [An Exhaustive Guide to Understanding and Using PHP Data Types](https://medium.com/@berastis/an-exhaustive-guide-to-understanding-and-using-php-data-types-b56f6863c637)

## Related

+ [Type System](type.html)
+ [Type System](typehint.html)
+ [Mixed](mixed.html)
+ [Void](void.html)
+ [Callables](callable.html)
+ [Iterable](iterable.html)
+ [Never Type](never.html)
+ [Object](object.html)
+ [parent](parent.html)
+ [static](static.html)
+ [Self](self.html)
