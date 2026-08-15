# imagick
``imagick`` is the native PHP extension to create and modify images using the ``ImageMagick`` library.

``imagick`` is also known by the name ``Image Magick``. It is able to convert between various formats, to edit, combine and optimize images.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagick.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagick.html","name":"imagick","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 07:52:09 +0000","dateModified":"Fri, 14 Aug 2026 07:52:09 +0000","description":"imagick is the native PHP extension to create and modify images using the ImageMagick library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imagick.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"imagick"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/imagick.cropimage.php)**
## See Also

+ [PHP Imagick by Example](https://phpimagick.com/)
+ [Installing Imagick for PHP on AWS EC2: Everything You Need to Know](https://www.jeeviacademy.com/installing-imagick-for-php-on-aws-ec2-everything-you-need-to-know/)

## Related

+ [Graphic Draw (GD)](gd.html)
+ [ImagickException](imagickexception.html)
+ [ImagickPixelException](imagickpixelexception.html)
+ [PNG](png.html)
