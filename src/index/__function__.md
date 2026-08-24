# \_\_FUNCTION\_\_
``__FUNCTION__`` holds the current function or method name.

The function name includes the namespace it was declared in, e.g. ``N\X\foo``. It also uses the definition's case.

When used inside a method, ``__FUNCTION__`` is the name of the method it is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

``__METHOD__`` and ``__FUNCTION__`` are almost identical.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case. 
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__function__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__function__.html","name":"__FUNCTION__","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 05:04:01 +0000","dateModified":"Mon, 24 Aug 2026 05:04:01 +0000","description":"__FUNCTION__ holds the current function or method name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__function__.html"]}],"keywords":["magic constant"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__method__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__class__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__trait__.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.constants.magic.php"},{"@type":"CreativeWork","name":"PHP Magic Constants - W3Schools","url":"https:\/\/www.w3schools.com\/php\/php_magic_constants.asp"},{"@type":"CreativeWork","name":"Magic Constants in PHP - Scientech Easy","url":"https:\/\/www.scientecheasy.com\/2024\/09\/magic-constants-in-php.html\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__function__"}]}]}</script>
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
## See Also

+ [PHP Magic Constants - W3Schools](https://www.w3schools.com/php/php_magic_constants.asp)
+ [Magic Constants in PHP - Scientech Easy](https://www.scientecheasy.com/2024/09/magic-constants-in-php.html/)

## Related

+ [Magic Constants](magic-constant.html)
+ [\_\_METHOD\_\_](__method__.html)
+ [\_\_CLASS\_\_](__class__.html)
+ [\_\_TRAIT\_\_](__trait__.html)
