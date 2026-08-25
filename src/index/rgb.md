# RGB
``RGB`` is an additive color model in which a color is produced by combining three channels of light: red, green, and blue. Each channel usually holds an integer between 0 and 255, giving 16,777,216 possible colors.

PHP's ``gd`` extension works natively with RGB: ``imagecolorallocate()`` takes three integers, one per channel, and returns a color identifier that can then be used to draw on an image. RGB values are also commonly written in hexadecimal notation, ``#RRGGBB``, as used in CSS and HTML.

RGBA extends the model with a fourth, alpha channel, controlling transparency.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rgb.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rgb.html","name":"RGB","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:30:00 +0000","dateModified":"Tue, 18 Aug 2026 05:30:00 +0000","description":"RGB is an additive color model in which a color is produced by combining three channels of light: red, green, and blue","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rgb.html"]}],"alternateName":["rgb-color-model"],"keywords":["acronym","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hexadecimal-integer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/RGB_color_model"},{"@type":"CreativeWork","name":"HTML RGB and RGBA Colors","url":"https:\/\/www.w3schools.com\/html\/html_colors_rgb.asp"},{"@type":"CreativeWork","name":"Generate random RGB color code in PHP","url":"https:\/\/www.codespeedy.com\/generate-random-rgb-color-code-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rgb"}]}]}</script>
```php
<?php

    $image = imagecreatetruecolor(100, 100);
    $red = imagecolorallocate($image, 255, 0, 0);
    imagefill($image, 0, 0, $red);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/RGB_color_model)**
## See Also

+ [HTML RGB and RGBA Colors](https://www.w3schools.com/html/html_colors_rgb.asp)
+ [Generate random RGB color code in PHP](https://www.codespeedy.com/generate-random-rgb-color-code-in-php/)

## Related

+ [Graphic Draw (GD)](gd.html)
+ [Hexadecimal Integer](hexadecimal-integer.html)
