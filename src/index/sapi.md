# Server Application Programming Interface (SAPI)
SAPI stands for Server Application Programming Interface. SAPI are the interface between PHP and a supporting platform, such as a web server like ``nginx``, ``apache``, ``caddy``, ... , a debugger like phpdbg, ... or the command line interface.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sapi.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sapi.html","name":"Server Application Programming Interface (SAPI)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"SAPI stands for Server Application Programming Interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Server Application Programming Interface (SAPI).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Server Application Programming Interface (SAPI)"}]}]}</script>
```php
<?php

echo PHP_SAPI;
echo php_sapi_name();

?>
```

**[Documentation](https://docs.php.earth/php/sapi/)**
## Related

+ [Common Gateway Interface (CGI)](cgi.html)
+ [Command Line Interface (CLI)](cli.html)
+ [Read Eval Print Loop (REPL)](repl.html)
+ [Terminal User Interface (TUI)](tui.html)
