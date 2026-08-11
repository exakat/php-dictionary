# \_\_FILE\_\_
``__FILE__`` holds the current file name.

The file name includes its absolute path, e.g. ``/tmp/path/to/file.txt``. It also uses the file's actual case.

When used without a file, aka in the command line, ``__FILE__`` contains ``Command line code``.

``__FILE__`` is often used with ``__LINE__``, which holds the line number.

``__FILE__`` is also often used with ``__DIR__``, which holds the directory of the file. It is akin to using ``dirname()`` on ``__FILE__``.

This constant is written in uppercase, by convention. It is case-insensitive, and may be used with any combination of uppercase and lowercase.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__file__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__file__.html","name":"__FILE__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:42:20 +0000","dateModified":"Tue, 11 Aug 2026 14:42:20 +0000","description":"``__FILE__`` holds the current file name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__FILE__.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__file__"}]}]}</script>
```php
<?php

    function foo() {
        echo __FILE__; // /tmp/test.php
    }

    foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## Related

+ [Magic Constants](magic-constant.html)
+ [\_\_DIR\_\_](__dir__.html)
+ [\_\_LINE\_\_](__line__.html)
+ [\_\_METHOD\_\_](__method__.html)
+ [dirname](dirname.html)
+ [Special Constant](special-constant.html)
