# Headers
Headers are HTTP response data sent to the client before any body output. PHP provides several built-in functions to manage them.

The native function ``header()`` sends a raw HTTP header. ``headers_sent()`` checks whether headers have already been sent. ``headers_list()`` returns the list of headers ready to be sent. ``header_remove()`` removes a previously set header.

Headers must be sent before any output, HTML, whitespace, or ``echo``. Sending output before calling ``header()`` triggers a PHP warning.
```php
<?php

header('Content-Type: application/json');
header('X-Custom-Header: value');

if (headers_sent($file, $line)) {
    echo "Headers already sent in $file on line $line";
}

echo json_encode(['status' => 'ok']);

?>
```

Related : [HTTP Headers](HTTP Headers), [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [Cookie](Cookie), [HTTP Request Headers](HTTP Request Headers), [Output Buffering](Output Buffering)
