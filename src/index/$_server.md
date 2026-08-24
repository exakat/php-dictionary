# $\_SERVER
The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations.

The entries in this array are created by the web server, therefore there is no guarantee that every web server provides any of these.

The ``$_SERVER`` variable is an associative array where the keys are the variable names and the values are the corresponding values.

``$_SERVER`` is a superglobal: it is always available, in every scope.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_server.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_server.html","name":"$_SERVER","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 05:04:01 +0000","dateModified":"Mon, 24 Aug 2026 05:04:01 +0000","description":"The $_SERVER variable is a special superglobal variable that holds information about the headers, scripts and path locations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_server.html"]}],"keywords":["php variable","superglobal"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_post.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_FILES.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_cookie.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_env.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24globals.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-headers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ip.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.variables.server.php"},{"@type":"CreativeWork","name":"PHP Superglobals Explained, With Cheatsheet","url":"https:\/\/code.tutsplus.com\/php-superglobals-explained-with-cheatsheet--cms-36598t"},{"@type":"CreativeWork","name":"PHP: Superglobals - Manual","url":"https:\/\/www.php.net\/manual\/en\/language.variables.superglobals.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$_server"}]}]}</script>
```php
<?php

    echo $_SERVER['PHP_SELF'];

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.server.php)**
## See Also

+ [PHP Superglobals Explained, With Cheatsheet](https://code.tutsplus.com/php-superglobals-explained-with-cheatsheet--cms-36598t)
+ [PHP: Superglobals - Manual](https://www.php.net/manual/en/language.variables.superglobals.php)

## Related

+ [$\_POST]($_post.html)
+ [$\_GET]($_get.html)
+ [$\_FILES]($_FILES.html)
+ [$\_COOKIE]($_cookie.html)
+ [$\_ENV]($_env.html)
+ [$GLOBALS]($globals.html)
+ [HTTP Request Headers](http-headers.html)
+ [Internet Protocol (IP)](ip.html)
