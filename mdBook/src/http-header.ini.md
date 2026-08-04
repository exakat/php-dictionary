# HTTP Headers
HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction. 

They are separated from the content, which usually represents the HTML page, or the binary  code of the image, archive. 

HTTP headers have a name, and a value. They are made of ASCII text, and separated by a colon ``:``

HTTP headers are the same with HTTPS.

HTTP headers are handled by the following functions: ``headers_sent()``, ``headers_list()``, ``header()``, ``header_remove()``, ``header_register_callback()``.
```php
<?php

    function foo($a, $b) {
        return $a - $b;
    }

?>
```

## See Also

+ [RFC 4229 : HTTP Header Field Registrations](https://datatracker.ietf.org/doc/html/rfc4229)
+ [HTTP headers list](https://en.wikipedia.org/wiki/List_of_HTTP_header_fields)
+ [PHP - simple way to send HTTP headers before a script ends](https://shkspr.mobi/blog/2026/05/php-simple-way-to-send-http-headers-before-a-script-ends/)

Related : [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [Hyper Text Transfer Protocol Secure (HTTPS)](Hyper Text Transfer Protocol Secure (HTTPS)), [PHP Handlers](PHP Handlers), [Headers](Headers), [HTTP Request Headers](HTTP Request Headers), [HTTP Method](HTTP Method), [Payload](Payload), [Replay](Replay), [Time To Live (TTL)](Time To Live (TTL)), [Webhook](Webhook)
