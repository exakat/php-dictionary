# Scalable Vector Graphics (SVG)
SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics. Unlike raster formats, like PNG, JPEG, SVG graphics scale to any size without loss of quality because they are described mathematically rather than as a grid of pixels.

SVG files can be embedded directly in HTML, served as standalone files, or generated programmatically. PHP can produce SVG output by writing XML strings or by using the DOM extension to build the SVG document tree.

SVG is widely used for icons, charts, diagrams, logos, and any graphic that must look sharp on high-density screens.
```php
<?php

    header('Content-Type: image/svg+xml');

    echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100">';
    echo '<circle cx="50" cy="50" r="40" fill="steelblue" />';
    echo '</svg>';

?>
```

## See Also

+ [SVG Tutorial](https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial)
+ [SVG specification](https://www.w3.org/TR/SVG2/)
+ [Beware SVG! It’s not just a scalable graphic](https://medium.com/sse-blog/beware-svg-its-not-just-a-scalable-graphic-9a2e9f3df6ef)

Related : [Extensible Markup Language (XML)](Extensible Markup Language (XML)), [HyperText Markup Language (HTML)](HyperText Markup Language (HTML)), [Document Object Model (DOM)](Document Object Model (DOM)), [Image](Image), [Injection](Injection)
