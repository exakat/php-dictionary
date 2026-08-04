# HTTP Method
An HTTP method, also called an HTTP verb, defines the intended action of an HTTP request. The most common methods are GET, POST, PUT, PATCH, DELETE, HEAD, and OPTIONS.

Methods differ in their safety and idempotency guarantees. A method is safe if it does not modify server state, such as ``GET``, ``HEAD``, ``OPTIONS``. A method is idempotent if repeating it produces the same result as a single call ``GET``, ``HEAD``, ``PUT``, ``DELETE``. ``POST`` and ``PATCH`` are neither safe nor guaranteed idempotent by the specification, which is why APIs that use them for state-changing operations often implement explicit idempotency mechanisms such as idempotency keys.

The request method is available via ``$_SERVER['REQUEST_METHOD']`` or through framework helpers.
```php
<?php

    $method = $_SERVER['REQUEST_METHOD']; // GET, POST, PUT, PATCH, DELETE ...

?>
```

## See Also

+ [RFC 9110 — HTTP Semantics](https://www.rfc-editor.org/rfc/rfc9110#name-methods)

Related : [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [REST API](REST API), [Idempotent](Idempotent), [HTTP Headers](HTTP Headers), [Request](Request), [Response](Response)
