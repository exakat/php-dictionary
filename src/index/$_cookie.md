# $\_COOKIE
The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver.

The ``$_COOKIE`` variable is an associative array where the keys are the cookies names and the values are the corresponding values passed in the HTTP headers. 

``$_COOKIE`` is a superglobal: it is always available, in every scope.

Values inside ``$_COOKIE`` are always strings or arrays.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_cookie.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_cookie.html","name":"$_COOKIE","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:35:02 +0000","dateModified":"Thu, 13 Aug 2026 05:35:02 +0000","description":"The $_COOKIE variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$_COOKIE.html"]}],"keywords":["php variable","superglobal"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_post.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_request.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_server.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_FILES.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_env.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.variables.cookie.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$_cookie"}]}]}</script>
```php
<?php

    echo $_COOKIE['username'];

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.cookie.php)**
## Related

+ [$\_GET]($_get.html)
+ [$\_POST]($_post.html)
+ [$\_REQUEST]($_request.html)
+ [$\_SERVER]($_server.html)
+ [$\_FILES]($_FILES.html)
+ [$\_ENV]($_env.html)
