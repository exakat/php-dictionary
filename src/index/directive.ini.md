# Directives
Directives are the configuration option of PHP. They may be set in the ``php.ini`` file, in HTTP server files like ``.htaccess``, or accessed via the ``ini_get()`` and ``ini_set()`` native calls. 

Directives are also set by PHP extensions or by PHP applications.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/directive.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/directive.ini.html","name":"Directives","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Directives are the configuration option of PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Directives.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Extensions](extension.ini.html)
+ [php\\.ini](php.ini.ini.html)
+ [\\.htaccess](htaccess.ini.html)
+ [Configuration](configuration.ini.html)
+ [Enable](enable.ini.html)
+ [Flag](flag.ini.html)
+ [ini\_set()](ini_set.ini.html)
+ [html\_errors](html_errors.ini.html)
+ [max\_execution\_time](max_execution_time.ini.html)
+ [Register Globals](register-globals.ini.html)
+ [register\_argc\_argv](register_argc_argv.ini.html)
+ [serialize\_precision](serialize_precision.ini.html)
