# $\_REQUEST
An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods.

When the same name is used both in GET and POST method, the priority is defined by the ``variable_order`` directive. 

The received values are all strings or arrays. They are strings by default, and other scalar types needs a casting. The values are arrays when the URL uses the ``[]`` format. 

``$_REQUEST`` is a superglobal: it is always available, in every scope.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_request.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_request.html","name":"$_REQUEST","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$_REQUEST.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$_request"}]}]}</script>
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

+ [$\_POST]($_post.html)
+ [$\_GET]($_get.html)
+ [$\_COOKIE]($_cookie.html)
+ [$\_ENV]($_env.html)
+ [Form](form.html)
+ [Incoming Data](incoming-data.html)
+ [variable\_order](variable_order.html)
