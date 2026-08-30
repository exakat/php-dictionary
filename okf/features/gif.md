---
type: "acronym"
title: "GIF"
description: "GIF, for Graphics Interchange Format, is a bitmap image format developed by CompuServe in 1987."
resource: "https://www.php.net/manual/en/function.imagegif.php"
tags: ["image", "format", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# GIF

GIF, for Graphics Interchange Format, is a bitmap image format developed by CompuServe in 1987. It supports up to 256 colors per frame and uses lossless compression based on the LZW algorithm.

GIF is widely known for supporting animation through multiple frames stored in a single file.

The GD extension can create and manipulate GIF images using functions such as ``imagecreatefromgif()``, ``imagegif()``, and ``imagecreatetruecolor()``.

```php
<?php

    $image = imagecreatefromgif('input.gif');
    
    // Manipulate...
    
    imagegif($image, 'output.gif');
    imagedestroy($image);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.imagegif.php](https://www.php.net/manual/en/function.imagegif.php)

## See Also
- [An Introduction to the PHP GD Graphics Library](https://reintech.io/blog/introduction-php-gd-graphics-library)
- [PHP and GD Library: Creating and Manipulating Images](https://reintech.io/blog/php-gd-library-creating-manipulating-images)

## Related
- [JPEG](/features/jpg.md)
- [PNG](/features/png.md)
- [Image](/features/image.md)
- [Graphic Draw (GD)](/features/gd.md)

## Details
- Extension: ext-gd

