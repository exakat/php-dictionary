# Timing Attack
A timing attack is a type of side-channel attack where an attacker exploits variations in the time it takes for a system to perform operations to infer secret information. Instead of directly breaking cryptographic algorithms, the attacker analyzes how long a system takes to respond to different inputs, revealing clues about the internal state or data.

Timing attacks may be mitigated by using the ``hash_equals()`` function, instead of comparing values with ``===`` or ``==``. 

The attack relies on trying various strings, and detecting when the comparison fails early or late to infer which part of the string is valid or not. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timing-attack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timing-attack.html","name":"Timing Attack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:37 +0000","dateModified":"Fri, 19 Jun 2026 21:24:37 +0000","description":"A timing attack is a type of side-channel attack where an attacker exploits variations in the time it takes for a system to perform operations to infer secret information","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Timing Attack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Timing Attack"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Timing_attack)**
## See Also

+ [PHP Vulnerabilities: Assessment, Prevention, and Mitigation](https://www.zend.com/blog/php-vulnerabilities)
+ [Timing Attack in Laravel (2022)](https://ephort.dk/blog/laravel-timing-attack-vulnerability)

## Related

+ [Vulnerability](vulnerability.html)
+ [Attack](attack.html)
+ [hash\_equals()](hash_equals.html)
+ [DevOps](devops.html)
+ [Rollback](rollback.html)
+ [VCS Commit](vcs-commit.html)
+ [Worktree](worktree.html)
+ [Crack](crack.html)
