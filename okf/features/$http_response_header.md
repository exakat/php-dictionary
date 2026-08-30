---
type: "PHP Feature"
title: "$http_response_header"
description: "``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``."
resource: "https://www.php.net/manual/en/reserved.variables.httpresponseheader.php"
tags: ["php variable", "deprecated"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $http_response_header

``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``. It is the same as the result of the function ``get_headers()``.

``$http_response_header`` is not a superglobal: it is created in the local scope where the HTTP call was made, and is not automatically available in the calling scope.

This feature is deprecated in version 8.5.

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

## Documentation
- [https://www.php.net/manual/en/reserved.variables.httpresponseheader.php](https://www.php.net/manual/en/reserved.variables.httpresponseheader.php)

## See Also
- [PHP $http_response_header](https://www.tutorialspoint.com/article/php-http-response-header)

## Related
- [fopen()](/features/fopen.md)
- [file_get_contents()](/features/file_get_contents.md)

## Details
- PHP until: 9.0
- Deprecated: 8.5

