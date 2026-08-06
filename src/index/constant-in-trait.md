# Constants In Trait
Constants were added to trait in version 8.3. Before that, they were not allowed. 

After PHP 8.3, they are added to the host class, with less precedence than the host own constants, but higher precedence than the host parent's constants.

It is not possible to call a trait constant directly via its trait's name: this has to be done via the host class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/constant-in-trait.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/constant-in-trait.html","name":"Constants In Trait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:35 +0000","dateModified":"Fri, 19 Jun 2026 21:26:35 +0000","description":"Constants were added to trait in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Constants In Trait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    trait T {
        private const A = 1;
    }
    
    class X {
        use T;
    }
    
    echo A::T;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.traits.php)**
## Related

+ [Trait](trait.ini.html)
+ [Static Constant](class-constant.ini.html)
