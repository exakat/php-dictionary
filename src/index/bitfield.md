# Bitfield
A bitfield is a data structure that packs multiple related boolean flags or small integers into a single integer or sequence of bits, where each bit or group of bits represents a distinct value or state.

Bitfields are stored as integers. They may be specified with the binary integer notation, which makes the individual bits visible.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitfield.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitfield.html","name":"Bitfield","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:25:56 +0000","dateModified":"Wed, 19 Aug 2026 08:25:56 +0000","description":"A bitfield is a data structure that packs multiple related boolean flags or small integers into a single integer or sequence of bits, where each bit or group of bits represents a distinct value or state","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitfield.html"]}],"keywords":["data structure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitmask.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitwise-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-combinaison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/integer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Bit_field"},{"@type":"CreativeWork","name":"How to use bitmasks in PHP","url":"https:\/\/medium.com\/codex\/how-to-use-bitmasks-in-php-a594be597fd3"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bitfield"}]}]}</script>
```php
<?php

    $bitfield = 0b111; // 7

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Bit_field)**
## See Also

+ [How to use bitmasks in PHP](https://medium.com/codex/how-to-use-bitmasks-in-php-a594be597fd3)

## Related

+ [Bitmask](bitmask.html)
+ [Bitwise Operators](bitwise-operator.html)
+ [Constant Combination](constant-combinaison.html)
+ [integer](integer.html)

## Related packages

+ [thesmart/bitfield](https://packagist.org/packages/thesmart/bitfield)
