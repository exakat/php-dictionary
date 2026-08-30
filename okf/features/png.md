---
type: "acronym"
title: "PNG"
description: "PNG, the Portable Network Graphics format, is a lossless raster image format that supports transparency through an alpha channel."
resource: "https://www.php.net/manual/en/function.imagepng.php"
tags: ["image", "format", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PNG

PNG, the Portable Network Graphics format, is a lossless raster image format that supports transparency through an alpha channel. It was designed as an improved, patent-free replacement for GIF.

PNG uses DEFLATE compression, which is lossless: no image data is discarded during compression. This makes PNG ideal for images with sharp edges, text, icons, and screenshots, but less efficient than JPEG for photographs.

PHP's GD extension handles PNG images with functions such as ``imagecreatefrompng()``, ``imagepng()``, and ``imagecolortransparent()``. ``imagepng()`` accepts an optional compression level from 0, no compression, to 9, maximum compression.

The Imagick extension provides additional PNG manipulation capabilities using ImageMagick.

```php
<?php

$image = imagecreatefrompng('input.png');

// Add a watermark or transform...

imagepng($image, 'output.png', 6); // Compression level 6
imagedestroy($image);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.imagepng.php](https://www.php.net/manual/en/function.imagepng.php)

## See Also
- [How to generate an image: using PHP GD Library. (part 1)](https://medium.com/@emmykolic/how-to-generate-an-image-using-php-gd-library-part-1-22042a9b09d1)

## Related
- [GIF](/features/gif.md)
- [JPEG](/features/jpg.md)
- [Image](/features/image.md)
- [Graphic Draw (GD)](/features/gd.md)
- [imagick](/features/imagick.md)
- [PDF](/features/pdf.md)

## Details
- Extension: ext-imagick
- Extension: ext-gd

