# Directives
Directives are the configuration option of PHP. They may be set in the ``php.ini`` file, in HTTP server files like ``.htaccess``, or accessed via the ``ini_get()`` and ``ini_set()`` native calls. 

Directives are also set by PHP extensions or by PHP applications.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directive.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directive.html","name":"Directives","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:22 +0000","dateModified":"Mon, 17 Aug 2026 09:06:22 +0000","description":"Directives are the configuration option of PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directive.html"]}],"keywords":["directive"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php.ini.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htaccess.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/configuration.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flag.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini_set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html_errors.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_execution_time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/register-globals.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/register_argc_argv.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialize_precision.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/ini.list.php"},{"@type":"CreativeWork","name":"A Quick Guide to PHP INI Settings","url":"https:\/\/gridpane.com\/kb\/a-quick-guide-to-php-ini-settings\/"},{"@type":"CreativeWork","name":"Back to Basics: Managing PHP Configuration php.ini Directives","url":"https:\/\/phpbuilder.com\/back-to-basics-managing-php-configuration-php-ini-directives\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"directive"}]}]}</script>
```php
<?php

    echo 'display_errors = ' . ini_get('display_errors') . "\n";
    echo 'register_globals = ' . ini_get('register_globals') . "\n";
    echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
    echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
    echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));

?>
```

**[Documentation](https://www.php.net/manual/en/ini.list.php)**
## See Also

+ [A Quick Guide to PHP INI Settings](https://gridpane.com/kb/a-quick-guide-to-php-ini-settings/)
+ [Back to Basics: Managing PHP Configuration php.ini Directives](https://phpbuilder.com/back-to-basics-managing-php-configuration-php-ini-directives/)

## Related

+ [Extensions](extension.html)
+ [php\\.ini](php.ini.html)
+ [\\.htaccess](htaccess.html)
+ [Configuration](configuration.html)
+ [Enable](enable.html)
+ [Flag](flag.html)
+ [ini\_set()](ini_set.html)
+ [html\_errors](html_errors.html)
+ [max\_execution\_time](max_execution_time.html)
+ [Register Globals](register-globals.html)
+ [register\_argc\_argv](register_argc_argv.html)
+ [serialize\_precision](serialize_precision.html)
