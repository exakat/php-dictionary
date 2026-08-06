# Public Visibility
The ``public`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the lowest level of visibility: it doesn't restrict usage.

``public`` is also the default visibility when it is omitted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/public.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/public.html","name":"Public Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``public`` keyword is part of the three keywords to define visibility of a method, property or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Public Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Final Keyword](final.ini.html)
+ [Visibility](visibility.ini.html)
+ [Private Visibility](private.ini.html)
+ [Protected Visibility](protected.ini.html)
+ [Var](var.ini.html)
