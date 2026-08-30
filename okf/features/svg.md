---
type: "concept"
title: "Scalable Vector Graphics (SVG)"
description: "SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics."
resource: "https://developer.mozilla.org/en-US/docs/Web/SVG"
tags: ["concept", "web", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Scalable Vector Graphics (SVG)

SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics. Unlike raster formats, such as PNG or JPEG, SVG graphics scale to any size without loss of quality because they are described mathematically rather than as a grid of pixels.

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

## Documentation
- [https://developer.mozilla.org/en-US/docs/Web/SVG](https://developer.mozilla.org/en-US/docs/Web/SVG)

## See Also
- [SVG Tutorial](https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial)
- [SVG specification](https://www.w3.org/TR/SVG2/)
- [Beware SVG! It’s not just a scalable graphic](https://medium.com/sse-blog/beware-svg-its-not-just-a-scalable-graphic-9a2e9f3df6ef)

## Related
- [Extensible Markup Language (XML)](/features/xml.md)
- [HyperText Markup Language (HTML)](/features/html.md)
- [Document Object Model (DOM)](/features/dom.md)
- [Image](/features/image.md)
- [Injection](/features/injection.md)

