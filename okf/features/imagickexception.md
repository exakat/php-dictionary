---
type: "exception"
title: "ImagickException"
description: "The ``ImagickException`` exception is thrown when an error happens while processing an ``Imagick`` operation."
resource: "https://www.php.net/manual/en/book.imagick.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ImagickException

The ``ImagickException`` exception is thrown when an error happens while processing an ``Imagick`` operation. Any of the Imagick functions may throw that exception.

```php
<?php

try {
    $imagick->gammaImage($correction, \Imagick::CHANNEL_ALL);
} catch (\ImagickException $e) {
    throw new RuntimeException('Failed to apply gamma correction to the image');
}

?>
```

## Documentation
- [https://www.php.net/manual/en/book.imagick.php](https://www.php.net/manual/en/book.imagick.php)

## See Also
- [How to Fix 'ImagickException: not authorized'](https://andy-carter.com/blog/how-to-fix-imagickexception-not-authorized)

## Related
- [Exception](/features/exception.md)
- [imagick](/features/imagick.md)
- [ImagickPixelException](/features/imagickpixelexception.md)

