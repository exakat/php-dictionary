# Retry-After Header
The Retry-After header tells a client how long to wait before sending another request. It is usually sent with a 429 Too Many Requests response, when the client has hit a rate limit, and with a 503 Service Unavailable response during maintenance.

The value is either a number of seconds, such as ``Retry-After: 120``, or an HTTP date, such as ``Retry-After: Wed, 21 Oct 2026 07:28:00 GMT``.

A client should honour this header before retrying, rather than using its own fixed delay. Retrying immediately makes rate limiting worse, and a correct retry loop reads the header, waits, and only then tries again, with a maximum number of attempts.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry-after-header.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry-after-header.html","name":"Retry-After Header","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 16:37:45 +0000","dateModified":"Wed, 14 Oct 2026 16:37:45 +0000","description":"The Retry-After header tells a client how long to wait before sending another request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry-after-header.html"]}],"alternateName":["Retry-After"],"keywords":["header","http","rate limiting"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry-logic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rate-limit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-code.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/third-party-api.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Headers\/Retry-After"},{"@type":"CreativeWork","name":"RFC 9110: Retry-After","url":"https:\/\/datatracker.ietf.org\/doc\/html\/rfc9110#section-10.2.3"},{"@type":"CreativeWork","name":"MDN: Retry-After","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/HTTP\/Headers\/Retry-After"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"retry-after-header"}]}]}</script>
```php
<?php

    $wait = (int) $response->getHeaderLine('Retry-After');
    if ($wait > 0) {
        sleep($wait);
    }

```

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Retry-After)**
## See Also

+ [RFC 9110: Retry-After](https://datatracker.ietf.org/doc/html/rfc9110#section-10.2.3)
+ [MDN: Retry-After](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Retry-After)

## Related

+ [Retry](retry.html)
+ [Retry](retry-logic.html)
+ [Rate Limiting](rate-limit.html)
+ [HTTP Code](http-code.html)
+ [HTTP Headers](http-header.html)
+ [Timeout](timeout.html)
+ [Third-Party API](third-party-api.html)
