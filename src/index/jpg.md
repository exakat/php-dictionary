# JPEG
JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images. It is identified by the file extensions ``.jpg`` and ``.jpeg``.

JPEG compression reduces file size by discarding some image data, making it suitable for photographs but less ideal for images with sharp edges or text.

PHP's GD extension handles JPEG images with functions such as ``imagecreatefromjpeg()``, ``imagejpeg()``, and ``imagecolorat()``. ``imagejpeg()`` accepts an optional quality parameter from 0 to 100.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jpg.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jpg.html","name":"JPEG","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/JPEG.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$image = imagecreatefromjpeg('input.jpg');

// Resize or manipulate...

imagejpeg($image, 'output.jpg', 85); // Save at quality 85
imagedestroy($image);

?>
```

**[Documentation](https://www.php.net/manual/en/function.imagejpeg.php)**
## Related

+ [GIF](gif.ini.html)
+ [PNG](png.ini.html)
+ [Image](image.ini.html)
+ [Graphic Draw (GD)](gd.ini.html)
+ [PDF](pdf.ini.html)
