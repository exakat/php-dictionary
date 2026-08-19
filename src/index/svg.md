# Scalable Vector Graphics (SVG)
SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics. Unlike raster formats, such as PNG or JPEG, SVG graphics scale to any size without loss of quality because they are described mathematically rather than as a grid of pixels.

SVG files can be embedded directly in HTML, served as standalone files, or generated programmatically. PHP can produce SVG output by writing XML strings or by using the DOM extension to build the SVG document tree.

SVG is widely used for icons, charts, diagrams, logos, and any graphic that must look sharp on high-density screens.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/svg.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/svg.html","name":"Scalable Vector Graphics (SVG)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:39 +0000","dateModified":"Wed, 19 Aug 2026 06:48:39 +0000","description":"SVG, for Scalable Vector Graphics, is an XML-based format for two-dimensional vector graphics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Scalable Vector Graphics (SVG).html"]}],"keywords":["concept","web","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dom.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/image.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/injection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/SVG"},{"@type":"CreativeWork","name":"SVG Tutorial","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Web\/SVG\/Tutorial"},{"@type":"CreativeWork","name":"SVG specification","url":"https:\/\/www.w3.org\/TR\/SVG2\/"},{"@type":"CreativeWork","name":"Beware SVG! It\u2019s not just a scalable graphic","url":"https:\/\/medium.com\/sse-blog\/beware-svg-its-not-just-a-scalable-graphic-9a2e9f3df6ef"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"svg"}]}]}</script>
```php
<?php

    header('Content-Type: image/svg+xml');

    echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100">';
    echo '<circle cx="50" cy="50" r="40" fill="steelblue" />';
    echo '</svg>';

?>
```

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/SVG)**
## See Also

+ [SVG Tutorial](https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial)
+ [SVG specification](https://www.w3.org/TR/SVG2/)
+ [Beware SVG! It’s not just a scalable graphic](https://medium.com/sse-blog/beware-svg-its-not-just-a-scalable-graphic-9a2e9f3df6ef)

## Related

+ [Extensible Markup Language (XML)](xml.html)
+ [HyperText Markup Language (HTML)](html.html)
+ [Document Object Model (DOM)](dom.html)
+ [Image](image.html)
+ [Injection](injection.html)
