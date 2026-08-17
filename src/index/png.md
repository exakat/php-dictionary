# PNG
PNG, the Portable Network Graphics format, is a lossless raster image format that supports transparency through an alpha channel. It was designed as an improved, patent-free replacement for GIF.

PNG uses DEFLATE compression, which is lossless: no image data is discarded during compression. This makes PNG ideal for images with sharp edges, text, icons, and screenshots, but less efficient than JPEG for photographs.

PHP's GD extension handles PNG images with functions such as ``imagecreatefrompng()``, ``imagepng()``, and ``imagecolortransparent()``. ``imagepng()`` accepts an optional compression level from 0, no compression, to 9, maximum compression.

The Imagick extension provides additional PNG manipulation capabilities using ImageMagick.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/png.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/png.html","name":"PNG","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PNG, the Portable Network Graphics format, is a lossless raster image format that supports transparency through an alpha channel","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PNG.html"]}],"alternateName":["portable-network-graphics"],"keywords":["image","format","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gif.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jpg.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/image.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagick.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdf.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.imagepng.php"},{"@type":"CreativeWork","name":"How to generate an image: using PHP GD Library. (part 1)","url":"https:\/\/medium.com\/@emmykolic\/how-to-generate-an-image-using-php-gd-library-part-1-22042a9b09d1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"png"}]}]}</script>
```php
<?php

$image = imagecreatefrompng('input.png');

// Add a watermark or transform...

imagepng($image, 'output.png', 6); // Compression level 6
imagedestroy($image);

?>
```

**[Documentation](https://www.php.net/manual/en/function.imagepng.php)**
## See Also

+ [How to generate an image: using PHP GD Library. (part 1)](https://medium.com/@emmykolic/how-to-generate-an-image-using-php-gd-library-part-1-22042a9b09d1)

## Related

+ [GIF](gif.html)
+ [JPEG](jpg.html)
+ [Image](image.html)
+ [Graphic Draw (GD)](gd.html)
+ [imagick](imagick.html)
+ [PDF](pdf.html)
