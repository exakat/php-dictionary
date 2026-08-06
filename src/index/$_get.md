# $\_GET
The ``$_GET`` variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters. When a user submits a form using the HTTP GET method or includes parameters in the URL, PHP populates the ``$_GET`` variable with key-value pairs representing those parameters.

The ``$_GET`` variable is an associative array where the keys are the parameter names and the values are the corresponding values passed in the URL. 

The received values are strings or arrays. They are strings by default, and other scalar types needs a casting to have the correct type. The values are arrays when the URL uses the ``[]`` format: that format handles arrays and map.

``$_GET`` is a superglobal, or auto-global: it is always available, in every scope.

Values inside ``$_GET`` are always strings, or arrays. ``https://www.site.com/index.php?x=1`` or ``https://www.site.com/index.php?x[2]=1``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_get.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_get.html","name":"$_GET","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``$_GET`` variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$_GET.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [$\_POST]($_post.ini.html)
+ [$\_REQUEST]($_request.ini.html)
+ [$\_FILES]($_FILES.ini.html)
+ [$\_SERVER]($_server.ini.html)
+ [$\_COOKIE]($_cookie.ini.html)
+ [$\_ENV]($_env.ini.html)
+ [Form](form.ini.html)
+ [Incoming Data](incoming-data.ini.html)
+ [Query String](query-string.ini.html)
