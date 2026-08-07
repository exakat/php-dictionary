# Random
Random generators generates numbers or strings. 

``random_bytes()``, ``random_int()`` and ``openssl_random_pseudo_bytes()`` produce pseudo-random data, suitable for cryptography. 

Traditional native functions, such as ``rand()`` and ``mt_rand()`` are not recommended for cryptography.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html","name":"Random","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Random generators generates numbers or strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Random.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Random"}]}]}</script>
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

+ [Cryptography](cryptography.html)
+ [Deterministic](deterministic.html)
+ [Dataset](dataset.html)
+ [Determinism](determinism.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.html)
+ [Random\\Engine](random_engine.html)
