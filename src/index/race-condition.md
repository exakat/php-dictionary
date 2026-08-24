# Race Condition
A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events.

Race conditions happen in file systems, database accesses, sessions, cache, global variables, signals. 

Race conditions may be mitigated by using atomic operations, transactions, locks and unique identifiers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html","name":"Race Condition","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:31 +0000","dateModified":"Sat, 08 Aug 2026 14:32:31 +0000","description":"A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html"]}],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/atomic-operation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unique-identifier.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transaction.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/session.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/toctou.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutex.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/software-transactional-memory.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Race_condition"},{"@type":"CreativeWork","name":"PHP Race Condition Vulnerability Example","url":"http:\/\/blog.hoangdoan.io\/2015\/11\/php-race-condition-vulnerability-example.html"},{"@type":"CreativeWork","name":"PHP MySQLi - Race condition \ud83c\udfc1","url":"https:\/\/github.com\/wzul\/PHP-MySQLi-Race-Condition"},{"@type":"CreativeWork","name":"Symfony Lock + Workflow: Taming the Race Condition that will hit you in production","url":"https:\/\/nicolas-jourdan.medium.com\/symfony-lock-workflow-taming-the-race-condition-that-will-hit-you-in-production-d04613e0b6a8"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"race-condition"}]}]}</script>
```php
<?php

    if (!file_exists('/path/to/directory')) {
        // race condition
        mkdir('/path/to/directory', 0755); // This might fail as the directory may be created between the time of the previous check and now
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Race_condition)**
## See Also

+ [PHP Race Condition Vulnerability Example](http://blog.hoangdoan.io/2015/11/php-race-condition-vulnerability-example.html)
+ [PHP MySQLi - Race condition 🏁](https://github.com/wzul/PHP-MySQLi-Race-Condition)
+ [Symfony Lock + Workflow: Taming the Race Condition that will hit you in production](https://nicolas-jourdan.medium.com/symfony-lock-workflow-taming-the-race-condition-that-will-hit-you-in-production-d04613e0b6a8)

## Related

+ [Atomic Operation](atomic-operation.html)
+ [Unique Identifier](unique-identifier.html)
+ [Lock](lock.html)
+ [Transaction](transaction.html)
+ [Session](session.html)
+ [Security](security.html)
+ [Time Of Check To Time Of Use (TOCTOU)](toctou.html)
+ [Actor Model](actor-model.html)
+ [Cache Stampede](cache-stampede.html)
+ [Concurrency](concurrency.html)
+ [Mutex](mutex.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.html)
