---
type: "exception"
title: "ImagickPixelException"
description: "``ImagickPixelException`` is an exception class that is used to handle exceptions related to problems with ``ImagickPixel`` objects."
resource: "https://www.php.net/manual/en/imagickpixel.construct.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ImagickPixelException

``ImagickPixelException`` is an exception class that is used to handle exceptions related to problems with ``ImagickPixel`` objects.

``ImagickPixelException`` happens when using invalid color specification.

``ImagickPixelException`` is related to the ``Imagick`` extension.

```php
<?php

    try {
        // valid creation
        new ImagickPixel("LightCoral");
        
        // invalid creation
        new ImagickPixel("LightCorral");
    } catch (ImagickPixelException $e) {
        log("Error while creating a pixel");
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/imagickpixel.construct.php](https://www.php.net/manual/en/imagickpixel.construct.php)

## See Also
- [ImagickException](https://www.php.net/manual/en/class.imagickexception.php)
- [Exception handling (Wikipedia)](https://en.wikipedia.org/wiki/Exception_handling)

## Related
- [Exception](/features/exception.md)
- [imagick](/features/imagick.md)
- [ImagickException](/features/imagickexception.md)

## Details
- Extension: ext-imagick

