# EXIF (Exchangeable Image File Format)
EXIF is a standard for storing metadata in image files, particularly JPEG and TIFF. It embeds information such as camera settings, date and time, GPS coordinates, orientation, thumbnail images, and other technical details captured by cameras and smartphones.

PHP provides the ``exif`` extension, which offers functions to read and write EXIF data from image files. This is commonly used for:

+ Retrieving camera make and model
+ Reading image orientation for automatic rotation
+ Extracting GPS coordinates for geotagging
+ Accessing date/time the photo was taken
+ Reading thumbnail images embedded in EXIF data

The EXIF data is stored in the file header and does not affect image quality. It is a subset of the TIFF format and is defined by the JEIDA standard, the Japan Electronic Industry Development Association.

Common EXIF functions include ``exif_read_data()``, ``exif_imagetype()``, ``exif_thumbnail()``, and ``exif_process_raw_data()``. Note that EXIF data may contain sensitive information such as GPS location, which should be considered for privacy.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exif.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exif.html","name":"EXIF (Exchangeable Image File Format)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:43:38 +0000","dateModified":"Tue, 14 Jul 2026 05:43:38 +0000","description":"EXIF is a standard for storing metadata in image files, particularly JPEG and TIFF","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/EXIF (Exchangeable Image File Format).html"]}],"alternateName":["exif-data"],"keywords":["extension","metadata","image","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagick.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/image.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metadata.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/privacy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/steganography.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encoding-text.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.exif.php"},{"@type":"CreativeWork","name":"PHP EXIF functions","url":"https:\/\/www.php.net\/manual\/en\/ref.exif.php"},{"@type":"CreativeWork","name":"EXIF standard","url":"https:\/\/en.wikipedia.org\/wiki\/Exchangeable_image_file_format"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"exif"}]}]}</script>
```php
<?php

    // Reading EXIF data from an image
    $exif = exif_read_data('photo.jpg', 'COMPUTED', true);
    if ($exif !== false) {
        echo 'Camera: ' . $exif['Make'] . ' ' . $exif['Model'] . "\n";
        echo 'Date: ' . $exif['DateTimeOriginal'] . "\n";
        echo 'Width: ' . $exif['COMPUTED']['Width'] . "\n";
        echo 'Height: ' . $exif['COMPUTED']['Height'] . "\n";
    }

    // Check image type by EXIF data
    $type = exif_imagetype('photo.jpg');
    if ($type === IMAGETYPE_JPEG) {
        echo 'This is a JPEG image';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/book.exif.php)**
## See Also

+ [PHP EXIF functions](https://www.php.net/manual/en/ref.exif.php)
+ [EXIF standard](https://en.wikipedia.org/wiki/Exchangeable_image_file_format)

## Related

+ [Graphic Draw (GD)](gd.html)
+ [imagick](imagick.html)
+ [File](file.html)
+ [Image](image.html)
+ [Metadata](metadata.html)
+ [Privacy](privacy.html)
+ [Steganography](steganography.html)
+ [Security](security.html)
+ [Text Encoding](encoding-text.html)
