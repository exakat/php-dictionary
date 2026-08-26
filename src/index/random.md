# Random
Random generators generate numbers or strings.

``random_bytes()``, ``random_int()`` and ``openssl_random_pseudo_bytes()`` produce pseudo-random data, suitable for cryptography.

Traditional native functions, such as ``rand()`` and ``mt_rand()``, are not recommended for cryptography.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html","name":"Random","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:42:43 +0000","dateModified":"Tue, 11 Aug 2026 14:42:43 +0000","description":"Random generators generate numbers or strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html"]}],"keywords":["cryptography","number"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cryptography.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deterministic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dataset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_cryptosafeengine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_engine.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.random-bytes.php"},{"@type":"CreativeWork","name":"How to Use the rand() Function in PHP","url":"https:\/\/pimylifeup.com\/php-rand\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"random"}]}]}</script>
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
