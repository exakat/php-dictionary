# \_\_METHOD\_\_
``__METHOD__`` holds the current method or function name.

The method name includes the namespace and the class it was declared in, e.g. ``N\X::foo``. It also uses the definition's case.

When used inside a method, ``__METHOD__`` is the name of the method it is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

``__METHOD__`` and ``__FUNCTION__`` are almost identical.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__method__.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__method__.ini.html","name":"__METHOD__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 10:22:46 +0000","dateModified":"Wed, 05 Aug 2026 10:22:46 +0000","description":"``__METHOD__`` holds the current method or function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__METHOD__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo() {
        echo __METHOD__; // foo
    }
    
    function GOO() {
        echo __method__; // GOO
    }
    
    class X {
        function foo() {
            echo __METHOD__; // foo
        }
    }
    
    foo();
    (new X)->foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## Related

+ [Magic Constants](magic-constant.ini.html)
+ [\_\_FILE\_\_](__file__.ini.html)
+ [\_\_CLASS\_\_](__class__.ini.html)
+ [\_\_FUNCTION\_\_](__function__.ini.html)
+ [\_\_TRAIT\_\_](__trait__.ini.html)
