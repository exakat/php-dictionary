# $php\_errormsg
``$php_errormsg`` contains the last error message, emitted by PHP. 

In general, ``error_get_last()`` should be used instead of ``$php_errormsg``, although this function returns an array, not a string.

This feature was removed in version 8.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24php_errormsg.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24php_errormsg.html","name":"$php_errormsg","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``$php_errormsg`` contains the last error message, emitted by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$php_errormsg.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"$php_errormsg"}]}]}</script>
```php
<?php

    // Warning: Undefined variable $php_errormsg 
    // in PHP 8.0 (sic)
    echo $php_errormsg;

    print_r(error_get_last());

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.phperrormsg.php)**
## Related

+ [$GLOBALS]($globals.html)
+ [$this]($this.html)
