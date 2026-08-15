# Private Visibility
The private keyword is part of the three keywords to define visibility of a method, property or class constant. It is the strictest level of visibility: it restricts usage to the current class only. A child class can redefine it, but it cannot the parent's: the reverse is also true.

The private keyword cannot be used with the ``final`` keyword: a private method is not visible in the child classes, and can't also be overriden.

The private keyword cannot be used with the ``abstract`` keyword: a private method is not visible in the child classes, and can't also be overriden.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/private.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/private.html","name":"Private Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The private keyword is part of the three keywords to define visibility of a method, property or class constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Private Visibility.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"private"}]}]}</script>
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

+ [Final Keyword](final.html)
+ [Visibility](visibility.html)
+ [Protected Visibility](protected.html)
+ [Public Visibility](public.html)
+ [Var](var.html)
+ [Overwrite](overwrite.html)
+ [Abstract Keyword](abstract.html)
+ [Data Hiding](data-hiding.html)
+ [Modifier](modifier.html)
+ [Package-Level](package-visibility.html)
