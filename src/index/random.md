# Random
Random generators generates numbers or strings. 

``random_bytes()``, ``random_int()`` and ``openssl_random_pseudo_bytes()`` produce pseudo-random data, suitable for cryptography. 

Traditional native functions, such as ``rand()`` and ``mt_rand()`` are not recommended for cryptography.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/random.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/random.html","name":"Random","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Random generators generates numbers or strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Random.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

  $bytes = random_bytes(5);
  var_dump(bin2hex($bytes));

?>
```

**[Documentation](https://www.php.net/manual/en/function.random-bytes.php)**
## See Also

+ [How to Use the rand() Function in PHP](https://pimylifeup.com/php-rand/)

## Related

+ [Cryptography](cryptography.ini.html)
+ [Deterministic](deterministic.ini.html)
+ [Dataset](dataset.ini.html)
+ [Determinism](determinism.ini.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.ini.html)
+ [Random\\Engine](random_engine.ini.html)
