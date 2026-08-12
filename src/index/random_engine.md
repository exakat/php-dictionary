# Random\\Engine
``Random\Engine`` is the base interface for all random number generator engines introduced in version 8.2. It defines a single method ``generate(): string`` that produces a string of random bytes.

Built-in engines include ``Random\Engine\Mt19937``, ``Random\Engine\PcgOneseq128XslRr64``, ``Random\Engine\Xoshiro256StarStar``, and the cryptographically secure ``Random\Engine\Secure``. Custom engines can be implemented by adding this interface.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_engine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_engine.html","name":"Random\\Engine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:25:30 +0000","dateModified":"Mon, 06 Jul 2026 10:25:30 +0000","description":"Random\\Engine is the base interface for all random number generator engines introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Random\\Engine.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"random_engine"}]}]}</script>
```php
<?php

    $engine = new Random\Engine\Mt19937(seed: 42);
    $randomizer = new Random\Randomizer($engine);
    echo $randomizer->getInt(1, 100);

?>
```

**[Documentation](https://www.php.net/manual/en/class.random-engine.php)**
## See Also

+ [Random\Randomizer](https://www.php.net/manual/en/class.random-randomizer.php)

## Related

+ [Random](random.html)
+ [Interface](interface.html)
+ [PHP Native Interfaces](php-interface.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.html)
+ [Deterministic](deterministic.html)
