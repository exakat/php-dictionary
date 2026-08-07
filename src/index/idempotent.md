# Idempotent
Idempotent is said of an operation, which yields always the same result after the first call. In other words, repeating the operation does not produce a different result beyond the initial application.

This is the case of ``strtolower()`` and ``strtoupper()``: once the string has been made lower case, resp. upper case, calling the same function again on the string will not change the result.

In distributed systems and HTTP APIs, idempotency is enforced through an idempotency key: a unique identifier, typically a ``UUID``, supplied by the client with each request. The server stores the outcome of the first request under that key and returns the cached result for any subsequent request carrying the same key, preventing duplicate side-effects such as double payments or duplicate record creation.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html","name":"Idempotent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:41:35 +0000","dateModified":"Mon, 20 Jul 2026 16:41:35 +0000","description":"Idempotent is said of an operation, which yields always the same result after the first call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Idempotent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Idempotent"}]}]}</script>
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
