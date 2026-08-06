# HTTP Headers
HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction. 

They are separated from the content, which usually represents the HTML page, or the binary  code of the image, archive. 

HTTP headers have a name, and a value. They are made of ASCII text, and separated by a colon ``:``

HTTP headers are the same with HTTPS.

HTTP headers are handled by the following functions: ``headers_sent()``, ``headers_list()``, ``header()``, ``header_remove()``, ``header_register_callback()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/http-header.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/http-header.html","name":"HTTP Headers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 05:42:23 +0000","dateModified":"Wed, 24 Jun 2026 05:42:23 +0000","description":"HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/HTTP Headers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo($a, $b) {
        return $a - $b;
    }

?>
```

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers)**
## See Also

+ [RFC 4229 : HTTP Header Field Registrations](https://datatracker.ietf.org/doc/html/rfc4229)
+ [HTTP headers list](https://en.wikipedia.org/wiki/List_of_HTTP_header_fields)
+ [PHP - simple way to send HTTP headers before a script ends](https://shkspr.mobi/blog/2026/05/php-simple-way-to-send-http-headers-before-a-script-ends/)

## Related

+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [Hyper Text Transfer Protocol Secure (HTTPS)](https.ini.html)
+ [PHP Handlers](handler.ini.html)
+ [Headers](headers.ini.html)
+ [HTTP Request Headers](http-headers.ini.html)
+ [HTTP Method](http-method.ini.html)
+ [Payload](payload.ini.html)
+ [Replay](replay.ini.html)
+ [Time To Live (TTL)](ttl.ini.html)
+ [Webhook](webhook.ini.html)
