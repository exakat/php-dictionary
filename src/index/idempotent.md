# Idempotent
Idempotent is said of an operation, which always yields the same result after the first call. In other words, repeating the operation does not produce a different result beyond the initial application.

This is the case of ``strtolower()`` and ``strtoupper()``: once the string has been made lower case, resp. upper case, calling the same function again on the string will not change the result.

In distributed systems and HTTP APIs, idempotency is enforced through an idempotency key: a unique identifier, typically a ``UUID``, supplied by the client with each request. The server stores the outcome of the first request under that key and returns the cached result for any subsequent request carrying the same key, preventing duplicate side-effects such as double payments or duplicate record creation.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html","name":"Idempotent","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:51:21 +0000","dateModified":"Tue, 11 Aug 2026 20:51:21 +0000","description":"Idempotent is said of an operation, which always yields the same result after the first call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"]}],"alternateName":["idempotency"],"keywords":["concept","code architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtolower.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/useless.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deduplication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uuid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique-identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fingerprint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/replay.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/retry.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ttl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/webhook.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compensation-logic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/correlation-id.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/source-of-truth.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/worker.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Glossary\/Idempotent"},{"@type":"CreativeWork","name":"Idempotence","url":"https:\/\/en.wikipedia.org\/wiki\/Idempotence"},{"@type":"CreativeWork","name":"Designing Idempotent PHP APIs for Distributed Systems","url":"https:\/\/medium.com\/tech-vibes\/designing-idempotent-php-apis-for-distributed-systems-c1b52b1862b1"},{"@type":"CreativeWork","name":"Idempotency: What, Why and How","url":"https:\/\/wendelladriel.com\/blog\/idempotency-what-why-and-how"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"idempotent"}]}]}</script>
```php
<?php

    $string = aBC;
    
    $string1 = strtolower($string); // abc
    $string2 = strtolower($string2); // abc
    $string3 = strtolower($string3); // abc
    $string4 = strtolower($string4); // abc
    // ... 

?>
```

**[Documentation](https://developer.mozilla.org/en-US/docs/Glossary/Idempotent)**
## See Also

+ [Idempotence](https://en.wikipedia.org/wiki/Idempotence)
+ [Designing Idempotent PHP APIs for Distributed Systems](https://medium.com/tech-vibes/designing-idempotent-php-apis-for-distributed-systems-c1b52b1862b1)
+ [Idempotency: What, Why and How](https://wendelladriel.com/blog/idempotency-what-why-and-how)

## Related

+ [strtolower()](strtolower.html)
+ [Determinism](determinism.html)
+ [Useless](useless.html)
+ [Deduplication](deduplication.html)
+ [Universally Unique IDentifier (UUID)](uuid.html)
+ [Unique Identifier](unique-identifier.html)
+ [Fingerprint](fingerprint.html)
+ [HTTP Method](http-method.html)
+ [Replay](replay.html)
+ [Retry](retry.html)
+ [Time To Live (TTL)](ttl.html)
+ [Webhook](webhook.html)
+ [Compensation Logic](compensation-logic.html)
+ [Correlation ID](correlation-id.html)
+ [Source Of Truth](source-of-truth.html)
+ [Worker](worker.html)
