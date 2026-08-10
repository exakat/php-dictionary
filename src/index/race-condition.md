# Race Condition
A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events.

Race conditions happen in file systems, database accesses, sessions, cache, global variables, signals. 

Race conditions may be mitigated by using atomic operations, transactions, locks and unique identifiers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html","name":"Race Condition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:31 +0000","dateModified":"Sat, 08 Aug 2026 14:32:31 +0000","description":"A Race Condition is a broad term for any situation where the outcome of a program depends on the timing of uncontrollable events","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Race Condition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Race Condition"}]}]}</script>
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
