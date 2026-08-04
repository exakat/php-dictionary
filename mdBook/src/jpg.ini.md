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

Related : [GIF](GIF), [PNG](PNG), [Image](Image), [Graphic Draw (GD)](Graphic Draw (GD)), [PDF](PDF)
