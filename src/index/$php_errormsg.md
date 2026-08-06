# $php\_errormsg
``$php_errormsg`` contains the last error message, emitted by PHP. 

In general, ``error_get_last()`` should be used instead of ``$php_errormsg``, although this function returns an array, not a string.

This feature was removed in version 8.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24php_errormsg.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24php_errormsg.html","name":"$php_errormsg","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 10:21:34 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``$php_errormsg`` contains the last error message, emitted by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$php_errormsg.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [$GLOBALS]($globals.ini.html)
+ [$this]($this.ini.html)
