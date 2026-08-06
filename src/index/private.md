# Private Visibility
The private keyword is part of the three keywords to define visibility of a method, property or class constant. It is the strictest level of visibility: it restricts usage to the current class only. A child class can redefine it, but it cannot the parent's: the reverse is also true.

The private keyword cannot be used with the ``final`` keyword: a private method is not visible in the child classes, and can't also be overriden.

The private keyword cannot be used with the ``abstract`` keyword: a private method is not visible in the child classes, and can't also be overriden.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/private.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/private.html","name":"Private Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:28:00 +0000","dateModified":"Tue, 14 Jul 2026 06:28:00 +0000","description":"The private keyword is part of the three keywords to define visibility of a method, property or class constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Private Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private const X = 1;
        
        final public function method() { 
            echo self::X;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.visibility.php)**
## Related

+ [Final Keyword](final.ini.html)
+ [Visibility](visibility.ini.html)
+ [Protected Visibility](protected.ini.html)
+ [Public Visibility](public.ini.html)
+ [Var](var.ini.html)
+ [Overwrite](overwrite.ini.html)
+ [Abstract Keyword](abstract.ini.html)
+ [Data Hiding](data-hiding.ini.html)
+ [Modifier](modifier.ini.html)
+ [Package-Level](package-visibility.ini.html)
