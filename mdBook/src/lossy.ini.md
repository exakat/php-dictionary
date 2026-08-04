# Lossy
Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation. Once a lossy operation has been applied, the discarded data cannot be recovered.

In image processing, lossy formats such as JPEG and WebP reduce file size by approximating colour information and discarding fine detail that the human eye is less sensitive to. Higher compression levels increase the degree of loss, introducing visible artefacts such as blocking and ringing. Lossy compression is well suited to photographs where a small quality reduction is imperceptible.

Repeated encode/decode cycles with a lossy format degrade quality cumulatively, because each cycle discards additional data.

PHP's GD extension produces lossy output with ``imagejpeg()``. The optional quality parameter, 0–100, controls the trade-off between file size and fidelity.
```php
<?php

    // JPEG is lossy: quality 60 discards more data than quality 90
    $image = imagecreatefromjpeg('photo.jpg');
    imagejpeg($image, 'compressed.jpg', 60);
    imagedestroy($image);

?>
```

Related : [Lossless](Lossless), [Compression](Compression), [JPEG](JPEG), [Image](Image), [Encode](Encode), [Decode](Decode)
