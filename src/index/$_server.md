# $\_SERVER
The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations.

The entries in this array are created by the web server, therefore there is no guarantee that every web server provides any of these.

The ``$_SERVER`` variable is an associative array where the keys are the variable names and the values are the corresponding values.

``$_SERVER`` is a superglobal: it is always available, in every scope.


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_server.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_server.html","name":"$_SERVER","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$_SERVER.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

echo $_SERVER['PHP_SELF'];

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.server.php)**
## Related

+ [$\_POST]($_post.ini.html)
+ [$\_GET]($_get.ini.html)
+ [$\_FILES]($_FILES.ini.html)
+ [$\_COOKIE]($_cookie.ini.html)
+ [$\_ENV]($_env.ini.html)
+ [$GLOBALS]($globals.ini.html)
+ [HTTP Request Headers](http-headers.ini.html)
+ [Internet Protocol (IP)](ip.ini.html)
