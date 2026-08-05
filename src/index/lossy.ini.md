# Lossy
Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation. Once a lossy operation has been applied, the discarded data cannot be recovered.

In image processing, lossy formats such as JPEG and WebP reduce file size by approximating colour information and discarding fine detail that the human eye is less sensitive to. Higher compression levels increase the degree of loss, introducing visible artefacts such as blocking and ringing. Lossy compression is well suited to photographs where a small quality reduction is imperceptible.

Repeated encode/decode cycles with a lossy format degrade quality cumulatively, because each cycle discards additional data.

PHP's GD extension produces lossy output with ``imagejpeg()``. The optional quality parameter, 0–100, controls the trade-off between file size and fidelity.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lossy.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lossy.ini.html","name":"Lossy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:43:15 +0000","dateModified":"Thu, 23 Jul 2026 13:43:15 +0000","description":"Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Lossy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Lossless](lossless.ini.html)
+ [Compression](compression.ini.html)
+ [JPEG](jpg.ini.html)
+ [Image](image.ini.html)
+ [Encode](encode.ini.html)
+ [Decode](decode.ini.html)
