# Lossless
Lossless refers to any encoding, compression, or conversion process that preserves all of the original data exactly. After a lossless operation, the original content can be reconstructed bit-for-bit from the encoded form.

In image processing, lossless formats such as PNG and GIF use lossless compression: every pixel is preserved and no image quality is sacrificed to reduce file size. Lossless compression is suited to images with sharp edges, text, icons, and screenshots, where artefacts introduced by lossy compression would be visible.

In data serialisation and encoding, lossless round-trips guarantee that encoding then decoding returns the original input, with no data truncated or altered.

PHP's GD extension produces lossless output with ``imagepng()`` and ``imagegif()``. The compression level passed to ``imagepng()`` affects file size but not image fidelity.
```php
<?php

// PNG is lossless: every pixel survives the encode/decode cycle
$image = imagecreatefrompng('original.png');
imagepng($image, 'copy.png', 6); // level 6 compression, still lossless
imagedestroy($image);

?>
```

Related : [Lossy](Lossy), [Compression](Compression), [PNG](PNG), [GIF](GIF), [Image](Image), [Encode](Encode), [Decode](Decode)
