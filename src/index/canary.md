# Canary
Canary, borrowed from the miner's canary once used to detect dangerous gas underground, has two distinct meanings in software engineering:

+ A canary release, or canary deployment, is a rollout strategy where a new version is deployed to a small subset of servers or users first. Its behavior and metrics are monitored before the rollout is extended to everyone, which limits the blast radius of a regression. It is a close relative of the feature flag and of blue-green deployment.
+ A stack canary, or stack cookie, is a known value placed on the call stack, right before a function's return address. If a buffer overflow overwrites the return address, it also overwrites the canary first, so the corruption is detected before the corrupted address is ever used. It is a memory-safety technique specific to compiled, memory-unsafe languages such as C and C++.

PHP scripts do not manage the stack directly, so stack canaries are not a PHP-level concern; the Zend Engine that executes PHP, however, is itself written in C, and may benefit from stack canaries at the compiler level. Canary releases, on the other hand, are a common practice for deploying PHP applications.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canary.html","name":"Canary","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:20:03 +0000","dateModified":"Thu, 16 Jul 2026 08:20:03 +0000","description":"Canary, borrowed from the miner's canary once used to detect dangerous gas underground, has two distinct meanings in software engineering:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Canary.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Canary"}]}]}</script>
```php
<?php

    // a simple canary release, gated by a user's id
    if ($user->id % 100 < 5) { // only 5% of users see the new checkout flow
        return new CheckoutFlowV2();
    }

    return new CheckoutFlowV1();

?>
```

**[Documentation](https://martinfowler.com/bliki/CanaryRelease.html)**
## See Also

+ [Stack canary](https://en.wikipedia.org/wiki/Buffer_overflow_protection#Canaries)

## Related

+ [Feature Flag](feature-flag.html)
+ [Release](release.html)
+ [Circuit Breaker](circuit-breaker.html)
+ [Sentinel](sentinel.html)
