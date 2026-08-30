---
type: "extension"
title: "imagick"
description: "``imagick`` is the native PHP extension to create and modify images using the ``ImageMagick`` library."
resource: "https://www.php.net/manual/en/imagick.cropimage.php"
tags: ["extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# imagick

``imagick`` is the native PHP extension to create and modify images using the ``ImageMagick`` library.

``imagick`` is also known by the name ``Image Magick``. It is able to convert between various formats, to edit, combine and optimize images.

```php
<?php

    $imagick = new Imagick($imagePath);
    
    $imagick->resizeImage($width, $height, Imagick::FILTER_TRIANGLE , 0);
    
    $width = $imagick->getImageWidth();
    $height = $imagick->getImageHeight();
    
    $newWidth = $width / 2;
    $newHeight = $height / 2;
    
    // crop image to half the middle of the image
    $imagick->cropimage(
        $newWidth,
        $newHeight,
        ($width - $newWidth) / 2,
        ($height - $newHeight) / 2
    );
    
    // resize the picture to bigger size (4 times)
    $imagick->scaleimage(
        $imagick->getImageWidth() * 4,
        $imagick->getImageHeight() * 4
    );
    
    // write the image to disk
    $imagick->writeImage($imagePath.'.2');

?>
```

## Documentation
- [https://www.php.net/manual/en/imagick.cropimage.php](https://www.php.net/manual/en/imagick.cropimage.php)

## See Also
- [PHP Imagick by Example](https://phpimagick.com/)
- [Installing Imagick for PHP on AWS EC2: Everything You Need to Know](https://www.jeeviacademy.com/installing-imagick-for-php-on-aws-ec2-everything-you-need-to-know/)

## Related
- [Graphic Draw (GD)](/features/gd.md)
- [ImagickException](/features/imagickexception.md)
- [ImagickPixelException](/features/imagickpixelexception.md)
- [PNG](/features/png.md)

## Details
- Extension: ext-imagic

