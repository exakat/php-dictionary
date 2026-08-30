---
type: "acronym"
title: "RGB"
description: "``RGB`` is an additive color model in which a color is produced by combining three channels of light: red, green, and blue."
resource: "https://en.wikipedia.org/wiki/RGB_color_model"
tags: ["acronym", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# RGB

``RGB`` is an additive color model in which a color is produced by combining three channels of light: red, green, and blue. Each channel usually holds an integer between 0 and 255, giving 16,777,216 possible colors.

PHP's ``gd`` extension works natively with RGB: ``imagecolorallocate()`` takes three integers, one per channel, and returns a color identifier that can then be used to draw on an image. RGB values are also commonly written in hexadecimal notation, ``#RRGGBB``, as used in CSS and HTML.

RGBA extends the model with a fourth, alpha channel, controlling transparency.

```php
<?php

    $image = imagecreatetruecolor(100, 100);
    $red = imagecolorallocate($image, 255, 0, 0);
    imagefill($image, 0, 0, $red);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/RGB_color_model](https://en.wikipedia.org/wiki/RGB_color_model)

## See Also
- [HTML RGB and RGBA Colors](https://www.w3schools.com/html/html_colors_rgb.asp)
- [Generate random RGB color code in PHP](https://www.codespeedy.com/generate-random-rgb-color-code-in-php/)

## Related
- [Graphic Draw (GD)](/features/gd.md)
- [Hexadecimal Integer](/features/hexadecimal-integer.md)

## Details
- Extension: ext-gd
- Extension: ext-imagick

