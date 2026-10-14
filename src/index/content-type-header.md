# Content-Type Header
The Content-Type header tells the receiver the media type of the body: for example ``application/json``, ``text/html`` or ``multipart/form-data``. It is sent in both requests and responses.

The receiver uses it to decode the body correctly. A server that receives a request with a missing or wrong Content-Type may reject it with 415 Unsupported Media Type, and a client that ignores the response's Content-Type may parse an HTML error page as JSON.

For JSON APIs, the request must send ``Content-Type: application/json``, and the client should check the response header before decoding the body. A ``charset`` parameter can be added to text types, such as ``text/html; charset=UTF-8``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/content-type-header.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/content-type-header.html","name":"Content-Type Header","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:37:45 +0000","dateModified":"Wed, 14 Oct 2026 16:37:45 +0000","description":"The Content-Type header tells the receiver the media type of the body: for example application\/json, text\/html or multipart\/form-data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/content-type-header.html"]}],"alternateName":["Content-Type"],"keywords":["header","http","json"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/headers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-code.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/malformed-response-body.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Headers\/Content-Type"},{"@type":"CreativeWork","name":"RFC 9110: Content-Type","url":"https:\/\/datatracker.ietf.org\/doc\/html\/rfc9110#section-8.3"},{"@type":"CreativeWork","name":"MDN: Content-Type","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Headers\/Content-Type"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"content-type-header"}]}]}</script>
```php
<?php

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['status' => 'ok']);

```

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Type)**
## See Also

+ [RFC 9110: Content-Type](https://datatracker.ietf.org/doc/html/rfc9110#section-8.3)
+ [MDN: Content-Type](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Type)

## Related

+ [HTTP Headers](http-header.html)
+ [Headers](headers.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [HTTP Code](http-code.html)
+ [Malformed Response Body](malformed-response-body.html)
