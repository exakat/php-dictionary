# \_\_DIR\_\_
``__DIR__`` holds the directory of the current file.

It is equivalent to ``dirname(__FILE__)``. The directory name does not have a trailing slash unless it is the root directory.

When used inside an include, the directory of the included file is returned.

This constant is case insensitive, and may be used with any combination of uppercase and lowercase.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__dir__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__dir__.html","name":"__DIR__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:12:46 +0000","dateModified":"Sun, 12 Jul 2026 20:12:46 +0000","description":"``__DIR__`` holds the directory of the current file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__DIR__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"__DIR__"}]}]}</script>
```php
<?php

    // Assume file is at /var/www/html/index.php
    echo __DIR__; // /var/www/html

    // Useful for requiring files relative to current script
    require __DIR__ . '/config.php';

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## Related

+ [Magic Constants](magic-constant.html)
+ [\_\_FILE\_\_](__file__.html)
+ [\_\_LINE\_\_](__line__.html)
+ [dirname](dirname.html)
+ [Special Constant](special-constant.html)
