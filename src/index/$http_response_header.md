# $http\_response\_header
``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``. It is the same as the result of the function ``get_headers()``.

In general, ``error_get_last()`` should be used instead of ``$php_errormsg``, although this function returns an array, not a string.

This feature is deprecated in version 8.5.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24http_response_header.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24http_response_header.html","name":"$http_response_header","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$http_response_header.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [fopen()](fopen.ini.html)
+ [file\_get\_contents()](file_get_contents.ini.html)
