# ImagickException
The ``ImagickException`` exception is thrown when an error happens while processing an ``Imagick`` operation. Any of the imagick functions may throw that exception.
```php
<?php

try {
    $imagick->gammaImage($correction, \Imagick::CHANNEL_ALL);
} catch (\ImagickException $e) {
    throw new RuntimeException('Failed to apply gamma correction to the image');
}

?>
```

## See Also

+ [How to Fix 'ImagickException: not authorized'](https://andy-carter.com/blog/how-to-fix-imagickexception-not-authorized)

Related : [Exception](Exception), [imagick](imagick), [ImagickPixelException](ImagickPixelException)
