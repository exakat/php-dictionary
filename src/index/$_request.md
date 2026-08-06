# $\_REQUEST
An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods.

When the same name is used both in GET and POST method, the priority is defined by the ``variable_order`` directive. 

The received values are all strings or arrays. They are strings by default, and other scalar types needs a casting. The values are arrays when the URL uses the ``[]`` format. 

``$_REQUEST`` is a superglobal: it is always available, in every scope.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_request.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24_request.html","name":"$_REQUEST","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$_REQUEST.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // https://www.example.com/index.php?x=1
    $_REQUEST['x'] === '1';
    
    // POST y=abc
    $_REQUEST['y'] === 'abc';
    
    // https://www.example.com/index.php?z[]=def&z[]=ghi
    $_REQUEST['z'] === ['def', 'ghi'];

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.get.php)**
## See Also

+ [The Basics of the PHP Request](https://x-team.com/magazine/basics-php-request)
+ [Comprehensive Explanation of PHP’s $_REQUEST Superglobal for Form Data Handling](https://medium.com/@otabekjurabekov3/comprehensive-explanation-of-phps-request-superglobal-for-form-data-handling-6034ad14827d)

## Related

+ [$\_POST]($_post.ini.html)
+ [$\_GET]($_get.ini.html)
+ [$\_COOKIE]($_cookie.ini.html)
+ [$\_ENV]($_env.ini.html)
+ [Form](form.ini.html)
+ [Incoming Data](incoming-data.ini.html)
+ [variable\_order](variable_order.ini.html)
