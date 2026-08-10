# Lossy
Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation. Once a lossy operation has been applied, the discarded data cannot be recovered.

In image processing, lossy formats such as JPEG and WebP reduce file size by approximating colour information and discarding fine detail that the human eye is less sensitive to. Higher compression levels increase the degree of loss, introducing visible artefacts such as blocking and ringing. Lossy compression is well suited to photographs where a small quality reduction is imperceptible.

Repeated encode/decode cycles with a lossy format degrade quality cumulatively, because each cycle discards additional data.

PHP's GD extension produces lossy output with ``imagejpeg()``. The optional quality parameter, 0–100, controls the trade-off between file size and fidelity.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lossy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lossy.html","name":"Lossy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:43:15 +0000","dateModified":"Thu, 23 Jul 2026 13:43:15 +0000","description":"Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Lossy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Lossy"}]}]}</script>
```php
<?php

    // JPEG is lossy: quality 60 discards more data than quality 90
    $image = imagecreatefromjpeg('photo.jpg');
    imagejpeg($image, 'compressed.jpg', 60);
    imagedestroy($image);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Lossy_compression)**
## Related

+ [Lossless](lossless.html)
+ [Compression](compression.html)
+ [JPEG](jpg.html)
+ [Image](image.html)
+ [Encode](encode.html)
+ [Decode](decode.html)
