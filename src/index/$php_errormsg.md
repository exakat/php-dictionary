# $php\_errormsg
``$php_errormsg`` contains the last error message, emitted by PHP. 

In general, ``error_get_last()`` should be used instead of ``$php_errormsg``, although this function returns an array, not a string.

This feature was removed in version 8.0.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24php_errormsg.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24php_errormsg.html","name":"$php_errormsg","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 08:33:46 +0000","dateModified":"Mon, 24 Aug 2026 08:33:46 +0000","description":"$php_errormsg contains the last error message, emitted by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24php_errormsg.html"]}],"keywords":["php variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24globals.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24this.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.variables.phperrormsg.php"},{"@type":"CreativeWork","name":"How to catch a fatal error in PHP","url":"https:\/\/www.php.net\/manual\/en\/function.error-get-last.php"},{"@type":"CreativeWork","name":"track_errors is deprecated since PHP 7.2 and removed as of PHP 8.0.0","url":"https:\/\/issues.joomla.org\/tracker\/joomla-cms\/41667"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$php_errormsg"}]}]}</script>
```php
<?php

    // Warning: Undefined variable $php_errormsg 
    // in PHP 8.0 (sic)
    echo $php_errormsg;

    print_r(error_get_last());

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.phperrormsg.php)**
## See Also

+ [How to catch a fatal error in PHP](https://www.php.net/manual/en/function.error-get-last.php)
+ [track_errors is deprecated since PHP 7.2 and removed as of PHP 8.0.0](https://issues.joomla.org/tracker/joomla-cms/41667)

## Related

+ [$GLOBALS]($globals.html)
+ [$this]($this.html)
