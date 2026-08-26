# Fingerprint
A fingerprint is a compact, deterministic identifier derived by hashing a set of attributes that together describe something uniquely. The same inputs always produce the same fingerprint; different inputs produce a different one.

In the context of HTTP request idempotency, a request fingerprint is computed from the method, route, query string, payload, and content type. It is stored alongside the idempotency key so that retried requests carrying the same key but a different payload can be detected and rejected.

More broadly, fingerprinting is used for cache keying, change detection, file integrity checks, and browser device identification.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fingerprint.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fingerprint.html","name":"Fingerprint","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:24 +0000","dateModified":"Fri, 19 Jun 2026 21:25:24 +0000","description":"A fingerprint is a compact, deterministic identifier derived by hashing a set of attributes that together describe something uniquely","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fingerprint.html"]}],"alternateName":["request-fingerprint"],"keywords":["concept","security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deduplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/checksum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/payload.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Fingerprint_(computing)"},{"@type":"CreativeWork","name":"How to generate a browser fingerprint with PHP","url":"https:\/\/fingerprint.com\/blog\/browser-fingerprint-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fingerprint"}]}]}</script>
```php
<?php

$fingerprint = hash('sha256', implode('|', [
    $request->method(),
    $request->path(),
    $request->getQueryString() ?? '',
    $request->getContent(),
    $request->header('Content-Type', ''),
]));

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Fingerprint_(computing))**
## See Also

+ [How to generate a browser fingerprint with PHP](https://fingerprint.com/blog/browser-fingerprint-php/)

## Related

+ [hash() Function](hash-function.html)
+ [Idempotent](idempotent.html)
+ [Deduplication](deduplication.html)
+ [Cache](cache.html)
+ [Checksum](checksum.html)
+ [Payload](payload.html)
