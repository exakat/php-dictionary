# Server Application Programming Interface (SAPI)
SAPI stands for Server Application Programming Interface. SAPI are the interface between PHP and a supporting platform, such as a web server like ``nginx``, ``apache``, ``caddy``, ... , a debugger like phpdbg, ... or the command line interface.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sapi.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sapi.html","name":"Server Application Programming Interface (SAPI)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Aug 2026 07:18:28 +0000","dateModified":"Fri, 21 Aug 2026 07:18:28 +0000","description":"SAPI stands for Server Application Programming Interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sapi.html"]}],"keywords":["acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cgi.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cli.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/repl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tui.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/docs.php.earth\/php\/sapi\/"},{"@type":"CreativeWork","name":"Server application programming interface - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Server_application_programming_interface"},{"@type":"CreativeWork","name":"PHP, FPM, and Nginx | Servers for Hackers","url":"https:\/\/serversforhackers.com\/c\/php-fpm-and-nginx"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sapi"}]}]}</script>
```php
<?php

echo PHP_SAPI;
echo php_sapi_name();

?>
```

**[Documentation](https://docs.php.earth/php/sapi/)**
## See Also

+ [Server application programming interface - Wikipedia](https://en.wikipedia.org/wiki/Server_application_programming_interface)
+ [PHP, FPM, and Nginx | Servers for Hackers](https://serversforhackers.com/c/php-fpm-and-nginx)

## Related

+ [Common Gateway Interface (CGI)](cgi.html)
+ [Command Line Interface (CLI)](cli.html)
+ [Read Eval Print Loop (REPL)](repl.html)
+ [Terminal User Interface (TUI)](tui.html)
