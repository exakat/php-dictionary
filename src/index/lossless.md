# Lossless
Lossless refers to any encoding, compression, or conversion process that preserves all of the original data exactly. After a lossless operation, the original content can be reconstructed bit-for-bit from the encoded form.

In image processing, lossless formats such as PNG and GIF use lossless compression: every pixel is preserved and no image quality is sacrificed to reduce file size. Lossless compression is suited to images with sharp edges, text, icons, and screenshots, where artefacts introduced by lossy compression would be visible.

In data serialisation and encoding, lossless round-trips guarantee that encoding then decoding returns the original input, with no data truncated or altered.

PHP's GD extension produces lossless output with ``imagepng()`` and ``imagegif()``. The compression level passed to ``imagepng()`` affects file size but not image fidelity.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lossless.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lossless.html","name":"Lossless","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 04:18:41 +0000","dateModified":"Wed, 12 Aug 2026 04:18:41 +0000","description":"Lossless refers to any encoding, compression, or conversion process that preserves all of the original data exactly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Lossless.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lossless"}]}]}</script>
```php
<?php

// PNG is lossless: every pixel survives the encode/decode cycle
$image = imagecreatefrompng('original.png');
imagepng($image, 'copy.png', 6); // level 6 compression, still lossless
imagedestroy($image);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Lossless_compression)**
## See Also

+ [What Is Lossless Audio?](https://www.howtogeek.com/744383/what-is-lossless-audio/)

## Related

+ [Lossy](lossy.html)
+ [Compression](compression.html)
+ [PNG](png.html)
+ [GIF](gif.html)
+ [Image](image.html)
+ [Encode](encode.html)
+ [Decode](decode.html)
