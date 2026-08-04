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

Related : [JPEG](JPEG), [PNG](PNG), [Image](Image), [Graphic Draw (GD)](Graphic Draw (GD))
