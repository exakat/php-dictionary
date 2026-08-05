# Server Application Programming Interface (SAPI)
SAPI stands for Server Application Programming Interface. SAPI are the interface between PHP and a supporting platform, such as a web server like ``nginx``, ``apache``, ``caddy``, ... , a debugger like phpdbg, ... or the command line interface.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sapi.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sapi.ini.html","name":"Server Application Programming Interface (SAPI)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"SAPI stands for Server Application Programming Interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Server Application Programming Interface (SAPI).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

echo PHP_SAPI;
echo php_sapi_name();

?>
```

**[Documentation](https://docs.php.earth/php/sapi/)**
## Related

+ [Common Gateway Interface (CGI)](cgi.ini.html)
+ [Command Line Interface (CLI)](cli.ini.html)
+ [Read Eval Print Loop (REPL)](repl.ini.html)
+ [Terminal User Interface (TUI)](tui.ini.html)
