# \_\_FILE\_\_
``__FILE__`` holds the current file name.

The file name includes its absolute path, e.g. ``/tmp/path/to/file.txt``. It also uses the file's actual case.

When used without a file, aka in the command line, ``__FILE__`` contains ``Command line code``.

``__FILE__`` is often used with ``__LINE__``, which holds the line number.

``__FILE__`` is also often used with ``__DIR__``, which holds the directory of the file. It is akin to using ``dirname()`` on ``__FILE__``.

This constant is written in uppercase, by convention. It is case-insensitive, and may be used with any combination of uppercase and lowercase.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__file__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__file__.html","name":"__FILE__","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 05:04:01 +0000","dateModified":"Mon, 24 Aug 2026 05:04:01 +0000","description":"__FILE__ holds the current file name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__FILE__.html"]}],"keywords":["magic constant"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__dir__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__line__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__method__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dirname.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-constant.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.constants.magic.php"},{"@type":"CreativeWork","name":"PHP's Magic Constants: __LINE__, __FILE__, __FUNCTION__, __CLASS__, and __METHOD__","url":"https:\/\/davidwalsh.name\/php-magic-constants"},{"@type":"CreativeWork","name":"PHP Magic Constants - Examples of How Magic Constants Work in PHP","url":"https:\/\/www.educba.com\/php-magic-constants\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__file__"}]}]}</script>
```php
<?php

    function foo() {
        echo __FILE__; // /tmp/test.php
    }

    foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## See Also

+ [PHP's Magic Constants: __LINE__, __FILE__, __FUNCTION__, __CLASS__, and __METHOD__](https://davidwalsh.name/php-magic-constants)
+ [PHP Magic Constants - Examples of How Magic Constants Work in PHP](https://www.educba.com/php-magic-constants/)

## Related

+ [Magic Constants](magic-constant.html)
+ [\_\_DIR\_\_](__dir__.html)
+ [\_\_LINE\_\_](__line__.html)
+ [\_\_METHOD\_\_](__method__.html)
+ [dirname](dirname.html)
+ [Special Constant](special-constant.html)
