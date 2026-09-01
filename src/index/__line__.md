# \_\_LINE\_\_
``__LINE__`` holds the current line number in the current file.

The line numbers starts at 1. It is always available.

``__LINE__`` is often used with ``__FILE__``, which holds the file name.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__line__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__line__.html","name":"__LINE__","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 05:04:01 +0000","dateModified":"Mon, 24 Aug 2026 05:04:01 +0000","description":"__LINE__ holds the current line number in the current file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__line__.html"]}],"keywords":["magic constant"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__file__.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.constants.magic.php"},{"@type":"CreativeWork","name":"PHP Magic Constants - DevChunks","url":"https:\/\/devchunks.com\/php\/php-magic-constants"},{"@type":"CreativeWork","name":"PHP's Magic Constants: __LINE__, __FILE__, __FUNCTION__, __CLASS__, and __METHOD__","url":"https:\/\/davidwalsh.name\/php-magic-constants"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__line__"}]}]}</script>
```php
<?php

    function foo() {
        echo __FILE__.':'.__LINE__; // /tmp/test.php:4
    }

foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## See Also

+ [PHP Magic Constants - DevChunks](https://devchunks.com/php/php-magic-constants)
+ [PHP's Magic Constants: __LINE__, __FILE__, __FUNCTION__, __CLASS__, and __METHOD__](https://davidwalsh.name/php-magic-constants)

## Related

+ [Magic Constants](magic-constant.html)
+ [\_\_FILE\_\_](__file__.html)
