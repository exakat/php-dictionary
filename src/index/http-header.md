# HTTP Headers
HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction. 

They are separated from the content, which usually represents the HTML page, or the binary  code of the image, archive. 

HTTP headers have a name, and a value. They are made of ASCII text, and separated by a colon ``:``

HTTP headers are the same with HTTPS.

HTTP headers are handled by the following functions: ``headers_sent()``, ``headers_list()``, ``header()``, ``header_remove()``, ``header_register_callback()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html","name":"HTTP Headers","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"HTTP headers are extra information, exchanged between the server and the client, to configure further the network transaction","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/HTTP Headers.html"]}],"keywords":["web","header","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/https.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/headers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-headers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/payload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/replay.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webhook.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Headers"},{"@type":"CreativeWork","name":"RFC 4229 : HTTP Header Field Registrations","url":"https:\/\/datatracker.ietf.org\/doc\/html\/rfc4229"},{"@type":"CreativeWork","name":"HTTP headers list","url":"https:\/\/en.wikipedia.org\/wiki\/List_of_HTTP_header_fields"},{"@type":"CreativeWork","name":"PHP - simple way to send HTTP headers before a script ends","url":"https:\/\/shkspr.mobi\/blog\/2026\/05\/php-simple-way-to-send-http-headers-before-a-script-ends\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"http-header"}]}]}</script>
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

+ [Hyper Text Transfer Protocol (HTTP)](http.html)
+ [Hyper Text Transfer Protocol Secure (HTTPS)](https.html)
+ [PHP Handlers](handler.html)
+ [Headers](headers.html)
+ [HTTP Request Headers](http-headers.html)
+ [HTTP Method](http-method.html)
+ [Payload](payload.html)
+ [Replay](replay.html)
+ [Time To Live (TTL)](ttl.html)
+ [Webhook](webhook.html)
