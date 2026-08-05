# \_\_LINE\_\_
``__LINE__`` holds the current line number in the current file.

The line numbers starts at 1. It is always available.

``__LINE__`` is often used with ``__FILE__``, which holds the file name.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__line__.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__line__.ini.html","name":"__LINE__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``__LINE__`` holds the current line number in the current file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__LINE__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo() {
        echo __FILE__.':'.__LINE__; // /tmp/test.php:4
    }

foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## Related

+ [Magic Constants](magic-constant.ini.html)
+ [\_\_FILE\_\_](__file__.ini.html)
