# JPEG
JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images. It is identified by the file extensions ``.jpg`` and ``.jpeg``.

JPEG compression reduces file size by discarding some image data, making it suitable for photographs but less ideal for images with sharp edges or text.

PHP's GD extension handles JPEG images with functions such as ``imagecreatefromjpeg()``, ``imagejpeg()``, and ``imagecolorat()``. ``imagejpeg()`` accepts an optional quality parameter from 0 to 100.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jpg.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jpg.html","name":"JPEG","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:26:32 +0000","dateModified":"Sat, 15 Aug 2026 08:26:32 +0000","description":"JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/JPEG.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"jpg"}]}]}</script>
```php
<?php

$image = imagecreatefromjpeg('input.jpg');

// Resize or manipulate...

imagejpeg($image, 'output.jpg', 85); // Save at quality 85
imagedestroy($image);

?>
```

**[Documentation](https://www.php.net/manual/en/function.imagejpeg.php)**
## See Also

+ [JPEG (Wikipedia)](https://en.wikipedia.org/wiki/JPEG)
+ [GD and Image Functions](https://www.php.net/manual/en/book.image.php)

## Related

+ [GIF](gif.html)
+ [PNG](png.html)
+ [Image](image.html)
+ [Graphic Draw (GD)](gd.html)
+ [PDF](pdf.html)
