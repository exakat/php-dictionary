# Normalisation
``normalisation`` has several distinct usages in software design:

+ Database normalisation: organizing a relational schema into normal forms, 1NF, 2NF, 3NF, and beyond, so that each fact is stored in exactly one place, removing the redundancy and update anomalies that come from repeating the same data across rows or tables. Its opposite, denormalisation, deliberately reintroduces redundancy to avoid expensive joins on read-heavy workloads.
+ Unicode normalisation: converting a string to one of a small number of canonical byte representations, since the same visible character can be encoded either as a single precomposed codepoint or as a base character followed by a combining mark. PHP performs this with ``Normalizer::normalize()`` from the ``intl`` extension, targeting one of the forms NFC, NFD, NFKC, or NFKD, so that two strings which look identical also compare and hash identically.
+ Input normalisation: the looser, everyday sense of bringing user-supplied or external data into one consistent format before it is stored or compared, such as trimming whitespace, folding case with ``strtoupper()``/``mb_strtolower()``, or collapsing different line-ending conventions to one.

Absent further context, ``normalisation`` in a database discussion means the first sense, and in a string-handling or internationalization discussion means the second.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/normalisation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/normalisation.html","name":"Normalisation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 20:18:51 +0000","dateModified":"Thu, 10 Sep 2026 20:18:51 +0000","description":"normalisation has several distinct usages in software design:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/normalisation.html"]}],"alternateName":["normalization"],"keywords":["disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/schema.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unicode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtoupper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strtolower.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mbstring.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/normalizer.normalize.php"},{"@type":"CreativeWork","name":"Normalizer::normalize - PHP Manual","url":"https:\/\/www.php.net\/manual\/en\/normalizer.normalize.php"},{"@type":"CreativeWork","name":"Database normalization - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Database_normalization"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"normalisation"}]}]}</script>
```php
<?php

    // Unicode normalisation: two byte-different, visually identical strings
    $precomposed = "\u{00C5}";        // 'Å', a single codepoint
    $decomposed  = "A\u{030A}";       // 'A' + combining ring above

    var_dump($precomposed === $decomposed); // false

    $a = Normalizer::normalize($precomposed, Normalizer::FORM_C);
    $b = Normalizer::normalize($decomposed, Normalizer::FORM_C);

    var_dump($a === $b); // true, once both are normalised to NFC

?>
```

**[Documentation](https://www.php.net/manual/en/normalizer.normalize.php)**
## See Also

+ [Normalizer::normalize - PHP Manual](https://www.php.net/manual/en/normalizer.normalize.php)
+ [Database normalization - Wikipedia](https://en.wikipedia.org/wiki/Database_normalization)

## Related

+ [Database](database.html)
+ [Schema](schema.html)
+ [Internationalization Functions](intl.html)
+ [Unicode](unicode.html)
+ [strtoupper()](strtoupper.html)
+ [strtolower()](strtolower.html)
+ [Multibyte String](mbstring.html)
