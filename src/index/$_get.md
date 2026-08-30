# $\_GET
The ``$_GET`` variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters. When a user submits a form using the HTTP GET method or includes parameters in the URL, PHP populates the ``$_GET`` variable with key-value pairs representing those parameters.

The ``$_GET`` variable is an associative array where the keys are the parameter names and the values are the corresponding values passed in the URL. 

The received values are strings or arrays. They are strings by default, and other scalar types need to be cast to have the correct type. The values are arrays when the URL uses the ``[]`` format: that format handles arrays and maps.

``$_GET`` is a superglobal, or auto-global: it is always available, in every scope.

Values inside ``$_GET`` are always strings, or arrays. ``https://www.site.com/index.php?x=1`` or ``https://www.site.com/index.php?x[2]=1``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_get.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_get.html","name":"$_GET","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:16 +0000","dateModified":"Wed, 19 Aug 2026 06:47:16 +0000","description":"The $_GET variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_get.html"]}],"keywords":["php variable","superglobal"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_post.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_request.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_FILES.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_server.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_cookie.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_env.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/form.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/incoming-data.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/query-string.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.variables.get.php"},{"@type":"CreativeWork","name":"$_GET in PHP","url":"https:\/\/oregoom.com\/en\/php\/get\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$_get"}]}]}</script>
```php
<?php

    // https://www.example.com/index.php?x=1
    $_GET['x'] === '1';
    
    // https://www.example.com/index.php?y=abc
    $_GET['y'] === 'abc';
    
    // https://www.example.com/index.php?z[]=def&z[][]=ghi
    $_GET['z'] === ['def', ['ghi']];

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.get.php)**
## See Also

+ [$_GET in PHP](https://oregoom.com/en/php/get/)

## Related

+ [$\_POST]($_post.html)
+ [$\_REQUEST]($_request.html)
+ [$\_FILES]($_FILES.html)
+ [$\_SERVER]($_server.html)
+ [$\_COOKIE]($_cookie.html)
+ [$\_ENV]($_env.html)
+ [Form](form.html)
+ [Incoming Data](incoming-data.html)
+ [Query String](query-string.html)
