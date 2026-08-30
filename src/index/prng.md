# PRNG
A ``PRNG``, or pseudorandom number generator, is an algorithm that produces a sequence of numbers which appears random, but is entirely determined by its initial seed. Given the same seed, a PRNG always produces the same sequence, which makes it deterministic and reproducible, unlike a true random source.

PHP's ``rand()`` and ``mt_rand()`` are classic PRNGs, and, since 8.2, the ``Random\Engine`` interface exposes several interchangeable PRNG algorithms, such as ``Mt19937``, ``PcgOneseq128XslRr64`` and ``Xoshiro256StarStar``.

PRNGs are generally not suitable for cryptography, since their output can sometimes be predicted from a partial sequence. ``random_bytes()``, ``random_int()`` and the ``Random\Engine\Secure`` engine rely instead on a cryptographically secure pseudorandom number generator, also known as CSPRNG.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prng.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prng.html","name":"PRNG","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 04:36:17 +0000","dateModified":"Thu, 27 Aug 2026 04:36:17 +0000","description":"A PRNG, or pseudorandom number generator, is an algorithm that produces a sequence of numbers which appears random, but is entirely determined by its initial seed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prng.html"]}],"alternateName":["pseudorandom-number-generator","csprng"],"keywords":["random","number"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_engine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_cryptosafeengine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deterministic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.mt-rand.php"},{"@type":"CreativeWork","name":"Pseudorandom number generator - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Pseudorandom_number_generator"},{"@type":"CreativeWork","name":"PHP RFC: Random Extension 5.x Improvement","url":"https:\/\/wiki.php.net\/rfc\/rng_extension"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"prng"}]}]}</script>
```php
<?php

    mt_srand(42);
    echo mt_rand(1, 100); // always the same value for the same seed
    
    $engine = new Random\Engine\Mt19937(seed: 42);
    $randomizer = new Random\Randomizer($engine);
    echo $randomizer->getInt(1, 100); // reproducible sequence

?>
```

**[Documentation](https://www.php.net/manual/en/function.mt-rand.php)**
## See Also

+ [Pseudorandom number generator - Wikipedia](https://en.wikipedia.org/wiki/Pseudorandom_number_generator)
+ [PHP RFC: Random Extension 5.x Improvement](https://wiki.php.net/rfc/rng_extension)

## Related

+ [Random](random.html)
+ [Random\\Engine](random_engine.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.html)
+ [Deterministic](deterministic.html)
+ [Determinism](determinism.html)
+ [Cryptography](cryptography.html)
