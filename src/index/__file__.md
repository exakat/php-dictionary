# \_\_FILE\_\_
``__FILE__`` holds the current file name.

The file name includes it absolute path, e.g. ``/tmp/path/to/file.txt``. It also uses the file actual case.

When used without a file, aka in command line, ``__FILE__`` contains ``Command line code``.

``__FILE__`` is often used with ``__LINE__``, which holds the line number. 

``__FILE__`` is also often used with ``__DIR__``, which holds the directory of the file. It is akin to use ``dirname()`` on ``__FILE__``.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__file__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__file__.html","name":"__FILE__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:44:11 +0000","dateModified":"Fri, 10 Jul 2026 09:44:11 +0000","description":"``__FILE__`` holds the current file name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__FILE__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Magic Constants](magic-constant.ini.html)
+ [\_\_DIR\_\_](__dir__.ini.html)
+ [\_\_LINE\_\_](__line__.ini.html)
+ [\_\_METHOD\_\_](__method__.ini.html)
+ [dirname](dirname.ini.html)
+ [Special Constant](special-constant.ini.html)
