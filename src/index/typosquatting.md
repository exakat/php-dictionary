# Typosquatting
Typosquatting is an attack where a malicious actor registers a name that is a misspelling, a plural, a swapped letter, or a visually similar variant of a legitimate one, and waits for developers to install it by mistake. The name is chosen to be close enough to pass unnoticed when typed quickly or copied from memory.

In a package repository, such as Packagist for PHP, a typosquatted package looks like a popular library, for example ``monolgo/monolog`` instead of ``monolog/monolog``. A ``composer require`` with the wrong name installs the attacker's code, which then runs with the full rights of the application, its build, and its deployment pipeline.

Typosquatting is a form of supply chain attack: the attacker does not compromise the target project directly, but the dependency that the project trusts. Checking the exact spelling and the vendor name of each dependency, reviewing the ``composer.json`` changes in code review, and pinning dependencies in ``composer.lock`` reduce the risk. Static analysis can flag unknown or recently created packages, and a lockfile audit can flag a package whose name is one edit away from a popular one.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typosquatting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typosquatting.html","name":"Typosquatting","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 15:30:48 +0000","dateModified":"Wed, 14 Oct 2026 15:30:48 +0000","description":"Typosquatting is an attack where a malicious actor registers a name that is a misspelling, a plural, a swapped letter, or a visually similar variant of a legitimate one, and waits for developers to install it by mistake","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typosquatting.html"]}],"keywords":["security","supply chain"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supply-chain-attack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supply-chain.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/packagist.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sbom.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/least-privilege.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Typosquatting"},{"@type":"CreativeWork","name":"Typosquatting in package managers","url":"https:\/\/en.wikipedia.org\/wiki\/Typosquatting#Package_managers"},{"@type":"CreativeWork","name":"PHP Supply Chain Attack on Composer","url":"https:\/\/blog.sonarsource.com\/php-supply-chain-attack-on-composer\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"typosquatting"}]}]}</script>
```php
<?php

    // Legitimate package
    // composer require monolog/monolog

    // Typosquatted package: one letter away, registered by an attacker
    // composer require monolgo/monolog

    // Review the lock file after any dependency change
    // composer.lock must list only the packages that were reviewed

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Typosquatting)**
## See Also

+ [Typosquatting in package managers](https://en.wikipedia.org/wiki/Typosquatting#Package_managers)
+ [PHP Supply Chain Attack on Composer](https://blog.sonarsource.com/php-supply-chain-attack-on-composer/)

## Related

+ [Supply Chain Attack](supply-chain-attack.html)
+ [Supply Chain](supply-chain.html)
+ [Packagist](packagist.html)
+ [Composer](composer.html)
+ [Software Bill Of Material (SBOM)](sbom.html)
+ [Least Privilege Principle](least-privilege.html)
