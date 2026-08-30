---
type: "acronym"
title: "JPEG"
description: "JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images."
resource: "https://www.php.net/manual/en/function.imagejpeg.php"
tags: ["image", "format", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# JPEG

JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images. It is identified by the file extensions ``.jpg`` and ``.jpeg``.

JPEG compression reduces file size by discarding some image data, making it suitable for photographs but less ideal for images with sharp edges or text.

PHP's GD extension handles JPEG images with functions such as ``imagecreatefromjpeg()``, ``imagejpeg()``, and ``imagecolorat()``. ``imagejpeg()`` accepts an optional quality parameter from 0 to 100.

```php
<?php

$image = imagecreatefromjpeg('input.jpg');

// Resize or manipulate...

imagejpeg($image, 'output.jpg', 85); // Save at quality 85
imagedestroy($image);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.imagejpeg.php](https://www.php.net/manual/en/function.imagejpeg.php)

## See Also
- [JPEG (Wikipedia)](https://en.wikipedia.org/wiki/JPEG)
- [GD and Image Functions](https://www.php.net/manual/en/book.image.php)

## Related
- [GIF](/features/gif.md)
- [PNG](/features/png.md)
- [Image](/features/image.md)
- [Graphic Draw (GD)](/features/gd.md)
- [PDF](/features/pdf.md)

## Details
- Extension: ext-gd

