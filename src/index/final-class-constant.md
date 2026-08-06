# Final Class Constants
Using the final option with class constants, the constant cannot be redefined by a child class. It is not possible to give it a new value or visibility. 

It yields a fatal error: ``y::x cannot override final constant``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/final-class-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/final-class-constant.html","name":"Final Class Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Using the final option with class constants, the constant cannot be redefined by a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Final Class Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        final public const F = 1;
        public const C = 2;
    }
    
    class Y extends X {
        // this is an error
        public const C = 3;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## Related

+ [Final Keyword](final.ini.html)
