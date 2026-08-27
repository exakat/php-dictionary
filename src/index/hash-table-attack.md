# Hash Table Attack
A hash table attack, also known as HashDoS or hash-flooding attack, is a denial of service technique that exploits the worst-case behavior of a hash table. When many keys are crafted to collide on the same bucket, insertions degrade from the expected average ``O(1)`` to ``O(n)`` per operation, turning a cheap request into a CPU-bound one that can stall the whole server with a small amount of traffic.

The attack was disclosed in 2011 as a cross-language vulnerability: PHP, and most other web platforms of the time, parsed incoming POST data into an array keyed by parameter name, using a hash function with a fixed, predictable seed. An attacker could precompute thousands of string keys that all hash to the same bucket, and submit them as a single request body, forcing the engine to spend seconds or minutes rebuilding that one array.

PHP mitigated the attack on two fronts: the Zend Engine's ``HashTable`` now randomizes its hash seed per process, so collisions can no longer be precomputed offline, and the ``max_input_vars`` ini directive caps the number of input variables accepted in a single request, bounding the damage even if collisions occur.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table-attack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table-attack.html","name":"Hash Table Attack","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Aug 2026 20:35:06 +0000","dateModified":"Sun, 23 Aug 2026 20:35:06 +0000","description":"A hash table attack, also known as HashDoS or hash-flooding attack, is a denial of service technique that exploits the worst-case behavior of a hash table","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table-attack.html"]}],"alternateName":["hash-collision-attack","hashdos","algorithmic-complexity-attack"],"keywords":["security","attack"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-table.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hashing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rainbow-table.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ddos.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_input_vars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regexploit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timing-attack.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Collision_attack"},{"@type":"CreativeWork","name":"max_input_vars","url":"https:\/\/www.php.net\/manual\/en\/info.configuration.php#ini.max-input-vars"},{"@type":"CreativeWork","name":"Principles of PHP hash table collision attacks","url":"https:\/\/topic.alibabacloud.com\/a\/principles-of-php-hash-table-collision-attacks_3_75_32814723.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"hash-table-attack"}]}]}</script>
```php
<?php

    // A crafted request body with thousands of colliding keys
    // forces PHP to rebuild $_POST's underlying hash table repeatedly,
    // each insertion degrading toward O(n) instead of O(1).
    // max_input_vars limits how many such keys are accepted at all.

    foreach ($_POST as $key => $value) {
        // even an empty loop body pays the cost of building $_POST
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Collision_attack)**
## See Also

+ [max_input_vars](https://www.php.net/manual/en/info.configuration.php#ini.max-input-vars)
+ [Principles of PHP hash table collision attacks](https://topic.alibabacloud.com/a/principles-of-php-hash-table-collision-attacks_3_75_32814723.html)

## Related

+ [Hash Table](hash-table.html)
+ [hash() Function](hash-function.html)
+ [Hashing](hashing.html)
+ [Collision](collision.html)
+ [Rainbow Table](rainbow-table.html)
+ [Distributed Denial Of Service (DDOS)](ddos.html)
+ [Attack](attack.html)
+ [max\_input\_vars](max_input_vars.html)
+ [Vulnerability](vulnerability.html)
+ [Regexploit](regexploit.html)
+ [Timing Attack](timing-attack.html)
