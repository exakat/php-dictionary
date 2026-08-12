# \_\_FUNCTION\_\_
``__FUNCTION__`` holds the current function or method name.

The function name includes the namespace it was declared in, e.g. ``N\X\foo``. It also uses the definition's case.

When used inside a method, ``__FUNCTION__`` is the name of the method it is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

``__METHOD__`` and ``__FUNCTION__`` are almost identical.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__function__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__function__.html","name":"__FUNCTION__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:41:22 +0000","dateModified":"Tue, 14 Jul 2026 05:41:22 +0000","description":"__FUNCTION__ holds the current function or method name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__FUNCTION__.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__function__"}]}]}</script>
```php
<?php

    function foo() {
        echo __FUNCTION__; // foo
    }
    
    function GOO() {
        echo __function__; // GOO
    }
    
    class X {
        function foo() {
            echo __FUNCTION__; // foo
        }
    }
    
    foo();
    (new X)->foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## Related

+ [Magic Constants](magic-constant.html)
+ [\_\_METHOD\_\_](__method__.html)
+ [\_\_CLASS\_\_](__class__.html)
+ [\_\_TRAIT\_\_](__trait__.html)
