# $http\_response\_header
``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``. It is the same as the result of the function ``get_headers()``.

``$http_response_header`` is not a superglobal: it is created in the local scope where the HTTP call was made, and is not automatically available in the calling scope.

This feature is deprecated in version 8.5.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24http_response_header.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24http_response_header.html","name":"$http_response_header","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:47:32 +0000","dateModified":"Tue, 11 Aug 2026 14:47:32 +0000","description":"``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$http_response_header.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$http_response_header"}]}]}</script>
```php
<?php

    // Example extracted from the manual
    function get_contents() {
        file_get_contents('http://example.com');
        var_dump($http_response_header); // variable is populated in the local scope
    }

    get_contents();
    var_dump($http_response_header); // a call to get_contents() does not populate the variable outside the function scope
    
?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.httpresponseheader.php)**
## See Also

+ [PHP $http_response_header](https://www.tutorialspoint.com/article/php-http-response-header)

## Related

+ [fopen()](fopen.html)
+ [file\_get\_contents()](file_get_contents.html)
