# $\_COOKIE
The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver.

The ``$_COOKIE`` variable is an associative array where the keys are the cookies names and the values are the corresponding values passed in the HTTP headers. 

``$_COOKIE`` is a superglobal: it is always available, in every scope.

Values inside ``$_COOKIE`` are always strings or arrays.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_cookie.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_cookie.html","name":"$_COOKIE","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$_COOKIE.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

echo $_COOKIE['username'];

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.cookie.php)**
## Related

+ [$\_GET]($_get.ini.html)
+ [$\_POST]($_post.ini.html)
+ [$\_REQUEST]($_request.ini.html)
+ [$\_SERVER]($_server.ini.html)
+ [$\_FILES]($_FILES.ini.html)
+ [$\_ENV]($_env.ini.html)
