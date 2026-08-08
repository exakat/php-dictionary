# Public Visibility
The ``public`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the lowest level of visibility: it doesn't restrict usage.

``public`` is also the default visibility when it is omitted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/public.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/public.html","name":"Public Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``public`` keyword is part of the three keywords to define visibility of a method, property or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Public Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Public Visibility"}]}]}</script>
```php
<?php

    class X {
        // public constant
        const X = 1;
        public $p = 2;
    }
    
    $x = new x;
    echo $x->p;
    echo x::X;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.visibility.php)**
## Related

+ [Final Keyword](final.html)
+ [Visibility](visibility.html)
+ [Private Visibility](private.html)
+ [Protected Visibility](protected.html)
+ [Var](var.html)
